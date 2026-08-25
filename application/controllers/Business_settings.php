<?php defined('BASEPATH') or exit('No direct script access allowed');

class Business_settings extends EA_Controller
{
    public array $allowed_setting_fields = ['id', 'id_user', 'name', 'value'];

    public array $optional_setting_fields = [
        //
    ];

    public function __construct()
    {
        parent::__construct();

        $this->load->model('appointments_model');
        $this->load->model('customers_model');
        $this->load->model('services_model');
        $this->load->model('providers_model');
        $this->load->model('roles_model');
        $this->load->model('settings_model');

        $this->load->library('accounts');
        $this->load->library('google_sync');
        $this->load->library('notifications');
        $this->load->library('synchronization');
        $this->load->library('timezones');
    }

    /**
     * Render the settings page.
     */
    public function index(): void
    {
        method('get');

        session(['dest_url' => site_url('business_settings')]);

        $user_id = session('user_id');

        if (cannot('view', PRIV_SYSTEM_SETTINGS)) {
            if ($user_id) {
                abort(403, 'Forbidden');
            }

            redirect('login');

            return;
        }

        $role_slug = session('role_slug');

        // Fetch settings filtered or associated with the current user if needed, 
        // or pass user specific configurations.
        $user_settings = $this->settings_model->query()->where('id_user', $user_id)->get()->result_array();
        if (empty($user_settings)) {
            // Fallback to global or default settings if user-specific settings don't exist yet
            $user_settings = $this->settings_model->get();
        }

        script_vars([
            'user_id' => $user_id,
            'role_slug' => $role_slug,
            'business_settings' => filter_sensitive_settings($user_settings),
            'first_weekday' => setting('first_weekday'),
            'time_format' => setting('time_format'),
        ]);

        html_vars([
            'page_title' => lang('settings'),
            'active_menu' => PRIV_SYSTEM_SETTINGS,
            'user_display_name' => $this->accounts->get_user_display_name($user_id),
        ]);

        $this->load->view('pages/business_settings');
    }

    /**
     * Save general settings with user ID mapping.
     */
    public function save(): void
    {
        try {
            method('post');

            if (cannot('edit', PRIV_SYSTEM_SETTINGS)) {
                throw new RuntimeException('You do not have the required permissions for this task.');
            }

            check('business_settings', 'array|null');

            $settings = request('business_settings', []);
            $user_id = session('user_id'); // Get current logged-in user id

            foreach ($settings as $setting) {
                // Check existing setting for this specific user
                $existing_setting = $this->settings_model->query()
                    ->where('name', $setting['name'])
                    ->where('id_user', $user_id)
                    ->get()
                    ->row_array();

                if (!empty($existing_setting)) {
                    $setting['id'] = $existing_setting['id'];
                } else {
                    // Unset ID if it belongs to a global or different user record so it creates a new entry for this user
                    unset($setting['id']);
                }

                // Assign the logged-in user's ID
                $setting['id_user'] = $user_id;

                $this->settings_model->only($setting, $this->allowed_setting_fields);
                $this->settings_model->optional($setting, $this->optional_setting_fields);

                $this->settings_model->save($setting);
            }

            response();
        } catch (Throwable $e) {
            json_exception($e);
        }
    }

    /**
     * Apply global working plan to all providers.
     */
    public function apply_global_working_plan(): void
    {
        try {
            method('post');

            if (cannot('edit', PRIV_SYSTEM_SETTINGS)) {
                throw new RuntimeException('You do not have the required permissions for this task.');
            }

            check('working_plan', 'json');

            $working_plan = request('working_plan');

            $providers = $this->providers_model->get();

            foreach ($providers as $provider) {
                $this->providers_model->set_setting($provider['id'], 'working_plan', $working_plan);
            }

            response();
        } catch (Throwable $e) {
            json_exception($e);
        }
    }
}
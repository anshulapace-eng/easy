<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2026-07-31 15:58:37 --> Severity: error --> Exception: Unclosed '(' /home/u533234621/domains/indiatag.com/public_html/test/one/application/views/components/appointments_modal.php 296 Trace: array (
  0 => 
  array (
    'file' => '/home/u533234621/domains/indiatag.com/public_html/test/one/system/core/Exceptions.php',
    'line' => 104,
    'function' => 'log_message',
    'args' => 
    array (
      0 => 'error',
      1 => 'Severity: error --> Exception: Unclosed \'(\' /home/u533234621/domains/indiatag.com/public_html/test/one/application/views/components/appointments_modal.php 296',
    ),
  ),
  1 => 
  array (
    'file' => '/home/u533234621/domains/indiatag.com/public_html/test/one/system/core/Common.php',
    'line' => 675,
    'function' => 'log_exception',
    'class' => 'CI_Exceptions',
    'type' => '->',
    'args' => 
    array (
      0 => 'error',
      1 => 'Exception: Unclosed \'(\'',
      2 => '/home/u533234621/domains/indiatag.com/public_html/test/one/application/views/components/appointments_modal.php',
      3 => 296,
    ),
  ),
  2 => 
  array (
    'function' => '_exception_handler',
    'args' => 
    array (
      0 => 
      \ParseError::__set_state(array(
         'message' => 'Unclosed \'(\'',
         'string' => '',
         'code' => 0,
         'file' => '/home/u533234621/domains/indiatag.com/public_html/test/one/application/views/components/appointments_modal.php',
         'line' => 296,
         'trace' => 
        array (
          0 => 
          array (
            'file' => '/home/u533234621/domains/indiatag.com/public_html/test/one/application/core/EA_Loader.php',
            'line' => 59,
            'function' => '_ci_load',
            'class' => 'CI_Loader',
            'type' => '->',
          ),
          1 => 
          array (
            'file' => '/home/u533234621/domains/indiatag.com/public_html/test/one/application/helpers/html_helper.php',
            'line' => 56,
            'function' => 'view',
            'class' => 'EA_Loader',
            'type' => '->',
          ),
          2 => 
          array (
            'file' => '/home/u533234621/domains/indiatag.com/public_html/test/one/application/views/pages/calendar.php',
            'line' => 829,
            'function' => 'component',
          ),
          3 => 
          array (
            'file' => '/home/u533234621/domains/indiatag.com/public_html/test/one/system/core/Loader.php',
            'line' => 977,
            'args' => 
            array (
              0 => '/home/u533234621/domains/indiatag.com/public_html/test/one/application/views/pages/calendar.php',
            ),
            'function' => 'include',
          ),
          4 => 
          array (
            'file' => '/home/u533234621/domains/indiatag.com/public_html/test/one/application/core/EA_Loader.php',
            'line' => 59,
            'function' => '_ci_load',
            'class' => 'CI_Loader',
            'type' => '->',
          ),
          5 => 
          array (
            'file' => '/home/u533234621/domains/indiatag.com/public_html/test/one/application/controllers/Calendar.php',
            'line' => 261,
            'function' => 'view',
            'class' => 'EA_Loader',
            'type' => '->',
          ),
          6 => 
          array (
            'file' => '/home/u533234621/domains/indiatag.com/public_html/test/one/system/core/CodeIgniter.php',
            'line' => 481,
            'function' => 'index',
            'class' => 'Calendar',
            'type' => '->',
          ),
          7 => 
          array (
            'file' => '/home/u533234621/domains/indiatag.com/public_html/test/one/index.php',
            'line' => 344,
            'args' => 
            array (
              0 => '/home/u533234621/domains/indiatag.com/public_html/test/one/system/core/CodeIgniter.php',
            ),
            'function' => 'require_once',
          ),
        ),
         'previous' => NULL,
      )),
    ),
  ),
)
ERROR - 2026-07-31 16:58:39 --> JSON exception: {"success":false,"message":"The provided phone number is already in use, please use a different one.","trace":"array (\n  0 => \n  array (\n    'file' => '\/home\/u533234621\/domains\/indiatag.com\/public_html\/test\/one\/application\/models\/Customers_model.php',\n    'line' => 65,\n    'function' => 'validate',\n    'class' => 'Customers_model',\n    'type' => '->',\n  ),\n  1 => \n  array (\n    'file' => '\/home\/u533234621\/domains\/indiatag.com\/public_html\/test\/one\/application\/controllers\/Calendar.php',\n    'line' => 309,\n    'function' => 'save',\n    'class' => 'Customers_model',\n    'type' => '->',\n  ),\n  2 => \n  array (\n    'file' => '\/home\/u533234621\/domains\/indiatag.com\/public_html\/test\/one\/system\/core\/CodeIgniter.php',\n    'line' => 481,\n    'function' => 'save_appointment',\n    'class' => 'Calendar',\n    'type' => '->',\n  ),\n  3 => \n  array (\n    'file' => '\/home\/u533234621\/domains\/indiatag.com\/public_html\/test\/one\/index.php',\n    'line' => 344,\n    'args' => \n    array (\n      0 => '\/home\/u533234621\/domains\/indiatag.com\/public_html\/test\/one\/system\/core\/CodeIgniter.php',\n    ),\n    'function' => 'require_once',\n  ),\n)"} Trace: array (
  0 => 
  array (
    'file' => '/home/u533234621/domains/indiatag.com/public_html/test/one/application/helpers/http_helper.php',
    'line' => 176,
    'function' => 'log_message',
    'args' => 
    array (
      0 => 'error',
      1 => 'JSON exception: {"success":false,"message":"The provided phone number is already in use, please use a different one.","trace":"array (\\n  0 => \\n  array (\\n    \'file\' => \'\\/home\\/u533234621\\/domains\\/indiatag.com\\/public_html\\/test\\/one\\/application\\/models\\/Customers_model.php\',\\n    \'line\' => 65,\\n    \'function\' => \'validate\',\\n    \'class\' => \'Customers_model\',\\n    \'type\' => \'->\',\\n  ),\\n  1 => \\n  array (\\n    \'file\' => \'\\/home\\/u533234621\\/domains\\/indiatag.com\\/public_html\\/test\\/one\\/application\\/controllers\\/Calendar.php\',\\n    \'line\' => 309,\\n    \'function\' => \'save\',\\n    \'class\' => \'Customers_model\',\\n    \'type\' => \'->\',\\n  ),\\n  2 => \\n  array (\\n    \'file\' => \'\\/home\\/u533234621\\/domains\\/indiatag.com\\/public_html\\/test\\/one\\/system\\/core\\/CodeIgniter.php\',\\n    \'line\' => 481,\\n    \'function\' => \'save_appointment\',\\n    \'class\' => \'Calendar\',\\n    \'type\' => \'->\',\\n  ),\\n  3 => \\n  array (\\n    \'file\' => \'\\/home\\/u533234621\\/domains\\/indiatag.com\\/public_html\\/test\\/one\\/index.php\',\\n    \'line\' => 344,\\n    \'args\' => \\n    array (\\n      0 => \'\\/home\\/u533234621\\/domains\\/indiatag.com\\/public_html\\/test\\/one\\/system\\/core\\/CodeIgniter.php\',\\n    ),\\n    \'function\' => \'require_once\',\\n  ),\\n)"}',
    ),
  ),
  1 => 
  array (
    'file' => '/home/u533234621/domains/indiatag.com/public_html/test/one/application/controllers/Calendar.php',
    'line' => 421,
    'function' => 'json_exception',
    'args' => 
    array (
      0 => 
      \InvalidArgumentException::__set_state(array(
         'message' => 'The provided phone number is already in use, please use a different one.',
         'string' => '',
         'code' => 0,
         'file' => '/home/u533234621/domains/indiatag.com/public_html/test/one/application/models/Customers_model.php',
         'line' => 211,
         'trace' => 
        array (
          0 => 
          array (
            'file' => '/home/u533234621/domains/indiatag.com/public_html/test/one/application/models/Customers_model.php',
            'line' => 65,
            'function' => 'validate',
            'class' => 'Customers_model',
            'type' => '->',
          ),
          1 => 
          array (
            'file' => '/home/u533234621/domains/indiatag.com/public_html/test/one/application/controllers/Calendar.php',
            'line' => 309,
            'function' => 'save',
            'class' => 'Customers_model',
            'type' => '->',
          ),
          2 => 
          array (
            'file' => '/home/u533234621/domains/indiatag.com/public_html/test/one/system/core/CodeIgniter.php',
            'line' => 481,
            'function' => 'save_appointment',
            'class' => 'Calendar',
            'type' => '->',
          ),
          3 => 
          array (
            'file' => '/home/u533234621/domains/indiatag.com/public_html/test/one/index.php',
            'line' => 344,
            'args' => 
            array (
              0 => '/home/u533234621/domains/indiatag.com/public_html/test/one/system/core/CodeIgniter.php',
            ),
            'function' => 'require_once',
          ),
        ),
         'previous' => NULL,
      )),
    ),
  ),
  2 => 
  array (
    'file' => '/home/u533234621/domains/indiatag.com/public_html/test/one/system/core/CodeIgniter.php',
    'line' => 481,
    'function' => 'save_appointment',
    'class' => 'Calendar',
    'type' => '->',
    'args' => 
    array (
    ),
  ),
)

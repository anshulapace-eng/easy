<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2026-08-13 11:45:22 --> Severity: error --> Exception: Unknown column 'id_user' in 'where clause' C:\xampp\htdocs\easy\system\database\drivers\mysqli\mysqli_driver.php 301 Trace: array (
  0 => 
  array (
    'file' => 'C:\\xampp\\htdocs\\easy\\system\\core\\Exceptions.php',
    'line' => 104,
    'function' => 'log_message',
    'args' => 
    array (
      0 => 'error',
      1 => 'Severity: error --> Exception: Unknown column \'id_user\' in \'where clause\' C:\\xampp\\htdocs\\easy\\system\\database\\drivers\\mysqli\\mysqli_driver.php 301',
    ),
  ),
  1 => 
  array (
    'file' => 'C:\\xampp\\htdocs\\easy\\system\\core\\Common.php',
    'line' => 675,
    'function' => 'log_exception',
    'class' => 'CI_Exceptions',
    'type' => '->',
    'args' => 
    array (
      0 => 'error',
      1 => 'Exception: Unknown column \'id_user\' in \'where clause\'',
      2 => 'C:\\xampp\\htdocs\\easy\\system\\database\\drivers\\mysqli\\mysqli_driver.php',
      3 => 301,
    ),
  ),
  2 => 
  array (
    'function' => '_exception_handler',
    'args' => 
    array (
      0 => 
      \mysqli_sql_exception::__set_state(array(
         'message' => 'Unknown column \'id_user\' in \'where clause\'',
         'string' => '',
         'code' => 1054,
         'file' => 'C:\\xampp\\htdocs\\easy\\system\\database\\drivers\\mysqli\\mysqli_driver.php',
         'line' => 301,
         'trace' => 
        array (
          0 => 
          array (
            'file' => 'C:\\xampp\\htdocs\\easy\\system\\database\\drivers\\mysqli\\mysqli_driver.php',
            'line' => 301,
            'function' => 'query',
            'class' => 'mysqli',
            'type' => '->',
            'args' => 
            array (
              0 => 'SELECT *
FROM `ea_settings`
WHERE `id_user` = 1',
            ),
          ),
          1 => 
          array (
            'file' => 'C:\\xampp\\htdocs\\easy\\system\\database\\DB_driver.php',
            'line' => 746,
            'function' => '_execute',
            'class' => 'CI_DB_mysqli_driver',
            'type' => '->',
            'args' => 
            array (
              0 => 'SELECT *
FROM `ea_settings`
WHERE `id_user` = 1',
            ),
          ),
          2 => 
          array (
            'file' => 'C:\\xampp\\htdocs\\easy\\system\\database\\DB_driver.php',
            'line' => 636,
            'function' => 'simple_query',
            'class' => 'CI_DB_driver',
            'type' => '->',
            'args' => 
            array (
              0 => 'SELECT *
FROM `ea_settings`
WHERE `id_user` = 1',
            ),
          ),
          3 => 
          array (
            'file' => 'C:\\xampp\\htdocs\\easy\\system\\database\\DB_query_builder.php',
            'line' => 1455,
            'function' => 'query',
            'class' => 'CI_DB_driver',
            'type' => '->',
            'args' => 
            array (
              0 => 'SELECT *
FROM `ea_settings`
WHERE `id_user` = 1',
            ),
          ),
          4 => 
          array (
            'file' => 'C:\\xampp\\htdocs\\easy\\application\\controllers\\Business_settings.php',
            'line' => 54,
            'function' => 'get',
            'class' => 'CI_DB_query_builder',
            'type' => '->',
            'args' => 
            array (
            ),
          ),
          5 => 
          array (
            'file' => 'C:\\xampp\\htdocs\\easy\\system\\core\\CodeIgniter.php',
            'line' => 481,
            'function' => 'index',
            'class' => 'Business_settings',
            'type' => '->',
            'args' => 
            array (
            ),
          ),
          6 => 
          array (
            'file' => 'C:\\xampp\\htdocs\\easy\\index.php',
            'line' => 344,
            'args' => 
            array (
              0 => 'C:\\xampp\\htdocs\\easy\\system\\core\\CodeIgniter.php',
            ),
            'function' => 'require_once',
          ),
        ),
         'previous' => NULL,
         'sqlstate' => '42S22',
      )),
    ),
  ),
)
ERROR - 2026-08-13 11:57:17 --> JSON exception: {"success":false,"message":"You do not have the required permissions for this task.","trace":"array (\n  0 => \n  array (\n    'file' => 'C:\\\\xampp\\\\htdocs\\\\easy\\\\system\\\\core\\\\CodeIgniter.php',\n    'line' => 481,\n    'function' => 'save',\n    'class' => 'Business_settings',\n    'type' => '->',\n    'args' => \n    array (\n    ),\n  ),\n  1 => \n  array (\n    'file' => 'C:\\\\xampp\\\\htdocs\\\\easy\\\\index.php',\n    'line' => 344,\n    'args' => \n    array (\n      0 => 'C:\\\\xampp\\\\htdocs\\\\easy\\\\system\\\\core\\\\CodeIgniter.php',\n    ),\n    'function' => 'require_once',\n  ),\n)"} Trace: array (
  0 => 
  array (
    'file' => 'C:\\xampp\\htdocs\\easy\\application\\helpers\\http_helper.php',
    'line' => 176,
    'function' => 'log_message',
    'args' => 
    array (
      0 => 'error',
      1 => 'JSON exception: {"success":false,"message":"You do not have the required permissions for this task.","trace":"array (\\n  0 => \\n  array (\\n    \'file\' => \'C:\\\\\\\\xampp\\\\\\\\htdocs\\\\\\\\easy\\\\\\\\system\\\\\\\\core\\\\\\\\CodeIgniter.php\',\\n    \'line\' => 481,\\n    \'function\' => \'save\',\\n    \'class\' => \'Business_settings\',\\n    \'type\' => \'->\',\\n    \'args\' => \\n    array (\\n    ),\\n  ),\\n  1 => \\n  array (\\n    \'file\' => \'C:\\\\\\\\xampp\\\\\\\\htdocs\\\\\\\\easy\\\\\\\\index.php\',\\n    \'line\' => 344,\\n    \'args\' => \\n    array (\\n      0 => \'C:\\\\\\\\xampp\\\\\\\\htdocs\\\\\\\\easy\\\\\\\\system\\\\\\\\core\\\\\\\\CodeIgniter.php\',\\n    ),\\n    \'function\' => \'require_once\',\\n  ),\\n)"}',
    ),
  ),
  1 => 
  array (
    'file' => 'C:\\xampp\\htdocs\\easy\\application\\controllers\\Business_settings.php',
    'line' => 120,
    'function' => 'json_exception',
    'args' => 
    array (
      0 => 
      \RuntimeException::__set_state(array(
         'message' => 'You do not have the required permissions for this task.',
         'string' => '',
         'code' => 0,
         'file' => 'C:\\xampp\\htdocs\\easy\\application\\controllers\\Business_settings.php',
         'line' => 86,
         'trace' => 
        array (
          0 => 
          array (
            'file' => 'C:\\xampp\\htdocs\\easy\\system\\core\\CodeIgniter.php',
            'line' => 481,
            'function' => 'save',
            'class' => 'Business_settings',
            'type' => '->',
            'args' => 
            array (
            ),
          ),
          1 => 
          array (
            'file' => 'C:\\xampp\\htdocs\\easy\\index.php',
            'line' => 344,
            'args' => 
            array (
              0 => 'C:\\xampp\\htdocs\\easy\\system\\core\\CodeIgniter.php',
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
    'file' => 'C:\\xampp\\htdocs\\easy\\system\\core\\CodeIgniter.php',
    'line' => 481,
    'function' => 'save',
    'class' => 'Business_settings',
    'type' => '->',
    'args' => 
    array (
    ),
  ),
)
ERROR - 2026-08-13 16:17:49 --> Severity: Warning --> Array to string conversion C:\xampp\htdocs\easy\application\controllers\Customers.php 214 Trace: array (
  0 => 
  array (
    'file' => 'C:\\xampp\\htdocs\\easy\\system\\core\\Exceptions.php',
    'line' => 104,
    'function' => 'log_message',
    'args' => 
    array (
      0 => 'error',
      1 => 'Severity: Warning --> Array to string conversion C:\\xampp\\htdocs\\easy\\application\\controllers\\Customers.php 214',
    ),
  ),
  1 => 
  array (
    'file' => 'C:\\xampp\\htdocs\\easy\\system\\core\\Common.php',
    'line' => 640,
    'function' => 'log_exception',
    'class' => 'CI_Exceptions',
    'type' => '->',
    'args' => 
    array (
      0 => 'Warning',
      1 => 'Array to string conversion',
      2 => 'C:\\xampp\\htdocs\\easy\\application\\controllers\\Customers.php',
      3 => 214,
    ),
  ),
  2 => 
  array (
    'file' => 'C:\\xampp\\htdocs\\easy\\application\\controllers\\Customers.php',
    'line' => 214,
    'function' => '_error_handler',
    'args' => 
    array (
      0 => 2,
      1 => 'Array to string conversion',
      2 => 'C:\\xampp\\htdocs\\easy\\application\\controllers\\Customers.php',
      3 => 214,
    ),
  ),
)
ERROR - 2026-08-13 16:18:03 --> Severity: Warning --> Array to string conversion C:\xampp\htdocs\easy\application\controllers\Customers.php 214 Trace: array (
  0 => 
  array (
    'file' => 'C:\\xampp\\htdocs\\easy\\system\\core\\Exceptions.php',
    'line' => 104,
    'function' => 'log_message',
    'args' => 
    array (
      0 => 'error',
      1 => 'Severity: Warning --> Array to string conversion C:\\xampp\\htdocs\\easy\\application\\controllers\\Customers.php 214',
    ),
  ),
  1 => 
  array (
    'file' => 'C:\\xampp\\htdocs\\easy\\system\\core\\Common.php',
    'line' => 640,
    'function' => 'log_exception',
    'class' => 'CI_Exceptions',
    'type' => '->',
    'args' => 
    array (
      0 => 'Warning',
      1 => 'Array to string conversion',
      2 => 'C:\\xampp\\htdocs\\easy\\application\\controllers\\Customers.php',
      3 => 214,
    ),
  ),
  2 => 
  array (
    'file' => 'C:\\xampp\\htdocs\\easy\\application\\controllers\\Customers.php',
    'line' => 214,
    'function' => '_error_handler',
    'args' => 
    array (
      0 => 2,
      1 => 'Array to string conversion',
      2 => 'C:\\xampp\\htdocs\\easy\\application\\controllers\\Customers.php',
      3 => 214,
    ),
  ),
)

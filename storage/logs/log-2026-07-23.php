<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2026-07-23 07:20:49 --> Severity: error --> Exception: No connection could be made because the target machine actively refused it C:\xampp\htdocs\easy\system\database\drivers\mysqli\mysqli_driver.php 203 Trace: array (
  0 => 
  array (
    'file' => 'C:\\xampp\\htdocs\\easy\\system\\core\\Exceptions.php',
    'line' => 104,
    'function' => 'log_message',
    'args' => 
    array (
      0 => 'error',
      1 => 'Severity: error --> Exception: No connection could be made because the target machine actively refused it C:\\xampp\\htdocs\\easy\\system\\database\\drivers\\mysqli\\mysqli_driver.php 203',
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
      1 => 'Exception: No connection could be made because the target machine actively refused it',
      2 => 'C:\\xampp\\htdocs\\easy\\system\\database\\drivers\\mysqli\\mysqli_driver.php',
      3 => 203,
    ),
  ),
  2 => 
  array (
    'function' => '_exception_handler',
    'args' => 
    array (
      0 => 
      \mysqli_sql_exception::__set_state(array(
         'message' => 'No connection could be made because the target machine actively refused it',
         'string' => '',
         'code' => 2002,
         'file' => 'C:\\xampp\\htdocs\\easy\\system\\database\\drivers\\mysqli\\mysqli_driver.php',
         'line' => 203,
         'trace' => 
        array (
          0 => 
          array (
            'file' => 'C:\\xampp\\htdocs\\easy\\system\\database\\drivers\\mysqli\\mysqli_driver.php',
            'line' => 203,
            'function' => 'real_connect',
            'class' => 'mysqli',
            'type' => '->',
            'args' => 
            array (
              0 => 'localhost',
              1 => 'root',
              2 => 
              \SensitiveParameterValue::__set_state(array(
              )),
              3 => 'easyappointments',
              4 => NULL,
              5 => NULL,
              6 => 0,
            ),
          ),
          1 => 
          array (
            'file' => 'C:\\xampp\\htdocs\\easy\\system\\database\\DB_driver.php',
            'line' => 419,
            'function' => 'db_connect',
            'class' => 'CI_DB_mysqli_driver',
            'type' => '->',
            'args' => 
            array (
              0 => false,
            ),
          ),
          2 => 
          array (
            'file' => 'C:\\xampp\\htdocs\\easy\\system\\database\\DB.php',
            'line' => 219,
            'function' => 'initialize',
            'class' => 'CI_DB_driver',
            'type' => '->',
            'args' => 
            array (
            ),
          ),
          3 => 
          array (
            'file' => 'C:\\xampp\\htdocs\\easy\\system\\core\\Loader.php',
            'line' => 417,
            'function' => 'DB',
            'args' => 
            array (
              0 => 
              array (
                'hostname' => 'localhost',
                'username' => 'root',
                'password' => '',
                'database' => 'easyappointments',
                'dbdriver' => 'mysqli',
                'dbprefix' => 'ea_',
                'pconnect' => false,
                'db_debug' => true,
                'cache_on' => false,
                'cachedir' => '',
                'char_set' => 'utf8mb4',
                'dbcollat' => 'utf8mb4_unicode_ci',
                'swap_pre' => '',
                'autoinit' => true,
                'stricton' => false,
              ),
              1 => NULL,
            ),
          ),
          4 => 
          array (
            'file' => 'C:\\xampp\\htdocs\\easy\\system\\core\\Loader.php',
            'line' => 1361,
            'function' => 'database',
            'class' => 'CI_Loader',
            'type' => '->',
            'args' => 
            array (
            ),
          ),
          5 => 
          array (
            'file' => 'C:\\xampp\\htdocs\\easy\\system\\core\\Loader.php',
            'line' => 174,
            'function' => '_ci_autoloader',
            'class' => 'CI_Loader',
            'type' => '->',
            'args' => 
            array (
            ),
          ),
          6 => 
          array (
            'file' => 'C:\\xampp\\htdocs\\easy\\system\\core\\Controller.php',
            'line' => 103,
            'function' => 'initialize',
            'class' => 'CI_Loader',
            'type' => '->',
            'args' => 
            array (
            ),
          ),
          7 => 
          array (
            'file' => 'C:\\xampp\\htdocs\\easy\\application\\core\\EA_Controller.php',
            'line' => 80,
            'function' => '__construct',
            'class' => 'CI_Controller',
            'type' => '->',
            'args' => 
            array (
            ),
          ),
          8 => 
          array (
            'file' => 'C:\\xampp\\htdocs\\easy\\application\\controllers\\Calendar.php',
            'line' => 71,
            'function' => '__construct',
            'class' => 'EA_Controller',
            'type' => '->',
            'args' => 
            array (
            ),
          ),
          9 => 
          array (
            'file' => 'C:\\xampp\\htdocs\\easy\\system\\core\\CodeIgniter.php',
            'line' => 467,
            'function' => '__construct',
            'class' => 'Calendar',
            'type' => '->',
            'args' => 
            array (
            ),
          ),
          10 => 
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
         'sqlstate' => 'HY000',
      )),
    ),
  ),
)
ERROR - 2026-07-23 07:21:31 --> Severity: error --> Exception: No connection could be made because the target machine actively refused it C:\xampp\htdocs\easy\system\database\drivers\mysqli\mysqli_driver.php 203 Trace: array (
  0 => 
  array (
    'file' => 'C:\\xampp\\htdocs\\easy\\system\\core\\Exceptions.php',
    'line' => 104,
    'function' => 'log_message',
    'args' => 
    array (
      0 => 'error',
      1 => 'Severity: error --> Exception: No connection could be made because the target machine actively refused it C:\\xampp\\htdocs\\easy\\system\\database\\drivers\\mysqli\\mysqli_driver.php 203',
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
      1 => 'Exception: No connection could be made because the target machine actively refused it',
      2 => 'C:\\xampp\\htdocs\\easy\\system\\database\\drivers\\mysqli\\mysqli_driver.php',
      3 => 203,
    ),
  ),
  2 => 
  array (
    'function' => '_exception_handler',
    'args' => 
    array (
      0 => 
      \mysqli_sql_exception::__set_state(array(
         'message' => 'No connection could be made because the target machine actively refused it',
         'string' => '',
         'code' => 2002,
         'file' => 'C:\\xampp\\htdocs\\easy\\system\\database\\drivers\\mysqli\\mysqli_driver.php',
         'line' => 203,
         'trace' => 
        array (
          0 => 
          array (
            'file' => 'C:\\xampp\\htdocs\\easy\\system\\database\\drivers\\mysqli\\mysqli_driver.php',
            'line' => 203,
            'function' => 'real_connect',
            'class' => 'mysqli',
            'type' => '->',
            'args' => 
            array (
              0 => 'localhost',
              1 => 'root',
              2 => 
              \SensitiveParameterValue::__set_state(array(
              )),
              3 => 'easyappointments',
              4 => NULL,
              5 => NULL,
              6 => 0,
            ),
          ),
          1 => 
          array (
            'file' => 'C:\\xampp\\htdocs\\easy\\system\\database\\DB_driver.php',
            'line' => 419,
            'function' => 'db_connect',
            'class' => 'CI_DB_mysqli_driver',
            'type' => '->',
            'args' => 
            array (
              0 => false,
            ),
          ),
          2 => 
          array (
            'file' => 'C:\\xampp\\htdocs\\easy\\system\\database\\DB.php',
            'line' => 219,
            'function' => 'initialize',
            'class' => 'CI_DB_driver',
            'type' => '->',
            'args' => 
            array (
            ),
          ),
          3 => 
          array (
            'file' => 'C:\\xampp\\htdocs\\easy\\system\\core\\Loader.php',
            'line' => 417,
            'function' => 'DB',
            'args' => 
            array (
              0 => 
              array (
                'hostname' => 'localhost',
                'username' => 'root',
                'password' => '',
                'database' => 'easyappointments',
                'dbdriver' => 'mysqli',
                'dbprefix' => 'ea_',
                'pconnect' => false,
                'db_debug' => true,
                'cache_on' => false,
                'cachedir' => '',
                'char_set' => 'utf8mb4',
                'dbcollat' => 'utf8mb4_unicode_ci',
                'swap_pre' => '',
                'autoinit' => true,
                'stricton' => false,
              ),
              1 => NULL,
            ),
          ),
          4 => 
          array (
            'file' => 'C:\\xampp\\htdocs\\easy\\system\\core\\Loader.php',
            'line' => 1361,
            'function' => 'database',
            'class' => 'CI_Loader',
            'type' => '->',
            'args' => 
            array (
            ),
          ),
          5 => 
          array (
            'file' => 'C:\\xampp\\htdocs\\easy\\system\\core\\Loader.php',
            'line' => 174,
            'function' => '_ci_autoloader',
            'class' => 'CI_Loader',
            'type' => '->',
            'args' => 
            array (
            ),
          ),
          6 => 
          array (
            'file' => 'C:\\xampp\\htdocs\\easy\\system\\core\\Controller.php',
            'line' => 103,
            'function' => 'initialize',
            'class' => 'CI_Loader',
            'type' => '->',
            'args' => 
            array (
            ),
          ),
          7 => 
          array (
            'file' => 'C:\\xampp\\htdocs\\easy\\application\\core\\EA_Controller.php',
            'line' => 80,
            'function' => '__construct',
            'class' => 'CI_Controller',
            'type' => '->',
            'args' => 
            array (
            ),
          ),
          8 => 
          array (
            'file' => 'C:\\xampp\\htdocs\\easy\\application\\controllers\\General_settings.php',
            'line' => 28,
            'function' => '__construct',
            'class' => 'EA_Controller',
            'type' => '->',
            'args' => 
            array (
            ),
          ),
          9 => 
          array (
            'file' => 'C:\\xampp\\htdocs\\easy\\system\\core\\CodeIgniter.php',
            'line' => 467,
            'function' => '__construct',
            'class' => 'General_settings',
            'type' => '->',
            'args' => 
            array (
            ),
          ),
          10 => 
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
         'sqlstate' => 'HY000',
      )),
    ),
  ),
)
ERROR - 2026-07-23 07:23:04 --> Severity: error --> Exception: No connection could be made because the target machine actively refused it C:\xampp\htdocs\easy\system\database\drivers\mysqli\mysqli_driver.php 203 Trace: array (
  0 => 
  array (
    'file' => 'C:\\xampp\\htdocs\\easy\\system\\core\\Exceptions.php',
    'line' => 104,
    'function' => 'log_message',
    'args' => 
    array (
      0 => 'error',
      1 => 'Severity: error --> Exception: No connection could be made because the target machine actively refused it C:\\xampp\\htdocs\\easy\\system\\database\\drivers\\mysqli\\mysqli_driver.php 203',
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
      1 => 'Exception: No connection could be made because the target machine actively refused it',
      2 => 'C:\\xampp\\htdocs\\easy\\system\\database\\drivers\\mysqli\\mysqli_driver.php',
      3 => 203,
    ),
  ),
  2 => 
  array (
    'function' => '_exception_handler',
    'args' => 
    array (
      0 => 
      \mysqli_sql_exception::__set_state(array(
         'message' => 'No connection could be made because the target machine actively refused it',
         'string' => '',
         'code' => 2002,
         'file' => 'C:\\xampp\\htdocs\\easy\\system\\database\\drivers\\mysqli\\mysqli_driver.php',
         'line' => 203,
         'trace' => 
        array (
          0 => 
          array (
            'file' => 'C:\\xampp\\htdocs\\easy\\system\\database\\drivers\\mysqli\\mysqli_driver.php',
            'line' => 203,
            'function' => 'real_connect',
            'class' => 'mysqli',
            'type' => '->',
            'args' => 
            array (
              0 => 'localhost',
              1 => 'root',
              2 => 
              \SensitiveParameterValue::__set_state(array(
              )),
              3 => 'easyappointments',
              4 => NULL,
              5 => NULL,
              6 => 0,
            ),
          ),
          1 => 
          array (
            'file' => 'C:\\xampp\\htdocs\\easy\\system\\database\\DB_driver.php',
            'line' => 419,
            'function' => 'db_connect',
            'class' => 'CI_DB_mysqli_driver',
            'type' => '->',
            'args' => 
            array (
              0 => false,
            ),
          ),
          2 => 
          array (
            'file' => 'C:\\xampp\\htdocs\\easy\\system\\database\\DB.php',
            'line' => 219,
            'function' => 'initialize',
            'class' => 'CI_DB_driver',
            'type' => '->',
            'args' => 
            array (
            ),
          ),
          3 => 
          array (
            'file' => 'C:\\xampp\\htdocs\\easy\\system\\core\\Loader.php',
            'line' => 417,
            'function' => 'DB',
            'args' => 
            array (
              0 => 
              array (
                'hostname' => 'localhost',
                'username' => 'root',
                'password' => '',
                'database' => 'easyappointments',
                'dbdriver' => 'mysqli',
                'dbprefix' => 'ea_',
                'pconnect' => false,
                'db_debug' => true,
                'cache_on' => false,
                'cachedir' => '',
                'char_set' => 'utf8mb4',
                'dbcollat' => 'utf8mb4_unicode_ci',
                'swap_pre' => '',
                'autoinit' => true,
                'stricton' => false,
              ),
              1 => NULL,
            ),
          ),
          4 => 
          array (
            'file' => 'C:\\xampp\\htdocs\\easy\\system\\core\\Loader.php',
            'line' => 1361,
            'function' => 'database',
            'class' => 'CI_Loader',
            'type' => '->',
            'args' => 
            array (
            ),
          ),
          5 => 
          array (
            'file' => 'C:\\xampp\\htdocs\\easy\\system\\core\\Loader.php',
            'line' => 174,
            'function' => '_ci_autoloader',
            'class' => 'CI_Loader',
            'type' => '->',
            'args' => 
            array (
            ),
          ),
          6 => 
          array (
            'file' => 'C:\\xampp\\htdocs\\easy\\system\\core\\Controller.php',
            'line' => 103,
            'function' => 'initialize',
            'class' => 'CI_Loader',
            'type' => '->',
            'args' => 
            array (
            ),
          ),
          7 => 
          array (
            'file' => 'C:\\xampp\\htdocs\\easy\\application\\core\\EA_Controller.php',
            'line' => 80,
            'function' => '__construct',
            'class' => 'CI_Controller',
            'type' => '->',
            'args' => 
            array (
            ),
          ),
          8 => 
          array (
            'file' => 'C:\\xampp\\htdocs\\easy\\application\\controllers\\Booking.php',
            'line' => 65,
            'function' => '__construct',
            'class' => 'EA_Controller',
            'type' => '->',
            'args' => 
            array (
            ),
          ),
          9 => 
          array (
            'file' => 'C:\\xampp\\htdocs\\easy\\system\\core\\CodeIgniter.php',
            'line' => 467,
            'function' => '__construct',
            'class' => 'Booking',
            'type' => '->',
            'args' => 
            array (
            ),
          ),
          10 => 
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
         'sqlstate' => 'HY000',
      )),
    ),
  ),
)
ERROR - 2026-07-23 07:23:12 --> Severity: error --> Exception: No connection could be made because the target machine actively refused it C:\xampp\htdocs\easy\system\database\drivers\mysqli\mysqli_driver.php 203 Trace: array (
  0 => 
  array (
    'file' => 'C:\\xampp\\htdocs\\easy\\system\\core\\Exceptions.php',
    'line' => 104,
    'function' => 'log_message',
    'args' => 
    array (
      0 => 'error',
      1 => 'Severity: error --> Exception: No connection could be made because the target machine actively refused it C:\\xampp\\htdocs\\easy\\system\\database\\drivers\\mysqli\\mysqli_driver.php 203',
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
      1 => 'Exception: No connection could be made because the target machine actively refused it',
      2 => 'C:\\xampp\\htdocs\\easy\\system\\database\\drivers\\mysqli\\mysqli_driver.php',
      3 => 203,
    ),
  ),
  2 => 
  array (
    'function' => '_exception_handler',
    'args' => 
    array (
      0 => 
      \mysqli_sql_exception::__set_state(array(
         'message' => 'No connection could be made because the target machine actively refused it',
         'string' => '',
         'code' => 2002,
         'file' => 'C:\\xampp\\htdocs\\easy\\system\\database\\drivers\\mysqli\\mysqli_driver.php',
         'line' => 203,
         'trace' => 
        array (
          0 => 
          array (
            'file' => 'C:\\xampp\\htdocs\\easy\\system\\database\\drivers\\mysqli\\mysqli_driver.php',
            'line' => 203,
            'function' => 'real_connect',
            'class' => 'mysqli',
            'type' => '->',
            'args' => 
            array (
              0 => 'localhost',
              1 => 'root',
              2 => 
              \SensitiveParameterValue::__set_state(array(
              )),
              3 => 'easyappointments',
              4 => NULL,
              5 => NULL,
              6 => 0,
            ),
          ),
          1 => 
          array (
            'file' => 'C:\\xampp\\htdocs\\easy\\system\\database\\DB_driver.php',
            'line' => 419,
            'function' => 'db_connect',
            'class' => 'CI_DB_mysqli_driver',
            'type' => '->',
            'args' => 
            array (
              0 => false,
            ),
          ),
          2 => 
          array (
            'file' => 'C:\\xampp\\htdocs\\easy\\system\\database\\DB.php',
            'line' => 219,
            'function' => 'initialize',
            'class' => 'CI_DB_driver',
            'type' => '->',
            'args' => 
            array (
            ),
          ),
          3 => 
          array (
            'file' => 'C:\\xampp\\htdocs\\easy\\system\\core\\Loader.php',
            'line' => 417,
            'function' => 'DB',
            'args' => 
            array (
              0 => 
              array (
                'hostname' => 'localhost',
                'username' => 'root',
                'password' => '',
                'database' => 'easyappointments',
                'dbdriver' => 'mysqli',
                'dbprefix' => 'ea_',
                'pconnect' => false,
                'db_debug' => true,
                'cache_on' => false,
                'cachedir' => '',
                'char_set' => 'utf8mb4',
                'dbcollat' => 'utf8mb4_unicode_ci',
                'swap_pre' => '',
                'autoinit' => true,
                'stricton' => false,
              ),
              1 => NULL,
            ),
          ),
          4 => 
          array (
            'file' => 'C:\\xampp\\htdocs\\easy\\system\\core\\Loader.php',
            'line' => 1361,
            'function' => 'database',
            'class' => 'CI_Loader',
            'type' => '->',
            'args' => 
            array (
            ),
          ),
          5 => 
          array (
            'file' => 'C:\\xampp\\htdocs\\easy\\system\\core\\Loader.php',
            'line' => 174,
            'function' => '_ci_autoloader',
            'class' => 'CI_Loader',
            'type' => '->',
            'args' => 
            array (
            ),
          ),
          6 => 
          array (
            'file' => 'C:\\xampp\\htdocs\\easy\\system\\core\\Controller.php',
            'line' => 103,
            'function' => 'initialize',
            'class' => 'CI_Loader',
            'type' => '->',
            'args' => 
            array (
            ),
          ),
          7 => 
          array (
            'file' => 'C:\\xampp\\htdocs\\easy\\application\\core\\EA_Controller.php',
            'line' => 80,
            'function' => '__construct',
            'class' => 'CI_Controller',
            'type' => '->',
            'args' => 
            array (
            ),
          ),
          8 => 
          array (
            'file' => 'C:\\xampp\\htdocs\\easy\\application\\controllers\\Booking.php',
            'line' => 65,
            'function' => '__construct',
            'class' => 'EA_Controller',
            'type' => '->',
            'args' => 
            array (
            ),
          ),
          9 => 
          array (
            'file' => 'C:\\xampp\\htdocs\\easy\\system\\core\\CodeIgniter.php',
            'line' => 467,
            'function' => '__construct',
            'class' => 'Booking',
            'type' => '->',
            'args' => 
            array (
            ),
          ),
          10 => 
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
         'sqlstate' => 'HY000',
      )),
    ),
  ),
)
ERROR - 2026-07-23 07:35:50 --> 404 Page Not Found: Calendar/get_calendar_appointments Trace: array (
  0 => 
  array (
    'file' => 'C:\\xampp\\htdocs\\easy\\system\\core\\Exceptions.php',
    'line' => 134,
    'function' => 'log_message',
    'args' => 
    array (
      0 => 'error',
      1 => '404 Page Not Found: Calendar/get_calendar_appointments',
    ),
  ),
  1 => 
  array (
    'file' => 'C:\\xampp\\htdocs\\easy\\system\\core\\Common.php',
    'line' => 439,
    'function' => 'show_404',
    'class' => 'CI_Exceptions',
    'type' => '->',
    'args' => 
    array (
      0 => 'Calendar/get_calendar_appointments',
      1 => true,
    ),
  ),
  2 => 
  array (
    'file' => 'C:\\xampp\\htdocs\\easy\\system\\core\\CodeIgniter.php',
    'line' => 443,
    'function' => 'show_404',
    'args' => 
    array (
      0 => 'Calendar/get_calendar_appointments',
    ),
  ),
)
ERROR - 2026-07-23 07:35:52 --> 404 Page Not Found: Calendar/index Trace: array (
  0 => 
  array (
    'file' => 'C:\\xampp\\htdocs\\easy\\system\\core\\Exceptions.php',
    'line' => 134,
    'function' => 'log_message',
    'args' => 
    array (
      0 => 'error',
      1 => '404 Page Not Found: Calendar/index',
    ),
  ),
  1 => 
  array (
    'file' => 'C:\\xampp\\htdocs\\easy\\system\\core\\Common.php',
    'line' => 439,
    'function' => 'show_404',
    'class' => 'CI_Exceptions',
    'type' => '->',
    'args' => 
    array (
      0 => 'Calendar/index',
      1 => true,
    ),
  ),
  2 => 
  array (
    'file' => 'C:\\xampp\\htdocs\\easy\\system\\core\\CodeIgniter.php',
    'line' => 443,
    'function' => 'show_404',
    'args' => 
    array (
      0 => 'Calendar/index',
    ),
  ),
)
ERROR - 2026-07-23 07:35:56 --> 404 Page Not Found: Calendars/index Trace: array (
  0 => 
  array (
    'file' => 'C:\\xampp\\htdocs\\easy\\system\\core\\Exceptions.php',
    'line' => 134,
    'function' => 'log_message',
    'args' => 
    array (
      0 => 'error',
      1 => '404 Page Not Found: Calendars/index',
    ),
  ),
  1 => 
  array (
    'file' => 'C:\\xampp\\htdocs\\easy\\system\\core\\Common.php',
    'line' => 439,
    'function' => 'show_404',
    'class' => 'CI_Exceptions',
    'type' => '->',
    'args' => 
    array (
      0 => 'Calendars/index',
      1 => true,
    ),
  ),
  2 => 
  array (
    'file' => 'C:\\xampp\\htdocs\\easy\\system\\core\\CodeIgniter.php',
    'line' => 443,
    'function' => 'show_404',
    'args' => 
    array (
      0 => 'Calendars/index',
    ),
  ),
)
ERROR - 2026-07-23 07:36:33 --> 404 Page Not Found: Calendars/index Trace: array (
  0 => 
  array (
    'file' => 'C:\\xampp\\htdocs\\easy\\system\\core\\Exceptions.php',
    'line' => 134,
    'function' => 'log_message',
    'args' => 
    array (
      0 => 'error',
      1 => '404 Page Not Found: Calendars/index',
    ),
  ),
  1 => 
  array (
    'file' => 'C:\\xampp\\htdocs\\easy\\system\\core\\Common.php',
    'line' => 439,
    'function' => 'show_404',
    'class' => 'CI_Exceptions',
    'type' => '->',
    'args' => 
    array (
      0 => 'Calendars/index',
      1 => true,
    ),
  ),
  2 => 
  array (
    'file' => 'C:\\xampp\\htdocs\\easy\\system\\core\\CodeIgniter.php',
    'line' => 443,
    'function' => 'show_404',
    'args' => 
    array (
      0 => 'Calendars/index',
    ),
  ),
)
ERROR - 2026-07-23 07:36:35 --> 404 Page Not Found: Calendars/index Trace: array (
  0 => 
  array (
    'file' => 'C:\\xampp\\htdocs\\easy\\system\\core\\Exceptions.php',
    'line' => 134,
    'function' => 'log_message',
    'args' => 
    array (
      0 => 'error',
      1 => '404 Page Not Found: Calendars/index',
    ),
  ),
  1 => 
  array (
    'file' => 'C:\\xampp\\htdocs\\easy\\system\\core\\Common.php',
    'line' => 439,
    'function' => 'show_404',
    'class' => 'CI_Exceptions',
    'type' => '->',
    'args' => 
    array (
      0 => 'Calendars/index',
      1 => true,
    ),
  ),
  2 => 
  array (
    'file' => 'C:\\xampp\\htdocs\\easy\\system\\core\\CodeIgniter.php',
    'line' => 443,
    'function' => 'show_404',
    'args' => 
    array (
      0 => 'Calendars/index',
    ),
  ),
)
ERROR - 2026-07-23 07:36:36 --> 404 Page Not Found: Calendars/index Trace: array (
  0 => 
  array (
    'file' => 'C:\\xampp\\htdocs\\easy\\system\\core\\Exceptions.php',
    'line' => 134,
    'function' => 'log_message',
    'args' => 
    array (
      0 => 'error',
      1 => '404 Page Not Found: Calendars/index',
    ),
  ),
  1 => 
  array (
    'file' => 'C:\\xampp\\htdocs\\easy\\system\\core\\Common.php',
    'line' => 439,
    'function' => 'show_404',
    'class' => 'CI_Exceptions',
    'type' => '->',
    'args' => 
    array (
      0 => 'Calendars/index',
      1 => true,
    ),
  ),
  2 => 
  array (
    'file' => 'C:\\xampp\\htdocs\\easy\\system\\core\\CodeIgniter.php',
    'line' => 443,
    'function' => 'show_404',
    'args' => 
    array (
      0 => 'Calendars/index',
    ),
  ),
)
ERROR - 2026-07-23 07:37:03 --> 404 Page Not Found: Calendar/get_calendar_appointments Trace: array (
  0 => 
  array (
    'file' => 'C:\\xampp\\htdocs\\easy\\system\\core\\Exceptions.php',
    'line' => 134,
    'function' => 'log_message',
    'args' => 
    array (
      0 => 'error',
      1 => '404 Page Not Found: Calendar/get_calendar_appointments',
    ),
  ),
  1 => 
  array (
    'file' => 'C:\\xampp\\htdocs\\easy\\system\\core\\Common.php',
    'line' => 439,
    'function' => 'show_404',
    'class' => 'CI_Exceptions',
    'type' => '->',
    'args' => 
    array (
      0 => 'Calendar/get_calendar_appointments',
      1 => true,
    ),
  ),
  2 => 
  array (
    'file' => 'C:\\xampp\\htdocs\\easy\\system\\core\\CodeIgniter.php',
    'line' => 443,
    'function' => 'show_404',
    'args' => 
    array (
      0 => 'Calendar/get_calendar_appointments',
    ),
  ),
)
ERROR - 2026-07-23 07:37:11 --> 404 Page Not Found: Calendar/get_calendar_appointments Trace: array (
  0 => 
  array (
    'file' => 'C:\\xampp\\htdocs\\easy\\system\\core\\Exceptions.php',
    'line' => 134,
    'function' => 'log_message',
    'args' => 
    array (
      0 => 'error',
      1 => '404 Page Not Found: Calendar/get_calendar_appointments',
    ),
  ),
  1 => 
  array (
    'file' => 'C:\\xampp\\htdocs\\easy\\system\\core\\Common.php',
    'line' => 439,
    'function' => 'show_404',
    'class' => 'CI_Exceptions',
    'type' => '->',
    'args' => 
    array (
      0 => 'Calendar/get_calendar_appointments',
      1 => true,
    ),
  ),
  2 => 
  array (
    'file' => 'C:\\xampp\\htdocs\\easy\\system\\core\\CodeIgniter.php',
    'line' => 443,
    'function' => 'show_404',
    'args' => 
    array (
      0 => 'Calendar/get_calendar_appointments',
    ),
  ),
)
ERROR - 2026-07-23 07:37:26 --> 404 Page Not Found: Calendar/get_calendar_appointments Trace: array (
  0 => 
  array (
    'file' => 'C:\\xampp\\htdocs\\easy\\system\\core\\Exceptions.php',
    'line' => 134,
    'function' => 'log_message',
    'args' => 
    array (
      0 => 'error',
      1 => '404 Page Not Found: Calendar/get_calendar_appointments',
    ),
  ),
  1 => 
  array (
    'file' => 'C:\\xampp\\htdocs\\easy\\system\\core\\Common.php',
    'line' => 439,
    'function' => 'show_404',
    'class' => 'CI_Exceptions',
    'type' => '->',
    'args' => 
    array (
      0 => 'Calendar/get_calendar_appointments',
      1 => true,
    ),
  ),
  2 => 
  array (
    'file' => 'C:\\xampp\\htdocs\\easy\\system\\core\\CodeIgniter.php',
    'line' => 443,
    'function' => 'show_404',
    'args' => 
    array (
      0 => 'Calendar/get_calendar_appointments',
    ),
  ),
)
ERROR - 2026-07-23 07:39:43 --> 404 Page Not Found: Testphp/index Trace: array (
  0 => 
  array (
    'file' => 'C:\\xampp\\htdocs\\easy\\system\\core\\Exceptions.php',
    'line' => 134,
    'function' => 'log_message',
    'args' => 
    array (
      0 => 'error',
      1 => '404 Page Not Found: Testphp/index',
    ),
  ),
  1 => 
  array (
    'file' => 'C:\\xampp\\htdocs\\easy\\system\\core\\Common.php',
    'line' => 439,
    'function' => 'show_404',
    'class' => 'CI_Exceptions',
    'type' => '->',
    'args' => 
    array (
      0 => 'Testphp/index',
      1 => true,
    ),
  ),
  2 => 
  array (
    'file' => 'C:\\xampp\\htdocs\\easy\\system\\core\\CodeIgniter.php',
    'line' => 443,
    'function' => 'show_404',
    'args' => 
    array (
      0 => 'Testphp/index',
    ),
  ),
)
ERROR - 2026-07-23 07:40:12 --> 404 Page Not Found:  Trace: array (
  0 => 
  array (
    'file' => 'C:\\xampp\\htdocs\\easy\\system\\core\\Exceptions.php',
    'line' => 134,
    'function' => 'log_message',
    'args' => 
    array (
      0 => 'error',
      1 => '404 Page Not Found: ',
    ),
  ),
  1 => 
  array (
    'file' => 'C:\\xampp\\htdocs\\easy\\system\\core\\Common.php',
    'line' => 439,
    'function' => 'show_404',
    'class' => 'CI_Exceptions',
    'type' => '->',
    'args' => 
    array (
      0 => '',
      1 => true,
    ),
  ),
  2 => 
  array (
    'file' => 'C:\\xampp\\htdocs\\easy\\application\\controllers\\Test.php',
    'line' => 19,
    'function' => 'show_404',
    'args' => 
    array (
    ),
  ),
)
ERROR - 2026-07-23 07:40:15 --> 404 Page Not Found:  Trace: array (
  0 => 
  array (
    'file' => 'C:\\xampp\\htdocs\\easy\\system\\core\\Exceptions.php',
    'line' => 134,
    'function' => 'log_message',
    'args' => 
    array (
      0 => 'error',
      1 => '404 Page Not Found: ',
    ),
  ),
  1 => 
  array (
    'file' => 'C:\\xampp\\htdocs\\easy\\system\\core\\Common.php',
    'line' => 439,
    'function' => 'show_404',
    'class' => 'CI_Exceptions',
    'type' => '->',
    'args' => 
    array (
      0 => '',
      1 => true,
    ),
  ),
  2 => 
  array (
    'file' => 'C:\\xampp\\htdocs\\easy\\application\\controllers\\Test.php',
    'line' => 19,
    'function' => 'show_404',
    'args' => 
    array (
    ),
  ),
)
ERROR - 2026-07-23 07:47:38 --> 404 Page Not Found: Anshul/index Trace: array (
  0 => 
  array (
    'file' => 'C:\\xampp\\htdocs\\easy\\system\\core\\Exceptions.php',
    'line' => 134,
    'function' => 'log_message',
    'args' => 
    array (
      0 => 'error',
      1 => '404 Page Not Found: Anshul/index',
    ),
  ),
  1 => 
  array (
    'file' => 'C:\\xampp\\htdocs\\easy\\system\\core\\Common.php',
    'line' => 439,
    'function' => 'show_404',
    'class' => 'CI_Exceptions',
    'type' => '->',
    'args' => 
    array (
      0 => 'Anshul/index',
      1 => true,
    ),
  ),
  2 => 
  array (
    'file' => 'C:\\xampp\\htdocs\\easy\\system\\core\\CodeIgniter.php',
    'line' => 443,
    'function' => 'show_404',
    'args' => 
    array (
      0 => 'Anshul/index',
    ),
  ),
)
ERROR - 2026-07-23 07:47:40 --> 404 Page Not Found: Anshul/index Trace: array (
  0 => 
  array (
    'file' => 'C:\\xampp\\htdocs\\easy\\system\\core\\Exceptions.php',
    'line' => 134,
    'function' => 'log_message',
    'args' => 
    array (
      0 => 'error',
      1 => '404 Page Not Found: Anshul/index',
    ),
  ),
  1 => 
  array (
    'file' => 'C:\\xampp\\htdocs\\easy\\system\\core\\Common.php',
    'line' => 439,
    'function' => 'show_404',
    'class' => 'CI_Exceptions',
    'type' => '->',
    'args' => 
    array (
      0 => 'Anshul/index',
      1 => true,
    ),
  ),
  2 => 
  array (
    'file' => 'C:\\xampp\\htdocs\\easy\\system\\core\\CodeIgniter.php',
    'line' => 443,
    'function' => 'show_404',
    'args' => 
    array (
      0 => 'Anshul/index',
    ),
  ),
)
ERROR - 2026-07-23 07:50:53 --> Severity: error --> Exception: Call to undefined function extend() C:\xampp\htdocs\easy\application\controllers\Anshul.php 1 Trace: array (
  0 => 
  array (
    'file' => 'C:\\xampp\\htdocs\\easy\\system\\core\\Exceptions.php',
    'line' => 104,
    'function' => 'log_message',
    'args' => 
    array (
      0 => 'error',
      1 => 'Severity: error --> Exception: Call to undefined function extend() C:\\xampp\\htdocs\\easy\\application\\controllers\\Anshul.php 1',
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
      1 => 'Exception: Call to undefined function extend()',
      2 => 'C:\\xampp\\htdocs\\easy\\application\\controllers\\Anshul.php',
      3 => 1,
    ),
  ),
  2 => 
  array (
    'function' => '_exception_handler',
    'args' => 
    array (
      0 => 
      \Error::__set_state(array(
         'message' => 'Call to undefined function extend()',
         'string' => '',
         'code' => 0,
         'file' => 'C:\\xampp\\htdocs\\easy\\application\\controllers\\Anshul.php',
         'line' => 1,
         'trace' => 
        array (
          0 => 
          array (
            'file' => 'C:\\xampp\\htdocs\\easy\\system\\core\\CodeIgniter.php',
            'line' => 360,
            'function' => 'require_once',
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
)
ERROR - 2026-07-23 07:50:55 --> Severity: error --> Exception: Call to undefined function extend() C:\xampp\htdocs\easy\application\controllers\Anshul.php 1 Trace: array (
  0 => 
  array (
    'file' => 'C:\\xampp\\htdocs\\easy\\system\\core\\Exceptions.php',
    'line' => 104,
    'function' => 'log_message',
    'args' => 
    array (
      0 => 'error',
      1 => 'Severity: error --> Exception: Call to undefined function extend() C:\\xampp\\htdocs\\easy\\application\\controllers\\Anshul.php 1',
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
      1 => 'Exception: Call to undefined function extend()',
      2 => 'C:\\xampp\\htdocs\\easy\\application\\controllers\\Anshul.php',
      3 => 1,
    ),
  ),
  2 => 
  array (
    'function' => '_exception_handler',
    'args' => 
    array (
      0 => 
      \Error::__set_state(array(
         'message' => 'Call to undefined function extend()',
         'string' => '',
         'code' => 0,
         'file' => 'C:\\xampp\\htdocs\\easy\\application\\controllers\\Anshul.php',
         'line' => 1,
         'trace' => 
        array (
          0 => 
          array (
            'file' => 'C:\\xampp\\htdocs\\easy\\system\\core\\CodeIgniter.php',
            'line' => 360,
            'function' => 'require_once',
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
)
ERROR - 2026-07-23 07:51:54 --> 404 Page Not Found: Calendars/index Trace: array (
  0 => 
  array (
    'file' => 'C:\\xampp\\htdocs\\easy\\system\\core\\Exceptions.php',
    'line' => 134,
    'function' => 'log_message',
    'args' => 
    array (
      0 => 'error',
      1 => '404 Page Not Found: Calendars/index',
    ),
  ),
  1 => 
  array (
    'file' => 'C:\\xampp\\htdocs\\easy\\system\\core\\Common.php',
    'line' => 439,
    'function' => 'show_404',
    'class' => 'CI_Exceptions',
    'type' => '->',
    'args' => 
    array (
      0 => 'Calendars/index',
      1 => true,
    ),
  ),
  2 => 
  array (
    'file' => 'C:\\xampp\\htdocs\\easy\\system\\core\\CodeIgniter.php',
    'line' => 443,
    'function' => 'show_404',
    'args' => 
    array (
      0 => 'Calendars/index',
    ),
  ),
)
ERROR - 2026-07-23 10:54:53 --> Notifications - Could not email appointment-saved to customer (2) : Could not instantiate mail function. Trace: array (
  0 => 
  array (
    'file' => 'C:\\xampp\\htdocs\\easy\\application\\libraries\\Notifications.php',
    'line' => 352,
    'function' => 'log_message',
    'args' => 
    array (
      0 => 'error',
      1 => 'Notifications - Could not email appointment-saved to customer (2) : Could not instantiate mail function.',
    ),
  ),
  1 => 
  array (
    'file' => 'C:\\xampp\\htdocs\\easy\\application\\libraries\\Notifications.php',
    'line' => 98,
    'function' => 'log_exception',
    'class' => 'Notifications',
    'type' => '->',
    'args' => 
    array (
      0 => 
      \PHPMailer\PHPMailer\Exception::__set_state(array(
         'message' => 'Could not instantiate mail function.',
         'string' => '',
         'code' => 2,
         'file' => 'C:\\xampp\\htdocs\\easy\\vendor\\phpmailer\\phpmailer\\src\\PHPMailer.php',
         'line' => 2150,
         'trace' => 
        array (
          0 => 
          array (
            'file' => 'C:\\xampp\\htdocs\\easy\\vendor\\phpmailer\\phpmailer\\src\\PHPMailer.php',
            'line' => 1857,
            'function' => 'mailSend',
            'class' => 'PHPMailer\\PHPMailer\\PHPMailer',
            'type' => '->',
            'args' => 
            array (
              0 => 'Date: Thu, 23 Jul 2026 10:54:51 +0200
From: Company Name <info@example.org>
Reply-To: info@example.org
Message-ID: <xUA2XoAD2CC3kc01EmJBeUJCV2jzaO7M3wGbm8tVjfk@localhost>
X-Mailer: PHPMailer 7.1.1 (https://github.com/PHPMailer/PHPMailer)
MIME-Version: 1.0
Content-Type: multipart/mixed;
 boundary="b1=_xUA2XoAD2CC3kc01EmJBeUJCV2jzaO7M3wGbm8tVjfk"
Content-Transfer-Encoding: 8bit

',
              1 => '--b1=_xUA2XoAD2CC3kc01EmJBeUJCV2jzaO7M3wGbm8tVjfk
Content-Type: multipart/alternative;
 boundary="b2=_xUA2XoAD2CC3kc01EmJBeUJCV2jzaO7M3wGbm8tVjfk"

--b2=_xUA2XoAD2CC3kc01EmJBeUJCV2jzaO7M3wGbm8tVjfk
Content-Type: text/plain; charset=us-ascii

    
    
    
        Appointment Details | Easy!Appointments
    
    
        /* -------------------------------------
            GLOBAL RESETS
        ------------------------------------- */        /*All the styling goes here*/        img {
            border: none;
            -ms-interpolation-mode: bicubic;
            max-width: 100%;
        }        body {
            background-color: #f6f6f6;
            font-family: sans-serif;
            -webkit-font-smoothing: antialiased;
            font-size: 14px;
            line-height: 1.4;
            margin: 0;
            padding: 0;
            -ms-text-size-adjust: 100%;
            -webkit-text-size-adjust: 100%;
        }        table {
            border-collapse: separate;
            mso-table-lspace: 0pt;
            mso-table-rspace: 0pt;
            width: 100%;
        }        table td {
            font-family: sans-serif;
            font-size: 14px;
            vertical-align: top;
        }        /* -------------------------------------
            BODY & CONTAINER
        ------------------------------------- */        .body {
            background-color: #f6f6f6;
            width: 100%;
        }        /* Set a max-width, and make it display as block so it will automatically stretch to that width, but will also shrink down on a phone or something */
        .container {
            display: block;
            margin: 0 auto !important;
            /* makes it centered */
            max-width: 580px;
            padding: 10px;
            width: 580px;
        }        /* This should also be a block element, so that it will fill 100% of the .container */
        .content {
            box-sizing: border-box;
            display: block;
            margin: 0 auto;
            max-width: 580px;
            padding: 10px;
        }        /* -------------------------------------
            HEADER, FOOTER, MAIN
        ------------------------------------- */
        .main {
            background: #ffffff;
            border-radius: 3px;
            width: 100%;
        }        .wrapper {
            box-sizing: border-box;
            padding: 20px;
        }        .content-block {
            padding-bottom: 10px;
            padding-top: 10px;
        }        .footer {
            clear: both;
            margin-top: 10px;
            text-align: center;
            width: 100%;
        }        .footer td,
        .footer p,
        .footer span,
        .footer a {
            color: #999999;
            font-size: 12px;
            text-align: center;
        }        /* -------------------------------------
            TYPOGRAPHY
        ------------------------------------- */
        h1,
        h2,
        h3,
        h4 {
            color: #000000;
            font-family: sans-serif;
            font-weight: 400;
            line-height: 1.4;
            margin: 0;
            margin-bottom: 15px;
        }        h1 {
            font-size: 24px;
            font-weight: 300;
            text-align: center;
            margin-bottom: 40px;
        }        .label {
            width: 120px;
        }        .details-table {
            margin: 0 0 0 auto;
            width: 85%;
        }        p,
        ul,
        ol {
            font-family: sans-serif;
            font-size: 14px;
            font-weight: normal;
            margin: 0;
            margin-bottom: 15px;
        }        p li,
        ul li,
        ol li {
            list-style-position: inside;
            margin-left: 5px;
        }        a {
            color: #429A82;
            text-decoration: underline;
        }        /* -------------------------------------
            BUTTONS
        ------------------------------------- */
        .btn {
            box-sizing: border-box;
            width: 100%;
        }        .btn > tbody > tr > td {
            padding-bottom: 15px;
        }        .btn table {
            width: auto;
        }        .btn table td {
            background-color: #ffffff;
            border-radius: 5px;
            text-align: center;
        }        .btn a {
            background-color: #ffffff;
            border: solid 1px #429A82;
            border-radius: 5px;
            box-sizing: border-box;
            color: #429A82;
            cursor: pointer;
            display: inline-block;
            font-size: 14px;
            font-weight: bold;
            margin: 0;
            padding: 12px 25px;
            text-decoration: none;
        }        .btn-primary table td {
            background-color: #429A82;
        }        .btn-primary a {
            background-color: #429A82;
            border-color: #429A82;
            color: #ffffff;
        }        /* -------------------------------------
            OTHER STYLES THAT MIGHT BE USEFUL
        ------------------------------------- */
        .last {
            margin-bottom: 0;
        }        .first {
            margin-top: 0;
        }        .align-center {
            text-align: center;
        }        .align-right {
            text-align: right;
        }        .align-left {
            text-align: left;
        }        .clear {
            clear: both;
        }        .mt0 {
            margin-top: 0;
        }        .mb0 {
            margin-bottom: 0;
        }        .preheader {
            color: transparent;
            display: none;
            height: 0;
            max-height: 0;
            max-width: 0;
            opacity: 0;
            overflow: hidden;
            mso-hide: all;
            visibility: hidden;
            width: 0;
        }        .powered-by a {
            text-decoration: none;
        }        hr {
            border: 0;
            border-bottom: 1px solid #f6f6f6;
            margin: 20px 0;
        }        /* -------------------------------------
            RESPONSIVE AND MOBILE FRIENDLY STYLES
        ------------------------------------- */
        @media only screen and (max-width: 620px) {
            table.body h1 {
                font-size: 28px !important;
                margin-bottom: 10px !important;
            }            table.body p,
            table.body ul,
            table.body ol,
            table.body td,
            table.body span,
            table.body a {
                font-size: 16px !important;
            }            table.body .wrapper,
            table.body .article {
                padding: 10px !important;
            }            table.body .content {
                padding: 0 !important;
            }            table.body .container {
                padding: 0 !important;
                width: 100% !important;
            }            table.body .main {
                border-left-width: 0 !important;
                border-radius: 0 !important;
                border-right-width: 0 !important;
            }            table.body .btn table {
                width: 100% !important;
            }            table.body .btn a {
                width: 100% !important;
            }            table.body .img-responsive {
                height: auto !important;
                max-width: 100% !important;
                width: auto !important;
            }
        }        /* -------------------------------------
            PRESERVE THESE STYLES IN THE HEAD
        ------------------------------------- */
        @media all {
            .ExternalClass {
                width: 100%;
            }            .ExternalClass,
            .ExternalClass p,
            .ExternalClass span,
            .ExternalClass font,
            .ExternalClass td,
            .ExternalClass div {
                line-height: 100%;
            }            .apple-link a {
                color: inherit !important;
                font-family: inherit !important;
                font-size: inherit !important;
                font-weight: inherit !important;
                line-height: inherit !important;
                text-decoration: none !important;
            }            #MessageViewBody a {
                color: inherit;
                text-decoration: none;
                font-size: inherit;
                font-family: inherit;
                font-weight: inherit;
                line-height: inherit;
            }            .btn-primary table td:hover {
                background-color: #34495e !important;
            }            .btn-primary a:hover {
                background-color: #34495e !important;
                border-color: #34495e !important;
            }
        }        
        &nbsp;
        
                            
                                    
                    
                        
                            
                                
                                                                            
                                                                                
                                            Your appointment has been successfully booked                                                                                
                                            Thank you for arranging an appointment with us. Below you can see the appointment details. Make changes by clicking the appointment link.                                                                                
                                            Appointment Details                                                                                
                                            
                                                
                                                    Service                                                
                                                
                                                    hair cutting                                                
                                            
                                            
                                                
                                                    Provider                                                
                                                
                                                    vivek kumar                                                
                                            
                                            
                                                
                                                    Start                                                
                                                
                                                    24/07/2026 12:45 pm                                                
                                            
                                            
                                                
                                                    End                                                
                                                
                                                    24/07/2026 1:15 pm
                                                
                                            
                                            
                                                
                                                    Timezone                                                
                                                
                                                    Calcutta (+5:30)                                                
                                                                                                                                        
                                                    
                                                        Status                                                    
                                                    
                                                        Booked                                                    
                                                
                                            
                                                                                        
                                                
                                                    Description                                                
                                                
                                                    bfjkebfkerfbj,erbjk                                                
                                            
                                            
                                                                                            
                                                    
                                                        Location                                                    
                                                    
                                                                                                                    noida sec 63                                                                                                            
                                                
                                            
                                            
                                                                                            
                                                    
                                                        Notes                                                    
                                                    
                                                        eghfvegfvw                                                    
                                                
                                                                                                                                                                    
                                            Customer Details                                                                                
                                                                                            
                                                    
                                                        Name                                                    
                                                    
                                                        anshul raj                                                    
                                                
                                            
                                                                                            
                                                    
                                                        Email                                                    
                                                    
                                                        raj973anshul@gmail.com                                                    
                                                
                                            
                                                                                            
                                                    
                                                        Phone Number                                                    
                                                    
                                                        9319163194                                                    
                                                
                                            
                                            
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                        
                                                                                
                                            
                                                
                                                    
                                                        
                                                            
                                                                
                                                                    
                                                                        Reschedule / Cancel Appointment
                                                                    
                                                                
                                                            
                                                        
                                                    
                                                
                                            
                                        
                                        
                                        
                                    
                                
                            
                        
                    
                    
                    
                
                
                                
                
                    
                        
                            
                                Powered by
                                
                                    Easy!Appointments
                                
                                |
                                
                                    Company Name                                
                            
                        
                    
                
                            
        
        &nbsp;
    

--b2=_xUA2XoAD2CC3kc01EmJBeUJCV2jzaO7M3wGbm8tVjfk
Content-Type: multipart/related;
 boundary="b3=_xUA2XoAD2CC3kc01EmJBeUJCV2jzaO7M3wGbm8tVjfk";
 type="text/html"

--b3=_xUA2XoAD2CC3kc01EmJBeUJCV2jzaO7M3wGbm8tVjfk
Content-Type: text/html; charset=us-ascii


<!doctype html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <title>
        Appointment Details | Easy!Appointments
    </title>
    <style>
        /* -------------------------------------
            GLOBAL RESETS
        ------------------------------------- */

        /*All the styling goes here*/

        img {
            border: none;
            -ms-interpolation-mode: bicubic;
            max-width: 100%;
        }

        body {
            background-color: #f6f6f6;
            font-family: sans-serif;
            -webkit-font-smoothing: antialiased;
            font-size: 14px;
            line-height: 1.4;
            margin: 0;
            padding: 0;
            -ms-text-size-adjust: 100%;
            -webkit-text-size-adjust: 100%;
        }

        table {
            border-collapse: separate;
            mso-table-lspace: 0pt;
            mso-table-rspace: 0pt;
            width: 100%;
        }

        table td {
            font-family: sans-serif;
            font-size: 14px;
            vertical-align: top;
        }

        /* -------------------------------------
            BODY & CONTAINER
        ------------------------------------- */

        .body {
            background-color: #f6f6f6;
            width: 100%;
        }

        /* Set a max-width, and make it display as block so it will automatically stretch to that width, but will also shrink down on a phone or something */
        .container {
            display: block;
            margin: 0 auto !important;
            /* makes it centered */
            max-width: 580px;
            padding: 10px;
            width: 580px;
        }

        /* This should also be a block element, so that it will fill 100% of the .container */
        .content {
            box-sizing: border-box;
            display: block;
            margin: 0 auto;
            max-width: 580px;
            padding: 10px;
        }

        /* -------------------------------------
            HEADER, FOOTER, MAIN
        ------------------------------------- */
        .main {
            background: #ffffff;
            border-radius: 3px;
            width: 100%;
        }

        .wrapper {
            box-sizing: border-box;
            padding: 20px;
        }

        .content-block {
            padding-bottom: 10px;
            padding-top: 10px;
        }

        .footer {
            clear: both;
            margin-top: 10px;
            text-align: center;
            width: 100%;
        }

        .footer td,
        .footer p,
        .footer span,
        .footer a {
            color: #999999;
            font-size: 12px;
            text-align: center;
        }

        /* -------------------------------------
            TYPOGRAPHY
        ------------------------------------- */
        h1,
        h2,
        h3,
        h4 {
            color: #000000;
            font-family: sans-serif;
            font-weight: 400;
            line-height: 1.4;
            margin: 0;
            margin-bottom: 15px;
        }

        h1 {
            font-size: 24px;
            font-weight: 300;
            text-align: center;
            margin-bottom: 40px;
        }

        .label {
            width: 120px;
        }

        .details-table {
            margin: 0 0 0 auto;
            width: 85%;
        }

        p,
        ul,
        ol {
            font-family: sans-serif;
            font-size: 14px;
            font-weight: normal;
            margin: 0;
            margin-bottom: 15px;
        }

        p li,
        ul li,
        ol li {
            list-style-position: inside;
            margin-left: 5px;
        }

        a {
            color: #429A82;
            text-decoration: underline;
        }

        /* -------------------------------------
            BUTTONS
        ------------------------------------- */
        .btn {
            box-sizing: border-box;
            width: 100%;
        }

        .btn > tbody > tr > td {
            padding-bottom: 15px;
        }

        .btn table {
            width: auto;
        }

        .btn table td {
            background-color: #ffffff;
            border-radius: 5px;
            text-align: center;
        }

        .btn a {
            background-color: #ffffff;
            border: solid 1px #429A82;
            border-radius: 5px;
            box-sizing: border-box;
            color: #429A82;
            cursor: pointer;
            display: inline-block;
            font-size: 14px;
            font-weight: bold;
            margin: 0;
            padding: 12px 25px;
            text-decoration: none;
        }

        .btn-primary table td {
            background-color: #429A82;
        }

        .btn-primary a {
            background-color: #429A82;
            border-color: #429A82;
            color: #ffffff;
        }

        /* -------------------------------------
            OTHER STYLES THAT MIGHT BE USEFUL
        ------------------------------------- */
        .last {
            margin-bottom: 0;
        }

        .first {
            margin-top: 0;
        }

        .align-center {
            text-align: center;
        }

        .align-right {
            text-align: right;
        }

        .align-left {
            text-align: left;
        }

        .clear {
            clear: both;
        }

        .mt0 {
            margin-top: 0;
        }

        .mb0 {
            margin-bottom: 0;
        }

        .preheader {
            color: transparent;
            display: none;
            height: 0;
            max-height: 0;
            max-width: 0;
            opacity: 0;
            overflow: hidden;
            mso-hide: all;
            visibility: hidden;
            width: 0;
        }

        .powered-by a {
            text-decoration: none;
        }

        hr {
            border: 0;
            border-bottom: 1px solid #f6f6f6;
            margin: 20px 0;
        }

        /* -------------------------------------
            RESPONSIVE AND MOBILE FRIENDLY STYLES
        ------------------------------------- */
        @media only screen and (max-width: 620px) {
            table.body h1 {
                font-size: 28px !important;
                margin-bottom: 10px !important;
            }

            table.body p,
            table.body ul,
            table.body ol,
            table.body td,
            table.body span,
            table.body a {
                font-size: 16px !important;
            }

            table.body .wrapper,
            table.body .article {
                padding: 10px !important;
            }

            table.body .content {
                padding: 0 !important;
            }

            table.body .container {
                padding: 0 !important;
                width: 100% !important;
            }

            table.body .main {
                border-left-width: 0 !important;
                border-radius: 0 !important;
                border-right-width: 0 !important;
            }

            table.body .btn table {
                width: 100% !important;
            }

            table.body .btn a {
                width: 100% !important;
            }

            table.body .img-responsive {
                height: auto !important;
                max-width: 100% !important;
                width: auto !important;
            }
        }

        /* -------------------------------------
            PRESERVE THESE STYLES IN THE HEAD
        ------------------------------------- */
        @media all {
            .ExternalClass {
                width: 100%;
            }

            .ExternalClass,
            .ExternalClass p,
            .ExternalClass span,
            .ExternalClass font,
            .ExternalClass td,
            .ExternalClass div {
                line-height: 100%;
            }

            .apple-link a {
                color: inherit !important;
                font-family: inherit !important;
                font-size: inherit !important;
                font-weight: inherit !important;
                line-height: inherit !important;
                text-decoration: none !important;
            }

            #MessageViewBody a {
                color: inherit;
                text-decoration: none;
                font-size: inherit;
                font-family: inherit;
                font-weight: inherit;
                line-height: inherit;
            }

            .btn-primary table td:hover {
                background-color: #34495e !important;
            }

            .btn-primary a:hover {
                background-color: #34495e !important;
                border-color: #34495e !important;
            }
        }

    </style>
</head>
<body>
<table role="presentation" border="0" cellpadding="0" cellspacing="0" class="body">
    <tr>
        <td>&nbsp;</td>
        <td class="container">
            <div class="content">

                <!-- START CENTERED WHITE CONTAINER -->
                <table role="presentation" class="main">

                    <!-- START MAIN CONTENT AREA -->
                    <tr>
                        <td class="wrapper">
                            <table role="presentation" border="0" cellpadding="0" cellspacing="0">
                                <tr>
                                    <td>

                                        <!-- Logo at the top center, embedded as CID -->
                                        <img src="cid:logo.png" alt="Logo" style="display:block;max-width:67px; margin: auto auto 24px;">

                                        <h1 style="text-align: center;">
                                            Your appointment has been successfully booked                                        </h1>

                                        <p style="text-align: center;">
                                            Thank you for arranging an appointment with us. Below you can see the appointment details. Make changes by clicking the appointment link.                                        </p>

                                        <h2 style="text-align: center;">
                                            Appointment Details                                        </h2>

                                        <table id="appointment-details" class="details-table" align="center">
                                            <tr>
                                                <td class="label" style="padding: 3px;font-weight: bold;">
                                                    Service                                                </td>
                                                <td style="padding: 3px;">
                                                    hair cutting                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="label" style="padding: 3px;font-weight: bold;">
                                                    Provider                                                </td>
                                                <td style="padding: 3px;">
                                                    vivek kumar                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="label" style="padding: 3px;font-weight: bold;">
                                                    Start                                                </td>
                                                <td style="padding: 3px;">
                                                    24/07/2026 12:45 pm                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="label" style="padding: 3px;font-weight: bold;">
                                                    End                                                </td>
                                                <td style="padding: 3px;">
                                                    24/07/2026 1:15 pm
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="label" style="padding: 3px;font-weight: bold;">
                                                    Timezone                                                </td>
                                                <td style="padding: 3px;">
                                                    Calcutta (+5:30)                                                </td>
                                            </tr>

                                                                                            <tr>
                                                    <td class="label" style="padding: 3px;font-weight: bold;">
                                                        Status                                                    </td>
                                                    <td style="padding: 3px;">
                                                        Booked                                                    </td>
                                                </tr>
                                            
                                                                                        <tr>
                                                <td class="label" style="padding: 3px;font-weight: bold;">
                                                    Description                                                </td>
                                                <td style="padding: 3px;">
                                                    bfjkebfkerfbj,erbjk                                                </td>
                                            </tr>
                                            
                                                                                            <tr>
                                                    <td class="label" style="padding: 3px;font-weight: bold;">
                                                        Location                                                    </td>
                                                    <td style="padding: 3px;">
                                                                                                                    noida sec 63                                                                                                            </td>
                                                </tr>
                                            
                                            
                                                                                            <tr>
                                                    <td class="label" style="padding: 3px;font-weight: bold;">
                                                        Notes                                                    </td>
                                                    <td style="padding: 3px;">
                                                        eghfvegfvw                                                    </td>
                                                </tr>
                                                                                    </table>

                                        <br>

                                        <h2 style="text-align: center;">
                                            Customer Details                                        </h2>

                                        <table id="customer-details" class="details-table" align="center">
                                                                                            <tr>
                                                    <td class="label" style="padding: 3px;font-weight: bold;">
                                                        Name                                                    </td>
                                                    <td style="padding: 3px;">
                                                        anshul raj                                                    </td>
                                                </tr>
                                            
                                                                                            <tr>
                                                    <td class="label" style="padding: 3px;font-weight: bold;">
                                                        Email                                                    </td>
                                                    <td style="padding: 3px;">
                                                        raj973anshul@gmail.com                                                    </td>
                                                </tr>
                                            
                                                                                            <tr>
                                                    <td class="label" style="padding: 3px;font-weight: bold;">
                                                        Phone Number                                                    </td>
                                                    <td style="padding: 3px;">
                                                        9319163194                                                    </td>
                                                </tr>
                                            
                                            
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                </table>

                                        <br>
                                        <br>

                                        <table class="btn btn-primary" role="presentation" border="0" cellpadding="0" cellspacing="0">
                                            <tbody>
                                                <tr>
                                                    <td align="center">
                                                        <table role="presentation" border="0" cellpadding="0" cellspacing="0">
                                                            <tbody>
                                                                <tr>
                                                                    <td>
                                                                        <a href="http://localhost/easy/index.php/booking/reschedule/U3jOlCBIi1TS" target="_blank">Reschedule / Cancel Appointment</a>
                                                                    </td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                        
                                        
                                    </td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                    
                    <!-- END MAIN CONTENT AREA -->
                </table>
                
                <!-- END CENTERED WHITE CONTAINER -->

                <!-- START FOOTER -->
                <div class="footer">
                    <table role="presentation" border="0" cellpadding="0" cellspacing="0">
                        <tr>
                            <td class="content-block powered-by">
                                Powered by
                                <a href="https://easyappointments.org" style="text-decoration: none;">
                                    Easy!Appointments
                                </a>
                                |
                                <a href="https://example.org" style="text-decoration: none;">
                                    Company Name                                </a>
                            </td>
                        </tr>
                    </table>
                </div>
                <!-- END FOOTER -->

            </div>
        </td>
        <td>&nbsp;</td>
    </tr>
</table>
</body>
</html>

--b3=_xUA2XoAD2CC3kc01EmJBeUJCV2jzaO7M3wGbm8tVjfk
Content-Type: image/png; name=logo.png
Content-Transfer-Encoding: base64
Content-ID: <logo.png>
Content-Disposition: inline; filename=logo.png

iVBORw0KGgoAAAANSUhEUgAAAIAAAACACAYAAADDPmHLAAAABHNCSVQICAgIfAhkiAAAAAlwSFlz
AAANFQAADRUB58SRCwAAABl0RVh0U29mdHdhcmUAd3d3Lmlua3NjYXBlLm9yZ5vuPBoAAAAXdEVY
dFRpdGxlAEVhc3khQXBwb2ludG1lbnRzQsoP/QAAABZ0RVh0QXV0aG9yAEFsZXggVHNlbGVnaWRp
c/45MTwAABTXSURBVHic7V17kBTHef/1zO7eC457cAfCQseBjXhISEmkJIqtKMaSMUgJBon3oTiR
hO8wSLLiuFKppMp/5J9UrFQlSgWKe+Aqm1ji5SrZgkMcIAlxgAXmcZhHDIdQQCDxEIaD29vHTP7Y
7d2Z2e6e7tnZvdf+qvZmb6bn62/6+81099fffkNA8YPlZYF42T+ZxHiOEHIfQEIAAII0GN9NACBE
WCbzu3/lzYz9RFKm44v0Ofbypke9/Sqfef287yQCYl4AwRYU6f+C5398J3U4+FrjHxgwNxFgUvok
uYYpEMCb3n6VVyCAdf85aFiAF//9CMEPlpfp8ZKjhJAvZ5xkZpwoIIFlB6u8S0OKvysQwEfZmd9J
xvX4RwBOOwvKyhmfq8N5RMIztEC89J8J0sYnADTDKr2AoQBCAGIlJFCPYPE/agDmpwqBwDQBo2D9
IQcTgGmadhIQPKsBqEsVMguGH+owTdPaFUzQACRG+0Y/aVRA/pG+z0NaP6pRQH/B0gsUCDDMEehv
BXKJ6rJS1I4YiaCu21hvwkRPXx8u/f4WIkZcKGN0WRkeGT8e1aWlADSbnFt9vfjNpYu4ePuWUEZJ
IIi5U6fhgTH3IKjptmO98SgO/N8F7Dz/O8QFYzACgrmTp2LBlIdQVVJqOxYz4jh85RL+68h+XO29
I9QlQ27g+99N1GpCbX5q+T4Q/QDjRo1CbfkIoWwjbuDU1auIxuPMMrUjRmLOlKnQeG0BwCQm3j/f
jXM3rjP1DukB/P3XnsDYESMhwtHPL6P1yK8z9U1uVz/6VSyaOkMo44twL/56+0Zc7+21nCtu5yHZ
BRQFAhgzcoRrOU3XMK68nHv8sbo6i/E5MAkeu68OusZuypn1k1yNDwAP196DaTW1zGP1FVVYMOVB
VxmVxSVYMeNPXMtZMSQJUBYKSXsyRhSFmPuDupZ87LsjpAdQWVzCPFZfVS2pCfDlSnbZB2vGQiNu
TExgRs1Y6fqAIUoAzfW2tZTlNKzu6KvdoHPqDCroEuDUGdLldSkKqOk9JAlQgDwKBBjmGJIEUHFp
myb7Ea3qFueVVpFickobpryb1lD05g9JAkRi8g0WicU4++Poi4t9BGkk/Aos3Lh7V1qX65yyl3tu
S8v41MUn4cSQJEBPXx96o1Gpsp/19DD3mzBx4vJlKRlnr1/DXU59e86fRUyCSF+Ee/HRpxeZxz66
fBH/e/2aqwwTJv7n1FHXclbo2mOP/Cj1n0dHUPp7/h1BvHpuh/tQVhRKeAFZZQ0Tl27ewo3eu5ky
kt+v3ulBMBBATdmI5KFMR9DHN2+g85MLaS+eQ+/bkQiu9NzG5Jpa7mj+8zs9aDv6Ea6HGboQwDBN
HLpyCdNrx6CmtIwpIxyP4j8Pd2LnhbMOGeJ2HrKewMRpBKVFQYQ0uyvYIMDdSB+icUOKXOXFRagq
LU2spVva5ffh3oTXTULvkmAQEyurEArYdemJRHD+5g3EDNO13TRNw/TRtQkSWK49YsRx4trnuBlm
6TKMCeD708XaFhnX7qNs635BWaWQME6ZITkGKEAeBQIMcxQIMMxRIMAwR4EAwxzpiCAC1FePxg9n
zkr97/iSCetImLHf7Tzp/eCMpn2p0+1Ezrm8a5eqU2KnoE4hMsrYZwH/emw3um9dT/1vI0DtyJF4
8bHHJWopYLBi/ZlfJwiQRKELGOYoEGCYo0CAYY4CAYY5CgQY5lD+YYhhGIhGozBNM/PXpkkQQkAI
QTAYZB6niMfjiMfjQjkAoOs6NE7YNdWJ6sMD1Yl+WKAy3KKB3ORQWYbhHphCCBFeG5C+vmx1YkHp
CWAYBvr6+mwKsRSjFx+JRLiKR6NRxGIxVzmmaSIWiyHOCaowDAPxeNy1kahOIqPIGN8qi1fWrR6W
LB7oDZKtTjwoESDGCZ/iVWqaJtNwvIsWKc9rJOd+twYQ1a3aeDydlOMJOXV7+bl+TgngdvfI7vcq
R7aR8tFwfmNQEEDm7spWIa/n5ELGcIDyLMALCXJVJh8yhjo8TQNlSJAvouRDxlCGZz+AHwYcKDKG
M7JyBOXrDh1M3c5gQ9aewAIJBjeUPIGEEO5IX8UDxSorI4PnLbQ6k9xkyJJA1aOmIh8Aum5cxtaP
u/BJzxeYVjkWz09+BGNL+ckqcgUlAmiaJnR+sBpNZ/wahuf6FDW8aL+10bMhkqwuKnJYaDl9EKs6
tyJmGKnY/X/reg+/nPUC/rQ2lbaRe8Op6iSCUhcQCoWEfmunsrquMwlA1wlkZFDwygcCAabxeHJ0
XecaznltMv53Xh08tJw6iJUfbkEsnryRklVcC9/Bk++sxQdXum3ylQ3qsq7ghPJiUHFxMWKxmNCb
RxtT1BDUENRv7rxQyn5N06BpmrAhAoGALwsvtB7ZhRcRNE3LkEONn5mK1wRMgjuxCOZsb8a22S/h
z8dOtMnxQycWPKWJCwT8yS5HjZstCCFCsqnK8tr/i+Q0n9yPpg82J4wvEH8nFsGc9mZs+1aaBH7p
xEIhHiAPaD65H03vb4JB72J6M9u2Zup/SgJrd5ArFAiQYzT/dj+a3rMYXwZm/kjg2RUci8W4H9k1
bCC9ns/7yMqh/SQdUzg/fsqRlbXuRGfa+CZALHd5xpYBSoL3L5/z5dpYUO7MaSCHFbz+KRAIcMcL
hmHYAkJ4MuLxuHDWACAlR2baJhpQykTxWPUVjV/WnejEyvc3J4wv032bAEhiMAhC/0+Q4OkdLfjV
N1/A42Pqs9KJBeWAEFZQCI+BvEge0zRTYWVuMugxXjCKW3SSU47IwLJRPFQWr751XZ1Y+d5mGEZm
n297CkjiTiyCuTvX4+DVTzzrxIMSAXhhWbRy2f1eImlE4VeyMuhxVv0qxhfVtaZrH5r2bJbr810G
g1bcioYxe0eLKwlUr2PABYT0V0SQFzjrWXN8H1bt3gwThlQf716B/d9b0TC+3fETXAurZQQXwVcC
sMp4MdBgjANYc3wfVu3ZzM31x+0GFNW8Gu7Bm91qmcBE8D0iyK8yg4kEa44l73znPF8FvG6AIevk
zc88VMBGTiKC/CozUIgkQnPXfqxm3vmCKV+WKtWPrMpOgAX9GhEkU2Ygk2Dt8X1o3LlRzcmThNAn
IBBXrAcwv8793QGyyMqpn826uUjO53duY+/5s7gZ7sWj99ZhxtgvSa3zu/1SBxAvl6pcz9rj+/Dy
nq1pWyXn7fatZV6vjEyfgE40tHxtISaVy7+DwA1ZB4TINrwbqJwNRz/CK7/chN5YNNVw8x94GOvm
LsUohjPIS0CI23TTTcbaY0njE2ptCTAIQogJU5IgOtHQ9vhCLJ74sLBcTuMBRB40bgUMzxRPzvpD
+9H4i5+n8/wmxW49cRQL32xFmOMMktXFrX4ZGS1dB/DKnq2JPp83YMt6EAibbJ1oaH18IZZN+kMP
gsVQIoBoGZjXaKxzWEEZPzl0AC+/ze9Pd3efwbyfrs1IAs1aBhYZkLe06tzPktHSdQArOxQWdnwg
CDV+g6Txc/oE0HUdoVBI6klACEFRURG3rDW6yGZ8wcCo4+wpzPuZnQS8wBOWAWlZUUQQjwQtxw9g
5c5NmVM9gffOFTyfQHKrEw1tTyzC8q/8kZQ4t8AZFpQHgXSBxy0iSGZhJhQKofXgvrTxJXTv+N1p
zPvZWvyioRElyTEBDT1zu/PdYA0ssRn/WGfC+ETSvevDYFAnGtY/sRjLJz+SoQ9Pdy/wPA2k0Tys
j6wyrQf3oWnzBseiibuXrOPs6YwnAZCZA8Drb+atslqP70fTjo2A3+5dnmcQSeP/Rdr4Vn38uj6K
fgsIaT24D02bNnhYNDGT3QGbBH6i5WgnGtvfknLvyhBXBjo0rP+63fi5RL8QoO3Ah2jauIHd5yug
4+xpzNuQGxKkjJ8n9y6QvPNn5s/4gIcxgHUtnzdnpgMq1gyg7cCHyTsf7D7R2Wc6+1QHKAk2L34J
JcFgxkDUCpnuyTRNtBztRFP7xow+n8Ayb2f29ULRnGtNbAMaQRvnzqfjLd44gF6TlwBb5dXAvr4+
W0oWa5iUNZwqFotlpIhJ3fmG6SkwIqFE8o9tdnAaz/58He44Xtzk1IuGmfFgGAaaj+xD0/aN/Me+
m3Ie3Ls60dA2cwmW3882vozzil6fKpQI4IzisSrAAo33A4C3u46h8S1Ony9wgshi17kzWPBWC+5G
IsJyoriCtYf3YmW7xfgSAzY1ZBJEh4bWry9Cw+TMqZ6XCJ9+Cwhxiwj60ba3vS/KSBJkV7c8CZxY
e3gvXn53i9qdnyVxdaKhdeYiLGMYn6enq0q5DAmTDZh07gtHozh5JfkKNt7d5NPUSpYEVqw9vBer
2zfn371rMX6+A1go8pIipigQwIiiIskKrFtvBNnVfQYLNsqRoOU3nVi1fZP8nc8jroJ+OtHQIrjz
84mcpYixghCCWVOm8/tUpcqtWz5BdnWfwXMbW4UkWHtoLxrfedN3967oCaITDa3fWISG+/vf+EAO
A0Kcx1+fvxATqkdzCou23gmyu/s0lwRrDn2AVdsk73yfBoMJ4y/GsgFifCDHKWKsx8eWl2P3y3+H
idU1Hipy2Qqwq/sMnttkJ0HrkU6sfmcTfI/eFTxBdKKh5clFA8r4QJ5TxIyvqETH6tdQXz3ax8Gg
oD9Obq0kaDuyH02/yr97t+XJRWhgzPP7GzkPCHFifEUl2htfQV2VS1iTT4ag5NrVfQZ/1vo6Vm7b
6Jt7V4a4OtHQ+tRiNEwRGz9XP/92gxIBVLKDiM6ZUF2N9u+uRn0VZ0wgAw8EOXXtM4ae7k8Qr3rp
hCQe+1Py99jP6W8D3dK/OxuXtx6gaRrqqqqxbcWqVHeQ7dQqU5n01m/vnYx+OtHQ8tRiNEx1f+zz
lnRVjZnzdPGEEJSUlCAYDKZy+NMoG/qh/weDQRQJ5v7BYBD1o2uwo/GVBAlEcJlaKUFiwKYCFnF1
aGidtQTPT/9j13V8tywptE3d5Hj5ZTDgcRBIjVtcXIzi4mIUFRXZPqFQSCqNjK7rqB9dg12rErMD
PxeIbFtlWc6tvF460dA2e2nK+KLAGdngGRk5XlPtDIgMIeMrKtHxvdfsU0Q/71Q/uxiBT4Aaf/m0
Rz0I7h8MCAIAaRJMkvUT+EyQbJ8gg9H4QBauYFFaF5W0JdZUJ18qH4V3m17BpKokCXx2zuSqi9GJ
hrY5S7F8ut34zngE1kdaBZ/kOJGzFDGEEAQCAW76NtM0bfkGqYx7RozE9hWr8K11b6D7xrVkYbAj
bOl+L7DJZMiWRML4y9DgML7KTZBt2hoZOdxzVArH43HpFDE0dIynvPOYVca9oyrQvmI1Jsr6CXLg
vZPpYnSioe3p7IxPyzNVUDC+l3oBn14aBfAdQbx0LG6RRSkSVCZJ4NPAza8YBB0aWmYvyTA+wG8L
oYoKkVaqckTIeYoY1beDyT0Jcue9k3mC6ERDy5wlWDbdP9/+oAgI8SsngIqMe0dVoP0lhe4gISFn
BNEJ8d34fiKnTwDZCvxI2MAigX124P1R7jU5g040tDw9cI3vBf2WIsYLCXY2vir2E/jhE6ACnFM9
UOMPrnm+GwbVS6PGV1Sio/H78s6ilJDMrYpPQCcaWp5ZgmUPDC3jAwPkpVEqREmRoKoG2Xrv0hWw
tmbKvTtUjQ/kISJIliSeSODaHWRHkMFo/Jw6gkTv+lE5x4sc54WNr6jEuytexYTKKs93vVtyhta/
WoplD/KN72cUz6CICPKSIob30ijV8DLWOXWVVehY8Wp6iijhvZOBTjQ0P7MESx/wFsblNR9BruSI
oJwiRpS23fnLXNFLpmRTzQD8yCIAmFA9GjtelPQTSAwGdU1D818uwbIHH3V9IvH0V/HJiwI5VIM8
vEQEKS8GBYPBVIoY2kDOSmUyV9AcQiL/tWwGjPrRNehY8Sqeav4PnLt+1fMCkU40tM1twLIZ4j5f
ppFZL43yIoumrXGTldcUMVQpmi/IGhJmDWGSUsARUuZVzn3J7iA1MFR172oa2r7dgIaH3MO4ZCET
xuWXLK8YMAEhfmB8RaWdBCJYCBHQSMr4ww1DigBAkgQvJUkg497VNLTOWz4sjQ94zBXMSxRBQQcv
bu/yE730iD7WWPn7nHBGxowbWY4dL6zGrNY3cO7GVVoKrNy7TuPLOKZkHruykToysmRfiumlK1Be
DQyHw6l3AVlDwKyfeDyOaDSKiOCXubFYDNFo1BZCZv1YZVlfLsXSyRmKZpom7i2vQPvfruLODnRN
Q+v85Wh4OG1855vBeB9r5hOeTjJyrNfJA31zWrZyeFAOCFEJXKC5gljlnQ3oFiPAC0ZxvlrO5jEc
VYnt31mFqbVjbYPB0mAIP13wHZvxvcTW8Rpc1RC8uv2SI4JSF+DGetYjSOXCeDLoMdZxHiFpubrK
Khxc+UNsP/NbdH32KcaVV2D2/dMxviL7ly70VxCHCIZhKL1GV4kAMv56GQOpyvACq5yQHsDcaQ9h
7rSHALBd0f1tTL+uWxV5SRGTCxky6G+jDgbkJUWMVxl+h5cVkIm8pYjJVZl8xSkOVeQtRUwuyxRI
4B15TRGTjYzBNPYYTMh7ihgevMqw6jQQSODHdeQTvhAAEAdyOCH6vaCobplGyheRZORkiwEXECIK
4gAyG44uGzvB28+SQcvzAkJY+2XWKdz2y8xCeNfgV2oXL/79nAaEEEJQXFyc+mEnz3lBG1MUPUTz
DcksBtHYAJ5OwWAw5aV0Cy4RecloHW4EspbllaEBITJPNZHRrHJE12aVpwLl1UAa6uUHZNLIyED0
hFCF11QrTmQbqJErWU4MuXiAAtRQIMAwR4EAwxwagFTUhsy7eQsY3AjHbTaOaAAu0P9OXL6EnWdO
5l2pAvKDdy+ewfEbn1p3fRwAyBbA/AcAiBsGnml+A9PvGYegnhxVWwefjIGoCQDWESqvvO1cxfK8
EbDUuexT0/uJ4vn28qbwXFW9Oe0iONfk7Hciahg4cfOK/aVdJrYQrFhRGigjR0HwFbsAuYbxRAAf
y2c2AJGU6fgifY5HAuSoXVwJwG+X84iEZ2hYt+4uIWSRCZxDAcMF50DwLL733z06ABj7D10xvzqt
VTNCGoAxIBgJkITLLM93dPbl8/sEEH8fUO0SAcE5AOtQrC3F37z+CQD8Pw2S6Ml7d2N5AAAAAElF
TkSuQmCC

--b3=_xUA2XoAD2CC3kc01EmJBeUJCV2jzaO7M3wGbm8tVjfk--


--b2=_xUA2XoAD2CC3kc01EmJBeUJCV2jzaO7M3wGbm8tVjfk--

--b1=_xUA2XoAD2CC3kc01EmJBeUJCV2jzaO7M3wGbm8tVjfk
Content-Type: text/calendar; name=invitation.ics
Content-Transfer-Encoding: base64
Content-Disposition: attachment; filename=invitation.ics

QkVHSU46VkNBTEVOREFSDQpWRVJTSU9OOjIuMA0KUFJPRElEOi0vL0Vhc3lBcHBvaW50bWVudHMv
L09wZW4gU291cmNlIFdlYiBTY2hlZHVsZXIvL0VODQpDQUxTQ0FMRTpHUkVHT1JJQU4NCk1FVEhP
RDpSRVFVRVNUDQpCRUdJTjpWVElNRVpPTkUNClRaSUQ6RXVyb3BlL0Jlcmxpbg0KQkVHSU46U1RB
TkRBUkQNCkRUU1RBUlQ6MjAyNjEwMjVUMDEwMDAwWg0KVFpPRkZTRVRUTzorMDEwMA0KVFpPRkZT
RVRGUk9NOiswMjAwDQpSUlVMRTpGUkVRPVlFQVJMWTtCWU1PTlRIPTExO0JZREFZPTFTVQ0KRU5E
OlNUQU5EQVJEDQpCRUdJTjpEQVlMSUdIVA0KRFRTVEFSVDoyMDI2MDMyOVQwMTAwMDBaDQpUWk9G
RlNFVFRPOiswMjAwDQpUWk9GRlNFVEZST006KzAxMDANClJSVUxFOkZSRVE9WUVBUkxZO0JZTU9O
VEg9MztCWURBWT0yU1UNCkVORDpEQVlMSUdIVA0KRU5EOlZUSU1FWk9ORQ0KQkVHSU46VkVWRU5U
DQpVSUQ6ZWEtYzgxZTcyOGQ5ZDRjMmY2MzZmMDY3Zjg5Y2MxNDg2MmMNCkRUU1RBUlQ6MjAyNjA3
MjRUMDcxNTAwWg0KRFRFTkQ6MjAyNjA3MjRUMDc0NTAwWg0KU0VRVUVOQ0U6MTc4NDc5Njg5MA0K
U1RBVFVTOkNPTkZJUk1FRA0KU1VNTUFSWTpoYWlyIGN1dHRpbmcNCkRFU0NSSVBUSU9OOlxuUHJv
dmlkZXJcblxuTmFtZTogdml2ZWsga3VtYXJcbkVtYWlsOiByYWo5NzNhbnNodWxAZ21haWwNCiAu
Y29tXG5QaG9uZSBOdW1iZXI6IFxuQWRkcmVzczogXG5DaXR5OiBcblppcCBDb2RlOiBcblxuQ3Vz
dG9tZXJcblxuTmFtDQogZTogYW5zaHVsIHJhalxuRW1haWw6IHJhajk3M2Fuc2h1bEBnbWFpbC5j
b21cblBob25lIE51bWJlcjogOTMxOTE2MzE5NA0KIFxuQWRkcmVzczogXG5DaXR5OiBcblppcCBD
b2RlOiBcblxuTm90ZXNcblxuZWdoZnZlZ2Z2dw0KTE9DQVRJT046bm9pZGEgc2VjIDYzDQpEVFNU
QU1QOjIwMjYwNzIzVDA4NTQ1MVoNCkFUVEVOREVFO0NVVFlQRT1JTkRJVklEVUFMO1JPTEU9UkVR
LVBBUlRJQ0lQQU5UO1BBUlRTVEFUPU5FRURTLUFDVElPTjsNCiBSU1ZQPVRSVUU7Q049YW5zaHVs
IHJhajptYWlsdG86cmFqOTczYW5zaHVsQGdtYWlsLmNvbQ0KQVRURU5ERUU7Q1VUWVBFPUlORElW
SURVQUw7Uk9MRT1SRVEtUEFSVElDSVBBTlQ7UEFSVFNUQVQ9QUNDRVBURUQ7UlNWUA0KID1GQUxT
RTtDTj12aXZlayBrdW1hcjptYWlsdG86cmFqOTczYW5zaHVsQGdtYWlsLmNvbQ0KT1JHQU5JWkVS
O0NOPXZpdmVrIGt1bWFyOm1haWx0bzpyYWo5NzNhbnNodWxAZ21haWwuY29tDQpCRUdJTjpWQUxB
Uk0NClRSSUdHRVI7VkFMVUU9REFURS1USU1FOjIwMjYwNzI0VDA3MDAwMFoNCkFDVElPTjpFTUFJ
TA0KU1VNTUFSWTpBbGFybSBub3RpZmljYXRpb24NCkRFU0NSSVBUSU9OOlRoaXMgaXMgYW4gZXZl
bnQgcmVtaW5kZXINCkFUVEVOREVFO0NVVFlQRT1JTkRJVklEVUFMO1JPTEU9UkVRLVBBUlRJQ0lQ
QU5UO1BBUlRTVEFUPU5FRURTLUFDVElPTjsNCiBSU1ZQPVRSVUU7Q049YW5zaHVsIHJhajptYWls
dG86cmFqOTczYW5zaHVsQGdtYWlsLmNvbQ0KRU5EOlZBTEFSTQ0KQkVHSU46VkFMQVJNDQpUUklH
R0VSO1ZBTFVFPURBVEUtVElNRToyMDI2MDcyNFQwNjE1MDBaDQpBQ1RJT046RU1BSUwNClNVTU1B
Ulk6QWxhcm0gbm90aWZpY2F0aW9uDQpERVNDUklQVElPTjpUaGlzIGlzIGFuIGV2ZW50IHJlbWlu
ZGVyDQpBVFRFTkRFRTtDVVRZUEU9SU5ESVZJRFVBTDtST0xFPVJFUS1QQVJUSUNJUEFOVDtQQVJU
U1RBVD1ORUVEUy1BQ1RJT047DQogUlNWUD1UUlVFO0NOPWFuc2h1bCByYWo6bWFpbHRvOnJhajk3
M2Fuc2h1bEBnbWFpbC5jb20NCkVORDpWQUxBUk0NCkVORDpWRVZFTlQNCkVORDpWQ0FMRU5EQVIN
Cg==

--b1=_xUA2XoAD2CC3kc01EmJBeUJCV2jzaO7M3wGbm8tVjfk--
',
            ),
          ),
          1 => 
          array (
            'file' => 'C:\\xampp\\htdocs\\easy\\vendor\\phpmailer\\phpmailer\\src\\PHPMailer.php',
            'line' => 1670,
            'function' => 'postSend',
            'class' => 'PHPMailer\\PHPMailer\\PHPMailer',
            'type' => '->',
            'args' => 
            array (
            ),
          ),
          2 => 
          array (
            'file' => 'C:\\xampp\\htdocs\\easy\\application\\libraries\\Email_messages.php',
            'line' => 119,
            'function' => 'send',
            'class' => 'PHPMailer\\PHPMailer\\PHPMailer',
            'type' => '->',
            'args' => 
            array (
            ),
          ),
          3 => 
          array (
            'file' => 'C:\\xampp\\htdocs\\easy\\application\\libraries\\Notifications.php',
            'line' => 84,
            'function' => 'send_appointment_saved',
            'class' => 'Email_messages',
            'type' => '->',
            'args' => 
            array (
              0 => 
              array (
                'id' => 2,
                'create_datetime' => '2026-07-23 10:54:50',
                'update_datetime' => '2026-07-23 10:54:50',
                'book_datetime' => '2026-07-23 10:54:50',
                'start_datetime' => '2026-07-24 12:45:00',
                'end_datetime' => '2026-07-24 13:15:00',
                'location' => 'noida sec 63',
                'meeting_link' => NULL,
                'notes' => 'eghfvegfvw',
                'hash' => 'U3jOlCBIi1TS',
                'color' => '#7cbae8',
                'status' => 'Booked',
                'is_unavailability' => false,
                'id_users_provider' => 5,
                'id_users_customer' => 6,
                'id_services' => 2,
                'id_google_calendar' => NULL,
                'id_caldav_calendar' => NULL,
              ),
              1 => 
              array (
                'id' => 5,
                'create_datetime' => '2026-07-22 13:13:04',
                'update_datetime' => '2026-07-22 13:13:04',
                'first_name' => 'vivek',
                'last_name' => 'kumar',
                'email' => 'raj973anshul@gmail.com',
                'mobile_number' => NULL,
                'phone_number' => '',
                'address' => '',
                'city' => '',
                'state' => '',
                'zip_code' => '',
                'notes' => '',
                'timezone' => 'Europe/Berlin',
                'language' => 'english',
                'custom_field_1' => NULL,
                'custom_field_2' => NULL,
                'custom_field_3' => NULL,
                'custom_field_4' => NULL,
                'custom_field_5' => NULL,
                'is_private' => false,
                'ldap_dn' => NULL,
                'id_roles' => 2,
                'settings' => 
                array (
                  'username' => 'vivekkumar',
                  'password_reset_token' => NULL,
                  'password_reset_expires' => NULL,
                  'working_plan' => '{"sunday":{"start":"09:00","end":"18:00","breaks":[{"start":"14:30","end":"15:00"}]},"monday":{"start":"09:00","end":"18:00","breaks":[{"start":"14:30","end":"15:00"}]},"tuesday":{"start":"09:00","end":"18:00","breaks":[{"start":"14:30","end":"15:00"}]},"wednesday":{"start":"09:00","end":"18:00","breaks":[{"start":"14:30","end":"15:00"}]},"thursday":{"start":"09:00","end":"18:00","breaks":[{"start":"14:30","end":"15:00"}]},"friday":{"start":"09:00","end":"18:00","breaks":[{"start":"14:30","end":"15:00"}]},"saturday":{"start":"09:00","end":"18:00","breaks":[{"start":"14:30","end":"15:00"}]}}',
                  'working_plan_exceptions' => '[]',
                  'notifications' => '1',
                  'google_sync' => NULL,
                  'google_token' => NULL,
                  'google_calendar' => NULL,
                  'caldav_sync' => '0',
                  'caldav_url' => NULL,
                  'caldav_username' => NULL,
                  'caldav_password' => NULL,
                  'sync_past_days' => '30',
                  'sync_future_days' => '90',
                  'calendar_view' => 'table',
                ),
                'services' => 
                array (
                  0 => 1,
                  1 => 2,
                ),
              ),
              2 => 
              array (
                'id' => 2,
                'create_datetime' => '2026-07-23 10:51:48',
                'update_datetime' => '2026-07-23 10:51:48',
                'name' => 'hair cutting',
                'duration' => '30',
                'price' => 50.0,
                'currency' => '',
                'description' => 'bfjkebfkerfbj,erbjk',
                'slot_interval' => '15',
                'color' => '#7cbae8',
                'location' => 'noida sec 63',
                'attendants_number' => 1,
                'is_private' => false,
                'id_service_categories' => 1,
              ),
              3 => 
              array (
                'id' => 6,
                'create_datetime' => '2026-07-23 10:54:50',
                'update_datetime' => '2026-07-23 10:54:50',
                'first_name' => 'anshul',
                'last_name' => 'raj',
                'email' => 'raj973anshul@gmail.com',
                'mobile_number' => NULL,
                'phone_number' => '9319163194',
                'address' => '',
                'city' => '',
                'state' => NULL,
                'zip_code' => '',
                'notes' => NULL,
                'timezone' => 'Asia/Calcutta',
                'language' => 'english',
                'custom_field_1' => NULL,
                'custom_field_2' => NULL,
                'custom_field_3' => NULL,
                'custom_field_4' => NULL,
                'custom_field_5' => NULL,
                'is_private' => '0',
                'ldap_dn' => NULL,
                'id_roles' => 3,
              ),
              4 => 
              array (
                'company_name' => 'Company Name',
                'company_link' => 'https://example.org',
                'company_email' => 'info@example.org',
                'company_color' => NULL,
                'date_format' => 'DMY',
                'time_format' => 'regular',
              ),
              5 => 'Your appointment has been successfully booked',
              6 => 'Thank you for arranging an appointment with us. Below you can see the appointment details. Make changes by clicking the appointment link.',
              7 => 'http://localhost/easy/index.php/booking/reschedule/U3jOlCBIi1TS',
              8 => 'raj973anshul@gmail.com',
              9 => 'BEGIN:VCALENDAR
VERSION:2.0
PRODID:-//EasyAppointments//Open Source Web Scheduler//EN
CALSCALE:GREGORIAN
METHOD:REQUEST
BEGIN:VTIMEZONE
TZID:Europe/Berlin
BEGIN:STANDARD
DTSTART:20261025T010000Z
TZOFFSETTO:+0100
TZOFFSETFROM:+0200
RRULE:FREQ=YEARLY;BYMONTH=11;BYDAY=1SU
END:STANDARD
BEGIN:DAYLIGHT
DTSTART:20260329T010000Z
TZOFFSETTO:+0200
TZOFFSETFROM:+0100
RRULE:FREQ=YEARLY;BYMONTH=3;BYDAY=2SU
END:DAYLIGHT
END:VTIMEZONE
BEGIN:VEVENT
UID:ea-c81e728d9d4c2f636f067f89cc14862c
DTSTART:20260724T071500Z
DTEND:20260724T074500Z
SEQUENCE:1784796890
STATUS:CONFIRMED
SUMMARY:hair cutting
DESCRIPTION:\\nProvider\\n\\nName: vivek kumar\\nEmail: raj973anshul@gmail
 .com\\nPhone Number: \\nAddress: \\nCity: \\nZip Code: \\n\\nCustomer\\n\\nNam
 e: anshul raj\\nEmail: raj973anshul@gmail.com\\nPhone Number: 9319163194
 \\nAddress: \\nCity: \\nZip Code: \\n\\nNotes\\n\\neghfvegfvw
LOCATION:noida sec 63
DTSTAMP:20260723T085451Z
ATTENDEE;CUTYPE=INDIVIDUAL;ROLE=REQ-PARTICIPANT;PARTSTAT=NEEDS-ACTION;
 RSVP=TRUE;CN=anshul raj:mailto:raj973anshul@gmail.com
ATTENDEE;CUTYPE=INDIVIDUAL;ROLE=REQ-PARTICIPANT;PARTSTAT=ACCEPTED;RSVP
 =FALSE;CN=vivek kumar:mailto:raj973anshul@gmail.com
ORGANIZER;CN=vivek kumar:mailto:raj973anshul@gmail.com
BEGIN:VALARM
TRIGGER;VALUE=DATE-TIME:20260724T070000Z
ACTION:EMAIL
SUMMARY:Alarm notification
DESCRIPTION:This is an event reminder
ATTENDEE;CUTYPE=INDIVIDUAL;ROLE=REQ-PARTICIPANT;PARTSTAT=NEEDS-ACTION;
 RSVP=TRUE;CN=anshul raj:mailto:raj973anshul@gmail.com
END:VALARM
BEGIN:VALARM
TRIGGER;VALUE=DATE-TIME:20260724T061500Z
ACTION:EMAIL
SUMMARY:Alarm notification
DESCRIPTION:This is an event reminder
ATTENDEE;CUTYPE=INDIVIDUAL;ROLE=REQ-PARTICIPANT;PARTSTAT=NEEDS-ACTION;
 RSVP=TRUE;CN=anshul raj:mailto:raj973anshul@gmail.com
END:VALARM
END:VEVENT
END:VCALENDAR
',
              10 => 'Asia/Calcutta',
            ),
          ),
          4 => 
          array (
            'file' => 'C:\\xampp\\htdocs\\easy\\application\\controllers\\Booking.php',
            'line' => 567,
            'function' => 'notify_appointment_saved',
            'class' => 'Notifications',
            'type' => '->',
            'args' => 
            array (
              0 => 
              array (
                'id' => 2,
                'create_datetime' => '2026-07-23 10:54:50',
                'update_datetime' => '2026-07-23 10:54:50',
                'book_datetime' => '2026-07-23 10:54:50',
                'start_datetime' => '2026-07-24 09:15:00',
                'end_datetime' => '2026-07-24 09:45:00',
                'location' => 'noida sec 63',
                'meeting_link' => NULL,
                'notes' => 'eghfvegfvw',
                'hash' => 'U3jOlCBIi1TS',
                'color' => '#7cbae8',
                'status' => 'Booked',
                'is_unavailability' => false,
                'id_users_provider' => 5,
                'id_users_customer' => 6,
                'id_services' => 2,
                'id_google_calendar' => NULL,
                'id_caldav_calendar' => NULL,
              ),
              1 => 
              array (
                'id' => 2,
                'create_datetime' => '2026-07-23 10:51:48',
                'update_datetime' => '2026-07-23 10:51:48',
                'name' => 'hair cutting',
                'duration' => '30',
                'price' => 50.0,
                'currency' => '',
                'description' => 'bfjkebfkerfbj,erbjk',
                'slot_interval' => '15',
                'color' => '#7cbae8',
                'location' => 'noida sec 63',
                'attendants_number' => 1,
                'is_private' => false,
                'id_service_categories' => 1,
              ),
              2 => 
              array (
                'id' => 5,
                'create_datetime' => '2026-07-22 13:13:04',
                'update_datetime' => '2026-07-22 13:13:04',
                'first_name' => 'vivek',
                'last_name' => 'kumar',
                'email' => 'raj973anshul@gmail.com',
                'mobile_number' => NULL,
                'phone_number' => '',
                'address' => '',
                'city' => '',
                'state' => '',
                'zip_code' => '',
                'notes' => '',
                'timezone' => 'Europe/Berlin',
                'language' => 'english',
                'custom_field_1' => NULL,
                'custom_field_2' => NULL,
                'custom_field_3' => NULL,
                'custom_field_4' => NULL,
                'custom_field_5' => NULL,
                'is_private' => false,
                'ldap_dn' => NULL,
                'id_roles' => 2,
                'settings' => 
                array (
                  'username' => 'vivekkumar',
                  'password_reset_token' => NULL,
                  'password_reset_expires' => NULL,
                  'working_plan' => '{"sunday":{"start":"09:00","end":"18:00","breaks":[{"start":"14:30","end":"15:00"}]},"monday":{"start":"09:00","end":"18:00","breaks":[{"start":"14:30","end":"15:00"}]},"tuesday":{"start":"09:00","end":"18:00","breaks":[{"start":"14:30","end":"15:00"}]},"wednesday":{"start":"09:00","end":"18:00","breaks":[{"start":"14:30","end":"15:00"}]},"thursday":{"start":"09:00","end":"18:00","breaks":[{"start":"14:30","end":"15:00"}]},"friday":{"start":"09:00","end":"18:00","breaks":[{"start":"14:30","end":"15:00"}]},"saturday":{"start":"09:00","end":"18:00","breaks":[{"start":"14:30","end":"15:00"}]}}',
                  'working_plan_exceptions' => '[]',
                  'notifications' => '1',
                  'google_sync' => NULL,
                  'google_token' => NULL,
                  'google_calendar' => NULL,
                  'caldav_sync' => '0',
                  'caldav_url' => NULL,
                  'caldav_username' => NULL,
                  'caldav_password' => NULL,
                  'sync_past_days' => '30',
                  'sync_future_days' => '90',
                  'calendar_view' => 'table',
                ),
                'services' => 
                array (
                  0 => 1,
                  1 => 2,
                ),
              ),
              3 => 
              array (
                'id' => 6,
                'create_datetime' => '2026-07-23 10:54:50',
                'update_datetime' => '2026-07-23 10:54:50',
                'first_name' => 'anshul',
                'last_name' => 'raj',
                'email' => 'raj973anshul@gmail.com',
                'mobile_number' => NULL,
                'phone_number' => '9319163194',
                'address' => '',
                'city' => '',
                'state' => NULL,
                'zip_code' => '',
                'notes' => NULL,
                'timezone' => 'Asia/Calcutta',
                'language' => 'english',
                'custom_field_1' => NULL,
                'custom_field_2' => NULL,
                'custom_field_3' => NULL,
                'custom_field_4' => NULL,
                'custom_field_5' => NULL,
                'is_private' => '0',
                'ldap_dn' => NULL,
                'id_roles' => 3,
              ),
              4 => 
              array (
                'company_name' => 'Company Name',
                'company_link' => 'https://example.org',
                'company_email' => 'info@example.org',
                'company_color' => NULL,
                'date_format' => 'DMY',
                'time_format' => 'regular',
              ),
              5 => false,
            ),
          ),
          5 => 
          array (
            'file' => 'C:\\xampp\\htdocs\\easy\\system\\core\\CodeIgniter.php',
            'line' => 481,
            'function' => 'register',
            'class' => 'Booking',
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
      )),
      1 => 'appointment-saved to customer',
      2 => 2,
    ),
  ),
  2 => 
  array (
    'file' => 'C:\\xampp\\htdocs\\easy\\application\\controllers\\Booking.php',
    'line' => 567,
    'function' => 'notify_appointment_saved',
    'class' => 'Notifications',
    'type' => '->',
    'args' => 
    array (
      0 => 
      array (
        'id' => 2,
        'create_datetime' => '2026-07-23 10:54:50',
        'update_datetime' => '2026-07-23 10:54:50',
        'book_datetime' => '2026-07-23 10:54:50',
        'start_datetime' => '2026-07-24 09:15:00',
        'end_datetime' => '2026-07-24 09:45:00',
        'location' => 'noida sec 63',
        'meeting_link' => NULL,
        'notes' => 'eghfvegfvw',
        'hash' => 'U3jOlCBIi1TS',
        'color' => '#7cbae8',
        'status' => 'Booked',
        'is_unavailability' => false,
        'id_users_provider' => 5,
        'id_users_customer' => 6,
        'id_services' => 2,
        'id_google_calendar' => NULL,
        'id_caldav_calendar' => NULL,
      ),
      1 => 
      array (
        'id' => 2,
        'create_datetime' => '2026-07-23 10:51:48',
        'update_datetime' => '2026-07-23 10:51:48',
        'name' => 'hair cutting',
        'duration' => '30',
        'price' => 50.0,
        'currency' => '',
        'description' => 'bfjkebfkerfbj,erbjk',
        'slot_interval' => '15',
        'color' => '#7cbae8',
        'location' => 'noida sec 63',
        'attendants_number' => 1,
        'is_private' => false,
        'id_service_categories' => 1,
      ),
      2 => 
      array (
        'id' => 5,
        'create_datetime' => '2026-07-22 13:13:04',
        'update_datetime' => '2026-07-22 13:13:04',
        'first_name' => 'vivek',
        'last_name' => 'kumar',
        'email' => 'raj973anshul@gmail.com',
        'mobile_number' => NULL,
        'phone_number' => '',
        'address' => '',
        'city' => '',
        'state' => '',
        'zip_code' => '',
        'notes' => '',
        'timezone' => 'Europe/Berlin',
        'language' => 'english',
        'custom_field_1' => NULL,
        'custom_field_2' => NULL,
        'custom_field_3' => NULL,
        'custom_field_4' => NULL,
        'custom_field_5' => NULL,
        'is_private' => false,
        'ldap_dn' => NULL,
        'id_roles' => 2,
        'settings' => 
        array (
          'username' => 'vivekkumar',
          'password_reset_token' => NULL,
          'password_reset_expires' => NULL,
          'working_plan' => '{"sunday":{"start":"09:00","end":"18:00","breaks":[{"start":"14:30","end":"15:00"}]},"monday":{"start":"09:00","end":"18:00","breaks":[{"start":"14:30","end":"15:00"}]},"tuesday":{"start":"09:00","end":"18:00","breaks":[{"start":"14:30","end":"15:00"}]},"wednesday":{"start":"09:00","end":"18:00","breaks":[{"start":"14:30","end":"15:00"}]},"thursday":{"start":"09:00","end":"18:00","breaks":[{"start":"14:30","end":"15:00"}]},"friday":{"start":"09:00","end":"18:00","breaks":[{"start":"14:30","end":"15:00"}]},"saturday":{"start":"09:00","end":"18:00","breaks":[{"start":"14:30","end":"15:00"}]}}',
          'working_plan_exceptions' => '[]',
          'notifications' => '1',
          'google_sync' => NULL,
          'google_token' => NULL,
          'google_calendar' => NULL,
          'caldav_sync' => '0',
          'caldav_url' => NULL,
          'caldav_username' => NULL,
          'caldav_password' => NULL,
          'sync_past_days' => '30',
          'sync_future_days' => '90',
          'calendar_view' => 'table',
        ),
        'services' => 
        array (
          0 => 1,
          1 => 2,
        ),
      ),
      3 => 
      array (
        'id' => 6,
        'create_datetime' => '2026-07-23 10:54:50',
        'update_datetime' => '2026-07-23 10:54:50',
        'first_name' => 'anshul',
        'last_name' => 'raj',
        'email' => 'raj973anshul@gmail.com',
        'mobile_number' => NULL,
        'phone_number' => '9319163194',
        'address' => '',
        'city' => '',
        'state' => NULL,
        'zip_code' => '',
        'notes' => NULL,
        'timezone' => 'Asia/Calcutta',
        'language' => 'english',
        'custom_field_1' => NULL,
        'custom_field_2' => NULL,
        'custom_field_3' => NULL,
        'custom_field_4' => NULL,
        'custom_field_5' => NULL,
        'is_private' => '0',
        'ldap_dn' => NULL,
        'id_roles' => 3,
      ),
      4 => 
      array (
        'company_name' => 'Company Name',
        'company_link' => 'https://example.org',
        'company_email' => 'info@example.org',
        'company_color' => NULL,
        'date_format' => 'DMY',
        'time_format' => 'regular',
      ),
      5 => false,
    ),
  ),
)
ERROR - 2026-07-23 10:54:53 --> #0 C:\xampp\htdocs\easy\vendor\phpmailer\phpmailer\src\PHPMailer.php(1857): PHPMailer\PHPMailer\PHPMailer->mailSend('Date: Thu, 23 J...', '--b1=_xUA2XoAD2...')
#1 C:\xampp\htdocs\easy\vendor\phpmailer\phpmailer\src\PHPMailer.php(1670): PHPMailer\PHPMailer\PHPMailer->postSend()
#2 C:\xampp\htdocs\easy\application\libraries\Email_messages.php(119): PHPMailer\PHPMailer\PHPMailer->send()
#3 C:\xampp\htdocs\easy\application\libraries\Notifications.php(84): Email_messages->send_appointment_saved(Array, Array, Array, Array, Array, 'Your appointmen...', 'Thank you for a...', 'http://localhos...', 'raj973anshul@gm...', 'BEGIN:VCALENDAR...', 'Asia/Calcutta')
#4 C:\xampp\htdocs\easy\application\controllers\Booking.php(567): Notifications->notify_appointment_saved(Array, Array, Array, Array, Array, false)
#5 C:\xampp\htdocs\easy\system\core\CodeIgniter.php(481): Booking->register()
#6 C:\xampp\htdocs\easy\index.php(344): require_once('C:\\xampp\\htdocs...')
#7 {main} Trace: array (
  0 => 
  array (
    'file' => 'C:\\xampp\\htdocs\\easy\\application\\libraries\\Notifications.php',
    'line' => 356,
    'function' => 'log_message',
    'args' => 
    array (
      0 => 'error',
      1 => '#0 C:\\xampp\\htdocs\\easy\\vendor\\phpmailer\\phpmailer\\src\\PHPMailer.php(1857): PHPMailer\\PHPMailer\\PHPMailer->mailSend(\'Date: Thu, 23 J...\', \'--b1=_xUA2XoAD2...\')
#1 C:\\xampp\\htdocs\\easy\\vendor\\phpmailer\\phpmailer\\src\\PHPMailer.php(1670): PHPMailer\\PHPMailer\\PHPMailer->postSend()
#2 C:\\xampp\\htdocs\\easy\\application\\libraries\\Email_messages.php(119): PHPMailer\\PHPMailer\\PHPMailer->send()
#3 C:\\xampp\\htdocs\\easy\\application\\libraries\\Notifications.php(84): Email_messages->send_appointment_saved(Array, Array, Array, Array, Array, \'Your appointmen...\', \'Thank you for a...\', \'http://localhos...\', \'raj973anshul@gm...\', \'BEGIN:VCALENDAR...\', \'Asia/Calcutta\')
#4 C:\\xampp\\htdocs\\easy\\application\\controllers\\Booking.php(567): Notifications->notify_appointment_saved(Array, Array, Array, Array, Array, false)
#5 C:\\xampp\\htdocs\\easy\\system\\core\\CodeIgniter.php(481): Booking->register()
#6 C:\\xampp\\htdocs\\easy\\index.php(344): require_once(\'C:\\\\xampp\\\\htdocs...\')
#7 {main}',
    ),
  ),
  1 => 
  array (
    'file' => 'C:\\xampp\\htdocs\\easy\\application\\libraries\\Notifications.php',
    'line' => 98,
    'function' => 'log_exception',
    'class' => 'Notifications',
    'type' => '->',
    'args' => 
    array (
      0 => 
      \PHPMailer\PHPMailer\Exception::__set_state(array(
         'message' => 'Could not instantiate mail function.',
         'string' => '',
         'code' => 2,
         'file' => 'C:\\xampp\\htdocs\\easy\\vendor\\phpmailer\\phpmailer\\src\\PHPMailer.php',
         'line' => 2150,
         'trace' => 
        array (
          0 => 
          array (
            'file' => 'C:\\xampp\\htdocs\\easy\\vendor\\phpmailer\\phpmailer\\src\\PHPMailer.php',
            'line' => 1857,
            'function' => 'mailSend',
            'class' => 'PHPMailer\\PHPMailer\\PHPMailer',
            'type' => '->',
            'args' => 
            array (
              0 => 'Date: Thu, 23 Jul 2026 10:54:51 +0200
From: Company Name <info@example.org>
Reply-To: info@example.org
Message-ID: <xUA2XoAD2CC3kc01EmJBeUJCV2jzaO7M3wGbm8tVjfk@localhost>
X-Mailer: PHPMailer 7.1.1 (https://github.com/PHPMailer/PHPMailer)
MIME-Version: 1.0
Content-Type: multipart/mixed;
 boundary="b1=_xUA2XoAD2CC3kc01EmJBeUJCV2jzaO7M3wGbm8tVjfk"
Content-Transfer-Encoding: 8bit

',
              1 => '--b1=_xUA2XoAD2CC3kc01EmJBeUJCV2jzaO7M3wGbm8tVjfk
Content-Type: multipart/alternative;
 boundary="b2=_xUA2XoAD2CC3kc01EmJBeUJCV2jzaO7M3wGbm8tVjfk"

--b2=_xUA2XoAD2CC3kc01EmJBeUJCV2jzaO7M3wGbm8tVjfk
Content-Type: text/plain; charset=us-ascii

    
    
    
        Appointment Details | Easy!Appointments
    
    
        /* -------------------------------------
            GLOBAL RESETS
        ------------------------------------- */        /*All the styling goes here*/        img {
            border: none;
            -ms-interpolation-mode: bicubic;
            max-width: 100%;
        }        body {
            background-color: #f6f6f6;
            font-family: sans-serif;
            -webkit-font-smoothing: antialiased;
            font-size: 14px;
            line-height: 1.4;
            margin: 0;
            padding: 0;
            -ms-text-size-adjust: 100%;
            -webkit-text-size-adjust: 100%;
        }        table {
            border-collapse: separate;
            mso-table-lspace: 0pt;
            mso-table-rspace: 0pt;
            width: 100%;
        }        table td {
            font-family: sans-serif;
            font-size: 14px;
            vertical-align: top;
        }        /* -------------------------------------
            BODY & CONTAINER
        ------------------------------------- */        .body {
            background-color: #f6f6f6;
            width: 100%;
        }        /* Set a max-width, and make it display as block so it will automatically stretch to that width, but will also shrink down on a phone or something */
        .container {
            display: block;
            margin: 0 auto !important;
            /* makes it centered */
            max-width: 580px;
            padding: 10px;
            width: 580px;
        }        /* This should also be a block element, so that it will fill 100% of the .container */
        .content {
            box-sizing: border-box;
            display: block;
            margin: 0 auto;
            max-width: 580px;
            padding: 10px;
        }        /* -------------------------------------
            HEADER, FOOTER, MAIN
        ------------------------------------- */
        .main {
            background: #ffffff;
            border-radius: 3px;
            width: 100%;
        }        .wrapper {
            box-sizing: border-box;
            padding: 20px;
        }        .content-block {
            padding-bottom: 10px;
            padding-top: 10px;
        }        .footer {
            clear: both;
            margin-top: 10px;
            text-align: center;
            width: 100%;
        }        .footer td,
        .footer p,
        .footer span,
        .footer a {
            color: #999999;
            font-size: 12px;
            text-align: center;
        }        /* -------------------------------------
            TYPOGRAPHY
        ------------------------------------- */
        h1,
        h2,
        h3,
        h4 {
            color: #000000;
            font-family: sans-serif;
            font-weight: 400;
            line-height: 1.4;
            margin: 0;
            margin-bottom: 15px;
        }        h1 {
            font-size: 24px;
            font-weight: 300;
            text-align: center;
            margin-bottom: 40px;
        }        .label {
            width: 120px;
        }        .details-table {
            margin: 0 0 0 auto;
            width: 85%;
        }        p,
        ul,
        ol {
            font-family: sans-serif;
            font-size: 14px;
            font-weight: normal;
            margin: 0;
            margin-bottom: 15px;
        }        p li,
        ul li,
        ol li {
            list-style-position: inside;
            margin-left: 5px;
        }        a {
            color: #429A82;
            text-decoration: underline;
        }        /* -------------------------------------
            BUTTONS
        ------------------------------------- */
        .btn {
            box-sizing: border-box;
            width: 100%;
        }        .btn > tbody > tr > td {
            padding-bottom: 15px;
        }        .btn table {
            width: auto;
        }        .btn table td {
            background-color: #ffffff;
            border-radius: 5px;
            text-align: center;
        }        .btn a {
            background-color: #ffffff;
            border: solid 1px #429A82;
            border-radius: 5px;
            box-sizing: border-box;
            color: #429A82;
            cursor: pointer;
            display: inline-block;
            font-size: 14px;
            font-weight: bold;
            margin: 0;
            padding: 12px 25px;
            text-decoration: none;
        }        .btn-primary table td {
            background-color: #429A82;
        }        .btn-primary a {
            background-color: #429A82;
            border-color: #429A82;
            color: #ffffff;
        }        /* -------------------------------------
            OTHER STYLES THAT MIGHT BE USEFUL
        ------------------------------------- */
        .last {
            margin-bottom: 0;
        }        .first {
            margin-top: 0;
        }        .align-center {
            text-align: center;
        }        .align-right {
            text-align: right;
        }        .align-left {
            text-align: left;
        }        .clear {
            clear: both;
        }        .mt0 {
            margin-top: 0;
        }        .mb0 {
            margin-bottom: 0;
        }        .preheader {
            color: transparent;
            display: none;
            height: 0;
            max-height: 0;
            max-width: 0;
            opacity: 0;
            overflow: hidden;
            mso-hide: all;
            visibility: hidden;
            width: 0;
        }        .powered-by a {
            text-decoration: none;
        }        hr {
            border: 0;
            border-bottom: 1px solid #f6f6f6;
            margin: 20px 0;
        }        /* -------------------------------------
            RESPONSIVE AND MOBILE FRIENDLY STYLES
        ------------------------------------- */
        @media only screen and (max-width: 620px) {
            table.body h1 {
                font-size: 28px !important;
                margin-bottom: 10px !important;
            }            table.body p,
            table.body ul,
            table.body ol,
            table.body td,
            table.body span,
            table.body a {
                font-size: 16px !important;
            }            table.body .wrapper,
            table.body .article {
                padding: 10px !important;
            }            table.body .content {
                padding: 0 !important;
            }            table.body .container {
                padding: 0 !important;
                width: 100% !important;
            }            table.body .main {
                border-left-width: 0 !important;
                border-radius: 0 !important;
                border-right-width: 0 !important;
            }            table.body .btn table {
                width: 100% !important;
            }            table.body .btn a {
                width: 100% !important;
            }            table.body .img-responsive {
                height: auto !important;
                max-width: 100% !important;
                width: auto !important;
            }
        }        /* -------------------------------------
            PRESERVE THESE STYLES IN THE HEAD
        ------------------------------------- */
        @media all {
            .ExternalClass {
                width: 100%;
            }            .ExternalClass,
            .ExternalClass p,
            .ExternalClass span,
            .ExternalClass font,
            .ExternalClass td,
            .ExternalClass div {
                line-height: 100%;
            }            .apple-link a {
                color: inherit !important;
                font-family: inherit !important;
                font-size: inherit !important;
                font-weight: inherit !important;
                line-height: inherit !important;
                text-decoration: none !important;
            }            #MessageViewBody a {
                color: inherit;
                text-decoration: none;
                font-size: inherit;
                font-family: inherit;
                font-weight: inherit;
                line-height: inherit;
            }            .btn-primary table td:hover {
                background-color: #34495e !important;
            }            .btn-primary a:hover {
                background-color: #34495e !important;
                border-color: #34495e !important;
            }
        }        
        &nbsp;
        
                            
                                    
                    
                        
                            
                                
                                                                            
                                                                                
                                            Your appointment has been successfully booked                                                                                
                                            Thank you for arranging an appointment with us. Below you can see the appointment details. Make changes by clicking the appointment link.                                                                                
                                            Appointment Details                                                                                
                                            
                                                
                                                    Service                                                
                                                
                                                    hair cutting                                                
                                            
                                            
                                                
                                                    Provider                                                
                                                
                                                    vivek kumar                                                
                                            
                                            
                                                
                                                    Start                                                
                                                
                                                    24/07/2026 12:45 pm                                                
                                            
                                            
                                                
                                                    End                                                
                                                
                                                    24/07/2026 1:15 pm
                                                
                                            
                                            
                                                
                                                    Timezone                                                
                                                
                                                    Calcutta (+5:30)                                                
                                                                                                                                        
                                                    
                                                        Status                                                    
                                                    
                                                        Booked                                                    
                                                
                                            
                                                                                        
                                                
                                                    Description                                                
                                                
                                                    bfjkebfkerfbj,erbjk                                                
                                            
                                            
                                                                                            
                                                    
                                                        Location                                                    
                                                    
                                                                                                                    noida sec 63                                                                                                            
                                                
                                            
                                            
                                                                                            
                                                    
                                                        Notes                                                    
                                                    
                                                        eghfvegfvw                                                    
                                                
                                                                                                                                                                    
                                            Customer Details                                                                                
                                                                                            
                                                    
                                                        Name                                                    
                                                    
                                                        anshul raj                                                    
                                                
                                            
                                                                                            
                                                    
                                                        Email                                                    
                                                    
                                                        raj973anshul@gmail.com                                                    
                                                
                                            
                                                                                            
                                                    
                                                        Phone Number                                                    
                                                    
                                                        9319163194                                                    
                                                
                                            
                                            
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                        
                                                                                
                                            
                                                
                                                    
                                                        
                                                            
                                                                
                                                                    
                                                                        Reschedule / Cancel Appointment
                                                                    
                                                                
                                                            
                                                        
                                                    
                                                
                                            
                                        
                                        
                                        
                                    
                                
                            
                        
                    
                    
                    
                
                
                                
                
                    
                        
                            
                                Powered by
                                
                                    Easy!Appointments
                                
                                |
                                
                                    Company Name                                
                            
                        
                    
                
                            
        
        &nbsp;
    

--b2=_xUA2XoAD2CC3kc01EmJBeUJCV2jzaO7M3wGbm8tVjfk
Content-Type: multipart/related;
 boundary="b3=_xUA2XoAD2CC3kc01EmJBeUJCV2jzaO7M3wGbm8tVjfk";
 type="text/html"

--b3=_xUA2XoAD2CC3kc01EmJBeUJCV2jzaO7M3wGbm8tVjfk
Content-Type: text/html; charset=us-ascii


<!doctype html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <title>
        Appointment Details | Easy!Appointments
    </title>
    <style>
        /* -------------------------------------
            GLOBAL RESETS
        ------------------------------------- */

        /*All the styling goes here*/

        img {
            border: none;
            -ms-interpolation-mode: bicubic;
            max-width: 100%;
        }

        body {
            background-color: #f6f6f6;
            font-family: sans-serif;
            -webkit-font-smoothing: antialiased;
            font-size: 14px;
            line-height: 1.4;
            margin: 0;
            padding: 0;
            -ms-text-size-adjust: 100%;
            -webkit-text-size-adjust: 100%;
        }

        table {
            border-collapse: separate;
            mso-table-lspace: 0pt;
            mso-table-rspace: 0pt;
            width: 100%;
        }

        table td {
            font-family: sans-serif;
            font-size: 14px;
            vertical-align: top;
        }

        /* -------------------------------------
            BODY & CONTAINER
        ------------------------------------- */

        .body {
            background-color: #f6f6f6;
            width: 100%;
        }

        /* Set a max-width, and make it display as block so it will automatically stretch to that width, but will also shrink down on a phone or something */
        .container {
            display: block;
            margin: 0 auto !important;
            /* makes it centered */
            max-width: 580px;
            padding: 10px;
            width: 580px;
        }

        /* This should also be a block element, so that it will fill 100% of the .container */
        .content {
            box-sizing: border-box;
            display: block;
            margin: 0 auto;
            max-width: 580px;
            padding: 10px;
        }

        /* -------------------------------------
            HEADER, FOOTER, MAIN
        ------------------------------------- */
        .main {
            background: #ffffff;
            border-radius: 3px;
            width: 100%;
        }

        .wrapper {
            box-sizing: border-box;
            padding: 20px;
        }

        .content-block {
            padding-bottom: 10px;
            padding-top: 10px;
        }

        .footer {
            clear: both;
            margin-top: 10px;
            text-align: center;
            width: 100%;
        }

        .footer td,
        .footer p,
        .footer span,
        .footer a {
            color: #999999;
            font-size: 12px;
            text-align: center;
        }

        /* -------------------------------------
            TYPOGRAPHY
        ------------------------------------- */
        h1,
        h2,
        h3,
        h4 {
            color: #000000;
            font-family: sans-serif;
            font-weight: 400;
            line-height: 1.4;
            margin: 0;
            margin-bottom: 15px;
        }

        h1 {
            font-size: 24px;
            font-weight: 300;
            text-align: center;
            margin-bottom: 40px;
        }

        .label {
            width: 120px;
        }

        .details-table {
            margin: 0 0 0 auto;
            width: 85%;
        }

        p,
        ul,
        ol {
            font-family: sans-serif;
            font-size: 14px;
            font-weight: normal;
            margin: 0;
            margin-bottom: 15px;
        }

        p li,
        ul li,
        ol li {
            list-style-position: inside;
            margin-left: 5px;
        }

        a {
            color: #429A82;
            text-decoration: underline;
        }

        /* -------------------------------------
            BUTTONS
        ------------------------------------- */
        .btn {
            box-sizing: border-box;
            width: 100%;
        }

        .btn > tbody > tr > td {
            padding-bottom: 15px;
        }

        .btn table {
            width: auto;
        }

        .btn table td {
            background-color: #ffffff;
            border-radius: 5px;
            text-align: center;
        }

        .btn a {
            background-color: #ffffff;
            border: solid 1px #429A82;
            border-radius: 5px;
            box-sizing: border-box;
            color: #429A82;
            cursor: pointer;
            display: inline-block;
            font-size: 14px;
            font-weight: bold;
            margin: 0;
            padding: 12px 25px;
            text-decoration: none;
        }

        .btn-primary table td {
            background-color: #429A82;
        }

        .btn-primary a {
            background-color: #429A82;
            border-color: #429A82;
            color: #ffffff;
        }

        /* -------------------------------------
            OTHER STYLES THAT MIGHT BE USEFUL
        ------------------------------------- */
        .last {
            margin-bottom: 0;
        }

        .first {
            margin-top: 0;
        }

        .align-center {
            text-align: center;
        }

        .align-right {
            text-align: right;
        }

        .align-left {
            text-align: left;
        }

        .clear {
            clear: both;
        }

        .mt0 {
            margin-top: 0;
        }

        .mb0 {
            margin-bottom: 0;
        }

        .preheader {
            color: transparent;
            display: none;
            height: 0;
            max-height: 0;
            max-width: 0;
            opacity: 0;
            overflow: hidden;
            mso-hide: all;
            visibility: hidden;
            width: 0;
        }

        .powered-by a {
            text-decoration: none;
        }

        hr {
            border: 0;
            border-bottom: 1px solid #f6f6f6;
            margin: 20px 0;
        }

        /* -------------------------------------
            RESPONSIVE AND MOBILE FRIENDLY STYLES
        ------------------------------------- */
        @media only screen and (max-width: 620px) {
            table.body h1 {
                font-size: 28px !important;
                margin-bottom: 10px !important;
            }

            table.body p,
            table.body ul,
            table.body ol,
            table.body td,
            table.body span,
            table.body a {
                font-size: 16px !important;
            }

            table.body .wrapper,
            table.body .article {
                padding: 10px !important;
            }

            table.body .content {
                padding: 0 !important;
            }

            table.body .container {
                padding: 0 !important;
                width: 100% !important;
            }

            table.body .main {
                border-left-width: 0 !important;
                border-radius: 0 !important;
                border-right-width: 0 !important;
            }

            table.body .btn table {
                width: 100% !important;
            }

            table.body .btn a {
                width: 100% !important;
            }

            table.body .img-responsive {
                height: auto !important;
                max-width: 100% !important;
                width: auto !important;
            }
        }

        /* -------------------------------------
            PRESERVE THESE STYLES IN THE HEAD
        ------------------------------------- */
        @media all {
            .ExternalClass {
                width: 100%;
            }

            .ExternalClass,
            .ExternalClass p,
            .ExternalClass span,
            .ExternalClass font,
            .ExternalClass td,
            .ExternalClass div {
                line-height: 100%;
            }

            .apple-link a {
                color: inherit !important;
                font-family: inherit !important;
                font-size: inherit !important;
                font-weight: inherit !important;
                line-height: inherit !important;
                text-decoration: none !important;
            }

            #MessageViewBody a {
                color: inherit;
                text-decoration: none;
                font-size: inherit;
                font-family: inherit;
                font-weight: inherit;
                line-height: inherit;
            }

            .btn-primary table td:hover {
                background-color: #34495e !important;
            }

            .btn-primary a:hover {
                background-color: #34495e !important;
                border-color: #34495e !important;
            }
        }

    </style>
</head>
<body>
<table role="presentation" border="0" cellpadding="0" cellspacing="0" class="body">
    <tr>
        <td>&nbsp;</td>
        <td class="container">
            <div class="content">

                <!-- START CENTERED WHITE CONTAINER -->
                <table role="presentation" class="main">

                    <!-- START MAIN CONTENT AREA -->
                    <tr>
                        <td class="wrapper">
                            <table role="presentation" border="0" cellpadding="0" cellspacing="0">
                                <tr>
                                    <td>

                                        <!-- Logo at the top center, embedded as CID -->
                                        <img src="cid:logo.png" alt="Logo" style="display:block;max-width:67px; margin: auto auto 24px;">

                                        <h1 style="text-align: center;">
                                            Your appointment has been successfully booked                                        </h1>

                                        <p style="text-align: center;">
                                            Thank you for arranging an appointment with us. Below you can see the appointment details. Make changes by clicking the appointment link.                                        </p>

                                        <h2 style="text-align: center;">
                                            Appointment Details                                        </h2>

                                        <table id="appointment-details" class="details-table" align="center">
                                            <tr>
                                                <td class="label" style="padding: 3px;font-weight: bold;">
                                                    Service                                                </td>
                                                <td style="padding: 3px;">
                                                    hair cutting                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="label" style="padding: 3px;font-weight: bold;">
                                                    Provider                                                </td>
                                                <td style="padding: 3px;">
                                                    vivek kumar                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="label" style="padding: 3px;font-weight: bold;">
                                                    Start                                                </td>
                                                <td style="padding: 3px;">
                                                    24/07/2026 12:45 pm                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="label" style="padding: 3px;font-weight: bold;">
                                                    End                                                </td>
                                                <td style="padding: 3px;">
                                                    24/07/2026 1:15 pm
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="label" style="padding: 3px;font-weight: bold;">
                                                    Timezone                                                </td>
                                                <td style="padding: 3px;">
                                                    Calcutta (+5:30)                                                </td>
                                            </tr>

                                                                                            <tr>
                                                    <td class="label" style="padding: 3px;font-weight: bold;">
                                                        Status                                                    </td>
                                                    <td style="padding: 3px;">
                                                        Booked                                                    </td>
                                                </tr>
                                            
                                                                                        <tr>
                                                <td class="label" style="padding: 3px;font-weight: bold;">
                                                    Description                                                </td>
                                                <td style="padding: 3px;">
                                                    bfjkebfkerfbj,erbjk                                                </td>
                                            </tr>
                                            
                                                                                            <tr>
                                                    <td class="label" style="padding: 3px;font-weight: bold;">
                                                        Location                                                    </td>
                                                    <td style="padding: 3px;">
                                                                                                                    noida sec 63                                                                                                            </td>
                                                </tr>
                                            
                                            
                                                                                            <tr>
                                                    <td class="label" style="padding: 3px;font-weight: bold;">
                                                        Notes                                                    </td>
                                                    <td style="padding: 3px;">
                                                        eghfvegfvw                                                    </td>
                                                </tr>
                                                                                    </table>

                                        <br>

                                        <h2 style="text-align: center;">
                                            Customer Details                                        </h2>

                                        <table id="customer-details" class="details-table" align="center">
                                                                                            <tr>
                                                    <td class="label" style="padding: 3px;font-weight: bold;">
                                                        Name                                                    </td>
                                                    <td style="padding: 3px;">
                                                        anshul raj                                                    </td>
                                                </tr>
                                            
                                                                                            <tr>
                                                    <td class="label" style="padding: 3px;font-weight: bold;">
                                                        Email                                                    </td>
                                                    <td style="padding: 3px;">
                                                        raj973anshul@gmail.com                                                    </td>
                                                </tr>
                                            
                                                                                            <tr>
                                                    <td class="label" style="padding: 3px;font-weight: bold;">
                                                        Phone Number                                                    </td>
                                                    <td style="padding: 3px;">
                                                        9319163194                                                    </td>
                                                </tr>
                                            
                                            
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                </table>

                                        <br>
                                        <br>

                                        <table class="btn btn-primary" role="presentation" border="0" cellpadding="0" cellspacing="0">
                                            <tbody>
                                                <tr>
                                                    <td align="center">
                                                        <table role="presentation" border="0" cellpadding="0" cellspacing="0">
                                                            <tbody>
                                                                <tr>
                                                                    <td>
                                                                        <a href="http://localhost/easy/index.php/booking/reschedule/U3jOlCBIi1TS" target="_blank">Reschedule / Cancel Appointment</a>
                                                                    </td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                        
                                        
                                    </td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                    
                    <!-- END MAIN CONTENT AREA -->
                </table>
                
                <!-- END CENTERED WHITE CONTAINER -->

                <!-- START FOOTER -->
                <div class="footer">
                    <table role="presentation" border="0" cellpadding="0" cellspacing="0">
                        <tr>
                            <td class="content-block powered-by">
                                Powered by
                                <a href="https://easyappointments.org" style="text-decoration: none;">
                                    Easy!Appointments
                                </a>
                                |
                                <a href="https://example.org" style="text-decoration: none;">
                                    Company Name                                </a>
                            </td>
                        </tr>
                    </table>
                </div>
                <!-- END FOOTER -->

            </div>
        </td>
        <td>&nbsp;</td>
    </tr>
</table>
</body>
</html>

--b3=_xUA2XoAD2CC3kc01EmJBeUJCV2jzaO7M3wGbm8tVjfk
Content-Type: image/png; name=logo.png
Content-Transfer-Encoding: base64
Content-ID: <logo.png>
Content-Disposition: inline; filename=logo.png

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
TkSuQmCC

--b3=_xUA2XoAD2CC3kc01EmJBeUJCV2jzaO7M3wGbm8tVjfk--


--b2=_xUA2XoAD2CC3kc01EmJBeUJCV2jzaO7M3wGbm8tVjfk--

--b1=_xUA2XoAD2CC3kc01EmJBeUJCV2jzaO7M3wGbm8tVjfk
Content-Type: text/calendar; name=invitation.ics
Content-Transfer-Encoding: base64
Content-Disposition: attachment; filename=invitation.ics

QkVHSU46VkNBTEVOREFSDQpWRVJTSU9OOjIuMA0KUFJPRElEOi0vL0Vhc3lBcHBvaW50bWVudHMv
L09wZW4gU291cmNlIFdlYiBTY2hlZHVsZXIvL0VODQpDQUxTQ0FMRTpHUkVHT1JJQU4NCk1FVEhP
RDpSRVFVRVNUDQpCRUdJTjpWVElNRVpPTkUNClRaSUQ6RXVyb3BlL0Jlcmxpbg0KQkVHSU46U1RB
TkRBUkQNCkRUU1RBUlQ6MjAyNjEwMjVUMDEwMDAwWg0KVFpPRkZTRVRUTzorMDEwMA0KVFpPRkZT
RVRGUk9NOiswMjAwDQpSUlVMRTpGUkVRPVlFQVJMWTtCWU1PTlRIPTExO0JZREFZPTFTVQ0KRU5E
OlNUQU5EQVJEDQpCRUdJTjpEQVlMSUdIVA0KRFRTVEFSVDoyMDI2MDMyOVQwMTAwMDBaDQpUWk9G
RlNFVFRPOiswMjAwDQpUWk9GRlNFVEZST006KzAxMDANClJSVUxFOkZSRVE9WUVBUkxZO0JZTU9O
VEg9MztCWURBWT0yU1UNCkVORDpEQVlMSUdIVA0KRU5EOlZUSU1FWk9ORQ0KQkVHSU46VkVWRU5U
DQpVSUQ6ZWEtYzgxZTcyOGQ5ZDRjMmY2MzZmMDY3Zjg5Y2MxNDg2MmMNCkRUU1RBUlQ6MjAyNjA3
MjRUMDcxNTAwWg0KRFRFTkQ6MjAyNjA3MjRUMDc0NTAwWg0KU0VRVUVOQ0U6MTc4NDc5Njg5MA0K
U1RBVFVTOkNPTkZJUk1FRA0KU1VNTUFSWTpoYWlyIGN1dHRpbmcNCkRFU0NSSVBUSU9OOlxuUHJv
dmlkZXJcblxuTmFtZTogdml2ZWsga3VtYXJcbkVtYWlsOiByYWo5NzNhbnNodWxAZ21haWwNCiAu
Y29tXG5QaG9uZSBOdW1iZXI6IFxuQWRkcmVzczogXG5DaXR5OiBcblppcCBDb2RlOiBcblxuQ3Vz
dG9tZXJcblxuTmFtDQogZTogYW5zaHVsIHJhalxuRW1haWw6IHJhajk3M2Fuc2h1bEBnbWFpbC5j
b21cblBob25lIE51bWJlcjogOTMxOTE2MzE5NA0KIFxuQWRkcmVzczogXG5DaXR5OiBcblppcCBD
b2RlOiBcblxuTm90ZXNcblxuZWdoZnZlZ2Z2dw0KTE9DQVRJT046bm9pZGEgc2VjIDYzDQpEVFNU
QU1QOjIwMjYwNzIzVDA4NTQ1MVoNCkFUVEVOREVFO0NVVFlQRT1JTkRJVklEVUFMO1JPTEU9UkVR
LVBBUlRJQ0lQQU5UO1BBUlRTVEFUPU5FRURTLUFDVElPTjsNCiBSU1ZQPVRSVUU7Q049YW5zaHVs
IHJhajptYWlsdG86cmFqOTczYW5zaHVsQGdtYWlsLmNvbQ0KQVRURU5ERUU7Q1VUWVBFPUlORElW
SURVQUw7Uk9MRT1SRVEtUEFSVElDSVBBTlQ7UEFSVFNUQVQ9QUNDRVBURUQ7UlNWUA0KID1GQUxT
RTtDTj12aXZlayBrdW1hcjptYWlsdG86cmFqOTczYW5zaHVsQGdtYWlsLmNvbQ0KT1JHQU5JWkVS
O0NOPXZpdmVrIGt1bWFyOm1haWx0bzpyYWo5NzNhbnNodWxAZ21haWwuY29tDQpCRUdJTjpWQUxB
Uk0NClRSSUdHRVI7VkFMVUU9REFURS1USU1FOjIwMjYwNzI0VDA3MDAwMFoNCkFDVElPTjpFTUFJ
TA0KU1VNTUFSWTpBbGFybSBub3RpZmljYXRpb24NCkRFU0NSSVBUSU9OOlRoaXMgaXMgYW4gZXZl
bnQgcmVtaW5kZXINCkFUVEVOREVFO0NVVFlQRT1JTkRJVklEVUFMO1JPTEU9UkVRLVBBUlRJQ0lQ
QU5UO1BBUlRTVEFUPU5FRURTLUFDVElPTjsNCiBSU1ZQPVRSVUU7Q049YW5zaHVsIHJhajptYWls
dG86cmFqOTczYW5zaHVsQGdtYWlsLmNvbQ0KRU5EOlZBTEFSTQ0KQkVHSU46VkFMQVJNDQpUUklH
R0VSO1ZBTFVFPURBVEUtVElNRToyMDI2MDcyNFQwNjE1MDBaDQpBQ1RJT046RU1BSUwNClNVTU1B
Ulk6QWxhcm0gbm90aWZpY2F0aW9uDQpERVNDUklQVElPTjpUaGlzIGlzIGFuIGV2ZW50IHJlbWlu
ZGVyDQpBVFRFTkRFRTtDVVRZUEU9SU5ESVZJRFVBTDtST0xFPVJFUS1QQVJUSUNJUEFOVDtQQVJU
U1RBVD1ORUVEUy1BQ1RJT047DQogUlNWUD1UUlVFO0NOPWFuc2h1bCByYWo6bWFpbHRvOnJhajk3
M2Fuc2h1bEBnbWFpbC5jb20NCkVORDpWQUxBUk0NCkVORDpWRVZFTlQNCkVORDpWQ0FMRU5EQVIN
Cg==

--b1=_xUA2XoAD2CC3kc01EmJBeUJCV2jzaO7M3wGbm8tVjfk--
',
            ),
          ),
          1 => 
          array (
            'file' => 'C:\\xampp\\htdocs\\easy\\vendor\\phpmailer\\phpmailer\\src\\PHPMailer.php',
            'line' => 1670,
            'function' => 'postSend',
            'class' => 'PHPMailer\\PHPMailer\\PHPMailer',
            'type' => '->',
            'args' => 
            array (
            ),
          ),
          2 => 
          array (
            'file' => 'C:\\xampp\\htdocs\\easy\\application\\libraries\\Email_messages.php',
            'line' => 119,
            'function' => 'send',
            'class' => 'PHPMailer\\PHPMailer\\PHPMailer',
            'type' => '->',
            'args' => 
            array (
            ),
          ),
          3 => 
          array (
            'file' => 'C:\\xampp\\htdocs\\easy\\application\\libraries\\Notifications.php',
            'line' => 84,
            'function' => 'send_appointment_saved',
            'class' => 'Email_messages',
            'type' => '->',
            'args' => 
            array (
              0 => 
              array (
                'id' => 2,
                'create_datetime' => '2026-07-23 10:54:50',
                'update_datetime' => '2026-07-23 10:54:50',
                'book_datetime' => '2026-07-23 10:54:50',
                'start_datetime' => '2026-07-24 12:45:00',
                'end_datetime' => '2026-07-24 13:15:00',
                'location' => 'noida sec 63',
                'meeting_link' => NULL,
                'notes' => 'eghfvegfvw',
                'hash' => 'U3jOlCBIi1TS',
                'color' => '#7cbae8',
                'status' => 'Booked',
                'is_unavailability' => false,
                'id_users_provider' => 5,
                'id_users_customer' => 6,
                'id_services' => 2,
                'id_google_calendar' => NULL,
                'id_caldav_calendar' => NULL,
              ),
              1 => 
              array (
                'id' => 5,
                'create_datetime' => '2026-07-22 13:13:04',
                'update_datetime' => '2026-07-22 13:13:04',
                'first_name' => 'vivek',
                'last_name' => 'kumar',
                'email' => 'raj973anshul@gmail.com',
                'mobile_number' => NULL,
                'phone_number' => '',
                'address' => '',
                'city' => '',
                'state' => '',
                'zip_code' => '',
                'notes' => '',
                'timezone' => 'Europe/Berlin',
                'language' => 'english',
                'custom_field_1' => NULL,
                'custom_field_2' => NULL,
                'custom_field_3' => NULL,
                'custom_field_4' => NULL,
                'custom_field_5' => NULL,
                'is_private' => false,
                'ldap_dn' => NULL,
                'id_roles' => 2,
                'settings' => 
                array (
                  'username' => 'vivekkumar',
                  'password_reset_token' => NULL,
                  'password_reset_expires' => NULL,
                  'working_plan' => '{"sunday":{"start":"09:00","end":"18:00","breaks":[{"start":"14:30","end":"15:00"}]},"monday":{"start":"09:00","end":"18:00","breaks":[{"start":"14:30","end":"15:00"}]},"tuesday":{"start":"09:00","end":"18:00","breaks":[{"start":"14:30","end":"15:00"}]},"wednesday":{"start":"09:00","end":"18:00","breaks":[{"start":"14:30","end":"15:00"}]},"thursday":{"start":"09:00","end":"18:00","breaks":[{"start":"14:30","end":"15:00"}]},"friday":{"start":"09:00","end":"18:00","breaks":[{"start":"14:30","end":"15:00"}]},"saturday":{"start":"09:00","end":"18:00","breaks":[{"start":"14:30","end":"15:00"}]}}',
                  'working_plan_exceptions' => '[]',
                  'notifications' => '1',
                  'google_sync' => NULL,
                  'google_token' => NULL,
                  'google_calendar' => NULL,
                  'caldav_sync' => '0',
                  'caldav_url' => NULL,
                  'caldav_username' => NULL,
                  'caldav_password' => NULL,
                  'sync_past_days' => '30',
                  'sync_future_days' => '90',
                  'calendar_view' => 'table',
                ),
                'services' => 
                array (
                  0 => 1,
                  1 => 2,
                ),
              ),
              2 => 
              array (
                'id' => 2,
                'create_datetime' => '2026-07-23 10:51:48',
                'update_datetime' => '2026-07-23 10:51:48',
                'name' => 'hair cutting',
                'duration' => '30',
                'price' => 50.0,
                'currency' => '',
                'description' => 'bfjkebfkerfbj,erbjk',
                'slot_interval' => '15',
                'color' => '#7cbae8',
                'location' => 'noida sec 63',
                'attendants_number' => 1,
                'is_private' => false,
                'id_service_categories' => 1,
              ),
              3 => 
              array (
                'id' => 6,
                'create_datetime' => '2026-07-23 10:54:50',
                'update_datetime' => '2026-07-23 10:54:50',
                'first_name' => 'anshul',
                'last_name' => 'raj',
                'email' => 'raj973anshul@gmail.com',
                'mobile_number' => NULL,
                'phone_number' => '9319163194',
                'address' => '',
                'city' => '',
                'state' => NULL,
                'zip_code' => '',
                'notes' => NULL,
                'timezone' => 'Asia/Calcutta',
                'language' => 'english',
                'custom_field_1' => NULL,
                'custom_field_2' => NULL,
                'custom_field_3' => NULL,
                'custom_field_4' => NULL,
                'custom_field_5' => NULL,
                'is_private' => '0',
                'ldap_dn' => NULL,
                'id_roles' => 3,
              ),
              4 => 
              array (
                'company_name' => 'Company Name',
                'company_link' => 'https://example.org',
                'company_email' => 'info@example.org',
                'company_color' => NULL,
                'date_format' => 'DMY',
                'time_format' => 'regular',
              ),
              5 => 'Your appointment has been successfully booked',
              6 => 'Thank you for arranging an appointment with us. Below you can see the appointment details. Make changes by clicking the appointment link.',
              7 => 'http://localhost/easy/index.php/booking/reschedule/U3jOlCBIi1TS',
              8 => 'raj973anshul@gmail.com',
              9 => 'BEGIN:VCALENDAR
VERSION:2.0
PRODID:-//EasyAppointments//Open Source Web Scheduler//EN
CALSCALE:GREGORIAN
METHOD:REQUEST
BEGIN:VTIMEZONE
TZID:Europe/Berlin
BEGIN:STANDARD
DTSTART:20261025T010000Z
TZOFFSETTO:+0100
TZOFFSETFROM:+0200
RRULE:FREQ=YEARLY;BYMONTH=11;BYDAY=1SU
END:STANDARD
BEGIN:DAYLIGHT
DTSTART:20260329T010000Z
TZOFFSETTO:+0200
TZOFFSETFROM:+0100
RRULE:FREQ=YEARLY;BYMONTH=3;BYDAY=2SU
END:DAYLIGHT
END:VTIMEZONE
BEGIN:VEVENT
UID:ea-c81e728d9d4c2f636f067f89cc14862c
DTSTART:20260724T071500Z
DTEND:20260724T074500Z
SEQUENCE:1784796890
STATUS:CONFIRMED
SUMMARY:hair cutting
DESCRIPTION:\\nProvider\\n\\nName: vivek kumar\\nEmail: raj973anshul@gmail
 .com\\nPhone Number: \\nAddress: \\nCity: \\nZip Code: \\n\\nCustomer\\n\\nNam
 e: anshul raj\\nEmail: raj973anshul@gmail.com\\nPhone Number: 9319163194
 \\nAddress: \\nCity: \\nZip Code: \\n\\nNotes\\n\\neghfvegfvw
LOCATION:noida sec 63
DTSTAMP:20260723T085451Z
ATTENDEE;CUTYPE=INDIVIDUAL;ROLE=REQ-PARTICIPANT;PARTSTAT=NEEDS-ACTION;
 RSVP=TRUE;CN=anshul raj:mailto:raj973anshul@gmail.com
ATTENDEE;CUTYPE=INDIVIDUAL;ROLE=REQ-PARTICIPANT;PARTSTAT=ACCEPTED;RSVP
 =FALSE;CN=vivek kumar:mailto:raj973anshul@gmail.com
ORGANIZER;CN=vivek kumar:mailto:raj973anshul@gmail.com
BEGIN:VALARM
TRIGGER;VALUE=DATE-TIME:20260724T070000Z
ACTION:EMAIL
SUMMARY:Alarm notification
DESCRIPTION:This is an event reminder
ATTENDEE;CUTYPE=INDIVIDUAL;ROLE=REQ-PARTICIPANT;PARTSTAT=NEEDS-ACTION;
 RSVP=TRUE;CN=anshul raj:mailto:raj973anshul@gmail.com
END:VALARM
BEGIN:VALARM
TRIGGER;VALUE=DATE-TIME:20260724T061500Z
ACTION:EMAIL
SUMMARY:Alarm notification
DESCRIPTION:This is an event reminder
ATTENDEE;CUTYPE=INDIVIDUAL;ROLE=REQ-PARTICIPANT;PARTSTAT=NEEDS-ACTION;
 RSVP=TRUE;CN=anshul raj:mailto:raj973anshul@gmail.com
END:VALARM
END:VEVENT
END:VCALENDAR
',
              10 => 'Asia/Calcutta',
            ),
          ),
          4 => 
          array (
            'file' => 'C:\\xampp\\htdocs\\easy\\application\\controllers\\Booking.php',
            'line' => 567,
            'function' => 'notify_appointment_saved',
            'class' => 'Notifications',
            'type' => '->',
            'args' => 
            array (
              0 => 
              array (
                'id' => 2,
                'create_datetime' => '2026-07-23 10:54:50',
                'update_datetime' => '2026-07-23 10:54:50',
                'book_datetime' => '2026-07-23 10:54:50',
                'start_datetime' => '2026-07-24 09:15:00',
                'end_datetime' => '2026-07-24 09:45:00',
                'location' => 'noida sec 63',
                'meeting_link' => NULL,
                'notes' => 'eghfvegfvw',
                'hash' => 'U3jOlCBIi1TS',
                'color' => '#7cbae8',
                'status' => 'Booked',
                'is_unavailability' => false,
                'id_users_provider' => 5,
                'id_users_customer' => 6,
                'id_services' => 2,
                'id_google_calendar' => NULL,
                'id_caldav_calendar' => NULL,
              ),
              1 => 
              array (
                'id' => 2,
                'create_datetime' => '2026-07-23 10:51:48',
                'update_datetime' => '2026-07-23 10:51:48',
                'name' => 'hair cutting',
                'duration' => '30',
                'price' => 50.0,
                'currency' => '',
                'description' => 'bfjkebfkerfbj,erbjk',
                'slot_interval' => '15',
                'color' => '#7cbae8',
                'location' => 'noida sec 63',
                'attendants_number' => 1,
                'is_private' => false,
                'id_service_categories' => 1,
              ),
              2 => 
              array (
                'id' => 5,
                'create_datetime' => '2026-07-22 13:13:04',
                'update_datetime' => '2026-07-22 13:13:04',
                'first_name' => 'vivek',
                'last_name' => 'kumar',
                'email' => 'raj973anshul@gmail.com',
                'mobile_number' => NULL,
                'phone_number' => '',
                'address' => '',
                'city' => '',
                'state' => '',
                'zip_code' => '',
                'notes' => '',
                'timezone' => 'Europe/Berlin',
                'language' => 'english',
                'custom_field_1' => NULL,
                'custom_field_2' => NULL,
                'custom_field_3' => NULL,
                'custom_field_4' => NULL,
                'custom_field_5' => NULL,
                'is_private' => false,
                'ldap_dn' => NULL,
                'id_roles' => 2,
                'settings' => 
                array (
                  'username' => 'vivekkumar',
                  'password_reset_token' => NULL,
                  'password_reset_expires' => NULL,
                  'working_plan' => '{"sunday":{"start":"09:00","end":"18:00","breaks":[{"start":"14:30","end":"15:00"}]},"monday":{"start":"09:00","end":"18:00","breaks":[{"start":"14:30","end":"15:00"}]},"tuesday":{"start":"09:00","end":"18:00","breaks":[{"start":"14:30","end":"15:00"}]},"wednesday":{"start":"09:00","end":"18:00","breaks":[{"start":"14:30","end":"15:00"}]},"thursday":{"start":"09:00","end":"18:00","breaks":[{"start":"14:30","end":"15:00"}]},"friday":{"start":"09:00","end":"18:00","breaks":[{"start":"14:30","end":"15:00"}]},"saturday":{"start":"09:00","end":"18:00","breaks":[{"start":"14:30","end":"15:00"}]}}',
                  'working_plan_exceptions' => '[]',
                  'notifications' => '1',
                  'google_sync' => NULL,
                  'google_token' => NULL,
                  'google_calendar' => NULL,
                  'caldav_sync' => '0',
                  'caldav_url' => NULL,
                  'caldav_username' => NULL,
                  'caldav_password' => NULL,
                  'sync_past_days' => '30',
                  'sync_future_days' => '90',
                  'calendar_view' => 'table',
                ),
                'services' => 
                array (
                  0 => 1,
                  1 => 2,
                ),
              ),
              3 => 
              array (
                'id' => 6,
                'create_datetime' => '2026-07-23 10:54:50',
                'update_datetime' => '2026-07-23 10:54:50',
                'first_name' => 'anshul',
                'last_name' => 'raj',
                'email' => 'raj973anshul@gmail.com',
                'mobile_number' => NULL,
                'phone_number' => '9319163194',
                'address' => '',
                'city' => '',
                'state' => NULL,
                'zip_code' => '',
                'notes' => NULL,
                'timezone' => 'Asia/Calcutta',
                'language' => 'english',
                'custom_field_1' => NULL,
                'custom_field_2' => NULL,
                'custom_field_3' => NULL,
                'custom_field_4' => NULL,
                'custom_field_5' => NULL,
                'is_private' => '0',
                'ldap_dn' => NULL,
                'id_roles' => 3,
              ),
              4 => 
              array (
                'company_name' => 'Company Name',
                'company_link' => 'https://example.org',
                'company_email' => 'info@example.org',
                'company_color' => NULL,
                'date_format' => 'DMY',
                'time_format' => 'regular',
              ),
              5 => false,
            ),
          ),
          5 => 
          array (
            'file' => 'C:\\xampp\\htdocs\\easy\\system\\core\\CodeIgniter.php',
            'line' => 481,
            'function' => 'register',
            'class' => 'Booking',
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
      )),
      1 => 'appointment-saved to customer',
      2 => 2,
    ),
  ),
  2 => 
  array (
    'file' => 'C:\\xampp\\htdocs\\easy\\application\\controllers\\Booking.php',
    'line' => 567,
    'function' => 'notify_appointment_saved',
    'class' => 'Notifications',
    'type' => '->',
    'args' => 
    array (
      0 => 
      array (
        'id' => 2,
        'create_datetime' => '2026-07-23 10:54:50',
        'update_datetime' => '2026-07-23 10:54:50',
        'book_datetime' => '2026-07-23 10:54:50',
        'start_datetime' => '2026-07-24 09:15:00',
        'end_datetime' => '2026-07-24 09:45:00',
        'location' => 'noida sec 63',
        'meeting_link' => NULL,
        'notes' => 'eghfvegfvw',
        'hash' => 'U3jOlCBIi1TS',
        'color' => '#7cbae8',
        'status' => 'Booked',
        'is_unavailability' => false,
        'id_users_provider' => 5,
        'id_users_customer' => 6,
        'id_services' => 2,
        'id_google_calendar' => NULL,
        'id_caldav_calendar' => NULL,
      ),
      1 => 
      array (
        'id' => 2,
        'create_datetime' => '2026-07-23 10:51:48',
        'update_datetime' => '2026-07-23 10:51:48',
        'name' => 'hair cutting',
        'duration' => '30',
        'price' => 50.0,
        'currency' => '',
        'description' => 'bfjkebfkerfbj,erbjk',
        'slot_interval' => '15',
        'color' => '#7cbae8',
        'location' => 'noida sec 63',
        'attendants_number' => 1,
        'is_private' => false,
        'id_service_categories' => 1,
      ),
      2 => 
      array (
        'id' => 5,
        'create_datetime' => '2026-07-22 13:13:04',
        'update_datetime' => '2026-07-22 13:13:04',
        'first_name' => 'vivek',
        'last_name' => 'kumar',
        'email' => 'raj973anshul@gmail.com',
        'mobile_number' => NULL,
        'phone_number' => '',
        'address' => '',
        'city' => '',
        'state' => '',
        'zip_code' => '',
        'notes' => '',
        'timezone' => 'Europe/Berlin',
        'language' => 'english',
        'custom_field_1' => NULL,
        'custom_field_2' => NULL,
        'custom_field_3' => NULL,
        'custom_field_4' => NULL,
        'custom_field_5' => NULL,
        'is_private' => false,
        'ldap_dn' => NULL,
        'id_roles' => 2,
        'settings' => 
        array (
          'username' => 'vivekkumar',
          'password_reset_token' => NULL,
          'password_reset_expires' => NULL,
          'working_plan' => '{"sunday":{"start":"09:00","end":"18:00","breaks":[{"start":"14:30","end":"15:00"}]},"monday":{"start":"09:00","end":"18:00","breaks":[{"start":"14:30","end":"15:00"}]},"tuesday":{"start":"09:00","end":"18:00","breaks":[{"start":"14:30","end":"15:00"}]},"wednesday":{"start":"09:00","end":"18:00","breaks":[{"start":"14:30","end":"15:00"}]},"thursday":{"start":"09:00","end":"18:00","breaks":[{"start":"14:30","end":"15:00"}]},"friday":{"start":"09:00","end":"18:00","breaks":[{"start":"14:30","end":"15:00"}]},"saturday":{"start":"09:00","end":"18:00","breaks":[{"start":"14:30","end":"15:00"}]}}',
          'working_plan_exceptions' => '[]',
          'notifications' => '1',
          'google_sync' => NULL,
          'google_token' => NULL,
          'google_calendar' => NULL,
          'caldav_sync' => '0',
          'caldav_url' => NULL,
          'caldav_username' => NULL,
          'caldav_password' => NULL,
          'sync_past_days' => '30',
          'sync_future_days' => '90',
          'calendar_view' => 'table',
        ),
        'services' => 
        array (
          0 => 1,
          1 => 2,
        ),
      ),
      3 => 
      array (
        'id' => 6,
        'create_datetime' => '2026-07-23 10:54:50',
        'update_datetime' => '2026-07-23 10:54:50',
        'first_name' => 'anshul',
        'last_name' => 'raj',
        'email' => 'raj973anshul@gmail.com',
        'mobile_number' => NULL,
        'phone_number' => '9319163194',
        'address' => '',
        'city' => '',
        'state' => NULL,
        'zip_code' => '',
        'notes' => NULL,
        'timezone' => 'Asia/Calcutta',
        'language' => 'english',
        'custom_field_1' => NULL,
        'custom_field_2' => NULL,
        'custom_field_3' => NULL,
        'custom_field_4' => NULL,
        'custom_field_5' => NULL,
        'is_private' => '0',
        'ldap_dn' => NULL,
        'id_roles' => 3,
      ),
      4 => 
      array (
        'company_name' => 'Company Name',
        'company_link' => 'https://example.org',
        'company_email' => 'info@example.org',
        'company_color' => NULL,
        'date_format' => 'DMY',
        'time_format' => 'regular',
      ),
      5 => false,
    ),
  ),
)
ERROR - 2026-07-23 10:54:55 --> Notifications - Could not email appointment-saved to provider (2) : Could not instantiate mail function. Trace: array (
  0 => 
  array (
    'file' => 'C:\\xampp\\htdocs\\easy\\application\\libraries\\Notifications.php',
    'line' => 352,
    'function' => 'log_message',
    'args' => 
    array (
      0 => 'error',
      1 => 'Notifications - Could not email appointment-saved to provider (2) : Could not instantiate mail function.',
    ),
  ),
  1 => 
  array (
    'file' => 'C:\\xampp\\htdocs\\easy\\application\\libraries\\Notifications.php',
    'line' => 129,
    'function' => 'log_exception',
    'class' => 'Notifications',
    'type' => '->',
    'args' => 
    array (
      0 => 
      \PHPMailer\PHPMailer\Exception::__set_state(array(
         'message' => 'Could not instantiate mail function.',
         'string' => '',
         'code' => 2,
         'file' => 'C:\\xampp\\htdocs\\easy\\vendor\\phpmailer\\phpmailer\\src\\PHPMailer.php',
         'line' => 2150,
         'trace' => 
        array (
          0 => 
          array (
            'file' => 'C:\\xampp\\htdocs\\easy\\vendor\\phpmailer\\phpmailer\\src\\PHPMailer.php',
            'line' => 1857,
            'function' => 'mailSend',
            'class' => 'PHPMailer\\PHPMailer\\PHPMailer',
            'type' => '->',
            'args' => 
            array (
              0 => 'Date: Thu, 23 Jul 2026 10:54:53 +0200
From: Company Name <info@example.org>
Reply-To: info@example.org
Message-ID: <HWvI5Cdql0sHHCfLXGNZDCedfxyzDIFgTxEudzT0hk@localhost>
X-Mailer: PHPMailer 7.1.1 (https://github.com/PHPMailer/PHPMailer)
MIME-Version: 1.0
Content-Type: multipart/mixed;
 boundary="b1=_HWvI5Cdql0sHHCfLXGNZDCedfxyzDIFgTxEudzT0hk"
Content-Transfer-Encoding: 8bit

',
              1 => '--b1=_HWvI5Cdql0sHHCfLXGNZDCedfxyzDIFgTxEudzT0hk
Content-Type: multipart/alternative;
 boundary="b2=_HWvI5Cdql0sHHCfLXGNZDCedfxyzDIFgTxEudzT0hk"

--b2=_HWvI5Cdql0sHHCfLXGNZDCedfxyzDIFgTxEudzT0hk
Content-Type: text/plain; charset=us-ascii

    
    
    
        Appointment Details | Easy!Appointments
    
    
        /* -------------------------------------
            GLOBAL RESETS
        ------------------------------------- */        /*All the styling goes here*/        img {
            border: none;
            -ms-interpolation-mode: bicubic;
            max-width: 100%;
        }        body {
            background-color: #f6f6f6;
            font-family: sans-serif;
            -webkit-font-smoothing: antialiased;
            font-size: 14px;
            line-height: 1.4;
            margin: 0;
            padding: 0;
            -ms-text-size-adjust: 100%;
            -webkit-text-size-adjust: 100%;
        }        table {
            border-collapse: separate;
            mso-table-lspace: 0pt;
            mso-table-rspace: 0pt;
            width: 100%;
        }        table td {
            font-family: sans-serif;
            font-size: 14px;
            vertical-align: top;
        }        /* -------------------------------------
            BODY & CONTAINER
        ------------------------------------- */        .body {
            background-color: #f6f6f6;
            width: 100%;
        }        /* Set a max-width, and make it display as block so it will automatically stretch to that width, but will also shrink down on a phone or something */
        .container {
            display: block;
            margin: 0 auto !important;
            /* makes it centered */
            max-width: 580px;
            padding: 10px;
            width: 580px;
        }        /* This should also be a block element, so that it will fill 100% of the .container */
        .content {
            box-sizing: border-box;
            display: block;
            margin: 0 auto;
            max-width: 580px;
            padding: 10px;
        }        /* -------------------------------------
            HEADER, FOOTER, MAIN
        ------------------------------------- */
        .main {
            background: #ffffff;
            border-radius: 3px;
            width: 100%;
        }        .wrapper {
            box-sizing: border-box;
            padding: 20px;
        }        .content-block {
            padding-bottom: 10px;
            padding-top: 10px;
        }        .footer {
            clear: both;
            margin-top: 10px;
            text-align: center;
            width: 100%;
        }        .footer td,
        .footer p,
        .footer span,
        .footer a {
            color: #999999;
            font-size: 12px;
            text-align: center;
        }        /* -------------------------------------
            TYPOGRAPHY
        ------------------------------------- */
        h1,
        h2,
        h3,
        h4 {
            color: #000000;
            font-family: sans-serif;
            font-weight: 400;
            line-height: 1.4;
            margin: 0;
            margin-bottom: 15px;
        }        h1 {
            font-size: 24px;
            font-weight: 300;
            text-align: center;
            margin-bottom: 40px;
        }        .label {
            width: 120px;
        }        .details-table {
            margin: 0 0 0 auto;
            width: 85%;
        }        p,
        ul,
        ol {
            font-family: sans-serif;
            font-size: 14px;
            font-weight: normal;
            margin: 0;
            margin-bottom: 15px;
        }        p li,
        ul li,
        ol li {
            list-style-position: inside;
            margin-left: 5px;
        }        a {
            color: #429A82;
            text-decoration: underline;
        }        /* -------------------------------------
            BUTTONS
        ------------------------------------- */
        .btn {
            box-sizing: border-box;
            width: 100%;
        }        .btn > tbody > tr > td {
            padding-bottom: 15px;
        }        .btn table {
            width: auto;
        }        .btn table td {
            background-color: #ffffff;
            border-radius: 5px;
            text-align: center;
        }        .btn a {
            background-color: #ffffff;
            border: solid 1px #429A82;
            border-radius: 5px;
            box-sizing: border-box;
            color: #429A82;
            cursor: pointer;
            display: inline-block;
            font-size: 14px;
            font-weight: bold;
            margin: 0;
            padding: 12px 25px;
            text-decoration: none;
        }        .btn-primary table td {
            background-color: #429A82;
        }        .btn-primary a {
            background-color: #429A82;
            border-color: #429A82;
            color: #ffffff;
        }        /* -------------------------------------
            OTHER STYLES THAT MIGHT BE USEFUL
        ------------------------------------- */
        .last {
            margin-bottom: 0;
        }        .first {
            margin-top: 0;
        }        .align-center {
            text-align: center;
        }        .align-right {
            text-align: right;
        }        .align-left {
            text-align: left;
        }        .clear {
            clear: both;
        }        .mt0 {
            margin-top: 0;
        }        .mb0 {
            margin-bottom: 0;
        }        .preheader {
            color: transparent;
            display: none;
            height: 0;
            max-height: 0;
            max-width: 0;
            opacity: 0;
            overflow: hidden;
            mso-hide: all;
            visibility: hidden;
            width: 0;
        }        .powered-by a {
            text-decoration: none;
        }        hr {
            border: 0;
            border-bottom: 1px solid #f6f6f6;
            margin: 20px 0;
        }        /* -------------------------------------
            RESPONSIVE AND MOBILE FRIENDLY STYLES
        ------------------------------------- */
        @media only screen and (max-width: 620px) {
            table.body h1 {
                font-size: 28px !important;
                margin-bottom: 10px !important;
            }            table.body p,
            table.body ul,
            table.body ol,
            table.body td,
            table.body span,
            table.body a {
                font-size: 16px !important;
            }            table.body .wrapper,
            table.body .article {
                padding: 10px !important;
            }            table.body .content {
                padding: 0 !important;
            }            table.body .container {
                padding: 0 !important;
                width: 100% !important;
            }            table.body .main {
                border-left-width: 0 !important;
                border-radius: 0 !important;
                border-right-width: 0 !important;
            }            table.body .btn table {
                width: 100% !important;
            }            table.body .btn a {
                width: 100% !important;
            }            table.body .img-responsive {
                height: auto !important;
                max-width: 100% !important;
                width: auto !important;
            }
        }        /* -------------------------------------
            PRESERVE THESE STYLES IN THE HEAD
        ------------------------------------- */
        @media all {
            .ExternalClass {
                width: 100%;
            }            .ExternalClass,
            .ExternalClass p,
            .ExternalClass span,
            .ExternalClass font,
            .ExternalClass td,
            .ExternalClass div {
                line-height: 100%;
            }            .apple-link a {
                color: inherit !important;
                font-family: inherit !important;
                font-size: inherit !important;
                font-weight: inherit !important;
                line-height: inherit !important;
                text-decoration: none !important;
            }            #MessageViewBody a {
                color: inherit;
                text-decoration: none;
                font-size: inherit;
                font-family: inherit;
                font-weight: inherit;
                line-height: inherit;
            }            .btn-primary table td:hover {
                background-color: #34495e !important;
            }            .btn-primary a:hover {
                background-color: #34495e !important;
                border-color: #34495e !important;
            }
        }        
        &nbsp;
        
                            
                                    
                    
                        
                            
                                
                                                                            
                                                                                
                                            A new appointment has been added to your plan.                                                                                
                                            You can make changes by clicking the appointment link below.                                                                                
                                            Appointment Details                                                                                
                                            
                                                
                                                    Service                                                
                                                
                                                    hair cutting                                                
                                            
                                            
                                                
                                                    Provider                                                
                                                
                                                    vivek kumar                                                
                                            
                                            
                                                
                                                    Start                                                
                                                
                                                    24/07/2026 9:15 am                                                
                                            
                                            
                                                
                                                    End                                                
                                                
                                                    24/07/2026 9:45 am
                                                
                                            
                                            
                                                
                                                    Timezone                                                
                                                
                                                    Berlin (+1:00)                                                
                                                                                                                                        
                                                    
                                                        Status                                                    
                                                    
                                                        Booked                                                    
                                                
                                            
                                                                                        
                                                
                                                    Description                                                
                                                
                                                    bfjkebfkerfbj,erbjk                                                
                                            
                                            
                                                                                            
                                                    
                                                        Location                                                    
                                                    
                                                                                                                    noida sec 63                                                                                                            
                                                
                                            
                                            
                                                                                            
                                                    
                                                        Notes                                                    
                                                    
                                                        eghfvegfvw                                                    
                                                
                                                                                                                                                                    
                                            Customer Details                                                                                
                                                                                            
                                                    
                                                        Name                                                    
                                                    
                                                        anshul raj                                                    
                                                
                                            
                                                                                            
                                                    
                                                        Email                                                    
                                                    
                                                        raj973anshul@gmail.com                                                    
                                                
                                            
                                                                                            
                                                    
                                                        Phone Number                                                    
                                                    
                                                        9319163194                                                    
                                                
                                            
                                            
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                        
                                                                                
                                            
                                                
                                                    
                                                        
                                                            
                                                                
                                                                    
                                                                        Reschedule / Cancel Appointment
                                                                    
                                                                
                                                            
                                                        
                                                    
                                                
                                            
                                        
                                        
                                        
                                    
                                
                            
                        
                    
                    
                    
                
                
                                
                
                    
                        
                            
                                Powered by
                                
                                    Easy!Appointments
                                
                                |
                                
                                    Company Name                                
                            
                        
                    
                
                            
        
        &nbsp;
    

--b2=_HWvI5Cdql0sHHCfLXGNZDCedfxyzDIFgTxEudzT0hk
Content-Type: multipart/related;
 boundary="b3=_HWvI5Cdql0sHHCfLXGNZDCedfxyzDIFgTxEudzT0hk";
 type="text/html"

--b3=_HWvI5Cdql0sHHCfLXGNZDCedfxyzDIFgTxEudzT0hk
Content-Type: text/html; charset=us-ascii


<!doctype html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <title>
        Appointment Details | Easy!Appointments
    </title>
    <style>
        /* -------------------------------------
            GLOBAL RESETS
        ------------------------------------- */

        /*All the styling goes here*/

        img {
            border: none;
            -ms-interpolation-mode: bicubic;
            max-width: 100%;
        }

        body {
            background-color: #f6f6f6;
            font-family: sans-serif;
            -webkit-font-smoothing: antialiased;
            font-size: 14px;
            line-height: 1.4;
            margin: 0;
            padding: 0;
            -ms-text-size-adjust: 100%;
            -webkit-text-size-adjust: 100%;
        }

        table {
            border-collapse: separate;
            mso-table-lspace: 0pt;
            mso-table-rspace: 0pt;
            width: 100%;
        }

        table td {
            font-family: sans-serif;
            font-size: 14px;
            vertical-align: top;
        }

        /* -------------------------------------
            BODY & CONTAINER
        ------------------------------------- */

        .body {
            background-color: #f6f6f6;
            width: 100%;
        }

        /* Set a max-width, and make it display as block so it will automatically stretch to that width, but will also shrink down on a phone or something */
        .container {
            display: block;
            margin: 0 auto !important;
            /* makes it centered */
            max-width: 580px;
            padding: 10px;
            width: 580px;
        }

        /* This should also be a block element, so that it will fill 100% of the .container */
        .content {
            box-sizing: border-box;
            display: block;
            margin: 0 auto;
            max-width: 580px;
            padding: 10px;
        }

        /* -------------------------------------
            HEADER, FOOTER, MAIN
        ------------------------------------- */
        .main {
            background: #ffffff;
            border-radius: 3px;
            width: 100%;
        }

        .wrapper {
            box-sizing: border-box;
            padding: 20px;
        }

        .content-block {
            padding-bottom: 10px;
            padding-top: 10px;
        }

        .footer {
            clear: both;
            margin-top: 10px;
            text-align: center;
            width: 100%;
        }

        .footer td,
        .footer p,
        .footer span,
        .footer a {
            color: #999999;
            font-size: 12px;
            text-align: center;
        }

        /* -------------------------------------
            TYPOGRAPHY
        ------------------------------------- */
        h1,
        h2,
        h3,
        h4 {
            color: #000000;
            font-family: sans-serif;
            font-weight: 400;
            line-height: 1.4;
            margin: 0;
            margin-bottom: 15px;
        }

        h1 {
            font-size: 24px;
            font-weight: 300;
            text-align: center;
            margin-bottom: 40px;
        }

        .label {
            width: 120px;
        }

        .details-table {
            margin: 0 0 0 auto;
            width: 85%;
        }

        p,
        ul,
        ol {
            font-family: sans-serif;
            font-size: 14px;
            font-weight: normal;
            margin: 0;
            margin-bottom: 15px;
        }

        p li,
        ul li,
        ol li {
            list-style-position: inside;
            margin-left: 5px;
        }

        a {
            color: #429A82;
            text-decoration: underline;
        }

        /* -------------------------------------
            BUTTONS
        ------------------------------------- */
        .btn {
            box-sizing: border-box;
            width: 100%;
        }

        .btn > tbody > tr > td {
            padding-bottom: 15px;
        }

        .btn table {
            width: auto;
        }

        .btn table td {
            background-color: #ffffff;
            border-radius: 5px;
            text-align: center;
        }

        .btn a {
            background-color: #ffffff;
            border: solid 1px #429A82;
            border-radius: 5px;
            box-sizing: border-box;
            color: #429A82;
            cursor: pointer;
            display: inline-block;
            font-size: 14px;
            font-weight: bold;
            margin: 0;
            padding: 12px 25px;
            text-decoration: none;
        }

        .btn-primary table td {
            background-color: #429A82;
        }

        .btn-primary a {
            background-color: #429A82;
            border-color: #429A82;
            color: #ffffff;
        }

        /* -------------------------------------
            OTHER STYLES THAT MIGHT BE USEFUL
        ------------------------------------- */
        .last {
            margin-bottom: 0;
        }

        .first {
            margin-top: 0;
        }

        .align-center {
            text-align: center;
        }

        .align-right {
            text-align: right;
        }

        .align-left {
            text-align: left;
        }

        .clear {
            clear: both;
        }

        .mt0 {
            margin-top: 0;
        }

        .mb0 {
            margin-bottom: 0;
        }

        .preheader {
            color: transparent;
            display: none;
            height: 0;
            max-height: 0;
            max-width: 0;
            opacity: 0;
            overflow: hidden;
            mso-hide: all;
            visibility: hidden;
            width: 0;
        }

        .powered-by a {
            text-decoration: none;
        }

        hr {
            border: 0;
            border-bottom: 1px solid #f6f6f6;
            margin: 20px 0;
        }

        /* -------------------------------------
            RESPONSIVE AND MOBILE FRIENDLY STYLES
        ------------------------------------- */
        @media only screen and (max-width: 620px) {
            table.body h1 {
                font-size: 28px !important;
                margin-bottom: 10px !important;
            }

            table.body p,
            table.body ul,
            table.body ol,
            table.body td,
            table.body span,
            table.body a {
                font-size: 16px !important;
            }

            table.body .wrapper,
            table.body .article {
                padding: 10px !important;
            }

            table.body .content {
                padding: 0 !important;
            }

            table.body .container {
                padding: 0 !important;
                width: 100% !important;
            }

            table.body .main {
                border-left-width: 0 !important;
                border-radius: 0 !important;
                border-right-width: 0 !important;
            }

            table.body .btn table {
                width: 100% !important;
            }

            table.body .btn a {
                width: 100% !important;
            }

            table.body .img-responsive {
                height: auto !important;
                max-width: 100% !important;
                width: auto !important;
            }
        }

        /* -------------------------------------
            PRESERVE THESE STYLES IN THE HEAD
        ------------------------------------- */
        @media all {
            .ExternalClass {
                width: 100%;
            }

            .ExternalClass,
            .ExternalClass p,
            .ExternalClass span,
            .ExternalClass font,
            .ExternalClass td,
            .ExternalClass div {
                line-height: 100%;
            }

            .apple-link a {
                color: inherit !important;
                font-family: inherit !important;
                font-size: inherit !important;
                font-weight: inherit !important;
                line-height: inherit !important;
                text-decoration: none !important;
            }

            #MessageViewBody a {
                color: inherit;
                text-decoration: none;
                font-size: inherit;
                font-family: inherit;
                font-weight: inherit;
                line-height: inherit;
            }

            .btn-primary table td:hover {
                background-color: #34495e !important;
            }

            .btn-primary a:hover {
                background-color: #34495e !important;
                border-color: #34495e !important;
            }
        }

    </style>
</head>
<body>
<table role="presentation" border="0" cellpadding="0" cellspacing="0" class="body">
    <tr>
        <td>&nbsp;</td>
        <td class="container">
            <div class="content">

                <!-- START CENTERED WHITE CONTAINER -->
                <table role="presentation" class="main">

                    <!-- START MAIN CONTENT AREA -->
                    <tr>
                        <td class="wrapper">
                            <table role="presentation" border="0" cellpadding="0" cellspacing="0">
                                <tr>
                                    <td>

                                        <!-- Logo at the top center, embedded as CID -->
                                        <img src="cid:logo.png" alt="Logo" style="display:block;max-width:67px; margin: auto auto 24px;">

                                        <h1 style="text-align: center;">
                                            A new appointment has been added to your plan.                                        </h1>

                                        <p style="text-align: center;">
                                            You can make changes by clicking the appointment link below.                                        </p>

                                        <h2 style="text-align: center;">
                                            Appointment Details                                        </h2>

                                        <table id="appointment-details" class="details-table" align="center">
                                            <tr>
                                                <td class="label" style="padding: 3px;font-weight: bold;">
                                                    Service                                                </td>
                                                <td style="padding: 3px;">
                                                    hair cutting                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="label" style="padding: 3px;font-weight: bold;">
                                                    Provider                                                </td>
                                                <td style="padding: 3px;">
                                                    vivek kumar                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="label" style="padding: 3px;font-weight: bold;">
                                                    Start                                                </td>
                                                <td style="padding: 3px;">
                                                    24/07/2026 9:15 am                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="label" style="padding: 3px;font-weight: bold;">
                                                    End                                                </td>
                                                <td style="padding: 3px;">
                                                    24/07/2026 9:45 am
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="label" style="padding: 3px;font-weight: bold;">
                                                    Timezone                                                </td>
                                                <td style="padding: 3px;">
                                                    Berlin (+1:00)                                                </td>
                                            </tr>

                                                                                            <tr>
                                                    <td class="label" style="padding: 3px;font-weight: bold;">
                                                        Status                                                    </td>
                                                    <td style="padding: 3px;">
                                                        Booked                                                    </td>
                                                </tr>
                                            
                                                                                        <tr>
                                                <td class="label" style="padding: 3px;font-weight: bold;">
                                                    Description                                                </td>
                                                <td style="padding: 3px;">
                                                    bfjkebfkerfbj,erbjk                                                </td>
                                            </tr>
                                            
                                                                                            <tr>
                                                    <td class="label" style="padding: 3px;font-weight: bold;">
                                                        Location                                                    </td>
                                                    <td style="padding: 3px;">
                                                                                                                    noida sec 63                                                                                                            </td>
                                                </tr>
                                            
                                            
                                                                                            <tr>
                                                    <td class="label" style="padding: 3px;font-weight: bold;">
                                                        Notes                                                    </td>
                                                    <td style="padding: 3px;">
                                                        eghfvegfvw                                                    </td>
                                                </tr>
                                                                                    </table>

                                        <br>

                                        <h2 style="text-align: center;">
                                            Customer Details                                        </h2>

                                        <table id="customer-details" class="details-table" align="center">
                                                                                            <tr>
                                                    <td class="label" style="padding: 3px;font-weight: bold;">
                                                        Name                                                    </td>
                                                    <td style="padding: 3px;">
                                                        anshul raj                                                    </td>
                                                </tr>
                                            
                                                                                            <tr>
                                                    <td class="label" style="padding: 3px;font-weight: bold;">
                                                        Email                                                    </td>
                                                    <td style="padding: 3px;">
                                                        raj973anshul@gmail.com                                                    </td>
                                                </tr>
                                            
                                                                                            <tr>
                                                    <td class="label" style="padding: 3px;font-weight: bold;">
                                                        Phone Number                                                    </td>
                                                    <td style="padding: 3px;">
                                                        9319163194                                                    </td>
                                                </tr>
                                            
                                            
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                </table>

                                        <br>
                                        <br>

                                        <table class="btn btn-primary" role="presentation" border="0" cellpadding="0" cellspacing="0">
                                            <tbody>
                                                <tr>
                                                    <td align="center">
                                                        <table role="presentation" border="0" cellpadding="0" cellspacing="0">
                                                            <tbody>
                                                                <tr>
                                                                    <td>
                                                                        <a href="http://localhost/easy/index.php/calendar/reschedule/U3jOlCBIi1TS" target="_blank">Reschedule / Cancel Appointment</a>
                                                                    </td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                        
                                        
                                    </td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                    
                    <!-- END MAIN CONTENT AREA -->
                </table>
                
                <!-- END CENTERED WHITE CONTAINER -->

                <!-- START FOOTER -->
                <div class="footer">
                    <table role="presentation" border="0" cellpadding="0" cellspacing="0">
                        <tr>
                            <td class="content-block powered-by">
                                Powered by
                                <a href="https://easyappointments.org" style="text-decoration: none;">
                                    Easy!Appointments
                                </a>
                                |
                                <a href="https://example.org" style="text-decoration: none;">
                                    Company Name                                </a>
                            </td>
                        </tr>
                    </table>
                </div>
                <!-- END FOOTER -->

            </div>
        </td>
        <td>&nbsp;</td>
    </tr>
</table>
</body>
</html>

--b3=_HWvI5Cdql0sHHCfLXGNZDCedfxyzDIFgTxEudzT0hk
Content-Type: image/png; name=logo.png
Content-Transfer-Encoding: base64
Content-ID: <logo.png>
Content-Disposition: inline; filename=logo.png

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
TkSuQmCC

--b3=_HWvI5Cdql0sHHCfLXGNZDCedfxyzDIFgTxEudzT0hk--


--b2=_HWvI5Cdql0sHHCfLXGNZDCedfxyzDIFgTxEudzT0hk--

--b1=_HWvI5Cdql0sHHCfLXGNZDCedfxyzDIFgTxEudzT0hk
Content-Type: text/calendar; name=invitation.ics
Content-Transfer-Encoding: base64
Content-Disposition: attachment; filename=invitation.ics

QkVHSU46VkNBTEVOREFSDQpWRVJTSU9OOjIuMA0KUFJPRElEOi0vL0Vhc3lBcHBvaW50bWVudHMv
L09wZW4gU291cmNlIFdlYiBTY2hlZHVsZXIvL0VODQpDQUxTQ0FMRTpHUkVHT1JJQU4NCk1FVEhP
RDpSRVFVRVNUDQpCRUdJTjpWVElNRVpPTkUNClRaSUQ6RXVyb3BlL0Jlcmxpbg0KQkVHSU46U1RB
TkRBUkQNCkRUU1RBUlQ6MjAyNjEwMjVUMDEwMDAwWg0KVFpPRkZTRVRUTzorMDEwMA0KVFpPRkZT
RVRGUk9NOiswMjAwDQpSUlVMRTpGUkVRPVlFQVJMWTtCWU1PTlRIPTExO0JZREFZPTFTVQ0KRU5E
OlNUQU5EQVJEDQpCRUdJTjpEQVlMSUdIVA0KRFRTVEFSVDoyMDI2MDMyOVQwMTAwMDBaDQpUWk9G
RlNFVFRPOiswMjAwDQpUWk9GRlNFVEZST006KzAxMDANClJSVUxFOkZSRVE9WUVBUkxZO0JZTU9O
VEg9MztCWURBWT0yU1UNCkVORDpEQVlMSUdIVA0KRU5EOlZUSU1FWk9ORQ0KQkVHSU46VkVWRU5U
DQpVSUQ6ZWEtYzgxZTcyOGQ5ZDRjMmY2MzZmMDY3Zjg5Y2MxNDg2MmMNCkRUU1RBUlQ6MjAyNjA3
MjRUMDcxNTAwWg0KRFRFTkQ6MjAyNjA3MjRUMDc0NTAwWg0KU0VRVUVOQ0U6MTc4NDc5Njg5MA0K
U1RBVFVTOkNPTkZJUk1FRA0KU1VNTUFSWTpoYWlyIGN1dHRpbmcNCkRFU0NSSVBUSU9OOlxuUHJv
dmlkZXJcblxuTmFtZTogdml2ZWsga3VtYXJcbkVtYWlsOiByYWo5NzNhbnNodWxAZ21haWwNCiAu
Y29tXG5QaG9uZSBOdW1iZXI6IFxuQWRkcmVzczogXG5DaXR5OiBcblppcCBDb2RlOiBcblxuQ3Vz
dG9tZXJcblxuTmFtDQogZTogYW5zaHVsIHJhalxuRW1haWw6IHJhajk3M2Fuc2h1bEBnbWFpbC5j
b21cblBob25lIE51bWJlcjogOTMxOTE2MzE5NA0KIFxuQWRkcmVzczogXG5DaXR5OiBcblppcCBD
b2RlOiBcblxuTm90ZXNcblxuZWdoZnZlZ2Z2dw0KTE9DQVRJT046bm9pZGEgc2VjIDYzDQpEVFNU
QU1QOjIwMjYwNzIzVDA4NTQ1MVoNCkFUVEVOREVFO0NVVFlQRT1JTkRJVklEVUFMO1JPTEU9UkVR
LVBBUlRJQ0lQQU5UO1BBUlRTVEFUPU5FRURTLUFDVElPTjsNCiBSU1ZQPVRSVUU7Q049YW5zaHVs
IHJhajptYWlsdG86cmFqOTczYW5zaHVsQGdtYWlsLmNvbQ0KQVRURU5ERUU7Q1VUWVBFPUlORElW
SURVQUw7Uk9MRT1SRVEtUEFSVElDSVBBTlQ7UEFSVFNUQVQ9QUNDRVBURUQ7UlNWUA0KID1GQUxT
RTtDTj12aXZlayBrdW1hcjptYWlsdG86cmFqOTczYW5zaHVsQGdtYWlsLmNvbQ0KT1JHQU5JWkVS
O0NOPXZpdmVrIGt1bWFyOm1haWx0bzpyYWo5NzNhbnNodWxAZ21haWwuY29tDQpCRUdJTjpWQUxB
Uk0NClRSSUdHRVI7VkFMVUU9REFURS1USU1FOjIwMjYwNzI0VDA3MDAwMFoNCkFDVElPTjpFTUFJ
TA0KU1VNTUFSWTpBbGFybSBub3RpZmljYXRpb24NCkRFU0NSSVBUSU9OOlRoaXMgaXMgYW4gZXZl
bnQgcmVtaW5kZXINCkFUVEVOREVFO0NVVFlQRT1JTkRJVklEVUFMO1JPTEU9UkVRLVBBUlRJQ0lQ
QU5UO1BBUlRTVEFUPU5FRURTLUFDVElPTjsNCiBSU1ZQPVRSVUU7Q049YW5zaHVsIHJhajptYWls
dG86cmFqOTczYW5zaHVsQGdtYWlsLmNvbQ0KRU5EOlZBTEFSTQ0KQkVHSU46VkFMQVJNDQpUUklH
R0VSO1ZBTFVFPURBVEUtVElNRToyMDI2MDcyNFQwNjE1MDBaDQpBQ1RJT046RU1BSUwNClNVTU1B
Ulk6QWxhcm0gbm90aWZpY2F0aW9uDQpERVNDUklQVElPTjpUaGlzIGlzIGFuIGV2ZW50IHJlbWlu
ZGVyDQpBVFRFTkRFRTtDVVRZUEU9SU5ESVZJRFVBTDtST0xFPVJFUS1QQVJUSUNJUEFOVDtQQVJU
U1RBVD1ORUVEUy1BQ1RJT047DQogUlNWUD1UUlVFO0NOPWFuc2h1bCByYWo6bWFpbHRvOnJhajk3
M2Fuc2h1bEBnbWFpbC5jb20NCkVORDpWQUxBUk0NCkVORDpWRVZFTlQNCkVORDpWQ0FMRU5EQVIN
Cg==

--b1=_HWvI5Cdql0sHHCfLXGNZDCedfxyzDIFgTxEudzT0hk--
',
            ),
          ),
          1 => 
          array (
            'file' => 'C:\\xampp\\htdocs\\easy\\vendor\\phpmailer\\phpmailer\\src\\PHPMailer.php',
            'line' => 1670,
            'function' => 'postSend',
            'class' => 'PHPMailer\\PHPMailer\\PHPMailer',
            'type' => '->',
            'args' => 
            array (
            ),
          ),
          2 => 
          array (
            'file' => 'C:\\xampp\\htdocs\\easy\\application\\libraries\\Email_messages.php',
            'line' => 119,
            'function' => 'send',
            'class' => 'PHPMailer\\PHPMailer\\PHPMailer',
            'type' => '->',
            'args' => 
            array (
            ),
          ),
          3 => 
          array (
            'file' => 'C:\\xampp\\htdocs\\easy\\application\\libraries\\Notifications.php',
            'line' => 115,
            'function' => 'send_appointment_saved',
            'class' => 'Email_messages',
            'type' => '->',
            'args' => 
            array (
              0 => 
              array (
                'id' => 2,
                'create_datetime' => '2026-07-23 10:54:50',
                'update_datetime' => '2026-07-23 10:54:50',
                'book_datetime' => '2026-07-23 10:54:50',
                'start_datetime' => '2026-07-24 09:15:00',
                'end_datetime' => '2026-07-24 09:45:00',
                'location' => 'noida sec 63',
                'meeting_link' => NULL,
                'notes' => 'eghfvegfvw',
                'hash' => 'U3jOlCBIi1TS',
                'color' => '#7cbae8',
                'status' => 'Booked',
                'is_unavailability' => false,
                'id_users_provider' => 5,
                'id_users_customer' => 6,
                'id_services' => 2,
                'id_google_calendar' => NULL,
                'id_caldav_calendar' => NULL,
              ),
              1 => 
              array (
                'id' => 5,
                'create_datetime' => '2026-07-22 13:13:04',
                'update_datetime' => '2026-07-22 13:13:04',
                'first_name' => 'vivek',
                'last_name' => 'kumar',
                'email' => 'raj973anshul@gmail.com',
                'mobile_number' => NULL,
                'phone_number' => '',
                'address' => '',
                'city' => '',
                'state' => '',
                'zip_code' => '',
                'notes' => '',
                'timezone' => 'Europe/Berlin',
                'language' => 'english',
                'custom_field_1' => NULL,
                'custom_field_2' => NULL,
                'custom_field_3' => NULL,
                'custom_field_4' => NULL,
                'custom_field_5' => NULL,
                'is_private' => false,
                'ldap_dn' => NULL,
                'id_roles' => 2,
                'settings' => 
                array (
                  'username' => 'vivekkumar',
                  'password_reset_token' => NULL,
                  'password_reset_expires' => NULL,
                  'working_plan' => '{"sunday":{"start":"09:00","end":"18:00","breaks":[{"start":"14:30","end":"15:00"}]},"monday":{"start":"09:00","end":"18:00","breaks":[{"start":"14:30","end":"15:00"}]},"tuesday":{"start":"09:00","end":"18:00","breaks":[{"start":"14:30","end":"15:00"}]},"wednesday":{"start":"09:00","end":"18:00","breaks":[{"start":"14:30","end":"15:00"}]},"thursday":{"start":"09:00","end":"18:00","breaks":[{"start":"14:30","end":"15:00"}]},"friday":{"start":"09:00","end":"18:00","breaks":[{"start":"14:30","end":"15:00"}]},"saturday":{"start":"09:00","end":"18:00","breaks":[{"start":"14:30","end":"15:00"}]}}',
                  'working_plan_exceptions' => '[]',
                  'notifications' => '1',
                  'google_sync' => NULL,
                  'google_token' => NULL,
                  'google_calendar' => NULL,
                  'caldav_sync' => '0',
                  'caldav_url' => NULL,
                  'caldav_username' => NULL,
                  'caldav_password' => NULL,
                  'sync_past_days' => '30',
                  'sync_future_days' => '90',
                  'calendar_view' => 'table',
                ),
                'services' => 
                array (
                  0 => 1,
                  1 => 2,
                ),
              ),
              2 => 
              array (
                'id' => 2,
                'create_datetime' => '2026-07-23 10:51:48',
                'update_datetime' => '2026-07-23 10:51:48',
                'name' => 'hair cutting',
                'duration' => '30',
                'price' => 50.0,
                'currency' => '',
                'description' => 'bfjkebfkerfbj,erbjk',
                'slot_interval' => '15',
                'color' => '#7cbae8',
                'location' => 'noida sec 63',
                'attendants_number' => 1,
                'is_private' => false,
                'id_service_categories' => 1,
              ),
              3 => 
              array (
                'id' => 6,
                'create_datetime' => '2026-07-23 10:54:50',
                'update_datetime' => '2026-07-23 10:54:50',
                'first_name' => 'anshul',
                'last_name' => 'raj',
                'email' => 'raj973anshul@gmail.com',
                'mobile_number' => NULL,
                'phone_number' => '9319163194',
                'address' => '',
                'city' => '',
                'state' => NULL,
                'zip_code' => '',
                'notes' => NULL,
                'timezone' => 'Asia/Calcutta',
                'language' => 'english',
                'custom_field_1' => NULL,
                'custom_field_2' => NULL,
                'custom_field_3' => NULL,
                'custom_field_4' => NULL,
                'custom_field_5' => NULL,
                'is_private' => '0',
                'ldap_dn' => NULL,
                'id_roles' => 3,
              ),
              4 => 
              array (
                'company_name' => 'Company Name',
                'company_link' => 'https://example.org',
                'company_email' => 'info@example.org',
                'company_color' => NULL,
                'date_format' => 'DMY',
                'time_format' => 'regular',
              ),
              5 => 'A new appointment has been added to your plan.',
              6 => 'You can make changes by clicking the appointment link below.',
              7 => 'http://localhost/easy/index.php/calendar/reschedule/U3jOlCBIi1TS',
              8 => 'raj973anshul@gmail.com',
              9 => 'BEGIN:VCALENDAR
VERSION:2.0
PRODID:-//EasyAppointments//Open Source Web Scheduler//EN
CALSCALE:GREGORIAN
METHOD:REQUEST
BEGIN:VTIMEZONE
TZID:Europe/Berlin
BEGIN:STANDARD
DTSTART:20261025T010000Z
TZOFFSETTO:+0100
TZOFFSETFROM:+0200
RRULE:FREQ=YEARLY;BYMONTH=11;BYDAY=1SU
END:STANDARD
BEGIN:DAYLIGHT
DTSTART:20260329T010000Z
TZOFFSETTO:+0200
TZOFFSETFROM:+0100
RRULE:FREQ=YEARLY;BYMONTH=3;BYDAY=2SU
END:DAYLIGHT
END:VTIMEZONE
BEGIN:VEVENT
UID:ea-c81e728d9d4c2f636f067f89cc14862c
DTSTART:20260724T071500Z
DTEND:20260724T074500Z
SEQUENCE:1784796890
STATUS:CONFIRMED
SUMMARY:hair cutting
DESCRIPTION:\\nProvider\\n\\nName: vivek kumar\\nEmail: raj973anshul@gmail
 .com\\nPhone Number: \\nAddress: \\nCity: \\nZip Code: \\n\\nCustomer\\n\\nNam
 e: anshul raj\\nEmail: raj973anshul@gmail.com\\nPhone Number: 9319163194
 \\nAddress: \\nCity: \\nZip Code: \\n\\nNotes\\n\\neghfvegfvw
LOCATION:noida sec 63
DTSTAMP:20260723T085451Z
ATTENDEE;CUTYPE=INDIVIDUAL;ROLE=REQ-PARTICIPANT;PARTSTAT=NEEDS-ACTION;
 RSVP=TRUE;CN=anshul raj:mailto:raj973anshul@gmail.com
ATTENDEE;CUTYPE=INDIVIDUAL;ROLE=REQ-PARTICIPANT;PARTSTAT=ACCEPTED;RSVP
 =FALSE;CN=vivek kumar:mailto:raj973anshul@gmail.com
ORGANIZER;CN=vivek kumar:mailto:raj973anshul@gmail.com
BEGIN:VALARM
TRIGGER;VALUE=DATE-TIME:20260724T070000Z
ACTION:EMAIL
SUMMARY:Alarm notification
DESCRIPTION:This is an event reminder
ATTENDEE;CUTYPE=INDIVIDUAL;ROLE=REQ-PARTICIPANT;PARTSTAT=NEEDS-ACTION;
 RSVP=TRUE;CN=anshul raj:mailto:raj973anshul@gmail.com
END:VALARM
BEGIN:VALARM
TRIGGER;VALUE=DATE-TIME:20260724T061500Z
ACTION:EMAIL
SUMMARY:Alarm notification
DESCRIPTION:This is an event reminder
ATTENDEE;CUTYPE=INDIVIDUAL;ROLE=REQ-PARTICIPANT;PARTSTAT=NEEDS-ACTION;
 RSVP=TRUE;CN=anshul raj:mailto:raj973anshul@gmail.com
END:VALARM
END:VEVENT
END:VCALENDAR
',
              10 => 'Europe/Berlin',
            ),
          ),
          4 => 
          array (
            'file' => 'C:\\xampp\\htdocs\\easy\\application\\controllers\\Booking.php',
            'line' => 567,
            'function' => 'notify_appointment_saved',
            'class' => 'Notifications',
            'type' => '->',
            'args' => 
            array (
              0 => 
              array (
                'id' => 2,
                'create_datetime' => '2026-07-23 10:54:50',
                'update_datetime' => '2026-07-23 10:54:50',
                'book_datetime' => '2026-07-23 10:54:50',
                'start_datetime' => '2026-07-24 09:15:00',
                'end_datetime' => '2026-07-24 09:45:00',
                'location' => 'noida sec 63',
                'meeting_link' => NULL,
                'notes' => 'eghfvegfvw',
                'hash' => 'U3jOlCBIi1TS',
                'color' => '#7cbae8',
                'status' => 'Booked',
                'is_unavailability' => false,
                'id_users_provider' => 5,
                'id_users_customer' => 6,
                'id_services' => 2,
                'id_google_calendar' => NULL,
                'id_caldav_calendar' => NULL,
              ),
              1 => 
              array (
                'id' => 2,
                'create_datetime' => '2026-07-23 10:51:48',
                'update_datetime' => '2026-07-23 10:51:48',
                'name' => 'hair cutting',
                'duration' => '30',
                'price' => 50.0,
                'currency' => '',
                'description' => 'bfjkebfkerfbj,erbjk',
                'slot_interval' => '15',
                'color' => '#7cbae8',
                'location' => 'noida sec 63',
                'attendants_number' => 1,
                'is_private' => false,
                'id_service_categories' => 1,
              ),
              2 => 
              array (
                'id' => 5,
                'create_datetime' => '2026-07-22 13:13:04',
                'update_datetime' => '2026-07-22 13:13:04',
                'first_name' => 'vivek',
                'last_name' => 'kumar',
                'email' => 'raj973anshul@gmail.com',
                'mobile_number' => NULL,
                'phone_number' => '',
                'address' => '',
                'city' => '',
                'state' => '',
                'zip_code' => '',
                'notes' => '',
                'timezone' => 'Europe/Berlin',
                'language' => 'english',
                'custom_field_1' => NULL,
                'custom_field_2' => NULL,
                'custom_field_3' => NULL,
                'custom_field_4' => NULL,
                'custom_field_5' => NULL,
                'is_private' => false,
                'ldap_dn' => NULL,
                'id_roles' => 2,
                'settings' => 
                array (
                  'username' => 'vivekkumar',
                  'password_reset_token' => NULL,
                  'password_reset_expires' => NULL,
                  'working_plan' => '{"sunday":{"start":"09:00","end":"18:00","breaks":[{"start":"14:30","end":"15:00"}]},"monday":{"start":"09:00","end":"18:00","breaks":[{"start":"14:30","end":"15:00"}]},"tuesday":{"start":"09:00","end":"18:00","breaks":[{"start":"14:30","end":"15:00"}]},"wednesday":{"start":"09:00","end":"18:00","breaks":[{"start":"14:30","end":"15:00"}]},"thursday":{"start":"09:00","end":"18:00","breaks":[{"start":"14:30","end":"15:00"}]},"friday":{"start":"09:00","end":"18:00","breaks":[{"start":"14:30","end":"15:00"}]},"saturday":{"start":"09:00","end":"18:00","breaks":[{"start":"14:30","end":"15:00"}]}}',
                  'working_plan_exceptions' => '[]',
                  'notifications' => '1',
                  'google_sync' => NULL,
                  'google_token' => NULL,
                  'google_calendar' => NULL,
                  'caldav_sync' => '0',
                  'caldav_url' => NULL,
                  'caldav_username' => NULL,
                  'caldav_password' => NULL,
                  'sync_past_days' => '30',
                  'sync_future_days' => '90',
                  'calendar_view' => 'table',
                ),
                'services' => 
                array (
                  0 => 1,
                  1 => 2,
                ),
              ),
              3 => 
              array (
                'id' => 6,
                'create_datetime' => '2026-07-23 10:54:50',
                'update_datetime' => '2026-07-23 10:54:50',
                'first_name' => 'anshul',
                'last_name' => 'raj',
                'email' => 'raj973anshul@gmail.com',
                'mobile_number' => NULL,
                'phone_number' => '9319163194',
                'address' => '',
                'city' => '',
                'state' => NULL,
                'zip_code' => '',
                'notes' => NULL,
                'timezone' => 'Asia/Calcutta',
                'language' => 'english',
                'custom_field_1' => NULL,
                'custom_field_2' => NULL,
                'custom_field_3' => NULL,
                'custom_field_4' => NULL,
                'custom_field_5' => NULL,
                'is_private' => '0',
                'ldap_dn' => NULL,
                'id_roles' => 3,
              ),
              4 => 
              array (
                'company_name' => 'Company Name',
                'company_link' => 'https://example.org',
                'company_email' => 'info@example.org',
                'company_color' => NULL,
                'date_format' => 'DMY',
                'time_format' => 'regular',
              ),
              5 => false,
            ),
          ),
          5 => 
          array (
            'file' => 'C:\\xampp\\htdocs\\easy\\system\\core\\CodeIgniter.php',
            'line' => 481,
            'function' => 'register',
            'class' => 'Booking',
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
      )),
      1 => 'appointment-saved to provider',
      2 => 2,
    ),
  ),
  2 => 
  array (
    'file' => 'C:\\xampp\\htdocs\\easy\\application\\controllers\\Booking.php',
    'line' => 567,
    'function' => 'notify_appointment_saved',
    'class' => 'Notifications',
    'type' => '->',
    'args' => 
    array (
      0 => 
      array (
        'id' => 2,
        'create_datetime' => '2026-07-23 10:54:50',
        'update_datetime' => '2026-07-23 10:54:50',
        'book_datetime' => '2026-07-23 10:54:50',
        'start_datetime' => '2026-07-24 09:15:00',
        'end_datetime' => '2026-07-24 09:45:00',
        'location' => 'noida sec 63',
        'meeting_link' => NULL,
        'notes' => 'eghfvegfvw',
        'hash' => 'U3jOlCBIi1TS',
        'color' => '#7cbae8',
        'status' => 'Booked',
        'is_unavailability' => false,
        'id_users_provider' => 5,
        'id_users_customer' => 6,
        'id_services' => 2,
        'id_google_calendar' => NULL,
        'id_caldav_calendar' => NULL,
      ),
      1 => 
      array (
        'id' => 2,
        'create_datetime' => '2026-07-23 10:51:48',
        'update_datetime' => '2026-07-23 10:51:48',
        'name' => 'hair cutting',
        'duration' => '30',
        'price' => 50.0,
        'currency' => '',
        'description' => 'bfjkebfkerfbj,erbjk',
        'slot_interval' => '15',
        'color' => '#7cbae8',
        'location' => 'noida sec 63',
        'attendants_number' => 1,
        'is_private' => false,
        'id_service_categories' => 1,
      ),
      2 => 
      array (
        'id' => 5,
        'create_datetime' => '2026-07-22 13:13:04',
        'update_datetime' => '2026-07-22 13:13:04',
        'first_name' => 'vivek',
        'last_name' => 'kumar',
        'email' => 'raj973anshul@gmail.com',
        'mobile_number' => NULL,
        'phone_number' => '',
        'address' => '',
        'city' => '',
        'state' => '',
        'zip_code' => '',
        'notes' => '',
        'timezone' => 'Europe/Berlin',
        'language' => 'english',
        'custom_field_1' => NULL,
        'custom_field_2' => NULL,
        'custom_field_3' => NULL,
        'custom_field_4' => NULL,
        'custom_field_5' => NULL,
        'is_private' => false,
        'ldap_dn' => NULL,
        'id_roles' => 2,
        'settings' => 
        array (
          'username' => 'vivekkumar',
          'password_reset_token' => NULL,
          'password_reset_expires' => NULL,
          'working_plan' => '{"sunday":{"start":"09:00","end":"18:00","breaks":[{"start":"14:30","end":"15:00"}]},"monday":{"start":"09:00","end":"18:00","breaks":[{"start":"14:30","end":"15:00"}]},"tuesday":{"start":"09:00","end":"18:00","breaks":[{"start":"14:30","end":"15:00"}]},"wednesday":{"start":"09:00","end":"18:00","breaks":[{"start":"14:30","end":"15:00"}]},"thursday":{"start":"09:00","end":"18:00","breaks":[{"start":"14:30","end":"15:00"}]},"friday":{"start":"09:00","end":"18:00","breaks":[{"start":"14:30","end":"15:00"}]},"saturday":{"start":"09:00","end":"18:00","breaks":[{"start":"14:30","end":"15:00"}]}}',
          'working_plan_exceptions' => '[]',
          'notifications' => '1',
          'google_sync' => NULL,
          'google_token' => NULL,
          'google_calendar' => NULL,
          'caldav_sync' => '0',
          'caldav_url' => NULL,
          'caldav_username' => NULL,
          'caldav_password' => NULL,
          'sync_past_days' => '30',
          'sync_future_days' => '90',
          'calendar_view' => 'table',
        ),
        'services' => 
        array (
          0 => 1,
          1 => 2,
        ),
      ),
      3 => 
      array (
        'id' => 6,
        'create_datetime' => '2026-07-23 10:54:50',
        'update_datetime' => '2026-07-23 10:54:50',
        'first_name' => 'anshul',
        'last_name' => 'raj',
        'email' => 'raj973anshul@gmail.com',
        'mobile_number' => NULL,
        'phone_number' => '9319163194',
        'address' => '',
        'city' => '',
        'state' => NULL,
        'zip_code' => '',
        'notes' => NULL,
        'timezone' => 'Asia/Calcutta',
        'language' => 'english',
        'custom_field_1' => NULL,
        'custom_field_2' => NULL,
        'custom_field_3' => NULL,
        'custom_field_4' => NULL,
        'custom_field_5' => NULL,
        'is_private' => '0',
        'ldap_dn' => NULL,
        'id_roles' => 3,
      ),
      4 => 
      array (
        'company_name' => 'Company Name',
        'company_link' => 'https://example.org',
        'company_email' => 'info@example.org',
        'company_color' => NULL,
        'date_format' => 'DMY',
        'time_format' => 'regular',
      ),
      5 => false,
    ),
  ),
)
ERROR - 2026-07-23 10:54:55 --> #0 C:\xampp\htdocs\easy\vendor\phpmailer\phpmailer\src\PHPMailer.php(1857): PHPMailer\PHPMailer\PHPMailer->mailSend('Date: Thu, 23 J...', '--b1=_HWvI5Cdql...')
#1 C:\xampp\htdocs\easy\vendor\phpmailer\phpmailer\src\PHPMailer.php(1670): PHPMailer\PHPMailer\PHPMailer->postSend()
#2 C:\xampp\htdocs\easy\application\libraries\Email_messages.php(119): PHPMailer\PHPMailer\PHPMailer->send()
#3 C:\xampp\htdocs\easy\application\libraries\Notifications.php(115): Email_messages->send_appointment_saved(Array, Array, Array, Array, Array, 'A new appointme...', 'You can make ch...', 'http://localhos...', 'raj973anshul@gm...', 'BEGIN:VCALENDAR...', 'Europe/Berlin')
#4 C:\xampp\htdocs\easy\application\controllers\Booking.php(567): Notifications->notify_appointment_saved(Array, Array, Array, Array, Array, false)
#5 C:\xampp\htdocs\easy\system\core\CodeIgniter.php(481): Booking->register()
#6 C:\xampp\htdocs\easy\index.php(344): require_once('C:\\xampp\\htdocs...')
#7 {main} Trace: array (
  0 => 
  array (
    'file' => 'C:\\xampp\\htdocs\\easy\\application\\libraries\\Notifications.php',
    'line' => 356,
    'function' => 'log_message',
    'args' => 
    array (
      0 => 'error',
      1 => '#0 C:\\xampp\\htdocs\\easy\\vendor\\phpmailer\\phpmailer\\src\\PHPMailer.php(1857): PHPMailer\\PHPMailer\\PHPMailer->mailSend(\'Date: Thu, 23 J...\', \'--b1=_HWvI5Cdql...\')
#1 C:\\xampp\\htdocs\\easy\\vendor\\phpmailer\\phpmailer\\src\\PHPMailer.php(1670): PHPMailer\\PHPMailer\\PHPMailer->postSend()
#2 C:\\xampp\\htdocs\\easy\\application\\libraries\\Email_messages.php(119): PHPMailer\\PHPMailer\\PHPMailer->send()
#3 C:\\xampp\\htdocs\\easy\\application\\libraries\\Notifications.php(115): Email_messages->send_appointment_saved(Array, Array, Array, Array, Array, \'A new appointme...\', \'You can make ch...\', \'http://localhos...\', \'raj973anshul@gm...\', \'BEGIN:VCALENDAR...\', \'Europe/Berlin\')
#4 C:\\xampp\\htdocs\\easy\\application\\controllers\\Booking.php(567): Notifications->notify_appointment_saved(Array, Array, Array, Array, Array, false)
#5 C:\\xampp\\htdocs\\easy\\system\\core\\CodeIgniter.php(481): Booking->register()
#6 C:\\xampp\\htdocs\\easy\\index.php(344): require_once(\'C:\\\\xampp\\\\htdocs...\')
#7 {main}',
    ),
  ),
  1 => 
  array (
    'file' => 'C:\\xampp\\htdocs\\easy\\application\\libraries\\Notifications.php',
    'line' => 129,
    'function' => 'log_exception',
    'class' => 'Notifications',
    'type' => '->',
    'args' => 
    array (
      0 => 
      \PHPMailer\PHPMailer\Exception::__set_state(array(
         'message' => 'Could not instantiate mail function.',
         'string' => '',
         'code' => 2,
         'file' => 'C:\\xampp\\htdocs\\easy\\vendor\\phpmailer\\phpmailer\\src\\PHPMailer.php',
         'line' => 2150,
         'trace' => 
        array (
          0 => 
          array (
            'file' => 'C:\\xampp\\htdocs\\easy\\vendor\\phpmailer\\phpmailer\\src\\PHPMailer.php',
            'line' => 1857,
            'function' => 'mailSend',
            'class' => 'PHPMailer\\PHPMailer\\PHPMailer',
            'type' => '->',
            'args' => 
            array (
              0 => 'Date: Thu, 23 Jul 2026 10:54:53 +0200
From: Company Name <info@example.org>
Reply-To: info@example.org
Message-ID: <HWvI5Cdql0sHHCfLXGNZDCedfxyzDIFgTxEudzT0hk@localhost>
X-Mailer: PHPMailer 7.1.1 (https://github.com/PHPMailer/PHPMailer)
MIME-Version: 1.0
Content-Type: multipart/mixed;
 boundary="b1=_HWvI5Cdql0sHHCfLXGNZDCedfxyzDIFgTxEudzT0hk"
Content-Transfer-Encoding: 8bit

',
              1 => '--b1=_HWvI5Cdql0sHHCfLXGNZDCedfxyzDIFgTxEudzT0hk
Content-Type: multipart/alternative;
 boundary="b2=_HWvI5Cdql0sHHCfLXGNZDCedfxyzDIFgTxEudzT0hk"

--b2=_HWvI5Cdql0sHHCfLXGNZDCedfxyzDIFgTxEudzT0hk
Content-Type: text/plain; charset=us-ascii

    
    
    
        Appointment Details | Easy!Appointments
    
    
        /* -------------------------------------
            GLOBAL RESETS
        ------------------------------------- */        /*All the styling goes here*/        img {
            border: none;
            -ms-interpolation-mode: bicubic;
            max-width: 100%;
        }        body {
            background-color: #f6f6f6;
            font-family: sans-serif;
            -webkit-font-smoothing: antialiased;
            font-size: 14px;
            line-height: 1.4;
            margin: 0;
            padding: 0;
            -ms-text-size-adjust: 100%;
            -webkit-text-size-adjust: 100%;
        }        table {
            border-collapse: separate;
            mso-table-lspace: 0pt;
            mso-table-rspace: 0pt;
            width: 100%;
        }        table td {
            font-family: sans-serif;
            font-size: 14px;
            vertical-align: top;
        }        /* -------------------------------------
            BODY & CONTAINER
        ------------------------------------- */        .body {
            background-color: #f6f6f6;
            width: 100%;
        }        /* Set a max-width, and make it display as block so it will automatically stretch to that width, but will also shrink down on a phone or something */
        .container {
            display: block;
            margin: 0 auto !important;
            /* makes it centered */
            max-width: 580px;
            padding: 10px;
            width: 580px;
        }        /* This should also be a block element, so that it will fill 100% of the .container */
        .content {
            box-sizing: border-box;
            display: block;
            margin: 0 auto;
            max-width: 580px;
            padding: 10px;
        }        /* -------------------------------------
            HEADER, FOOTER, MAIN
        ------------------------------------- */
        .main {
            background: #ffffff;
            border-radius: 3px;
            width: 100%;
        }        .wrapper {
            box-sizing: border-box;
            padding: 20px;
        }        .content-block {
            padding-bottom: 10px;
            padding-top: 10px;
        }        .footer {
            clear: both;
            margin-top: 10px;
            text-align: center;
            width: 100%;
        }        .footer td,
        .footer p,
        .footer span,
        .footer a {
            color: #999999;
            font-size: 12px;
            text-align: center;
        }        /* -------------------------------------
            TYPOGRAPHY
        ------------------------------------- */
        h1,
        h2,
        h3,
        h4 {
            color: #000000;
            font-family: sans-serif;
            font-weight: 400;
            line-height: 1.4;
            margin: 0;
            margin-bottom: 15px;
        }        h1 {
            font-size: 24px;
            font-weight: 300;
            text-align: center;
            margin-bottom: 40px;
        }        .label {
            width: 120px;
        }        .details-table {
            margin: 0 0 0 auto;
            width: 85%;
        }        p,
        ul,
        ol {
            font-family: sans-serif;
            font-size: 14px;
            font-weight: normal;
            margin: 0;
            margin-bottom: 15px;
        }        p li,
        ul li,
        ol li {
            list-style-position: inside;
            margin-left: 5px;
        }        a {
            color: #429A82;
            text-decoration: underline;
        }        /* -------------------------------------
            BUTTONS
        ------------------------------------- */
        .btn {
            box-sizing: border-box;
            width: 100%;
        }        .btn > tbody > tr > td {
            padding-bottom: 15px;
        }        .btn table {
            width: auto;
        }        .btn table td {
            background-color: #ffffff;
            border-radius: 5px;
            text-align: center;
        }        .btn a {
            background-color: #ffffff;
            border: solid 1px #429A82;
            border-radius: 5px;
            box-sizing: border-box;
            color: #429A82;
            cursor: pointer;
            display: inline-block;
            font-size: 14px;
            font-weight: bold;
            margin: 0;
            padding: 12px 25px;
            text-decoration: none;
        }        .btn-primary table td {
            background-color: #429A82;
        }        .btn-primary a {
            background-color: #429A82;
            border-color: #429A82;
            color: #ffffff;
        }        /* -------------------------------------
            OTHER STYLES THAT MIGHT BE USEFUL
        ------------------------------------- */
        .last {
            margin-bottom: 0;
        }        .first {
            margin-top: 0;
        }        .align-center {
            text-align: center;
        }        .align-right {
            text-align: right;
        }        .align-left {
            text-align: left;
        }        .clear {
            clear: both;
        }        .mt0 {
            margin-top: 0;
        }        .mb0 {
            margin-bottom: 0;
        }        .preheader {
            color: transparent;
            display: none;
            height: 0;
            max-height: 0;
            max-width: 0;
            opacity: 0;
            overflow: hidden;
            mso-hide: all;
            visibility: hidden;
            width: 0;
        }        .powered-by a {
            text-decoration: none;
        }        hr {
            border: 0;
            border-bottom: 1px solid #f6f6f6;
            margin: 20px 0;
        }        /* -------------------------------------
            RESPONSIVE AND MOBILE FRIENDLY STYLES
        ------------------------------------- */
        @media only screen and (max-width: 620px) {
            table.body h1 {
                font-size: 28px !important;
                margin-bottom: 10px !important;
            }            table.body p,
            table.body ul,
            table.body ol,
            table.body td,
            table.body span,
            table.body a {
                font-size: 16px !important;
            }            table.body .wrapper,
            table.body .article {
                padding: 10px !important;
            }            table.body .content {
                padding: 0 !important;
            }            table.body .container {
                padding: 0 !important;
                width: 100% !important;
            }            table.body .main {
                border-left-width: 0 !important;
                border-radius: 0 !important;
                border-right-width: 0 !important;
            }            table.body .btn table {
                width: 100% !important;
            }            table.body .btn a {
                width: 100% !important;
            }            table.body .img-responsive {
                height: auto !important;
                max-width: 100% !important;
                width: auto !important;
            }
        }        /* -------------------------------------
            PRESERVE THESE STYLES IN THE HEAD
        ------------------------------------- */
        @media all {
            .ExternalClass {
                width: 100%;
            }            .ExternalClass,
            .ExternalClass p,
            .ExternalClass span,
            .ExternalClass font,
            .ExternalClass td,
            .ExternalClass div {
                line-height: 100%;
            }            .apple-link a {
                color: inherit !important;
                font-family: inherit !important;
                font-size: inherit !important;
                font-weight: inherit !important;
                line-height: inherit !important;
                text-decoration: none !important;
            }            #MessageViewBody a {
                color: inherit;
                text-decoration: none;
                font-size: inherit;
                font-family: inherit;
                font-weight: inherit;
                line-height: inherit;
            }            .btn-primary table td:hover {
                background-color: #34495e !important;
            }            .btn-primary a:hover {
                background-color: #34495e !important;
                border-color: #34495e !important;
            }
        }        
        &nbsp;
        
                            
                                    
                    
                        
                            
                                
                                                                            
                                                                                
                                            A new appointment has been added to your plan.                                                                                
                                            You can make changes by clicking the appointment link below.                                                                                
                                            Appointment Details                                                                                
                                            
                                                
                                                    Service                                                
                                                
                                                    hair cutting                                                
                                            
                                            
                                                
                                                    Provider                                                
                                                
                                                    vivek kumar                                                
                                            
                                            
                                                
                                                    Start                                                
                                                
                                                    24/07/2026 9:15 am                                                
                                            
                                            
                                                
                                                    End                                                
                                                
                                                    24/07/2026 9:45 am
                                                
                                            
                                            
                                                
                                                    Timezone                                                
                                                
                                                    Berlin (+1:00)                                                
                                                                                                                                        
                                                    
                                                        Status                                                    
                                                    
                                                        Booked                                                    
                                                
                                            
                                                                                        
                                                
                                                    Description                                                
                                                
                                                    bfjkebfkerfbj,erbjk                                                
                                            
                                            
                                                                                            
                                                    
                                                        Location                                                    
                                                    
                                                                                                                    noida sec 63                                                                                                            
                                                
                                            
                                            
                                                                                            
                                                    
                                                        Notes                                                    
                                                    
                                                        eghfvegfvw                                                    
                                                
                                                                                                                                                                    
                                            Customer Details                                                                                
                                                                                            
                                                    
                                                        Name                                                    
                                                    
                                                        anshul raj                                                    
                                                
                                            
                                                                                            
                                                    
                                                        Email                                                    
                                                    
                                                        raj973anshul@gmail.com                                                    
                                                
                                            
                                                                                            
                                                    
                                                        Phone Number                                                    
                                                    
                                                        9319163194                                                    
                                                
                                            
                                            
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                        
                                                                                
                                            
                                                
                                                    
                                                        
                                                            
                                                                
                                                                    
                                                                        Reschedule / Cancel Appointment
                                                                    
                                                                
                                                            
                                                        
                                                    
                                                
                                            
                                        
                                        
                                        
                                    
                                
                            
                        
                    
                    
                    
                
                
                                
                
                    
                        
                            
                                Powered by
                                
                                    Easy!Appointments
                                
                                |
                                
                                    Company Name                                
                            
                        
                    
                
                            
        
        &nbsp;
    

--b2=_HWvI5Cdql0sHHCfLXGNZDCedfxyzDIFgTxEudzT0hk
Content-Type: multipart/related;
 boundary="b3=_HWvI5Cdql0sHHCfLXGNZDCedfxyzDIFgTxEudzT0hk";
 type="text/html"

--b3=_HWvI5Cdql0sHHCfLXGNZDCedfxyzDIFgTxEudzT0hk
Content-Type: text/html; charset=us-ascii


<!doctype html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <title>
        Appointment Details | Easy!Appointments
    </title>
    <style>
        /* -------------------------------------
            GLOBAL RESETS
        ------------------------------------- */

        /*All the styling goes here*/

        img {
            border: none;
            -ms-interpolation-mode: bicubic;
            max-width: 100%;
        }

        body {
            background-color: #f6f6f6;
            font-family: sans-serif;
            -webkit-font-smoothing: antialiased;
            font-size: 14px;
            line-height: 1.4;
            margin: 0;
            padding: 0;
            -ms-text-size-adjust: 100%;
            -webkit-text-size-adjust: 100%;
        }

        table {
            border-collapse: separate;
            mso-table-lspace: 0pt;
            mso-table-rspace: 0pt;
            width: 100%;
        }

        table td {
            font-family: sans-serif;
            font-size: 14px;
            vertical-align: top;
        }

        /* -------------------------------------
            BODY & CONTAINER
        ------------------------------------- */

        .body {
            background-color: #f6f6f6;
            width: 100%;
        }

        /* Set a max-width, and make it display as block so it will automatically stretch to that width, but will also shrink down on a phone or something */
        .container {
            display: block;
            margin: 0 auto !important;
            /* makes it centered */
            max-width: 580px;
            padding: 10px;
            width: 580px;
        }

        /* This should also be a block element, so that it will fill 100% of the .container */
        .content {
            box-sizing: border-box;
            display: block;
            margin: 0 auto;
            max-width: 580px;
            padding: 10px;
        }

        /* -------------------------------------
            HEADER, FOOTER, MAIN
        ------------------------------------- */
        .main {
            background: #ffffff;
            border-radius: 3px;
            width: 100%;
        }

        .wrapper {
            box-sizing: border-box;
            padding: 20px;
        }

        .content-block {
            padding-bottom: 10px;
            padding-top: 10px;
        }

        .footer {
            clear: both;
            margin-top: 10px;
            text-align: center;
            width: 100%;
        }

        .footer td,
        .footer p,
        .footer span,
        .footer a {
            color: #999999;
            font-size: 12px;
            text-align: center;
        }

        /* -------------------------------------
            TYPOGRAPHY
        ------------------------------------- */
        h1,
        h2,
        h3,
        h4 {
            color: #000000;
            font-family: sans-serif;
            font-weight: 400;
            line-height: 1.4;
            margin: 0;
            margin-bottom: 15px;
        }

        h1 {
            font-size: 24px;
            font-weight: 300;
            text-align: center;
            margin-bottom: 40px;
        }

        .label {
            width: 120px;
        }

        .details-table {
            margin: 0 0 0 auto;
            width: 85%;
        }

        p,
        ul,
        ol {
            font-family: sans-serif;
            font-size: 14px;
            font-weight: normal;
            margin: 0;
            margin-bottom: 15px;
        }

        p li,
        ul li,
        ol li {
            list-style-position: inside;
            margin-left: 5px;
        }

        a {
            color: #429A82;
            text-decoration: underline;
        }

        /* -------------------------------------
            BUTTONS
        ------------------------------------- */
        .btn {
            box-sizing: border-box;
            width: 100%;
        }

        .btn > tbody > tr > td {
            padding-bottom: 15px;
        }

        .btn table {
            width: auto;
        }

        .btn table td {
            background-color: #ffffff;
            border-radius: 5px;
            text-align: center;
        }

        .btn a {
            background-color: #ffffff;
            border: solid 1px #429A82;
            border-radius: 5px;
            box-sizing: border-box;
            color: #429A82;
            cursor: pointer;
            display: inline-block;
            font-size: 14px;
            font-weight: bold;
            margin: 0;
            padding: 12px 25px;
            text-decoration: none;
        }

        .btn-primary table td {
            background-color: #429A82;
        }

        .btn-primary a {
            background-color: #429A82;
            border-color: #429A82;
            color: #ffffff;
        }

        /* -------------------------------------
            OTHER STYLES THAT MIGHT BE USEFUL
        ------------------------------------- */
        .last {
            margin-bottom: 0;
        }

        .first {
            margin-top: 0;
        }

        .align-center {
            text-align: center;
        }

        .align-right {
            text-align: right;
        }

        .align-left {
            text-align: left;
        }

        .clear {
            clear: both;
        }

        .mt0 {
            margin-top: 0;
        }

        .mb0 {
            margin-bottom: 0;
        }

        .preheader {
            color: transparent;
            display: none;
            height: 0;
            max-height: 0;
            max-width: 0;
            opacity: 0;
            overflow: hidden;
            mso-hide: all;
            visibility: hidden;
            width: 0;
        }

        .powered-by a {
            text-decoration: none;
        }

        hr {
            border: 0;
            border-bottom: 1px solid #f6f6f6;
            margin: 20px 0;
        }

        /* -------------------------------------
            RESPONSIVE AND MOBILE FRIENDLY STYLES
        ------------------------------------- */
        @media only screen and (max-width: 620px) {
            table.body h1 {
                font-size: 28px !important;
                margin-bottom: 10px !important;
            }

            table.body p,
            table.body ul,
            table.body ol,
            table.body td,
            table.body span,
            table.body a {
                font-size: 16px !important;
            }

            table.body .wrapper,
            table.body .article {
                padding: 10px !important;
            }

            table.body .content {
                padding: 0 !important;
            }

            table.body .container {
                padding: 0 !important;
                width: 100% !important;
            }

            table.body .main {
                border-left-width: 0 !important;
                border-radius: 0 !important;
                border-right-width: 0 !important;
            }

            table.body .btn table {
                width: 100% !important;
            }

            table.body .btn a {
                width: 100% !important;
            }

            table.body .img-responsive {
                height: auto !important;
                max-width: 100% !important;
                width: auto !important;
            }
        }

        /* -------------------------------------
            PRESERVE THESE STYLES IN THE HEAD
        ------------------------------------- */
        @media all {
            .ExternalClass {
                width: 100%;
            }

            .ExternalClass,
            .ExternalClass p,
            .ExternalClass span,
            .ExternalClass font,
            .ExternalClass td,
            .ExternalClass div {
                line-height: 100%;
            }

            .apple-link a {
                color: inherit !important;
                font-family: inherit !important;
                font-size: inherit !important;
                font-weight: inherit !important;
                line-height: inherit !important;
                text-decoration: none !important;
            }

            #MessageViewBody a {
                color: inherit;
                text-decoration: none;
                font-size: inherit;
                font-family: inherit;
                font-weight: inherit;
                line-height: inherit;
            }

            .btn-primary table td:hover {
                background-color: #34495e !important;
            }

            .btn-primary a:hover {
                background-color: #34495e !important;
                border-color: #34495e !important;
            }
        }

    </style>
</head>
<body>
<table role="presentation" border="0" cellpadding="0" cellspacing="0" class="body">
    <tr>
        <td>&nbsp;</td>
        <td class="container">
            <div class="content">

                <!-- START CENTERED WHITE CONTAINER -->
                <table role="presentation" class="main">

                    <!-- START MAIN CONTENT AREA -->
                    <tr>
                        <td class="wrapper">
                            <table role="presentation" border="0" cellpadding="0" cellspacing="0">
                                <tr>
                                    <td>

                                        <!-- Logo at the top center, embedded as CID -->
                                        <img src="cid:logo.png" alt="Logo" style="display:block;max-width:67px; margin: auto auto 24px;">

                                        <h1 style="text-align: center;">
                                            A new appointment has been added to your plan.                                        </h1>

                                        <p style="text-align: center;">
                                            You can make changes by clicking the appointment link below.                                        </p>

                                        <h2 style="text-align: center;">
                                            Appointment Details                                        </h2>

                                        <table id="appointment-details" class="details-table" align="center">
                                            <tr>
                                                <td class="label" style="padding: 3px;font-weight: bold;">
                                                    Service                                                </td>
                                                <td style="padding: 3px;">
                                                    hair cutting                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="label" style="padding: 3px;font-weight: bold;">
                                                    Provider                                                </td>
                                                <td style="padding: 3px;">
                                                    vivek kumar                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="label" style="padding: 3px;font-weight: bold;">
                                                    Start                                                </td>
                                                <td style="padding: 3px;">
                                                    24/07/2026 9:15 am                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="label" style="padding: 3px;font-weight: bold;">
                                                    End                                                </td>
                                                <td style="padding: 3px;">
                                                    24/07/2026 9:45 am
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="label" style="padding: 3px;font-weight: bold;">
                                                    Timezone                                                </td>
                                                <td style="padding: 3px;">
                                                    Berlin (+1:00)                                                </td>
                                            </tr>

                                                                                            <tr>
                                                    <td class="label" style="padding: 3px;font-weight: bold;">
                                                        Status                                                    </td>
                                                    <td style="padding: 3px;">
                                                        Booked                                                    </td>
                                                </tr>
                                            
                                                                                        <tr>
                                                <td class="label" style="padding: 3px;font-weight: bold;">
                                                    Description                                                </td>
                                                <td style="padding: 3px;">
                                                    bfjkebfkerfbj,erbjk                                                </td>
                                            </tr>
                                            
                                                                                            <tr>
                                                    <td class="label" style="padding: 3px;font-weight: bold;">
                                                        Location                                                    </td>
                                                    <td style="padding: 3px;">
                                                                                                                    noida sec 63                                                                                                            </td>
                                                </tr>
                                            
                                            
                                                                                            <tr>
                                                    <td class="label" style="padding: 3px;font-weight: bold;">
                                                        Notes                                                    </td>
                                                    <td style="padding: 3px;">
                                                        eghfvegfvw                                                    </td>
                                                </tr>
                                                                                    </table>

                                        <br>

                                        <h2 style="text-align: center;">
                                            Customer Details                                        </h2>

                                        <table id="customer-details" class="details-table" align="center">
                                                                                            <tr>
                                                    <td class="label" style="padding: 3px;font-weight: bold;">
                                                        Name                                                    </td>
                                                    <td style="padding: 3px;">
                                                        anshul raj                                                    </td>
                                                </tr>
                                            
                                                                                            <tr>
                                                    <td class="label" style="padding: 3px;font-weight: bold;">
                                                        Email                                                    </td>
                                                    <td style="padding: 3px;">
                                                        raj973anshul@gmail.com                                                    </td>
                                                </tr>
                                            
                                                                                            <tr>
                                                    <td class="label" style="padding: 3px;font-weight: bold;">
                                                        Phone Number                                                    </td>
                                                    <td style="padding: 3px;">
                                                        9319163194                                                    </td>
                                                </tr>
                                            
                                            
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                </table>

                                        <br>
                                        <br>

                                        <table class="btn btn-primary" role="presentation" border="0" cellpadding="0" cellspacing="0">
                                            <tbody>
                                                <tr>
                                                    <td align="center">
                                                        <table role="presentation" border="0" cellpadding="0" cellspacing="0">
                                                            <tbody>
                                                                <tr>
                                                                    <td>
                                                                        <a href="http://localhost/easy/index.php/calendar/reschedule/U3jOlCBIi1TS" target="_blank">Reschedule / Cancel Appointment</a>
                                                                    </td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                        
                                        
                                    </td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                    
                    <!-- END MAIN CONTENT AREA -->
                </table>
                
                <!-- END CENTERED WHITE CONTAINER -->

                <!-- START FOOTER -->
                <div class="footer">
                    <table role="presentation" border="0" cellpadding="0" cellspacing="0">
                        <tr>
                            <td class="content-block powered-by">
                                Powered by
                                <a href="https://easyappointments.org" style="text-decoration: none;">
                                    Easy!Appointments
                                </a>
                                |
                                <a href="https://example.org" style="text-decoration: none;">
                                    Company Name                                </a>
                            </td>
                        </tr>
                    </table>
                </div>
                <!-- END FOOTER -->

            </div>
        </td>
        <td>&nbsp;</td>
    </tr>
</table>
</body>
</html>

--b3=_HWvI5Cdql0sHHCfLXGNZDCedfxyzDIFgTxEudzT0hk
Content-Type: image/png; name=logo.png
Content-Transfer-Encoding: base64
Content-ID: <logo.png>
Content-Disposition: inline; filename=logo.png

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
TkSuQmCC

--b3=_HWvI5Cdql0sHHCfLXGNZDCedfxyzDIFgTxEudzT0hk--


--b2=_HWvI5Cdql0sHHCfLXGNZDCedfxyzDIFgTxEudzT0hk--

--b1=_HWvI5Cdql0sHHCfLXGNZDCedfxyzDIFgTxEudzT0hk
Content-Type: text/calendar; name=invitation.ics
Content-Transfer-Encoding: base64
Content-Disposition: attachment; filename=invitation.ics

QkVHSU46VkNBTEVOREFSDQpWRVJTSU9OOjIuMA0KUFJPRElEOi0vL0Vhc3lBcHBvaW50bWVudHMv
L09wZW4gU291cmNlIFdlYiBTY2hlZHVsZXIvL0VODQpDQUxTQ0FMRTpHUkVHT1JJQU4NCk1FVEhP
RDpSRVFVRVNUDQpCRUdJTjpWVElNRVpPTkUNClRaSUQ6RXVyb3BlL0Jlcmxpbg0KQkVHSU46U1RB
TkRBUkQNCkRUU1RBUlQ6MjAyNjEwMjVUMDEwMDAwWg0KVFpPRkZTRVRUTzorMDEwMA0KVFpPRkZT
RVRGUk9NOiswMjAwDQpSUlVMRTpGUkVRPVlFQVJMWTtCWU1PTlRIPTExO0JZREFZPTFTVQ0KRU5E
OlNUQU5EQVJEDQpCRUdJTjpEQVlMSUdIVA0KRFRTVEFSVDoyMDI2MDMyOVQwMTAwMDBaDQpUWk9G
RlNFVFRPOiswMjAwDQpUWk9GRlNFVEZST006KzAxMDANClJSVUxFOkZSRVE9WUVBUkxZO0JZTU9O
VEg9MztCWURBWT0yU1UNCkVORDpEQVlMSUdIVA0KRU5EOlZUSU1FWk9ORQ0KQkVHSU46VkVWRU5U
DQpVSUQ6ZWEtYzgxZTcyOGQ5ZDRjMmY2MzZmMDY3Zjg5Y2MxNDg2MmMNCkRUU1RBUlQ6MjAyNjA3
MjRUMDcxNTAwWg0KRFRFTkQ6MjAyNjA3MjRUMDc0NTAwWg0KU0VRVUVOQ0U6MTc4NDc5Njg5MA0K
U1RBVFVTOkNPTkZJUk1FRA0KU1VNTUFSWTpoYWlyIGN1dHRpbmcNCkRFU0NSSVBUSU9OOlxuUHJv
dmlkZXJcblxuTmFtZTogdml2ZWsga3VtYXJcbkVtYWlsOiByYWo5NzNhbnNodWxAZ21haWwNCiAu
Y29tXG5QaG9uZSBOdW1iZXI6IFxuQWRkcmVzczogXG5DaXR5OiBcblppcCBDb2RlOiBcblxuQ3Vz
dG9tZXJcblxuTmFtDQogZTogYW5zaHVsIHJhalxuRW1haWw6IHJhajk3M2Fuc2h1bEBnbWFpbC5j
b21cblBob25lIE51bWJlcjogOTMxOTE2MzE5NA0KIFxuQWRkcmVzczogXG5DaXR5OiBcblppcCBD
b2RlOiBcblxuTm90ZXNcblxuZWdoZnZlZ2Z2dw0KTE9DQVRJT046bm9pZGEgc2VjIDYzDQpEVFNU
QU1QOjIwMjYwNzIzVDA4NTQ1MVoNCkFUVEVOREVFO0NVVFlQRT1JTkRJVklEVUFMO1JPTEU9UkVR
LVBBUlRJQ0lQQU5UO1BBUlRTVEFUPU5FRURTLUFDVElPTjsNCiBSU1ZQPVRSVUU7Q049YW5zaHVs
IHJhajptYWlsdG86cmFqOTczYW5zaHVsQGdtYWlsLmNvbQ0KQVRURU5ERUU7Q1VUWVBFPUlORElW
SURVQUw7Uk9MRT1SRVEtUEFSVElDSVBBTlQ7UEFSVFNUQVQ9QUNDRVBURUQ7UlNWUA0KID1GQUxT
RTtDTj12aXZlayBrdW1hcjptYWlsdG86cmFqOTczYW5zaHVsQGdtYWlsLmNvbQ0KT1JHQU5JWkVS
O0NOPXZpdmVrIGt1bWFyOm1haWx0bzpyYWo5NzNhbnNodWxAZ21haWwuY29tDQpCRUdJTjpWQUxB
Uk0NClRSSUdHRVI7VkFMVUU9REFURS1USU1FOjIwMjYwNzI0VDA3MDAwMFoNCkFDVElPTjpFTUFJ
TA0KU1VNTUFSWTpBbGFybSBub3RpZmljYXRpb24NCkRFU0NSSVBUSU9OOlRoaXMgaXMgYW4gZXZl
bnQgcmVtaW5kZXINCkFUVEVOREVFO0NVVFlQRT1JTkRJVklEVUFMO1JPTEU9UkVRLVBBUlRJQ0lQ
QU5UO1BBUlRTVEFUPU5FRURTLUFDVElPTjsNCiBSU1ZQPVRSVUU7Q049YW5zaHVsIHJhajptYWls
dG86cmFqOTczYW5zaHVsQGdtYWlsLmNvbQ0KRU5EOlZBTEFSTQ0KQkVHSU46VkFMQVJNDQpUUklH
R0VSO1ZBTFVFPURBVEUtVElNRToyMDI2MDcyNFQwNjE1MDBaDQpBQ1RJT046RU1BSUwNClNVTU1B
Ulk6QWxhcm0gbm90aWZpY2F0aW9uDQpERVNDUklQVElPTjpUaGlzIGlzIGFuIGV2ZW50IHJlbWlu
ZGVyDQpBVFRFTkRFRTtDVVRZUEU9SU5ESVZJRFVBTDtST0xFPVJFUS1QQVJUSUNJUEFOVDtQQVJU
U1RBVD1ORUVEUy1BQ1RJT047DQogUlNWUD1UUlVFO0NOPWFuc2h1bCByYWo6bWFpbHRvOnJhajk3
M2Fuc2h1bEBnbWFpbC5jb20NCkVORDpWQUxBUk0NCkVORDpWRVZFTlQNCkVORDpWQ0FMRU5EQVIN
Cg==

--b1=_HWvI5Cdql0sHHCfLXGNZDCedfxyzDIFgTxEudzT0hk--
',
            ),
          ),
          1 => 
          array (
            'file' => 'C:\\xampp\\htdocs\\easy\\vendor\\phpmailer\\phpmailer\\src\\PHPMailer.php',
            'line' => 1670,
            'function' => 'postSend',
            'class' => 'PHPMailer\\PHPMailer\\PHPMailer',
            'type' => '->',
            'args' => 
            array (
            ),
          ),
          2 => 
          array (
            'file' => 'C:\\xampp\\htdocs\\easy\\application\\libraries\\Email_messages.php',
            'line' => 119,
            'function' => 'send',
            'class' => 'PHPMailer\\PHPMailer\\PHPMailer',
            'type' => '->',
            'args' => 
            array (
            ),
          ),
          3 => 
          array (
            'file' => 'C:\\xampp\\htdocs\\easy\\application\\libraries\\Notifications.php',
            'line' => 115,
            'function' => 'send_appointment_saved',
            'class' => 'Email_messages',
            'type' => '->',
            'args' => 
            array (
              0 => 
              array (
                'id' => 2,
                'create_datetime' => '2026-07-23 10:54:50',
                'update_datetime' => '2026-07-23 10:54:50',
                'book_datetime' => '2026-07-23 10:54:50',
                'start_datetime' => '2026-07-24 09:15:00',
                'end_datetime' => '2026-07-24 09:45:00',
                'location' => 'noida sec 63',
                'meeting_link' => NULL,
                'notes' => 'eghfvegfvw',
                'hash' => 'U3jOlCBIi1TS',
                'color' => '#7cbae8',
                'status' => 'Booked',
                'is_unavailability' => false,
                'id_users_provider' => 5,
                'id_users_customer' => 6,
                'id_services' => 2,
                'id_google_calendar' => NULL,
                'id_caldav_calendar' => NULL,
              ),
              1 => 
              array (
                'id' => 5,
                'create_datetime' => '2026-07-22 13:13:04',
                'update_datetime' => '2026-07-22 13:13:04',
                'first_name' => 'vivek',
                'last_name' => 'kumar',
                'email' => 'raj973anshul@gmail.com',
                'mobile_number' => NULL,
                'phone_number' => '',
                'address' => '',
                'city' => '',
                'state' => '',
                'zip_code' => '',
                'notes' => '',
                'timezone' => 'Europe/Berlin',
                'language' => 'english',
                'custom_field_1' => NULL,
                'custom_field_2' => NULL,
                'custom_field_3' => NULL,
                'custom_field_4' => NULL,
                'custom_field_5' => NULL,
                'is_private' => false,
                'ldap_dn' => NULL,
                'id_roles' => 2,
                'settings' => 
                array (
                  'username' => 'vivekkumar',
                  'password_reset_token' => NULL,
                  'password_reset_expires' => NULL,
                  'working_plan' => '{"sunday":{"start":"09:00","end":"18:00","breaks":[{"start":"14:30","end":"15:00"}]},"monday":{"start":"09:00","end":"18:00","breaks":[{"start":"14:30","end":"15:00"}]},"tuesday":{"start":"09:00","end":"18:00","breaks":[{"start":"14:30","end":"15:00"}]},"wednesday":{"start":"09:00","end":"18:00","breaks":[{"start":"14:30","end":"15:00"}]},"thursday":{"start":"09:00","end":"18:00","breaks":[{"start":"14:30","end":"15:00"}]},"friday":{"start":"09:00","end":"18:00","breaks":[{"start":"14:30","end":"15:00"}]},"saturday":{"start":"09:00","end":"18:00","breaks":[{"start":"14:30","end":"15:00"}]}}',
                  'working_plan_exceptions' => '[]',
                  'notifications' => '1',
                  'google_sync' => NULL,
                  'google_token' => NULL,
                  'google_calendar' => NULL,
                  'caldav_sync' => '0',
                  'caldav_url' => NULL,
                  'caldav_username' => NULL,
                  'caldav_password' => NULL,
                  'sync_past_days' => '30',
                  'sync_future_days' => '90',
                  'calendar_view' => 'table',
                ),
                'services' => 
                array (
                  0 => 1,
                  1 => 2,
                ),
              ),
              2 => 
              array (
                'id' => 2,
                'create_datetime' => '2026-07-23 10:51:48',
                'update_datetime' => '2026-07-23 10:51:48',
                'name' => 'hair cutting',
                'duration' => '30',
                'price' => 50.0,
                'currency' => '',
                'description' => 'bfjkebfkerfbj,erbjk',
                'slot_interval' => '15',
                'color' => '#7cbae8',
                'location' => 'noida sec 63',
                'attendants_number' => 1,
                'is_private' => false,
                'id_service_categories' => 1,
              ),
              3 => 
              array (
                'id' => 6,
                'create_datetime' => '2026-07-23 10:54:50',
                'update_datetime' => '2026-07-23 10:54:50',
                'first_name' => 'anshul',
                'last_name' => 'raj',
                'email' => 'raj973anshul@gmail.com',
                'mobile_number' => NULL,
                'phone_number' => '9319163194',
                'address' => '',
                'city' => '',
                'state' => NULL,
                'zip_code' => '',
                'notes' => NULL,
                'timezone' => 'Asia/Calcutta',
                'language' => 'english',
                'custom_field_1' => NULL,
                'custom_field_2' => NULL,
                'custom_field_3' => NULL,
                'custom_field_4' => NULL,
                'custom_field_5' => NULL,
                'is_private' => '0',
                'ldap_dn' => NULL,
                'id_roles' => 3,
              ),
              4 => 
              array (
                'company_name' => 'Company Name',
                'company_link' => 'https://example.org',
                'company_email' => 'info@example.org',
                'company_color' => NULL,
                'date_format' => 'DMY',
                'time_format' => 'regular',
              ),
              5 => 'A new appointment has been added to your plan.',
              6 => 'You can make changes by clicking the appointment link below.',
              7 => 'http://localhost/easy/index.php/calendar/reschedule/U3jOlCBIi1TS',
              8 => 'raj973anshul@gmail.com',
              9 => 'BEGIN:VCALENDAR
VERSION:2.0
PRODID:-//EasyAppointments//Open Source Web Scheduler//EN
CALSCALE:GREGORIAN
METHOD:REQUEST
BEGIN:VTIMEZONE
TZID:Europe/Berlin
BEGIN:STANDARD
DTSTART:20261025T010000Z
TZOFFSETTO:+0100
TZOFFSETFROM:+0200
RRULE:FREQ=YEARLY;BYMONTH=11;BYDAY=1SU
END:STANDARD
BEGIN:DAYLIGHT
DTSTART:20260329T010000Z
TZOFFSETTO:+0200
TZOFFSETFROM:+0100
RRULE:FREQ=YEARLY;BYMONTH=3;BYDAY=2SU
END:DAYLIGHT
END:VTIMEZONE
BEGIN:VEVENT
UID:ea-c81e728d9d4c2f636f067f89cc14862c
DTSTART:20260724T071500Z
DTEND:20260724T074500Z
SEQUENCE:1784796890
STATUS:CONFIRMED
SUMMARY:hair cutting
DESCRIPTION:\\nProvider\\n\\nName: vivek kumar\\nEmail: raj973anshul@gmail
 .com\\nPhone Number: \\nAddress: \\nCity: \\nZip Code: \\n\\nCustomer\\n\\nNam
 e: anshul raj\\nEmail: raj973anshul@gmail.com\\nPhone Number: 9319163194
 \\nAddress: \\nCity: \\nZip Code: \\n\\nNotes\\n\\neghfvegfvw
LOCATION:noida sec 63
DTSTAMP:20260723T085451Z
ATTENDEE;CUTYPE=INDIVIDUAL;ROLE=REQ-PARTICIPANT;PARTSTAT=NEEDS-ACTION;
 RSVP=TRUE;CN=anshul raj:mailto:raj973anshul@gmail.com
ATTENDEE;CUTYPE=INDIVIDUAL;ROLE=REQ-PARTICIPANT;PARTSTAT=ACCEPTED;RSVP
 =FALSE;CN=vivek kumar:mailto:raj973anshul@gmail.com
ORGANIZER;CN=vivek kumar:mailto:raj973anshul@gmail.com
BEGIN:VALARM
TRIGGER;VALUE=DATE-TIME:20260724T070000Z
ACTION:EMAIL
SUMMARY:Alarm notification
DESCRIPTION:This is an event reminder
ATTENDEE;CUTYPE=INDIVIDUAL;ROLE=REQ-PARTICIPANT;PARTSTAT=NEEDS-ACTION;
 RSVP=TRUE;CN=anshul raj:mailto:raj973anshul@gmail.com
END:VALARM
BEGIN:VALARM
TRIGGER;VALUE=DATE-TIME:20260724T061500Z
ACTION:EMAIL
SUMMARY:Alarm notification
DESCRIPTION:This is an event reminder
ATTENDEE;CUTYPE=INDIVIDUAL;ROLE=REQ-PARTICIPANT;PARTSTAT=NEEDS-ACTION;
 RSVP=TRUE;CN=anshul raj:mailto:raj973anshul@gmail.com
END:VALARM
END:VEVENT
END:VCALENDAR
',
              10 => 'Europe/Berlin',
            ),
          ),
          4 => 
          array (
            'file' => 'C:\\xampp\\htdocs\\easy\\application\\controllers\\Booking.php',
            'line' => 567,
            'function' => 'notify_appointment_saved',
            'class' => 'Notifications',
            'type' => '->',
            'args' => 
            array (
              0 => 
              array (
                'id' => 2,
                'create_datetime' => '2026-07-23 10:54:50',
                'update_datetime' => '2026-07-23 10:54:50',
                'book_datetime' => '2026-07-23 10:54:50',
                'start_datetime' => '2026-07-24 09:15:00',
                'end_datetime' => '2026-07-24 09:45:00',
                'location' => 'noida sec 63',
                'meeting_link' => NULL,
                'notes' => 'eghfvegfvw',
                'hash' => 'U3jOlCBIi1TS',
                'color' => '#7cbae8',
                'status' => 'Booked',
                'is_unavailability' => false,
                'id_users_provider' => 5,
                'id_users_customer' => 6,
                'id_services' => 2,
                'id_google_calendar' => NULL,
                'id_caldav_calendar' => NULL,
              ),
              1 => 
              array (
                'id' => 2,
                'create_datetime' => '2026-07-23 10:51:48',
                'update_datetime' => '2026-07-23 10:51:48',
                'name' => 'hair cutting',
                'duration' => '30',
                'price' => 50.0,
                'currency' => '',
                'description' => 'bfjkebfkerfbj,erbjk',
                'slot_interval' => '15',
                'color' => '#7cbae8',
                'location' => 'noida sec 63',
                'attendants_number' => 1,
                'is_private' => false,
                'id_service_categories' => 1,
              ),
              2 => 
              array (
                'id' => 5,
                'create_datetime' => '2026-07-22 13:13:04',
                'update_datetime' => '2026-07-22 13:13:04',
                'first_name' => 'vivek',
                'last_name' => 'kumar',
                'email' => 'raj973anshul@gmail.com',
                'mobile_number' => NULL,
                'phone_number' => '',
                'address' => '',
                'city' => '',
                'state' => '',
                'zip_code' => '',
                'notes' => '',
                'timezone' => 'Europe/Berlin',
                'language' => 'english',
                'custom_field_1' => NULL,
                'custom_field_2' => NULL,
                'custom_field_3' => NULL,
                'custom_field_4' => NULL,
                'custom_field_5' => NULL,
                'is_private' => false,
                'ldap_dn' => NULL,
                'id_roles' => 2,
                'settings' => 
                array (
                  'username' => 'vivekkumar',
                  'password_reset_token' => NULL,
                  'password_reset_expires' => NULL,
                  'working_plan' => '{"sunday":{"start":"09:00","end":"18:00","breaks":[{"start":"14:30","end":"15:00"}]},"monday":{"start":"09:00","end":"18:00","breaks":[{"start":"14:30","end":"15:00"}]},"tuesday":{"start":"09:00","end":"18:00","breaks":[{"start":"14:30","end":"15:00"}]},"wednesday":{"start":"09:00","end":"18:00","breaks":[{"start":"14:30","end":"15:00"}]},"thursday":{"start":"09:00","end":"18:00","breaks":[{"start":"14:30","end":"15:00"}]},"friday":{"start":"09:00","end":"18:00","breaks":[{"start":"14:30","end":"15:00"}]},"saturday":{"start":"09:00","end":"18:00","breaks":[{"start":"14:30","end":"15:00"}]}}',
                  'working_plan_exceptions' => '[]',
                  'notifications' => '1',
                  'google_sync' => NULL,
                  'google_token' => NULL,
                  'google_calendar' => NULL,
                  'caldav_sync' => '0',
                  'caldav_url' => NULL,
                  'caldav_username' => NULL,
                  'caldav_password' => NULL,
                  'sync_past_days' => '30',
                  'sync_future_days' => '90',
                  'calendar_view' => 'table',
                ),
                'services' => 
                array (
                  0 => 1,
                  1 => 2,
                ),
              ),
              3 => 
              array (
                'id' => 6,
                'create_datetime' => '2026-07-23 10:54:50',
                'update_datetime' => '2026-07-23 10:54:50',
                'first_name' => 'anshul',
                'last_name' => 'raj',
                'email' => 'raj973anshul@gmail.com',
                'mobile_number' => NULL,
                'phone_number' => '9319163194',
                'address' => '',
                'city' => '',
                'state' => NULL,
                'zip_code' => '',
                'notes' => NULL,
                'timezone' => 'Asia/Calcutta',
                'language' => 'english',
                'custom_field_1' => NULL,
                'custom_field_2' => NULL,
                'custom_field_3' => NULL,
                'custom_field_4' => NULL,
                'custom_field_5' => NULL,
                'is_private' => '0',
                'ldap_dn' => NULL,
                'id_roles' => 3,
              ),
              4 => 
              array (
                'company_name' => 'Company Name',
                'company_link' => 'https://example.org',
                'company_email' => 'info@example.org',
                'company_color' => NULL,
                'date_format' => 'DMY',
                'time_format' => 'regular',
              ),
              5 => false,
            ),
          ),
          5 => 
          array (
            'file' => 'C:\\xampp\\htdocs\\easy\\system\\core\\CodeIgniter.php',
            'line' => 481,
            'function' => 'register',
            'class' => 'Booking',
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
      )),
      1 => 'appointment-saved to provider',
      2 => 2,
    ),
  ),
  2 => 
  array (
    'file' => 'C:\\xampp\\htdocs\\easy\\application\\controllers\\Booking.php',
    'line' => 567,
    'function' => 'notify_appointment_saved',
    'class' => 'Notifications',
    'type' => '->',
    'args' => 
    array (
      0 => 
      array (
        'id' => 2,
        'create_datetime' => '2026-07-23 10:54:50',
        'update_datetime' => '2026-07-23 10:54:50',
        'book_datetime' => '2026-07-23 10:54:50',
        'start_datetime' => '2026-07-24 09:15:00',
        'end_datetime' => '2026-07-24 09:45:00',
        'location' => 'noida sec 63',
        'meeting_link' => NULL,
        'notes' => 'eghfvegfvw',
        'hash' => 'U3jOlCBIi1TS',
        'color' => '#7cbae8',
        'status' => 'Booked',
        'is_unavailability' => false,
        'id_users_provider' => 5,
        'id_users_customer' => 6,
        'id_services' => 2,
        'id_google_calendar' => NULL,
        'id_caldav_calendar' => NULL,
      ),
      1 => 
      array (
        'id' => 2,
        'create_datetime' => '2026-07-23 10:51:48',
        'update_datetime' => '2026-07-23 10:51:48',
        'name' => 'hair cutting',
        'duration' => '30',
        'price' => 50.0,
        'currency' => '',
        'description' => 'bfjkebfkerfbj,erbjk',
        'slot_interval' => '15',
        'color' => '#7cbae8',
        'location' => 'noida sec 63',
        'attendants_number' => 1,
        'is_private' => false,
        'id_service_categories' => 1,
      ),
      2 => 
      array (
        'id' => 5,
        'create_datetime' => '2026-07-22 13:13:04',
        'update_datetime' => '2026-07-22 13:13:04',
        'first_name' => 'vivek',
        'last_name' => 'kumar',
        'email' => 'raj973anshul@gmail.com',
        'mobile_number' => NULL,
        'phone_number' => '',
        'address' => '',
        'city' => '',
        'state' => '',
        'zip_code' => '',
        'notes' => '',
        'timezone' => 'Europe/Berlin',
        'language' => 'english',
        'custom_field_1' => NULL,
        'custom_field_2' => NULL,
        'custom_field_3' => NULL,
        'custom_field_4' => NULL,
        'custom_field_5' => NULL,
        'is_private' => false,
        'ldap_dn' => NULL,
        'id_roles' => 2,
        'settings' => 
        array (
          'username' => 'vivekkumar',
          'password_reset_token' => NULL,
          'password_reset_expires' => NULL,
          'working_plan' => '{"sunday":{"start":"09:00","end":"18:00","breaks":[{"start":"14:30","end":"15:00"}]},"monday":{"start":"09:00","end":"18:00","breaks":[{"start":"14:30","end":"15:00"}]},"tuesday":{"start":"09:00","end":"18:00","breaks":[{"start":"14:30","end":"15:00"}]},"wednesday":{"start":"09:00","end":"18:00","breaks":[{"start":"14:30","end":"15:00"}]},"thursday":{"start":"09:00","end":"18:00","breaks":[{"start":"14:30","end":"15:00"}]},"friday":{"start":"09:00","end":"18:00","breaks":[{"start":"14:30","end":"15:00"}]},"saturday":{"start":"09:00","end":"18:00","breaks":[{"start":"14:30","end":"15:00"}]}}',
          'working_plan_exceptions' => '[]',
          'notifications' => '1',
          'google_sync' => NULL,
          'google_token' => NULL,
          'google_calendar' => NULL,
          'caldav_sync' => '0',
          'caldav_url' => NULL,
          'caldav_username' => NULL,
          'caldav_password' => NULL,
          'sync_past_days' => '30',
          'sync_future_days' => '90',
          'calendar_view' => 'table',
        ),
        'services' => 
        array (
          0 => 1,
          1 => 2,
        ),
      ),
      3 => 
      array (
        'id' => 6,
        'create_datetime' => '2026-07-23 10:54:50',
        'update_datetime' => '2026-07-23 10:54:50',
        'first_name' => 'anshul',
        'last_name' => 'raj',
        'email' => 'raj973anshul@gmail.com',
        'mobile_number' => NULL,
        'phone_number' => '9319163194',
        'address' => '',
        'city' => '',
        'state' => NULL,
        'zip_code' => '',
        'notes' => NULL,
        'timezone' => 'Asia/Calcutta',
        'language' => 'english',
        'custom_field_1' => NULL,
        'custom_field_2' => NULL,
        'custom_field_3' => NULL,
        'custom_field_4' => NULL,
        'custom_field_5' => NULL,
        'is_private' => '0',
        'ldap_dn' => NULL,
        'id_roles' => 3,
      ),
      4 => 
      array (
        'company_name' => 'Company Name',
        'company_link' => 'https://example.org',
        'company_email' => 'info@example.org',
        'company_color' => NULL,
        'date_format' => 'DMY',
        'time_format' => 'regular',
      ),
      5 => false,
    ),
  ),
)
ERROR - 2026-07-23 10:54:57 --> Notifications - Could not email appointment-saved to admin (2) : Could not instantiate mail function. Trace: array (
  0 => 
  array (
    'file' => 'C:\\xampp\\htdocs\\easy\\application\\libraries\\Notifications.php',
    'line' => 352,
    'function' => 'log_message',
    'args' => 
    array (
      0 => 'error',
      1 => 'Notifications - Could not email appointment-saved to admin (2) : Could not instantiate mail function.',
    ),
  ),
  1 => 
  array (
    'file' => 'C:\\xampp\\htdocs\\easy\\application\\libraries\\Notifications.php',
    'line' => 161,
    'function' => 'log_exception',
    'class' => 'Notifications',
    'type' => '->',
    'args' => 
    array (
      0 => 
      \PHPMailer\PHPMailer\Exception::__set_state(array(
         'message' => 'Could not instantiate mail function.',
         'string' => '',
         'code' => 2,
         'file' => 'C:\\xampp\\htdocs\\easy\\vendor\\phpmailer\\phpmailer\\src\\PHPMailer.php',
         'line' => 2150,
         'trace' => 
        array (
          0 => 
          array (
            'file' => 'C:\\xampp\\htdocs\\easy\\vendor\\phpmailer\\phpmailer\\src\\PHPMailer.php',
            'line' => 1857,
            'function' => 'mailSend',
            'class' => 'PHPMailer\\PHPMailer\\PHPMailer',
            'type' => '->',
            'args' => 
            array (
              0 => 'Date: Thu, 23 Jul 2026 10:54:55 +0200
From: Company Name <info@example.org>
Reply-To: info@example.org
Message-ID: <Cqi7UeCXWtqfZf7IqIMnCMIFDitdTST3lN0WgQ8KhOg@localhost>
X-Mailer: PHPMailer 7.1.1 (https://github.com/PHPMailer/PHPMailer)
MIME-Version: 1.0
Content-Type: multipart/mixed;
 boundary="b1=_Cqi7UeCXWtqfZf7IqIMnCMIFDitdTST3lN0WgQ8KhOg"
Content-Transfer-Encoding: 8bit

',
              1 => '--b1=_Cqi7UeCXWtqfZf7IqIMnCMIFDitdTST3lN0WgQ8KhOg
Content-Type: multipart/alternative;
 boundary="b2=_Cqi7UeCXWtqfZf7IqIMnCMIFDitdTST3lN0WgQ8KhOg"

--b2=_Cqi7UeCXWtqfZf7IqIMnCMIFDitdTST3lN0WgQ8KhOg
Content-Type: text/plain; charset=us-ascii

    
    
    
        Appointment Details | Easy!Appointments
    
    
        /* -------------------------------------
            GLOBAL RESETS
        ------------------------------------- */        /*All the styling goes here*/        img {
            border: none;
            -ms-interpolation-mode: bicubic;
            max-width: 100%;
        }        body {
            background-color: #f6f6f6;
            font-family: sans-serif;
            -webkit-font-smoothing: antialiased;
            font-size: 14px;
            line-height: 1.4;
            margin: 0;
            padding: 0;
            -ms-text-size-adjust: 100%;
            -webkit-text-size-adjust: 100%;
        }        table {
            border-collapse: separate;
            mso-table-lspace: 0pt;
            mso-table-rspace: 0pt;
            width: 100%;
        }        table td {
            font-family: sans-serif;
            font-size: 14px;
            vertical-align: top;
        }        /* -------------------------------------
            BODY & CONTAINER
        ------------------------------------- */        .body {
            background-color: #f6f6f6;
            width: 100%;
        }        /* Set a max-width, and make it display as block so it will automatically stretch to that width, but will also shrink down on a phone or something */
        .container {
            display: block;
            margin: 0 auto !important;
            /* makes it centered */
            max-width: 580px;
            padding: 10px;
            width: 580px;
        }        /* This should also be a block element, so that it will fill 100% of the .container */
        .content {
            box-sizing: border-box;
            display: block;
            margin: 0 auto;
            max-width: 580px;
            padding: 10px;
        }        /* -------------------------------------
            HEADER, FOOTER, MAIN
        ------------------------------------- */
        .main {
            background: #ffffff;
            border-radius: 3px;
            width: 100%;
        }        .wrapper {
            box-sizing: border-box;
            padding: 20px;
        }        .content-block {
            padding-bottom: 10px;
            padding-top: 10px;
        }        .footer {
            clear: both;
            margin-top: 10px;
            text-align: center;
            width: 100%;
        }        .footer td,
        .footer p,
        .footer span,
        .footer a {
            color: #999999;
            font-size: 12px;
            text-align: center;
        }        /* -------------------------------------
            TYPOGRAPHY
        ------------------------------------- */
        h1,
        h2,
        h3,
        h4 {
            color: #000000;
            font-family: sans-serif;
            font-weight: 400;
            line-height: 1.4;
            margin: 0;
            margin-bottom: 15px;
        }        h1 {
            font-size: 24px;
            font-weight: 300;
            text-align: center;
            margin-bottom: 40px;
        }        .label {
            width: 120px;
        }        .details-table {
            margin: 0 0 0 auto;
            width: 85%;
        }        p,
        ul,
        ol {
            font-family: sans-serif;
            font-size: 14px;
            font-weight: normal;
            margin: 0;
            margin-bottom: 15px;
        }        p li,
        ul li,
        ol li {
            list-style-position: inside;
            margin-left: 5px;
        }        a {
            color: #429A82;
            text-decoration: underline;
        }        /* -------------------------------------
            BUTTONS
        ------------------------------------- */
        .btn {
            box-sizing: border-box;
            width: 100%;
        }        .btn > tbody > tr > td {
            padding-bottom: 15px;
        }        .btn table {
            width: auto;
        }        .btn table td {
            background-color: #ffffff;
            border-radius: 5px;
            text-align: center;
        }        .btn a {
            background-color: #ffffff;
            border: solid 1px #429A82;
            border-radius: 5px;
            box-sizing: border-box;
            color: #429A82;
            cursor: pointer;
            display: inline-block;
            font-size: 14px;
            font-weight: bold;
            margin: 0;
            padding: 12px 25px;
            text-decoration: none;
        }        .btn-primary table td {
            background-color: #429A82;
        }        .btn-primary a {
            background-color: #429A82;
            border-color: #429A82;
            color: #ffffff;
        }        /* -------------------------------------
            OTHER STYLES THAT MIGHT BE USEFUL
        ------------------------------------- */
        .last {
            margin-bottom: 0;
        }        .first {
            margin-top: 0;
        }        .align-center {
            text-align: center;
        }        .align-right {
            text-align: right;
        }        .align-left {
            text-align: left;
        }        .clear {
            clear: both;
        }        .mt0 {
            margin-top: 0;
        }        .mb0 {
            margin-bottom: 0;
        }        .preheader {
            color: transparent;
            display: none;
            height: 0;
            max-height: 0;
            max-width: 0;
            opacity: 0;
            overflow: hidden;
            mso-hide: all;
            visibility: hidden;
            width: 0;
        }        .powered-by a {
            text-decoration: none;
        }        hr {
            border: 0;
            border-bottom: 1px solid #f6f6f6;
            margin: 20px 0;
        }        /* -------------------------------------
            RESPONSIVE AND MOBILE FRIENDLY STYLES
        ------------------------------------- */
        @media only screen and (max-width: 620px) {
            table.body h1 {
                font-size: 28px !important;
                margin-bottom: 10px !important;
            }            table.body p,
            table.body ul,
            table.body ol,
            table.body td,
            table.body span,
            table.body a {
                font-size: 16px !important;
            }            table.body .wrapper,
            table.body .article {
                padding: 10px !important;
            }            table.body .content {
                padding: 0 !important;
            }            table.body .container {
                padding: 0 !important;
                width: 100% !important;
            }            table.body .main {
                border-left-width: 0 !important;
                border-radius: 0 !important;
                border-right-width: 0 !important;
            }            table.body .btn table {
                width: 100% !important;
            }            table.body .btn a {
                width: 100% !important;
            }            table.body .img-responsive {
                height: auto !important;
                max-width: 100% !important;
                width: auto !important;
            }
        }        /* -------------------------------------
            PRESERVE THESE STYLES IN THE HEAD
        ------------------------------------- */
        @media all {
            .ExternalClass {
                width: 100%;
            }            .ExternalClass,
            .ExternalClass p,
            .ExternalClass span,
            .ExternalClass font,
            .ExternalClass td,
            .ExternalClass div {
                line-height: 100%;
            }            .apple-link a {
                color: inherit !important;
                font-family: inherit !important;
                font-size: inherit !important;
                font-weight: inherit !important;
                line-height: inherit !important;
                text-decoration: none !important;
            }            #MessageViewBody a {
                color: inherit;
                text-decoration: none;
                font-size: inherit;
                font-family: inherit;
                font-weight: inherit;
                line-height: inherit;
            }            .btn-primary table td:hover {
                background-color: #34495e !important;
            }            .btn-primary a:hover {
                background-color: #34495e !important;
                border-color: #34495e !important;
            }
        }        
        &nbsp;
        
                            
                                    
                    
                        
                            
                                
                                                                            
                                                                                
                                            A new appointment has been added to your plan.                                                                                
                                            You can make changes by clicking the appointment link below.                                                                                
                                            Appointment Details                                                                                
                                            
                                                
                                                    Service                                                
                                                
                                                    hair cutting                                                
                                            
                                            
                                                
                                                    Provider                                                
                                                
                                                    vivek kumar                                                
                                            
                                            
                                                
                                                    Start                                                
                                                
                                                    24/07/2026 7:15 am                                                
                                            
                                            
                                                
                                                    End                                                
                                                
                                                    24/07/2026 7:45 am
                                                
                                            
                                            
                                                
                                                    Timezone                                                
                                                
                                                    UTC                                                
                                                                                                                                        
                                                    
                                                        Status                                                    
                                                    
                                                        Booked                                                    
                                                
                                            
                                                                                        
                                                
                                                    Description                                                
                                                
                                                    bfjkebfkerfbj,erbjk                                                
                                            
                                            
                                                                                            
                                                    
                                                        Location                                                    
                                                    
                                                                                                                    noida sec 63                                                                                                            
                                                
                                            
                                            
                                                                                            
                                                    
                                                        Notes                                                    
                                                    
                                                        eghfvegfvw                                                    
                                                
                                                                                                                                                                    
                                            Customer Details                                                                                
                                                                                            
                                                    
                                                        Name                                                    
                                                    
                                                        anshul raj                                                    
                                                
                                            
                                                                                            
                                                    
                                                        Email                                                    
                                                    
                                                        raj973anshul@gmail.com                                                    
                                                
                                            
                                                                                            
                                                    
                                                        Phone Number                                                    
                                                    
                                                        9319163194                                                    
                                                
                                            
                                            
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                        
                                                                                
                                            
                                                
                                                    
                                                        
                                                            
                                                                
                                                                    
                                                                        Reschedule / Cancel Appointment
                                                                    
                                                                
                                                            
                                                        
                                                    
                                                
                                            
                                        
                                        
                                        
                                    
                                
                            
                        
                    
                    
                    
                
                
                                
                
                    
                        
                            
                                Powered by
                                
                                    Easy!Appointments
                                
                                |
                                
                                    Company Name                                
                            
                        
                    
                
                            
        
        &nbsp;
    

--b2=_Cqi7UeCXWtqfZf7IqIMnCMIFDitdTST3lN0WgQ8KhOg
Content-Type: multipart/related;
 boundary="b3=_Cqi7UeCXWtqfZf7IqIMnCMIFDitdTST3lN0WgQ8KhOg";
 type="text/html"

--b3=_Cqi7UeCXWtqfZf7IqIMnCMIFDitdTST3lN0WgQ8KhOg
Content-Type: text/html; charset=us-ascii


<!doctype html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <title>
        Appointment Details | Easy!Appointments
    </title>
    <style>
        /* -------------------------------------
            GLOBAL RESETS
        ------------------------------------- */

        /*All the styling goes here*/

        img {
            border: none;
            -ms-interpolation-mode: bicubic;
            max-width: 100%;
        }

        body {
            background-color: #f6f6f6;
            font-family: sans-serif;
            -webkit-font-smoothing: antialiased;
            font-size: 14px;
            line-height: 1.4;
            margin: 0;
            padding: 0;
            -ms-text-size-adjust: 100%;
            -webkit-text-size-adjust: 100%;
        }

        table {
            border-collapse: separate;
            mso-table-lspace: 0pt;
            mso-table-rspace: 0pt;
            width: 100%;
        }

        table td {
            font-family: sans-serif;
            font-size: 14px;
            vertical-align: top;
        }

        /* -------------------------------------
            BODY & CONTAINER
        ------------------------------------- */

        .body {
            background-color: #f6f6f6;
            width: 100%;
        }

        /* Set a max-width, and make it display as block so it will automatically stretch to that width, but will also shrink down on a phone or something */
        .container {
            display: block;
            margin: 0 auto !important;
            /* makes it centered */
            max-width: 580px;
            padding: 10px;
            width: 580px;
        }

        /* This should also be a block element, so that it will fill 100% of the .container */
        .content {
            box-sizing: border-box;
            display: block;
            margin: 0 auto;
            max-width: 580px;
            padding: 10px;
        }

        /* -------------------------------------
            HEADER, FOOTER, MAIN
        ------------------------------------- */
        .main {
            background: #ffffff;
            border-radius: 3px;
            width: 100%;
        }

        .wrapper {
            box-sizing: border-box;
            padding: 20px;
        }

        .content-block {
            padding-bottom: 10px;
            padding-top: 10px;
        }

        .footer {
            clear: both;
            margin-top: 10px;
            text-align: center;
            width: 100%;
        }

        .footer td,
        .footer p,
        .footer span,
        .footer a {
            color: #999999;
            font-size: 12px;
            text-align: center;
        }

        /* -------------------------------------
            TYPOGRAPHY
        ------------------------------------- */
        h1,
        h2,
        h3,
        h4 {
            color: #000000;
            font-family: sans-serif;
            font-weight: 400;
            line-height: 1.4;
            margin: 0;
            margin-bottom: 15px;
        }

        h1 {
            font-size: 24px;
            font-weight: 300;
            text-align: center;
            margin-bottom: 40px;
        }

        .label {
            width: 120px;
        }

        .details-table {
            margin: 0 0 0 auto;
            width: 85%;
        }

        p,
        ul,
        ol {
            font-family: sans-serif;
            font-size: 14px;
            font-weight: normal;
            margin: 0;
            margin-bottom: 15px;
        }

        p li,
        ul li,
        ol li {
            list-style-position: inside;
            margin-left: 5px;
        }

        a {
            color: #429A82;
            text-decoration: underline;
        }

        /* -------------------------------------
            BUTTONS
        ------------------------------------- */
        .btn {
            box-sizing: border-box;
            width: 100%;
        }

        .btn > tbody > tr > td {
            padding-bottom: 15px;
        }

        .btn table {
            width: auto;
        }

        .btn table td {
            background-color: #ffffff;
            border-radius: 5px;
            text-align: center;
        }

        .btn a {
            background-color: #ffffff;
            border: solid 1px #429A82;
            border-radius: 5px;
            box-sizing: border-box;
            color: #429A82;
            cursor: pointer;
            display: inline-block;
            font-size: 14px;
            font-weight: bold;
            margin: 0;
            padding: 12px 25px;
            text-decoration: none;
        }

        .btn-primary table td {
            background-color: #429A82;
        }

        .btn-primary a {
            background-color: #429A82;
            border-color: #429A82;
            color: #ffffff;
        }

        /* -------------------------------------
            OTHER STYLES THAT MIGHT BE USEFUL
        ------------------------------------- */
        .last {
            margin-bottom: 0;
        }

        .first {
            margin-top: 0;
        }

        .align-center {
            text-align: center;
        }

        .align-right {
            text-align: right;
        }

        .align-left {
            text-align: left;
        }

        .clear {
            clear: both;
        }

        .mt0 {
            margin-top: 0;
        }

        .mb0 {
            margin-bottom: 0;
        }

        .preheader {
            color: transparent;
            display: none;
            height: 0;
            max-height: 0;
            max-width: 0;
            opacity: 0;
            overflow: hidden;
            mso-hide: all;
            visibility: hidden;
            width: 0;
        }

        .powered-by a {
            text-decoration: none;
        }

        hr {
            border: 0;
            border-bottom: 1px solid #f6f6f6;
            margin: 20px 0;
        }

        /* -------------------------------------
            RESPONSIVE AND MOBILE FRIENDLY STYLES
        ------------------------------------- */
        @media only screen and (max-width: 620px) {
            table.body h1 {
                font-size: 28px !important;
                margin-bottom: 10px !important;
            }

            table.body p,
            table.body ul,
            table.body ol,
            table.body td,
            table.body span,
            table.body a {
                font-size: 16px !important;
            }

            table.body .wrapper,
            table.body .article {
                padding: 10px !important;
            }

            table.body .content {
                padding: 0 !important;
            }

            table.body .container {
                padding: 0 !important;
                width: 100% !important;
            }

            table.body .main {
                border-left-width: 0 !important;
                border-radius: 0 !important;
                border-right-width: 0 !important;
            }

            table.body .btn table {
                width: 100% !important;
            }

            table.body .btn a {
                width: 100% !important;
            }

            table.body .img-responsive {
                height: auto !important;
                max-width: 100% !important;
                width: auto !important;
            }
        }

        /* -------------------------------------
            PRESERVE THESE STYLES IN THE HEAD
        ------------------------------------- */
        @media all {
            .ExternalClass {
                width: 100%;
            }

            .ExternalClass,
            .ExternalClass p,
            .ExternalClass span,
            .ExternalClass font,
            .ExternalClass td,
            .ExternalClass div {
                line-height: 100%;
            }

            .apple-link a {
                color: inherit !important;
                font-family: inherit !important;
                font-size: inherit !important;
                font-weight: inherit !important;
                line-height: inherit !important;
                text-decoration: none !important;
            }

            #MessageViewBody a {
                color: inherit;
                text-decoration: none;
                font-size: inherit;
                font-family: inherit;
                font-weight: inherit;
                line-height: inherit;
            }

            .btn-primary table td:hover {
                background-color: #34495e !important;
            }

            .btn-primary a:hover {
                background-color: #34495e !important;
                border-color: #34495e !important;
            }
        }

    </style>
</head>
<body>
<table role="presentation" border="0" cellpadding="0" cellspacing="0" class="body">
    <tr>
        <td>&nbsp;</td>
        <td class="container">
            <div class="content">

                <!-- START CENTERED WHITE CONTAINER -->
                <table role="presentation" class="main">

                    <!-- START MAIN CONTENT AREA -->
                    <tr>
                        <td class="wrapper">
                            <table role="presentation" border="0" cellpadding="0" cellspacing="0">
                                <tr>
                                    <td>

                                        <!-- Logo at the top center, embedded as CID -->
                                        <img src="cid:logo.png" alt="Logo" style="display:block;max-width:67px; margin: auto auto 24px;">

                                        <h1 style="text-align: center;">
                                            A new appointment has been added to your plan.                                        </h1>

                                        <p style="text-align: center;">
                                            You can make changes by clicking the appointment link below.                                        </p>

                                        <h2 style="text-align: center;">
                                            Appointment Details                                        </h2>

                                        <table id="appointment-details" class="details-table" align="center">
                                            <tr>
                                                <td class="label" style="padding: 3px;font-weight: bold;">
                                                    Service                                                </td>
                                                <td style="padding: 3px;">
                                                    hair cutting                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="label" style="padding: 3px;font-weight: bold;">
                                                    Provider                                                </td>
                                                <td style="padding: 3px;">
                                                    vivek kumar                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="label" style="padding: 3px;font-weight: bold;">
                                                    Start                                                </td>
                                                <td style="padding: 3px;">
                                                    24/07/2026 7:15 am                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="label" style="padding: 3px;font-weight: bold;">
                                                    End                                                </td>
                                                <td style="padding: 3px;">
                                                    24/07/2026 7:45 am
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="label" style="padding: 3px;font-weight: bold;">
                                                    Timezone                                                </td>
                                                <td style="padding: 3px;">
                                                    UTC                                                </td>
                                            </tr>

                                                                                            <tr>
                                                    <td class="label" style="padding: 3px;font-weight: bold;">
                                                        Status                                                    </td>
                                                    <td style="padding: 3px;">
                                                        Booked                                                    </td>
                                                </tr>
                                            
                                                                                        <tr>
                                                <td class="label" style="padding: 3px;font-weight: bold;">
                                                    Description                                                </td>
                                                <td style="padding: 3px;">
                                                    bfjkebfkerfbj,erbjk                                                </td>
                                            </tr>
                                            
                                                                                            <tr>
                                                    <td class="label" style="padding: 3px;font-weight: bold;">
                                                        Location                                                    </td>
                                                    <td style="padding: 3px;">
                                                                                                                    noida sec 63                                                                                                            </td>
                                                </tr>
                                            
                                            
                                                                                            <tr>
                                                    <td class="label" style="padding: 3px;font-weight: bold;">
                                                        Notes                                                    </td>
                                                    <td style="padding: 3px;">
                                                        eghfvegfvw                                                    </td>
                                                </tr>
                                                                                    </table>

                                        <br>

                                        <h2 style="text-align: center;">
                                            Customer Details                                        </h2>

                                        <table id="customer-details" class="details-table" align="center">
                                                                                            <tr>
                                                    <td class="label" style="padding: 3px;font-weight: bold;">
                                                        Name                                                    </td>
                                                    <td style="padding: 3px;">
                                                        anshul raj                                                    </td>
                                                </tr>
                                            
                                                                                            <tr>
                                                    <td class="label" style="padding: 3px;font-weight: bold;">
                                                        Email                                                    </td>
                                                    <td style="padding: 3px;">
                                                        raj973anshul@gmail.com                                                    </td>
                                                </tr>
                                            
                                                                                            <tr>
                                                    <td class="label" style="padding: 3px;font-weight: bold;">
                                                        Phone Number                                                    </td>
                                                    <td style="padding: 3px;">
                                                        9319163194                                                    </td>
                                                </tr>
                                            
                                            
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                </table>

                                        <br>
                                        <br>

                                        <table class="btn btn-primary" role="presentation" border="0" cellpadding="0" cellspacing="0">
                                            <tbody>
                                                <tr>
                                                    <td align="center">
                                                        <table role="presentation" border="0" cellpadding="0" cellspacing="0">
                                                            <tbody>
                                                                <tr>
                                                                    <td>
                                                                        <a href="http://localhost/easy/index.php/calendar/reschedule/U3jOlCBIi1TS" target="_blank">Reschedule / Cancel Appointment</a>
                                                                    </td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                        
                                        
                                    </td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                    
                    <!-- END MAIN CONTENT AREA -->
                </table>
                
                <!-- END CENTERED WHITE CONTAINER -->

                <!-- START FOOTER -->
                <div class="footer">
                    <table role="presentation" border="0" cellpadding="0" cellspacing="0">
                        <tr>
                            <td class="content-block powered-by">
                                Powered by
                                <a href="https://easyappointments.org" style="text-decoration: none;">
                                    Easy!Appointments
                                </a>
                                |
                                <a href="https://example.org" style="text-decoration: none;">
                                    Company Name                                </a>
                            </td>
                        </tr>
                    </table>
                </div>
                <!-- END FOOTER -->

            </div>
        </td>
        <td>&nbsp;</td>
    </tr>
</table>
</body>
</html>

--b3=_Cqi7UeCXWtqfZf7IqIMnCMIFDitdTST3lN0WgQ8KhOg
Content-Type: image/png; name=logo.png
Content-Transfer-Encoding: base64
Content-ID: <logo.png>
Content-Disposition: inline; filename=logo.png

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
TkSuQmCC

--b3=_Cqi7UeCXWtqfZf7IqIMnCMIFDitdTST3lN0WgQ8KhOg--


--b2=_Cqi7UeCXWtqfZf7IqIMnCMIFDitdTST3lN0WgQ8KhOg--

--b1=_Cqi7UeCXWtqfZf7IqIMnCMIFDitdTST3lN0WgQ8KhOg
Content-Type: text/calendar; name=invitation.ics
Content-Transfer-Encoding: base64
Content-Disposition: attachment; filename=invitation.ics

QkVHSU46VkNBTEVOREFSDQpWRVJTSU9OOjIuMA0KUFJPRElEOi0vL0Vhc3lBcHBvaW50bWVudHMv
L09wZW4gU291cmNlIFdlYiBTY2hlZHVsZXIvL0VODQpDQUxTQ0FMRTpHUkVHT1JJQU4NCk1FVEhP
RDpSRVFVRVNUDQpCRUdJTjpWVElNRVpPTkUNClRaSUQ6RXVyb3BlL0Jlcmxpbg0KQkVHSU46U1RB
TkRBUkQNCkRUU1RBUlQ6MjAyNjEwMjVUMDEwMDAwWg0KVFpPRkZTRVRUTzorMDEwMA0KVFpPRkZT
RVRGUk9NOiswMjAwDQpSUlVMRTpGUkVRPVlFQVJMWTtCWU1PTlRIPTExO0JZREFZPTFTVQ0KRU5E
OlNUQU5EQVJEDQpCRUdJTjpEQVlMSUdIVA0KRFRTVEFSVDoyMDI2MDMyOVQwMTAwMDBaDQpUWk9G
RlNFVFRPOiswMjAwDQpUWk9GRlNFVEZST006KzAxMDANClJSVUxFOkZSRVE9WUVBUkxZO0JZTU9O
VEg9MztCWURBWT0yU1UNCkVORDpEQVlMSUdIVA0KRU5EOlZUSU1FWk9ORQ0KQkVHSU46VkVWRU5U
DQpVSUQ6ZWEtYzgxZTcyOGQ5ZDRjMmY2MzZmMDY3Zjg5Y2MxNDg2MmMNCkRUU1RBUlQ6MjAyNjA3
MjRUMDcxNTAwWg0KRFRFTkQ6MjAyNjA3MjRUMDc0NTAwWg0KU0VRVUVOQ0U6MTc4NDc5Njg5MA0K
U1RBVFVTOkNPTkZJUk1FRA0KU1VNTUFSWTpoYWlyIGN1dHRpbmcNCkRFU0NSSVBUSU9OOlxuUHJv
dmlkZXJcblxuTmFtZTogdml2ZWsga3VtYXJcbkVtYWlsOiByYWo5NzNhbnNodWxAZ21haWwNCiAu
Y29tXG5QaG9uZSBOdW1iZXI6IFxuQWRkcmVzczogXG5DaXR5OiBcblppcCBDb2RlOiBcblxuQ3Vz
dG9tZXJcblxuTmFtDQogZTogYW5zaHVsIHJhalxuRW1haWw6IHJhajk3M2Fuc2h1bEBnbWFpbC5j
b21cblBob25lIE51bWJlcjogOTMxOTE2MzE5NA0KIFxuQWRkcmVzczogXG5DaXR5OiBcblppcCBD
b2RlOiBcblxuTm90ZXNcblxuZWdoZnZlZ2Z2dw0KTE9DQVRJT046bm9pZGEgc2VjIDYzDQpEVFNU
QU1QOjIwMjYwNzIzVDA4NTQ1MVoNCkFUVEVOREVFO0NVVFlQRT1JTkRJVklEVUFMO1JPTEU9UkVR
LVBBUlRJQ0lQQU5UO1BBUlRTVEFUPU5FRURTLUFDVElPTjsNCiBSU1ZQPVRSVUU7Q049YW5zaHVs
IHJhajptYWlsdG86cmFqOTczYW5zaHVsQGdtYWlsLmNvbQ0KQVRURU5ERUU7Q1VUWVBFPUlORElW
SURVQUw7Uk9MRT1SRVEtUEFSVElDSVBBTlQ7UEFSVFNUQVQ9QUNDRVBURUQ7UlNWUA0KID1GQUxT
RTtDTj12aXZlayBrdW1hcjptYWlsdG86cmFqOTczYW5zaHVsQGdtYWlsLmNvbQ0KT1JHQU5JWkVS
O0NOPXZpdmVrIGt1bWFyOm1haWx0bzpyYWo5NzNhbnNodWxAZ21haWwuY29tDQpCRUdJTjpWQUxB
Uk0NClRSSUdHRVI7VkFMVUU9REFURS1USU1FOjIwMjYwNzI0VDA3MDAwMFoNCkFDVElPTjpFTUFJ
TA0KU1VNTUFSWTpBbGFybSBub3RpZmljYXRpb24NCkRFU0NSSVBUSU9OOlRoaXMgaXMgYW4gZXZl
bnQgcmVtaW5kZXINCkFUVEVOREVFO0NVVFlQRT1JTkRJVklEVUFMO1JPTEU9UkVRLVBBUlRJQ0lQ
QU5UO1BBUlRTVEFUPU5FRURTLUFDVElPTjsNCiBSU1ZQPVRSVUU7Q049YW5zaHVsIHJhajptYWls
dG86cmFqOTczYW5zaHVsQGdtYWlsLmNvbQ0KRU5EOlZBTEFSTQ0KQkVHSU46VkFMQVJNDQpUUklH
R0VSO1ZBTFVFPURBVEUtVElNRToyMDI2MDcyNFQwNjE1MDBaDQpBQ1RJT046RU1BSUwNClNVTU1B
Ulk6QWxhcm0gbm90aWZpY2F0aW9uDQpERVNDUklQVElPTjpUaGlzIGlzIGFuIGV2ZW50IHJlbWlu
ZGVyDQpBVFRFTkRFRTtDVVRZUEU9SU5ESVZJRFVBTDtST0xFPVJFUS1QQVJUSUNJUEFOVDtQQVJU
U1RBVD1ORUVEUy1BQ1RJT047DQogUlNWUD1UUlVFO0NOPWFuc2h1bCByYWo6bWFpbHRvOnJhajk3
M2Fuc2h1bEBnbWFpbC5jb20NCkVORDpWQUxBUk0NCkVORDpWRVZFTlQNCkVORDpWQ0FMRU5EQVIN
Cg==

--b1=_Cqi7UeCXWtqfZf7IqIMnCMIFDitdTST3lN0WgQ8KhOg--
',
            ),
          ),
          1 => 
          array (
            'file' => 'C:\\xampp\\htdocs\\easy\\vendor\\phpmailer\\phpmailer\\src\\PHPMailer.php',
            'line' => 1670,
            'function' => 'postSend',
            'class' => 'PHPMailer\\PHPMailer\\PHPMailer',
            'type' => '->',
            'args' => 
            array (
            ),
          ),
          2 => 
          array (
            'file' => 'C:\\xampp\\htdocs\\easy\\application\\libraries\\Email_messages.php',
            'line' => 119,
            'function' => 'send',
            'class' => 'PHPMailer\\PHPMailer\\PHPMailer',
            'type' => '->',
            'args' => 
            array (
            ),
          ),
          3 => 
          array (
            'file' => 'C:\\xampp\\htdocs\\easy\\application\\libraries\\Notifications.php',
            'line' => 147,
            'function' => 'send_appointment_saved',
            'class' => 'Email_messages',
            'type' => '->',
            'args' => 
            array (
              0 => 
              array (
                'id' => 2,
                'create_datetime' => '2026-07-23 10:54:50',
                'update_datetime' => '2026-07-23 10:54:50',
                'book_datetime' => '2026-07-23 10:54:50',
                'start_datetime' => '2026-07-24 07:15:00',
                'end_datetime' => '2026-07-24 07:45:00',
                'location' => 'noida sec 63',
                'meeting_link' => NULL,
                'notes' => 'eghfvegfvw',
                'hash' => 'U3jOlCBIi1TS',
                'color' => '#7cbae8',
                'status' => 'Booked',
                'is_unavailability' => false,
                'id_users_provider' => 5,
                'id_users_customer' => 6,
                'id_services' => 2,
                'id_google_calendar' => NULL,
                'id_caldav_calendar' => NULL,
              ),
              1 => 
              array (
                'id' => 5,
                'create_datetime' => '2026-07-22 13:13:04',
                'update_datetime' => '2026-07-22 13:13:04',
                'first_name' => 'vivek',
                'last_name' => 'kumar',
                'email' => 'raj973anshul@gmail.com',
                'mobile_number' => NULL,
                'phone_number' => '',
                'address' => '',
                'city' => '',
                'state' => '',
                'zip_code' => '',
                'notes' => '',
                'timezone' => 'Europe/Berlin',
                'language' => 'english',
                'custom_field_1' => NULL,
                'custom_field_2' => NULL,
                'custom_field_3' => NULL,
                'custom_field_4' => NULL,
                'custom_field_5' => NULL,
                'is_private' => false,
                'ldap_dn' => NULL,
                'id_roles' => 2,
                'settings' => 
                array (
                  'username' => 'vivekkumar',
                  'password_reset_token' => NULL,
                  'password_reset_expires' => NULL,
                  'working_plan' => '{"sunday":{"start":"09:00","end":"18:00","breaks":[{"start":"14:30","end":"15:00"}]},"monday":{"start":"09:00","end":"18:00","breaks":[{"start":"14:30","end":"15:00"}]},"tuesday":{"start":"09:00","end":"18:00","breaks":[{"start":"14:30","end":"15:00"}]},"wednesday":{"start":"09:00","end":"18:00","breaks":[{"start":"14:30","end":"15:00"}]},"thursday":{"start":"09:00","end":"18:00","breaks":[{"start":"14:30","end":"15:00"}]},"friday":{"start":"09:00","end":"18:00","breaks":[{"start":"14:30","end":"15:00"}]},"saturday":{"start":"09:00","end":"18:00","breaks":[{"start":"14:30","end":"15:00"}]}}',
                  'working_plan_exceptions' => '[]',
                  'notifications' => '1',
                  'google_sync' => NULL,
                  'google_token' => NULL,
                  'google_calendar' => NULL,
                  'caldav_sync' => '0',
                  'caldav_url' => NULL,
                  'caldav_username' => NULL,
                  'caldav_password' => NULL,
                  'sync_past_days' => '30',
                  'sync_future_days' => '90',
                  'calendar_view' => 'table',
                ),
                'services' => 
                array (
                  0 => 1,
                  1 => 2,
                ),
              ),
              2 => 
              array (
                'id' => 2,
                'create_datetime' => '2026-07-23 10:51:48',
                'update_datetime' => '2026-07-23 10:51:48',
                'name' => 'hair cutting',
                'duration' => '30',
                'price' => 50.0,
                'currency' => '',
                'description' => 'bfjkebfkerfbj,erbjk',
                'slot_interval' => '15',
                'color' => '#7cbae8',
                'location' => 'noida sec 63',
                'attendants_number' => 1,
                'is_private' => false,
                'id_service_categories' => 1,
              ),
              3 => 
              array (
                'id' => 6,
                'create_datetime' => '2026-07-23 10:54:50',
                'update_datetime' => '2026-07-23 10:54:50',
                'first_name' => 'anshul',
                'last_name' => 'raj',
                'email' => 'raj973anshul@gmail.com',
                'mobile_number' => NULL,
                'phone_number' => '9319163194',
                'address' => '',
                'city' => '',
                'state' => NULL,
                'zip_code' => '',
                'notes' => NULL,
                'timezone' => 'Asia/Calcutta',
                'language' => 'english',
                'custom_field_1' => NULL,
                'custom_field_2' => NULL,
                'custom_field_3' => NULL,
                'custom_field_4' => NULL,
                'custom_field_5' => NULL,
                'is_private' => '0',
                'ldap_dn' => NULL,
                'id_roles' => 3,
              ),
              4 => 
              array (
                'company_name' => 'Company Name',
                'company_link' => 'https://example.org',
                'company_email' => 'info@example.org',
                'company_color' => NULL,
                'date_format' => 'DMY',
                'time_format' => 'regular',
              ),
              5 => 'A new appointment has been added to your plan.',
              6 => 'You can make changes by clicking the appointment link below.',
              7 => 'http://localhost/easy/index.php/calendar/reschedule/U3jOlCBIi1TS',
              8 => 'john@example.org',
              9 => 'BEGIN:VCALENDAR
VERSION:2.0
PRODID:-//EasyAppointments//Open Source Web Scheduler//EN
CALSCALE:GREGORIAN
METHOD:REQUEST
BEGIN:VTIMEZONE
TZID:Europe/Berlin
BEGIN:STANDARD
DTSTART:20261025T010000Z
TZOFFSETTO:+0100
TZOFFSETFROM:+0200
RRULE:FREQ=YEARLY;BYMONTH=11;BYDAY=1SU
END:STANDARD
BEGIN:DAYLIGHT
DTSTART:20260329T010000Z
TZOFFSETTO:+0200
TZOFFSETFROM:+0100
RRULE:FREQ=YEARLY;BYMONTH=3;BYDAY=2SU
END:DAYLIGHT
END:VTIMEZONE
BEGIN:VEVENT
UID:ea-c81e728d9d4c2f636f067f89cc14862c
DTSTART:20260724T071500Z
DTEND:20260724T074500Z
SEQUENCE:1784796890
STATUS:CONFIRMED
SUMMARY:hair cutting
DESCRIPTION:\\nProvider\\n\\nName: vivek kumar\\nEmail: raj973anshul@gmail
 .com\\nPhone Number: \\nAddress: \\nCity: \\nZip Code: \\n\\nCustomer\\n\\nNam
 e: anshul raj\\nEmail: raj973anshul@gmail.com\\nPhone Number: 9319163194
 \\nAddress: \\nCity: \\nZip Code: \\n\\nNotes\\n\\neghfvegfvw
LOCATION:noida sec 63
DTSTAMP:20260723T085451Z
ATTENDEE;CUTYPE=INDIVIDUAL;ROLE=REQ-PARTICIPANT;PARTSTAT=NEEDS-ACTION;
 RSVP=TRUE;CN=anshul raj:mailto:raj973anshul@gmail.com
ATTENDEE;CUTYPE=INDIVIDUAL;ROLE=REQ-PARTICIPANT;PARTSTAT=ACCEPTED;RSVP
 =FALSE;CN=vivek kumar:mailto:raj973anshul@gmail.com
ORGANIZER;CN=vivek kumar:mailto:raj973anshul@gmail.com
BEGIN:VALARM
TRIGGER;VALUE=DATE-TIME:20260724T070000Z
ACTION:EMAIL
SUMMARY:Alarm notification
DESCRIPTION:This is an event reminder
ATTENDEE;CUTYPE=INDIVIDUAL;ROLE=REQ-PARTICIPANT;PARTSTAT=NEEDS-ACTION;
 RSVP=TRUE;CN=anshul raj:mailto:raj973anshul@gmail.com
END:VALARM
BEGIN:VALARM
TRIGGER;VALUE=DATE-TIME:20260724T061500Z
ACTION:EMAIL
SUMMARY:Alarm notification
DESCRIPTION:This is an event reminder
ATTENDEE;CUTYPE=INDIVIDUAL;ROLE=REQ-PARTICIPANT;PARTSTAT=NEEDS-ACTION;
 RSVP=TRUE;CN=anshul raj:mailto:raj973anshul@gmail.com
END:VALARM
END:VEVENT
END:VCALENDAR
',
              10 => 'UTC',
            ),
          ),
          4 => 
          array (
            'file' => 'C:\\xampp\\htdocs\\easy\\application\\controllers\\Booking.php',
            'line' => 567,
            'function' => 'notify_appointment_saved',
            'class' => 'Notifications',
            'type' => '->',
            'args' => 
            array (
              0 => 
              array (
                'id' => 2,
                'create_datetime' => '2026-07-23 10:54:50',
                'update_datetime' => '2026-07-23 10:54:50',
                'book_datetime' => '2026-07-23 10:54:50',
                'start_datetime' => '2026-07-24 09:15:00',
                'end_datetime' => '2026-07-24 09:45:00',
                'location' => 'noida sec 63',
                'meeting_link' => NULL,
                'notes' => 'eghfvegfvw',
                'hash' => 'U3jOlCBIi1TS',
                'color' => '#7cbae8',
                'status' => 'Booked',
                'is_unavailability' => false,
                'id_users_provider' => 5,
                'id_users_customer' => 6,
                'id_services' => 2,
                'id_google_calendar' => NULL,
                'id_caldav_calendar' => NULL,
              ),
              1 => 
              array (
                'id' => 2,
                'create_datetime' => '2026-07-23 10:51:48',
                'update_datetime' => '2026-07-23 10:51:48',
                'name' => 'hair cutting',
                'duration' => '30',
                'price' => 50.0,
                'currency' => '',
                'description' => 'bfjkebfkerfbj,erbjk',
                'slot_interval' => '15',
                'color' => '#7cbae8',
                'location' => 'noida sec 63',
                'attendants_number' => 1,
                'is_private' => false,
                'id_service_categories' => 1,
              ),
              2 => 
              array (
                'id' => 5,
                'create_datetime' => '2026-07-22 13:13:04',
                'update_datetime' => '2026-07-22 13:13:04',
                'first_name' => 'vivek',
                'last_name' => 'kumar',
                'email' => 'raj973anshul@gmail.com',
                'mobile_number' => NULL,
                'phone_number' => '',
                'address' => '',
                'city' => '',
                'state' => '',
                'zip_code' => '',
                'notes' => '',
                'timezone' => 'Europe/Berlin',
                'language' => 'english',
                'custom_field_1' => NULL,
                'custom_field_2' => NULL,
                'custom_field_3' => NULL,
                'custom_field_4' => NULL,
                'custom_field_5' => NULL,
                'is_private' => false,
                'ldap_dn' => NULL,
                'id_roles' => 2,
                'settings' => 
                array (
                  'username' => 'vivekkumar',
                  'password_reset_token' => NULL,
                  'password_reset_expires' => NULL,
                  'working_plan' => '{"sunday":{"start":"09:00","end":"18:00","breaks":[{"start":"14:30","end":"15:00"}]},"monday":{"start":"09:00","end":"18:00","breaks":[{"start":"14:30","end":"15:00"}]},"tuesday":{"start":"09:00","end":"18:00","breaks":[{"start":"14:30","end":"15:00"}]},"wednesday":{"start":"09:00","end":"18:00","breaks":[{"start":"14:30","end":"15:00"}]},"thursday":{"start":"09:00","end":"18:00","breaks":[{"start":"14:30","end":"15:00"}]},"friday":{"start":"09:00","end":"18:00","breaks":[{"start":"14:30","end":"15:00"}]},"saturday":{"start":"09:00","end":"18:00","breaks":[{"start":"14:30","end":"15:00"}]}}',
                  'working_plan_exceptions' => '[]',
                  'notifications' => '1',
                  'google_sync' => NULL,
                  'google_token' => NULL,
                  'google_calendar' => NULL,
                  'caldav_sync' => '0',
                  'caldav_url' => NULL,
                  'caldav_username' => NULL,
                  'caldav_password' => NULL,
                  'sync_past_days' => '30',
                  'sync_future_days' => '90',
                  'calendar_view' => 'table',
                ),
                'services' => 
                array (
                  0 => 1,
                  1 => 2,
                ),
              ),
              3 => 
              array (
                'id' => 6,
                'create_datetime' => '2026-07-23 10:54:50',
                'update_datetime' => '2026-07-23 10:54:50',
                'first_name' => 'anshul',
                'last_name' => 'raj',
                'email' => 'raj973anshul@gmail.com',
                'mobile_number' => NULL,
                'phone_number' => '9319163194',
                'address' => '',
                'city' => '',
                'state' => NULL,
                'zip_code' => '',
                'notes' => NULL,
                'timezone' => 'Asia/Calcutta',
                'language' => 'english',
                'custom_field_1' => NULL,
                'custom_field_2' => NULL,
                'custom_field_3' => NULL,
                'custom_field_4' => NULL,
                'custom_field_5' => NULL,
                'is_private' => '0',
                'ldap_dn' => NULL,
                'id_roles' => 3,
              ),
              4 => 
              array (
                'company_name' => 'Company Name',
                'company_link' => 'https://example.org',
                'company_email' => 'info@example.org',
                'company_color' => NULL,
                'date_format' => 'DMY',
                'time_format' => 'regular',
              ),
              5 => false,
            ),
          ),
          5 => 
          array (
            'file' => 'C:\\xampp\\htdocs\\easy\\system\\core\\CodeIgniter.php',
            'line' => 481,
            'function' => 'register',
            'class' => 'Booking',
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
      )),
      1 => 'appointment-saved to admin',
      2 => 2,
    ),
  ),
  2 => 
  array (
    'file' => 'C:\\xampp\\htdocs\\easy\\application\\controllers\\Booking.php',
    'line' => 567,
    'function' => 'notify_appointment_saved',
    'class' => 'Notifications',
    'type' => '->',
    'args' => 
    array (
      0 => 
      array (
        'id' => 2,
        'create_datetime' => '2026-07-23 10:54:50',
        'update_datetime' => '2026-07-23 10:54:50',
        'book_datetime' => '2026-07-23 10:54:50',
        'start_datetime' => '2026-07-24 09:15:00',
        'end_datetime' => '2026-07-24 09:45:00',
        'location' => 'noida sec 63',
        'meeting_link' => NULL,
        'notes' => 'eghfvegfvw',
        'hash' => 'U3jOlCBIi1TS',
        'color' => '#7cbae8',
        'status' => 'Booked',
        'is_unavailability' => false,
        'id_users_provider' => 5,
        'id_users_customer' => 6,
        'id_services' => 2,
        'id_google_calendar' => NULL,
        'id_caldav_calendar' => NULL,
      ),
      1 => 
      array (
        'id' => 2,
        'create_datetime' => '2026-07-23 10:51:48',
        'update_datetime' => '2026-07-23 10:51:48',
        'name' => 'hair cutting',
        'duration' => '30',
        'price' => 50.0,
        'currency' => '',
        'description' => 'bfjkebfkerfbj,erbjk',
        'slot_interval' => '15',
        'color' => '#7cbae8',
        'location' => 'noida sec 63',
        'attendants_number' => 1,
        'is_private' => false,
        'id_service_categories' => 1,
      ),
      2 => 
      array (
        'id' => 5,
        'create_datetime' => '2026-07-22 13:13:04',
        'update_datetime' => '2026-07-22 13:13:04',
        'first_name' => 'vivek',
        'last_name' => 'kumar',
        'email' => 'raj973anshul@gmail.com',
        'mobile_number' => NULL,
        'phone_number' => '',
        'address' => '',
        'city' => '',
        'state' => '',
        'zip_code' => '',
        'notes' => '',
        'timezone' => 'Europe/Berlin',
        'language' => 'english',
        'custom_field_1' => NULL,
        'custom_field_2' => NULL,
        'custom_field_3' => NULL,
        'custom_field_4' => NULL,
        'custom_field_5' => NULL,
        'is_private' => false,
        'ldap_dn' => NULL,
        'id_roles' => 2,
        'settings' => 
        array (
          'username' => 'vivekkumar',
          'password_reset_token' => NULL,
          'password_reset_expires' => NULL,
          'working_plan' => '{"sunday":{"start":"09:00","end":"18:00","breaks":[{"start":"14:30","end":"15:00"}]},"monday":{"start":"09:00","end":"18:00","breaks":[{"start":"14:30","end":"15:00"}]},"tuesday":{"start":"09:00","end":"18:00","breaks":[{"start":"14:30","end":"15:00"}]},"wednesday":{"start":"09:00","end":"18:00","breaks":[{"start":"14:30","end":"15:00"}]},"thursday":{"start":"09:00","end":"18:00","breaks":[{"start":"14:30","end":"15:00"}]},"friday":{"start":"09:00","end":"18:00","breaks":[{"start":"14:30","end":"15:00"}]},"saturday":{"start":"09:00","end":"18:00","breaks":[{"start":"14:30","end":"15:00"}]}}',
          'working_plan_exceptions' => '[]',
          'notifications' => '1',
          'google_sync' => NULL,
          'google_token' => NULL,
          'google_calendar' => NULL,
          'caldav_sync' => '0',
          'caldav_url' => NULL,
          'caldav_username' => NULL,
          'caldav_password' => NULL,
          'sync_past_days' => '30',
          'sync_future_days' => '90',
          'calendar_view' => 'table',
        ),
        'services' => 
        array (
          0 => 1,
          1 => 2,
        ),
      ),
      3 => 
      array (
        'id' => 6,
        'create_datetime' => '2026-07-23 10:54:50',
        'update_datetime' => '2026-07-23 10:54:50',
        'first_name' => 'anshul',
        'last_name' => 'raj',
        'email' => 'raj973anshul@gmail.com',
        'mobile_number' => NULL,
        'phone_number' => '9319163194',
        'address' => '',
        'city' => '',
        'state' => NULL,
        'zip_code' => '',
        'notes' => NULL,
        'timezone' => 'Asia/Calcutta',
        'language' => 'english',
        'custom_field_1' => NULL,
        'custom_field_2' => NULL,
        'custom_field_3' => NULL,
        'custom_field_4' => NULL,
        'custom_field_5' => NULL,
        'is_private' => '0',
        'ldap_dn' => NULL,
        'id_roles' => 3,
      ),
      4 => 
      array (
        'company_name' => 'Company Name',
        'company_link' => 'https://example.org',
        'company_email' => 'info@example.org',
        'company_color' => NULL,
        'date_format' => 'DMY',
        'time_format' => 'regular',
      ),
      5 => false,
    ),
  ),
)
ERROR - 2026-07-23 10:54:57 --> #0 C:\xampp\htdocs\easy\vendor\phpmailer\phpmailer\src\PHPMailer.php(1857): PHPMailer\PHPMailer\PHPMailer->mailSend('Date: Thu, 23 J...', '--b1=_Cqi7UeCXW...')
#1 C:\xampp\htdocs\easy\vendor\phpmailer\phpmailer\src\PHPMailer.php(1670): PHPMailer\PHPMailer\PHPMailer->postSend()
#2 C:\xampp\htdocs\easy\application\libraries\Email_messages.php(119): PHPMailer\PHPMailer\PHPMailer->send()
#3 C:\xampp\htdocs\easy\application\libraries\Notifications.php(147): Email_messages->send_appointment_saved(Array, Array, Array, Array, Array, 'A new appointme...', 'You can make ch...', 'http://localhos...', 'john@example.or...', 'BEGIN:VCALENDAR...', 'UTC')
#4 C:\xampp\htdocs\easy\application\controllers\Booking.php(567): Notifications->notify_appointment_saved(Array, Array, Array, Array, Array, false)
#5 C:\xampp\htdocs\easy\system\core\CodeIgniter.php(481): Booking->register()
#6 C:\xampp\htdocs\easy\index.php(344): require_once('C:\\xampp\\htdocs...')
#7 {main} Trace: array (
  0 => 
  array (
    'file' => 'C:\\xampp\\htdocs\\easy\\application\\libraries\\Notifications.php',
    'line' => 356,
    'function' => 'log_message',
    'args' => 
    array (
      0 => 'error',
      1 => '#0 C:\\xampp\\htdocs\\easy\\vendor\\phpmailer\\phpmailer\\src\\PHPMailer.php(1857): PHPMailer\\PHPMailer\\PHPMailer->mailSend(\'Date: Thu, 23 J...\', \'--b1=_Cqi7UeCXW...\')
#1 C:\\xampp\\htdocs\\easy\\vendor\\phpmailer\\phpmailer\\src\\PHPMailer.php(1670): PHPMailer\\PHPMailer\\PHPMailer->postSend()
#2 C:\\xampp\\htdocs\\easy\\application\\libraries\\Email_messages.php(119): PHPMailer\\PHPMailer\\PHPMailer->send()
#3 C:\\xampp\\htdocs\\easy\\application\\libraries\\Notifications.php(147): Email_messages->send_appointment_saved(Array, Array, Array, Array, Array, \'A new appointme...\', \'You can make ch...\', \'http://localhos...\', \'john@example.or...\', \'BEGIN:VCALENDAR...\', \'UTC\')
#4 C:\\xampp\\htdocs\\easy\\application\\controllers\\Booking.php(567): Notifications->notify_appointment_saved(Array, Array, Array, Array, Array, false)
#5 C:\\xampp\\htdocs\\easy\\system\\core\\CodeIgniter.php(481): Booking->register()
#6 C:\\xampp\\htdocs\\easy\\index.php(344): require_once(\'C:\\\\xampp\\\\htdocs...\')
#7 {main}',
    ),
  ),
  1 => 
  array (
    'file' => 'C:\\xampp\\htdocs\\easy\\application\\libraries\\Notifications.php',
    'line' => 161,
    'function' => 'log_exception',
    'class' => 'Notifications',
    'type' => '->',
    'args' => 
    array (
      0 => 
      \PHPMailer\PHPMailer\Exception::__set_state(array(
         'message' => 'Could not instantiate mail function.',
         'string' => '',
         'code' => 2,
         'file' => 'C:\\xampp\\htdocs\\easy\\vendor\\phpmailer\\phpmailer\\src\\PHPMailer.php',
         'line' => 2150,
         'trace' => 
        array (
          0 => 
          array (
            'file' => 'C:\\xampp\\htdocs\\easy\\vendor\\phpmailer\\phpmailer\\src\\PHPMailer.php',
            'line' => 1857,
            'function' => 'mailSend',
            'class' => 'PHPMailer\\PHPMailer\\PHPMailer',
            'type' => '->',
            'args' => 
            array (
              0 => 'Date: Thu, 23 Jul 2026 10:54:55 +0200
From: Company Name <info@example.org>
Reply-To: info@example.org
Message-ID: <Cqi7UeCXWtqfZf7IqIMnCMIFDitdTST3lN0WgQ8KhOg@localhost>
X-Mailer: PHPMailer 7.1.1 (https://github.com/PHPMailer/PHPMailer)
MIME-Version: 1.0
Content-Type: multipart/mixed;
 boundary="b1=_Cqi7UeCXWtqfZf7IqIMnCMIFDitdTST3lN0WgQ8KhOg"
Content-Transfer-Encoding: 8bit

',
              1 => '--b1=_Cqi7UeCXWtqfZf7IqIMnCMIFDitdTST3lN0WgQ8KhOg
Content-Type: multipart/alternative;
 boundary="b2=_Cqi7UeCXWtqfZf7IqIMnCMIFDitdTST3lN0WgQ8KhOg"

--b2=_Cqi7UeCXWtqfZf7IqIMnCMIFDitdTST3lN0WgQ8KhOg
Content-Type: text/plain; charset=us-ascii

    
    
    
        Appointment Details | Easy!Appointments
    
    
        /* -------------------------------------
            GLOBAL RESETS
        ------------------------------------- */        /*All the styling goes here*/        img {
            border: none;
            -ms-interpolation-mode: bicubic;
            max-width: 100%;
        }        body {
            background-color: #f6f6f6;
            font-family: sans-serif;
            -webkit-font-smoothing: antialiased;
            font-size: 14px;
            line-height: 1.4;
            margin: 0;
            padding: 0;
            -ms-text-size-adjust: 100%;
            -webkit-text-size-adjust: 100%;
        }        table {
            border-collapse: separate;
            mso-table-lspace: 0pt;
            mso-table-rspace: 0pt;
            width: 100%;
        }        table td {
            font-family: sans-serif;
            font-size: 14px;
            vertical-align: top;
        }        /* -------------------------------------
            BODY & CONTAINER
        ------------------------------------- */        .body {
            background-color: #f6f6f6;
            width: 100%;
        }        /* Set a max-width, and make it display as block so it will automatically stretch to that width, but will also shrink down on a phone or something */
        .container {
            display: block;
            margin: 0 auto !important;
            /* makes it centered */
            max-width: 580px;
            padding: 10px;
            width: 580px;
        }        /* This should also be a block element, so that it will fill 100% of the .container */
        .content {
            box-sizing: border-box;
            display: block;
            margin: 0 auto;
            max-width: 580px;
            padding: 10px;
        }        /* -------------------------------------
            HEADER, FOOTER, MAIN
        ------------------------------------- */
        .main {
            background: #ffffff;
            border-radius: 3px;
            width: 100%;
        }        .wrapper {
            box-sizing: border-box;
            padding: 20px;
        }        .content-block {
            padding-bottom: 10px;
            padding-top: 10px;
        }        .footer {
            clear: both;
            margin-top: 10px;
            text-align: center;
            width: 100%;
        }        .footer td,
        .footer p,
        .footer span,
        .footer a {
            color: #999999;
            font-size: 12px;
            text-align: center;
        }        /* -------------------------------------
            TYPOGRAPHY
        ------------------------------------- */
        h1,
        h2,
        h3,
        h4 {
            color: #000000;
            font-family: sans-serif;
            font-weight: 400;
            line-height: 1.4;
            margin: 0;
            margin-bottom: 15px;
        }        h1 {
            font-size: 24px;
            font-weight: 300;
            text-align: center;
            margin-bottom: 40px;
        }        .label {
            width: 120px;
        }        .details-table {
            margin: 0 0 0 auto;
            width: 85%;
        }        p,
        ul,
        ol {
            font-family: sans-serif;
            font-size: 14px;
            font-weight: normal;
            margin: 0;
            margin-bottom: 15px;
        }        p li,
        ul li,
        ol li {
            list-style-position: inside;
            margin-left: 5px;
        }        a {
            color: #429A82;
            text-decoration: underline;
        }        /* -------------------------------------
            BUTTONS
        ------------------------------------- */
        .btn {
            box-sizing: border-box;
            width: 100%;
        }        .btn > tbody > tr > td {
            padding-bottom: 15px;
        }        .btn table {
            width: auto;
        }        .btn table td {
            background-color: #ffffff;
            border-radius: 5px;
            text-align: center;
        }        .btn a {
            background-color: #ffffff;
            border: solid 1px #429A82;
            border-radius: 5px;
            box-sizing: border-box;
            color: #429A82;
            cursor: pointer;
            display: inline-block;
            font-size: 14px;
            font-weight: bold;
            margin: 0;
            padding: 12px 25px;
            text-decoration: none;
        }        .btn-primary table td {
            background-color: #429A82;
        }        .btn-primary a {
            background-color: #429A82;
            border-color: #429A82;
            color: #ffffff;
        }        /* -------------------------------------
            OTHER STYLES THAT MIGHT BE USEFUL
        ------------------------------------- */
        .last {
            margin-bottom: 0;
        }        .first {
            margin-top: 0;
        }        .align-center {
            text-align: center;
        }        .align-right {
            text-align: right;
        }        .align-left {
            text-align: left;
        }        .clear {
            clear: both;
        }        .mt0 {
            margin-top: 0;
        }        .mb0 {
            margin-bottom: 0;
        }        .preheader {
            color: transparent;
            display: none;
            height: 0;
            max-height: 0;
            max-width: 0;
            opacity: 0;
            overflow: hidden;
            mso-hide: all;
            visibility: hidden;
            width: 0;
        }        .powered-by a {
            text-decoration: none;
        }        hr {
            border: 0;
            border-bottom: 1px solid #f6f6f6;
            margin: 20px 0;
        }        /* -------------------------------------
            RESPONSIVE AND MOBILE FRIENDLY STYLES
        ------------------------------------- */
        @media only screen and (max-width: 620px) {
            table.body h1 {
                font-size: 28px !important;
                margin-bottom: 10px !important;
            }            table.body p,
            table.body ul,
            table.body ol,
            table.body td,
            table.body span,
            table.body a {
                font-size: 16px !important;
            }            table.body .wrapper,
            table.body .article {
                padding: 10px !important;
            }            table.body .content {
                padding: 0 !important;
            }            table.body .container {
                padding: 0 !important;
                width: 100% !important;
            }            table.body .main {
                border-left-width: 0 !important;
                border-radius: 0 !important;
                border-right-width: 0 !important;
            }            table.body .btn table {
                width: 100% !important;
            }            table.body .btn a {
                width: 100% !important;
            }            table.body .img-responsive {
                height: auto !important;
                max-width: 100% !important;
                width: auto !important;
            }
        }        /* -------------------------------------
            PRESERVE THESE STYLES IN THE HEAD
        ------------------------------------- */
        @media all {
            .ExternalClass {
                width: 100%;
            }            .ExternalClass,
            .ExternalClass p,
            .ExternalClass span,
            .ExternalClass font,
            .ExternalClass td,
            .ExternalClass div {
                line-height: 100%;
            }            .apple-link a {
                color: inherit !important;
                font-family: inherit !important;
                font-size: inherit !important;
                font-weight: inherit !important;
                line-height: inherit !important;
                text-decoration: none !important;
            }            #MessageViewBody a {
                color: inherit;
                text-decoration: none;
                font-size: inherit;
                font-family: inherit;
                font-weight: inherit;
                line-height: inherit;
            }            .btn-primary table td:hover {
                background-color: #34495e !important;
            }            .btn-primary a:hover {
                background-color: #34495e !important;
                border-color: #34495e !important;
            }
        }        
        &nbsp;
        
                            
                                    
                    
                        
                            
                                
                                                                            
                                                                                
                                            A new appointment has been added to your plan.                                                                                
                                            You can make changes by clicking the appointment link below.                                                                                
                                            Appointment Details                                                                                
                                            
                                                
                                                    Service                                                
                                                
                                                    hair cutting                                                
                                            
                                            
                                                
                                                    Provider                                                
                                                
                                                    vivek kumar                                                
                                            
                                            
                                                
                                                    Start                                                
                                                
                                                    24/07/2026 7:15 am                                                
                                            
                                            
                                                
                                                    End                                                
                                                
                                                    24/07/2026 7:45 am
                                                
                                            
                                            
                                                
                                                    Timezone                                                
                                                
                                                    UTC                                                
                                                                                                                                        
                                                    
                                                        Status                                                    
                                                    
                                                        Booked                                                    
                                                
                                            
                                                                                        
                                                
                                                    Description                                                
                                                
                                                    bfjkebfkerfbj,erbjk                                                
                                            
                                            
                                                                                            
                                                    
                                                        Location                                                    
                                                    
                                                                                                                    noida sec 63                                                                                                            
                                                
                                            
                                            
                                                                                            
                                                    
                                                        Notes                                                    
                                                    
                                                        eghfvegfvw                                                    
                                                
                                                                                                                                                                    
                                            Customer Details                                                                                
                                                                                            
                                                    
                                                        Name                                                    
                                                    
                                                        anshul raj                                                    
                                                
                                            
                                                                                            
                                                    
                                                        Email                                                    
                                                    
                                                        raj973anshul@gmail.com                                                    
                                                
                                            
                                                                                            
                                                    
                                                        Phone Number                                                    
                                                    
                                                        9319163194                                                    
                                                
                                            
                                            
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                        
                                                                                
                                            
                                                
                                                    
                                                        
                                                            
                                                                
                                                                    
                                                                        Reschedule / Cancel Appointment
                                                                    
                                                                
                                                            
                                                        
                                                    
                                                
                                            
                                        
                                        
                                        
                                    
                                
                            
                        
                    
                    
                    
                
                
                                
                
                    
                        
                            
                                Powered by
                                
                                    Easy!Appointments
                                
                                |
                                
                                    Company Name                                
                            
                        
                    
                
                            
        
        &nbsp;
    

--b2=_Cqi7UeCXWtqfZf7IqIMnCMIFDitdTST3lN0WgQ8KhOg
Content-Type: multipart/related;
 boundary="b3=_Cqi7UeCXWtqfZf7IqIMnCMIFDitdTST3lN0WgQ8KhOg";
 type="text/html"

--b3=_Cqi7UeCXWtqfZf7IqIMnCMIFDitdTST3lN0WgQ8KhOg
Content-Type: text/html; charset=us-ascii


<!doctype html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <title>
        Appointment Details | Easy!Appointments
    </title>
    <style>
        /* -------------------------------------
            GLOBAL RESETS
        ------------------------------------- */

        /*All the styling goes here*/

        img {
            border: none;
            -ms-interpolation-mode: bicubic;
            max-width: 100%;
        }

        body {
            background-color: #f6f6f6;
            font-family: sans-serif;
            -webkit-font-smoothing: antialiased;
            font-size: 14px;
            line-height: 1.4;
            margin: 0;
            padding: 0;
            -ms-text-size-adjust: 100%;
            -webkit-text-size-adjust: 100%;
        }

        table {
            border-collapse: separate;
            mso-table-lspace: 0pt;
            mso-table-rspace: 0pt;
            width: 100%;
        }

        table td {
            font-family: sans-serif;
            font-size: 14px;
            vertical-align: top;
        }

        /* -------------------------------------
            BODY & CONTAINER
        ------------------------------------- */

        .body {
            background-color: #f6f6f6;
            width: 100%;
        }

        /* Set a max-width, and make it display as block so it will automatically stretch to that width, but will also shrink down on a phone or something */
        .container {
            display: block;
            margin: 0 auto !important;
            /* makes it centered */
            max-width: 580px;
            padding: 10px;
            width: 580px;
        }

        /* This should also be a block element, so that it will fill 100% of the .container */
        .content {
            box-sizing: border-box;
            display: block;
            margin: 0 auto;
            max-width: 580px;
            padding: 10px;
        }

        /* -------------------------------------
            HEADER, FOOTER, MAIN
        ------------------------------------- */
        .main {
            background: #ffffff;
            border-radius: 3px;
            width: 100%;
        }

        .wrapper {
            box-sizing: border-box;
            padding: 20px;
        }

        .content-block {
            padding-bottom: 10px;
            padding-top: 10px;
        }

        .footer {
            clear: both;
            margin-top: 10px;
            text-align: center;
            width: 100%;
        }

        .footer td,
        .footer p,
        .footer span,
        .footer a {
            color: #999999;
            font-size: 12px;
            text-align: center;
        }

        /* -------------------------------------
            TYPOGRAPHY
        ------------------------------------- */
        h1,
        h2,
        h3,
        h4 {
            color: #000000;
            font-family: sans-serif;
            font-weight: 400;
            line-height: 1.4;
            margin: 0;
            margin-bottom: 15px;
        }

        h1 {
            font-size: 24px;
            font-weight: 300;
            text-align: center;
            margin-bottom: 40px;
        }

        .label {
            width: 120px;
        }

        .details-table {
            margin: 0 0 0 auto;
            width: 85%;
        }

        p,
        ul,
        ol {
            font-family: sans-serif;
            font-size: 14px;
            font-weight: normal;
            margin: 0;
            margin-bottom: 15px;
        }

        p li,
        ul li,
        ol li {
            list-style-position: inside;
            margin-left: 5px;
        }

        a {
            color: #429A82;
            text-decoration: underline;
        }

        /* -------------------------------------
            BUTTONS
        ------------------------------------- */
        .btn {
            box-sizing: border-box;
            width: 100%;
        }

        .btn > tbody > tr > td {
            padding-bottom: 15px;
        }

        .btn table {
            width: auto;
        }

        .btn table td {
            background-color: #ffffff;
            border-radius: 5px;
            text-align: center;
        }

        .btn a {
            background-color: #ffffff;
            border: solid 1px #429A82;
            border-radius: 5px;
            box-sizing: border-box;
            color: #429A82;
            cursor: pointer;
            display: inline-block;
            font-size: 14px;
            font-weight: bold;
            margin: 0;
            padding: 12px 25px;
            text-decoration: none;
        }

        .btn-primary table td {
            background-color: #429A82;
        }

        .btn-primary a {
            background-color: #429A82;
            border-color: #429A82;
            color: #ffffff;
        }

        /* -------------------------------------
            OTHER STYLES THAT MIGHT BE USEFUL
        ------------------------------------- */
        .last {
            margin-bottom: 0;
        }

        .first {
            margin-top: 0;
        }

        .align-center {
            text-align: center;
        }

        .align-right {
            text-align: right;
        }

        .align-left {
            text-align: left;
        }

        .clear {
            clear: both;
        }

        .mt0 {
            margin-top: 0;
        }

        .mb0 {
            margin-bottom: 0;
        }

        .preheader {
            color: transparent;
            display: none;
            height: 0;
            max-height: 0;
            max-width: 0;
            opacity: 0;
            overflow: hidden;
            mso-hide: all;
            visibility: hidden;
            width: 0;
        }

        .powered-by a {
            text-decoration: none;
        }

        hr {
            border: 0;
            border-bottom: 1px solid #f6f6f6;
            margin: 20px 0;
        }

        /* -------------------------------------
            RESPONSIVE AND MOBILE FRIENDLY STYLES
        ------------------------------------- */
        @media only screen and (max-width: 620px) {
            table.body h1 {
                font-size: 28px !important;
                margin-bottom: 10px !important;
            }

            table.body p,
            table.body ul,
            table.body ol,
            table.body td,
            table.body span,
            table.body a {
                font-size: 16px !important;
            }

            table.body .wrapper,
            table.body .article {
                padding: 10px !important;
            }

            table.body .content {
                padding: 0 !important;
            }

            table.body .container {
                padding: 0 !important;
                width: 100% !important;
            }

            table.body .main {
                border-left-width: 0 !important;
                border-radius: 0 !important;
                border-right-width: 0 !important;
            }

            table.body .btn table {
                width: 100% !important;
            }

            table.body .btn a {
                width: 100% !important;
            }

            table.body .img-responsive {
                height: auto !important;
                max-width: 100% !important;
                width: auto !important;
            }
        }

        /* -------------------------------------
            PRESERVE THESE STYLES IN THE HEAD
        ------------------------------------- */
        @media all {
            .ExternalClass {
                width: 100%;
            }

            .ExternalClass,
            .ExternalClass p,
            .ExternalClass span,
            .ExternalClass font,
            .ExternalClass td,
            .ExternalClass div {
                line-height: 100%;
            }

            .apple-link a {
                color: inherit !important;
                font-family: inherit !important;
                font-size: inherit !important;
                font-weight: inherit !important;
                line-height: inherit !important;
                text-decoration: none !important;
            }

            #MessageViewBody a {
                color: inherit;
                text-decoration: none;
                font-size: inherit;
                font-family: inherit;
                font-weight: inherit;
                line-height: inherit;
            }

            .btn-primary table td:hover {
                background-color: #34495e !important;
            }

            .btn-primary a:hover {
                background-color: #34495e !important;
                border-color: #34495e !important;
            }
        }

    </style>
</head>
<body>
<table role="presentation" border="0" cellpadding="0" cellspacing="0" class="body">
    <tr>
        <td>&nbsp;</td>
        <td class="container">
            <div class="content">

                <!-- START CENTERED WHITE CONTAINER -->
                <table role="presentation" class="main">

                    <!-- START MAIN CONTENT AREA -->
                    <tr>
                        <td class="wrapper">
                            <table role="presentation" border="0" cellpadding="0" cellspacing="0">
                                <tr>
                                    <td>

                                        <!-- Logo at the top center, embedded as CID -->
                                        <img src="cid:logo.png" alt="Logo" style="display:block;max-width:67px; margin: auto auto 24px;">

                                        <h1 style="text-align: center;">
                                            A new appointment has been added to your plan.                                        </h1>

                                        <p style="text-align: center;">
                                            You can make changes by clicking the appointment link below.                                        </p>

                                        <h2 style="text-align: center;">
                                            Appointment Details                                        </h2>

                                        <table id="appointment-details" class="details-table" align="center">
                                            <tr>
                                                <td class="label" style="padding: 3px;font-weight: bold;">
                                                    Service                                                </td>
                                                <td style="padding: 3px;">
                                                    hair cutting                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="label" style="padding: 3px;font-weight: bold;">
                                                    Provider                                                </td>
                                                <td style="padding: 3px;">
                                                    vivek kumar                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="label" style="padding: 3px;font-weight: bold;">
                                                    Start                                                </td>
                                                <td style="padding: 3px;">
                                                    24/07/2026 7:15 am                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="label" style="padding: 3px;font-weight: bold;">
                                                    End                                                </td>
                                                <td style="padding: 3px;">
                                                    24/07/2026 7:45 am
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="label" style="padding: 3px;font-weight: bold;">
                                                    Timezone                                                </td>
                                                <td style="padding: 3px;">
                                                    UTC                                                </td>
                                            </tr>

                                                                                            <tr>
                                                    <td class="label" style="padding: 3px;font-weight: bold;">
                                                        Status                                                    </td>
                                                    <td style="padding: 3px;">
                                                        Booked                                                    </td>
                                                </tr>
                                            
                                                                                        <tr>
                                                <td class="label" style="padding: 3px;font-weight: bold;">
                                                    Description                                                </td>
                                                <td style="padding: 3px;">
                                                    bfjkebfkerfbj,erbjk                                                </td>
                                            </tr>
                                            
                                                                                            <tr>
                                                    <td class="label" style="padding: 3px;font-weight: bold;">
                                                        Location                                                    </td>
                                                    <td style="padding: 3px;">
                                                                                                                    noida sec 63                                                                                                            </td>
                                                </tr>
                                            
                                            
                                                                                            <tr>
                                                    <td class="label" style="padding: 3px;font-weight: bold;">
                                                        Notes                                                    </td>
                                                    <td style="padding: 3px;">
                                                        eghfvegfvw                                                    </td>
                                                </tr>
                                                                                    </table>

                                        <br>

                                        <h2 style="text-align: center;">
                                            Customer Details                                        </h2>

                                        <table id="customer-details" class="details-table" align="center">
                                                                                            <tr>
                                                    <td class="label" style="padding: 3px;font-weight: bold;">
                                                        Name                                                    </td>
                                                    <td style="padding: 3px;">
                                                        anshul raj                                                    </td>
                                                </tr>
                                            
                                                                                            <tr>
                                                    <td class="label" style="padding: 3px;font-weight: bold;">
                                                        Email                                                    </td>
                                                    <td style="padding: 3px;">
                                                        raj973anshul@gmail.com                                                    </td>
                                                </tr>
                                            
                                                                                            <tr>
                                                    <td class="label" style="padding: 3px;font-weight: bold;">
                                                        Phone Number                                                    </td>
                                                    <td style="padding: 3px;">
                                                        9319163194                                                    </td>
                                                </tr>
                                            
                                            
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                </table>

                                        <br>
                                        <br>

                                        <table class="btn btn-primary" role="presentation" border="0" cellpadding="0" cellspacing="0">
                                            <tbody>
                                                <tr>
                                                    <td align="center">
                                                        <table role="presentation" border="0" cellpadding="0" cellspacing="0">
                                                            <tbody>
                                                                <tr>
                                                                    <td>
                                                                        <a href="http://localhost/easy/index.php/calendar/reschedule/U3jOlCBIi1TS" target="_blank">Reschedule / Cancel Appointment</a>
                                                                    </td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                        
                                        
                                    </td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                    
                    <!-- END MAIN CONTENT AREA -->
                </table>
                
                <!-- END CENTERED WHITE CONTAINER -->

                <!-- START FOOTER -->
                <div class="footer">
                    <table role="presentation" border="0" cellpadding="0" cellspacing="0">
                        <tr>
                            <td class="content-block powered-by">
                                Powered by
                                <a href="https://easyappointments.org" style="text-decoration: none;">
                                    Easy!Appointments
                                </a>
                                |
                                <a href="https://example.org" style="text-decoration: none;">
                                    Company Name                                </a>
                            </td>
                        </tr>
                    </table>
                </div>
                <!-- END FOOTER -->

            </div>
        </td>
        <td>&nbsp;</td>
    </tr>
</table>
</body>
</html>

--b3=_Cqi7UeCXWtqfZf7IqIMnCMIFDitdTST3lN0WgQ8KhOg
Content-Type: image/png; name=logo.png
Content-Transfer-Encoding: base64
Content-ID: <logo.png>
Content-Disposition: inline; filename=logo.png

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
TkSuQmCC

--b3=_Cqi7UeCXWtqfZf7IqIMnCMIFDitdTST3lN0WgQ8KhOg--


--b2=_Cqi7UeCXWtqfZf7IqIMnCMIFDitdTST3lN0WgQ8KhOg--

--b1=_Cqi7UeCXWtqfZf7IqIMnCMIFDitdTST3lN0WgQ8KhOg
Content-Type: text/calendar; name=invitation.ics
Content-Transfer-Encoding: base64
Content-Disposition: attachment; filename=invitation.ics

QkVHSU46VkNBTEVOREFSDQpWRVJTSU9OOjIuMA0KUFJPRElEOi0vL0Vhc3lBcHBvaW50bWVudHMv
L09wZW4gU291cmNlIFdlYiBTY2hlZHVsZXIvL0VODQpDQUxTQ0FMRTpHUkVHT1JJQU4NCk1FVEhP
RDpSRVFVRVNUDQpCRUdJTjpWVElNRVpPTkUNClRaSUQ6RXVyb3BlL0Jlcmxpbg0KQkVHSU46U1RB
TkRBUkQNCkRUU1RBUlQ6MjAyNjEwMjVUMDEwMDAwWg0KVFpPRkZTRVRUTzorMDEwMA0KVFpPRkZT
RVRGUk9NOiswMjAwDQpSUlVMRTpGUkVRPVlFQVJMWTtCWU1PTlRIPTExO0JZREFZPTFTVQ0KRU5E
OlNUQU5EQVJEDQpCRUdJTjpEQVlMSUdIVA0KRFRTVEFSVDoyMDI2MDMyOVQwMTAwMDBaDQpUWk9G
RlNFVFRPOiswMjAwDQpUWk9GRlNFVEZST006KzAxMDANClJSVUxFOkZSRVE9WUVBUkxZO0JZTU9O
VEg9MztCWURBWT0yU1UNCkVORDpEQVlMSUdIVA0KRU5EOlZUSU1FWk9ORQ0KQkVHSU46VkVWRU5U
DQpVSUQ6ZWEtYzgxZTcyOGQ5ZDRjMmY2MzZmMDY3Zjg5Y2MxNDg2MmMNCkRUU1RBUlQ6MjAyNjA3
MjRUMDcxNTAwWg0KRFRFTkQ6MjAyNjA3MjRUMDc0NTAwWg0KU0VRVUVOQ0U6MTc4NDc5Njg5MA0K
U1RBVFVTOkNPTkZJUk1FRA0KU1VNTUFSWTpoYWlyIGN1dHRpbmcNCkRFU0NSSVBUSU9OOlxuUHJv
dmlkZXJcblxuTmFtZTogdml2ZWsga3VtYXJcbkVtYWlsOiByYWo5NzNhbnNodWxAZ21haWwNCiAu
Y29tXG5QaG9uZSBOdW1iZXI6IFxuQWRkcmVzczogXG5DaXR5OiBcblppcCBDb2RlOiBcblxuQ3Vz
dG9tZXJcblxuTmFtDQogZTogYW5zaHVsIHJhalxuRW1haWw6IHJhajk3M2Fuc2h1bEBnbWFpbC5j
b21cblBob25lIE51bWJlcjogOTMxOTE2MzE5NA0KIFxuQWRkcmVzczogXG5DaXR5OiBcblppcCBD
b2RlOiBcblxuTm90ZXNcblxuZWdoZnZlZ2Z2dw0KTE9DQVRJT046bm9pZGEgc2VjIDYzDQpEVFNU
QU1QOjIwMjYwNzIzVDA4NTQ1MVoNCkFUVEVOREVFO0NVVFlQRT1JTkRJVklEVUFMO1JPTEU9UkVR
LVBBUlRJQ0lQQU5UO1BBUlRTVEFUPU5FRURTLUFDVElPTjsNCiBSU1ZQPVRSVUU7Q049YW5zaHVs
IHJhajptYWlsdG86cmFqOTczYW5zaHVsQGdtYWlsLmNvbQ0KQVRURU5ERUU7Q1VUWVBFPUlORElW
SURVQUw7Uk9MRT1SRVEtUEFSVElDSVBBTlQ7UEFSVFNUQVQ9QUNDRVBURUQ7UlNWUA0KID1GQUxT
RTtDTj12aXZlayBrdW1hcjptYWlsdG86cmFqOTczYW5zaHVsQGdtYWlsLmNvbQ0KT1JHQU5JWkVS
O0NOPXZpdmVrIGt1bWFyOm1haWx0bzpyYWo5NzNhbnNodWxAZ21haWwuY29tDQpCRUdJTjpWQUxB
Uk0NClRSSUdHRVI7VkFMVUU9REFURS1USU1FOjIwMjYwNzI0VDA3MDAwMFoNCkFDVElPTjpFTUFJ
TA0KU1VNTUFSWTpBbGFybSBub3RpZmljYXRpb24NCkRFU0NSSVBUSU9OOlRoaXMgaXMgYW4gZXZl
bnQgcmVtaW5kZXINCkFUVEVOREVFO0NVVFlQRT1JTkRJVklEVUFMO1JPTEU9UkVRLVBBUlRJQ0lQ
QU5UO1BBUlRTVEFUPU5FRURTLUFDVElPTjsNCiBSU1ZQPVRSVUU7Q049YW5zaHVsIHJhajptYWls
dG86cmFqOTczYW5zaHVsQGdtYWlsLmNvbQ0KRU5EOlZBTEFSTQ0KQkVHSU46VkFMQVJNDQpUUklH
R0VSO1ZBTFVFPURBVEUtVElNRToyMDI2MDcyNFQwNjE1MDBaDQpBQ1RJT046RU1BSUwNClNVTU1B
Ulk6QWxhcm0gbm90aWZpY2F0aW9uDQpERVNDUklQVElPTjpUaGlzIGlzIGFuIGV2ZW50IHJlbWlu
ZGVyDQpBVFRFTkRFRTtDVVRZUEU9SU5ESVZJRFVBTDtST0xFPVJFUS1QQVJUSUNJUEFOVDtQQVJU
U1RBVD1ORUVEUy1BQ1RJT047DQogUlNWUD1UUlVFO0NOPWFuc2h1bCByYWo6bWFpbHRvOnJhajk3
M2Fuc2h1bEBnbWFpbC5jb20NCkVORDpWQUxBUk0NCkVORDpWRVZFTlQNCkVORDpWQ0FMRU5EQVIN
Cg==

--b1=_Cqi7UeCXWtqfZf7IqIMnCMIFDitdTST3lN0WgQ8KhOg--
',
            ),
          ),
          1 => 
          array (
            'file' => 'C:\\xampp\\htdocs\\easy\\vendor\\phpmailer\\phpmailer\\src\\PHPMailer.php',
            'line' => 1670,
            'function' => 'postSend',
            'class' => 'PHPMailer\\PHPMailer\\PHPMailer',
            'type' => '->',
            'args' => 
            array (
            ),
          ),
          2 => 
          array (
            'file' => 'C:\\xampp\\htdocs\\easy\\application\\libraries\\Email_messages.php',
            'line' => 119,
            'function' => 'send',
            'class' => 'PHPMailer\\PHPMailer\\PHPMailer',
            'type' => '->',
            'args' => 
            array (
            ),
          ),
          3 => 
          array (
            'file' => 'C:\\xampp\\htdocs\\easy\\application\\libraries\\Notifications.php',
            'line' => 147,
            'function' => 'send_appointment_saved',
            'class' => 'Email_messages',
            'type' => '->',
            'args' => 
            array (
              0 => 
              array (
                'id' => 2,
                'create_datetime' => '2026-07-23 10:54:50',
                'update_datetime' => '2026-07-23 10:54:50',
                'book_datetime' => '2026-07-23 10:54:50',
                'start_datetime' => '2026-07-24 07:15:00',
                'end_datetime' => '2026-07-24 07:45:00',
                'location' => 'noida sec 63',
                'meeting_link' => NULL,
                'notes' => 'eghfvegfvw',
                'hash' => 'U3jOlCBIi1TS',
                'color' => '#7cbae8',
                'status' => 'Booked',
                'is_unavailability' => false,
                'id_users_provider' => 5,
                'id_users_customer' => 6,
                'id_services' => 2,
                'id_google_calendar' => NULL,
                'id_caldav_calendar' => NULL,
              ),
              1 => 
              array (
                'id' => 5,
                'create_datetime' => '2026-07-22 13:13:04',
                'update_datetime' => '2026-07-22 13:13:04',
                'first_name' => 'vivek',
                'last_name' => 'kumar',
                'email' => 'raj973anshul@gmail.com',
                'mobile_number' => NULL,
                'phone_number' => '',
                'address' => '',
                'city' => '',
                'state' => '',
                'zip_code' => '',
                'notes' => '',
                'timezone' => 'Europe/Berlin',
                'language' => 'english',
                'custom_field_1' => NULL,
                'custom_field_2' => NULL,
                'custom_field_3' => NULL,
                'custom_field_4' => NULL,
                'custom_field_5' => NULL,
                'is_private' => false,
                'ldap_dn' => NULL,
                'id_roles' => 2,
                'settings' => 
                array (
                  'username' => 'vivekkumar',
                  'password_reset_token' => NULL,
                  'password_reset_expires' => NULL,
                  'working_plan' => '{"sunday":{"start":"09:00","end":"18:00","breaks":[{"start":"14:30","end":"15:00"}]},"monday":{"start":"09:00","end":"18:00","breaks":[{"start":"14:30","end":"15:00"}]},"tuesday":{"start":"09:00","end":"18:00","breaks":[{"start":"14:30","end":"15:00"}]},"wednesday":{"start":"09:00","end":"18:00","breaks":[{"start":"14:30","end":"15:00"}]},"thursday":{"start":"09:00","end":"18:00","breaks":[{"start":"14:30","end":"15:00"}]},"friday":{"start":"09:00","end":"18:00","breaks":[{"start":"14:30","end":"15:00"}]},"saturday":{"start":"09:00","end":"18:00","breaks":[{"start":"14:30","end":"15:00"}]}}',
                  'working_plan_exceptions' => '[]',
                  'notifications' => '1',
                  'google_sync' => NULL,
                  'google_token' => NULL,
                  'google_calendar' => NULL,
                  'caldav_sync' => '0',
                  'caldav_url' => NULL,
                  'caldav_username' => NULL,
                  'caldav_password' => NULL,
                  'sync_past_days' => '30',
                  'sync_future_days' => '90',
                  'calendar_view' => 'table',
                ),
                'services' => 
                array (
                  0 => 1,
                  1 => 2,
                ),
              ),
              2 => 
              array (
                'id' => 2,
                'create_datetime' => '2026-07-23 10:51:48',
                'update_datetime' => '2026-07-23 10:51:48',
                'name' => 'hair cutting',
                'duration' => '30',
                'price' => 50.0,
                'currency' => '',
                'description' => 'bfjkebfkerfbj,erbjk',
                'slot_interval' => '15',
                'color' => '#7cbae8',
                'location' => 'noida sec 63',
                'attendants_number' => 1,
                'is_private' => false,
                'id_service_categories' => 1,
              ),
              3 => 
              array (
                'id' => 6,
                'create_datetime' => '2026-07-23 10:54:50',
                'update_datetime' => '2026-07-23 10:54:50',
                'first_name' => 'anshul',
                'last_name' => 'raj',
                'email' => 'raj973anshul@gmail.com',
                'mobile_number' => NULL,
                'phone_number' => '9319163194',
                'address' => '',
                'city' => '',
                'state' => NULL,
                'zip_code' => '',
                'notes' => NULL,
                'timezone' => 'Asia/Calcutta',
                'language' => 'english',
                'custom_field_1' => NULL,
                'custom_field_2' => NULL,
                'custom_field_3' => NULL,
                'custom_field_4' => NULL,
                'custom_field_5' => NULL,
                'is_private' => '0',
                'ldap_dn' => NULL,
                'id_roles' => 3,
              ),
              4 => 
              array (
                'company_name' => 'Company Name',
                'company_link' => 'https://example.org',
                'company_email' => 'info@example.org',
                'company_color' => NULL,
                'date_format' => 'DMY',
                'time_format' => 'regular',
              ),
              5 => 'A new appointment has been added to your plan.',
              6 => 'You can make changes by clicking the appointment link below.',
              7 => 'http://localhost/easy/index.php/calendar/reschedule/U3jOlCBIi1TS',
              8 => 'john@example.org',
              9 => 'BEGIN:VCALENDAR
VERSION:2.0
PRODID:-//EasyAppointments//Open Source Web Scheduler//EN
CALSCALE:GREGORIAN
METHOD:REQUEST
BEGIN:VTIMEZONE
TZID:Europe/Berlin
BEGIN:STANDARD
DTSTART:20261025T010000Z
TZOFFSETTO:+0100
TZOFFSETFROM:+0200
RRULE:FREQ=YEARLY;BYMONTH=11;BYDAY=1SU
END:STANDARD
BEGIN:DAYLIGHT
DTSTART:20260329T010000Z
TZOFFSETTO:+0200
TZOFFSETFROM:+0100
RRULE:FREQ=YEARLY;BYMONTH=3;BYDAY=2SU
END:DAYLIGHT
END:VTIMEZONE
BEGIN:VEVENT
UID:ea-c81e728d9d4c2f636f067f89cc14862c
DTSTART:20260724T071500Z
DTEND:20260724T074500Z
SEQUENCE:1784796890
STATUS:CONFIRMED
SUMMARY:hair cutting
DESCRIPTION:\\nProvider\\n\\nName: vivek kumar\\nEmail: raj973anshul@gmail
 .com\\nPhone Number: \\nAddress: \\nCity: \\nZip Code: \\n\\nCustomer\\n\\nNam
 e: anshul raj\\nEmail: raj973anshul@gmail.com\\nPhone Number: 9319163194
 \\nAddress: \\nCity: \\nZip Code: \\n\\nNotes\\n\\neghfvegfvw
LOCATION:noida sec 63
DTSTAMP:20260723T085451Z
ATTENDEE;CUTYPE=INDIVIDUAL;ROLE=REQ-PARTICIPANT;PARTSTAT=NEEDS-ACTION;
 RSVP=TRUE;CN=anshul raj:mailto:raj973anshul@gmail.com
ATTENDEE;CUTYPE=INDIVIDUAL;ROLE=REQ-PARTICIPANT;PARTSTAT=ACCEPTED;RSVP
 =FALSE;CN=vivek kumar:mailto:raj973anshul@gmail.com
ORGANIZER;CN=vivek kumar:mailto:raj973anshul@gmail.com
BEGIN:VALARM
TRIGGER;VALUE=DATE-TIME:20260724T070000Z
ACTION:EMAIL
SUMMARY:Alarm notification
DESCRIPTION:This is an event reminder
ATTENDEE;CUTYPE=INDIVIDUAL;ROLE=REQ-PARTICIPANT;PARTSTAT=NEEDS-ACTION;
 RSVP=TRUE;CN=anshul raj:mailto:raj973anshul@gmail.com
END:VALARM
BEGIN:VALARM
TRIGGER;VALUE=DATE-TIME:20260724T061500Z
ACTION:EMAIL
SUMMARY:Alarm notification
DESCRIPTION:This is an event reminder
ATTENDEE;CUTYPE=INDIVIDUAL;ROLE=REQ-PARTICIPANT;PARTSTAT=NEEDS-ACTION;
 RSVP=TRUE;CN=anshul raj:mailto:raj973anshul@gmail.com
END:VALARM
END:VEVENT
END:VCALENDAR
',
              10 => 'UTC',
            ),
          ),
          4 => 
          array (
            'file' => 'C:\\xampp\\htdocs\\easy\\application\\controllers\\Booking.php',
            'line' => 567,
            'function' => 'notify_appointment_saved',
            'class' => 'Notifications',
            'type' => '->',
            'args' => 
            array (
              0 => 
              array (
                'id' => 2,
                'create_datetime' => '2026-07-23 10:54:50',
                'update_datetime' => '2026-07-23 10:54:50',
                'book_datetime' => '2026-07-23 10:54:50',
                'start_datetime' => '2026-07-24 09:15:00',
                'end_datetime' => '2026-07-24 09:45:00',
                'location' => 'noida sec 63',
                'meeting_link' => NULL,
                'notes' => 'eghfvegfvw',
                'hash' => 'U3jOlCBIi1TS',
                'color' => '#7cbae8',
                'status' => 'Booked',
                'is_unavailability' => false,
                'id_users_provider' => 5,
                'id_users_customer' => 6,
                'id_services' => 2,
                'id_google_calendar' => NULL,
                'id_caldav_calendar' => NULL,
              ),
              1 => 
              array (
                'id' => 2,
                'create_datetime' => '2026-07-23 10:51:48',
                'update_datetime' => '2026-07-23 10:51:48',
                'name' => 'hair cutting',
                'duration' => '30',
                'price' => 50.0,
                'currency' => '',
                'description' => 'bfjkebfkerfbj,erbjk',
                'slot_interval' => '15',
                'color' => '#7cbae8',
                'location' => 'noida sec 63',
                'attendants_number' => 1,
                'is_private' => false,
                'id_service_categories' => 1,
              ),
              2 => 
              array (
                'id' => 5,
                'create_datetime' => '2026-07-22 13:13:04',
                'update_datetime' => '2026-07-22 13:13:04',
                'first_name' => 'vivek',
                'last_name' => 'kumar',
                'email' => 'raj973anshul@gmail.com',
                'mobile_number' => NULL,
                'phone_number' => '',
                'address' => '',
                'city' => '',
                'state' => '',
                'zip_code' => '',
                'notes' => '',
                'timezone' => 'Europe/Berlin',
                'language' => 'english',
                'custom_field_1' => NULL,
                'custom_field_2' => NULL,
                'custom_field_3' => NULL,
                'custom_field_4' => NULL,
                'custom_field_5' => NULL,
                'is_private' => false,
                'ldap_dn' => NULL,
                'id_roles' => 2,
                'settings' => 
                array (
                  'username' => 'vivekkumar',
                  'password_reset_token' => NULL,
                  'password_reset_expires' => NULL,
                  'working_plan' => '{"sunday":{"start":"09:00","end":"18:00","breaks":[{"start":"14:30","end":"15:00"}]},"monday":{"start":"09:00","end":"18:00","breaks":[{"start":"14:30","end":"15:00"}]},"tuesday":{"start":"09:00","end":"18:00","breaks":[{"start":"14:30","end":"15:00"}]},"wednesday":{"start":"09:00","end":"18:00","breaks":[{"start":"14:30","end":"15:00"}]},"thursday":{"start":"09:00","end":"18:00","breaks":[{"start":"14:30","end":"15:00"}]},"friday":{"start":"09:00","end":"18:00","breaks":[{"start":"14:30","end":"15:00"}]},"saturday":{"start":"09:00","end":"18:00","breaks":[{"start":"14:30","end":"15:00"}]}}',
                  'working_plan_exceptions' => '[]',
                  'notifications' => '1',
                  'google_sync' => NULL,
                  'google_token' => NULL,
                  'google_calendar' => NULL,
                  'caldav_sync' => '0',
                  'caldav_url' => NULL,
                  'caldav_username' => NULL,
                  'caldav_password' => NULL,
                  'sync_past_days' => '30',
                  'sync_future_days' => '90',
                  'calendar_view' => 'table',
                ),
                'services' => 
                array (
                  0 => 1,
                  1 => 2,
                ),
              ),
              3 => 
              array (
                'id' => 6,
                'create_datetime' => '2026-07-23 10:54:50',
                'update_datetime' => '2026-07-23 10:54:50',
                'first_name' => 'anshul',
                'last_name' => 'raj',
                'email' => 'raj973anshul@gmail.com',
                'mobile_number' => NULL,
                'phone_number' => '9319163194',
                'address' => '',
                'city' => '',
                'state' => NULL,
                'zip_code' => '',
                'notes' => NULL,
                'timezone' => 'Asia/Calcutta',
                'language' => 'english',
                'custom_field_1' => NULL,
                'custom_field_2' => NULL,
                'custom_field_3' => NULL,
                'custom_field_4' => NULL,
                'custom_field_5' => NULL,
                'is_private' => '0',
                'ldap_dn' => NULL,
                'id_roles' => 3,
              ),
              4 => 
              array (
                'company_name' => 'Company Name',
                'company_link' => 'https://example.org',
                'company_email' => 'info@example.org',
                'company_color' => NULL,
                'date_format' => 'DMY',
                'time_format' => 'regular',
              ),
              5 => false,
            ),
          ),
          5 => 
          array (
            'file' => 'C:\\xampp\\htdocs\\easy\\system\\core\\CodeIgniter.php',
            'line' => 481,
            'function' => 'register',
            'class' => 'Booking',
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
      )),
      1 => 'appointment-saved to admin',
      2 => 2,
    ),
  ),
  2 => 
  array (
    'file' => 'C:\\xampp\\htdocs\\easy\\application\\controllers\\Booking.php',
    'line' => 567,
    'function' => 'notify_appointment_saved',
    'class' => 'Notifications',
    'type' => '->',
    'args' => 
    array (
      0 => 
      array (
        'id' => 2,
        'create_datetime' => '2026-07-23 10:54:50',
        'update_datetime' => '2026-07-23 10:54:50',
        'book_datetime' => '2026-07-23 10:54:50',
        'start_datetime' => '2026-07-24 09:15:00',
        'end_datetime' => '2026-07-24 09:45:00',
        'location' => 'noida sec 63',
        'meeting_link' => NULL,
        'notes' => 'eghfvegfvw',
        'hash' => 'U3jOlCBIi1TS',
        'color' => '#7cbae8',
        'status' => 'Booked',
        'is_unavailability' => false,
        'id_users_provider' => 5,
        'id_users_customer' => 6,
        'id_services' => 2,
        'id_google_calendar' => NULL,
        'id_caldav_calendar' => NULL,
      ),
      1 => 
      array (
        'id' => 2,
        'create_datetime' => '2026-07-23 10:51:48',
        'update_datetime' => '2026-07-23 10:51:48',
        'name' => 'hair cutting',
        'duration' => '30',
        'price' => 50.0,
        'currency' => '',
        'description' => 'bfjkebfkerfbj,erbjk',
        'slot_interval' => '15',
        'color' => '#7cbae8',
        'location' => 'noida sec 63',
        'attendants_number' => 1,
        'is_private' => false,
        'id_service_categories' => 1,
      ),
      2 => 
      array (
        'id' => 5,
        'create_datetime' => '2026-07-22 13:13:04',
        'update_datetime' => '2026-07-22 13:13:04',
        'first_name' => 'vivek',
        'last_name' => 'kumar',
        'email' => 'raj973anshul@gmail.com',
        'mobile_number' => NULL,
        'phone_number' => '',
        'address' => '',
        'city' => '',
        'state' => '',
        'zip_code' => '',
        'notes' => '',
        'timezone' => 'Europe/Berlin',
        'language' => 'english',
        'custom_field_1' => NULL,
        'custom_field_2' => NULL,
        'custom_field_3' => NULL,
        'custom_field_4' => NULL,
        'custom_field_5' => NULL,
        'is_private' => false,
        'ldap_dn' => NULL,
        'id_roles' => 2,
        'settings' => 
        array (
          'username' => 'vivekkumar',
          'password_reset_token' => NULL,
          'password_reset_expires' => NULL,
          'working_plan' => '{"sunday":{"start":"09:00","end":"18:00","breaks":[{"start":"14:30","end":"15:00"}]},"monday":{"start":"09:00","end":"18:00","breaks":[{"start":"14:30","end":"15:00"}]},"tuesday":{"start":"09:00","end":"18:00","breaks":[{"start":"14:30","end":"15:00"}]},"wednesday":{"start":"09:00","end":"18:00","breaks":[{"start":"14:30","end":"15:00"}]},"thursday":{"start":"09:00","end":"18:00","breaks":[{"start":"14:30","end":"15:00"}]},"friday":{"start":"09:00","end":"18:00","breaks":[{"start":"14:30","end":"15:00"}]},"saturday":{"start":"09:00","end":"18:00","breaks":[{"start":"14:30","end":"15:00"}]}}',
          'working_plan_exceptions' => '[]',
          'notifications' => '1',
          'google_sync' => NULL,
          'google_token' => NULL,
          'google_calendar' => NULL,
          'caldav_sync' => '0',
          'caldav_url' => NULL,
          'caldav_username' => NULL,
          'caldav_password' => NULL,
          'sync_past_days' => '30',
          'sync_future_days' => '90',
          'calendar_view' => 'table',
        ),
        'services' => 
        array (
          0 => 1,
          1 => 2,
        ),
      ),
      3 => 
      array (
        'id' => 6,
        'create_datetime' => '2026-07-23 10:54:50',
        'update_datetime' => '2026-07-23 10:54:50',
        'first_name' => 'anshul',
        'last_name' => 'raj',
        'email' => 'raj973anshul@gmail.com',
        'mobile_number' => NULL,
        'phone_number' => '9319163194',
        'address' => '',
        'city' => '',
        'state' => NULL,
        'zip_code' => '',
        'notes' => NULL,
        'timezone' => 'Asia/Calcutta',
        'language' => 'english',
        'custom_field_1' => NULL,
        'custom_field_2' => NULL,
        'custom_field_3' => NULL,
        'custom_field_4' => NULL,
        'custom_field_5' => NULL,
        'is_private' => '0',
        'ldap_dn' => NULL,
        'id_roles' => 3,
      ),
      4 => 
      array (
        'company_name' => 'Company Name',
        'company_link' => 'https://example.org',
        'company_email' => 'info@example.org',
        'company_color' => NULL,
        'date_format' => 'DMY',
        'time_format' => 'regular',
      ),
      5 => false,
    ),
  ),
)
ERROR - 2026-07-23 11:07:21 --> Notifications - Could not email appointment-saved to customer (3) : Could not instantiate mail function. Trace: array (
  0 => 
  array (
    'file' => 'C:\\xampp\\htdocs\\easy\\application\\libraries\\Notifications.php',
    'line' => 352,
    'function' => 'log_message',
    'args' => 
    array (
      0 => 'error',
      1 => 'Notifications - Could not email appointment-saved to customer (3) : Could not instantiate mail function.',
    ),
  ),
  1 => 
  array (
    'file' => 'C:\\xampp\\htdocs\\easy\\application\\libraries\\Notifications.php',
    'line' => 98,
    'function' => 'log_exception',
    'class' => 'Notifications',
    'type' => '->',
    'args' => 
    array (
      0 => 
      \PHPMailer\PHPMailer\Exception::__set_state(array(
         'message' => 'Could not instantiate mail function.',
         'string' => '',
         'code' => 2,
         'file' => 'C:\\xampp\\htdocs\\easy\\vendor\\phpmailer\\phpmailer\\src\\PHPMailer.php',
         'line' => 2150,
         'trace' => 
        array (
          0 => 
          array (
            'file' => 'C:\\xampp\\htdocs\\easy\\vendor\\phpmailer\\phpmailer\\src\\PHPMailer.php',
            'line' => 1857,
            'function' => 'mailSend',
            'class' => 'PHPMailer\\PHPMailer\\PHPMailer',
            'type' => '->',
            'args' => 
            array (
              0 => 'Date: Thu, 23 Jul 2026 11:07:19 +0200
From: Company Name <info@example.org>
Reply-To: info@example.org
Message-ID: <unsRqEKN9t5LHmGdGjiU75nwKH74yLtMFc7LjtE@localhost>
X-Mailer: PHPMailer 7.1.1 (https://github.com/PHPMailer/PHPMailer)
MIME-Version: 1.0
Content-Type: multipart/mixed;
 boundary="b1=_unsRqEKN9t5LHmGdGjiU75nwKH74yLtMFc7LjtE"
Content-Transfer-Encoding: 8bit

',
              1 => '--b1=_unsRqEKN9t5LHmGdGjiU75nwKH74yLtMFc7LjtE
Content-Type: multipart/alternative;
 boundary="b2=_unsRqEKN9t5LHmGdGjiU75nwKH74yLtMFc7LjtE"

--b2=_unsRqEKN9t5LHmGdGjiU75nwKH74yLtMFc7LjtE
Content-Type: text/plain; charset=us-ascii

    
    
    
        Appointment Details | Easy!Appointments
    
    
        /* -------------------------------------
            GLOBAL RESETS
        ------------------------------------- */        /*All the styling goes here*/        img {
            border: none;
            -ms-interpolation-mode: bicubic;
            max-width: 100%;
        }        body {
            background-color: #f6f6f6;
            font-family: sans-serif;
            -webkit-font-smoothing: antialiased;
            font-size: 14px;
            line-height: 1.4;
            margin: 0;
            padding: 0;
            -ms-text-size-adjust: 100%;
            -webkit-text-size-adjust: 100%;
        }        table {
            border-collapse: separate;
            mso-table-lspace: 0pt;
            mso-table-rspace: 0pt;
            width: 100%;
        }        table td {
            font-family: sans-serif;
            font-size: 14px;
            vertical-align: top;
        }        /* -------------------------------------
            BODY & CONTAINER
        ------------------------------------- */        .body {
            background-color: #f6f6f6;
            width: 100%;
        }        /* Set a max-width, and make it display as block so it will automatically stretch to that width, but will also shrink down on a phone or something */
        .container {
            display: block;
            margin: 0 auto !important;
            /* makes it centered */
            max-width: 580px;
            padding: 10px;
            width: 580px;
        }        /* This should also be a block element, so that it will fill 100% of the .container */
        .content {
            box-sizing: border-box;
            display: block;
            margin: 0 auto;
            max-width: 580px;
            padding: 10px;
        }        /* -------------------------------------
            HEADER, FOOTER, MAIN
        ------------------------------------- */
        .main {
            background: #ffffff;
            border-radius: 3px;
            width: 100%;
        }        .wrapper {
            box-sizing: border-box;
            padding: 20px;
        }        .content-block {
            padding-bottom: 10px;
            padding-top: 10px;
        }        .footer {
            clear: both;
            margin-top: 10px;
            text-align: center;
            width: 100%;
        }        .footer td,
        .footer p,
        .footer span,
        .footer a {
            color: #999999;
            font-size: 12px;
            text-align: center;
        }        /* -------------------------------------
            TYPOGRAPHY
        ------------------------------------- */
        h1,
        h2,
        h3,
        h4 {
            color: #000000;
            font-family: sans-serif;
            font-weight: 400;
            line-height: 1.4;
            margin: 0;
            margin-bottom: 15px;
        }        h1 {
            font-size: 24px;
            font-weight: 300;
            text-align: center;
            margin-bottom: 40px;
        }        .label {
            width: 120px;
        }        .details-table {
            margin: 0 0 0 auto;
            width: 85%;
        }        p,
        ul,
        ol {
            font-family: sans-serif;
            font-size: 14px;
            font-weight: normal;
            margin: 0;
            margin-bottom: 15px;
        }        p li,
        ul li,
        ol li {
            list-style-position: inside;
            margin-left: 5px;
        }        a {
            color: #429A82;
            text-decoration: underline;
        }        /* -------------------------------------
            BUTTONS
        ------------------------------------- */
        .btn {
            box-sizing: border-box;
            width: 100%;
        }        .btn > tbody > tr > td {
            padding-bottom: 15px;
        }        .btn table {
            width: auto;
        }        .btn table td {
            background-color: #ffffff;
            border-radius: 5px;
            text-align: center;
        }        .btn a {
            background-color: #ffffff;
            border: solid 1px #429A82;
            border-radius: 5px;
            box-sizing: border-box;
            color: #429A82;
            cursor: pointer;
            display: inline-block;
            font-size: 14px;
            font-weight: bold;
            margin: 0;
            padding: 12px 25px;
            text-decoration: none;
        }        .btn-primary table td {
            background-color: #429A82;
        }        .btn-primary a {
            background-color: #429A82;
            border-color: #429A82;
            color: #ffffff;
        }        /* -------------------------------------
            OTHER STYLES THAT MIGHT BE USEFUL
        ------------------------------------- */
        .last {
            margin-bottom: 0;
        }        .first {
            margin-top: 0;
        }        .align-center {
            text-align: center;
        }        .align-right {
            text-align: right;
        }        .align-left {
            text-align: left;
        }        .clear {
            clear: both;
        }        .mt0 {
            margin-top: 0;
        }        .mb0 {
            margin-bottom: 0;
        }        .preheader {
            color: transparent;
            display: none;
            height: 0;
            max-height: 0;
            max-width: 0;
            opacity: 0;
            overflow: hidden;
            mso-hide: all;
            visibility: hidden;
            width: 0;
        }        .powered-by a {
            text-decoration: none;
        }        hr {
            border: 0;
            border-bottom: 1px solid #f6f6f6;
            margin: 20px 0;
        }        /* -------------------------------------
            RESPONSIVE AND MOBILE FRIENDLY STYLES
        ------------------------------------- */
        @media only screen and (max-width: 620px) {
            table.body h1 {
                font-size: 28px !important;
                margin-bottom: 10px !important;
            }            table.body p,
            table.body ul,
            table.body ol,
            table.body td,
            table.body span,
            table.body a {
                font-size: 16px !important;
            }            table.body .wrapper,
            table.body .article {
                padding: 10px !important;
            }            table.body .content {
                padding: 0 !important;
            }            table.body .container {
                padding: 0 !important;
                width: 100% !important;
            }            table.body .main {
                border-left-width: 0 !important;
                border-radius: 0 !important;
                border-right-width: 0 !important;
            }            table.body .btn table {
                width: 100% !important;
            }            table.body .btn a {
                width: 100% !important;
            }            table.body .img-responsive {
                height: auto !important;
                max-width: 100% !important;
                width: auto !important;
            }
        }        /* -------------------------------------
            PRESERVE THESE STYLES IN THE HEAD
        ------------------------------------- */
        @media all {
            .ExternalClass {
                width: 100%;
            }            .ExternalClass,
            .ExternalClass p,
            .ExternalClass span,
            .ExternalClass font,
            .ExternalClass td,
            .ExternalClass div {
                line-height: 100%;
            }            .apple-link a {
                color: inherit !important;
                font-family: inherit !important;
                font-size: inherit !important;
                font-weight: inherit !important;
                line-height: inherit !important;
                text-decoration: none !important;
            }            #MessageViewBody a {
                color: inherit;
                text-decoration: none;
                font-size: inherit;
                font-family: inherit;
                font-weight: inherit;
                line-height: inherit;
            }            .btn-primary table td:hover {
                background-color: #34495e !important;
            }            .btn-primary a:hover {
                background-color: #34495e !important;
                border-color: #34495e !important;
            }
        }        
        &nbsp;
        
                            
                                    
                    
                        
                            
                                
                                                                            
                                                                                
                                            Your appointment has been successfully booked                                                                                
                                            Thank you for arranging an appointment with us. Below you can see the appointment details. Make changes by clicking the appointment link.                                                                                
                                            Appointment Details                                                                                
                                            
                                                
                                                    Service                                                
                                                
                                                    hair cutting                                                
                                            
                                            
                                                
                                                    Provider                                                
                                                
                                                    vivek kumar                                                
                                            
                                            
                                                
                                                    Start                                                
                                                
                                                    22/07/2026 7:00 am                                                
                                            
                                            
                                                
                                                    End                                                
                                                
                                                    22/07/2026 7:30 am
                                                
                                            
                                            
                                                
                                                    Timezone                                                
                                                
                                                    UTC                                                
                                                                                                                                        
                                                    
                                                        Status                                                    
                                                    
                                                        Confirmed                                                    
                                                
                                            
                                                                                        
                                                
                                                    Description                                                
                                                
                                                    bfjkebfkerfbj,erbjk                                                
                                            
                                            
                                            
                                            
                                                                                                                                                                    
                                            Customer Details                                                                                
                                                                                            
                                                    
                                                        Name                                                    
                                                    
                                                        James Doe                                                    
                                                
                                            
                                                                                            
                                                    
                                                        Email                                                    
                                                    
                                                        james@example.org                                                    
                                                
                                            
                                                                                            
                                                    
                                                        Phone Number                                                    
                                                    
                                                        +10000000000                                                    
                                                
                                            
                                            
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                        
                                                                                
                                            
                                                
                                                    
                                                        
                                                            
                                                                
                                                                    
                                                                        Reschedule / Cancel Appointment
                                                                    
                                                                
                                                            
                                                        
                                                    
                                                
                                            
                                        
                                        
                                        
                                    
                                
                            
                        
                    
                    
                    
                
                
                                
                
                    
                        
                            
                                Powered by
                                
                                    Easy!Appointments
                                
                                |
                                
                                    Company Name                                
                            
                        
                    
                
                            
        
        &nbsp;
    

--b2=_unsRqEKN9t5LHmGdGjiU75nwKH74yLtMFc7LjtE
Content-Type: multipart/related;
 boundary="b3=_unsRqEKN9t5LHmGdGjiU75nwKH74yLtMFc7LjtE";
 type="text/html"

--b3=_unsRqEKN9t5LHmGdGjiU75nwKH74yLtMFc7LjtE
Content-Type: text/html; charset=us-ascii


<!doctype html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <title>
        Appointment Details | Easy!Appointments
    </title>
    <style>
        /* -------------------------------------
            GLOBAL RESETS
        ------------------------------------- */

        /*All the styling goes here*/

        img {
            border: none;
            -ms-interpolation-mode: bicubic;
            max-width: 100%;
        }

        body {
            background-color: #f6f6f6;
            font-family: sans-serif;
            -webkit-font-smoothing: antialiased;
            font-size: 14px;
            line-height: 1.4;
            margin: 0;
            padding: 0;
            -ms-text-size-adjust: 100%;
            -webkit-text-size-adjust: 100%;
        }

        table {
            border-collapse: separate;
            mso-table-lspace: 0pt;
            mso-table-rspace: 0pt;
            width: 100%;
        }

        table td {
            font-family: sans-serif;
            font-size: 14px;
            vertical-align: top;
        }

        /* -------------------------------------
            BODY & CONTAINER
        ------------------------------------- */

        .body {
            background-color: #f6f6f6;
            width: 100%;
        }

        /* Set a max-width, and make it display as block so it will automatically stretch to that width, but will also shrink down on a phone or something */
        .container {
            display: block;
            margin: 0 auto !important;
            /* makes it centered */
            max-width: 580px;
            padding: 10px;
            width: 580px;
        }

        /* This should also be a block element, so that it will fill 100% of the .container */
        .content {
            box-sizing: border-box;
            display: block;
            margin: 0 auto;
            max-width: 580px;
            padding: 10px;
        }

        /* -------------------------------------
            HEADER, FOOTER, MAIN
        ------------------------------------- */
        .main {
            background: #ffffff;
            border-radius: 3px;
            width: 100%;
        }

        .wrapper {
            box-sizing: border-box;
            padding: 20px;
        }

        .content-block {
            padding-bottom: 10px;
            padding-top: 10px;
        }

        .footer {
            clear: both;
            margin-top: 10px;
            text-align: center;
            width: 100%;
        }

        .footer td,
        .footer p,
        .footer span,
        .footer a {
            color: #999999;
            font-size: 12px;
            text-align: center;
        }

        /* -------------------------------------
            TYPOGRAPHY
        ------------------------------------- */
        h1,
        h2,
        h3,
        h4 {
            color: #000000;
            font-family: sans-serif;
            font-weight: 400;
            line-height: 1.4;
            margin: 0;
            margin-bottom: 15px;
        }

        h1 {
            font-size: 24px;
            font-weight: 300;
            text-align: center;
            margin-bottom: 40px;
        }

        .label {
            width: 120px;
        }

        .details-table {
            margin: 0 0 0 auto;
            width: 85%;
        }

        p,
        ul,
        ol {
            font-family: sans-serif;
            font-size: 14px;
            font-weight: normal;
            margin: 0;
            margin-bottom: 15px;
        }

        p li,
        ul li,
        ol li {
            list-style-position: inside;
            margin-left: 5px;
        }

        a {
            color: #429A82;
            text-decoration: underline;
        }

        /* -------------------------------------
            BUTTONS
        ------------------------------------- */
        .btn {
            box-sizing: border-box;
            width: 100%;
        }

        .btn > tbody > tr > td {
            padding-bottom: 15px;
        }

        .btn table {
            width: auto;
        }

        .btn table td {
            background-color: #ffffff;
            border-radius: 5px;
            text-align: center;
        }

        .btn a {
            background-color: #ffffff;
            border: solid 1px #429A82;
            border-radius: 5px;
            box-sizing: border-box;
            color: #429A82;
            cursor: pointer;
            display: inline-block;
            font-size: 14px;
            font-weight: bold;
            margin: 0;
            padding: 12px 25px;
            text-decoration: none;
        }

        .btn-primary table td {
            background-color: #429A82;
        }

        .btn-primary a {
            background-color: #429A82;
            border-color: #429A82;
            color: #ffffff;
        }

        /* -------------------------------------
            OTHER STYLES THAT MIGHT BE USEFUL
        ------------------------------------- */
        .last {
            margin-bottom: 0;
        }

        .first {
            margin-top: 0;
        }

        .align-center {
            text-align: center;
        }

        .align-right {
            text-align: right;
        }

        .align-left {
            text-align: left;
        }

        .clear {
            clear: both;
        }

        .mt0 {
            margin-top: 0;
        }

        .mb0 {
            margin-bottom: 0;
        }

        .preheader {
            color: transparent;
            display: none;
            height: 0;
            max-height: 0;
            max-width: 0;
            opacity: 0;
            overflow: hidden;
            mso-hide: all;
            visibility: hidden;
            width: 0;
        }

        .powered-by a {
            text-decoration: none;
        }

        hr {
            border: 0;
            border-bottom: 1px solid #f6f6f6;
            margin: 20px 0;
        }

        /* -------------------------------------
            RESPONSIVE AND MOBILE FRIENDLY STYLES
        ------------------------------------- */
        @media only screen and (max-width: 620px) {
            table.body h1 {
                font-size: 28px !important;
                margin-bottom: 10px !important;
            }

            table.body p,
            table.body ul,
            table.body ol,
            table.body td,
            table.body span,
            table.body a {
                font-size: 16px !important;
            }

            table.body .wrapper,
            table.body .article {
                padding: 10px !important;
            }

            table.body .content {
                padding: 0 !important;
            }

            table.body .container {
                padding: 0 !important;
                width: 100% !important;
            }

            table.body .main {
                border-left-width: 0 !important;
                border-radius: 0 !important;
                border-right-width: 0 !important;
            }

            table.body .btn table {
                width: 100% !important;
            }

            table.body .btn a {
                width: 100% !important;
            }

            table.body .img-responsive {
                height: auto !important;
                max-width: 100% !important;
                width: auto !important;
            }
        }

        /* -------------------------------------
            PRESERVE THESE STYLES IN THE HEAD
        ------------------------------------- */
        @media all {
            .ExternalClass {
                width: 100%;
            }

            .ExternalClass,
            .ExternalClass p,
            .ExternalClass span,
            .ExternalClass font,
            .ExternalClass td,
            .ExternalClass div {
                line-height: 100%;
            }

            .apple-link a {
                color: inherit !important;
                font-family: inherit !important;
                font-size: inherit !important;
                font-weight: inherit !important;
                line-height: inherit !important;
                text-decoration: none !important;
            }

            #MessageViewBody a {
                color: inherit;
                text-decoration: none;
                font-size: inherit;
                font-family: inherit;
                font-weight: inherit;
                line-height: inherit;
            }

            .btn-primary table td:hover {
                background-color: #34495e !important;
            }

            .btn-primary a:hover {
                background-color: #34495e !important;
                border-color: #34495e !important;
            }
        }

    </style>
</head>
<body>
<table role="presentation" border="0" cellpadding="0" cellspacing="0" class="body">
    <tr>
        <td>&nbsp;</td>
        <td class="container">
            <div class="content">

                <!-- START CENTERED WHITE CONTAINER -->
                <table role="presentation" class="main">

                    <!-- START MAIN CONTENT AREA -->
                    <tr>
                        <td class="wrapper">
                            <table role="presentation" border="0" cellpadding="0" cellspacing="0">
                                <tr>
                                    <td>

                                        <!-- Logo at the top center, embedded as CID -->
                                        <img src="cid:logo.png" alt="Logo" style="display:block;max-width:67px; margin: auto auto 24px;">

                                        <h1 style="text-align: center;">
                                            Your appointment has been successfully booked                                        </h1>

                                        <p style="text-align: center;">
                                            Thank you for arranging an appointment with us. Below you can see the appointment details. Make changes by clicking the appointment link.                                        </p>

                                        <h2 style="text-align: center;">
                                            Appointment Details                                        </h2>

                                        <table id="appointment-details" class="details-table" align="center">
                                            <tr>
                                                <td class="label" style="padding: 3px;font-weight: bold;">
                                                    Service                                                </td>
                                                <td style="padding: 3px;">
                                                    hair cutting                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="label" style="padding: 3px;font-weight: bold;">
                                                    Provider                                                </td>
                                                <td style="padding: 3px;">
                                                    vivek kumar                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="label" style="padding: 3px;font-weight: bold;">
                                                    Start                                                </td>
                                                <td style="padding: 3px;">
                                                    22/07/2026 7:00 am                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="label" style="padding: 3px;font-weight: bold;">
                                                    End                                                </td>
                                                <td style="padding: 3px;">
                                                    22/07/2026 7:30 am
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="label" style="padding: 3px;font-weight: bold;">
                                                    Timezone                                                </td>
                                                <td style="padding: 3px;">
                                                    UTC                                                </td>
                                            </tr>

                                                                                            <tr>
                                                    <td class="label" style="padding: 3px;font-weight: bold;">
                                                        Status                                                    </td>
                                                    <td style="padding: 3px;">
                                                        Confirmed                                                    </td>
                                                </tr>
                                            
                                                                                        <tr>
                                                <td class="label" style="padding: 3px;font-weight: bold;">
                                                    Description                                                </td>
                                                <td style="padding: 3px;">
                                                    bfjkebfkerfbj,erbjk                                                </td>
                                            </tr>
                                            
                                            
                                            
                                                                                    </table>

                                        <br>

                                        <h2 style="text-align: center;">
                                            Customer Details                                        </h2>

                                        <table id="customer-details" class="details-table" align="center">
                                                                                            <tr>
                                                    <td class="label" style="padding: 3px;font-weight: bold;">
                                                        Name                                                    </td>
                                                    <td style="padding: 3px;">
                                                        James Doe                                                    </td>
                                                </tr>
                                            
                                                                                            <tr>
                                                    <td class="label" style="padding: 3px;font-weight: bold;">
                                                        Email                                                    </td>
                                                    <td style="padding: 3px;">
                                                        james@example.org                                                    </td>
                                                </tr>
                                            
                                                                                            <tr>
                                                    <td class="label" style="padding: 3px;font-weight: bold;">
                                                        Phone Number                                                    </td>
                                                    <td style="padding: 3px;">
                                                        +10000000000                                                    </td>
                                                </tr>
                                            
                                            
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                </table>

                                        <br>
                                        <br>

                                        <table class="btn btn-primary" role="presentation" border="0" cellpadding="0" cellspacing="0">
                                            <tbody>
                                                <tr>
                                                    <td align="center">
                                                        <table role="presentation" border="0" cellpadding="0" cellspacing="0">
                                                            <tbody>
                                                                <tr>
                                                                    <td>
                                                                        <a href="http://localhost/easy/index.php/booking/reschedule/4SMeDUwo15X2" target="_blank">Reschedule / Cancel Appointment</a>
                                                                    </td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                        
                                        
                                    </td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                    
                    <!-- END MAIN CONTENT AREA -->
                </table>
                
                <!-- END CENTERED WHITE CONTAINER -->

                <!-- START FOOTER -->
                <div class="footer">
                    <table role="presentation" border="0" cellpadding="0" cellspacing="0">
                        <tr>
                            <td class="content-block powered-by">
                                Powered by
                                <a href="https://easyappointments.org" style="text-decoration: none;">
                                    Easy!Appointments
                                </a>
                                |
                                <a href="https://example.org" style="text-decoration: none;">
                                    Company Name                                </a>
                            </td>
                        </tr>
                    </table>
                </div>
                <!-- END FOOTER -->

            </div>
        </td>
        <td>&nbsp;</td>
    </tr>
</table>
</body>
</html>

--b3=_unsRqEKN9t5LHmGdGjiU75nwKH74yLtMFc7LjtE
Content-Type: image/png; name=logo.png
Content-Transfer-Encoding: base64
Content-ID: <logo.png>
Content-Disposition: inline; filename=logo.png

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
TkSuQmCC

--b3=_unsRqEKN9t5LHmGdGjiU75nwKH74yLtMFc7LjtE--


--b2=_unsRqEKN9t5LHmGdGjiU75nwKH74yLtMFc7LjtE--

--b1=_unsRqEKN9t5LHmGdGjiU75nwKH74yLtMFc7LjtE
Content-Type: text/calendar; name=invitation.ics
Content-Transfer-Encoding: base64
Content-Disposition: attachment; filename=invitation.ics

QkVHSU46VkNBTEVOREFSDQpWRVJTSU9OOjIuMA0KUFJPRElEOi0vL0Vhc3lBcHBvaW50bWVudHMv
L09wZW4gU291cmNlIFdlYiBTY2hlZHVsZXIvL0VODQpDQUxTQ0FMRTpHUkVHT1JJQU4NCk1FVEhP
RDpSRVFVRVNUDQpCRUdJTjpWVElNRVpPTkUNClRaSUQ6RXVyb3BlL0Jlcmxpbg0KQkVHSU46U1RB
TkRBUkQNCkRUU1RBUlQ6MjAyNjEwMjVUMDEwMDAwWg0KVFpPRkZTRVRUTzorMDEwMA0KVFpPRkZT
RVRGUk9NOiswMjAwDQpSUlVMRTpGUkVRPVlFQVJMWTtCWU1PTlRIPTExO0JZREFZPTFTVQ0KRU5E
OlNUQU5EQVJEDQpCRUdJTjpEQVlMSUdIVA0KRFRTVEFSVDoyMDI2MDMyOVQwMTAwMDBaDQpUWk9G
RlNFVFRPOiswMjAwDQpUWk9GRlNFVEZST006KzAxMDANClJSVUxFOkZSRVE9WUVBUkxZO0JZTU9O
VEg9MztCWURBWT0yU1UNCkVORDpEQVlMSUdIVA0KRU5EOlZUSU1FWk9ORQ0KQkVHSU46VkVWRU5U
DQpVSUQ6ZWEtZWNjYmM4N2U0YjVjZTJmZTI4MzA4ZmQ5ZjJhN2JhZjMNCkRUU1RBUlQ6MjAyNjA3
MjJUMDcwMDAwWg0KRFRFTkQ6MjAyNjA3MjJUMDczMDAwWg0KU0VRVUVOQ0U6MTc4NDc5NzYzOA0K
U1RBVFVTOkNPTkZJUk1FRA0KU1VNTUFSWTpoYWlyIGN1dHRpbmcNCkRFU0NSSVBUSU9OOlxuUHJv
dmlkZXJcblxuTmFtZTogdml2ZWsga3VtYXJcbkVtYWlsOiByYWo5NzNhbnNodWxAZ21haWwNCiAu
Y29tXG5QaG9uZSBOdW1iZXI6IFxuQWRkcmVzczogXG5DaXR5OiBcblppcCBDb2RlOiBcblxuQ3Vz
dG9tZXJcblxuTmFtDQogZTogSmFtZXMgRG9lXG5FbWFpbDogamFtZXNAZXhhbXBsZS5vcmdcblBo
b25lIE51bWJlcjogKzEwMDAwMDAwMDAwXG5BZA0KIGRyZXNzOiBcbkNpdHk6IFxuWmlwIENvZGU6
IFxuXG5Ob3Rlc1xuXG4NCkxPQ0FUSU9OOm5vaWRhIHNlYyA2Mw0KRFRTVEFNUDoyMDI2MDcyM1Qw
OTA3MTlaDQpBVFRFTkRFRTtDVVRZUEU9SU5ESVZJRFVBTDtST0xFPVJFUS1QQVJUSUNJUEFOVDtQ
QVJUU1RBVD1ORUVEUy1BQ1RJT047DQogUlNWUD1UUlVFO0NOPUphbWVzIERvZTptYWlsdG86amFt
ZXNAZXhhbXBsZS5vcmcNCkFUVEVOREVFO0NVVFlQRT1JTkRJVklEVUFMO1JPTEU9UkVRLVBBUlRJ
Q0lQQU5UO1BBUlRTVEFUPUFDQ0VQVEVEO1JTVlANCiA9RkFMU0U7Q049dml2ZWsga3VtYXI6bWFp
bHRvOnJhajk3M2Fuc2h1bEBnbWFpbC5jb20NCk9SR0FOSVpFUjtDTj12aXZlayBrdW1hcjptYWls
dG86cmFqOTczYW5zaHVsQGdtYWlsLmNvbQ0KQkVHSU46VkFMQVJNDQpUUklHR0VSO1ZBTFVFPURB
VEUtVElNRToyMDI2MDcyMlQwNjQ1MDBaDQpBQ1RJT046RU1BSUwNClNVTU1BUlk6QWxhcm0gbm90
aWZpY2F0aW9uDQpERVNDUklQVElPTjpUaGlzIGlzIGFuIGV2ZW50IHJlbWluZGVyDQpBVFRFTkRF
RTtDVVRZUEU9SU5ESVZJRFVBTDtST0xFPVJFUS1QQVJUSUNJUEFOVDtQQVJUU1RBVD1ORUVEUy1B
Q1RJT047DQogUlNWUD1UUlVFO0NOPUphbWVzIERvZTptYWlsdG86amFtZXNAZXhhbXBsZS5vcmcN
CkVORDpWQUxBUk0NCkJFR0lOOlZBTEFSTQ0KVFJJR0dFUjtWQUxVRT1EQVRFLVRJTUU6MjAyNjA3
MjJUMDYwMDAwWg0KQUNUSU9OOkVNQUlMDQpTVU1NQVJZOkFsYXJtIG5vdGlmaWNhdGlvbg0KREVT
Q1JJUFRJT046VGhpcyBpcyBhbiBldmVudCByZW1pbmRlcg0KQVRURU5ERUU7Q1VUWVBFPUlORElW
SURVQUw7Uk9MRT1SRVEtUEFSVElDSVBBTlQ7UEFSVFNUQVQ9TkVFRFMtQUNUSU9OOw0KIFJTVlA9
VFJVRTtDTj1KYW1lcyBEb2U6bWFpbHRvOmphbWVzQGV4YW1wbGUub3JnDQpFTkQ6VkFMQVJNDQpF
TkQ6VkVWRU5UDQpFTkQ6VkNBTEVOREFSDQo=

--b1=_unsRqEKN9t5LHmGdGjiU75nwKH74yLtMFc7LjtE--
',
            ),
          ),
          1 => 
          array (
            'file' => 'C:\\xampp\\htdocs\\easy\\vendor\\phpmailer\\phpmailer\\src\\PHPMailer.php',
            'line' => 1670,
            'function' => 'postSend',
            'class' => 'PHPMailer\\PHPMailer\\PHPMailer',
            'type' => '->',
            'args' => 
            array (
            ),
          ),
          2 => 
          array (
            'file' => 'C:\\xampp\\htdocs\\easy\\application\\libraries\\Email_messages.php',
            'line' => 119,
            'function' => 'send',
            'class' => 'PHPMailer\\PHPMailer\\PHPMailer',
            'type' => '->',
            'args' => 
            array (
            ),
          ),
          3 => 
          array (
            'file' => 'C:\\xampp\\htdocs\\easy\\application\\libraries\\Notifications.php',
            'line' => 84,
            'function' => 'send_appointment_saved',
            'class' => 'Email_messages',
            'type' => '->',
            'args' => 
            array (
              0 => 
              array (
                'id' => 3,
                'create_datetime' => '2026-07-23 11:07:18',
                'update_datetime' => '2026-07-23 11:07:18',
                'book_datetime' => '2026-07-23 11:07:18',
                'start_datetime' => '2026-07-22 07:00:00',
                'end_datetime' => '2026-07-22 07:30:00',
                'location' => '',
                'meeting_link' => '',
                'notes' => '',
                'hash' => '4SMeDUwo15X2',
                'color' => '#7cbae8',
                'status' => 'Confirmed',
                'is_unavailability' => false,
                'id_users_provider' => 5,
                'id_users_customer' => 3,
                'id_services' => 2,
                'id_google_calendar' => NULL,
                'id_caldav_calendar' => NULL,
              ),
              1 => 
              array (
                'id' => 5,
                'create_datetime' => '2026-07-22 13:13:04',
                'update_datetime' => '2026-07-22 13:13:04',
                'first_name' => 'vivek',
                'last_name' => 'kumar',
                'email' => 'raj973anshul@gmail.com',
                'mobile_number' => NULL,
                'phone_number' => '',
                'address' => '',
                'city' => '',
                'state' => '',
                'zip_code' => '',
                'notes' => '',
                'timezone' => 'Europe/Berlin',
                'language' => 'english',
                'custom_field_1' => NULL,
                'custom_field_2' => NULL,
                'custom_field_3' => NULL,
                'custom_field_4' => NULL,
                'custom_field_5' => NULL,
                'is_private' => false,
                'ldap_dn' => NULL,
                'id_roles' => 2,
                'settings' => 
                array (
                  'username' => 'vivekkumar',
                  'password_reset_token' => NULL,
                  'password_reset_expires' => NULL,
                  'working_plan' => '{"sunday":{"start":"09:00","end":"18:00","breaks":[{"start":"14:30","end":"15:00"}]},"monday":{"start":"09:00","end":"18:00","breaks":[{"start":"14:30","end":"15:00"}]},"tuesday":{"start":"09:00","end":"18:00","breaks":[{"start":"14:30","end":"15:00"}]},"wednesday":{"start":"09:00","end":"18:00","breaks":[{"start":"14:30","end":"15:00"}]},"thursday":{"start":"09:00","end":"18:00","breaks":[{"start":"14:30","end":"15:00"}]},"friday":{"start":"09:00","end":"18:00","breaks":[{"start":"14:30","end":"15:00"}]},"saturday":{"start":"09:00","end":"18:00","breaks":[{"start":"14:30","end":"15:00"}]}}',
                  'working_plan_exceptions' => '[]',
                  'notifications' => '1',
                  'google_sync' => NULL,
                  'google_token' => NULL,
                  'google_calendar' => NULL,
                  'caldav_sync' => '0',
                  'caldav_url' => NULL,
                  'caldav_username' => NULL,
                  'caldav_password' => NULL,
                  'sync_past_days' => '30',
                  'sync_future_days' => '90',
                  'calendar_view' => 'table',
                ),
                'services' => 
                array (
                  0 => 1,
                  1 => 2,
                ),
              ),
              2 => 
              array (
                'id' => 2,
                'create_datetime' => '2026-07-23 10:51:48',
                'update_datetime' => '2026-07-23 10:51:48',
                'name' => 'hair cutting',
                'duration' => '30',
                'price' => 50.0,
                'currency' => '',
                'description' => 'bfjkebfkerfbj,erbjk',
                'slot_interval' => '15',
                'color' => '#7cbae8',
                'location' => 'noida sec 63',
                'attendants_number' => 1,
                'is_private' => false,
                'id_service_categories' => 1,
              ),
              3 => 
              array (
                'id' => 3,
                'create_datetime' => '2026-07-22 11:55:43',
                'update_datetime' => '2026-07-23 11:07:18',
                'first_name' => 'James',
                'last_name' => 'Doe',
                'email' => 'james@example.org',
                'mobile_number' => NULL,
                'phone_number' => '+10000000000',
                'address' => '',
                'city' => '',
                'state' => NULL,
                'zip_code' => '',
                'notes' => '',
                'timezone' => 'UTC',
                'language' => 'english',
                'custom_field_1' => NULL,
                'custom_field_2' => NULL,
                'custom_field_3' => NULL,
                'custom_field_4' => NULL,
                'custom_field_5' => NULL,
                'is_private' => '0',
                'ldap_dn' => NULL,
                'id_roles' => 3,
              ),
              4 => 
              array (
                'company_name' => 'Company Name',
                'company_link' => 'https://example.org',
                'company_email' => 'info@example.org',
                'company_color' => NULL,
                'date_format' => 'DMY',
                'time_format' => 'regular',
              ),
              5 => 'Your appointment has been successfully booked',
              6 => 'Thank you for arranging an appointment with us. Below you can see the appointment details. Make changes by clicking the appointment link.',
              7 => 'http://localhost/easy/index.php/booking/reschedule/4SMeDUwo15X2',
              8 => 'james@example.org',
              9 => 'BEGIN:VCALENDAR
VERSION:2.0
PRODID:-//EasyAppointments//Open Source Web Scheduler//EN
CALSCALE:GREGORIAN
METHOD:REQUEST
BEGIN:VTIMEZONE
TZID:Europe/Berlin
BEGIN:STANDARD
DTSTART:20261025T010000Z
TZOFFSETTO:+0100
TZOFFSETFROM:+0200
RRULE:FREQ=YEARLY;BYMONTH=11;BYDAY=1SU
END:STANDARD
BEGIN:DAYLIGHT
DTSTART:20260329T010000Z
TZOFFSETTO:+0200
TZOFFSETFROM:+0100
RRULE:FREQ=YEARLY;BYMONTH=3;BYDAY=2SU
END:DAYLIGHT
END:VTIMEZONE
BEGIN:VEVENT
UID:ea-eccbc87e4b5ce2fe28308fd9f2a7baf3
DTSTART:20260722T070000Z
DTEND:20260722T073000Z
SEQUENCE:1784797638
STATUS:CONFIRMED
SUMMARY:hair cutting
DESCRIPTION:\\nProvider\\n\\nName: vivek kumar\\nEmail: raj973anshul@gmail
 .com\\nPhone Number: \\nAddress: \\nCity: \\nZip Code: \\n\\nCustomer\\n\\nNam
 e: James Doe\\nEmail: james@example.org\\nPhone Number: +10000000000\\nAd
 dress: \\nCity: \\nZip Code: \\n\\nNotes\\n\\n
LOCATION:noida sec 63
DTSTAMP:20260723T090719Z
ATTENDEE;CUTYPE=INDIVIDUAL;ROLE=REQ-PARTICIPANT;PARTSTAT=NEEDS-ACTION;
 RSVP=TRUE;CN=James Doe:mailto:james@example.org
ATTENDEE;CUTYPE=INDIVIDUAL;ROLE=REQ-PARTICIPANT;PARTSTAT=ACCEPTED;RSVP
 =FALSE;CN=vivek kumar:mailto:raj973anshul@gmail.com
ORGANIZER;CN=vivek kumar:mailto:raj973anshul@gmail.com
BEGIN:VALARM
TRIGGER;VALUE=DATE-TIME:20260722T064500Z
ACTION:EMAIL
SUMMARY:Alarm notification
DESCRIPTION:This is an event reminder
ATTENDEE;CUTYPE=INDIVIDUAL;ROLE=REQ-PARTICIPANT;PARTSTAT=NEEDS-ACTION;
 RSVP=TRUE;CN=James Doe:mailto:james@example.org
END:VALARM
BEGIN:VALARM
TRIGGER;VALUE=DATE-TIME:20260722T060000Z
ACTION:EMAIL
SUMMARY:Alarm notification
DESCRIPTION:This is an event reminder
ATTENDEE;CUTYPE=INDIVIDUAL;ROLE=REQ-PARTICIPANT;PARTSTAT=NEEDS-ACTION;
 RSVP=TRUE;CN=James Doe:mailto:james@example.org
END:VALARM
END:VEVENT
END:VCALENDAR
',
              10 => 'UTC',
            ),
          ),
          4 => 
          array (
            'file' => 'C:\\xampp\\htdocs\\easy\\application\\controllers\\Calendar.php',
            'line' => 389,
            'function' => 'notify_appointment_saved',
            'class' => 'Notifications',
            'type' => '->',
            'args' => 
            array (
              0 => 
              array (
                'id' => 3,
                'create_datetime' => '2026-07-23 11:07:18',
                'update_datetime' => '2026-07-23 11:07:18',
                'book_datetime' => '2026-07-23 11:07:18',
                'start_datetime' => '2026-07-22 09:00:00',
                'end_datetime' => '2026-07-22 09:30:00',
                'location' => '',
                'meeting_link' => '',
                'notes' => '',
                'hash' => '4SMeDUwo15X2',
                'color' => '#7cbae8',
                'status' => 'Confirmed',
                'is_unavailability' => false,
                'id_users_provider' => 5,
                'id_users_customer' => 3,
                'id_services' => 2,
                'id_google_calendar' => NULL,
                'id_caldav_calendar' => NULL,
              ),
              1 => 
              array (
                'id' => 2,
                'create_datetime' => '2026-07-23 10:51:48',
                'update_datetime' => '2026-07-23 10:51:48',
                'name' => 'hair cutting',
                'duration' => '30',
                'price' => 50.0,
                'currency' => '',
                'description' => 'bfjkebfkerfbj,erbjk',
                'slot_interval' => '15',
                'color' => '#7cbae8',
                'location' => 'noida sec 63',
                'attendants_number' => 1,
                'is_private' => false,
                'id_service_categories' => 1,
              ),
              2 => 
              array (
                'id' => 5,
                'create_datetime' => '2026-07-22 13:13:04',
                'update_datetime' => '2026-07-22 13:13:04',
                'first_name' => 'vivek',
                'last_name' => 'kumar',
                'email' => 'raj973anshul@gmail.com',
                'mobile_number' => NULL,
                'phone_number' => '',
                'address' => '',
                'city' => '',
                'state' => '',
                'zip_code' => '',
                'notes' => '',
                'timezone' => 'Europe/Berlin',
                'language' => 'english',
                'custom_field_1' => NULL,
                'custom_field_2' => NULL,
                'custom_field_3' => NULL,
                'custom_field_4' => NULL,
                'custom_field_5' => NULL,
                'is_private' => false,
                'ldap_dn' => NULL,
                'id_roles' => 2,
                'settings' => 
                array (
                  'username' => 'vivekkumar',
                  'password_reset_token' => NULL,
                  'password_reset_expires' => NULL,
                  'working_plan' => '{"sunday":{"start":"09:00","end":"18:00","breaks":[{"start":"14:30","end":"15:00"}]},"monday":{"start":"09:00","end":"18:00","breaks":[{"start":"14:30","end":"15:00"}]},"tuesday":{"start":"09:00","end":"18:00","breaks":[{"start":"14:30","end":"15:00"}]},"wednesday":{"start":"09:00","end":"18:00","breaks":[{"start":"14:30","end":"15:00"}]},"thursday":{"start":"09:00","end":"18:00","breaks":[{"start":"14:30","end":"15:00"}]},"friday":{"start":"09:00","end":"18:00","breaks":[{"start":"14:30","end":"15:00"}]},"saturday":{"start":"09:00","end":"18:00","breaks":[{"start":"14:30","end":"15:00"}]}}',
                  'working_plan_exceptions' => '[]',
                  'notifications' => '1',
                  'google_sync' => NULL,
                  'google_token' => NULL,
                  'google_calendar' => NULL,
                  'caldav_sync' => '0',
                  'caldav_url' => NULL,
                  'caldav_username' => NULL,
                  'caldav_password' => NULL,
                  'sync_past_days' => '30',
                  'sync_future_days' => '90',
                  'calendar_view' => 'table',
                ),
                'services' => 
                array (
                  0 => 1,
                  1 => 2,
                ),
              ),
              3 => 
              array (
                'id' => 3,
                'create_datetime' => '2026-07-22 11:55:43',
                'update_datetime' => '2026-07-23 11:07:18',
                'first_name' => 'James',
                'last_name' => 'Doe',
                'email' => 'james@example.org',
                'mobile_number' => NULL,
                'phone_number' => '+10000000000',
                'address' => '',
                'city' => '',
                'state' => NULL,
                'zip_code' => '',
                'notes' => '',
                'timezone' => 'UTC',
                'language' => 'english',
                'custom_field_1' => NULL,
                'custom_field_2' => NULL,
                'custom_field_3' => NULL,
                'custom_field_4' => NULL,
                'custom_field_5' => NULL,
                'is_private' => '0',
                'ldap_dn' => NULL,
                'id_roles' => 3,
              ),
              4 => 
              array (
                'company_name' => 'Company Name',
                'company_link' => 'https://example.org',
                'company_email' => 'info@example.org',
                'company_color' => NULL,
                'date_format' => 'DMY',
                'time_format' => 'regular',
              ),
              5 => false,
            ),
          ),
          5 => 
          array (
            'file' => 'C:\\xampp\\htdocs\\easy\\system\\core\\CodeIgniter.php',
            'line' => 481,
            'function' => 'save_appointment',
            'class' => 'Calendar',
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
      )),
      1 => 'appointment-saved to customer',
      2 => 3,
    ),
  ),
  2 => 
  array (
    'file' => 'C:\\xampp\\htdocs\\easy\\application\\controllers\\Calendar.php',
    'line' => 389,
    'function' => 'notify_appointment_saved',
    'class' => 'Notifications',
    'type' => '->',
    'args' => 
    array (
      0 => 
      array (
        'id' => 3,
        'create_datetime' => '2026-07-23 11:07:18',
        'update_datetime' => '2026-07-23 11:07:18',
        'book_datetime' => '2026-07-23 11:07:18',
        'start_datetime' => '2026-07-22 09:00:00',
        'end_datetime' => '2026-07-22 09:30:00',
        'location' => '',
        'meeting_link' => '',
        'notes' => '',
        'hash' => '4SMeDUwo15X2',
        'color' => '#7cbae8',
        'status' => 'Confirmed',
        'is_unavailability' => false,
        'id_users_provider' => 5,
        'id_users_customer' => 3,
        'id_services' => 2,
        'id_google_calendar' => NULL,
        'id_caldav_calendar' => NULL,
      ),
      1 => 
      array (
        'id' => 2,
        'create_datetime' => '2026-07-23 10:51:48',
        'update_datetime' => '2026-07-23 10:51:48',
        'name' => 'hair cutting',
        'duration' => '30',
        'price' => 50.0,
        'currency' => '',
        'description' => 'bfjkebfkerfbj,erbjk',
        'slot_interval' => '15',
        'color' => '#7cbae8',
        'location' => 'noida sec 63',
        'attendants_number' => 1,
        'is_private' => false,
        'id_service_categories' => 1,
      ),
      2 => 
      array (
        'id' => 5,
        'create_datetime' => '2026-07-22 13:13:04',
        'update_datetime' => '2026-07-22 13:13:04',
        'first_name' => 'vivek',
        'last_name' => 'kumar',
        'email' => 'raj973anshul@gmail.com',
        'mobile_number' => NULL,
        'phone_number' => '',
        'address' => '',
        'city' => '',
        'state' => '',
        'zip_code' => '',
        'notes' => '',
        'timezone' => 'Europe/Berlin',
        'language' => 'english',
        'custom_field_1' => NULL,
        'custom_field_2' => NULL,
        'custom_field_3' => NULL,
        'custom_field_4' => NULL,
        'custom_field_5' => NULL,
        'is_private' => false,
        'ldap_dn' => NULL,
        'id_roles' => 2,
        'settings' => 
        array (
          'username' => 'vivekkumar',
          'password_reset_token' => NULL,
          'password_reset_expires' => NULL,
          'working_plan' => '{"sunday":{"start":"09:00","end":"18:00","breaks":[{"start":"14:30","end":"15:00"}]},"monday":{"start":"09:00","end":"18:00","breaks":[{"start":"14:30","end":"15:00"}]},"tuesday":{"start":"09:00","end":"18:00","breaks":[{"start":"14:30","end":"15:00"}]},"wednesday":{"start":"09:00","end":"18:00","breaks":[{"start":"14:30","end":"15:00"}]},"thursday":{"start":"09:00","end":"18:00","breaks":[{"start":"14:30","end":"15:00"}]},"friday":{"start":"09:00","end":"18:00","breaks":[{"start":"14:30","end":"15:00"}]},"saturday":{"start":"09:00","end":"18:00","breaks":[{"start":"14:30","end":"15:00"}]}}',
          'working_plan_exceptions' => '[]',
          'notifications' => '1',
          'google_sync' => NULL,
          'google_token' => NULL,
          'google_calendar' => NULL,
          'caldav_sync' => '0',
          'caldav_url' => NULL,
          'caldav_username' => NULL,
          'caldav_password' => NULL,
          'sync_past_days' => '30',
          'sync_future_days' => '90',
          'calendar_view' => 'table',
        ),
        'services' => 
        array (
          0 => 1,
          1 => 2,
        ),
      ),
      3 => 
      array (
        'id' => 3,
        'create_datetime' => '2026-07-22 11:55:43',
        'update_datetime' => '2026-07-23 11:07:18',
        'first_name' => 'James',
        'last_name' => 'Doe',
        'email' => 'james@example.org',
        'mobile_number' => NULL,
        'phone_number' => '+10000000000',
        'address' => '',
        'city' => '',
        'state' => NULL,
        'zip_code' => '',
        'notes' => '',
        'timezone' => 'UTC',
        'language' => 'english',
        'custom_field_1' => NULL,
        'custom_field_2' => NULL,
        'custom_field_3' => NULL,
        'custom_field_4' => NULL,
        'custom_field_5' => NULL,
        'is_private' => '0',
        'ldap_dn' => NULL,
        'id_roles' => 3,
      ),
      4 => 
      array (
        'company_name' => 'Company Name',
        'company_link' => 'https://example.org',
        'company_email' => 'info@example.org',
        'company_color' => NULL,
        'date_format' => 'DMY',
        'time_format' => 'regular',
      ),
      5 => false,
    ),
  ),
)
ERROR - 2026-07-23 11:07:21 --> #0 C:\xampp\htdocs\easy\vendor\phpmailer\phpmailer\src\PHPMailer.php(1857): PHPMailer\PHPMailer\PHPMailer->mailSend('Date: Thu, 23 J...', '--b1=_unsRqEKN9...')
#1 C:\xampp\htdocs\easy\vendor\phpmailer\phpmailer\src\PHPMailer.php(1670): PHPMailer\PHPMailer\PHPMailer->postSend()
#2 C:\xampp\htdocs\easy\application\libraries\Email_messages.php(119): PHPMailer\PHPMailer\PHPMailer->send()
#3 C:\xampp\htdocs\easy\application\libraries\Notifications.php(84): Email_messages->send_appointment_saved(Array, Array, Array, Array, Array, 'Your appointmen...', 'Thank you for a...', 'http://localhos...', 'james@example.o...', 'BEGIN:VCALENDAR...', 'UTC')
#4 C:\xampp\htdocs\easy\application\controllers\Calendar.php(389): Notifications->notify_appointment_saved(Array, Array, Array, Array, Array, false)
#5 C:\xampp\htdocs\easy\system\core\CodeIgniter.php(481): Calendar->save_appointment()
#6 C:\xampp\htdocs\easy\index.php(344): require_once('C:\\xampp\\htdocs...')
#7 {main} Trace: array (
  0 => 
  array (
    'file' => 'C:\\xampp\\htdocs\\easy\\application\\libraries\\Notifications.php',
    'line' => 356,
    'function' => 'log_message',
    'args' => 
    array (
      0 => 'error',
      1 => '#0 C:\\xampp\\htdocs\\easy\\vendor\\phpmailer\\phpmailer\\src\\PHPMailer.php(1857): PHPMailer\\PHPMailer\\PHPMailer->mailSend(\'Date: Thu, 23 J...\', \'--b1=_unsRqEKN9...\')
#1 C:\\xampp\\htdocs\\easy\\vendor\\phpmailer\\phpmailer\\src\\PHPMailer.php(1670): PHPMailer\\PHPMailer\\PHPMailer->postSend()
#2 C:\\xampp\\htdocs\\easy\\application\\libraries\\Email_messages.php(119): PHPMailer\\PHPMailer\\PHPMailer->send()
#3 C:\\xampp\\htdocs\\easy\\application\\libraries\\Notifications.php(84): Email_messages->send_appointment_saved(Array, Array, Array, Array, Array, \'Your appointmen...\', \'Thank you for a...\', \'http://localhos...\', \'james@example.o...\', \'BEGIN:VCALENDAR...\', \'UTC\')
#4 C:\\xampp\\htdocs\\easy\\application\\controllers\\Calendar.php(389): Notifications->notify_appointment_saved(Array, Array, Array, Array, Array, false)
#5 C:\\xampp\\htdocs\\easy\\system\\core\\CodeIgniter.php(481): Calendar->save_appointment()
#6 C:\\xampp\\htdocs\\easy\\index.php(344): require_once(\'C:\\\\xampp\\\\htdocs...\')
#7 {main}',
    ),
  ),
  1 => 
  array (
    'file' => 'C:\\xampp\\htdocs\\easy\\application\\libraries\\Notifications.php',
    'line' => 98,
    'function' => 'log_exception',
    'class' => 'Notifications',
    'type' => '->',
    'args' => 
    array (
      0 => 
      \PHPMailer\PHPMailer\Exception::__set_state(array(
         'message' => 'Could not instantiate mail function.',
         'string' => '',
         'code' => 2,
         'file' => 'C:\\xampp\\htdocs\\easy\\vendor\\phpmailer\\phpmailer\\src\\PHPMailer.php',
         'line' => 2150,
         'trace' => 
        array (
          0 => 
          array (
            'file' => 'C:\\xampp\\htdocs\\easy\\vendor\\phpmailer\\phpmailer\\src\\PHPMailer.php',
            'line' => 1857,
            'function' => 'mailSend',
            'class' => 'PHPMailer\\PHPMailer\\PHPMailer',
            'type' => '->',
            'args' => 
            array (
              0 => 'Date: Thu, 23 Jul 2026 11:07:19 +0200
From: Company Name <info@example.org>
Reply-To: info@example.org
Message-ID: <unsRqEKN9t5LHmGdGjiU75nwKH74yLtMFc7LjtE@localhost>
X-Mailer: PHPMailer 7.1.1 (https://github.com/PHPMailer/PHPMailer)
MIME-Version: 1.0
Content-Type: multipart/mixed;
 boundary="b1=_unsRqEKN9t5LHmGdGjiU75nwKH74yLtMFc7LjtE"
Content-Transfer-Encoding: 8bit

',
              1 => '--b1=_unsRqEKN9t5LHmGdGjiU75nwKH74yLtMFc7LjtE
Content-Type: multipart/alternative;
 boundary="b2=_unsRqEKN9t5LHmGdGjiU75nwKH74yLtMFc7LjtE"

--b2=_unsRqEKN9t5LHmGdGjiU75nwKH74yLtMFc7LjtE
Content-Type: text/plain; charset=us-ascii

    
    
    
        Appointment Details | Easy!Appointments
    
    
        /* -------------------------------------
            GLOBAL RESETS
        ------------------------------------- */        /*All the styling goes here*/        img {
            border: none;
            -ms-interpolation-mode: bicubic;
            max-width: 100%;
        }        body {
            background-color: #f6f6f6;
            font-family: sans-serif;
            -webkit-font-smoothing: antialiased;
            font-size: 14px;
            line-height: 1.4;
            margin: 0;
            padding: 0;
            -ms-text-size-adjust: 100%;
            -webkit-text-size-adjust: 100%;
        }        table {
            border-collapse: separate;
            mso-table-lspace: 0pt;
            mso-table-rspace: 0pt;
            width: 100%;
        }        table td {
            font-family: sans-serif;
            font-size: 14px;
            vertical-align: top;
        }        /* -------------------------------------
            BODY & CONTAINER
        ------------------------------------- */        .body {
            background-color: #f6f6f6;
            width: 100%;
        }        /* Set a max-width, and make it display as block so it will automatically stretch to that width, but will also shrink down on a phone or something */
        .container {
            display: block;
            margin: 0 auto !important;
            /* makes it centered */
            max-width: 580px;
            padding: 10px;
            width: 580px;
        }        /* This should also be a block element, so that it will fill 100% of the .container */
        .content {
            box-sizing: border-box;
            display: block;
            margin: 0 auto;
            max-width: 580px;
            padding: 10px;
        }        /* -------------------------------------
            HEADER, FOOTER, MAIN
        ------------------------------------- */
        .main {
            background: #ffffff;
            border-radius: 3px;
            width: 100%;
        }        .wrapper {
            box-sizing: border-box;
            padding: 20px;
        }        .content-block {
            padding-bottom: 10px;
            padding-top: 10px;
        }        .footer {
            clear: both;
            margin-top: 10px;
            text-align: center;
            width: 100%;
        }        .footer td,
        .footer p,
        .footer span,
        .footer a {
            color: #999999;
            font-size: 12px;
            text-align: center;
        }        /* -------------------------------------
            TYPOGRAPHY
        ------------------------------------- */
        h1,
        h2,
        h3,
        h4 {
            color: #000000;
            font-family: sans-serif;
            font-weight: 400;
            line-height: 1.4;
            margin: 0;
            margin-bottom: 15px;
        }        h1 {
            font-size: 24px;
            font-weight: 300;
            text-align: center;
            margin-bottom: 40px;
        }        .label {
            width: 120px;
        }        .details-table {
            margin: 0 0 0 auto;
            width: 85%;
        }        p,
        ul,
        ol {
            font-family: sans-serif;
            font-size: 14px;
            font-weight: normal;
            margin: 0;
            margin-bottom: 15px;
        }        p li,
        ul li,
        ol li {
            list-style-position: inside;
            margin-left: 5px;
        }        a {
            color: #429A82;
            text-decoration: underline;
        }        /* -------------------------------------
            BUTTONS
        ------------------------------------- */
        .btn {
            box-sizing: border-box;
            width: 100%;
        }        .btn > tbody > tr > td {
            padding-bottom: 15px;
        }        .btn table {
            width: auto;
        }        .btn table td {
            background-color: #ffffff;
            border-radius: 5px;
            text-align: center;
        }        .btn a {
            background-color: #ffffff;
            border: solid 1px #429A82;
            border-radius: 5px;
            box-sizing: border-box;
            color: #429A82;
            cursor: pointer;
            display: inline-block;
            font-size: 14px;
            font-weight: bold;
            margin: 0;
            padding: 12px 25px;
            text-decoration: none;
        }        .btn-primary table td {
            background-color: #429A82;
        }        .btn-primary a {
            background-color: #429A82;
            border-color: #429A82;
            color: #ffffff;
        }        /* -------------------------------------
            OTHER STYLES THAT MIGHT BE USEFUL
        ------------------------------------- */
        .last {
            margin-bottom: 0;
        }        .first {
            margin-top: 0;
        }        .align-center {
            text-align: center;
        }        .align-right {
            text-align: right;
        }        .align-left {
            text-align: left;
        }        .clear {
            clear: both;
        }        .mt0 {
            margin-top: 0;
        }        .mb0 {
            margin-bottom: 0;
        }        .preheader {
            color: transparent;
            display: none;
            height: 0;
            max-height: 0;
            max-width: 0;
            opacity: 0;
            overflow: hidden;
            mso-hide: all;
            visibility: hidden;
            width: 0;
        }        .powered-by a {
            text-decoration: none;
        }        hr {
            border: 0;
            border-bottom: 1px solid #f6f6f6;
            margin: 20px 0;
        }        /* -------------------------------------
            RESPONSIVE AND MOBILE FRIENDLY STYLES
        ------------------------------------- */
        @media only screen and (max-width: 620px) {
            table.body h1 {
                font-size: 28px !important;
                margin-bottom: 10px !important;
            }            table.body p,
            table.body ul,
            table.body ol,
            table.body td,
            table.body span,
            table.body a {
                font-size: 16px !important;
            }            table.body .wrapper,
            table.body .article {
                padding: 10px !important;
            }            table.body .content {
                padding: 0 !important;
            }            table.body .container {
                padding: 0 !important;
                width: 100% !important;
            }            table.body .main {
                border-left-width: 0 !important;
                border-radius: 0 !important;
                border-right-width: 0 !important;
            }            table.body .btn table {
                width: 100% !important;
            }            table.body .btn a {
                width: 100% !important;
            }            table.body .img-responsive {
                height: auto !important;
                max-width: 100% !important;
                width: auto !important;
            }
        }        /* -------------------------------------
            PRESERVE THESE STYLES IN THE HEAD
        ------------------------------------- */
        @media all {
            .ExternalClass {
                width: 100%;
            }            .ExternalClass,
            .ExternalClass p,
            .ExternalClass span,
            .ExternalClass font,
            .ExternalClass td,
            .ExternalClass div {
                line-height: 100%;
            }            .apple-link a {
                color: inherit !important;
                font-family: inherit !important;
                font-size: inherit !important;
                font-weight: inherit !important;
                line-height: inherit !important;
                text-decoration: none !important;
            }            #MessageViewBody a {
                color: inherit;
                text-decoration: none;
                font-size: inherit;
                font-family: inherit;
                font-weight: inherit;
                line-height: inherit;
            }            .btn-primary table td:hover {
                background-color: #34495e !important;
            }            .btn-primary a:hover {
                background-color: #34495e !important;
                border-color: #34495e !important;
            }
        }        
        &nbsp;
        
                            
                                    
                    
                        
                            
                                
                                                                            
                                                                                
                                            Your appointment has been successfully booked                                                                                
                                            Thank you for arranging an appointment with us. Below you can see the appointment details. Make changes by clicking the appointment link.                                                                                
                                            Appointment Details                                                                                
                                            
                                                
                                                    Service                                                
                                                
                                                    hair cutting                                                
                                            
                                            
                                                
                                                    Provider                                                
                                                
                                                    vivek kumar                                                
                                            
                                            
                                                
                                                    Start                                                
                                                
                                                    22/07/2026 7:00 am                                                
                                            
                                            
                                                
                                                    End                                                
                                                
                                                    22/07/2026 7:30 am
                                                
                                            
                                            
                                                
                                                    Timezone                                                
                                                
                                                    UTC                                                
                                                                                                                                        
                                                    
                                                        Status                                                    
                                                    
                                                        Confirmed                                                    
                                                
                                            
                                                                                        
                                                
                                                    Description                                                
                                                
                                                    bfjkebfkerfbj,erbjk                                                
                                            
                                            
                                            
                                            
                                                                                                                                                                    
                                            Customer Details                                                                                
                                                                                            
                                                    
                                                        Name                                                    
                                                    
                                                        James Doe                                                    
                                                
                                            
                                                                                            
                                                    
                                                        Email                                                    
                                                    
                                                        james@example.org                                                    
                                                
                                            
                                                                                            
                                                    
                                                        Phone Number                                                    
                                                    
                                                        +10000000000                                                    
                                                
                                            
                                            
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                        
                                                                                
                                            
                                                
                                                    
                                                        
                                                            
                                                                
                                                                    
                                                                        Reschedule / Cancel Appointment
                                                                    
                                                                
                                                            
                                                        
                                                    
                                                
                                            
                                        
                                        
                                        
                                    
                                
                            
                        
                    
                    
                    
                
                
                                
                
                    
                        
                            
                                Powered by
                                
                                    Easy!Appointments
                                
                                |
                                
                                    Company Name                                
                            
                        
                    
                
                            
        
        &nbsp;
    

--b2=_unsRqEKN9t5LHmGdGjiU75nwKH74yLtMFc7LjtE
Content-Type: multipart/related;
 boundary="b3=_unsRqEKN9t5LHmGdGjiU75nwKH74yLtMFc7LjtE";
 type="text/html"

--b3=_unsRqEKN9t5LHmGdGjiU75nwKH74yLtMFc7LjtE
Content-Type: text/html; charset=us-ascii


<!doctype html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <title>
        Appointment Details | Easy!Appointments
    </title>
    <style>
        /* -------------------------------------
            GLOBAL RESETS
        ------------------------------------- */

        /*All the styling goes here*/

        img {
            border: none;
            -ms-interpolation-mode: bicubic;
            max-width: 100%;
        }

        body {
            background-color: #f6f6f6;
            font-family: sans-serif;
            -webkit-font-smoothing: antialiased;
            font-size: 14px;
            line-height: 1.4;
            margin: 0;
            padding: 0;
            -ms-text-size-adjust: 100%;
            -webkit-text-size-adjust: 100%;
        }

        table {
            border-collapse: separate;
            mso-table-lspace: 0pt;
            mso-table-rspace: 0pt;
            width: 100%;
        }

        table td {
            font-family: sans-serif;
            font-size: 14px;
            vertical-align: top;
        }

        /* -------------------------------------
            BODY & CONTAINER
        ------------------------------------- */

        .body {
            background-color: #f6f6f6;
            width: 100%;
        }

        /* Set a max-width, and make it display as block so it will automatically stretch to that width, but will also shrink down on a phone or something */
        .container {
            display: block;
            margin: 0 auto !important;
            /* makes it centered */
            max-width: 580px;
            padding: 10px;
            width: 580px;
        }

        /* This should also be a block element, so that it will fill 100% of the .container */
        .content {
            box-sizing: border-box;
            display: block;
            margin: 0 auto;
            max-width: 580px;
            padding: 10px;
        }

        /* -------------------------------------
            HEADER, FOOTER, MAIN
        ------------------------------------- */
        .main {
            background: #ffffff;
            border-radius: 3px;
            width: 100%;
        }

        .wrapper {
            box-sizing: border-box;
            padding: 20px;
        }

        .content-block {
            padding-bottom: 10px;
            padding-top: 10px;
        }

        .footer {
            clear: both;
            margin-top: 10px;
            text-align: center;
            width: 100%;
        }

        .footer td,
        .footer p,
        .footer span,
        .footer a {
            color: #999999;
            font-size: 12px;
            text-align: center;
        }

        /* -------------------------------------
            TYPOGRAPHY
        ------------------------------------- */
        h1,
        h2,
        h3,
        h4 {
            color: #000000;
            font-family: sans-serif;
            font-weight: 400;
            line-height: 1.4;
            margin: 0;
            margin-bottom: 15px;
        }

        h1 {
            font-size: 24px;
            font-weight: 300;
            text-align: center;
            margin-bottom: 40px;
        }

        .label {
            width: 120px;
        }

        .details-table {
            margin: 0 0 0 auto;
            width: 85%;
        }

        p,
        ul,
        ol {
            font-family: sans-serif;
            font-size: 14px;
            font-weight: normal;
            margin: 0;
            margin-bottom: 15px;
        }

        p li,
        ul li,
        ol li {
            list-style-position: inside;
            margin-left: 5px;
        }

        a {
            color: #429A82;
            text-decoration: underline;
        }

        /* -------------------------------------
            BUTTONS
        ------------------------------------- */
        .btn {
            box-sizing: border-box;
            width: 100%;
        }

        .btn > tbody > tr > td {
            padding-bottom: 15px;
        }

        .btn table {
            width: auto;
        }

        .btn table td {
            background-color: #ffffff;
            border-radius: 5px;
            text-align: center;
        }

        .btn a {
            background-color: #ffffff;
            border: solid 1px #429A82;
            border-radius: 5px;
            box-sizing: border-box;
            color: #429A82;
            cursor: pointer;
            display: inline-block;
            font-size: 14px;
            font-weight: bold;
            margin: 0;
            padding: 12px 25px;
            text-decoration: none;
        }

        .btn-primary table td {
            background-color: #429A82;
        }

        .btn-primary a {
            background-color: #429A82;
            border-color: #429A82;
            color: #ffffff;
        }

        /* -------------------------------------
            OTHER STYLES THAT MIGHT BE USEFUL
        ------------------------------------- */
        .last {
            margin-bottom: 0;
        }

        .first {
            margin-top: 0;
        }

        .align-center {
            text-align: center;
        }

        .align-right {
            text-align: right;
        }

        .align-left {
            text-align: left;
        }

        .clear {
            clear: both;
        }

        .mt0 {
            margin-top: 0;
        }

        .mb0 {
            margin-bottom: 0;
        }

        .preheader {
            color: transparent;
            display: none;
            height: 0;
            max-height: 0;
            max-width: 0;
            opacity: 0;
            overflow: hidden;
            mso-hide: all;
            visibility: hidden;
            width: 0;
        }

        .powered-by a {
            text-decoration: none;
        }

        hr {
            border: 0;
            border-bottom: 1px solid #f6f6f6;
            margin: 20px 0;
        }

        /* -------------------------------------
            RESPONSIVE AND MOBILE FRIENDLY STYLES
        ------------------------------------- */
        @media only screen and (max-width: 620px) {
            table.body h1 {
                font-size: 28px !important;
                margin-bottom: 10px !important;
            }

            table.body p,
            table.body ul,
            table.body ol,
            table.body td,
            table.body span,
            table.body a {
                font-size: 16px !important;
            }

            table.body .wrapper,
            table.body .article {
                padding: 10px !important;
            }

            table.body .content {
                padding: 0 !important;
            }

            table.body .container {
                padding: 0 !important;
                width: 100% !important;
            }

            table.body .main {
                border-left-width: 0 !important;
                border-radius: 0 !important;
                border-right-width: 0 !important;
            }

            table.body .btn table {
                width: 100% !important;
            }

            table.body .btn a {
                width: 100% !important;
            }

            table.body .img-responsive {
                height: auto !important;
                max-width: 100% !important;
                width: auto !important;
            }
        }

        /* -------------------------------------
            PRESERVE THESE STYLES IN THE HEAD
        ------------------------------------- */
        @media all {
            .ExternalClass {
                width: 100%;
            }

            .ExternalClass,
            .ExternalClass p,
            .ExternalClass span,
            .ExternalClass font,
            .ExternalClass td,
            .ExternalClass div {
                line-height: 100%;
            }

            .apple-link a {
                color: inherit !important;
                font-family: inherit !important;
                font-size: inherit !important;
                font-weight: inherit !important;
                line-height: inherit !important;
                text-decoration: none !important;
            }

            #MessageViewBody a {
                color: inherit;
                text-decoration: none;
                font-size: inherit;
                font-family: inherit;
                font-weight: inherit;
                line-height: inherit;
            }

            .btn-primary table td:hover {
                background-color: #34495e !important;
            }

            .btn-primary a:hover {
                background-color: #34495e !important;
                border-color: #34495e !important;
            }
        }

    </style>
</head>
<body>
<table role="presentation" border="0" cellpadding="0" cellspacing="0" class="body">
    <tr>
        <td>&nbsp;</td>
        <td class="container">
            <div class="content">

                <!-- START CENTERED WHITE CONTAINER -->
                <table role="presentation" class="main">

                    <!-- START MAIN CONTENT AREA -->
                    <tr>
                        <td class="wrapper">
                            <table role="presentation" border="0" cellpadding="0" cellspacing="0">
                                <tr>
                                    <td>

                                        <!-- Logo at the top center, embedded as CID -->
                                        <img src="cid:logo.png" alt="Logo" style="display:block;max-width:67px; margin: auto auto 24px;">

                                        <h1 style="text-align: center;">
                                            Your appointment has been successfully booked                                        </h1>

                                        <p style="text-align: center;">
                                            Thank you for arranging an appointment with us. Below you can see the appointment details. Make changes by clicking the appointment link.                                        </p>

                                        <h2 style="text-align: center;">
                                            Appointment Details                                        </h2>

                                        <table id="appointment-details" class="details-table" align="center">
                                            <tr>
                                                <td class="label" style="padding: 3px;font-weight: bold;">
                                                    Service                                                </td>
                                                <td style="padding: 3px;">
                                                    hair cutting                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="label" style="padding: 3px;font-weight: bold;">
                                                    Provider                                                </td>
                                                <td style="padding: 3px;">
                                                    vivek kumar                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="label" style="padding: 3px;font-weight: bold;">
                                                    Start                                                </td>
                                                <td style="padding: 3px;">
                                                    22/07/2026 7:00 am                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="label" style="padding: 3px;font-weight: bold;">
                                                    End                                                </td>
                                                <td style="padding: 3px;">
                                                    22/07/2026 7:30 am
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="label" style="padding: 3px;font-weight: bold;">
                                                    Timezone                                                </td>
                                                <td style="padding: 3px;">
                                                    UTC                                                </td>
                                            </tr>

                                                                                            <tr>
                                                    <td class="label" style="padding: 3px;font-weight: bold;">
                                                        Status                                                    </td>
                                                    <td style="padding: 3px;">
                                                        Confirmed                                                    </td>
                                                </tr>
                                            
                                                                                        <tr>
                                                <td class="label" style="padding: 3px;font-weight: bold;">
                                                    Description                                                </td>
                                                <td style="padding: 3px;">
                                                    bfjkebfkerfbj,erbjk                                                </td>
                                            </tr>
                                            
                                            
                                            
                                                                                    </table>

                                        <br>

                                        <h2 style="text-align: center;">
                                            Customer Details                                        </h2>

                                        <table id="customer-details" class="details-table" align="center">
                                                                                            <tr>
                                                    <td class="label" style="padding: 3px;font-weight: bold;">
                                                        Name                                                    </td>
                                                    <td style="padding: 3px;">
                                                        James Doe                                                    </td>
                                                </tr>
                                            
                                                                                            <tr>
                                                    <td class="label" style="padding: 3px;font-weight: bold;">
                                                        Email                                                    </td>
                                                    <td style="padding: 3px;">
                                                        james@example.org                                                    </td>
                                                </tr>
                                            
                                                                                            <tr>
                                                    <td class="label" style="padding: 3px;font-weight: bold;">
                                                        Phone Number                                                    </td>
                                                    <td style="padding: 3px;">
                                                        +10000000000                                                    </td>
                                                </tr>
                                            
                                            
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                </table>

                                        <br>
                                        <br>

                                        <table class="btn btn-primary" role="presentation" border="0" cellpadding="0" cellspacing="0">
                                            <tbody>
                                                <tr>
                                                    <td align="center">
                                                        <table role="presentation" border="0" cellpadding="0" cellspacing="0">
                                                            <tbody>
                                                                <tr>
                                                                    <td>
                                                                        <a href="http://localhost/easy/index.php/booking/reschedule/4SMeDUwo15X2" target="_blank">Reschedule / Cancel Appointment</a>
                                                                    </td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                        
                                        
                                    </td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                    
                    <!-- END MAIN CONTENT AREA -->
                </table>
                
                <!-- END CENTERED WHITE CONTAINER -->

                <!-- START FOOTER -->
                <div class="footer">
                    <table role="presentation" border="0" cellpadding="0" cellspacing="0">
                        <tr>
                            <td class="content-block powered-by">
                                Powered by
                                <a href="https://easyappointments.org" style="text-decoration: none;">
                                    Easy!Appointments
                                </a>
                                |
                                <a href="https://example.org" style="text-decoration: none;">
                                    Company Name                                </a>
                            </td>
                        </tr>
                    </table>
                </div>
                <!-- END FOOTER -->

            </div>
        </td>
        <td>&nbsp;</td>
    </tr>
</table>
</body>
</html>

--b3=_unsRqEKN9t5LHmGdGjiU75nwKH74yLtMFc7LjtE
Content-Type: image/png; name=logo.png
Content-Transfer-Encoding: base64
Content-ID: <logo.png>
Content-Disposition: inline; filename=logo.png

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
TkSuQmCC

--b3=_unsRqEKN9t5LHmGdGjiU75nwKH74yLtMFc7LjtE--


--b2=_unsRqEKN9t5LHmGdGjiU75nwKH74yLtMFc7LjtE--

--b1=_unsRqEKN9t5LHmGdGjiU75nwKH74yLtMFc7LjtE
Content-Type: text/calendar; name=invitation.ics
Content-Transfer-Encoding: base64
Content-Disposition: attachment; filename=invitation.ics

QkVHSU46VkNBTEVOREFSDQpWRVJTSU9OOjIuMA0KUFJPRElEOi0vL0Vhc3lBcHBvaW50bWVudHMv
L09wZW4gU291cmNlIFdlYiBTY2hlZHVsZXIvL0VODQpDQUxTQ0FMRTpHUkVHT1JJQU4NCk1FVEhP
RDpSRVFVRVNUDQpCRUdJTjpWVElNRVpPTkUNClRaSUQ6RXVyb3BlL0Jlcmxpbg0KQkVHSU46U1RB
TkRBUkQNCkRUU1RBUlQ6MjAyNjEwMjVUMDEwMDAwWg0KVFpPRkZTRVRUTzorMDEwMA0KVFpPRkZT
RVRGUk9NOiswMjAwDQpSUlVMRTpGUkVRPVlFQVJMWTtCWU1PTlRIPTExO0JZREFZPTFTVQ0KRU5E
OlNUQU5EQVJEDQpCRUdJTjpEQVlMSUdIVA0KRFRTVEFSVDoyMDI2MDMyOVQwMTAwMDBaDQpUWk9G
RlNFVFRPOiswMjAwDQpUWk9GRlNFVEZST006KzAxMDANClJSVUxFOkZSRVE9WUVBUkxZO0JZTU9O
VEg9MztCWURBWT0yU1UNCkVORDpEQVlMSUdIVA0KRU5EOlZUSU1FWk9ORQ0KQkVHSU46VkVWRU5U
DQpVSUQ6ZWEtZWNjYmM4N2U0YjVjZTJmZTI4MzA4ZmQ5ZjJhN2JhZjMNCkRUU1RBUlQ6MjAyNjA3
MjJUMDcwMDAwWg0KRFRFTkQ6MjAyNjA3MjJUMDczMDAwWg0KU0VRVUVOQ0U6MTc4NDc5NzYzOA0K
U1RBVFVTOkNPTkZJUk1FRA0KU1VNTUFSWTpoYWlyIGN1dHRpbmcNCkRFU0NSSVBUSU9OOlxuUHJv
dmlkZXJcblxuTmFtZTogdml2ZWsga3VtYXJcbkVtYWlsOiByYWo5NzNhbnNodWxAZ21haWwNCiAu
Y29tXG5QaG9uZSBOdW1iZXI6IFxuQWRkcmVzczogXG5DaXR5OiBcblppcCBDb2RlOiBcblxuQ3Vz
dG9tZXJcblxuTmFtDQogZTogSmFtZXMgRG9lXG5FbWFpbDogamFtZXNAZXhhbXBsZS5vcmdcblBo
b25lIE51bWJlcjogKzEwMDAwMDAwMDAwXG5BZA0KIGRyZXNzOiBcbkNpdHk6IFxuWmlwIENvZGU6
IFxuXG5Ob3Rlc1xuXG4NCkxPQ0FUSU9OOm5vaWRhIHNlYyA2Mw0KRFRTVEFNUDoyMDI2MDcyM1Qw
OTA3MTlaDQpBVFRFTkRFRTtDVVRZUEU9SU5ESVZJRFVBTDtST0xFPVJFUS1QQVJUSUNJUEFOVDtQ
QVJUU1RBVD1ORUVEUy1BQ1RJT047DQogUlNWUD1UUlVFO0NOPUphbWVzIERvZTptYWlsdG86amFt
ZXNAZXhhbXBsZS5vcmcNCkFUVEVOREVFO0NVVFlQRT1JTkRJVklEVUFMO1JPTEU9UkVRLVBBUlRJ
Q0lQQU5UO1BBUlRTVEFUPUFDQ0VQVEVEO1JTVlANCiA9RkFMU0U7Q049dml2ZWsga3VtYXI6bWFp
bHRvOnJhajk3M2Fuc2h1bEBnbWFpbC5jb20NCk9SR0FOSVpFUjtDTj12aXZlayBrdW1hcjptYWls
dG86cmFqOTczYW5zaHVsQGdtYWlsLmNvbQ0KQkVHSU46VkFMQVJNDQpUUklHR0VSO1ZBTFVFPURB
VEUtVElNRToyMDI2MDcyMlQwNjQ1MDBaDQpBQ1RJT046RU1BSUwNClNVTU1BUlk6QWxhcm0gbm90
aWZpY2F0aW9uDQpERVNDUklQVElPTjpUaGlzIGlzIGFuIGV2ZW50IHJlbWluZGVyDQpBVFRFTkRF
RTtDVVRZUEU9SU5ESVZJRFVBTDtST0xFPVJFUS1QQVJUSUNJUEFOVDtQQVJUU1RBVD1ORUVEUy1B
Q1RJT047DQogUlNWUD1UUlVFO0NOPUphbWVzIERvZTptYWlsdG86amFtZXNAZXhhbXBsZS5vcmcN
CkVORDpWQUxBUk0NCkJFR0lOOlZBTEFSTQ0KVFJJR0dFUjtWQUxVRT1EQVRFLVRJTUU6MjAyNjA3
MjJUMDYwMDAwWg0KQUNUSU9OOkVNQUlMDQpTVU1NQVJZOkFsYXJtIG5vdGlmaWNhdGlvbg0KREVT
Q1JJUFRJT046VGhpcyBpcyBhbiBldmVudCByZW1pbmRlcg0KQVRURU5ERUU7Q1VUWVBFPUlORElW
SURVQUw7Uk9MRT1SRVEtUEFSVElDSVBBTlQ7UEFSVFNUQVQ9TkVFRFMtQUNUSU9OOw0KIFJTVlA9
VFJVRTtDTj1KYW1lcyBEb2U6bWFpbHRvOmphbWVzQGV4YW1wbGUub3JnDQpFTkQ6VkFMQVJNDQpF
TkQ6VkVWRU5UDQpFTkQ6VkNBTEVOREFSDQo=

--b1=_unsRqEKN9t5LHmGdGjiU75nwKH74yLtMFc7LjtE--
',
            ),
          ),
          1 => 
          array (
            'file' => 'C:\\xampp\\htdocs\\easy\\vendor\\phpmailer\\phpmailer\\src\\PHPMailer.php',
            'line' => 1670,
            'function' => 'postSend',
            'class' => 'PHPMailer\\PHPMailer\\PHPMailer',
            'type' => '->',
            'args' => 
            array (
            ),
          ),
          2 => 
          array (
            'file' => 'C:\\xampp\\htdocs\\easy\\application\\libraries\\Email_messages.php',
            'line' => 119,
            'function' => 'send',
            'class' => 'PHPMailer\\PHPMailer\\PHPMailer',
            'type' => '->',
            'args' => 
            array (
            ),
          ),
          3 => 
          array (
            'file' => 'C:\\xampp\\htdocs\\easy\\application\\libraries\\Notifications.php',
            'line' => 84,
            'function' => 'send_appointment_saved',
            'class' => 'Email_messages',
            'type' => '->',
            'args' => 
            array (
              0 => 
              array (
                'id' => 3,
                'create_datetime' => '2026-07-23 11:07:18',
                'update_datetime' => '2026-07-23 11:07:18',
                'book_datetime' => '2026-07-23 11:07:18',
                'start_datetime' => '2026-07-22 07:00:00',
                'end_datetime' => '2026-07-22 07:30:00',
                'location' => '',
                'meeting_link' => '',
                'notes' => '',
                'hash' => '4SMeDUwo15X2',
                'color' => '#7cbae8',
                'status' => 'Confirmed',
                'is_unavailability' => false,
                'id_users_provider' => 5,
                'id_users_customer' => 3,
                'id_services' => 2,
                'id_google_calendar' => NULL,
                'id_caldav_calendar' => NULL,
              ),
              1 => 
              array (
                'id' => 5,
                'create_datetime' => '2026-07-22 13:13:04',
                'update_datetime' => '2026-07-22 13:13:04',
                'first_name' => 'vivek',
                'last_name' => 'kumar',
                'email' => 'raj973anshul@gmail.com',
                'mobile_number' => NULL,
                'phone_number' => '',
                'address' => '',
                'city' => '',
                'state' => '',
                'zip_code' => '',
                'notes' => '',
                'timezone' => 'Europe/Berlin',
                'language' => 'english',
                'custom_field_1' => NULL,
                'custom_field_2' => NULL,
                'custom_field_3' => NULL,
                'custom_field_4' => NULL,
                'custom_field_5' => NULL,
                'is_private' => false,
                'ldap_dn' => NULL,
                'id_roles' => 2,
                'settings' => 
                array (
                  'username' => 'vivekkumar',
                  'password_reset_token' => NULL,
                  'password_reset_expires' => NULL,
                  'working_plan' => '{"sunday":{"start":"09:00","end":"18:00","breaks":[{"start":"14:30","end":"15:00"}]},"monday":{"start":"09:00","end":"18:00","breaks":[{"start":"14:30","end":"15:00"}]},"tuesday":{"start":"09:00","end":"18:00","breaks":[{"start":"14:30","end":"15:00"}]},"wednesday":{"start":"09:00","end":"18:00","breaks":[{"start":"14:30","end":"15:00"}]},"thursday":{"start":"09:00","end":"18:00","breaks":[{"start":"14:30","end":"15:00"}]},"friday":{"start":"09:00","end":"18:00","breaks":[{"start":"14:30","end":"15:00"}]},"saturday":{"start":"09:00","end":"18:00","breaks":[{"start":"14:30","end":"15:00"}]}}',
                  'working_plan_exceptions' => '[]',
                  'notifications' => '1',
                  'google_sync' => NULL,
                  'google_token' => NULL,
                  'google_calendar' => NULL,
                  'caldav_sync' => '0',
                  'caldav_url' => NULL,
                  'caldav_username' => NULL,
                  'caldav_password' => NULL,
                  'sync_past_days' => '30',
                  'sync_future_days' => '90',
                  'calendar_view' => 'table',
                ),
                'services' => 
                array (
                  0 => 1,
                  1 => 2,
                ),
              ),
              2 => 
              array (
                'id' => 2,
                'create_datetime' => '2026-07-23 10:51:48',
                'update_datetime' => '2026-07-23 10:51:48',
                'name' => 'hair cutting',
                'duration' => '30',
                'price' => 50.0,
                'currency' => '',
                'description' => 'bfjkebfkerfbj,erbjk',
                'slot_interval' => '15',
                'color' => '#7cbae8',
                'location' => 'noida sec 63',
                'attendants_number' => 1,
                'is_private' => false,
                'id_service_categories' => 1,
              ),
              3 => 
              array (
                'id' => 3,
                'create_datetime' => '2026-07-22 11:55:43',
                'update_datetime' => '2026-07-23 11:07:18',
                'first_name' => 'James',
                'last_name' => 'Doe',
                'email' => 'james@example.org',
                'mobile_number' => NULL,
                'phone_number' => '+10000000000',
                'address' => '',
                'city' => '',
                'state' => NULL,
                'zip_code' => '',
                'notes' => '',
                'timezone' => 'UTC',
                'language' => 'english',
                'custom_field_1' => NULL,
                'custom_field_2' => NULL,
                'custom_field_3' => NULL,
                'custom_field_4' => NULL,
                'custom_field_5' => NULL,
                'is_private' => '0',
                'ldap_dn' => NULL,
                'id_roles' => 3,
              ),
              4 => 
              array (
                'company_name' => 'Company Name',
                'company_link' => 'https://example.org',
                'company_email' => 'info@example.org',
                'company_color' => NULL,
                'date_format' => 'DMY',
                'time_format' => 'regular',
              ),
              5 => 'Your appointment has been successfully booked',
              6 => 'Thank you for arranging an appointment with us. Below you can see the appointment details. Make changes by clicking the appointment link.',
              7 => 'http://localhost/easy/index.php/booking/reschedule/4SMeDUwo15X2',
              8 => 'james@example.org',
              9 => 'BEGIN:VCALENDAR
VERSION:2.0
PRODID:-//EasyAppointments//Open Source Web Scheduler//EN
CALSCALE:GREGORIAN
METHOD:REQUEST
BEGIN:VTIMEZONE
TZID:Europe/Berlin
BEGIN:STANDARD
DTSTART:20261025T010000Z
TZOFFSETTO:+0100
TZOFFSETFROM:+0200
RRULE:FREQ=YEARLY;BYMONTH=11;BYDAY=1SU
END:STANDARD
BEGIN:DAYLIGHT
DTSTART:20260329T010000Z
TZOFFSETTO:+0200
TZOFFSETFROM:+0100
RRULE:FREQ=YEARLY;BYMONTH=3;BYDAY=2SU
END:DAYLIGHT
END:VTIMEZONE
BEGIN:VEVENT
UID:ea-eccbc87e4b5ce2fe28308fd9f2a7baf3
DTSTART:20260722T070000Z
DTEND:20260722T073000Z
SEQUENCE:1784797638
STATUS:CONFIRMED
SUMMARY:hair cutting
DESCRIPTION:\\nProvider\\n\\nName: vivek kumar\\nEmail: raj973anshul@gmail
 .com\\nPhone Number: \\nAddress: \\nCity: \\nZip Code: \\n\\nCustomer\\n\\nNam
 e: James Doe\\nEmail: james@example.org\\nPhone Number: +10000000000\\nAd
 dress: \\nCity: \\nZip Code: \\n\\nNotes\\n\\n
LOCATION:noida sec 63
DTSTAMP:20260723T090719Z
ATTENDEE;CUTYPE=INDIVIDUAL;ROLE=REQ-PARTICIPANT;PARTSTAT=NEEDS-ACTION;
 RSVP=TRUE;CN=James Doe:mailto:james@example.org
ATTENDEE;CUTYPE=INDIVIDUAL;ROLE=REQ-PARTICIPANT;PARTSTAT=ACCEPTED;RSVP
 =FALSE;CN=vivek kumar:mailto:raj973anshul@gmail.com
ORGANIZER;CN=vivek kumar:mailto:raj973anshul@gmail.com
BEGIN:VALARM
TRIGGER;VALUE=DATE-TIME:20260722T064500Z
ACTION:EMAIL
SUMMARY:Alarm notification
DESCRIPTION:This is an event reminder
ATTENDEE;CUTYPE=INDIVIDUAL;ROLE=REQ-PARTICIPANT;PARTSTAT=NEEDS-ACTION;
 RSVP=TRUE;CN=James Doe:mailto:james@example.org
END:VALARM
BEGIN:VALARM
TRIGGER;VALUE=DATE-TIME:20260722T060000Z
ACTION:EMAIL
SUMMARY:Alarm notification
DESCRIPTION:This is an event reminder
ATTENDEE;CUTYPE=INDIVIDUAL;ROLE=REQ-PARTICIPANT;PARTSTAT=NEEDS-ACTION;
 RSVP=TRUE;CN=James Doe:mailto:james@example.org
END:VALARM
END:VEVENT
END:VCALENDAR
',
              10 => 'UTC',
            ),
          ),
          4 => 
          array (
            'file' => 'C:\\xampp\\htdocs\\easy\\application\\controllers\\Calendar.php',
            'line' => 389,
            'function' => 'notify_appointment_saved',
            'class' => 'Notifications',
            'type' => '->',
            'args' => 
            array (
              0 => 
              array (
                'id' => 3,
                'create_datetime' => '2026-07-23 11:07:18',
                'update_datetime' => '2026-07-23 11:07:18',
                'book_datetime' => '2026-07-23 11:07:18',
                'start_datetime' => '2026-07-22 09:00:00',
                'end_datetime' => '2026-07-22 09:30:00',
                'location' => '',
                'meeting_link' => '',
                'notes' => '',
                'hash' => '4SMeDUwo15X2',
                'color' => '#7cbae8',
                'status' => 'Confirmed',
                'is_unavailability' => false,
                'id_users_provider' => 5,
                'id_users_customer' => 3,
                'id_services' => 2,
                'id_google_calendar' => NULL,
                'id_caldav_calendar' => NULL,
              ),
              1 => 
              array (
                'id' => 2,
                'create_datetime' => '2026-07-23 10:51:48',
                'update_datetime' => '2026-07-23 10:51:48',
                'name' => 'hair cutting',
                'duration' => '30',
                'price' => 50.0,
                'currency' => '',
                'description' => 'bfjkebfkerfbj,erbjk',
                'slot_interval' => '15',
                'color' => '#7cbae8',
                'location' => 'noida sec 63',
                'attendants_number' => 1,
                'is_private' => false,
                'id_service_categories' => 1,
              ),
              2 => 
              array (
                'id' => 5,
                'create_datetime' => '2026-07-22 13:13:04',
                'update_datetime' => '2026-07-22 13:13:04',
                'first_name' => 'vivek',
                'last_name' => 'kumar',
                'email' => 'raj973anshul@gmail.com',
                'mobile_number' => NULL,
                'phone_number' => '',
                'address' => '',
                'city' => '',
                'state' => '',
                'zip_code' => '',
                'notes' => '',
                'timezone' => 'Europe/Berlin',
                'language' => 'english',
                'custom_field_1' => NULL,
                'custom_field_2' => NULL,
                'custom_field_3' => NULL,
                'custom_field_4' => NULL,
                'custom_field_5' => NULL,
                'is_private' => false,
                'ldap_dn' => NULL,
                'id_roles' => 2,
                'settings' => 
                array (
                  'username' => 'vivekkumar',
                  'password_reset_token' => NULL,
                  'password_reset_expires' => NULL,
                  'working_plan' => '{"sunday":{"start":"09:00","end":"18:00","breaks":[{"start":"14:30","end":"15:00"}]},"monday":{"start":"09:00","end":"18:00","breaks":[{"start":"14:30","end":"15:00"}]},"tuesday":{"start":"09:00","end":"18:00","breaks":[{"start":"14:30","end":"15:00"}]},"wednesday":{"start":"09:00","end":"18:00","breaks":[{"start":"14:30","end":"15:00"}]},"thursday":{"start":"09:00","end":"18:00","breaks":[{"start":"14:30","end":"15:00"}]},"friday":{"start":"09:00","end":"18:00","breaks":[{"start":"14:30","end":"15:00"}]},"saturday":{"start":"09:00","end":"18:00","breaks":[{"start":"14:30","end":"15:00"}]}}',
                  'working_plan_exceptions' => '[]',
                  'notifications' => '1',
                  'google_sync' => NULL,
                  'google_token' => NULL,
                  'google_calendar' => NULL,
                  'caldav_sync' => '0',
                  'caldav_url' => NULL,
                  'caldav_username' => NULL,
                  'caldav_password' => NULL,
                  'sync_past_days' => '30',
                  'sync_future_days' => '90',
                  'calendar_view' => 'table',
                ),
                'services' => 
                array (
                  0 => 1,
                  1 => 2,
                ),
              ),
              3 => 
              array (
                'id' => 3,
                'create_datetime' => '2026-07-22 11:55:43',
                'update_datetime' => '2026-07-23 11:07:18',
                'first_name' => 'James',
                'last_name' => 'Doe',
                'email' => 'james@example.org',
                'mobile_number' => NULL,
                'phone_number' => '+10000000000',
                'address' => '',
                'city' => '',
                'state' => NULL,
                'zip_code' => '',
                'notes' => '',
                'timezone' => 'UTC',
                'language' => 'english',
                'custom_field_1' => NULL,
                'custom_field_2' => NULL,
                'custom_field_3' => NULL,
                'custom_field_4' => NULL,
                'custom_field_5' => NULL,
                'is_private' => '0',
                'ldap_dn' => NULL,
                'id_roles' => 3,
              ),
              4 => 
              array (
                'company_name' => 'Company Name',
                'company_link' => 'https://example.org',
                'company_email' => 'info@example.org',
                'company_color' => NULL,
                'date_format' => 'DMY',
                'time_format' => 'regular',
              ),
              5 => false,
            ),
          ),
          5 => 
          array (
            'file' => 'C:\\xampp\\htdocs\\easy\\system\\core\\CodeIgniter.php',
            'line' => 481,
            'function' => 'save_appointment',
            'class' => 'Calendar',
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
      )),
      1 => 'appointment-saved to customer',
      2 => 3,
    ),
  ),
  2 => 
  array (
    'file' => 'C:\\xampp\\htdocs\\easy\\application\\controllers\\Calendar.php',
    'line' => 389,
    'function' => 'notify_appointment_saved',
    'class' => 'Notifications',
    'type' => '->',
    'args' => 
    array (
      0 => 
      array (
        'id' => 3,
        'create_datetime' => '2026-07-23 11:07:18',
        'update_datetime' => '2026-07-23 11:07:18',
        'book_datetime' => '2026-07-23 11:07:18',
        'start_datetime' => '2026-07-22 09:00:00',
        'end_datetime' => '2026-07-22 09:30:00',
        'location' => '',
        'meeting_link' => '',
        'notes' => '',
        'hash' => '4SMeDUwo15X2',
        'color' => '#7cbae8',
        'status' => 'Confirmed',
        'is_unavailability' => false,
        'id_users_provider' => 5,
        'id_users_customer' => 3,
        'id_services' => 2,
        'id_google_calendar' => NULL,
        'id_caldav_calendar' => NULL,
      ),
      1 => 
      array (
        'id' => 2,
        'create_datetime' => '2026-07-23 10:51:48',
        'update_datetime' => '2026-07-23 10:51:48',
        'name' => 'hair cutting',
        'duration' => '30',
        'price' => 50.0,
        'currency' => '',
        'description' => 'bfjkebfkerfbj,erbjk',
        'slot_interval' => '15',
        'color' => '#7cbae8',
        'location' => 'noida sec 63',
        'attendants_number' => 1,
        'is_private' => false,
        'id_service_categories' => 1,
      ),
      2 => 
      array (
        'id' => 5,
        'create_datetime' => '2026-07-22 13:13:04',
        'update_datetime' => '2026-07-22 13:13:04',
        'first_name' => 'vivek',
        'last_name' => 'kumar',
        'email' => 'raj973anshul@gmail.com',
        'mobile_number' => NULL,
        'phone_number' => '',
        'address' => '',
        'city' => '',
        'state' => '',
        'zip_code' => '',
        'notes' => '',
        'timezone' => 'Europe/Berlin',
        'language' => 'english',
        'custom_field_1' => NULL,
        'custom_field_2' => NULL,
        'custom_field_3' => NULL,
        'custom_field_4' => NULL,
        'custom_field_5' => NULL,
        'is_private' => false,
        'ldap_dn' => NULL,
        'id_roles' => 2,
        'settings' => 
        array (
          'username' => 'vivekkumar',
          'password_reset_token' => NULL,
          'password_reset_expires' => NULL,
          'working_plan' => '{"sunday":{"start":"09:00","end":"18:00","breaks":[{"start":"14:30","end":"15:00"}]},"monday":{"start":"09:00","end":"18:00","breaks":[{"start":"14:30","end":"15:00"}]},"tuesday":{"start":"09:00","end":"18:00","breaks":[{"start":"14:30","end":"15:00"}]},"wednesday":{"start":"09:00","end":"18:00","breaks":[{"start":"14:30","end":"15:00"}]},"thursday":{"start":"09:00","end":"18:00","breaks":[{"start":"14:30","end":"15:00"}]},"friday":{"start":"09:00","end":"18:00","breaks":[{"start":"14:30","end":"15:00"}]},"saturday":{"start":"09:00","end":"18:00","breaks":[{"start":"14:30","end":"15:00"}]}}',
          'working_plan_exceptions' => '[]',
          'notifications' => '1',
          'google_sync' => NULL,
          'google_token' => NULL,
          'google_calendar' => NULL,
          'caldav_sync' => '0',
          'caldav_url' => NULL,
          'caldav_username' => NULL,
          'caldav_password' => NULL,
          'sync_past_days' => '30',
          'sync_future_days' => '90',
          'calendar_view' => 'table',
        ),
        'services' => 
        array (
          0 => 1,
          1 => 2,
        ),
      ),
      3 => 
      array (
        'id' => 3,
        'create_datetime' => '2026-07-22 11:55:43',
        'update_datetime' => '2026-07-23 11:07:18',
        'first_name' => 'James',
        'last_name' => 'Doe',
        'email' => 'james@example.org',
        'mobile_number' => NULL,
        'phone_number' => '+10000000000',
        'address' => '',
        'city' => '',
        'state' => NULL,
        'zip_code' => '',
        'notes' => '',
        'timezone' => 'UTC',
        'language' => 'english',
        'custom_field_1' => NULL,
        'custom_field_2' => NULL,
        'custom_field_3' => NULL,
        'custom_field_4' => NULL,
        'custom_field_5' => NULL,
        'is_private' => '0',
        'ldap_dn' => NULL,
        'id_roles' => 3,
      ),
      4 => 
      array (
        'company_name' => 'Company Name',
        'company_link' => 'https://example.org',
        'company_email' => 'info@example.org',
        'company_color' => NULL,
        'date_format' => 'DMY',
        'time_format' => 'regular',
      ),
      5 => false,
    ),
  ),
)
ERROR - 2026-07-23 11:07:23 --> Notifications - Could not email appointment-saved to provider (3) : Could not instantiate mail function. Trace: array (
  0 => 
  array (
    'file' => 'C:\\xampp\\htdocs\\easy\\application\\libraries\\Notifications.php',
    'line' => 352,
    'function' => 'log_message',
    'args' => 
    array (
      0 => 'error',
      1 => 'Notifications - Could not email appointment-saved to provider (3) : Could not instantiate mail function.',
    ),
  ),
  1 => 
  array (
    'file' => 'C:\\xampp\\htdocs\\easy\\application\\libraries\\Notifications.php',
    'line' => 129,
    'function' => 'log_exception',
    'class' => 'Notifications',
    'type' => '->',
    'args' => 
    array (
      0 => 
      \PHPMailer\PHPMailer\Exception::__set_state(array(
         'message' => 'Could not instantiate mail function.',
         'string' => '',
         'code' => 2,
         'file' => 'C:\\xampp\\htdocs\\easy\\vendor\\phpmailer\\phpmailer\\src\\PHPMailer.php',
         'line' => 2150,
         'trace' => 
        array (
          0 => 
          array (
            'file' => 'C:\\xampp\\htdocs\\easy\\vendor\\phpmailer\\phpmailer\\src\\PHPMailer.php',
            'line' => 1857,
            'function' => 'mailSend',
            'class' => 'PHPMailer\\PHPMailer\\PHPMailer',
            'type' => '->',
            'args' => 
            array (
              0 => 'Date: Thu, 23 Jul 2026 11:07:21 +0200
From: Company Name <info@example.org>
Reply-To: info@example.org
Message-ID: <pBEHnYaEw1l5jPI1U79GpdfMmbVcEQi5N7nRxLcAxc@localhost>
X-Mailer: PHPMailer 7.1.1 (https://github.com/PHPMailer/PHPMailer)
MIME-Version: 1.0
Content-Type: multipart/mixed;
 boundary="b1=_pBEHnYaEw1l5jPI1U79GpdfMmbVcEQi5N7nRxLcAxc"
Content-Transfer-Encoding: 8bit

',
              1 => '--b1=_pBEHnYaEw1l5jPI1U79GpdfMmbVcEQi5N7nRxLcAxc
Content-Type: multipart/alternative;
 boundary="b2=_pBEHnYaEw1l5jPI1U79GpdfMmbVcEQi5N7nRxLcAxc"

--b2=_pBEHnYaEw1l5jPI1U79GpdfMmbVcEQi5N7nRxLcAxc
Content-Type: text/plain; charset=us-ascii

    
    
    
        Appointment Details | Easy!Appointments
    
    
        /* -------------------------------------
            GLOBAL RESETS
        ------------------------------------- */        /*All the styling goes here*/        img {
            border: none;
            -ms-interpolation-mode: bicubic;
            max-width: 100%;
        }        body {
            background-color: #f6f6f6;
            font-family: sans-serif;
            -webkit-font-smoothing: antialiased;
            font-size: 14px;
            line-height: 1.4;
            margin: 0;
            padding: 0;
            -ms-text-size-adjust: 100%;
            -webkit-text-size-adjust: 100%;
        }        table {
            border-collapse: separate;
            mso-table-lspace: 0pt;
            mso-table-rspace: 0pt;
            width: 100%;
        }        table td {
            font-family: sans-serif;
            font-size: 14px;
            vertical-align: top;
        }        /* -------------------------------------
            BODY & CONTAINER
        ------------------------------------- */        .body {
            background-color: #f6f6f6;
            width: 100%;
        }        /* Set a max-width, and make it display as block so it will automatically stretch to that width, but will also shrink down on a phone or something */
        .container {
            display: block;
            margin: 0 auto !important;
            /* makes it centered */
            max-width: 580px;
            padding: 10px;
            width: 580px;
        }        /* This should also be a block element, so that it will fill 100% of the .container */
        .content {
            box-sizing: border-box;
            display: block;
            margin: 0 auto;
            max-width: 580px;
            padding: 10px;
        }        /* -------------------------------------
            HEADER, FOOTER, MAIN
        ------------------------------------- */
        .main {
            background: #ffffff;
            border-radius: 3px;
            width: 100%;
        }        .wrapper {
            box-sizing: border-box;
            padding: 20px;
        }        .content-block {
            padding-bottom: 10px;
            padding-top: 10px;
        }        .footer {
            clear: both;
            margin-top: 10px;
            text-align: center;
            width: 100%;
        }        .footer td,
        .footer p,
        .footer span,
        .footer a {
            color: #999999;
            font-size: 12px;
            text-align: center;
        }        /* -------------------------------------
            TYPOGRAPHY
        ------------------------------------- */
        h1,
        h2,
        h3,
        h4 {
            color: #000000;
            font-family: sans-serif;
            font-weight: 400;
            line-height: 1.4;
            margin: 0;
            margin-bottom: 15px;
        }        h1 {
            font-size: 24px;
            font-weight: 300;
            text-align: center;
            margin-bottom: 40px;
        }        .label {
            width: 120px;
        }        .details-table {
            margin: 0 0 0 auto;
            width: 85%;
        }        p,
        ul,
        ol {
            font-family: sans-serif;
            font-size: 14px;
            font-weight: normal;
            margin: 0;
            margin-bottom: 15px;
        }        p li,
        ul li,
        ol li {
            list-style-position: inside;
            margin-left: 5px;
        }        a {
            color: #429A82;
            text-decoration: underline;
        }        /* -------------------------------------
            BUTTONS
        ------------------------------------- */
        .btn {
            box-sizing: border-box;
            width: 100%;
        }        .btn > tbody > tr > td {
            padding-bottom: 15px;
        }        .btn table {
            width: auto;
        }        .btn table td {
            background-color: #ffffff;
            border-radius: 5px;
            text-align: center;
        }        .btn a {
            background-color: #ffffff;
            border: solid 1px #429A82;
            border-radius: 5px;
            box-sizing: border-box;
            color: #429A82;
            cursor: pointer;
            display: inline-block;
            font-size: 14px;
            font-weight: bold;
            margin: 0;
            padding: 12px 25px;
            text-decoration: none;
        }        .btn-primary table td {
            background-color: #429A82;
        }        .btn-primary a {
            background-color: #429A82;
            border-color: #429A82;
            color: #ffffff;
        }        /* -------------------------------------
            OTHER STYLES THAT MIGHT BE USEFUL
        ------------------------------------- */
        .last {
            margin-bottom: 0;
        }        .first {
            margin-top: 0;
        }        .align-center {
            text-align: center;
        }        .align-right {
            text-align: right;
        }        .align-left {
            text-align: left;
        }        .clear {
            clear: both;
        }        .mt0 {
            margin-top: 0;
        }        .mb0 {
            margin-bottom: 0;
        }        .preheader {
            color: transparent;
            display: none;
            height: 0;
            max-height: 0;
            max-width: 0;
            opacity: 0;
            overflow: hidden;
            mso-hide: all;
            visibility: hidden;
            width: 0;
        }        .powered-by a {
            text-decoration: none;
        }        hr {
            border: 0;
            border-bottom: 1px solid #f6f6f6;
            margin: 20px 0;
        }        /* -------------------------------------
            RESPONSIVE AND MOBILE FRIENDLY STYLES
        ------------------------------------- */
        @media only screen and (max-width: 620px) {
            table.body h1 {
                font-size: 28px !important;
                margin-bottom: 10px !important;
            }            table.body p,
            table.body ul,
            table.body ol,
            table.body td,
            table.body span,
            table.body a {
                font-size: 16px !important;
            }            table.body .wrapper,
            table.body .article {
                padding: 10px !important;
            }            table.body .content {
                padding: 0 !important;
            }            table.body .container {
                padding: 0 !important;
                width: 100% !important;
            }            table.body .main {
                border-left-width: 0 !important;
                border-radius: 0 !important;
                border-right-width: 0 !important;
            }            table.body .btn table {
                width: 100% !important;
            }            table.body .btn a {
                width: 100% !important;
            }            table.body .img-responsive {
                height: auto !important;
                max-width: 100% !important;
                width: auto !important;
            }
        }        /* -------------------------------------
            PRESERVE THESE STYLES IN THE HEAD
        ------------------------------------- */
        @media all {
            .ExternalClass {
                width: 100%;
            }            .ExternalClass,
            .ExternalClass p,
            .ExternalClass span,
            .ExternalClass font,
            .ExternalClass td,
            .ExternalClass div {
                line-height: 100%;
            }            .apple-link a {
                color: inherit !important;
                font-family: inherit !important;
                font-size: inherit !important;
                font-weight: inherit !important;
                line-height: inherit !important;
                text-decoration: none !important;
            }            #MessageViewBody a {
                color: inherit;
                text-decoration: none;
                font-size: inherit;
                font-family: inherit;
                font-weight: inherit;
                line-height: inherit;
            }            .btn-primary table td:hover {
                background-color: #34495e !important;
            }            .btn-primary a:hover {
                background-color: #34495e !important;
                border-color: #34495e !important;
            }
        }        
        &nbsp;
        
                            
                                    
                    
                        
                            
                                
                                                                            
                                                                                
                                            A new appointment has been added to your plan.                                                                                
                                            You can make changes by clicking the appointment link below.                                                                                
                                            Appointment Details                                                                                
                                            
                                                
                                                    Service                                                
                                                
                                                    hair cutting                                                
                                            
                                            
                                                
                                                    Provider                                                
                                                
                                                    vivek kumar                                                
                                            
                                            
                                                
                                                    Start                                                
                                                
                                                    22/07/2026 9:00 am                                                
                                            
                                            
                                                
                                                    End                                                
                                                
                                                    22/07/2026 9:30 am
                                                
                                            
                                            
                                                
                                                    Timezone                                                
                                                
                                                    Berlin (+1:00)                                                
                                                                                                                                        
                                                    
                                                        Status                                                    
                                                    
                                                        Confirmed                                                    
                                                
                                            
                                                                                        
                                                
                                                    Description                                                
                                                
                                                    bfjkebfkerfbj,erbjk                                                
                                            
                                            
                                            
                                            
                                                                                                                                                                    
                                            Customer Details                                                                                
                                                                                            
                                                    
                                                        Name                                                    
                                                    
                                                        James Doe                                                    
                                                
                                            
                                                                                            
                                                    
                                                        Email                                                    
                                                    
                                                        james@example.org                                                    
                                                
                                            
                                                                                            
                                                    
                                                        Phone Number                                                    
                                                    
                                                        +10000000000                                                    
                                                
                                            
                                            
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                        
                                                                                
                                            
                                                
                                                    
                                                        
                                                            
                                                                
                                                                    
                                                                        Reschedule / Cancel Appointment
                                                                    
                                                                
                                                            
                                                        
                                                    
                                                
                                            
                                        
                                        
                                        
                                    
                                
                            
                        
                    
                    
                    
                
                
                                
                
                    
                        
                            
                                Powered by
                                
                                    Easy!Appointments
                                
                                |
                                
                                    Company Name                                
                            
                        
                    
                
                            
        
        &nbsp;
    

--b2=_pBEHnYaEw1l5jPI1U79GpdfMmbVcEQi5N7nRxLcAxc
Content-Type: multipart/related;
 boundary="b3=_pBEHnYaEw1l5jPI1U79GpdfMmbVcEQi5N7nRxLcAxc";
 type="text/html"

--b3=_pBEHnYaEw1l5jPI1U79GpdfMmbVcEQi5N7nRxLcAxc
Content-Type: text/html; charset=us-ascii


<!doctype html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <title>
        Appointment Details | Easy!Appointments
    </title>
    <style>
        /* -------------------------------------
            GLOBAL RESETS
        ------------------------------------- */

        /*All the styling goes here*/

        img {
            border: none;
            -ms-interpolation-mode: bicubic;
            max-width: 100%;
        }

        body {
            background-color: #f6f6f6;
            font-family: sans-serif;
            -webkit-font-smoothing: antialiased;
            font-size: 14px;
            line-height: 1.4;
            margin: 0;
            padding: 0;
            -ms-text-size-adjust: 100%;
            -webkit-text-size-adjust: 100%;
        }

        table {
            border-collapse: separate;
            mso-table-lspace: 0pt;
            mso-table-rspace: 0pt;
            width: 100%;
        }

        table td {
            font-family: sans-serif;
            font-size: 14px;
            vertical-align: top;
        }

        /* -------------------------------------
            BODY & CONTAINER
        ------------------------------------- */

        .body {
            background-color: #f6f6f6;
            width: 100%;
        }

        /* Set a max-width, and make it display as block so it will automatically stretch to that width, but will also shrink down on a phone or something */
        .container {
            display: block;
            margin: 0 auto !important;
            /* makes it centered */
            max-width: 580px;
            padding: 10px;
            width: 580px;
        }

        /* This should also be a block element, so that it will fill 100% of the .container */
        .content {
            box-sizing: border-box;
            display: block;
            margin: 0 auto;
            max-width: 580px;
            padding: 10px;
        }

        /* -------------------------------------
            HEADER, FOOTER, MAIN
        ------------------------------------- */
        .main {
            background: #ffffff;
            border-radius: 3px;
            width: 100%;
        }

        .wrapper {
            box-sizing: border-box;
            padding: 20px;
        }

        .content-block {
            padding-bottom: 10px;
            padding-top: 10px;
        }

        .footer {
            clear: both;
            margin-top: 10px;
            text-align: center;
            width: 100%;
        }

        .footer td,
        .footer p,
        .footer span,
        .footer a {
            color: #999999;
            font-size: 12px;
            text-align: center;
        }

        /* -------------------------------------
            TYPOGRAPHY
        ------------------------------------- */
        h1,
        h2,
        h3,
        h4 {
            color: #000000;
            font-family: sans-serif;
            font-weight: 400;
            line-height: 1.4;
            margin: 0;
            margin-bottom: 15px;
        }

        h1 {
            font-size: 24px;
            font-weight: 300;
            text-align: center;
            margin-bottom: 40px;
        }

        .label {
            width: 120px;
        }

        .details-table {
            margin: 0 0 0 auto;
            width: 85%;
        }

        p,
        ul,
        ol {
            font-family: sans-serif;
            font-size: 14px;
            font-weight: normal;
            margin: 0;
            margin-bottom: 15px;
        }

        p li,
        ul li,
        ol li {
            list-style-position: inside;
            margin-left: 5px;
        }

        a {
            color: #429A82;
            text-decoration: underline;
        }

        /* -------------------------------------
            BUTTONS
        ------------------------------------- */
        .btn {
            box-sizing: border-box;
            width: 100%;
        }

        .btn > tbody > tr > td {
            padding-bottom: 15px;
        }

        .btn table {
            width: auto;
        }

        .btn table td {
            background-color: #ffffff;
            border-radius: 5px;
            text-align: center;
        }

        .btn a {
            background-color: #ffffff;
            border: solid 1px #429A82;
            border-radius: 5px;
            box-sizing: border-box;
            color: #429A82;
            cursor: pointer;
            display: inline-block;
            font-size: 14px;
            font-weight: bold;
            margin: 0;
            padding: 12px 25px;
            text-decoration: none;
        }

        .btn-primary table td {
            background-color: #429A82;
        }

        .btn-primary a {
            background-color: #429A82;
            border-color: #429A82;
            color: #ffffff;
        }

        /* -------------------------------------
            OTHER STYLES THAT MIGHT BE USEFUL
        ------------------------------------- */
        .last {
            margin-bottom: 0;
        }

        .first {
            margin-top: 0;
        }

        .align-center {
            text-align: center;
        }

        .align-right {
            text-align: right;
        }

        .align-left {
            text-align: left;
        }

        .clear {
            clear: both;
        }

        .mt0 {
            margin-top: 0;
        }

        .mb0 {
            margin-bottom: 0;
        }

        .preheader {
            color: transparent;
            display: none;
            height: 0;
            max-height: 0;
            max-width: 0;
            opacity: 0;
            overflow: hidden;
            mso-hide: all;
            visibility: hidden;
            width: 0;
        }

        .powered-by a {
            text-decoration: none;
        }

        hr {
            border: 0;
            border-bottom: 1px solid #f6f6f6;
            margin: 20px 0;
        }

        /* -------------------------------------
            RESPONSIVE AND MOBILE FRIENDLY STYLES
        ------------------------------------- */
        @media only screen and (max-width: 620px) {
            table.body h1 {
                font-size: 28px !important;
                margin-bottom: 10px !important;
            }

            table.body p,
            table.body ul,
            table.body ol,
            table.body td,
            table.body span,
            table.body a {
                font-size: 16px !important;
            }

            table.body .wrapper,
            table.body .article {
                padding: 10px !important;
            }

            table.body .content {
                padding: 0 !important;
            }

            table.body .container {
                padding: 0 !important;
                width: 100% !important;
            }

            table.body .main {
                border-left-width: 0 !important;
                border-radius: 0 !important;
                border-right-width: 0 !important;
            }

            table.body .btn table {
                width: 100% !important;
            }

            table.body .btn a {
                width: 100% !important;
            }

            table.body .img-responsive {
                height: auto !important;
                max-width: 100% !important;
                width: auto !important;
            }
        }

        /* -------------------------------------
            PRESERVE THESE STYLES IN THE HEAD
        ------------------------------------- */
        @media all {
            .ExternalClass {
                width: 100%;
            }

            .ExternalClass,
            .ExternalClass p,
            .ExternalClass span,
            .ExternalClass font,
            .ExternalClass td,
            .ExternalClass div {
                line-height: 100%;
            }

            .apple-link a {
                color: inherit !important;
                font-family: inherit !important;
                font-size: inherit !important;
                font-weight: inherit !important;
                line-height: inherit !important;
                text-decoration: none !important;
            }

            #MessageViewBody a {
                color: inherit;
                text-decoration: none;
                font-size: inherit;
                font-family: inherit;
                font-weight: inherit;
                line-height: inherit;
            }

            .btn-primary table td:hover {
                background-color: #34495e !important;
            }

            .btn-primary a:hover {
                background-color: #34495e !important;
                border-color: #34495e !important;
            }
        }

    </style>
</head>
<body>
<table role="presentation" border="0" cellpadding="0" cellspacing="0" class="body">
    <tr>
        <td>&nbsp;</td>
        <td class="container">
            <div class="content">

                <!-- START CENTERED WHITE CONTAINER -->
                <table role="presentation" class="main">

                    <!-- START MAIN CONTENT AREA -->
                    <tr>
                        <td class="wrapper">
                            <table role="presentation" border="0" cellpadding="0" cellspacing="0">
                                <tr>
                                    <td>

                                        <!-- Logo at the top center, embedded as CID -->
                                        <img src="cid:logo.png" alt="Logo" style="display:block;max-width:67px; margin: auto auto 24px;">

                                        <h1 style="text-align: center;">
                                            A new appointment has been added to your plan.                                        </h1>

                                        <p style="text-align: center;">
                                            You can make changes by clicking the appointment link below.                                        </p>

                                        <h2 style="text-align: center;">
                                            Appointment Details                                        </h2>

                                        <table id="appointment-details" class="details-table" align="center">
                                            <tr>
                                                <td class="label" style="padding: 3px;font-weight: bold;">
                                                    Service                                                </td>
                                                <td style="padding: 3px;">
                                                    hair cutting                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="label" style="padding: 3px;font-weight: bold;">
                                                    Provider                                                </td>
                                                <td style="padding: 3px;">
                                                    vivek kumar                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="label" style="padding: 3px;font-weight: bold;">
                                                    Start                                                </td>
                                                <td style="padding: 3px;">
                                                    22/07/2026 9:00 am                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="label" style="padding: 3px;font-weight: bold;">
                                                    End                                                </td>
                                                <td style="padding: 3px;">
                                                    22/07/2026 9:30 am
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="label" style="padding: 3px;font-weight: bold;">
                                                    Timezone                                                </td>
                                                <td style="padding: 3px;">
                                                    Berlin (+1:00)                                                </td>
                                            </tr>

                                                                                            <tr>
                                                    <td class="label" style="padding: 3px;font-weight: bold;">
                                                        Status                                                    </td>
                                                    <td style="padding: 3px;">
                                                        Confirmed                                                    </td>
                                                </tr>
                                            
                                                                                        <tr>
                                                <td class="label" style="padding: 3px;font-weight: bold;">
                                                    Description                                                </td>
                                                <td style="padding: 3px;">
                                                    bfjkebfkerfbj,erbjk                                                </td>
                                            </tr>
                                            
                                            
                                            
                                                                                    </table>

                                        <br>

                                        <h2 style="text-align: center;">
                                            Customer Details                                        </h2>

                                        <table id="customer-details" class="details-table" align="center">
                                                                                            <tr>
                                                    <td class="label" style="padding: 3px;font-weight: bold;">
                                                        Name                                                    </td>
                                                    <td style="padding: 3px;">
                                                        James Doe                                                    </td>
                                                </tr>
                                            
                                                                                            <tr>
                                                    <td class="label" style="padding: 3px;font-weight: bold;">
                                                        Email                                                    </td>
                                                    <td style="padding: 3px;">
                                                        james@example.org                                                    </td>
                                                </tr>
                                            
                                                                                            <tr>
                                                    <td class="label" style="padding: 3px;font-weight: bold;">
                                                        Phone Number                                                    </td>
                                                    <td style="padding: 3px;">
                                                        +10000000000                                                    </td>
                                                </tr>
                                            
                                            
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                </table>

                                        <br>
                                        <br>

                                        <table class="btn btn-primary" role="presentation" border="0" cellpadding="0" cellspacing="0">
                                            <tbody>
                                                <tr>
                                                    <td align="center">
                                                        <table role="presentation" border="0" cellpadding="0" cellspacing="0">
                                                            <tbody>
                                                                <tr>
                                                                    <td>
                                                                        <a href="http://localhost/easy/index.php/calendar/reschedule/4SMeDUwo15X2" target="_blank">Reschedule / Cancel Appointment</a>
                                                                    </td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                        
                                        
                                    </td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                    
                    <!-- END MAIN CONTENT AREA -->
                </table>
                
                <!-- END CENTERED WHITE CONTAINER -->

                <!-- START FOOTER -->
                <div class="footer">
                    <table role="presentation" border="0" cellpadding="0" cellspacing="0">
                        <tr>
                            <td class="content-block powered-by">
                                Powered by
                                <a href="https://easyappointments.org" style="text-decoration: none;">
                                    Easy!Appointments
                                </a>
                                |
                                <a href="https://example.org" style="text-decoration: none;">
                                    Company Name                                </a>
                            </td>
                        </tr>
                    </table>
                </div>
                <!-- END FOOTER -->

            </div>
        </td>
        <td>&nbsp;</td>
    </tr>
</table>
</body>
</html>

--b3=_pBEHnYaEw1l5jPI1U79GpdfMmbVcEQi5N7nRxLcAxc
Content-Type: image/png; name=logo.png
Content-Transfer-Encoding: base64
Content-ID: <logo.png>
Content-Disposition: inline; filename=logo.png

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
TkSuQmCC

--b3=_pBEHnYaEw1l5jPI1U79GpdfMmbVcEQi5N7nRxLcAxc--


--b2=_pBEHnYaEw1l5jPI1U79GpdfMmbVcEQi5N7nRxLcAxc--

--b1=_pBEHnYaEw1l5jPI1U79GpdfMmbVcEQi5N7nRxLcAxc
Content-Type: text/calendar; name=invitation.ics
Content-Transfer-Encoding: base64
Content-Disposition: attachment; filename=invitation.ics

QkVHSU46VkNBTEVOREFSDQpWRVJTSU9OOjIuMA0KUFJPRElEOi0vL0Vhc3lBcHBvaW50bWVudHMv
L09wZW4gU291cmNlIFdlYiBTY2hlZHVsZXIvL0VODQpDQUxTQ0FMRTpHUkVHT1JJQU4NCk1FVEhP
RDpSRVFVRVNUDQpCRUdJTjpWVElNRVpPTkUNClRaSUQ6RXVyb3BlL0Jlcmxpbg0KQkVHSU46U1RB
TkRBUkQNCkRUU1RBUlQ6MjAyNjEwMjVUMDEwMDAwWg0KVFpPRkZTRVRUTzorMDEwMA0KVFpPRkZT
RVRGUk9NOiswMjAwDQpSUlVMRTpGUkVRPVlFQVJMWTtCWU1PTlRIPTExO0JZREFZPTFTVQ0KRU5E
OlNUQU5EQVJEDQpCRUdJTjpEQVlMSUdIVA0KRFRTVEFSVDoyMDI2MDMyOVQwMTAwMDBaDQpUWk9G
RlNFVFRPOiswMjAwDQpUWk9GRlNFVEZST006KzAxMDANClJSVUxFOkZSRVE9WUVBUkxZO0JZTU9O
VEg9MztCWURBWT0yU1UNCkVORDpEQVlMSUdIVA0KRU5EOlZUSU1FWk9ORQ0KQkVHSU46VkVWRU5U
DQpVSUQ6ZWEtZWNjYmM4N2U0YjVjZTJmZTI4MzA4ZmQ5ZjJhN2JhZjMNCkRUU1RBUlQ6MjAyNjA3
MjJUMDcwMDAwWg0KRFRFTkQ6MjAyNjA3MjJUMDczMDAwWg0KU0VRVUVOQ0U6MTc4NDc5NzYzOA0K
U1RBVFVTOkNPTkZJUk1FRA0KU1VNTUFSWTpoYWlyIGN1dHRpbmcNCkRFU0NSSVBUSU9OOlxuUHJv
dmlkZXJcblxuTmFtZTogdml2ZWsga3VtYXJcbkVtYWlsOiByYWo5NzNhbnNodWxAZ21haWwNCiAu
Y29tXG5QaG9uZSBOdW1iZXI6IFxuQWRkcmVzczogXG5DaXR5OiBcblppcCBDb2RlOiBcblxuQ3Vz
dG9tZXJcblxuTmFtDQogZTogSmFtZXMgRG9lXG5FbWFpbDogamFtZXNAZXhhbXBsZS5vcmdcblBo
b25lIE51bWJlcjogKzEwMDAwMDAwMDAwXG5BZA0KIGRyZXNzOiBcbkNpdHk6IFxuWmlwIENvZGU6
IFxuXG5Ob3Rlc1xuXG4NCkxPQ0FUSU9OOm5vaWRhIHNlYyA2Mw0KRFRTVEFNUDoyMDI2MDcyM1Qw
OTA3MTlaDQpBVFRFTkRFRTtDVVRZUEU9SU5ESVZJRFVBTDtST0xFPVJFUS1QQVJUSUNJUEFOVDtQ
QVJUU1RBVD1ORUVEUy1BQ1RJT047DQogUlNWUD1UUlVFO0NOPUphbWVzIERvZTptYWlsdG86amFt
ZXNAZXhhbXBsZS5vcmcNCkFUVEVOREVFO0NVVFlQRT1JTkRJVklEVUFMO1JPTEU9UkVRLVBBUlRJ
Q0lQQU5UO1BBUlRTVEFUPUFDQ0VQVEVEO1JTVlANCiA9RkFMU0U7Q049dml2ZWsga3VtYXI6bWFp
bHRvOnJhajk3M2Fuc2h1bEBnbWFpbC5jb20NCk9SR0FOSVpFUjtDTj12aXZlayBrdW1hcjptYWls
dG86cmFqOTczYW5zaHVsQGdtYWlsLmNvbQ0KQkVHSU46VkFMQVJNDQpUUklHR0VSO1ZBTFVFPURB
VEUtVElNRToyMDI2MDcyMlQwNjQ1MDBaDQpBQ1RJT046RU1BSUwNClNVTU1BUlk6QWxhcm0gbm90
aWZpY2F0aW9uDQpERVNDUklQVElPTjpUaGlzIGlzIGFuIGV2ZW50IHJlbWluZGVyDQpBVFRFTkRF
RTtDVVRZUEU9SU5ESVZJRFVBTDtST0xFPVJFUS1QQVJUSUNJUEFOVDtQQVJUU1RBVD1ORUVEUy1B
Q1RJT047DQogUlNWUD1UUlVFO0NOPUphbWVzIERvZTptYWlsdG86amFtZXNAZXhhbXBsZS5vcmcN
CkVORDpWQUxBUk0NCkJFR0lOOlZBTEFSTQ0KVFJJR0dFUjtWQUxVRT1EQVRFLVRJTUU6MjAyNjA3
MjJUMDYwMDAwWg0KQUNUSU9OOkVNQUlMDQpTVU1NQVJZOkFsYXJtIG5vdGlmaWNhdGlvbg0KREVT
Q1JJUFRJT046VGhpcyBpcyBhbiBldmVudCByZW1pbmRlcg0KQVRURU5ERUU7Q1VUWVBFPUlORElW
SURVQUw7Uk9MRT1SRVEtUEFSVElDSVBBTlQ7UEFSVFNUQVQ9TkVFRFMtQUNUSU9OOw0KIFJTVlA9
VFJVRTtDTj1KYW1lcyBEb2U6bWFpbHRvOmphbWVzQGV4YW1wbGUub3JnDQpFTkQ6VkFMQVJNDQpF
TkQ6VkVWRU5UDQpFTkQ6VkNBTEVOREFSDQo=

--b1=_pBEHnYaEw1l5jPI1U79GpdfMmbVcEQi5N7nRxLcAxc--
',
            ),
          ),
          1 => 
          array (
            'file' => 'C:\\xampp\\htdocs\\easy\\vendor\\phpmailer\\phpmailer\\src\\PHPMailer.php',
            'line' => 1670,
            'function' => 'postSend',
            'class' => 'PHPMailer\\PHPMailer\\PHPMailer',
            'type' => '->',
            'args' => 
            array (
            ),
          ),
          2 => 
          array (
            'file' => 'C:\\xampp\\htdocs\\easy\\application\\libraries\\Email_messages.php',
            'line' => 119,
            'function' => 'send',
            'class' => 'PHPMailer\\PHPMailer\\PHPMailer',
            'type' => '->',
            'args' => 
            array (
            ),
          ),
          3 => 
          array (
            'file' => 'C:\\xampp\\htdocs\\easy\\application\\libraries\\Notifications.php',
            'line' => 115,
            'function' => 'send_appointment_saved',
            'class' => 'Email_messages',
            'type' => '->',
            'args' => 
            array (
              0 => 
              array (
                'id' => 3,
                'create_datetime' => '2026-07-23 11:07:18',
                'update_datetime' => '2026-07-23 11:07:18',
                'book_datetime' => '2026-07-23 11:07:18',
                'start_datetime' => '2026-07-22 09:00:00',
                'end_datetime' => '2026-07-22 09:30:00',
                'location' => '',
                'meeting_link' => '',
                'notes' => '',
                'hash' => '4SMeDUwo15X2',
                'color' => '#7cbae8',
                'status' => 'Confirmed',
                'is_unavailability' => false,
                'id_users_provider' => 5,
                'id_users_customer' => 3,
                'id_services' => 2,
                'id_google_calendar' => NULL,
                'id_caldav_calendar' => NULL,
              ),
              1 => 
              array (
                'id' => 5,
                'create_datetime' => '2026-07-22 13:13:04',
                'update_datetime' => '2026-07-22 13:13:04',
                'first_name' => 'vivek',
                'last_name' => 'kumar',
                'email' => 'raj973anshul@gmail.com',
                'mobile_number' => NULL,
                'phone_number' => '',
                'address' => '',
                'city' => '',
                'state' => '',
                'zip_code' => '',
                'notes' => '',
                'timezone' => 'Europe/Berlin',
                'language' => 'english',
                'custom_field_1' => NULL,
                'custom_field_2' => NULL,
                'custom_field_3' => NULL,
                'custom_field_4' => NULL,
                'custom_field_5' => NULL,
                'is_private' => false,
                'ldap_dn' => NULL,
                'id_roles' => 2,
                'settings' => 
                array (
                  'username' => 'vivekkumar',
                  'password_reset_token' => NULL,
                  'password_reset_expires' => NULL,
                  'working_plan' => '{"sunday":{"start":"09:00","end":"18:00","breaks":[{"start":"14:30","end":"15:00"}]},"monday":{"start":"09:00","end":"18:00","breaks":[{"start":"14:30","end":"15:00"}]},"tuesday":{"start":"09:00","end":"18:00","breaks":[{"start":"14:30","end":"15:00"}]},"wednesday":{"start":"09:00","end":"18:00","breaks":[{"start":"14:30","end":"15:00"}]},"thursday":{"start":"09:00","end":"18:00","breaks":[{"start":"14:30","end":"15:00"}]},"friday":{"start":"09:00","end":"18:00","breaks":[{"start":"14:30","end":"15:00"}]},"saturday":{"start":"09:00","end":"18:00","breaks":[{"start":"14:30","end":"15:00"}]}}',
                  'working_plan_exceptions' => '[]',
                  'notifications' => '1',
                  'google_sync' => NULL,
                  'google_token' => NULL,
                  'google_calendar' => NULL,
                  'caldav_sync' => '0',
                  'caldav_url' => NULL,
                  'caldav_username' => NULL,
                  'caldav_password' => NULL,
                  'sync_past_days' => '30',
                  'sync_future_days' => '90',
                  'calendar_view' => 'table',
                ),
                'services' => 
                array (
                  0 => 1,
                  1 => 2,
                ),
              ),
              2 => 
              array (
                'id' => 2,
                'create_datetime' => '2026-07-23 10:51:48',
                'update_datetime' => '2026-07-23 10:51:48',
                'name' => 'hair cutting',
                'duration' => '30',
                'price' => 50.0,
                'currency' => '',
                'description' => 'bfjkebfkerfbj,erbjk',
                'slot_interval' => '15',
                'color' => '#7cbae8',
                'location' => 'noida sec 63',
                'attendants_number' => 1,
                'is_private' => false,
                'id_service_categories' => 1,
              ),
              3 => 
              array (
                'id' => 3,
                'create_datetime' => '2026-07-22 11:55:43',
                'update_datetime' => '2026-07-23 11:07:18',
                'first_name' => 'James',
                'last_name' => 'Doe',
                'email' => 'james@example.org',
                'mobile_number' => NULL,
                'phone_number' => '+10000000000',
                'address' => '',
                'city' => '',
                'state' => NULL,
                'zip_code' => '',
                'notes' => '',
                'timezone' => 'UTC',
                'language' => 'english',
                'custom_field_1' => NULL,
                'custom_field_2' => NULL,
                'custom_field_3' => NULL,
                'custom_field_4' => NULL,
                'custom_field_5' => NULL,
                'is_private' => '0',
                'ldap_dn' => NULL,
                'id_roles' => 3,
              ),
              4 => 
              array (
                'company_name' => 'Company Name',
                'company_link' => 'https://example.org',
                'company_email' => 'info@example.org',
                'company_color' => NULL,
                'date_format' => 'DMY',
                'time_format' => 'regular',
              ),
              5 => 'A new appointment has been added to your plan.',
              6 => 'You can make changes by clicking the appointment link below.',
              7 => 'http://localhost/easy/index.php/calendar/reschedule/4SMeDUwo15X2',
              8 => 'raj973anshul@gmail.com',
              9 => 'BEGIN:VCALENDAR
VERSION:2.0
PRODID:-//EasyAppointments//Open Source Web Scheduler//EN
CALSCALE:GREGORIAN
METHOD:REQUEST
BEGIN:VTIMEZONE
TZID:Europe/Berlin
BEGIN:STANDARD
DTSTART:20261025T010000Z
TZOFFSETTO:+0100
TZOFFSETFROM:+0200
RRULE:FREQ=YEARLY;BYMONTH=11;BYDAY=1SU
END:STANDARD
BEGIN:DAYLIGHT
DTSTART:20260329T010000Z
TZOFFSETTO:+0200
TZOFFSETFROM:+0100
RRULE:FREQ=YEARLY;BYMONTH=3;BYDAY=2SU
END:DAYLIGHT
END:VTIMEZONE
BEGIN:VEVENT
UID:ea-eccbc87e4b5ce2fe28308fd9f2a7baf3
DTSTART:20260722T070000Z
DTEND:20260722T073000Z
SEQUENCE:1784797638
STATUS:CONFIRMED
SUMMARY:hair cutting
DESCRIPTION:\\nProvider\\n\\nName: vivek kumar\\nEmail: raj973anshul@gmail
 .com\\nPhone Number: \\nAddress: \\nCity: \\nZip Code: \\n\\nCustomer\\n\\nNam
 e: James Doe\\nEmail: james@example.org\\nPhone Number: +10000000000\\nAd
 dress: \\nCity: \\nZip Code: \\n\\nNotes\\n\\n
LOCATION:noida sec 63
DTSTAMP:20260723T090719Z
ATTENDEE;CUTYPE=INDIVIDUAL;ROLE=REQ-PARTICIPANT;PARTSTAT=NEEDS-ACTION;
 RSVP=TRUE;CN=James Doe:mailto:james@example.org
ATTENDEE;CUTYPE=INDIVIDUAL;ROLE=REQ-PARTICIPANT;PARTSTAT=ACCEPTED;RSVP
 =FALSE;CN=vivek kumar:mailto:raj973anshul@gmail.com
ORGANIZER;CN=vivek kumar:mailto:raj973anshul@gmail.com
BEGIN:VALARM
TRIGGER;VALUE=DATE-TIME:20260722T064500Z
ACTION:EMAIL
SUMMARY:Alarm notification
DESCRIPTION:This is an event reminder
ATTENDEE;CUTYPE=INDIVIDUAL;ROLE=REQ-PARTICIPANT;PARTSTAT=NEEDS-ACTION;
 RSVP=TRUE;CN=James Doe:mailto:james@example.org
END:VALARM
BEGIN:VALARM
TRIGGER;VALUE=DATE-TIME:20260722T060000Z
ACTION:EMAIL
SUMMARY:Alarm notification
DESCRIPTION:This is an event reminder
ATTENDEE;CUTYPE=INDIVIDUAL;ROLE=REQ-PARTICIPANT;PARTSTAT=NEEDS-ACTION;
 RSVP=TRUE;CN=James Doe:mailto:james@example.org
END:VALARM
END:VEVENT
END:VCALENDAR
',
              10 => 'Europe/Berlin',
            ),
          ),
          4 => 
          array (
            'file' => 'C:\\xampp\\htdocs\\easy\\application\\controllers\\Calendar.php',
            'line' => 389,
            'function' => 'notify_appointment_saved',
            'class' => 'Notifications',
            'type' => '->',
            'args' => 
            array (
              0 => 
              array (
                'id' => 3,
                'create_datetime' => '2026-07-23 11:07:18',
                'update_datetime' => '2026-07-23 11:07:18',
                'book_datetime' => '2026-07-23 11:07:18',
                'start_datetime' => '2026-07-22 09:00:00',
                'end_datetime' => '2026-07-22 09:30:00',
                'location' => '',
                'meeting_link' => '',
                'notes' => '',
                'hash' => '4SMeDUwo15X2',
                'color' => '#7cbae8',
                'status' => 'Confirmed',
                'is_unavailability' => false,
                'id_users_provider' => 5,
                'id_users_customer' => 3,
                'id_services' => 2,
                'id_google_calendar' => NULL,
                'id_caldav_calendar' => NULL,
              ),
              1 => 
              array (
                'id' => 2,
                'create_datetime' => '2026-07-23 10:51:48',
                'update_datetime' => '2026-07-23 10:51:48',
                'name' => 'hair cutting',
                'duration' => '30',
                'price' => 50.0,
                'currency' => '',
                'description' => 'bfjkebfkerfbj,erbjk',
                'slot_interval' => '15',
                'color' => '#7cbae8',
                'location' => 'noida sec 63',
                'attendants_number' => 1,
                'is_private' => false,
                'id_service_categories' => 1,
              ),
              2 => 
              array (
                'id' => 5,
                'create_datetime' => '2026-07-22 13:13:04',
                'update_datetime' => '2026-07-22 13:13:04',
                'first_name' => 'vivek',
                'last_name' => 'kumar',
                'email' => 'raj973anshul@gmail.com',
                'mobile_number' => NULL,
                'phone_number' => '',
                'address' => '',
                'city' => '',
                'state' => '',
                'zip_code' => '',
                'notes' => '',
                'timezone' => 'Europe/Berlin',
                'language' => 'english',
                'custom_field_1' => NULL,
                'custom_field_2' => NULL,
                'custom_field_3' => NULL,
                'custom_field_4' => NULL,
                'custom_field_5' => NULL,
                'is_private' => false,
                'ldap_dn' => NULL,
                'id_roles' => 2,
                'settings' => 
                array (
                  'username' => 'vivekkumar',
                  'password_reset_token' => NULL,
                  'password_reset_expires' => NULL,
                  'working_plan' => '{"sunday":{"start":"09:00","end":"18:00","breaks":[{"start":"14:30","end":"15:00"}]},"monday":{"start":"09:00","end":"18:00","breaks":[{"start":"14:30","end":"15:00"}]},"tuesday":{"start":"09:00","end":"18:00","breaks":[{"start":"14:30","end":"15:00"}]},"wednesday":{"start":"09:00","end":"18:00","breaks":[{"start":"14:30","end":"15:00"}]},"thursday":{"start":"09:00","end":"18:00","breaks":[{"start":"14:30","end":"15:00"}]},"friday":{"start":"09:00","end":"18:00","breaks":[{"start":"14:30","end":"15:00"}]},"saturday":{"start":"09:00","end":"18:00","breaks":[{"start":"14:30","end":"15:00"}]}}',
                  'working_plan_exceptions' => '[]',
                  'notifications' => '1',
                  'google_sync' => NULL,
                  'google_token' => NULL,
                  'google_calendar' => NULL,
                  'caldav_sync' => '0',
                  'caldav_url' => NULL,
                  'caldav_username' => NULL,
                  'caldav_password' => NULL,
                  'sync_past_days' => '30',
                  'sync_future_days' => '90',
                  'calendar_view' => 'table',
                ),
                'services' => 
                array (
                  0 => 1,
                  1 => 2,
                ),
              ),
              3 => 
              array (
                'id' => 3,
                'create_datetime' => '2026-07-22 11:55:43',
                'update_datetime' => '2026-07-23 11:07:18',
                'first_name' => 'James',
                'last_name' => 'Doe',
                'email' => 'james@example.org',
                'mobile_number' => NULL,
                'phone_number' => '+10000000000',
                'address' => '',
                'city' => '',
                'state' => NULL,
                'zip_code' => '',
                'notes' => '',
                'timezone' => 'UTC',
                'language' => 'english',
                'custom_field_1' => NULL,
                'custom_field_2' => NULL,
                'custom_field_3' => NULL,
                'custom_field_4' => NULL,
                'custom_field_5' => NULL,
                'is_private' => '0',
                'ldap_dn' => NULL,
                'id_roles' => 3,
              ),
              4 => 
              array (
                'company_name' => 'Company Name',
                'company_link' => 'https://example.org',
                'company_email' => 'info@example.org',
                'company_color' => NULL,
                'date_format' => 'DMY',
                'time_format' => 'regular',
              ),
              5 => false,
            ),
          ),
          5 => 
          array (
            'file' => 'C:\\xampp\\htdocs\\easy\\system\\core\\CodeIgniter.php',
            'line' => 481,
            'function' => 'save_appointment',
            'class' => 'Calendar',
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
      )),
      1 => 'appointment-saved to provider',
      2 => 3,
    ),
  ),
  2 => 
  array (
    'file' => 'C:\\xampp\\htdocs\\easy\\application\\controllers\\Calendar.php',
    'line' => 389,
    'function' => 'notify_appointment_saved',
    'class' => 'Notifications',
    'type' => '->',
    'args' => 
    array (
      0 => 
      array (
        'id' => 3,
        'create_datetime' => '2026-07-23 11:07:18',
        'update_datetime' => '2026-07-23 11:07:18',
        'book_datetime' => '2026-07-23 11:07:18',
        'start_datetime' => '2026-07-22 09:00:00',
        'end_datetime' => '2026-07-22 09:30:00',
        'location' => '',
        'meeting_link' => '',
        'notes' => '',
        'hash' => '4SMeDUwo15X2',
        'color' => '#7cbae8',
        'status' => 'Confirmed',
        'is_unavailability' => false,
        'id_users_provider' => 5,
        'id_users_customer' => 3,
        'id_services' => 2,
        'id_google_calendar' => NULL,
        'id_caldav_calendar' => NULL,
      ),
      1 => 
      array (
        'id' => 2,
        'create_datetime' => '2026-07-23 10:51:48',
        'update_datetime' => '2026-07-23 10:51:48',
        'name' => 'hair cutting',
        'duration' => '30',
        'price' => 50.0,
        'currency' => '',
        'description' => 'bfjkebfkerfbj,erbjk',
        'slot_interval' => '15',
        'color' => '#7cbae8',
        'location' => 'noida sec 63',
        'attendants_number' => 1,
        'is_private' => false,
        'id_service_categories' => 1,
      ),
      2 => 
      array (
        'id' => 5,
        'create_datetime' => '2026-07-22 13:13:04',
        'update_datetime' => '2026-07-22 13:13:04',
        'first_name' => 'vivek',
        'last_name' => 'kumar',
        'email' => 'raj973anshul@gmail.com',
        'mobile_number' => NULL,
        'phone_number' => '',
        'address' => '',
        'city' => '',
        'state' => '',
        'zip_code' => '',
        'notes' => '',
        'timezone' => 'Europe/Berlin',
        'language' => 'english',
        'custom_field_1' => NULL,
        'custom_field_2' => NULL,
        'custom_field_3' => NULL,
        'custom_field_4' => NULL,
        'custom_field_5' => NULL,
        'is_private' => false,
        'ldap_dn' => NULL,
        'id_roles' => 2,
        'settings' => 
        array (
          'username' => 'vivekkumar',
          'password_reset_token' => NULL,
          'password_reset_expires' => NULL,
          'working_plan' => '{"sunday":{"start":"09:00","end":"18:00","breaks":[{"start":"14:30","end":"15:00"}]},"monday":{"start":"09:00","end":"18:00","breaks":[{"start":"14:30","end":"15:00"}]},"tuesday":{"start":"09:00","end":"18:00","breaks":[{"start":"14:30","end":"15:00"}]},"wednesday":{"start":"09:00","end":"18:00","breaks":[{"start":"14:30","end":"15:00"}]},"thursday":{"start":"09:00","end":"18:00","breaks":[{"start":"14:30","end":"15:00"}]},"friday":{"start":"09:00","end":"18:00","breaks":[{"start":"14:30","end":"15:00"}]},"saturday":{"start":"09:00","end":"18:00","breaks":[{"start":"14:30","end":"15:00"}]}}',
          'working_plan_exceptions' => '[]',
          'notifications' => '1',
          'google_sync' => NULL,
          'google_token' => NULL,
          'google_calendar' => NULL,
          'caldav_sync' => '0',
          'caldav_url' => NULL,
          'caldav_username' => NULL,
          'caldav_password' => NULL,
          'sync_past_days' => '30',
          'sync_future_days' => '90',
          'calendar_view' => 'table',
        ),
        'services' => 
        array (
          0 => 1,
          1 => 2,
        ),
      ),
      3 => 
      array (
        'id' => 3,
        'create_datetime' => '2026-07-22 11:55:43',
        'update_datetime' => '2026-07-23 11:07:18',
        'first_name' => 'James',
        'last_name' => 'Doe',
        'email' => 'james@example.org',
        'mobile_number' => NULL,
        'phone_number' => '+10000000000',
        'address' => '',
        'city' => '',
        'state' => NULL,
        'zip_code' => '',
        'notes' => '',
        'timezone' => 'UTC',
        'language' => 'english',
        'custom_field_1' => NULL,
        'custom_field_2' => NULL,
        'custom_field_3' => NULL,
        'custom_field_4' => NULL,
        'custom_field_5' => NULL,
        'is_private' => '0',
        'ldap_dn' => NULL,
        'id_roles' => 3,
      ),
      4 => 
      array (
        'company_name' => 'Company Name',
        'company_link' => 'https://example.org',
        'company_email' => 'info@example.org',
        'company_color' => NULL,
        'date_format' => 'DMY',
        'time_format' => 'regular',
      ),
      5 => false,
    ),
  ),
)
ERROR - 2026-07-23 11:07:23 --> #0 C:\xampp\htdocs\easy\vendor\phpmailer\phpmailer\src\PHPMailer.php(1857): PHPMailer\PHPMailer\PHPMailer->mailSend('Date: Thu, 23 J...', '--b1=_pBEHnYaEw...')
#1 C:\xampp\htdocs\easy\vendor\phpmailer\phpmailer\src\PHPMailer.php(1670): PHPMailer\PHPMailer\PHPMailer->postSend()
#2 C:\xampp\htdocs\easy\application\libraries\Email_messages.php(119): PHPMailer\PHPMailer\PHPMailer->send()
#3 C:\xampp\htdocs\easy\application\libraries\Notifications.php(115): Email_messages->send_appointment_saved(Array, Array, Array, Array, Array, 'A new appointme...', 'You can make ch...', 'http://localhos...', 'raj973anshul@gm...', 'BEGIN:VCALENDAR...', 'Europe/Berlin')
#4 C:\xampp\htdocs\easy\application\controllers\Calendar.php(389): Notifications->notify_appointment_saved(Array, Array, Array, Array, Array, false)
#5 C:\xampp\htdocs\easy\system\core\CodeIgniter.php(481): Calendar->save_appointment()
#6 C:\xampp\htdocs\easy\index.php(344): require_once('C:\\xampp\\htdocs...')
#7 {main} Trace: array (
  0 => 
  array (
    'file' => 'C:\\xampp\\htdocs\\easy\\application\\libraries\\Notifications.php',
    'line' => 356,
    'function' => 'log_message',
    'args' => 
    array (
      0 => 'error',
      1 => '#0 C:\\xampp\\htdocs\\easy\\vendor\\phpmailer\\phpmailer\\src\\PHPMailer.php(1857): PHPMailer\\PHPMailer\\PHPMailer->mailSend(\'Date: Thu, 23 J...\', \'--b1=_pBEHnYaEw...\')
#1 C:\\xampp\\htdocs\\easy\\vendor\\phpmailer\\phpmailer\\src\\PHPMailer.php(1670): PHPMailer\\PHPMailer\\PHPMailer->postSend()
#2 C:\\xampp\\htdocs\\easy\\application\\libraries\\Email_messages.php(119): PHPMailer\\PHPMailer\\PHPMailer->send()
#3 C:\\xampp\\htdocs\\easy\\application\\libraries\\Notifications.php(115): Email_messages->send_appointment_saved(Array, Array, Array, Array, Array, \'A new appointme...\', \'You can make ch...\', \'http://localhos...\', \'raj973anshul@gm...\', \'BEGIN:VCALENDAR...\', \'Europe/Berlin\')
#4 C:\\xampp\\htdocs\\easy\\application\\controllers\\Calendar.php(389): Notifications->notify_appointment_saved(Array, Array, Array, Array, Array, false)
#5 C:\\xampp\\htdocs\\easy\\system\\core\\CodeIgniter.php(481): Calendar->save_appointment()
#6 C:\\xampp\\htdocs\\easy\\index.php(344): require_once(\'C:\\\\xampp\\\\htdocs...\')
#7 {main}',
    ),
  ),
  1 => 
  array (
    'file' => 'C:\\xampp\\htdocs\\easy\\application\\libraries\\Notifications.php',
    'line' => 129,
    'function' => 'log_exception',
    'class' => 'Notifications',
    'type' => '->',
    'args' => 
    array (
      0 => 
      \PHPMailer\PHPMailer\Exception::__set_state(array(
         'message' => 'Could not instantiate mail function.',
         'string' => '',
         'code' => 2,
         'file' => 'C:\\xampp\\htdocs\\easy\\vendor\\phpmailer\\phpmailer\\src\\PHPMailer.php',
         'line' => 2150,
         'trace' => 
        array (
          0 => 
          array (
            'file' => 'C:\\xampp\\htdocs\\easy\\vendor\\phpmailer\\phpmailer\\src\\PHPMailer.php',
            'line' => 1857,
            'function' => 'mailSend',
            'class' => 'PHPMailer\\PHPMailer\\PHPMailer',
            'type' => '->',
            'args' => 
            array (
              0 => 'Date: Thu, 23 Jul 2026 11:07:21 +0200
From: Company Name <info@example.org>
Reply-To: info@example.org
Message-ID: <pBEHnYaEw1l5jPI1U79GpdfMmbVcEQi5N7nRxLcAxc@localhost>
X-Mailer: PHPMailer 7.1.1 (https://github.com/PHPMailer/PHPMailer)
MIME-Version: 1.0
Content-Type: multipart/mixed;
 boundary="b1=_pBEHnYaEw1l5jPI1U79GpdfMmbVcEQi5N7nRxLcAxc"
Content-Transfer-Encoding: 8bit

',
              1 => '--b1=_pBEHnYaEw1l5jPI1U79GpdfMmbVcEQi5N7nRxLcAxc
Content-Type: multipart/alternative;
 boundary="b2=_pBEHnYaEw1l5jPI1U79GpdfMmbVcEQi5N7nRxLcAxc"

--b2=_pBEHnYaEw1l5jPI1U79GpdfMmbVcEQi5N7nRxLcAxc
Content-Type: text/plain; charset=us-ascii

    
    
    
        Appointment Details | Easy!Appointments
    
    
        /* -------------------------------------
            GLOBAL RESETS
        ------------------------------------- */        /*All the styling goes here*/        img {
            border: none;
            -ms-interpolation-mode: bicubic;
            max-width: 100%;
        }        body {
            background-color: #f6f6f6;
            font-family: sans-serif;
            -webkit-font-smoothing: antialiased;
            font-size: 14px;
            line-height: 1.4;
            margin: 0;
            padding: 0;
            -ms-text-size-adjust: 100%;
            -webkit-text-size-adjust: 100%;
        }        table {
            border-collapse: separate;
            mso-table-lspace: 0pt;
            mso-table-rspace: 0pt;
            width: 100%;
        }        table td {
            font-family: sans-serif;
            font-size: 14px;
            vertical-align: top;
        }        /* -------------------------------------
            BODY & CONTAINER
        ------------------------------------- */        .body {
            background-color: #f6f6f6;
            width: 100%;
        }        /* Set a max-width, and make it display as block so it will automatically stretch to that width, but will also shrink down on a phone or something */
        .container {
            display: block;
            margin: 0 auto !important;
            /* makes it centered */
            max-width: 580px;
            padding: 10px;
            width: 580px;
        }        /* This should also be a block element, so that it will fill 100% of the .container */
        .content {
            box-sizing: border-box;
            display: block;
            margin: 0 auto;
            max-width: 580px;
            padding: 10px;
        }        /* -------------------------------------
            HEADER, FOOTER, MAIN
        ------------------------------------- */
        .main {
            background: #ffffff;
            border-radius: 3px;
            width: 100%;
        }        .wrapper {
            box-sizing: border-box;
            padding: 20px;
        }        .content-block {
            padding-bottom: 10px;
            padding-top: 10px;
        }        .footer {
            clear: both;
            margin-top: 10px;
            text-align: center;
            width: 100%;
        }        .footer td,
        .footer p,
        .footer span,
        .footer a {
            color: #999999;
            font-size: 12px;
            text-align: center;
        }        /* -------------------------------------
            TYPOGRAPHY
        ------------------------------------- */
        h1,
        h2,
        h3,
        h4 {
            color: #000000;
            font-family: sans-serif;
            font-weight: 400;
            line-height: 1.4;
            margin: 0;
            margin-bottom: 15px;
        }        h1 {
            font-size: 24px;
            font-weight: 300;
            text-align: center;
            margin-bottom: 40px;
        }        .label {
            width: 120px;
        }        .details-table {
            margin: 0 0 0 auto;
            width: 85%;
        }        p,
        ul,
        ol {
            font-family: sans-serif;
            font-size: 14px;
            font-weight: normal;
            margin: 0;
            margin-bottom: 15px;
        }        p li,
        ul li,
        ol li {
            list-style-position: inside;
            margin-left: 5px;
        }        a {
            color: #429A82;
            text-decoration: underline;
        }        /* -------------------------------------
            BUTTONS
        ------------------------------------- */
        .btn {
            box-sizing: border-box;
            width: 100%;
        }        .btn > tbody > tr > td {
            padding-bottom: 15px;
        }        .btn table {
            width: auto;
        }        .btn table td {
            background-color: #ffffff;
            border-radius: 5px;
            text-align: center;
        }        .btn a {
            background-color: #ffffff;
            border: solid 1px #429A82;
            border-radius: 5px;
            box-sizing: border-box;
            color: #429A82;
            cursor: pointer;
            display: inline-block;
            font-size: 14px;
            font-weight: bold;
            margin: 0;
            padding: 12px 25px;
            text-decoration: none;
        }        .btn-primary table td {
            background-color: #429A82;
        }        .btn-primary a {
            background-color: #429A82;
            border-color: #429A82;
            color: #ffffff;
        }        /* -------------------------------------
            OTHER STYLES THAT MIGHT BE USEFUL
        ------------------------------------- */
        .last {
            margin-bottom: 0;
        }        .first {
            margin-top: 0;
        }        .align-center {
            text-align: center;
        }        .align-right {
            text-align: right;
        }        .align-left {
            text-align: left;
        }        .clear {
            clear: both;
        }        .mt0 {
            margin-top: 0;
        }        .mb0 {
            margin-bottom: 0;
        }        .preheader {
            color: transparent;
            display: none;
            height: 0;
            max-height: 0;
            max-width: 0;
            opacity: 0;
            overflow: hidden;
            mso-hide: all;
            visibility: hidden;
            width: 0;
        }        .powered-by a {
            text-decoration: none;
        }        hr {
            border: 0;
            border-bottom: 1px solid #f6f6f6;
            margin: 20px 0;
        }        /* -------------------------------------
            RESPONSIVE AND MOBILE FRIENDLY STYLES
        ------------------------------------- */
        @media only screen and (max-width: 620px) {
            table.body h1 {
                font-size: 28px !important;
                margin-bottom: 10px !important;
            }            table.body p,
            table.body ul,
            table.body ol,
            table.body td,
            table.body span,
            table.body a {
                font-size: 16px !important;
            }            table.body .wrapper,
            table.body .article {
                padding: 10px !important;
            }            table.body .content {
                padding: 0 !important;
            }            table.body .container {
                padding: 0 !important;
                width: 100% !important;
            }            table.body .main {
                border-left-width: 0 !important;
                border-radius: 0 !important;
                border-right-width: 0 !important;
            }            table.body .btn table {
                width: 100% !important;
            }            table.body .btn a {
                width: 100% !important;
            }            table.body .img-responsive {
                height: auto !important;
                max-width: 100% !important;
                width: auto !important;
            }
        }        /* -------------------------------------
            PRESERVE THESE STYLES IN THE HEAD
        ------------------------------------- */
        @media all {
            .ExternalClass {
                width: 100%;
            }            .ExternalClass,
            .ExternalClass p,
            .ExternalClass span,
            .ExternalClass font,
            .ExternalClass td,
            .ExternalClass div {
                line-height: 100%;
            }            .apple-link a {
                color: inherit !important;
                font-family: inherit !important;
                font-size: inherit !important;
                font-weight: inherit !important;
                line-height: inherit !important;
                text-decoration: none !important;
            }            #MessageViewBody a {
                color: inherit;
                text-decoration: none;
                font-size: inherit;
                font-family: inherit;
                font-weight: inherit;
                line-height: inherit;
            }            .btn-primary table td:hover {
                background-color: #34495e !important;
            }            .btn-primary a:hover {
                background-color: #34495e !important;
                border-color: #34495e !important;
            }
        }        
        &nbsp;
        
                            
                                    
                    
                        
                            
                                
                                                                            
                                                                                
                                            A new appointment has been added to your plan.                                                                                
                                            You can make changes by clicking the appointment link below.                                                                                
                                            Appointment Details                                                                                
                                            
                                                
                                                    Service                                                
                                                
                                                    hair cutting                                                
                                            
                                            
                                                
                                                    Provider                                                
                                                
                                                    vivek kumar                                                
                                            
                                            
                                                
                                                    Start                                                
                                                
                                                    22/07/2026 9:00 am                                                
                                            
                                            
                                                
                                                    End                                                
                                                
                                                    22/07/2026 9:30 am
                                                
                                            
                                            
                                                
                                                    Timezone                                                
                                                
                                                    Berlin (+1:00)                                                
                                                                                                                                        
                                                    
                                                        Status                                                    
                                                    
                                                        Confirmed                                                    
                                                
                                            
                                                                                        
                                                
                                                    Description                                                
                                                
                                                    bfjkebfkerfbj,erbjk                                                
                                            
                                            
                                            
                                            
                                                                                                                                                                    
                                            Customer Details                                                                                
                                                                                            
                                                    
                                                        Name                                                    
                                                    
                                                        James Doe                                                    
                                                
                                            
                                                                                            
                                                    
                                                        Email                                                    
                                                    
                                                        james@example.org                                                    
                                                
                                            
                                                                                            
                                                    
                                                        Phone Number                                                    
                                                    
                                                        +10000000000                                                    
                                                
                                            
                                            
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                        
                                                                                
                                            
                                                
                                                    
                                                        
                                                            
                                                                
                                                                    
                                                                        Reschedule / Cancel Appointment
                                                                    
                                                                
                                                            
                                                        
                                                    
                                                
                                            
                                        
                                        
                                        
                                    
                                
                            
                        
                    
                    
                    
                
                
                                
                
                    
                        
                            
                                Powered by
                                
                                    Easy!Appointments
                                
                                |
                                
                                    Company Name                                
                            
                        
                    
                
                            
        
        &nbsp;
    

--b2=_pBEHnYaEw1l5jPI1U79GpdfMmbVcEQi5N7nRxLcAxc
Content-Type: multipart/related;
 boundary="b3=_pBEHnYaEw1l5jPI1U79GpdfMmbVcEQi5N7nRxLcAxc";
 type="text/html"

--b3=_pBEHnYaEw1l5jPI1U79GpdfMmbVcEQi5N7nRxLcAxc
Content-Type: text/html; charset=us-ascii


<!doctype html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <title>
        Appointment Details | Easy!Appointments
    </title>
    <style>
        /* -------------------------------------
            GLOBAL RESETS
        ------------------------------------- */

        /*All the styling goes here*/

        img {
            border: none;
            -ms-interpolation-mode: bicubic;
            max-width: 100%;
        }

        body {
            background-color: #f6f6f6;
            font-family: sans-serif;
            -webkit-font-smoothing: antialiased;
            font-size: 14px;
            line-height: 1.4;
            margin: 0;
            padding: 0;
            -ms-text-size-adjust: 100%;
            -webkit-text-size-adjust: 100%;
        }

        table {
            border-collapse: separate;
            mso-table-lspace: 0pt;
            mso-table-rspace: 0pt;
            width: 100%;
        }

        table td {
            font-family: sans-serif;
            font-size: 14px;
            vertical-align: top;
        }

        /* -------------------------------------
            BODY & CONTAINER
        ------------------------------------- */

        .body {
            background-color: #f6f6f6;
            width: 100%;
        }

        /* Set a max-width, and make it display as block so it will automatically stretch to that width, but will also shrink down on a phone or something */
        .container {
            display: block;
            margin: 0 auto !important;
            /* makes it centered */
            max-width: 580px;
            padding: 10px;
            width: 580px;
        }

        /* This should also be a block element, so that it will fill 100% of the .container */
        .content {
            box-sizing: border-box;
            display: block;
            margin: 0 auto;
            max-width: 580px;
            padding: 10px;
        }

        /* -------------------------------------
            HEADER, FOOTER, MAIN
        ------------------------------------- */
        .main {
            background: #ffffff;
            border-radius: 3px;
            width: 100%;
        }

        .wrapper {
            box-sizing: border-box;
            padding: 20px;
        }

        .content-block {
            padding-bottom: 10px;
            padding-top: 10px;
        }

        .footer {
            clear: both;
            margin-top: 10px;
            text-align: center;
            width: 100%;
        }

        .footer td,
        .footer p,
        .footer span,
        .footer a {
            color: #999999;
            font-size: 12px;
            text-align: center;
        }

        /* -------------------------------------
            TYPOGRAPHY
        ------------------------------------- */
        h1,
        h2,
        h3,
        h4 {
            color: #000000;
            font-family: sans-serif;
            font-weight: 400;
            line-height: 1.4;
            margin: 0;
            margin-bottom: 15px;
        }

        h1 {
            font-size: 24px;
            font-weight: 300;
            text-align: center;
            margin-bottom: 40px;
        }

        .label {
            width: 120px;
        }

        .details-table {
            margin: 0 0 0 auto;
            width: 85%;
        }

        p,
        ul,
        ol {
            font-family: sans-serif;
            font-size: 14px;
            font-weight: normal;
            margin: 0;
            margin-bottom: 15px;
        }

        p li,
        ul li,
        ol li {
            list-style-position: inside;
            margin-left: 5px;
        }

        a {
            color: #429A82;
            text-decoration: underline;
        }

        /* -------------------------------------
            BUTTONS
        ------------------------------------- */
        .btn {
            box-sizing: border-box;
            width: 100%;
        }

        .btn > tbody > tr > td {
            padding-bottom: 15px;
        }

        .btn table {
            width: auto;
        }

        .btn table td {
            background-color: #ffffff;
            border-radius: 5px;
            text-align: center;
        }

        .btn a {
            background-color: #ffffff;
            border: solid 1px #429A82;
            border-radius: 5px;
            box-sizing: border-box;
            color: #429A82;
            cursor: pointer;
            display: inline-block;
            font-size: 14px;
            font-weight: bold;
            margin: 0;
            padding: 12px 25px;
            text-decoration: none;
        }

        .btn-primary table td {
            background-color: #429A82;
        }

        .btn-primary a {
            background-color: #429A82;
            border-color: #429A82;
            color: #ffffff;
        }

        /* -------------------------------------
            OTHER STYLES THAT MIGHT BE USEFUL
        ------------------------------------- */
        .last {
            margin-bottom: 0;
        }

        .first {
            margin-top: 0;
        }

        .align-center {
            text-align: center;
        }

        .align-right {
            text-align: right;
        }

        .align-left {
            text-align: left;
        }

        .clear {
            clear: both;
        }

        .mt0 {
            margin-top: 0;
        }

        .mb0 {
            margin-bottom: 0;
        }

        .preheader {
            color: transparent;
            display: none;
            height: 0;
            max-height: 0;
            max-width: 0;
            opacity: 0;
            overflow: hidden;
            mso-hide: all;
            visibility: hidden;
            width: 0;
        }

        .powered-by a {
            text-decoration: none;
        }

        hr {
            border: 0;
            border-bottom: 1px solid #f6f6f6;
            margin: 20px 0;
        }

        /* -------------------------------------
            RESPONSIVE AND MOBILE FRIENDLY STYLES
        ------------------------------------- */
        @media only screen and (max-width: 620px) {
            table.body h1 {
                font-size: 28px !important;
                margin-bottom: 10px !important;
            }

            table.body p,
            table.body ul,
            table.body ol,
            table.body td,
            table.body span,
            table.body a {
                font-size: 16px !important;
            }

            table.body .wrapper,
            table.body .article {
                padding: 10px !important;
            }

            table.body .content {
                padding: 0 !important;
            }

            table.body .container {
                padding: 0 !important;
                width: 100% !important;
            }

            table.body .main {
                border-left-width: 0 !important;
                border-radius: 0 !important;
                border-right-width: 0 !important;
            }

            table.body .btn table {
                width: 100% !important;
            }

            table.body .btn a {
                width: 100% !important;
            }

            table.body .img-responsive {
                height: auto !important;
                max-width: 100% !important;
                width: auto !important;
            }
        }

        /* -------------------------------------
            PRESERVE THESE STYLES IN THE HEAD
        ------------------------------------- */
        @media all {
            .ExternalClass {
                width: 100%;
            }

            .ExternalClass,
            .ExternalClass p,
            .ExternalClass span,
            .ExternalClass font,
            .ExternalClass td,
            .ExternalClass div {
                line-height: 100%;
            }

            .apple-link a {
                color: inherit !important;
                font-family: inherit !important;
                font-size: inherit !important;
                font-weight: inherit !important;
                line-height: inherit !important;
                text-decoration: none !important;
            }

            #MessageViewBody a {
                color: inherit;
                text-decoration: none;
                font-size: inherit;
                font-family: inherit;
                font-weight: inherit;
                line-height: inherit;
            }

            .btn-primary table td:hover {
                background-color: #34495e !important;
            }

            .btn-primary a:hover {
                background-color: #34495e !important;
                border-color: #34495e !important;
            }
        }

    </style>
</head>
<body>
<table role="presentation" border="0" cellpadding="0" cellspacing="0" class="body">
    <tr>
        <td>&nbsp;</td>
        <td class="container">
            <div class="content">

                <!-- START CENTERED WHITE CONTAINER -->
                <table role="presentation" class="main">

                    <!-- START MAIN CONTENT AREA -->
                    <tr>
                        <td class="wrapper">
                            <table role="presentation" border="0" cellpadding="0" cellspacing="0">
                                <tr>
                                    <td>

                                        <!-- Logo at the top center, embedded as CID -->
                                        <img src="cid:logo.png" alt="Logo" style="display:block;max-width:67px; margin: auto auto 24px;">

                                        <h1 style="text-align: center;">
                                            A new appointment has been added to your plan.                                        </h1>

                                        <p style="text-align: center;">
                                            You can make changes by clicking the appointment link below.                                        </p>

                                        <h2 style="text-align: center;">
                                            Appointment Details                                        </h2>

                                        <table id="appointment-details" class="details-table" align="center">
                                            <tr>
                                                <td class="label" style="padding: 3px;font-weight: bold;">
                                                    Service                                                </td>
                                                <td style="padding: 3px;">
                                                    hair cutting                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="label" style="padding: 3px;font-weight: bold;">
                                                    Provider                                                </td>
                                                <td style="padding: 3px;">
                                                    vivek kumar                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="label" style="padding: 3px;font-weight: bold;">
                                                    Start                                                </td>
                                                <td style="padding: 3px;">
                                                    22/07/2026 9:00 am                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="label" style="padding: 3px;font-weight: bold;">
                                                    End                                                </td>
                                                <td style="padding: 3px;">
                                                    22/07/2026 9:30 am
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="label" style="padding: 3px;font-weight: bold;">
                                                    Timezone                                                </td>
                                                <td style="padding: 3px;">
                                                    Berlin (+1:00)                                                </td>
                                            </tr>

                                                                                            <tr>
                                                    <td class="label" style="padding: 3px;font-weight: bold;">
                                                        Status                                                    </td>
                                                    <td style="padding: 3px;">
                                                        Confirmed                                                    </td>
                                                </tr>
                                            
                                                                                        <tr>
                                                <td class="label" style="padding: 3px;font-weight: bold;">
                                                    Description                                                </td>
                                                <td style="padding: 3px;">
                                                    bfjkebfkerfbj,erbjk                                                </td>
                                            </tr>
                                            
                                            
                                            
                                                                                    </table>

                                        <br>

                                        <h2 style="text-align: center;">
                                            Customer Details                                        </h2>

                                        <table id="customer-details" class="details-table" align="center">
                                                                                            <tr>
                                                    <td class="label" style="padding: 3px;font-weight: bold;">
                                                        Name                                                    </td>
                                                    <td style="padding: 3px;">
                                                        James Doe                                                    </td>
                                                </tr>
                                            
                                                                                            <tr>
                                                    <td class="label" style="padding: 3px;font-weight: bold;">
                                                        Email                                                    </td>
                                                    <td style="padding: 3px;">
                                                        james@example.org                                                    </td>
                                                </tr>
                                            
                                                                                            <tr>
                                                    <td class="label" style="padding: 3px;font-weight: bold;">
                                                        Phone Number                                                    </td>
                                                    <td style="padding: 3px;">
                                                        +10000000000                                                    </td>
                                                </tr>
                                            
                                            
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                </table>

                                        <br>
                                        <br>

                                        <table class="btn btn-primary" role="presentation" border="0" cellpadding="0" cellspacing="0">
                                            <tbody>
                                                <tr>
                                                    <td align="center">
                                                        <table role="presentation" border="0" cellpadding="0" cellspacing="0">
                                                            <tbody>
                                                                <tr>
                                                                    <td>
                                                                        <a href="http://localhost/easy/index.php/calendar/reschedule/4SMeDUwo15X2" target="_blank">Reschedule / Cancel Appointment</a>
                                                                    </td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                        
                                        
                                    </td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                    
                    <!-- END MAIN CONTENT AREA -->
                </table>
                
                <!-- END CENTERED WHITE CONTAINER -->

                <!-- START FOOTER -->
                <div class="footer">
                    <table role="presentation" border="0" cellpadding="0" cellspacing="0">
                        <tr>
                            <td class="content-block powered-by">
                                Powered by
                                <a href="https://easyappointments.org" style="text-decoration: none;">
                                    Easy!Appointments
                                </a>
                                |
                                <a href="https://example.org" style="text-decoration: none;">
                                    Company Name                                </a>
                            </td>
                        </tr>
                    </table>
                </div>
                <!-- END FOOTER -->

            </div>
        </td>
        <td>&nbsp;</td>
    </tr>
</table>
</body>
</html>

--b3=_pBEHnYaEw1l5jPI1U79GpdfMmbVcEQi5N7nRxLcAxc
Content-Type: image/png; name=logo.png
Content-Transfer-Encoding: base64
Content-ID: <logo.png>
Content-Disposition: inline; filename=logo.png

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
TkSuQmCC

--b3=_pBEHnYaEw1l5jPI1U79GpdfMmbVcEQi5N7nRxLcAxc--


--b2=_pBEHnYaEw1l5jPI1U79GpdfMmbVcEQi5N7nRxLcAxc--

--b1=_pBEHnYaEw1l5jPI1U79GpdfMmbVcEQi5N7nRxLcAxc
Content-Type: text/calendar; name=invitation.ics
Content-Transfer-Encoding: base64
Content-Disposition: attachment; filename=invitation.ics

QkVHSU46VkNBTEVOREFSDQpWRVJTSU9OOjIuMA0KUFJPRElEOi0vL0Vhc3lBcHBvaW50bWVudHMv
L09wZW4gU291cmNlIFdlYiBTY2hlZHVsZXIvL0VODQpDQUxTQ0FMRTpHUkVHT1JJQU4NCk1FVEhP
RDpSRVFVRVNUDQpCRUdJTjpWVElNRVpPTkUNClRaSUQ6RXVyb3BlL0Jlcmxpbg0KQkVHSU46U1RB
TkRBUkQNCkRUU1RBUlQ6MjAyNjEwMjVUMDEwMDAwWg0KVFpPRkZTRVRUTzorMDEwMA0KVFpPRkZT
RVRGUk9NOiswMjAwDQpSUlVMRTpGUkVRPVlFQVJMWTtCWU1PTlRIPTExO0JZREFZPTFTVQ0KRU5E
OlNUQU5EQVJEDQpCRUdJTjpEQVlMSUdIVA0KRFRTVEFSVDoyMDI2MDMyOVQwMTAwMDBaDQpUWk9G
RlNFVFRPOiswMjAwDQpUWk9GRlNFVEZST006KzAxMDANClJSVUxFOkZSRVE9WUVBUkxZO0JZTU9O
VEg9MztCWURBWT0yU1UNCkVORDpEQVlMSUdIVA0KRU5EOlZUSU1FWk9ORQ0KQkVHSU46VkVWRU5U
DQpVSUQ6ZWEtZWNjYmM4N2U0YjVjZTJmZTI4MzA4ZmQ5ZjJhN2JhZjMNCkRUU1RBUlQ6MjAyNjA3
MjJUMDcwMDAwWg0KRFRFTkQ6MjAyNjA3MjJUMDczMDAwWg0KU0VRVUVOQ0U6MTc4NDc5NzYzOA0K
U1RBVFVTOkNPTkZJUk1FRA0KU1VNTUFSWTpoYWlyIGN1dHRpbmcNCkRFU0NSSVBUSU9OOlxuUHJv
dmlkZXJcblxuTmFtZTogdml2ZWsga3VtYXJcbkVtYWlsOiByYWo5NzNhbnNodWxAZ21haWwNCiAu
Y29tXG5QaG9uZSBOdW1iZXI6IFxuQWRkcmVzczogXG5DaXR5OiBcblppcCBDb2RlOiBcblxuQ3Vz
dG9tZXJcblxuTmFtDQogZTogSmFtZXMgRG9lXG5FbWFpbDogamFtZXNAZXhhbXBsZS5vcmdcblBo
b25lIE51bWJlcjogKzEwMDAwMDAwMDAwXG5BZA0KIGRyZXNzOiBcbkNpdHk6IFxuWmlwIENvZGU6
IFxuXG5Ob3Rlc1xuXG4NCkxPQ0FUSU9OOm5vaWRhIHNlYyA2Mw0KRFRTVEFNUDoyMDI2MDcyM1Qw
OTA3MTlaDQpBVFRFTkRFRTtDVVRZUEU9SU5ESVZJRFVBTDtST0xFPVJFUS1QQVJUSUNJUEFOVDtQ
QVJUU1RBVD1ORUVEUy1BQ1RJT047DQogUlNWUD1UUlVFO0NOPUphbWVzIERvZTptYWlsdG86amFt
ZXNAZXhhbXBsZS5vcmcNCkFUVEVOREVFO0NVVFlQRT1JTkRJVklEVUFMO1JPTEU9UkVRLVBBUlRJ
Q0lQQU5UO1BBUlRTVEFUPUFDQ0VQVEVEO1JTVlANCiA9RkFMU0U7Q049dml2ZWsga3VtYXI6bWFp
bHRvOnJhajk3M2Fuc2h1bEBnbWFpbC5jb20NCk9SR0FOSVpFUjtDTj12aXZlayBrdW1hcjptYWls
dG86cmFqOTczYW5zaHVsQGdtYWlsLmNvbQ0KQkVHSU46VkFMQVJNDQpUUklHR0VSO1ZBTFVFPURB
VEUtVElNRToyMDI2MDcyMlQwNjQ1MDBaDQpBQ1RJT046RU1BSUwNClNVTU1BUlk6QWxhcm0gbm90
aWZpY2F0aW9uDQpERVNDUklQVElPTjpUaGlzIGlzIGFuIGV2ZW50IHJlbWluZGVyDQpBVFRFTkRF
RTtDVVRZUEU9SU5ESVZJRFVBTDtST0xFPVJFUS1QQVJUSUNJUEFOVDtQQVJUU1RBVD1ORUVEUy1B
Q1RJT047DQogUlNWUD1UUlVFO0NOPUphbWVzIERvZTptYWlsdG86amFtZXNAZXhhbXBsZS5vcmcN
CkVORDpWQUxBUk0NCkJFR0lOOlZBTEFSTQ0KVFJJR0dFUjtWQUxVRT1EQVRFLVRJTUU6MjAyNjA3
MjJUMDYwMDAwWg0KQUNUSU9OOkVNQUlMDQpTVU1NQVJZOkFsYXJtIG5vdGlmaWNhdGlvbg0KREVT
Q1JJUFRJT046VGhpcyBpcyBhbiBldmVudCByZW1pbmRlcg0KQVRURU5ERUU7Q1VUWVBFPUlORElW
SURVQUw7Uk9MRT1SRVEtUEFSVElDSVBBTlQ7UEFSVFNUQVQ9TkVFRFMtQUNUSU9OOw0KIFJTVlA9
VFJVRTtDTj1KYW1lcyBEb2U6bWFpbHRvOmphbWVzQGV4YW1wbGUub3JnDQpFTkQ6VkFMQVJNDQpF
TkQ6VkVWRU5UDQpFTkQ6VkNBTEVOREFSDQo=

--b1=_pBEHnYaEw1l5jPI1U79GpdfMmbVcEQi5N7nRxLcAxc--
',
            ),
          ),
          1 => 
          array (
            'file' => 'C:\\xampp\\htdocs\\easy\\vendor\\phpmailer\\phpmailer\\src\\PHPMailer.php',
            'line' => 1670,
            'function' => 'postSend',
            'class' => 'PHPMailer\\PHPMailer\\PHPMailer',
            'type' => '->',
            'args' => 
            array (
            ),
          ),
          2 => 
          array (
            'file' => 'C:\\xampp\\htdocs\\easy\\application\\libraries\\Email_messages.php',
            'line' => 119,
            'function' => 'send',
            'class' => 'PHPMailer\\PHPMailer\\PHPMailer',
            'type' => '->',
            'args' => 
            array (
            ),
          ),
          3 => 
          array (
            'file' => 'C:\\xampp\\htdocs\\easy\\application\\libraries\\Notifications.php',
            'line' => 115,
            'function' => 'send_appointment_saved',
            'class' => 'Email_messages',
            'type' => '->',
            'args' => 
            array (
              0 => 
              array (
                'id' => 3,
                'create_datetime' => '2026-07-23 11:07:18',
                'update_datetime' => '2026-07-23 11:07:18',
                'book_datetime' => '2026-07-23 11:07:18',
                'start_datetime' => '2026-07-22 09:00:00',
                'end_datetime' => '2026-07-22 09:30:00',
                'location' => '',
                'meeting_link' => '',
                'notes' => '',
                'hash' => '4SMeDUwo15X2',
                'color' => '#7cbae8',
                'status' => 'Confirmed',
                'is_unavailability' => false,
                'id_users_provider' => 5,
                'id_users_customer' => 3,
                'id_services' => 2,
                'id_google_calendar' => NULL,
                'id_caldav_calendar' => NULL,
              ),
              1 => 
              array (
                'id' => 5,
                'create_datetime' => '2026-07-22 13:13:04',
                'update_datetime' => '2026-07-22 13:13:04',
                'first_name' => 'vivek',
                'last_name' => 'kumar',
                'email' => 'raj973anshul@gmail.com',
                'mobile_number' => NULL,
                'phone_number' => '',
                'address' => '',
                'city' => '',
                'state' => '',
                'zip_code' => '',
                'notes' => '',
                'timezone' => 'Europe/Berlin',
                'language' => 'english',
                'custom_field_1' => NULL,
                'custom_field_2' => NULL,
                'custom_field_3' => NULL,
                'custom_field_4' => NULL,
                'custom_field_5' => NULL,
                'is_private' => false,
                'ldap_dn' => NULL,
                'id_roles' => 2,
                'settings' => 
                array (
                  'username' => 'vivekkumar',
                  'password_reset_token' => NULL,
                  'password_reset_expires' => NULL,
                  'working_plan' => '{"sunday":{"start":"09:00","end":"18:00","breaks":[{"start":"14:30","end":"15:00"}]},"monday":{"start":"09:00","end":"18:00","breaks":[{"start":"14:30","end":"15:00"}]},"tuesday":{"start":"09:00","end":"18:00","breaks":[{"start":"14:30","end":"15:00"}]},"wednesday":{"start":"09:00","end":"18:00","breaks":[{"start":"14:30","end":"15:00"}]},"thursday":{"start":"09:00","end":"18:00","breaks":[{"start":"14:30","end":"15:00"}]},"friday":{"start":"09:00","end":"18:00","breaks":[{"start":"14:30","end":"15:00"}]},"saturday":{"start":"09:00","end":"18:00","breaks":[{"start":"14:30","end":"15:00"}]}}',
                  'working_plan_exceptions' => '[]',
                  'notifications' => '1',
                  'google_sync' => NULL,
                  'google_token' => NULL,
                  'google_calendar' => NULL,
                  'caldav_sync' => '0',
                  'caldav_url' => NULL,
                  'caldav_username' => NULL,
                  'caldav_password' => NULL,
                  'sync_past_days' => '30',
                  'sync_future_days' => '90',
                  'calendar_view' => 'table',
                ),
                'services' => 
                array (
                  0 => 1,
                  1 => 2,
                ),
              ),
              2 => 
              array (
                'id' => 2,
                'create_datetime' => '2026-07-23 10:51:48',
                'update_datetime' => '2026-07-23 10:51:48',
                'name' => 'hair cutting',
                'duration' => '30',
                'price' => 50.0,
                'currency' => '',
                'description' => 'bfjkebfkerfbj,erbjk',
                'slot_interval' => '15',
                'color' => '#7cbae8',
                'location' => 'noida sec 63',
                'attendants_number' => 1,
                'is_private' => false,
                'id_service_categories' => 1,
              ),
              3 => 
              array (
                'id' => 3,
                'create_datetime' => '2026-07-22 11:55:43',
                'update_datetime' => '2026-07-23 11:07:18',
                'first_name' => 'James',
                'last_name' => 'Doe',
                'email' => 'james@example.org',
                'mobile_number' => NULL,
                'phone_number' => '+10000000000',
                'address' => '',
                'city' => '',
                'state' => NULL,
                'zip_code' => '',
                'notes' => '',
                'timezone' => 'UTC',
                'language' => 'english',
                'custom_field_1' => NULL,
                'custom_field_2' => NULL,
                'custom_field_3' => NULL,
                'custom_field_4' => NULL,
                'custom_field_5' => NULL,
                'is_private' => '0',
                'ldap_dn' => NULL,
                'id_roles' => 3,
              ),
              4 => 
              array (
                'company_name' => 'Company Name',
                'company_link' => 'https://example.org',
                'company_email' => 'info@example.org',
                'company_color' => NULL,
                'date_format' => 'DMY',
                'time_format' => 'regular',
              ),
              5 => 'A new appointment has been added to your plan.',
              6 => 'You can make changes by clicking the appointment link below.',
              7 => 'http://localhost/easy/index.php/calendar/reschedule/4SMeDUwo15X2',
              8 => 'raj973anshul@gmail.com',
              9 => 'BEGIN:VCALENDAR
VERSION:2.0
PRODID:-//EasyAppointments//Open Source Web Scheduler//EN
CALSCALE:GREGORIAN
METHOD:REQUEST
BEGIN:VTIMEZONE
TZID:Europe/Berlin
BEGIN:STANDARD
DTSTART:20261025T010000Z
TZOFFSETTO:+0100
TZOFFSETFROM:+0200
RRULE:FREQ=YEARLY;BYMONTH=11;BYDAY=1SU
END:STANDARD
BEGIN:DAYLIGHT
DTSTART:20260329T010000Z
TZOFFSETTO:+0200
TZOFFSETFROM:+0100
RRULE:FREQ=YEARLY;BYMONTH=3;BYDAY=2SU
END:DAYLIGHT
END:VTIMEZONE
BEGIN:VEVENT
UID:ea-eccbc87e4b5ce2fe28308fd9f2a7baf3
DTSTART:20260722T070000Z
DTEND:20260722T073000Z
SEQUENCE:1784797638
STATUS:CONFIRMED
SUMMARY:hair cutting
DESCRIPTION:\\nProvider\\n\\nName: vivek kumar\\nEmail: raj973anshul@gmail
 .com\\nPhone Number: \\nAddress: \\nCity: \\nZip Code: \\n\\nCustomer\\n\\nNam
 e: James Doe\\nEmail: james@example.org\\nPhone Number: +10000000000\\nAd
 dress: \\nCity: \\nZip Code: \\n\\nNotes\\n\\n
LOCATION:noida sec 63
DTSTAMP:20260723T090719Z
ATTENDEE;CUTYPE=INDIVIDUAL;ROLE=REQ-PARTICIPANT;PARTSTAT=NEEDS-ACTION;
 RSVP=TRUE;CN=James Doe:mailto:james@example.org
ATTENDEE;CUTYPE=INDIVIDUAL;ROLE=REQ-PARTICIPANT;PARTSTAT=ACCEPTED;RSVP
 =FALSE;CN=vivek kumar:mailto:raj973anshul@gmail.com
ORGANIZER;CN=vivek kumar:mailto:raj973anshul@gmail.com
BEGIN:VALARM
TRIGGER;VALUE=DATE-TIME:20260722T064500Z
ACTION:EMAIL
SUMMARY:Alarm notification
DESCRIPTION:This is an event reminder
ATTENDEE;CUTYPE=INDIVIDUAL;ROLE=REQ-PARTICIPANT;PARTSTAT=NEEDS-ACTION;
 RSVP=TRUE;CN=James Doe:mailto:james@example.org
END:VALARM
BEGIN:VALARM
TRIGGER;VALUE=DATE-TIME:20260722T060000Z
ACTION:EMAIL
SUMMARY:Alarm notification
DESCRIPTION:This is an event reminder
ATTENDEE;CUTYPE=INDIVIDUAL;ROLE=REQ-PARTICIPANT;PARTSTAT=NEEDS-ACTION;
 RSVP=TRUE;CN=James Doe:mailto:james@example.org
END:VALARM
END:VEVENT
END:VCALENDAR
',
              10 => 'Europe/Berlin',
            ),
          ),
          4 => 
          array (
            'file' => 'C:\\xampp\\htdocs\\easy\\application\\controllers\\Calendar.php',
            'line' => 389,
            'function' => 'notify_appointment_saved',
            'class' => 'Notifications',
            'type' => '->',
            'args' => 
            array (
              0 => 
              array (
                'id' => 3,
                'create_datetime' => '2026-07-23 11:07:18',
                'update_datetime' => '2026-07-23 11:07:18',
                'book_datetime' => '2026-07-23 11:07:18',
                'start_datetime' => '2026-07-22 09:00:00',
                'end_datetime' => '2026-07-22 09:30:00',
                'location' => '',
                'meeting_link' => '',
                'notes' => '',
                'hash' => '4SMeDUwo15X2',
                'color' => '#7cbae8',
                'status' => 'Confirmed',
                'is_unavailability' => false,
                'id_users_provider' => 5,
                'id_users_customer' => 3,
                'id_services' => 2,
                'id_google_calendar' => NULL,
                'id_caldav_calendar' => NULL,
              ),
              1 => 
              array (
                'id' => 2,
                'create_datetime' => '2026-07-23 10:51:48',
                'update_datetime' => '2026-07-23 10:51:48',
                'name' => 'hair cutting',
                'duration' => '30',
                'price' => 50.0,
                'currency' => '',
                'description' => 'bfjkebfkerfbj,erbjk',
                'slot_interval' => '15',
                'color' => '#7cbae8',
                'location' => 'noida sec 63',
                'attendants_number' => 1,
                'is_private' => false,
                'id_service_categories' => 1,
              ),
              2 => 
              array (
                'id' => 5,
                'create_datetime' => '2026-07-22 13:13:04',
                'update_datetime' => '2026-07-22 13:13:04',
                'first_name' => 'vivek',
                'last_name' => 'kumar',
                'email' => 'raj973anshul@gmail.com',
                'mobile_number' => NULL,
                'phone_number' => '',
                'address' => '',
                'city' => '',
                'state' => '',
                'zip_code' => '',
                'notes' => '',
                'timezone' => 'Europe/Berlin',
                'language' => 'english',
                'custom_field_1' => NULL,
                'custom_field_2' => NULL,
                'custom_field_3' => NULL,
                'custom_field_4' => NULL,
                'custom_field_5' => NULL,
                'is_private' => false,
                'ldap_dn' => NULL,
                'id_roles' => 2,
                'settings' => 
                array (
                  'username' => 'vivekkumar',
                  'password_reset_token' => NULL,
                  'password_reset_expires' => NULL,
                  'working_plan' => '{"sunday":{"start":"09:00","end":"18:00","breaks":[{"start":"14:30","end":"15:00"}]},"monday":{"start":"09:00","end":"18:00","breaks":[{"start":"14:30","end":"15:00"}]},"tuesday":{"start":"09:00","end":"18:00","breaks":[{"start":"14:30","end":"15:00"}]},"wednesday":{"start":"09:00","end":"18:00","breaks":[{"start":"14:30","end":"15:00"}]},"thursday":{"start":"09:00","end":"18:00","breaks":[{"start":"14:30","end":"15:00"}]},"friday":{"start":"09:00","end":"18:00","breaks":[{"start":"14:30","end":"15:00"}]},"saturday":{"start":"09:00","end":"18:00","breaks":[{"start":"14:30","end":"15:00"}]}}',
                  'working_plan_exceptions' => '[]',
                  'notifications' => '1',
                  'google_sync' => NULL,
                  'google_token' => NULL,
                  'google_calendar' => NULL,
                  'caldav_sync' => '0',
                  'caldav_url' => NULL,
                  'caldav_username' => NULL,
                  'caldav_password' => NULL,
                  'sync_past_days' => '30',
                  'sync_future_days' => '90',
                  'calendar_view' => 'table',
                ),
                'services' => 
                array (
                  0 => 1,
                  1 => 2,
                ),
              ),
              3 => 
              array (
                'id' => 3,
                'create_datetime' => '2026-07-22 11:55:43',
                'update_datetime' => '2026-07-23 11:07:18',
                'first_name' => 'James',
                'last_name' => 'Doe',
                'email' => 'james@example.org',
                'mobile_number' => NULL,
                'phone_number' => '+10000000000',
                'address' => '',
                'city' => '',
                'state' => NULL,
                'zip_code' => '',
                'notes' => '',
                'timezone' => 'UTC',
                'language' => 'english',
                'custom_field_1' => NULL,
                'custom_field_2' => NULL,
                'custom_field_3' => NULL,
                'custom_field_4' => NULL,
                'custom_field_5' => NULL,
                'is_private' => '0',
                'ldap_dn' => NULL,
                'id_roles' => 3,
              ),
              4 => 
              array (
                'company_name' => 'Company Name',
                'company_link' => 'https://example.org',
                'company_email' => 'info@example.org',
                'company_color' => NULL,
                'date_format' => 'DMY',
                'time_format' => 'regular',
              ),
              5 => false,
            ),
          ),
          5 => 
          array (
            'file' => 'C:\\xampp\\htdocs\\easy\\system\\core\\CodeIgniter.php',
            'line' => 481,
            'function' => 'save_appointment',
            'class' => 'Calendar',
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
      )),
      1 => 'appointment-saved to provider',
      2 => 3,
    ),
  ),
  2 => 
  array (
    'file' => 'C:\\xampp\\htdocs\\easy\\application\\controllers\\Calendar.php',
    'line' => 389,
    'function' => 'notify_appointment_saved',
    'class' => 'Notifications',
    'type' => '->',
    'args' => 
    array (
      0 => 
      array (
        'id' => 3,
        'create_datetime' => '2026-07-23 11:07:18',
        'update_datetime' => '2026-07-23 11:07:18',
        'book_datetime' => '2026-07-23 11:07:18',
        'start_datetime' => '2026-07-22 09:00:00',
        'end_datetime' => '2026-07-22 09:30:00',
        'location' => '',
        'meeting_link' => '',
        'notes' => '',
        'hash' => '4SMeDUwo15X2',
        'color' => '#7cbae8',
        'status' => 'Confirmed',
        'is_unavailability' => false,
        'id_users_provider' => 5,
        'id_users_customer' => 3,
        'id_services' => 2,
        'id_google_calendar' => NULL,
        'id_caldav_calendar' => NULL,
      ),
      1 => 
      array (
        'id' => 2,
        'create_datetime' => '2026-07-23 10:51:48',
        'update_datetime' => '2026-07-23 10:51:48',
        'name' => 'hair cutting',
        'duration' => '30',
        'price' => 50.0,
        'currency' => '',
        'description' => 'bfjkebfkerfbj,erbjk',
        'slot_interval' => '15',
        'color' => '#7cbae8',
        'location' => 'noida sec 63',
        'attendants_number' => 1,
        'is_private' => false,
        'id_service_categories' => 1,
      ),
      2 => 
      array (
        'id' => 5,
        'create_datetime' => '2026-07-22 13:13:04',
        'update_datetime' => '2026-07-22 13:13:04',
        'first_name' => 'vivek',
        'last_name' => 'kumar',
        'email' => 'raj973anshul@gmail.com',
        'mobile_number' => NULL,
        'phone_number' => '',
        'address' => '',
        'city' => '',
        'state' => '',
        'zip_code' => '',
        'notes' => '',
        'timezone' => 'Europe/Berlin',
        'language' => 'english',
        'custom_field_1' => NULL,
        'custom_field_2' => NULL,
        'custom_field_3' => NULL,
        'custom_field_4' => NULL,
        'custom_field_5' => NULL,
        'is_private' => false,
        'ldap_dn' => NULL,
        'id_roles' => 2,
        'settings' => 
        array (
          'username' => 'vivekkumar',
          'password_reset_token' => NULL,
          'password_reset_expires' => NULL,
          'working_plan' => '{"sunday":{"start":"09:00","end":"18:00","breaks":[{"start":"14:30","end":"15:00"}]},"monday":{"start":"09:00","end":"18:00","breaks":[{"start":"14:30","end":"15:00"}]},"tuesday":{"start":"09:00","end":"18:00","breaks":[{"start":"14:30","end":"15:00"}]},"wednesday":{"start":"09:00","end":"18:00","breaks":[{"start":"14:30","end":"15:00"}]},"thursday":{"start":"09:00","end":"18:00","breaks":[{"start":"14:30","end":"15:00"}]},"friday":{"start":"09:00","end":"18:00","breaks":[{"start":"14:30","end":"15:00"}]},"saturday":{"start":"09:00","end":"18:00","breaks":[{"start":"14:30","end":"15:00"}]}}',
          'working_plan_exceptions' => '[]',
          'notifications' => '1',
          'google_sync' => NULL,
          'google_token' => NULL,
          'google_calendar' => NULL,
          'caldav_sync' => '0',
          'caldav_url' => NULL,
          'caldav_username' => NULL,
          'caldav_password' => NULL,
          'sync_past_days' => '30',
          'sync_future_days' => '90',
          'calendar_view' => 'table',
        ),
        'services' => 
        array (
          0 => 1,
          1 => 2,
        ),
      ),
      3 => 
      array (
        'id' => 3,
        'create_datetime' => '2026-07-22 11:55:43',
        'update_datetime' => '2026-07-23 11:07:18',
        'first_name' => 'James',
        'last_name' => 'Doe',
        'email' => 'james@example.org',
        'mobile_number' => NULL,
        'phone_number' => '+10000000000',
        'address' => '',
        'city' => '',
        'state' => NULL,
        'zip_code' => '',
        'notes' => '',
        'timezone' => 'UTC',
        'language' => 'english',
        'custom_field_1' => NULL,
        'custom_field_2' => NULL,
        'custom_field_3' => NULL,
        'custom_field_4' => NULL,
        'custom_field_5' => NULL,
        'is_private' => '0',
        'ldap_dn' => NULL,
        'id_roles' => 3,
      ),
      4 => 
      array (
        'company_name' => 'Company Name',
        'company_link' => 'https://example.org',
        'company_email' => 'info@example.org',
        'company_color' => NULL,
        'date_format' => 'DMY',
        'time_format' => 'regular',
      ),
      5 => false,
    ),
  ),
)
ERROR - 2026-07-23 11:07:25 --> Notifications - Could not email appointment-saved to admin (3) : Could not instantiate mail function. Trace: array (
  0 => 
  array (
    'file' => 'C:\\xampp\\htdocs\\easy\\application\\libraries\\Notifications.php',
    'line' => 352,
    'function' => 'log_message',
    'args' => 
    array (
      0 => 'error',
      1 => 'Notifications - Could not email appointment-saved to admin (3) : Could not instantiate mail function.',
    ),
  ),
  1 => 
  array (
    'file' => 'C:\\xampp\\htdocs\\easy\\application\\libraries\\Notifications.php',
    'line' => 161,
    'function' => 'log_exception',
    'class' => 'Notifications',
    'type' => '->',
    'args' => 
    array (
      0 => 
      \PHPMailer\PHPMailer\Exception::__set_state(array(
         'message' => 'Could not instantiate mail function.',
         'string' => '',
         'code' => 2,
         'file' => 'C:\\xampp\\htdocs\\easy\\vendor\\phpmailer\\phpmailer\\src\\PHPMailer.php',
         'line' => 2150,
         'trace' => 
        array (
          0 => 
          array (
            'file' => 'C:\\xampp\\htdocs\\easy\\vendor\\phpmailer\\phpmailer\\src\\PHPMailer.php',
            'line' => 1857,
            'function' => 'mailSend',
            'class' => 'PHPMailer\\PHPMailer\\PHPMailer',
            'type' => '->',
            'args' => 
            array (
              0 => 'Date: Thu, 23 Jul 2026 11:07:23 +0200
From: Company Name <info@example.org>
Reply-To: info@example.org
Message-ID: <TqgPzo8fGTAmfE0aFFLW7VHxDbFrNxpP3zOd3EKZ5uQ@localhost>
X-Mailer: PHPMailer 7.1.1 (https://github.com/PHPMailer/PHPMailer)
MIME-Version: 1.0
Content-Type: multipart/mixed;
 boundary="b1=_TqgPzo8fGTAmfE0aFFLW7VHxDbFrNxpP3zOd3EKZ5uQ"
Content-Transfer-Encoding: 8bit

',
              1 => '--b1=_TqgPzo8fGTAmfE0aFFLW7VHxDbFrNxpP3zOd3EKZ5uQ
Content-Type: multipart/alternative;
 boundary="b2=_TqgPzo8fGTAmfE0aFFLW7VHxDbFrNxpP3zOd3EKZ5uQ"

--b2=_TqgPzo8fGTAmfE0aFFLW7VHxDbFrNxpP3zOd3EKZ5uQ
Content-Type: text/plain; charset=us-ascii

    
    
    
        Appointment Details | Easy!Appointments
    
    
        /* -------------------------------------
            GLOBAL RESETS
        ------------------------------------- */        /*All the styling goes here*/        img {
            border: none;
            -ms-interpolation-mode: bicubic;
            max-width: 100%;
        }        body {
            background-color: #f6f6f6;
            font-family: sans-serif;
            -webkit-font-smoothing: antialiased;
            font-size: 14px;
            line-height: 1.4;
            margin: 0;
            padding: 0;
            -ms-text-size-adjust: 100%;
            -webkit-text-size-adjust: 100%;
        }        table {
            border-collapse: separate;
            mso-table-lspace: 0pt;
            mso-table-rspace: 0pt;
            width: 100%;
        }        table td {
            font-family: sans-serif;
            font-size: 14px;
            vertical-align: top;
        }        /* -------------------------------------
            BODY & CONTAINER
        ------------------------------------- */        .body {
            background-color: #f6f6f6;
            width: 100%;
        }        /* Set a max-width, and make it display as block so it will automatically stretch to that width, but will also shrink down on a phone or something */
        .container {
            display: block;
            margin: 0 auto !important;
            /* makes it centered */
            max-width: 580px;
            padding: 10px;
            width: 580px;
        }        /* This should also be a block element, so that it will fill 100% of the .container */
        .content {
            box-sizing: border-box;
            display: block;
            margin: 0 auto;
            max-width: 580px;
            padding: 10px;
        }        /* -------------------------------------
            HEADER, FOOTER, MAIN
        ------------------------------------- */
        .main {
            background: #ffffff;
            border-radius: 3px;
            width: 100%;
        }        .wrapper {
            box-sizing: border-box;
            padding: 20px;
        }        .content-block {
            padding-bottom: 10px;
            padding-top: 10px;
        }        .footer {
            clear: both;
            margin-top: 10px;
            text-align: center;
            width: 100%;
        }        .footer td,
        .footer p,
        .footer span,
        .footer a {
            color: #999999;
            font-size: 12px;
            text-align: center;
        }        /* -------------------------------------
            TYPOGRAPHY
        ------------------------------------- */
        h1,
        h2,
        h3,
        h4 {
            color: #000000;
            font-family: sans-serif;
            font-weight: 400;
            line-height: 1.4;
            margin: 0;
            margin-bottom: 15px;
        }        h1 {
            font-size: 24px;
            font-weight: 300;
            text-align: center;
            margin-bottom: 40px;
        }        .label {
            width: 120px;
        }        .details-table {
            margin: 0 0 0 auto;
            width: 85%;
        }        p,
        ul,
        ol {
            font-family: sans-serif;
            font-size: 14px;
            font-weight: normal;
            margin: 0;
            margin-bottom: 15px;
        }        p li,
        ul li,
        ol li {
            list-style-position: inside;
            margin-left: 5px;
        }        a {
            color: #429A82;
            text-decoration: underline;
        }        /* -------------------------------------
            BUTTONS
        ------------------------------------- */
        .btn {
            box-sizing: border-box;
            width: 100%;
        }        .btn > tbody > tr > td {
            padding-bottom: 15px;
        }        .btn table {
            width: auto;
        }        .btn table td {
            background-color: #ffffff;
            border-radius: 5px;
            text-align: center;
        }        .btn a {
            background-color: #ffffff;
            border: solid 1px #429A82;
            border-radius: 5px;
            box-sizing: border-box;
            color: #429A82;
            cursor: pointer;
            display: inline-block;
            font-size: 14px;
            font-weight: bold;
            margin: 0;
            padding: 12px 25px;
            text-decoration: none;
        }        .btn-primary table td {
            background-color: #429A82;
        }        .btn-primary a {
            background-color: #429A82;
            border-color: #429A82;
            color: #ffffff;
        }        /* -------------------------------------
            OTHER STYLES THAT MIGHT BE USEFUL
        ------------------------------------- */
        .last {
            margin-bottom: 0;
        }        .first {
            margin-top: 0;
        }        .align-center {
            text-align: center;
        }        .align-right {
            text-align: right;
        }        .align-left {
            text-align: left;
        }        .clear {
            clear: both;
        }        .mt0 {
            margin-top: 0;
        }        .mb0 {
            margin-bottom: 0;
        }        .preheader {
            color: transparent;
            display: none;
            height: 0;
            max-height: 0;
            max-width: 0;
            opacity: 0;
            overflow: hidden;
            mso-hide: all;
            visibility: hidden;
            width: 0;
        }        .powered-by a {
            text-decoration: none;
        }        hr {
            border: 0;
            border-bottom: 1px solid #f6f6f6;
            margin: 20px 0;
        }        /* -------------------------------------
            RESPONSIVE AND MOBILE FRIENDLY STYLES
        ------------------------------------- */
        @media only screen and (max-width: 620px) {
            table.body h1 {
                font-size: 28px !important;
                margin-bottom: 10px !important;
            }            table.body p,
            table.body ul,
            table.body ol,
            table.body td,
            table.body span,
            table.body a {
                font-size: 16px !important;
            }            table.body .wrapper,
            table.body .article {
                padding: 10px !important;
            }            table.body .content {
                padding: 0 !important;
            }            table.body .container {
                padding: 0 !important;
                width: 100% !important;
            }            table.body .main {
                border-left-width: 0 !important;
                border-radius: 0 !important;
                border-right-width: 0 !important;
            }            table.body .btn table {
                width: 100% !important;
            }            table.body .btn a {
                width: 100% !important;
            }            table.body .img-responsive {
                height: auto !important;
                max-width: 100% !important;
                width: auto !important;
            }
        }        /* -------------------------------------
            PRESERVE THESE STYLES IN THE HEAD
        ------------------------------------- */
        @media all {
            .ExternalClass {
                width: 100%;
            }            .ExternalClass,
            .ExternalClass p,
            .ExternalClass span,
            .ExternalClass font,
            .ExternalClass td,
            .ExternalClass div {
                line-height: 100%;
            }            .apple-link a {
                color: inherit !important;
                font-family: inherit !important;
                font-size: inherit !important;
                font-weight: inherit !important;
                line-height: inherit !important;
                text-decoration: none !important;
            }            #MessageViewBody a {
                color: inherit;
                text-decoration: none;
                font-size: inherit;
                font-family: inherit;
                font-weight: inherit;
                line-height: inherit;
            }            .btn-primary table td:hover {
                background-color: #34495e !important;
            }            .btn-primary a:hover {
                background-color: #34495e !important;
                border-color: #34495e !important;
            }
        }        
        &nbsp;
        
                            
                                    
                    
                        
                            
                                
                                                                            
                                                                                
                                            A new appointment has been added to your plan.                                                                                
                                            You can make changes by clicking the appointment link below.                                                                                
                                            Appointment Details                                                                                
                                            
                                                
                                                    Service                                                
                                                
                                                    hair cutting                                                
                                            
                                            
                                                
                                                    Provider                                                
                                                
                                                    vivek kumar                                                
                                            
                                            
                                                
                                                    Start                                                
                                                
                                                    22/07/2026 7:00 am                                                
                                            
                                            
                                                
                                                    End                                                
                                                
                                                    22/07/2026 7:30 am
                                                
                                            
                                            
                                                
                                                    Timezone                                                
                                                
                                                    UTC                                                
                                                                                                                                        
                                                    
                                                        Status                                                    
                                                    
                                                        Confirmed                                                    
                                                
                                            
                                                                                        
                                                
                                                    Description                                                
                                                
                                                    bfjkebfkerfbj,erbjk                                                
                                            
                                            
                                            
                                            
                                                                                                                                                                    
                                            Customer Details                                                                                
                                                                                            
                                                    
                                                        Name                                                    
                                                    
                                                        James Doe                                                    
                                                
                                            
                                                                                            
                                                    
                                                        Email                                                    
                                                    
                                                        james@example.org                                                    
                                                
                                            
                                                                                            
                                                    
                                                        Phone Number                                                    
                                                    
                                                        +10000000000                                                    
                                                
                                            
                                            
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                        
                                                                                
                                            
                                                
                                                    
                                                        
                                                            
                                                                
                                                                    
                                                                        Reschedule / Cancel Appointment
                                                                    
                                                                
                                                            
                                                        
                                                    
                                                
                                            
                                        
                                        
                                        
                                    
                                
                            
                        
                    
                    
                    
                
                
                                
                
                    
                        
                            
                                Powered by
                                
                                    Easy!Appointments
                                
                                |
                                
                                    Company Name                                
                            
                        
                    
                
                            
        
        &nbsp;
    

--b2=_TqgPzo8fGTAmfE0aFFLW7VHxDbFrNxpP3zOd3EKZ5uQ
Content-Type: multipart/related;
 boundary="b3=_TqgPzo8fGTAmfE0aFFLW7VHxDbFrNxpP3zOd3EKZ5uQ";
 type="text/html"

--b3=_TqgPzo8fGTAmfE0aFFLW7VHxDbFrNxpP3zOd3EKZ5uQ
Content-Type: text/html; charset=us-ascii


<!doctype html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <title>
        Appointment Details | Easy!Appointments
    </title>
    <style>
        /* -------------------------------------
            GLOBAL RESETS
        ------------------------------------- */

        /*All the styling goes here*/

        img {
            border: none;
            -ms-interpolation-mode: bicubic;
            max-width: 100%;
        }

        body {
            background-color: #f6f6f6;
            font-family: sans-serif;
            -webkit-font-smoothing: antialiased;
            font-size: 14px;
            line-height: 1.4;
            margin: 0;
            padding: 0;
            -ms-text-size-adjust: 100%;
            -webkit-text-size-adjust: 100%;
        }

        table {
            border-collapse: separate;
            mso-table-lspace: 0pt;
            mso-table-rspace: 0pt;
            width: 100%;
        }

        table td {
            font-family: sans-serif;
            font-size: 14px;
            vertical-align: top;
        }

        /* -------------------------------------
            BODY & CONTAINER
        ------------------------------------- */

        .body {
            background-color: #f6f6f6;
            width: 100%;
        }

        /* Set a max-width, and make it display as block so it will automatically stretch to that width, but will also shrink down on a phone or something */
        .container {
            display: block;
            margin: 0 auto !important;
            /* makes it centered */
            max-width: 580px;
            padding: 10px;
            width: 580px;
        }

        /* This should also be a block element, so that it will fill 100% of the .container */
        .content {
            box-sizing: border-box;
            display: block;
            margin: 0 auto;
            max-width: 580px;
            padding: 10px;
        }

        /* -------------------------------------
            HEADER, FOOTER, MAIN
        ------------------------------------- */
        .main {
            background: #ffffff;
            border-radius: 3px;
            width: 100%;
        }

        .wrapper {
            box-sizing: border-box;
            padding: 20px;
        }

        .content-block {
            padding-bottom: 10px;
            padding-top: 10px;
        }

        .footer {
            clear: both;
            margin-top: 10px;
            text-align: center;
            width: 100%;
        }

        .footer td,
        .footer p,
        .footer span,
        .footer a {
            color: #999999;
            font-size: 12px;
            text-align: center;
        }

        /* -------------------------------------
            TYPOGRAPHY
        ------------------------------------- */
        h1,
        h2,
        h3,
        h4 {
            color: #000000;
            font-family: sans-serif;
            font-weight: 400;
            line-height: 1.4;
            margin: 0;
            margin-bottom: 15px;
        }

        h1 {
            font-size: 24px;
            font-weight: 300;
            text-align: center;
            margin-bottom: 40px;
        }

        .label {
            width: 120px;
        }

        .details-table {
            margin: 0 0 0 auto;
            width: 85%;
        }

        p,
        ul,
        ol {
            font-family: sans-serif;
            font-size: 14px;
            font-weight: normal;
            margin: 0;
            margin-bottom: 15px;
        }

        p li,
        ul li,
        ol li {
            list-style-position: inside;
            margin-left: 5px;
        }

        a {
            color: #429A82;
            text-decoration: underline;
        }

        /* -------------------------------------
            BUTTONS
        ------------------------------------- */
        .btn {
            box-sizing: border-box;
            width: 100%;
        }

        .btn > tbody > tr > td {
            padding-bottom: 15px;
        }

        .btn table {
            width: auto;
        }

        .btn table td {
            background-color: #ffffff;
            border-radius: 5px;
            text-align: center;
        }

        .btn a {
            background-color: #ffffff;
            border: solid 1px #429A82;
            border-radius: 5px;
            box-sizing: border-box;
            color: #429A82;
            cursor: pointer;
            display: inline-block;
            font-size: 14px;
            font-weight: bold;
            margin: 0;
            padding: 12px 25px;
            text-decoration: none;
        }

        .btn-primary table td {
            background-color: #429A82;
        }

        .btn-primary a {
            background-color: #429A82;
            border-color: #429A82;
            color: #ffffff;
        }

        /* -------------------------------------
            OTHER STYLES THAT MIGHT BE USEFUL
        ------------------------------------- */
        .last {
            margin-bottom: 0;
        }

        .first {
            margin-top: 0;
        }

        .align-center {
            text-align: center;
        }

        .align-right {
            text-align: right;
        }

        .align-left {
            text-align: left;
        }

        .clear {
            clear: both;
        }

        .mt0 {
            margin-top: 0;
        }

        .mb0 {
            margin-bottom: 0;
        }

        .preheader {
            color: transparent;
            display: none;
            height: 0;
            max-height: 0;
            max-width: 0;
            opacity: 0;
            overflow: hidden;
            mso-hide: all;
            visibility: hidden;
            width: 0;
        }

        .powered-by a {
            text-decoration: none;
        }

        hr {
            border: 0;
            border-bottom: 1px solid #f6f6f6;
            margin: 20px 0;
        }

        /* -------------------------------------
            RESPONSIVE AND MOBILE FRIENDLY STYLES
        ------------------------------------- */
        @media only screen and (max-width: 620px) {
            table.body h1 {
                font-size: 28px !important;
                margin-bottom: 10px !important;
            }

            table.body p,
            table.body ul,
            table.body ol,
            table.body td,
            table.body span,
            table.body a {
                font-size: 16px !important;
            }

            table.body .wrapper,
            table.body .article {
                padding: 10px !important;
            }

            table.body .content {
                padding: 0 !important;
            }

            table.body .container {
                padding: 0 !important;
                width: 100% !important;
            }

            table.body .main {
                border-left-width: 0 !important;
                border-radius: 0 !important;
                border-right-width: 0 !important;
            }

            table.body .btn table {
                width: 100% !important;
            }

            table.body .btn a {
                width: 100% !important;
            }

            table.body .img-responsive {
                height: auto !important;
                max-width: 100% !important;
                width: auto !important;
            }
        }

        /* -------------------------------------
            PRESERVE THESE STYLES IN THE HEAD
        ------------------------------------- */
        @media all {
            .ExternalClass {
                width: 100%;
            }

            .ExternalClass,
            .ExternalClass p,
            .ExternalClass span,
            .ExternalClass font,
            .ExternalClass td,
            .ExternalClass div {
                line-height: 100%;
            }

            .apple-link a {
                color: inherit !important;
                font-family: inherit !important;
                font-size: inherit !important;
                font-weight: inherit !important;
                line-height: inherit !important;
                text-decoration: none !important;
            }

            #MessageViewBody a {
                color: inherit;
                text-decoration: none;
                font-size: inherit;
                font-family: inherit;
                font-weight: inherit;
                line-height: inherit;
            }

            .btn-primary table td:hover {
                background-color: #34495e !important;
            }

            .btn-primary a:hover {
                background-color: #34495e !important;
                border-color: #34495e !important;
            }
        }

    </style>
</head>
<body>
<table role="presentation" border="0" cellpadding="0" cellspacing="0" class="body">
    <tr>
        <td>&nbsp;</td>
        <td class="container">
            <div class="content">

                <!-- START CENTERED WHITE CONTAINER -->
                <table role="presentation" class="main">

                    <!-- START MAIN CONTENT AREA -->
                    <tr>
                        <td class="wrapper">
                            <table role="presentation" border="0" cellpadding="0" cellspacing="0">
                                <tr>
                                    <td>

                                        <!-- Logo at the top center, embedded as CID -->
                                        <img src="cid:logo.png" alt="Logo" style="display:block;max-width:67px; margin: auto auto 24px;">

                                        <h1 style="text-align: center;">
                                            A new appointment has been added to your plan.                                        </h1>

                                        <p style="text-align: center;">
                                            You can make changes by clicking the appointment link below.                                        </p>

                                        <h2 style="text-align: center;">
                                            Appointment Details                                        </h2>

                                        <table id="appointment-details" class="details-table" align="center">
                                            <tr>
                                                <td class="label" style="padding: 3px;font-weight: bold;">
                                                    Service                                                </td>
                                                <td style="padding: 3px;">
                                                    hair cutting                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="label" style="padding: 3px;font-weight: bold;">
                                                    Provider                                                </td>
                                                <td style="padding: 3px;">
                                                    vivek kumar                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="label" style="padding: 3px;font-weight: bold;">
                                                    Start                                                </td>
                                                <td style="padding: 3px;">
                                                    22/07/2026 7:00 am                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="label" style="padding: 3px;font-weight: bold;">
                                                    End                                                </td>
                                                <td style="padding: 3px;">
                                                    22/07/2026 7:30 am
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="label" style="padding: 3px;font-weight: bold;">
                                                    Timezone                                                </td>
                                                <td style="padding: 3px;">
                                                    UTC                                                </td>
                                            </tr>

                                                                                            <tr>
                                                    <td class="label" style="padding: 3px;font-weight: bold;">
                                                        Status                                                    </td>
                                                    <td style="padding: 3px;">
                                                        Confirmed                                                    </td>
                                                </tr>
                                            
                                                                                        <tr>
                                                <td class="label" style="padding: 3px;font-weight: bold;">
                                                    Description                                                </td>
                                                <td style="padding: 3px;">
                                                    bfjkebfkerfbj,erbjk                                                </td>
                                            </tr>
                                            
                                            
                                            
                                                                                    </table>

                                        <br>

                                        <h2 style="text-align: center;">
                                            Customer Details                                        </h2>

                                        <table id="customer-details" class="details-table" align="center">
                                                                                            <tr>
                                                    <td class="label" style="padding: 3px;font-weight: bold;">
                                                        Name                                                    </td>
                                                    <td style="padding: 3px;">
                                                        James Doe                                                    </td>
                                                </tr>
                                            
                                                                                            <tr>
                                                    <td class="label" style="padding: 3px;font-weight: bold;">
                                                        Email                                                    </td>
                                                    <td style="padding: 3px;">
                                                        james@example.org                                                    </td>
                                                </tr>
                                            
                                                                                            <tr>
                                                    <td class="label" style="padding: 3px;font-weight: bold;">
                                                        Phone Number                                                    </td>
                                                    <td style="padding: 3px;">
                                                        +10000000000                                                    </td>
                                                </tr>
                                            
                                            
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                </table>

                                        <br>
                                        <br>

                                        <table class="btn btn-primary" role="presentation" border="0" cellpadding="0" cellspacing="0">
                                            <tbody>
                                                <tr>
                                                    <td align="center">
                                                        <table role="presentation" border="0" cellpadding="0" cellspacing="0">
                                                            <tbody>
                                                                <tr>
                                                                    <td>
                                                                        <a href="http://localhost/easy/index.php/calendar/reschedule/4SMeDUwo15X2" target="_blank">Reschedule / Cancel Appointment</a>
                                                                    </td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                        
                                        
                                    </td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                    
                    <!-- END MAIN CONTENT AREA -->
                </table>
                
                <!-- END CENTERED WHITE CONTAINER -->

                <!-- START FOOTER -->
                <div class="footer">
                    <table role="presentation" border="0" cellpadding="0" cellspacing="0">
                        <tr>
                            <td class="content-block powered-by">
                                Powered by
                                <a href="https://easyappointments.org" style="text-decoration: none;">
                                    Easy!Appointments
                                </a>
                                |
                                <a href="https://example.org" style="text-decoration: none;">
                                    Company Name                                </a>
                            </td>
                        </tr>
                    </table>
                </div>
                <!-- END FOOTER -->

            </div>
        </td>
        <td>&nbsp;</td>
    </tr>
</table>
</body>
</html>

--b3=_TqgPzo8fGTAmfE0aFFLW7VHxDbFrNxpP3zOd3EKZ5uQ
Content-Type: image/png; name=logo.png
Content-Transfer-Encoding: base64
Content-ID: <logo.png>
Content-Disposition: inline; filename=logo.png

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
TkSuQmCC

--b3=_TqgPzo8fGTAmfE0aFFLW7VHxDbFrNxpP3zOd3EKZ5uQ--


--b2=_TqgPzo8fGTAmfE0aFFLW7VHxDbFrNxpP3zOd3EKZ5uQ--

--b1=_TqgPzo8fGTAmfE0aFFLW7VHxDbFrNxpP3zOd3EKZ5uQ
Content-Type: text/calendar; name=invitation.ics
Content-Transfer-Encoding: base64
Content-Disposition: attachment; filename=invitation.ics

QkVHSU46VkNBTEVOREFSDQpWRVJTSU9OOjIuMA0KUFJPRElEOi0vL0Vhc3lBcHBvaW50bWVudHMv
L09wZW4gU291cmNlIFdlYiBTY2hlZHVsZXIvL0VODQpDQUxTQ0FMRTpHUkVHT1JJQU4NCk1FVEhP
RDpSRVFVRVNUDQpCRUdJTjpWVElNRVpPTkUNClRaSUQ6RXVyb3BlL0Jlcmxpbg0KQkVHSU46U1RB
TkRBUkQNCkRUU1RBUlQ6MjAyNjEwMjVUMDEwMDAwWg0KVFpPRkZTRVRUTzorMDEwMA0KVFpPRkZT
RVRGUk9NOiswMjAwDQpSUlVMRTpGUkVRPVlFQVJMWTtCWU1PTlRIPTExO0JZREFZPTFTVQ0KRU5E
OlNUQU5EQVJEDQpCRUdJTjpEQVlMSUdIVA0KRFRTVEFSVDoyMDI2MDMyOVQwMTAwMDBaDQpUWk9G
RlNFVFRPOiswMjAwDQpUWk9GRlNFVEZST006KzAxMDANClJSVUxFOkZSRVE9WUVBUkxZO0JZTU9O
VEg9MztCWURBWT0yU1UNCkVORDpEQVlMSUdIVA0KRU5EOlZUSU1FWk9ORQ0KQkVHSU46VkVWRU5U
DQpVSUQ6ZWEtZWNjYmM4N2U0YjVjZTJmZTI4MzA4ZmQ5ZjJhN2JhZjMNCkRUU1RBUlQ6MjAyNjA3
MjJUMDcwMDAwWg0KRFRFTkQ6MjAyNjA3MjJUMDczMDAwWg0KU0VRVUVOQ0U6MTc4NDc5NzYzOA0K
U1RBVFVTOkNPTkZJUk1FRA0KU1VNTUFSWTpoYWlyIGN1dHRpbmcNCkRFU0NSSVBUSU9OOlxuUHJv
dmlkZXJcblxuTmFtZTogdml2ZWsga3VtYXJcbkVtYWlsOiByYWo5NzNhbnNodWxAZ21haWwNCiAu
Y29tXG5QaG9uZSBOdW1iZXI6IFxuQWRkcmVzczogXG5DaXR5OiBcblppcCBDb2RlOiBcblxuQ3Vz
dG9tZXJcblxuTmFtDQogZTogSmFtZXMgRG9lXG5FbWFpbDogamFtZXNAZXhhbXBsZS5vcmdcblBo
b25lIE51bWJlcjogKzEwMDAwMDAwMDAwXG5BZA0KIGRyZXNzOiBcbkNpdHk6IFxuWmlwIENvZGU6
IFxuXG5Ob3Rlc1xuXG4NCkxPQ0FUSU9OOm5vaWRhIHNlYyA2Mw0KRFRTVEFNUDoyMDI2MDcyM1Qw
OTA3MTlaDQpBVFRFTkRFRTtDVVRZUEU9SU5ESVZJRFVBTDtST0xFPVJFUS1QQVJUSUNJUEFOVDtQ
QVJUU1RBVD1ORUVEUy1BQ1RJT047DQogUlNWUD1UUlVFO0NOPUphbWVzIERvZTptYWlsdG86amFt
ZXNAZXhhbXBsZS5vcmcNCkFUVEVOREVFO0NVVFlQRT1JTkRJVklEVUFMO1JPTEU9UkVRLVBBUlRJ
Q0lQQU5UO1BBUlRTVEFUPUFDQ0VQVEVEO1JTVlANCiA9RkFMU0U7Q049dml2ZWsga3VtYXI6bWFp
bHRvOnJhajk3M2Fuc2h1bEBnbWFpbC5jb20NCk9SR0FOSVpFUjtDTj12aXZlayBrdW1hcjptYWls
dG86cmFqOTczYW5zaHVsQGdtYWlsLmNvbQ0KQkVHSU46VkFMQVJNDQpUUklHR0VSO1ZBTFVFPURB
VEUtVElNRToyMDI2MDcyMlQwNjQ1MDBaDQpBQ1RJT046RU1BSUwNClNVTU1BUlk6QWxhcm0gbm90
aWZpY2F0aW9uDQpERVNDUklQVElPTjpUaGlzIGlzIGFuIGV2ZW50IHJlbWluZGVyDQpBVFRFTkRF
RTtDVVRZUEU9SU5ESVZJRFVBTDtST0xFPVJFUS1QQVJUSUNJUEFOVDtQQVJUU1RBVD1ORUVEUy1B
Q1RJT047DQogUlNWUD1UUlVFO0NOPUphbWVzIERvZTptYWlsdG86amFtZXNAZXhhbXBsZS5vcmcN
CkVORDpWQUxBUk0NCkJFR0lOOlZBTEFSTQ0KVFJJR0dFUjtWQUxVRT1EQVRFLVRJTUU6MjAyNjA3
MjJUMDYwMDAwWg0KQUNUSU9OOkVNQUlMDQpTVU1NQVJZOkFsYXJtIG5vdGlmaWNhdGlvbg0KREVT
Q1JJUFRJT046VGhpcyBpcyBhbiBldmVudCByZW1pbmRlcg0KQVRURU5ERUU7Q1VUWVBFPUlORElW
SURVQUw7Uk9MRT1SRVEtUEFSVElDSVBBTlQ7UEFSVFNUQVQ9TkVFRFMtQUNUSU9OOw0KIFJTVlA9
VFJVRTtDTj1KYW1lcyBEb2U6bWFpbHRvOmphbWVzQGV4YW1wbGUub3JnDQpFTkQ6VkFMQVJNDQpF
TkQ6VkVWRU5UDQpFTkQ6VkNBTEVOREFSDQo=

--b1=_TqgPzo8fGTAmfE0aFFLW7VHxDbFrNxpP3zOd3EKZ5uQ--
',
            ),
          ),
          1 => 
          array (
            'file' => 'C:\\xampp\\htdocs\\easy\\vendor\\phpmailer\\phpmailer\\src\\PHPMailer.php',
            'line' => 1670,
            'function' => 'postSend',
            'class' => 'PHPMailer\\PHPMailer\\PHPMailer',
            'type' => '->',
            'args' => 
            array (
            ),
          ),
          2 => 
          array (
            'file' => 'C:\\xampp\\htdocs\\easy\\application\\libraries\\Email_messages.php',
            'line' => 119,
            'function' => 'send',
            'class' => 'PHPMailer\\PHPMailer\\PHPMailer',
            'type' => '->',
            'args' => 
            array (
            ),
          ),
          3 => 
          array (
            'file' => 'C:\\xampp\\htdocs\\easy\\application\\libraries\\Notifications.php',
            'line' => 147,
            'function' => 'send_appointment_saved',
            'class' => 'Email_messages',
            'type' => '->',
            'args' => 
            array (
              0 => 
              array (
                'id' => 3,
                'create_datetime' => '2026-07-23 11:07:18',
                'update_datetime' => '2026-07-23 11:07:18',
                'book_datetime' => '2026-07-23 11:07:18',
                'start_datetime' => '2026-07-22 07:00:00',
                'end_datetime' => '2026-07-22 07:30:00',
                'location' => '',
                'meeting_link' => '',
                'notes' => '',
                'hash' => '4SMeDUwo15X2',
                'color' => '#7cbae8',
                'status' => 'Confirmed',
                'is_unavailability' => false,
                'id_users_provider' => 5,
                'id_users_customer' => 3,
                'id_services' => 2,
                'id_google_calendar' => NULL,
                'id_caldav_calendar' => NULL,
              ),
              1 => 
              array (
                'id' => 5,
                'create_datetime' => '2026-07-22 13:13:04',
                'update_datetime' => '2026-07-22 13:13:04',
                'first_name' => 'vivek',
                'last_name' => 'kumar',
                'email' => 'raj973anshul@gmail.com',
                'mobile_number' => NULL,
                'phone_number' => '',
                'address' => '',
                'city' => '',
                'state' => '',
                'zip_code' => '',
                'notes' => '',
                'timezone' => 'Europe/Berlin',
                'language' => 'english',
                'custom_field_1' => NULL,
                'custom_field_2' => NULL,
                'custom_field_3' => NULL,
                'custom_field_4' => NULL,
                'custom_field_5' => NULL,
                'is_private' => false,
                'ldap_dn' => NULL,
                'id_roles' => 2,
                'settings' => 
                array (
                  'username' => 'vivekkumar',
                  'password_reset_token' => NULL,
                  'password_reset_expires' => NULL,
                  'working_plan' => '{"sunday":{"start":"09:00","end":"18:00","breaks":[{"start":"14:30","end":"15:00"}]},"monday":{"start":"09:00","end":"18:00","breaks":[{"start":"14:30","end":"15:00"}]},"tuesday":{"start":"09:00","end":"18:00","breaks":[{"start":"14:30","end":"15:00"}]},"wednesday":{"start":"09:00","end":"18:00","breaks":[{"start":"14:30","end":"15:00"}]},"thursday":{"start":"09:00","end":"18:00","breaks":[{"start":"14:30","end":"15:00"}]},"friday":{"start":"09:00","end":"18:00","breaks":[{"start":"14:30","end":"15:00"}]},"saturday":{"start":"09:00","end":"18:00","breaks":[{"start":"14:30","end":"15:00"}]}}',
                  'working_plan_exceptions' => '[]',
                  'notifications' => '1',
                  'google_sync' => NULL,
                  'google_token' => NULL,
                  'google_calendar' => NULL,
                  'caldav_sync' => '0',
                  'caldav_url' => NULL,
                  'caldav_username' => NULL,
                  'caldav_password' => NULL,
                  'sync_past_days' => '30',
                  'sync_future_days' => '90',
                  'calendar_view' => 'table',
                ),
                'services' => 
                array (
                  0 => 1,
                  1 => 2,
                ),
              ),
              2 => 
              array (
                'id' => 2,
                'create_datetime' => '2026-07-23 10:51:48',
                'update_datetime' => '2026-07-23 10:51:48',
                'name' => 'hair cutting',
                'duration' => '30',
                'price' => 50.0,
                'currency' => '',
                'description' => 'bfjkebfkerfbj,erbjk',
                'slot_interval' => '15',
                'color' => '#7cbae8',
                'location' => 'noida sec 63',
                'attendants_number' => 1,
                'is_private' => false,
                'id_service_categories' => 1,
              ),
              3 => 
              array (
                'id' => 3,
                'create_datetime' => '2026-07-22 11:55:43',
                'update_datetime' => '2026-07-23 11:07:18',
                'first_name' => 'James',
                'last_name' => 'Doe',
                'email' => 'james@example.org',
                'mobile_number' => NULL,
                'phone_number' => '+10000000000',
                'address' => '',
                'city' => '',
                'state' => NULL,
                'zip_code' => '',
                'notes' => '',
                'timezone' => 'UTC',
                'language' => 'english',
                'custom_field_1' => NULL,
                'custom_field_2' => NULL,
                'custom_field_3' => NULL,
                'custom_field_4' => NULL,
                'custom_field_5' => NULL,
                'is_private' => '0',
                'ldap_dn' => NULL,
                'id_roles' => 3,
              ),
              4 => 
              array (
                'company_name' => 'Company Name',
                'company_link' => 'https://example.org',
                'company_email' => 'info@example.org',
                'company_color' => NULL,
                'date_format' => 'DMY',
                'time_format' => 'regular',
              ),
              5 => 'A new appointment has been added to your plan.',
              6 => 'You can make changes by clicking the appointment link below.',
              7 => 'http://localhost/easy/index.php/calendar/reschedule/4SMeDUwo15X2',
              8 => 'john@example.org',
              9 => 'BEGIN:VCALENDAR
VERSION:2.0
PRODID:-//EasyAppointments//Open Source Web Scheduler//EN
CALSCALE:GREGORIAN
METHOD:REQUEST
BEGIN:VTIMEZONE
TZID:Europe/Berlin
BEGIN:STANDARD
DTSTART:20261025T010000Z
TZOFFSETTO:+0100
TZOFFSETFROM:+0200
RRULE:FREQ=YEARLY;BYMONTH=11;BYDAY=1SU
END:STANDARD
BEGIN:DAYLIGHT
DTSTART:20260329T010000Z
TZOFFSETTO:+0200
TZOFFSETFROM:+0100
RRULE:FREQ=YEARLY;BYMONTH=3;BYDAY=2SU
END:DAYLIGHT
END:VTIMEZONE
BEGIN:VEVENT
UID:ea-eccbc87e4b5ce2fe28308fd9f2a7baf3
DTSTART:20260722T070000Z
DTEND:20260722T073000Z
SEQUENCE:1784797638
STATUS:CONFIRMED
SUMMARY:hair cutting
DESCRIPTION:\\nProvider\\n\\nName: vivek kumar\\nEmail: raj973anshul@gmail
 .com\\nPhone Number: \\nAddress: \\nCity: \\nZip Code: \\n\\nCustomer\\n\\nNam
 e: James Doe\\nEmail: james@example.org\\nPhone Number: +10000000000\\nAd
 dress: \\nCity: \\nZip Code: \\n\\nNotes\\n\\n
LOCATION:noida sec 63
DTSTAMP:20260723T090719Z
ATTENDEE;CUTYPE=INDIVIDUAL;ROLE=REQ-PARTICIPANT;PARTSTAT=NEEDS-ACTION;
 RSVP=TRUE;CN=James Doe:mailto:james@example.org
ATTENDEE;CUTYPE=INDIVIDUAL;ROLE=REQ-PARTICIPANT;PARTSTAT=ACCEPTED;RSVP
 =FALSE;CN=vivek kumar:mailto:raj973anshul@gmail.com
ORGANIZER;CN=vivek kumar:mailto:raj973anshul@gmail.com
BEGIN:VALARM
TRIGGER;VALUE=DATE-TIME:20260722T064500Z
ACTION:EMAIL
SUMMARY:Alarm notification
DESCRIPTION:This is an event reminder
ATTENDEE;CUTYPE=INDIVIDUAL;ROLE=REQ-PARTICIPANT;PARTSTAT=NEEDS-ACTION;
 RSVP=TRUE;CN=James Doe:mailto:james@example.org
END:VALARM
BEGIN:VALARM
TRIGGER;VALUE=DATE-TIME:20260722T060000Z
ACTION:EMAIL
SUMMARY:Alarm notification
DESCRIPTION:This is an event reminder
ATTENDEE;CUTYPE=INDIVIDUAL;ROLE=REQ-PARTICIPANT;PARTSTAT=NEEDS-ACTION;
 RSVP=TRUE;CN=James Doe:mailto:james@example.org
END:VALARM
END:VEVENT
END:VCALENDAR
',
              10 => 'UTC',
            ),
          ),
          4 => 
          array (
            'file' => 'C:\\xampp\\htdocs\\easy\\application\\controllers\\Calendar.php',
            'line' => 389,
            'function' => 'notify_appointment_saved',
            'class' => 'Notifications',
            'type' => '->',
            'args' => 
            array (
              0 => 
              array (
                'id' => 3,
                'create_datetime' => '2026-07-23 11:07:18',
                'update_datetime' => '2026-07-23 11:07:18',
                'book_datetime' => '2026-07-23 11:07:18',
                'start_datetime' => '2026-07-22 09:00:00',
                'end_datetime' => '2026-07-22 09:30:00',
                'location' => '',
                'meeting_link' => '',
                'notes' => '',
                'hash' => '4SMeDUwo15X2',
                'color' => '#7cbae8',
                'status' => 'Confirmed',
                'is_unavailability' => false,
                'id_users_provider' => 5,
                'id_users_customer' => 3,
                'id_services' => 2,
                'id_google_calendar' => NULL,
                'id_caldav_calendar' => NULL,
              ),
              1 => 
              array (
                'id' => 2,
                'create_datetime' => '2026-07-23 10:51:48',
                'update_datetime' => '2026-07-23 10:51:48',
                'name' => 'hair cutting',
                'duration' => '30',
                'price' => 50.0,
                'currency' => '',
                'description' => 'bfjkebfkerfbj,erbjk',
                'slot_interval' => '15',
                'color' => '#7cbae8',
                'location' => 'noida sec 63',
                'attendants_number' => 1,
                'is_private' => false,
                'id_service_categories' => 1,
              ),
              2 => 
              array (
                'id' => 5,
                'create_datetime' => '2026-07-22 13:13:04',
                'update_datetime' => '2026-07-22 13:13:04',
                'first_name' => 'vivek',
                'last_name' => 'kumar',
                'email' => 'raj973anshul@gmail.com',
                'mobile_number' => NULL,
                'phone_number' => '',
                'address' => '',
                'city' => '',
                'state' => '',
                'zip_code' => '',
                'notes' => '',
                'timezone' => 'Europe/Berlin',
                'language' => 'english',
                'custom_field_1' => NULL,
                'custom_field_2' => NULL,
                'custom_field_3' => NULL,
                'custom_field_4' => NULL,
                'custom_field_5' => NULL,
                'is_private' => false,
                'ldap_dn' => NULL,
                'id_roles' => 2,
                'settings' => 
                array (
                  'username' => 'vivekkumar',
                  'password_reset_token' => NULL,
                  'password_reset_expires' => NULL,
                  'working_plan' => '{"sunday":{"start":"09:00","end":"18:00","breaks":[{"start":"14:30","end":"15:00"}]},"monday":{"start":"09:00","end":"18:00","breaks":[{"start":"14:30","end":"15:00"}]},"tuesday":{"start":"09:00","end":"18:00","breaks":[{"start":"14:30","end":"15:00"}]},"wednesday":{"start":"09:00","end":"18:00","breaks":[{"start":"14:30","end":"15:00"}]},"thursday":{"start":"09:00","end":"18:00","breaks":[{"start":"14:30","end":"15:00"}]},"friday":{"start":"09:00","end":"18:00","breaks":[{"start":"14:30","end":"15:00"}]},"saturday":{"start":"09:00","end":"18:00","breaks":[{"start":"14:30","end":"15:00"}]}}',
                  'working_plan_exceptions' => '[]',
                  'notifications' => '1',
                  'google_sync' => NULL,
                  'google_token' => NULL,
                  'google_calendar' => NULL,
                  'caldav_sync' => '0',
                  'caldav_url' => NULL,
                  'caldav_username' => NULL,
                  'caldav_password' => NULL,
                  'sync_past_days' => '30',
                  'sync_future_days' => '90',
                  'calendar_view' => 'table',
                ),
                'services' => 
                array (
                  0 => 1,
                  1 => 2,
                ),
              ),
              3 => 
              array (
                'id' => 3,
                'create_datetime' => '2026-07-22 11:55:43',
                'update_datetime' => '2026-07-23 11:07:18',
                'first_name' => 'James',
                'last_name' => 'Doe',
                'email' => 'james@example.org',
                'mobile_number' => NULL,
                'phone_number' => '+10000000000',
                'address' => '',
                'city' => '',
                'state' => NULL,
                'zip_code' => '',
                'notes' => '',
                'timezone' => 'UTC',
                'language' => 'english',
                'custom_field_1' => NULL,
                'custom_field_2' => NULL,
                'custom_field_3' => NULL,
                'custom_field_4' => NULL,
                'custom_field_5' => NULL,
                'is_private' => '0',
                'ldap_dn' => NULL,
                'id_roles' => 3,
              ),
              4 => 
              array (
                'company_name' => 'Company Name',
                'company_link' => 'https://example.org',
                'company_email' => 'info@example.org',
                'company_color' => NULL,
                'date_format' => 'DMY',
                'time_format' => 'regular',
              ),
              5 => false,
            ),
          ),
          5 => 
          array (
            'file' => 'C:\\xampp\\htdocs\\easy\\system\\core\\CodeIgniter.php',
            'line' => 481,
            'function' => 'save_appointment',
            'class' => 'Calendar',
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
      )),
      1 => 'appointment-saved to admin',
      2 => 3,
    ),
  ),
  2 => 
  array (
    'file' => 'C:\\xampp\\htdocs\\easy\\application\\controllers\\Calendar.php',
    'line' => 389,
    'function' => 'notify_appointment_saved',
    'class' => 'Notifications',
    'type' => '->',
    'args' => 
    array (
      0 => 
      array (
        'id' => 3,
        'create_datetime' => '2026-07-23 11:07:18',
        'update_datetime' => '2026-07-23 11:07:18',
        'book_datetime' => '2026-07-23 11:07:18',
        'start_datetime' => '2026-07-22 09:00:00',
        'end_datetime' => '2026-07-22 09:30:00',
        'location' => '',
        'meeting_link' => '',
        'notes' => '',
        'hash' => '4SMeDUwo15X2',
        'color' => '#7cbae8',
        'status' => 'Confirmed',
        'is_unavailability' => false,
        'id_users_provider' => 5,
        'id_users_customer' => 3,
        'id_services' => 2,
        'id_google_calendar' => NULL,
        'id_caldav_calendar' => NULL,
      ),
      1 => 
      array (
        'id' => 2,
        'create_datetime' => '2026-07-23 10:51:48',
        'update_datetime' => '2026-07-23 10:51:48',
        'name' => 'hair cutting',
        'duration' => '30',
        'price' => 50.0,
        'currency' => '',
        'description' => 'bfjkebfkerfbj,erbjk',
        'slot_interval' => '15',
        'color' => '#7cbae8',
        'location' => 'noida sec 63',
        'attendants_number' => 1,
        'is_private' => false,
        'id_service_categories' => 1,
      ),
      2 => 
      array (
        'id' => 5,
        'create_datetime' => '2026-07-22 13:13:04',
        'update_datetime' => '2026-07-22 13:13:04',
        'first_name' => 'vivek',
        'last_name' => 'kumar',
        'email' => 'raj973anshul@gmail.com',
        'mobile_number' => NULL,
        'phone_number' => '',
        'address' => '',
        'city' => '',
        'state' => '',
        'zip_code' => '',
        'notes' => '',
        'timezone' => 'Europe/Berlin',
        'language' => 'english',
        'custom_field_1' => NULL,
        'custom_field_2' => NULL,
        'custom_field_3' => NULL,
        'custom_field_4' => NULL,
        'custom_field_5' => NULL,
        'is_private' => false,
        'ldap_dn' => NULL,
        'id_roles' => 2,
        'settings' => 
        array (
          'username' => 'vivekkumar',
          'password_reset_token' => NULL,
          'password_reset_expires' => NULL,
          'working_plan' => '{"sunday":{"start":"09:00","end":"18:00","breaks":[{"start":"14:30","end":"15:00"}]},"monday":{"start":"09:00","end":"18:00","breaks":[{"start":"14:30","end":"15:00"}]},"tuesday":{"start":"09:00","end":"18:00","breaks":[{"start":"14:30","end":"15:00"}]},"wednesday":{"start":"09:00","end":"18:00","breaks":[{"start":"14:30","end":"15:00"}]},"thursday":{"start":"09:00","end":"18:00","breaks":[{"start":"14:30","end":"15:00"}]},"friday":{"start":"09:00","end":"18:00","breaks":[{"start":"14:30","end":"15:00"}]},"saturday":{"start":"09:00","end":"18:00","breaks":[{"start":"14:30","end":"15:00"}]}}',
          'working_plan_exceptions' => '[]',
          'notifications' => '1',
          'google_sync' => NULL,
          'google_token' => NULL,
          'google_calendar' => NULL,
          'caldav_sync' => '0',
          'caldav_url' => NULL,
          'caldav_username' => NULL,
          'caldav_password' => NULL,
          'sync_past_days' => '30',
          'sync_future_days' => '90',
          'calendar_view' => 'table',
        ),
        'services' => 
        array (
          0 => 1,
          1 => 2,
        ),
      ),
      3 => 
      array (
        'id' => 3,
        'create_datetime' => '2026-07-22 11:55:43',
        'update_datetime' => '2026-07-23 11:07:18',
        'first_name' => 'James',
        'last_name' => 'Doe',
        'email' => 'james@example.org',
        'mobile_number' => NULL,
        'phone_number' => '+10000000000',
        'address' => '',
        'city' => '',
        'state' => NULL,
        'zip_code' => '',
        'notes' => '',
        'timezone' => 'UTC',
        'language' => 'english',
        'custom_field_1' => NULL,
        'custom_field_2' => NULL,
        'custom_field_3' => NULL,
        'custom_field_4' => NULL,
        'custom_field_5' => NULL,
        'is_private' => '0',
        'ldap_dn' => NULL,
        'id_roles' => 3,
      ),
      4 => 
      array (
        'company_name' => 'Company Name',
        'company_link' => 'https://example.org',
        'company_email' => 'info@example.org',
        'company_color' => NULL,
        'date_format' => 'DMY',
        'time_format' => 'regular',
      ),
      5 => false,
    ),
  ),
)
ERROR - 2026-07-23 11:07:25 --> #0 C:\xampp\htdocs\easy\vendor\phpmailer\phpmailer\src\PHPMailer.php(1857): PHPMailer\PHPMailer\PHPMailer->mailSend('Date: Thu, 23 J...', '--b1=_TqgPzo8fG...')
#1 C:\xampp\htdocs\easy\vendor\phpmailer\phpmailer\src\PHPMailer.php(1670): PHPMailer\PHPMailer\PHPMailer->postSend()
#2 C:\xampp\htdocs\easy\application\libraries\Email_messages.php(119): PHPMailer\PHPMailer\PHPMailer->send()
#3 C:\xampp\htdocs\easy\application\libraries\Notifications.php(147): Email_messages->send_appointment_saved(Array, Array, Array, Array, Array, 'A new appointme...', 'You can make ch...', 'http://localhos...', 'john@example.or...', 'BEGIN:VCALENDAR...', 'UTC')
#4 C:\xampp\htdocs\easy\application\controllers\Calendar.php(389): Notifications->notify_appointment_saved(Array, Array, Array, Array, Array, false)
#5 C:\xampp\htdocs\easy\system\core\CodeIgniter.php(481): Calendar->save_appointment()
#6 C:\xampp\htdocs\easy\index.php(344): require_once('C:\\xampp\\htdocs...')
#7 {main} Trace: array (
  0 => 
  array (
    'file' => 'C:\\xampp\\htdocs\\easy\\application\\libraries\\Notifications.php',
    'line' => 356,
    'function' => 'log_message',
    'args' => 
    array (
      0 => 'error',
      1 => '#0 C:\\xampp\\htdocs\\easy\\vendor\\phpmailer\\phpmailer\\src\\PHPMailer.php(1857): PHPMailer\\PHPMailer\\PHPMailer->mailSend(\'Date: Thu, 23 J...\', \'--b1=_TqgPzo8fG...\')
#1 C:\\xampp\\htdocs\\easy\\vendor\\phpmailer\\phpmailer\\src\\PHPMailer.php(1670): PHPMailer\\PHPMailer\\PHPMailer->postSend()
#2 C:\\xampp\\htdocs\\easy\\application\\libraries\\Email_messages.php(119): PHPMailer\\PHPMailer\\PHPMailer->send()
#3 C:\\xampp\\htdocs\\easy\\application\\libraries\\Notifications.php(147): Email_messages->send_appointment_saved(Array, Array, Array, Array, Array, \'A new appointme...\', \'You can make ch...\', \'http://localhos...\', \'john@example.or...\', \'BEGIN:VCALENDAR...\', \'UTC\')
#4 C:\\xampp\\htdocs\\easy\\application\\controllers\\Calendar.php(389): Notifications->notify_appointment_saved(Array, Array, Array, Array, Array, false)
#5 C:\\xampp\\htdocs\\easy\\system\\core\\CodeIgniter.php(481): Calendar->save_appointment()
#6 C:\\xampp\\htdocs\\easy\\index.php(344): require_once(\'C:\\\\xampp\\\\htdocs...\')
#7 {main}',
    ),
  ),
  1 => 
  array (
    'file' => 'C:\\xampp\\htdocs\\easy\\application\\libraries\\Notifications.php',
    'line' => 161,
    'function' => 'log_exception',
    'class' => 'Notifications',
    'type' => '->',
    'args' => 
    array (
      0 => 
      \PHPMailer\PHPMailer\Exception::__set_state(array(
         'message' => 'Could not instantiate mail function.',
         'string' => '',
         'code' => 2,
         'file' => 'C:\\xampp\\htdocs\\easy\\vendor\\phpmailer\\phpmailer\\src\\PHPMailer.php',
         'line' => 2150,
         'trace' => 
        array (
          0 => 
          array (
            'file' => 'C:\\xampp\\htdocs\\easy\\vendor\\phpmailer\\phpmailer\\src\\PHPMailer.php',
            'line' => 1857,
            'function' => 'mailSend',
            'class' => 'PHPMailer\\PHPMailer\\PHPMailer',
            'type' => '->',
            'args' => 
            array (
              0 => 'Date: Thu, 23 Jul 2026 11:07:23 +0200
From: Company Name <info@example.org>
Reply-To: info@example.org
Message-ID: <TqgPzo8fGTAmfE0aFFLW7VHxDbFrNxpP3zOd3EKZ5uQ@localhost>
X-Mailer: PHPMailer 7.1.1 (https://github.com/PHPMailer/PHPMailer)
MIME-Version: 1.0
Content-Type: multipart/mixed;
 boundary="b1=_TqgPzo8fGTAmfE0aFFLW7VHxDbFrNxpP3zOd3EKZ5uQ"
Content-Transfer-Encoding: 8bit

',
              1 => '--b1=_TqgPzo8fGTAmfE0aFFLW7VHxDbFrNxpP3zOd3EKZ5uQ
Content-Type: multipart/alternative;
 boundary="b2=_TqgPzo8fGTAmfE0aFFLW7VHxDbFrNxpP3zOd3EKZ5uQ"

--b2=_TqgPzo8fGTAmfE0aFFLW7VHxDbFrNxpP3zOd3EKZ5uQ
Content-Type: text/plain; charset=us-ascii

    
    
    
        Appointment Details | Easy!Appointments
    
    
        /* -------------------------------------
            GLOBAL RESETS
        ------------------------------------- */        /*All the styling goes here*/        img {
            border: none;
            -ms-interpolation-mode: bicubic;
            max-width: 100%;
        }        body {
            background-color: #f6f6f6;
            font-family: sans-serif;
            -webkit-font-smoothing: antialiased;
            font-size: 14px;
            line-height: 1.4;
            margin: 0;
            padding: 0;
            -ms-text-size-adjust: 100%;
            -webkit-text-size-adjust: 100%;
        }        table {
            border-collapse: separate;
            mso-table-lspace: 0pt;
            mso-table-rspace: 0pt;
            width: 100%;
        }        table td {
            font-family: sans-serif;
            font-size: 14px;
            vertical-align: top;
        }        /* -------------------------------------
            BODY & CONTAINER
        ------------------------------------- */        .body {
            background-color: #f6f6f6;
            width: 100%;
        }        /* Set a max-width, and make it display as block so it will automatically stretch to that width, but will also shrink down on a phone or something */
        .container {
            display: block;
            margin: 0 auto !important;
            /* makes it centered */
            max-width: 580px;
            padding: 10px;
            width: 580px;
        }        /* This should also be a block element, so that it will fill 100% of the .container */
        .content {
            box-sizing: border-box;
            display: block;
            margin: 0 auto;
            max-width: 580px;
            padding: 10px;
        }        /* -------------------------------------
            HEADER, FOOTER, MAIN
        ------------------------------------- */
        .main {
            background: #ffffff;
            border-radius: 3px;
            width: 100%;
        }        .wrapper {
            box-sizing: border-box;
            padding: 20px;
        }        .content-block {
            padding-bottom: 10px;
            padding-top: 10px;
        }        .footer {
            clear: both;
            margin-top: 10px;
            text-align: center;
            width: 100%;
        }        .footer td,
        .footer p,
        .footer span,
        .footer a {
            color: #999999;
            font-size: 12px;
            text-align: center;
        }        /* -------------------------------------
            TYPOGRAPHY
        ------------------------------------- */
        h1,
        h2,
        h3,
        h4 {
            color: #000000;
            font-family: sans-serif;
            font-weight: 400;
            line-height: 1.4;
            margin: 0;
            margin-bottom: 15px;
        }        h1 {
            font-size: 24px;
            font-weight: 300;
            text-align: center;
            margin-bottom: 40px;
        }        .label {
            width: 120px;
        }        .details-table {
            margin: 0 0 0 auto;
            width: 85%;
        }        p,
        ul,
        ol {
            font-family: sans-serif;
            font-size: 14px;
            font-weight: normal;
            margin: 0;
            margin-bottom: 15px;
        }        p li,
        ul li,
        ol li {
            list-style-position: inside;
            margin-left: 5px;
        }        a {
            color: #429A82;
            text-decoration: underline;
        }        /* -------------------------------------
            BUTTONS
        ------------------------------------- */
        .btn {
            box-sizing: border-box;
            width: 100%;
        }        .btn > tbody > tr > td {
            padding-bottom: 15px;
        }        .btn table {
            width: auto;
        }        .btn table td {
            background-color: #ffffff;
            border-radius: 5px;
            text-align: center;
        }        .btn a {
            background-color: #ffffff;
            border: solid 1px #429A82;
            border-radius: 5px;
            box-sizing: border-box;
            color: #429A82;
            cursor: pointer;
            display: inline-block;
            font-size: 14px;
            font-weight: bold;
            margin: 0;
            padding: 12px 25px;
            text-decoration: none;
        }        .btn-primary table td {
            background-color: #429A82;
        }        .btn-primary a {
            background-color: #429A82;
            border-color: #429A82;
            color: #ffffff;
        }        /* -------------------------------------
            OTHER STYLES THAT MIGHT BE USEFUL
        ------------------------------------- */
        .last {
            margin-bottom: 0;
        }        .first {
            margin-top: 0;
        }        .align-center {
            text-align: center;
        }        .align-right {
            text-align: right;
        }        .align-left {
            text-align: left;
        }        .clear {
            clear: both;
        }        .mt0 {
            margin-top: 0;
        }        .mb0 {
            margin-bottom: 0;
        }        .preheader {
            color: transparent;
            display: none;
            height: 0;
            max-height: 0;
            max-width: 0;
            opacity: 0;
            overflow: hidden;
            mso-hide: all;
            visibility: hidden;
            width: 0;
        }        .powered-by a {
            text-decoration: none;
        }        hr {
            border: 0;
            border-bottom: 1px solid #f6f6f6;
            margin: 20px 0;
        }        /* -------------------------------------
            RESPONSIVE AND MOBILE FRIENDLY STYLES
        ------------------------------------- */
        @media only screen and (max-width: 620px) {
            table.body h1 {
                font-size: 28px !important;
                margin-bottom: 10px !important;
            }            table.body p,
            table.body ul,
            table.body ol,
            table.body td,
            table.body span,
            table.body a {
                font-size: 16px !important;
            }            table.body .wrapper,
            table.body .article {
                padding: 10px !important;
            }            table.body .content {
                padding: 0 !important;
            }            table.body .container {
                padding: 0 !important;
                width: 100% !important;
            }            table.body .main {
                border-left-width: 0 !important;
                border-radius: 0 !important;
                border-right-width: 0 !important;
            }            table.body .btn table {
                width: 100% !important;
            }            table.body .btn a {
                width: 100% !important;
            }            table.body .img-responsive {
                height: auto !important;
                max-width: 100% !important;
                width: auto !important;
            }
        }        /* -------------------------------------
            PRESERVE THESE STYLES IN THE HEAD
        ------------------------------------- */
        @media all {
            .ExternalClass {
                width: 100%;
            }            .ExternalClass,
            .ExternalClass p,
            .ExternalClass span,
            .ExternalClass font,
            .ExternalClass td,
            .ExternalClass div {
                line-height: 100%;
            }            .apple-link a {
                color: inherit !important;
                font-family: inherit !important;
                font-size: inherit !important;
                font-weight: inherit !important;
                line-height: inherit !important;
                text-decoration: none !important;
            }            #MessageViewBody a {
                color: inherit;
                text-decoration: none;
                font-size: inherit;
                font-family: inherit;
                font-weight: inherit;
                line-height: inherit;
            }            .btn-primary table td:hover {
                background-color: #34495e !important;
            }            .btn-primary a:hover {
                background-color: #34495e !important;
                border-color: #34495e !important;
            }
        }        
        &nbsp;
        
                            
                                    
                    
                        
                            
                                
                                                                            
                                                                                
                                            A new appointment has been added to your plan.                                                                                
                                            You can make changes by clicking the appointment link below.                                                                                
                                            Appointment Details                                                                                
                                            
                                                
                                                    Service                                                
                                                
                                                    hair cutting                                                
                                            
                                            
                                                
                                                    Provider                                                
                                                
                                                    vivek kumar                                                
                                            
                                            
                                                
                                                    Start                                                
                                                
                                                    22/07/2026 7:00 am                                                
                                            
                                            
                                                
                                                    End                                                
                                                
                                                    22/07/2026 7:30 am
                                                
                                            
                                            
                                                
                                                    Timezone                                                
                                                
                                                    UTC                                                
                                                                                                                                        
                                                    
                                                        Status                                                    
                                                    
                                                        Confirmed                                                    
                                                
                                            
                                                                                        
                                                
                                                    Description                                                
                                                
                                                    bfjkebfkerfbj,erbjk                                                
                                            
                                            
                                            
                                            
                                                                                                                                                                    
                                            Customer Details                                                                                
                                                                                            
                                                    
                                                        Name                                                    
                                                    
                                                        James Doe                                                    
                                                
                                            
                                                                                            
                                                    
                                                        Email                                                    
                                                    
                                                        james@example.org                                                    
                                                
                                            
                                                                                            
                                                    
                                                        Phone Number                                                    
                                                    
                                                        +10000000000                                                    
                                                
                                            
                                            
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                        
                                                                                
                                            
                                                
                                                    
                                                        
                                                            
                                                                
                                                                    
                                                                        Reschedule / Cancel Appointment
                                                                    
                                                                
                                                            
                                                        
                                                    
                                                
                                            
                                        
                                        
                                        
                                    
                                
                            
                        
                    
                    
                    
                
                
                                
                
                    
                        
                            
                                Powered by
                                
                                    Easy!Appointments
                                
                                |
                                
                                    Company Name                                
                            
                        
                    
                
                            
        
        &nbsp;
    

--b2=_TqgPzo8fGTAmfE0aFFLW7VHxDbFrNxpP3zOd3EKZ5uQ
Content-Type: multipart/related;
 boundary="b3=_TqgPzo8fGTAmfE0aFFLW7VHxDbFrNxpP3zOd3EKZ5uQ";
 type="text/html"

--b3=_TqgPzo8fGTAmfE0aFFLW7VHxDbFrNxpP3zOd3EKZ5uQ
Content-Type: text/html; charset=us-ascii


<!doctype html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <title>
        Appointment Details | Easy!Appointments
    </title>
    <style>
        /* -------------------------------------
            GLOBAL RESETS
        ------------------------------------- */

        /*All the styling goes here*/

        img {
            border: none;
            -ms-interpolation-mode: bicubic;
            max-width: 100%;
        }

        body {
            background-color: #f6f6f6;
            font-family: sans-serif;
            -webkit-font-smoothing: antialiased;
            font-size: 14px;
            line-height: 1.4;
            margin: 0;
            padding: 0;
            -ms-text-size-adjust: 100%;
            -webkit-text-size-adjust: 100%;
        }

        table {
            border-collapse: separate;
            mso-table-lspace: 0pt;
            mso-table-rspace: 0pt;
            width: 100%;
        }

        table td {
            font-family: sans-serif;
            font-size: 14px;
            vertical-align: top;
        }

        /* -------------------------------------
            BODY & CONTAINER
        ------------------------------------- */

        .body {
            background-color: #f6f6f6;
            width: 100%;
        }

        /* Set a max-width, and make it display as block so it will automatically stretch to that width, but will also shrink down on a phone or something */
        .container {
            display: block;
            margin: 0 auto !important;
            /* makes it centered */
            max-width: 580px;
            padding: 10px;
            width: 580px;
        }

        /* This should also be a block element, so that it will fill 100% of the .container */
        .content {
            box-sizing: border-box;
            display: block;
            margin: 0 auto;
            max-width: 580px;
            padding: 10px;
        }

        /* -------------------------------------
            HEADER, FOOTER, MAIN
        ------------------------------------- */
        .main {
            background: #ffffff;
            border-radius: 3px;
            width: 100%;
        }

        .wrapper {
            box-sizing: border-box;
            padding: 20px;
        }

        .content-block {
            padding-bottom: 10px;
            padding-top: 10px;
        }

        .footer {
            clear: both;
            margin-top: 10px;
            text-align: center;
            width: 100%;
        }

        .footer td,
        .footer p,
        .footer span,
        .footer a {
            color: #999999;
            font-size: 12px;
            text-align: center;
        }

        /* -------------------------------------
            TYPOGRAPHY
        ------------------------------------- */
        h1,
        h2,
        h3,
        h4 {
            color: #000000;
            font-family: sans-serif;
            font-weight: 400;
            line-height: 1.4;
            margin: 0;
            margin-bottom: 15px;
        }

        h1 {
            font-size: 24px;
            font-weight: 300;
            text-align: center;
            margin-bottom: 40px;
        }

        .label {
            width: 120px;
        }

        .details-table {
            margin: 0 0 0 auto;
            width: 85%;
        }

        p,
        ul,
        ol {
            font-family: sans-serif;
            font-size: 14px;
            font-weight: normal;
            margin: 0;
            margin-bottom: 15px;
        }

        p li,
        ul li,
        ol li {
            list-style-position: inside;
            margin-left: 5px;
        }

        a {
            color: #429A82;
            text-decoration: underline;
        }

        /* -------------------------------------
            BUTTONS
        ------------------------------------- */
        .btn {
            box-sizing: border-box;
            width: 100%;
        }

        .btn > tbody > tr > td {
            padding-bottom: 15px;
        }

        .btn table {
            width: auto;
        }

        .btn table td {
            background-color: #ffffff;
            border-radius: 5px;
            text-align: center;
        }

        .btn a {
            background-color: #ffffff;
            border: solid 1px #429A82;
            border-radius: 5px;
            box-sizing: border-box;
            color: #429A82;
            cursor: pointer;
            display: inline-block;
            font-size: 14px;
            font-weight: bold;
            margin: 0;
            padding: 12px 25px;
            text-decoration: none;
        }

        .btn-primary table td {
            background-color: #429A82;
        }

        .btn-primary a {
            background-color: #429A82;
            border-color: #429A82;
            color: #ffffff;
        }

        /* -------------------------------------
            OTHER STYLES THAT MIGHT BE USEFUL
        ------------------------------------- */
        .last {
            margin-bottom: 0;
        }

        .first {
            margin-top: 0;
        }

        .align-center {
            text-align: center;
        }

        .align-right {
            text-align: right;
        }

        .align-left {
            text-align: left;
        }

        .clear {
            clear: both;
        }

        .mt0 {
            margin-top: 0;
        }

        .mb0 {
            margin-bottom: 0;
        }

        .preheader {
            color: transparent;
            display: none;
            height: 0;
            max-height: 0;
            max-width: 0;
            opacity: 0;
            overflow: hidden;
            mso-hide: all;
            visibility: hidden;
            width: 0;
        }

        .powered-by a {
            text-decoration: none;
        }

        hr {
            border: 0;
            border-bottom: 1px solid #f6f6f6;
            margin: 20px 0;
        }

        /* -------------------------------------
            RESPONSIVE AND MOBILE FRIENDLY STYLES
        ------------------------------------- */
        @media only screen and (max-width: 620px) {
            table.body h1 {
                font-size: 28px !important;
                margin-bottom: 10px !important;
            }

            table.body p,
            table.body ul,
            table.body ol,
            table.body td,
            table.body span,
            table.body a {
                font-size: 16px !important;
            }

            table.body .wrapper,
            table.body .article {
                padding: 10px !important;
            }

            table.body .content {
                padding: 0 !important;
            }

            table.body .container {
                padding: 0 !important;
                width: 100% !important;
            }

            table.body .main {
                border-left-width: 0 !important;
                border-radius: 0 !important;
                border-right-width: 0 !important;
            }

            table.body .btn table {
                width: 100% !important;
            }

            table.body .btn a {
                width: 100% !important;
            }

            table.body .img-responsive {
                height: auto !important;
                max-width: 100% !important;
                width: auto !important;
            }
        }

        /* -------------------------------------
            PRESERVE THESE STYLES IN THE HEAD
        ------------------------------------- */
        @media all {
            .ExternalClass {
                width: 100%;
            }

            .ExternalClass,
            .ExternalClass p,
            .ExternalClass span,
            .ExternalClass font,
            .ExternalClass td,
            .ExternalClass div {
                line-height: 100%;
            }

            .apple-link a {
                color: inherit !important;
                font-family: inherit !important;
                font-size: inherit !important;
                font-weight: inherit !important;
                line-height: inherit !important;
                text-decoration: none !important;
            }

            #MessageViewBody a {
                color: inherit;
                text-decoration: none;
                font-size: inherit;
                font-family: inherit;
                font-weight: inherit;
                line-height: inherit;
            }

            .btn-primary table td:hover {
                background-color: #34495e !important;
            }

            .btn-primary a:hover {
                background-color: #34495e !important;
                border-color: #34495e !important;
            }
        }

    </style>
</head>
<body>
<table role="presentation" border="0" cellpadding="0" cellspacing="0" class="body">
    <tr>
        <td>&nbsp;</td>
        <td class="container">
            <div class="content">

                <!-- START CENTERED WHITE CONTAINER -->
                <table role="presentation" class="main">

                    <!-- START MAIN CONTENT AREA -->
                    <tr>
                        <td class="wrapper">
                            <table role="presentation" border="0" cellpadding="0" cellspacing="0">
                                <tr>
                                    <td>

                                        <!-- Logo at the top center, embedded as CID -->
                                        <img src="cid:logo.png" alt="Logo" style="display:block;max-width:67px; margin: auto auto 24px;">

                                        <h1 style="text-align: center;">
                                            A new appointment has been added to your plan.                                        </h1>

                                        <p style="text-align: center;">
                                            You can make changes by clicking the appointment link below.                                        </p>

                                        <h2 style="text-align: center;">
                                            Appointment Details                                        </h2>

                                        <table id="appointment-details" class="details-table" align="center">
                                            <tr>
                                                <td class="label" style="padding: 3px;font-weight: bold;">
                                                    Service                                                </td>
                                                <td style="padding: 3px;">
                                                    hair cutting                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="label" style="padding: 3px;font-weight: bold;">
                                                    Provider                                                </td>
                                                <td style="padding: 3px;">
                                                    vivek kumar                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="label" style="padding: 3px;font-weight: bold;">
                                                    Start                                                </td>
                                                <td style="padding: 3px;">
                                                    22/07/2026 7:00 am                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="label" style="padding: 3px;font-weight: bold;">
                                                    End                                                </td>
                                                <td style="padding: 3px;">
                                                    22/07/2026 7:30 am
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="label" style="padding: 3px;font-weight: bold;">
                                                    Timezone                                                </td>
                                                <td style="padding: 3px;">
                                                    UTC                                                </td>
                                            </tr>

                                                                                            <tr>
                                                    <td class="label" style="padding: 3px;font-weight: bold;">
                                                        Status                                                    </td>
                                                    <td style="padding: 3px;">
                                                        Confirmed                                                    </td>
                                                </tr>
                                            
                                                                                        <tr>
                                                <td class="label" style="padding: 3px;font-weight: bold;">
                                                    Description                                                </td>
                                                <td style="padding: 3px;">
                                                    bfjkebfkerfbj,erbjk                                                </td>
                                            </tr>
                                            
                                            
                                            
                                                                                    </table>

                                        <br>

                                        <h2 style="text-align: center;">
                                            Customer Details                                        </h2>

                                        <table id="customer-details" class="details-table" align="center">
                                                                                            <tr>
                                                    <td class="label" style="padding: 3px;font-weight: bold;">
                                                        Name                                                    </td>
                                                    <td style="padding: 3px;">
                                                        James Doe                                                    </td>
                                                </tr>
                                            
                                                                                            <tr>
                                                    <td class="label" style="padding: 3px;font-weight: bold;">
                                                        Email                                                    </td>
                                                    <td style="padding: 3px;">
                                                        james@example.org                                                    </td>
                                                </tr>
                                            
                                                                                            <tr>
                                                    <td class="label" style="padding: 3px;font-weight: bold;">
                                                        Phone Number                                                    </td>
                                                    <td style="padding: 3px;">
                                                        +10000000000                                                    </td>
                                                </tr>
                                            
                                            
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                </table>

                                        <br>
                                        <br>

                                        <table class="btn btn-primary" role="presentation" border="0" cellpadding="0" cellspacing="0">
                                            <tbody>
                                                <tr>
                                                    <td align="center">
                                                        <table role="presentation" border="0" cellpadding="0" cellspacing="0">
                                                            <tbody>
                                                                <tr>
                                                                    <td>
                                                                        <a href="http://localhost/easy/index.php/calendar/reschedule/4SMeDUwo15X2" target="_blank">Reschedule / Cancel Appointment</a>
                                                                    </td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                        
                                        
                                    </td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                    
                    <!-- END MAIN CONTENT AREA -->
                </table>
                
                <!-- END CENTERED WHITE CONTAINER -->

                <!-- START FOOTER -->
                <div class="footer">
                    <table role="presentation" border="0" cellpadding="0" cellspacing="0">
                        <tr>
                            <td class="content-block powered-by">
                                Powered by
                                <a href="https://easyappointments.org" style="text-decoration: none;">
                                    Easy!Appointments
                                </a>
                                |
                                <a href="https://example.org" style="text-decoration: none;">
                                    Company Name                                </a>
                            </td>
                        </tr>
                    </table>
                </div>
                <!-- END FOOTER -->

            </div>
        </td>
        <td>&nbsp;</td>
    </tr>
</table>
</body>
</html>

--b3=_TqgPzo8fGTAmfE0aFFLW7VHxDbFrNxpP3zOd3EKZ5uQ
Content-Type: image/png; name=logo.png
Content-Transfer-Encoding: base64
Content-ID: <logo.png>
Content-Disposition: inline; filename=logo.png

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
TkSuQmCC

--b3=_TqgPzo8fGTAmfE0aFFLW7VHxDbFrNxpP3zOd3EKZ5uQ--


--b2=_TqgPzo8fGTAmfE0aFFLW7VHxDbFrNxpP3zOd3EKZ5uQ--

--b1=_TqgPzo8fGTAmfE0aFFLW7VHxDbFrNxpP3zOd3EKZ5uQ
Content-Type: text/calendar; name=invitation.ics
Content-Transfer-Encoding: base64
Content-Disposition: attachment; filename=invitation.ics

QkVHSU46VkNBTEVOREFSDQpWRVJTSU9OOjIuMA0KUFJPRElEOi0vL0Vhc3lBcHBvaW50bWVudHMv
L09wZW4gU291cmNlIFdlYiBTY2hlZHVsZXIvL0VODQpDQUxTQ0FMRTpHUkVHT1JJQU4NCk1FVEhP
RDpSRVFVRVNUDQpCRUdJTjpWVElNRVpPTkUNClRaSUQ6RXVyb3BlL0Jlcmxpbg0KQkVHSU46U1RB
TkRBUkQNCkRUU1RBUlQ6MjAyNjEwMjVUMDEwMDAwWg0KVFpPRkZTRVRUTzorMDEwMA0KVFpPRkZT
RVRGUk9NOiswMjAwDQpSUlVMRTpGUkVRPVlFQVJMWTtCWU1PTlRIPTExO0JZREFZPTFTVQ0KRU5E
OlNUQU5EQVJEDQpCRUdJTjpEQVlMSUdIVA0KRFRTVEFSVDoyMDI2MDMyOVQwMTAwMDBaDQpUWk9G
RlNFVFRPOiswMjAwDQpUWk9GRlNFVEZST006KzAxMDANClJSVUxFOkZSRVE9WUVBUkxZO0JZTU9O
VEg9MztCWURBWT0yU1UNCkVORDpEQVlMSUdIVA0KRU5EOlZUSU1FWk9ORQ0KQkVHSU46VkVWRU5U
DQpVSUQ6ZWEtZWNjYmM4N2U0YjVjZTJmZTI4MzA4ZmQ5ZjJhN2JhZjMNCkRUU1RBUlQ6MjAyNjA3
MjJUMDcwMDAwWg0KRFRFTkQ6MjAyNjA3MjJUMDczMDAwWg0KU0VRVUVOQ0U6MTc4NDc5NzYzOA0K
U1RBVFVTOkNPTkZJUk1FRA0KU1VNTUFSWTpoYWlyIGN1dHRpbmcNCkRFU0NSSVBUSU9OOlxuUHJv
dmlkZXJcblxuTmFtZTogdml2ZWsga3VtYXJcbkVtYWlsOiByYWo5NzNhbnNodWxAZ21haWwNCiAu
Y29tXG5QaG9uZSBOdW1iZXI6IFxuQWRkcmVzczogXG5DaXR5OiBcblppcCBDb2RlOiBcblxuQ3Vz
dG9tZXJcblxuTmFtDQogZTogSmFtZXMgRG9lXG5FbWFpbDogamFtZXNAZXhhbXBsZS5vcmdcblBo
b25lIE51bWJlcjogKzEwMDAwMDAwMDAwXG5BZA0KIGRyZXNzOiBcbkNpdHk6IFxuWmlwIENvZGU6
IFxuXG5Ob3Rlc1xuXG4NCkxPQ0FUSU9OOm5vaWRhIHNlYyA2Mw0KRFRTVEFNUDoyMDI2MDcyM1Qw
OTA3MTlaDQpBVFRFTkRFRTtDVVRZUEU9SU5ESVZJRFVBTDtST0xFPVJFUS1QQVJUSUNJUEFOVDtQ
QVJUU1RBVD1ORUVEUy1BQ1RJT047DQogUlNWUD1UUlVFO0NOPUphbWVzIERvZTptYWlsdG86amFt
ZXNAZXhhbXBsZS5vcmcNCkFUVEVOREVFO0NVVFlQRT1JTkRJVklEVUFMO1JPTEU9UkVRLVBBUlRJ
Q0lQQU5UO1BBUlRTVEFUPUFDQ0VQVEVEO1JTVlANCiA9RkFMU0U7Q049dml2ZWsga3VtYXI6bWFp
bHRvOnJhajk3M2Fuc2h1bEBnbWFpbC5jb20NCk9SR0FOSVpFUjtDTj12aXZlayBrdW1hcjptYWls
dG86cmFqOTczYW5zaHVsQGdtYWlsLmNvbQ0KQkVHSU46VkFMQVJNDQpUUklHR0VSO1ZBTFVFPURB
VEUtVElNRToyMDI2MDcyMlQwNjQ1MDBaDQpBQ1RJT046RU1BSUwNClNVTU1BUlk6QWxhcm0gbm90
aWZpY2F0aW9uDQpERVNDUklQVElPTjpUaGlzIGlzIGFuIGV2ZW50IHJlbWluZGVyDQpBVFRFTkRF
RTtDVVRZUEU9SU5ESVZJRFVBTDtST0xFPVJFUS1QQVJUSUNJUEFOVDtQQVJUU1RBVD1ORUVEUy1B
Q1RJT047DQogUlNWUD1UUlVFO0NOPUphbWVzIERvZTptYWlsdG86amFtZXNAZXhhbXBsZS5vcmcN
CkVORDpWQUxBUk0NCkJFR0lOOlZBTEFSTQ0KVFJJR0dFUjtWQUxVRT1EQVRFLVRJTUU6MjAyNjA3
MjJUMDYwMDAwWg0KQUNUSU9OOkVNQUlMDQpTVU1NQVJZOkFsYXJtIG5vdGlmaWNhdGlvbg0KREVT
Q1JJUFRJT046VGhpcyBpcyBhbiBldmVudCByZW1pbmRlcg0KQVRURU5ERUU7Q1VUWVBFPUlORElW
SURVQUw7Uk9MRT1SRVEtUEFSVElDSVBBTlQ7UEFSVFNUQVQ9TkVFRFMtQUNUSU9OOw0KIFJTVlA9
VFJVRTtDTj1KYW1lcyBEb2U6bWFpbHRvOmphbWVzQGV4YW1wbGUub3JnDQpFTkQ6VkFMQVJNDQpF
TkQ6VkVWRU5UDQpFTkQ6VkNBTEVOREFSDQo=

--b1=_TqgPzo8fGTAmfE0aFFLW7VHxDbFrNxpP3zOd3EKZ5uQ--
',
            ),
          ),
          1 => 
          array (
            'file' => 'C:\\xampp\\htdocs\\easy\\vendor\\phpmailer\\phpmailer\\src\\PHPMailer.php',
            'line' => 1670,
            'function' => 'postSend',
            'class' => 'PHPMailer\\PHPMailer\\PHPMailer',
            'type' => '->',
            'args' => 
            array (
            ),
          ),
          2 => 
          array (
            'file' => 'C:\\xampp\\htdocs\\easy\\application\\libraries\\Email_messages.php',
            'line' => 119,
            'function' => 'send',
            'class' => 'PHPMailer\\PHPMailer\\PHPMailer',
            'type' => '->',
            'args' => 
            array (
            ),
          ),
          3 => 
          array (
            'file' => 'C:\\xampp\\htdocs\\easy\\application\\libraries\\Notifications.php',
            'line' => 147,
            'function' => 'send_appointment_saved',
            'class' => 'Email_messages',
            'type' => '->',
            'args' => 
            array (
              0 => 
              array (
                'id' => 3,
                'create_datetime' => '2026-07-23 11:07:18',
                'update_datetime' => '2026-07-23 11:07:18',
                'book_datetime' => '2026-07-23 11:07:18',
                'start_datetime' => '2026-07-22 07:00:00',
                'end_datetime' => '2026-07-22 07:30:00',
                'location' => '',
                'meeting_link' => '',
                'notes' => '',
                'hash' => '4SMeDUwo15X2',
                'color' => '#7cbae8',
                'status' => 'Confirmed',
                'is_unavailability' => false,
                'id_users_provider' => 5,
                'id_users_customer' => 3,
                'id_services' => 2,
                'id_google_calendar' => NULL,
                'id_caldav_calendar' => NULL,
              ),
              1 => 
              array (
                'id' => 5,
                'create_datetime' => '2026-07-22 13:13:04',
                'update_datetime' => '2026-07-22 13:13:04',
                'first_name' => 'vivek',
                'last_name' => 'kumar',
                'email' => 'raj973anshul@gmail.com',
                'mobile_number' => NULL,
                'phone_number' => '',
                'address' => '',
                'city' => '',
                'state' => '',
                'zip_code' => '',
                'notes' => '',
                'timezone' => 'Europe/Berlin',
                'language' => 'english',
                'custom_field_1' => NULL,
                'custom_field_2' => NULL,
                'custom_field_3' => NULL,
                'custom_field_4' => NULL,
                'custom_field_5' => NULL,
                'is_private' => false,
                'ldap_dn' => NULL,
                'id_roles' => 2,
                'settings' => 
                array (
                  'username' => 'vivekkumar',
                  'password_reset_token' => NULL,
                  'password_reset_expires' => NULL,
                  'working_plan' => '{"sunday":{"start":"09:00","end":"18:00","breaks":[{"start":"14:30","end":"15:00"}]},"monday":{"start":"09:00","end":"18:00","breaks":[{"start":"14:30","end":"15:00"}]},"tuesday":{"start":"09:00","end":"18:00","breaks":[{"start":"14:30","end":"15:00"}]},"wednesday":{"start":"09:00","end":"18:00","breaks":[{"start":"14:30","end":"15:00"}]},"thursday":{"start":"09:00","end":"18:00","breaks":[{"start":"14:30","end":"15:00"}]},"friday":{"start":"09:00","end":"18:00","breaks":[{"start":"14:30","end":"15:00"}]},"saturday":{"start":"09:00","end":"18:00","breaks":[{"start":"14:30","end":"15:00"}]}}',
                  'working_plan_exceptions' => '[]',
                  'notifications' => '1',
                  'google_sync' => NULL,
                  'google_token' => NULL,
                  'google_calendar' => NULL,
                  'caldav_sync' => '0',
                  'caldav_url' => NULL,
                  'caldav_username' => NULL,
                  'caldav_password' => NULL,
                  'sync_past_days' => '30',
                  'sync_future_days' => '90',
                  'calendar_view' => 'table',
                ),
                'services' => 
                array (
                  0 => 1,
                  1 => 2,
                ),
              ),
              2 => 
              array (
                'id' => 2,
                'create_datetime' => '2026-07-23 10:51:48',
                'update_datetime' => '2026-07-23 10:51:48',
                'name' => 'hair cutting',
                'duration' => '30',
                'price' => 50.0,
                'currency' => '',
                'description' => 'bfjkebfkerfbj,erbjk',
                'slot_interval' => '15',
                'color' => '#7cbae8',
                'location' => 'noida sec 63',
                'attendants_number' => 1,
                'is_private' => false,
                'id_service_categories' => 1,
              ),
              3 => 
              array (
                'id' => 3,
                'create_datetime' => '2026-07-22 11:55:43',
                'update_datetime' => '2026-07-23 11:07:18',
                'first_name' => 'James',
                'last_name' => 'Doe',
                'email' => 'james@example.org',
                'mobile_number' => NULL,
                'phone_number' => '+10000000000',
                'address' => '',
                'city' => '',
                'state' => NULL,
                'zip_code' => '',
                'notes' => '',
                'timezone' => 'UTC',
                'language' => 'english',
                'custom_field_1' => NULL,
                'custom_field_2' => NULL,
                'custom_field_3' => NULL,
                'custom_field_4' => NULL,
                'custom_field_5' => NULL,
                'is_private' => '0',
                'ldap_dn' => NULL,
                'id_roles' => 3,
              ),
              4 => 
              array (
                'company_name' => 'Company Name',
                'company_link' => 'https://example.org',
                'company_email' => 'info@example.org',
                'company_color' => NULL,
                'date_format' => 'DMY',
                'time_format' => 'regular',
              ),
              5 => 'A new appointment has been added to your plan.',
              6 => 'You can make changes by clicking the appointment link below.',
              7 => 'http://localhost/easy/index.php/calendar/reschedule/4SMeDUwo15X2',
              8 => 'john@example.org',
              9 => 'BEGIN:VCALENDAR
VERSION:2.0
PRODID:-//EasyAppointments//Open Source Web Scheduler//EN
CALSCALE:GREGORIAN
METHOD:REQUEST
BEGIN:VTIMEZONE
TZID:Europe/Berlin
BEGIN:STANDARD
DTSTART:20261025T010000Z
TZOFFSETTO:+0100
TZOFFSETFROM:+0200
RRULE:FREQ=YEARLY;BYMONTH=11;BYDAY=1SU
END:STANDARD
BEGIN:DAYLIGHT
DTSTART:20260329T010000Z
TZOFFSETTO:+0200
TZOFFSETFROM:+0100
RRULE:FREQ=YEARLY;BYMONTH=3;BYDAY=2SU
END:DAYLIGHT
END:VTIMEZONE
BEGIN:VEVENT
UID:ea-eccbc87e4b5ce2fe28308fd9f2a7baf3
DTSTART:20260722T070000Z
DTEND:20260722T073000Z
SEQUENCE:1784797638
STATUS:CONFIRMED
SUMMARY:hair cutting
DESCRIPTION:\\nProvider\\n\\nName: vivek kumar\\nEmail: raj973anshul@gmail
 .com\\nPhone Number: \\nAddress: \\nCity: \\nZip Code: \\n\\nCustomer\\n\\nNam
 e: James Doe\\nEmail: james@example.org\\nPhone Number: +10000000000\\nAd
 dress: \\nCity: \\nZip Code: \\n\\nNotes\\n\\n
LOCATION:noida sec 63
DTSTAMP:20260723T090719Z
ATTENDEE;CUTYPE=INDIVIDUAL;ROLE=REQ-PARTICIPANT;PARTSTAT=NEEDS-ACTION;
 RSVP=TRUE;CN=James Doe:mailto:james@example.org
ATTENDEE;CUTYPE=INDIVIDUAL;ROLE=REQ-PARTICIPANT;PARTSTAT=ACCEPTED;RSVP
 =FALSE;CN=vivek kumar:mailto:raj973anshul@gmail.com
ORGANIZER;CN=vivek kumar:mailto:raj973anshul@gmail.com
BEGIN:VALARM
TRIGGER;VALUE=DATE-TIME:20260722T064500Z
ACTION:EMAIL
SUMMARY:Alarm notification
DESCRIPTION:This is an event reminder
ATTENDEE;CUTYPE=INDIVIDUAL;ROLE=REQ-PARTICIPANT;PARTSTAT=NEEDS-ACTION;
 RSVP=TRUE;CN=James Doe:mailto:james@example.org
END:VALARM
BEGIN:VALARM
TRIGGER;VALUE=DATE-TIME:20260722T060000Z
ACTION:EMAIL
SUMMARY:Alarm notification
DESCRIPTION:This is an event reminder
ATTENDEE;CUTYPE=INDIVIDUAL;ROLE=REQ-PARTICIPANT;PARTSTAT=NEEDS-ACTION;
 RSVP=TRUE;CN=James Doe:mailto:james@example.org
END:VALARM
END:VEVENT
END:VCALENDAR
',
              10 => 'UTC',
            ),
          ),
          4 => 
          array (
            'file' => 'C:\\xampp\\htdocs\\easy\\application\\controllers\\Calendar.php',
            'line' => 389,
            'function' => 'notify_appointment_saved',
            'class' => 'Notifications',
            'type' => '->',
            'args' => 
            array (
              0 => 
              array (
                'id' => 3,
                'create_datetime' => '2026-07-23 11:07:18',
                'update_datetime' => '2026-07-23 11:07:18',
                'book_datetime' => '2026-07-23 11:07:18',
                'start_datetime' => '2026-07-22 09:00:00',
                'end_datetime' => '2026-07-22 09:30:00',
                'location' => '',
                'meeting_link' => '',
                'notes' => '',
                'hash' => '4SMeDUwo15X2',
                'color' => '#7cbae8',
                'status' => 'Confirmed',
                'is_unavailability' => false,
                'id_users_provider' => 5,
                'id_users_customer' => 3,
                'id_services' => 2,
                'id_google_calendar' => NULL,
                'id_caldav_calendar' => NULL,
              ),
              1 => 
              array (
                'id' => 2,
                'create_datetime' => '2026-07-23 10:51:48',
                'update_datetime' => '2026-07-23 10:51:48',
                'name' => 'hair cutting',
                'duration' => '30',
                'price' => 50.0,
                'currency' => '',
                'description' => 'bfjkebfkerfbj,erbjk',
                'slot_interval' => '15',
                'color' => '#7cbae8',
                'location' => 'noida sec 63',
                'attendants_number' => 1,
                'is_private' => false,
                'id_service_categories' => 1,
              ),
              2 => 
              array (
                'id' => 5,
                'create_datetime' => '2026-07-22 13:13:04',
                'update_datetime' => '2026-07-22 13:13:04',
                'first_name' => 'vivek',
                'last_name' => 'kumar',
                'email' => 'raj973anshul@gmail.com',
                'mobile_number' => NULL,
                'phone_number' => '',
                'address' => '',
                'city' => '',
                'state' => '',
                'zip_code' => '',
                'notes' => '',
                'timezone' => 'Europe/Berlin',
                'language' => 'english',
                'custom_field_1' => NULL,
                'custom_field_2' => NULL,
                'custom_field_3' => NULL,
                'custom_field_4' => NULL,
                'custom_field_5' => NULL,
                'is_private' => false,
                'ldap_dn' => NULL,
                'id_roles' => 2,
                'settings' => 
                array (
                  'username' => 'vivekkumar',
                  'password_reset_token' => NULL,
                  'password_reset_expires' => NULL,
                  'working_plan' => '{"sunday":{"start":"09:00","end":"18:00","breaks":[{"start":"14:30","end":"15:00"}]},"monday":{"start":"09:00","end":"18:00","breaks":[{"start":"14:30","end":"15:00"}]},"tuesday":{"start":"09:00","end":"18:00","breaks":[{"start":"14:30","end":"15:00"}]},"wednesday":{"start":"09:00","end":"18:00","breaks":[{"start":"14:30","end":"15:00"}]},"thursday":{"start":"09:00","end":"18:00","breaks":[{"start":"14:30","end":"15:00"}]},"friday":{"start":"09:00","end":"18:00","breaks":[{"start":"14:30","end":"15:00"}]},"saturday":{"start":"09:00","end":"18:00","breaks":[{"start":"14:30","end":"15:00"}]}}',
                  'working_plan_exceptions' => '[]',
                  'notifications' => '1',
                  'google_sync' => NULL,
                  'google_token' => NULL,
                  'google_calendar' => NULL,
                  'caldav_sync' => '0',
                  'caldav_url' => NULL,
                  'caldav_username' => NULL,
                  'caldav_password' => NULL,
                  'sync_past_days' => '30',
                  'sync_future_days' => '90',
                  'calendar_view' => 'table',
                ),
                'services' => 
                array (
                  0 => 1,
                  1 => 2,
                ),
              ),
              3 => 
              array (
                'id' => 3,
                'create_datetime' => '2026-07-22 11:55:43',
                'update_datetime' => '2026-07-23 11:07:18',
                'first_name' => 'James',
                'last_name' => 'Doe',
                'email' => 'james@example.org',
                'mobile_number' => NULL,
                'phone_number' => '+10000000000',
                'address' => '',
                'city' => '',
                'state' => NULL,
                'zip_code' => '',
                'notes' => '',
                'timezone' => 'UTC',
                'language' => 'english',
                'custom_field_1' => NULL,
                'custom_field_2' => NULL,
                'custom_field_3' => NULL,
                'custom_field_4' => NULL,
                'custom_field_5' => NULL,
                'is_private' => '0',
                'ldap_dn' => NULL,
                'id_roles' => 3,
              ),
              4 => 
              array (
                'company_name' => 'Company Name',
                'company_link' => 'https://example.org',
                'company_email' => 'info@example.org',
                'company_color' => NULL,
                'date_format' => 'DMY',
                'time_format' => 'regular',
              ),
              5 => false,
            ),
          ),
          5 => 
          array (
            'file' => 'C:\\xampp\\htdocs\\easy\\system\\core\\CodeIgniter.php',
            'line' => 481,
            'function' => 'save_appointment',
            'class' => 'Calendar',
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
      )),
      1 => 'appointment-saved to admin',
      2 => 3,
    ),
  ),
  2 => 
  array (
    'file' => 'C:\\xampp\\htdocs\\easy\\application\\controllers\\Calendar.php',
    'line' => 389,
    'function' => 'notify_appointment_saved',
    'class' => 'Notifications',
    'type' => '->',
    'args' => 
    array (
      0 => 
      array (
        'id' => 3,
        'create_datetime' => '2026-07-23 11:07:18',
        'update_datetime' => '2026-07-23 11:07:18',
        'book_datetime' => '2026-07-23 11:07:18',
        'start_datetime' => '2026-07-22 09:00:00',
        'end_datetime' => '2026-07-22 09:30:00',
        'location' => '',
        'meeting_link' => '',
        'notes' => '',
        'hash' => '4SMeDUwo15X2',
        'color' => '#7cbae8',
        'status' => 'Confirmed',
        'is_unavailability' => false,
        'id_users_provider' => 5,
        'id_users_customer' => 3,
        'id_services' => 2,
        'id_google_calendar' => NULL,
        'id_caldav_calendar' => NULL,
      ),
      1 => 
      array (
        'id' => 2,
        'create_datetime' => '2026-07-23 10:51:48',
        'update_datetime' => '2026-07-23 10:51:48',
        'name' => 'hair cutting',
        'duration' => '30',
        'price' => 50.0,
        'currency' => '',
        'description' => 'bfjkebfkerfbj,erbjk',
        'slot_interval' => '15',
        'color' => '#7cbae8',
        'location' => 'noida sec 63',
        'attendants_number' => 1,
        'is_private' => false,
        'id_service_categories' => 1,
      ),
      2 => 
      array (
        'id' => 5,
        'create_datetime' => '2026-07-22 13:13:04',
        'update_datetime' => '2026-07-22 13:13:04',
        'first_name' => 'vivek',
        'last_name' => 'kumar',
        'email' => 'raj973anshul@gmail.com',
        'mobile_number' => NULL,
        'phone_number' => '',
        'address' => '',
        'city' => '',
        'state' => '',
        'zip_code' => '',
        'notes' => '',
        'timezone' => 'Europe/Berlin',
        'language' => 'english',
        'custom_field_1' => NULL,
        'custom_field_2' => NULL,
        'custom_field_3' => NULL,
        'custom_field_4' => NULL,
        'custom_field_5' => NULL,
        'is_private' => false,
        'ldap_dn' => NULL,
        'id_roles' => 2,
        'settings' => 
        array (
          'username' => 'vivekkumar',
          'password_reset_token' => NULL,
          'password_reset_expires' => NULL,
          'working_plan' => '{"sunday":{"start":"09:00","end":"18:00","breaks":[{"start":"14:30","end":"15:00"}]},"monday":{"start":"09:00","end":"18:00","breaks":[{"start":"14:30","end":"15:00"}]},"tuesday":{"start":"09:00","end":"18:00","breaks":[{"start":"14:30","end":"15:00"}]},"wednesday":{"start":"09:00","end":"18:00","breaks":[{"start":"14:30","end":"15:00"}]},"thursday":{"start":"09:00","end":"18:00","breaks":[{"start":"14:30","end":"15:00"}]},"friday":{"start":"09:00","end":"18:00","breaks":[{"start":"14:30","end":"15:00"}]},"saturday":{"start":"09:00","end":"18:00","breaks":[{"start":"14:30","end":"15:00"}]}}',
          'working_plan_exceptions' => '[]',
          'notifications' => '1',
          'google_sync' => NULL,
          'google_token' => NULL,
          'google_calendar' => NULL,
          'caldav_sync' => '0',
          'caldav_url' => NULL,
          'caldav_username' => NULL,
          'caldav_password' => NULL,
          'sync_past_days' => '30',
          'sync_future_days' => '90',
          'calendar_view' => 'table',
        ),
        'services' => 
        array (
          0 => 1,
          1 => 2,
        ),
      ),
      3 => 
      array (
        'id' => 3,
        'create_datetime' => '2026-07-22 11:55:43',
        'update_datetime' => '2026-07-23 11:07:18',
        'first_name' => 'James',
        'last_name' => 'Doe',
        'email' => 'james@example.org',
        'mobile_number' => NULL,
        'phone_number' => '+10000000000',
        'address' => '',
        'city' => '',
        'state' => NULL,
        'zip_code' => '',
        'notes' => '',
        'timezone' => 'UTC',
        'language' => 'english',
        'custom_field_1' => NULL,
        'custom_field_2' => NULL,
        'custom_field_3' => NULL,
        'custom_field_4' => NULL,
        'custom_field_5' => NULL,
        'is_private' => '0',
        'ldap_dn' => NULL,
        'id_roles' => 3,
      ),
      4 => 
      array (
        'company_name' => 'Company Name',
        'company_link' => 'https://example.org',
        'company_email' => 'info@example.org',
        'company_color' => NULL,
        'date_format' => 'DMY',
        'time_format' => 'regular',
      ),
      5 => false,
    ),
  ),
)
ERROR - 2026-07-23 14:41:05 --> JSON exception: {"success":false,"message":"The provided username is already in use, please use a different one.","trace":"array (\n  0 => \n  array (\n    'file' => 'C:\\\\xampp\\\\htdocs\\\\easy\\\\application\\\\models\\\\Providers_model.php',\n    'line' => 66,\n    'function' => 'validate',\n    'class' => 'Providers_model',\n    'type' => '->',\n    'args' => \n    array (\n      0 => \n      array (\n        'first_name' => 'Anshul ',\n        'last_name' => 'raj',\n        'email' => 'anshulraj@973gmail.com',\n        'phone_number' => '',\n        'address' => '',\n        'city' => '',\n        'state' => '',\n        'zip_code' => '',\n        'is_private' => '0',\n        'notes' => '',\n        'language' => 'english',\n        'timezone' => 'Asia\/Kolkata',\n        'settings' => \n        array (\n          'username' => 'anshulraj',\n          'working_plan' => '{\"sunday\":null,\"monday\":{\"start\":\"09:00\",\"end\":\"18:00\",\"breaks\":[{\"start\":\"14:30\",\"end\":\"15:00\"}]},\"tuesday\":{\"start\":\"09:00\",\"end\":\"18:00\",\"breaks\":[{\"start\":\"14:30\",\"end\":\"15:00\"}]},\"wednesday\":{\"start\":\"09:00\",\"end\":\"18:00\",\"breaks\":[{\"start\":\"14:30\",\"end\":\"15:00\"}]},\"thursday\":{\"start\":\"09:00\",\"end\":\"18:00\",\"breaks\":[{\"start\":\"14:30\",\"end\":\"15:00\"}]},\"friday\":{\"start\":\"09:00\",\"end\":\"18:00\",\"breaks\":[{\"start\":\"14:30\",\"end\":\"15:00\"}]},\"saturday\":{\"start\":\"09:00\",\"end\":\"18:00\",\"breaks\":[{\"start\":\"14:30\",\"end\":\"15:00\"}]}}',\n          'working_plan_exceptions' => '[]',\n          'notifications' => '1',\n          'calendar_view' => 'default',\n          'password' => 'anshulraj',\n        ),\n        'services' => \n        array (\n          0 => '1',\n          1 => '2',\n        ),\n      ),\n    ),\n  ),\n  1 => \n  array (\n    'file' => 'C:\\\\xampp\\\\htdocs\\\\easy\\\\application\\\\controllers\\\\Providers.php',\n    'line' => 197,\n    'function' => 'save',\n    'class' => 'Providers_model',\n    'type' => '->',\n    'args' => \n    array (\n      0 => \n      array (\n        'first_name' => 'Anshul ',\n        'last_name' => 'raj',\n        'email' => 'anshulraj@973gmail.com',\n        'phone_number' => '',\n        'address' => '',\n        'city' => '',\n        'state' => '',\n        'zip_code' => '',\n        'is_private' => '0',\n        'notes' => '',\n        'language' => 'english',\n        'timezone' => 'Asia\/Kolkata',\n        'settings' => \n        array (\n          'username' => 'anshulraj',\n          'working_plan' => '{\"sunday\":null,\"monday\":{\"start\":\"09:00\",\"end\":\"18:00\",\"breaks\":[{\"start\":\"14:30\",\"end\":\"15:00\"}]},\"tuesday\":{\"start\":\"09:00\",\"end\":\"18:00\",\"breaks\":[{\"start\":\"14:30\",\"end\":\"15:00\"}]},\"wednesday\":{\"start\":\"09:00\",\"end\":\"18:00\",\"breaks\":[{\"start\":\"14:30\",\"end\":\"15:00\"}]},\"thursday\":{\"start\":\"09:00\",\"end\":\"18:00\",\"breaks\":[{\"start\":\"14:30\",\"end\":\"15:00\"}]},\"friday\":{\"start\":\"09:00\",\"end\":\"18:00\",\"breaks\":[{\"start\":\"14:30\",\"end\":\"15:00\"}]},\"saturday\":{\"start\":\"09:00\",\"end\":\"18:00\",\"breaks\":[{\"start\":\"14:30\",\"end\":\"15:00\"}]}}',\n          'working_plan_exceptions' => '[]',\n          'notifications' => '1',\n          'calendar_view' => 'default',\n          'password' => 'anshulraj',\n        ),\n        'services' => \n        array (\n          0 => '1',\n          1 => '2',\n        ),\n      ),\n    ),\n  ),\n  2 => \n  array (\n    'file' => 'C:\\\\xampp\\\\htdocs\\\\easy\\\\system\\\\core\\\\CodeIgniter.php',\n    'line' => 481,\n    'function' => 'store',\n    'class' => 'Providers',\n    'type' => '->',\n    'args' => \n    array (\n    ),\n  ),\n  3 => \n  array (\n    'file' => 'C:\\\\xampp\\\\htdocs\\\\easy\\\\index.php',\n    'line' => 344,\n    'args' => \n    array (\n      0 => 'C:\\\\xampp\\\\htdocs\\\\easy\\\\system\\\\core\\\\CodeIgniter.php',\n    ),\n    'function' => 'require_once',\n  ),\n)"} Trace: array (
  0 => 
  array (
    'file' => 'C:\\xampp\\htdocs\\easy\\application\\helpers\\http_helper.php',
    'line' => 176,
    'function' => 'log_message',
    'args' => 
    array (
      0 => 'error',
      1 => 'JSON exception: {"success":false,"message":"The provided username is already in use, please use a different one.","trace":"array (\\n  0 => \\n  array (\\n    \'file\' => \'C:\\\\\\\\xampp\\\\\\\\htdocs\\\\\\\\easy\\\\\\\\application\\\\\\\\models\\\\\\\\Providers_model.php\',\\n    \'line\' => 66,\\n    \'function\' => \'validate\',\\n    \'class\' => \'Providers_model\',\\n    \'type\' => \'->\',\\n    \'args\' => \\n    array (\\n      0 => \\n      array (\\n        \'first_name\' => \'Anshul \',\\n        \'last_name\' => \'raj\',\\n        \'email\' => \'anshulraj@973gmail.com\',\\n        \'phone_number\' => \'\',\\n        \'address\' => \'\',\\n        \'city\' => \'\',\\n        \'state\' => \'\',\\n        \'zip_code\' => \'\',\\n        \'is_private\' => \'0\',\\n        \'notes\' => \'\',\\n        \'language\' => \'english\',\\n        \'timezone\' => \'Asia\\/Kolkata\',\\n        \'settings\' => \\n        array (\\n          \'username\' => \'anshulraj\',\\n          \'working_plan\' => \'{\\"sunday\\":null,\\"monday\\":{\\"start\\":\\"09:00\\",\\"end\\":\\"18:00\\",\\"breaks\\":[{\\"start\\":\\"14:30\\",\\"end\\":\\"15:00\\"}]},\\"tuesday\\":{\\"start\\":\\"09:00\\",\\"end\\":\\"18:00\\",\\"breaks\\":[{\\"start\\":\\"14:30\\",\\"end\\":\\"15:00\\"}]},\\"wednesday\\":{\\"start\\":\\"09:00\\",\\"end\\":\\"18:00\\",\\"breaks\\":[{\\"start\\":\\"14:30\\",\\"end\\":\\"15:00\\"}]},\\"thursday\\":{\\"start\\":\\"09:00\\",\\"end\\":\\"18:00\\",\\"breaks\\":[{\\"start\\":\\"14:30\\",\\"end\\":\\"15:00\\"}]},\\"friday\\":{\\"start\\":\\"09:00\\",\\"end\\":\\"18:00\\",\\"breaks\\":[{\\"start\\":\\"14:30\\",\\"end\\":\\"15:00\\"}]},\\"saturday\\":{\\"start\\":\\"09:00\\",\\"end\\":\\"18:00\\",\\"breaks\\":[{\\"start\\":\\"14:30\\",\\"end\\":\\"15:00\\"}]}}\',\\n          \'working_plan_exceptions\' => \'[]\',\\n          \'notifications\' => \'1\',\\n          \'calendar_view\' => \'default\',\\n          \'password\' => \'anshulraj\',\\n        ),\\n        \'services\' => \\n        array (\\n          0 => \'1\',\\n          1 => \'2\',\\n        ),\\n      ),\\n    ),\\n  ),\\n  1 => \\n  array (\\n    \'file\' => \'C:\\\\\\\\xampp\\\\\\\\htdocs\\\\\\\\easy\\\\\\\\application\\\\\\\\controllers\\\\\\\\Providers.php\',\\n    \'line\' => 197,\\n    \'function\' => \'save\',\\n    \'class\' => \'Providers_model\',\\n    \'type\' => \'->\',\\n    \'args\' => \\n    array (\\n      0 => \\n      array (\\n        \'first_name\' => \'Anshul \',\\n        \'last_name\' => \'raj\',\\n        \'email\' => \'anshulraj@973gmail.com\',\\n        \'phone_number\' => \'\',\\n        \'address\' => \'\',\\n        \'city\' => \'\',\\n        \'state\' => \'\',\\n        \'zip_code\' => \'\',\\n        \'is_private\' => \'0\',\\n        \'notes\' => \'\',\\n        \'language\' => \'english\',\\n        \'timezone\' => \'Asia\\/Kolkata\',\\n        \'settings\' => \\n        array (\\n          \'username\' => \'anshulraj\',\\n          \'working_plan\' => \'{\\"sunday\\":null,\\"monday\\":{\\"start\\":\\"09:00\\",\\"end\\":\\"18:00\\",\\"breaks\\":[{\\"start\\":\\"14:30\\",\\"end\\":\\"15:00\\"}]},\\"tuesday\\":{\\"start\\":\\"09:00\\",\\"end\\":\\"18:00\\",\\"breaks\\":[{\\"start\\":\\"14:30\\",\\"end\\":\\"15:00\\"}]},\\"wednesday\\":{\\"start\\":\\"09:00\\",\\"end\\":\\"18:00\\",\\"breaks\\":[{\\"start\\":\\"14:30\\",\\"end\\":\\"15:00\\"}]},\\"thursday\\":{\\"start\\":\\"09:00\\",\\"end\\":\\"18:00\\",\\"breaks\\":[{\\"start\\":\\"14:30\\",\\"end\\":\\"15:00\\"}]},\\"friday\\":{\\"start\\":\\"09:00\\",\\"end\\":\\"18:00\\",\\"breaks\\":[{\\"start\\":\\"14:30\\",\\"end\\":\\"15:00\\"}]},\\"saturday\\":{\\"start\\":\\"09:00\\",\\"end\\":\\"18:00\\",\\"breaks\\":[{\\"start\\":\\"14:30\\",\\"end\\":\\"15:00\\"}]}}\',\\n          \'working_plan_exceptions\' => \'[]\',\\n          \'notifications\' => \'1\',\\n          \'calendar_view\' => \'default\',\\n          \'password\' => \'anshulraj\',\\n        ),\\n        \'services\' => \\n        array (\\n          0 => \'1\',\\n          1 => \'2\',\\n        ),\\n      ),\\n    ),\\n  ),\\n  2 => \\n  array (\\n    \'file\' => \'C:\\\\\\\\xampp\\\\\\\\htdocs\\\\\\\\easy\\\\\\\\system\\\\\\\\core\\\\\\\\CodeIgniter.php\',\\n    \'line\' => 481,\\n    \'function\' => \'store\',\\n    \'class\' => \'Providers\',\\n    \'type\' => \'->\',\\n    \'args\' => \\n    array (\\n    ),\\n  ),\\n  3 => \\n  array (\\n    \'file\' => \'C:\\\\\\\\xampp\\\\\\\\htdocs\\\\\\\\easy\\\\\\\\index.php\',\\n    \'line\' => 344,\\n    \'args\' => \\n    array (\\n      0 => \'C:\\\\\\\\xampp\\\\\\\\htdocs\\\\\\\\easy\\\\\\\\system\\\\\\\\core\\\\\\\\CodeIgniter.php\',\\n    ),\\n    \'function\' => \'require_once\',\\n  ),\\n)"}',
    ),
  ),
  1 => 
  array (
    'file' => 'C:\\xampp\\htdocs\\easy\\application\\controllers\\Providers.php',
    'line' => 208,
    'function' => 'json_exception',
    'args' => 
    array (
      0 => 
      \InvalidArgumentException::__set_state(array(
         'message' => 'The provided username is already in use, please use a different one.',
         'string' => '',
         'code' => 0,
         'file' => 'C:\\xampp\\htdocs\\easy\\application\\models\\Providers_model.php',
         'line' => 122,
         'trace' => 
        array (
          0 => 
          array (
            'file' => 'C:\\xampp\\htdocs\\easy\\application\\models\\Providers_model.php',
            'line' => 66,
            'function' => 'validate',
            'class' => 'Providers_model',
            'type' => '->',
            'args' => 
            array (
              0 => 
              array (
                'first_name' => 'Anshul ',
                'last_name' => 'raj',
                'email' => 'anshulraj@973gmail.com',
                'phone_number' => '',
                'address' => '',
                'city' => '',
                'state' => '',
                'zip_code' => '',
                'is_private' => '0',
                'notes' => '',
                'language' => 'english',
                'timezone' => 'Asia/Kolkata',
                'settings' => 
                array (
                  'username' => 'anshulraj',
                  'working_plan' => '{"sunday":null,"monday":{"start":"09:00","end":"18:00","breaks":[{"start":"14:30","end":"15:00"}]},"tuesday":{"start":"09:00","end":"18:00","breaks":[{"start":"14:30","end":"15:00"}]},"wednesday":{"start":"09:00","end":"18:00","breaks":[{"start":"14:30","end":"15:00"}]},"thursday":{"start":"09:00","end":"18:00","breaks":[{"start":"14:30","end":"15:00"}]},"friday":{"start":"09:00","end":"18:00","breaks":[{"start":"14:30","end":"15:00"}]},"saturday":{"start":"09:00","end":"18:00","breaks":[{"start":"14:30","end":"15:00"}]}}',
                  'working_plan_exceptions' => '[]',
                  'notifications' => '1',
                  'calendar_view' => 'default',
                  'password' => 'anshulraj',
                ),
                'services' => 
                array (
                  0 => '1',
                  1 => '2',
                ),
              ),
            ),
          ),
          1 => 
          array (
            'file' => 'C:\\xampp\\htdocs\\easy\\application\\controllers\\Providers.php',
            'line' => 197,
            'function' => 'save',
            'class' => 'Providers_model',
            'type' => '->',
            'args' => 
            array (
              0 => 
              array (
                'first_name' => 'Anshul ',
                'last_name' => 'raj',
                'email' => 'anshulraj@973gmail.com',
                'phone_number' => '',
                'address' => '',
                'city' => '',
                'state' => '',
                'zip_code' => '',
                'is_private' => '0',
                'notes' => '',
                'language' => 'english',
                'timezone' => 'Asia/Kolkata',
                'settings' => 
                array (
                  'username' => 'anshulraj',
                  'working_plan' => '{"sunday":null,"monday":{"start":"09:00","end":"18:00","breaks":[{"start":"14:30","end":"15:00"}]},"tuesday":{"start":"09:00","end":"18:00","breaks":[{"start":"14:30","end":"15:00"}]},"wednesday":{"start":"09:00","end":"18:00","breaks":[{"start":"14:30","end":"15:00"}]},"thursday":{"start":"09:00","end":"18:00","breaks":[{"start":"14:30","end":"15:00"}]},"friday":{"start":"09:00","end":"18:00","breaks":[{"start":"14:30","end":"15:00"}]},"saturday":{"start":"09:00","end":"18:00","breaks":[{"start":"14:30","end":"15:00"}]}}',
                  'working_plan_exceptions' => '[]',
                  'notifications' => '1',
                  'calendar_view' => 'default',
                  'password' => 'anshulraj',
                ),
                'services' => 
                array (
                  0 => '1',
                  1 => '2',
                ),
              ),
            ),
          ),
          2 => 
          array (
            'file' => 'C:\\xampp\\htdocs\\easy\\system\\core\\CodeIgniter.php',
            'line' => 481,
            'function' => 'store',
            'class' => 'Providers',
            'type' => '->',
            'args' => 
            array (
            ),
          ),
          3 => 
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
    'function' => 'store',
    'class' => 'Providers',
    'type' => '->',
    'args' => 
    array (
    ),
  ),
)
ERROR - 2026-07-23 11:15:46 --> JSON exception: {"success":false,"message":"Table 'easyappointments.ea_roles' doesn't exist","trace":"array (\n  0 => \n  array (\n    'file' => 'C:\\\\xampp\\\\htdocs\\\\easy\\\\system\\\\database\\\\drivers\\\\mysqli\\\\mysqli_driver.php',\n    'line' => 301,\n    'function' => 'query',\n    'class' => 'mysqli',\n    'type' => '->',\n    'args' => \n    array (\n      0 => 'SELECT *\nFROM `ea_roles`\nWHERE `slug` = \\'admin\\'',\n    ),\n  ),\n  1 => \n  array (\n    'file' => 'C:\\\\xampp\\\\htdocs\\\\easy\\\\system\\\\database\\\\DB_driver.php',\n    'line' => 746,\n    'function' => '_execute',\n    'class' => 'CI_DB_mysqli_driver',\n    'type' => '->',\n    'args' => \n    array (\n      0 => 'SELECT *\nFROM `ea_roles`\nWHERE `slug` = \\'admin\\'',\n    ),\n  ),\n  2 => \n  array (\n    'file' => 'C:\\\\xampp\\\\htdocs\\\\easy\\\\system\\\\database\\\\DB_driver.php',\n    'line' => 636,\n    'function' => 'simple_query',\n    'class' => 'CI_DB_driver',\n    'type' => '->',\n    'args' => \n    array (\n      0 => 'SELECT *\nFROM `ea_roles`\nWHERE `slug` = \\'admin\\'',\n    ),\n  ),\n  3 => \n  array (\n    'file' => 'C:\\\\xampp\\\\htdocs\\\\easy\\\\system\\\\database\\\\DB_query_builder.php',\n    'line' => 1540,\n    'function' => 'query',\n    'class' => 'CI_DB_driver',\n    'type' => '->',\n    'args' => \n    array (\n      0 => 'SELECT *\nFROM `ea_roles`\nWHERE `slug` = \\'admin\\'',\n    ),\n  ),\n  4 => \n  array (\n    'file' => 'C:\\\\xampp\\\\htdocs\\\\easy\\\\application\\\\models\\\\Roles_model.php',\n    'line' => 215,\n    'function' => 'get_where',\n    'class' => 'CI_DB_query_builder',\n    'type' => '->',\n    'args' => \n    array (\n      0 => 'roles',\n      1 => \n      array (\n        'slug' => 'admin',\n      ),\n    ),\n  ),\n  5 => \n  array (\n    'file' => 'C:\\\\xampp\\\\htdocs\\\\easy\\\\application\\\\helpers\\\\permission_helper.php',\n    'line' => 48,\n    'function' => 'get_permissions_by_slug',\n    'class' => 'Roles_model',\n    'type' => '->',\n    'args' => \n    array (\n      0 => 'admin',\n    ),\n  ),\n  6 => \n  array (\n    'file' => 'C:\\\\xampp\\\\htdocs\\\\easy\\\\application\\\\helpers\\\\permission_helper.php',\n    'line' => 70,\n    'function' => 'can',\n    'args' => \n    array (\n      0 => 'view',\n      1 => 'appointments',\n      2 => NULL,\n    ),\n  ),\n  7 => \n  array (\n    'file' => 'C:\\\\xampp\\\\htdocs\\\\easy\\\\application\\\\controllers\\\\Calendar.php',\n    'line' => 754,\n    'function' => 'cannot',\n    'args' => \n    array (\n      0 => 'view',\n      1 => 'appointments',\n    ),\n  ),\n  8 => \n  array (\n    'file' => 'C:\\\\xampp\\\\htdocs\\\\easy\\\\system\\\\core\\\\CodeIgniter.php',\n    'line' => 481,\n    'function' => 'get_calendar_appointments',\n    'class' => 'Calendar',\n    'type' => '->',\n    'args' => \n    array (\n    ),\n  ),\n  9 => \n  array (\n    'file' => 'C:\\\\xampp\\\\htdocs\\\\easy\\\\index.php',\n    'line' => 344,\n    'args' => \n    array (\n      0 => 'C:\\\\xampp\\\\htdocs\\\\easy\\\\system\\\\core\\\\CodeIgniter.php',\n    ),\n    'function' => 'require_once',\n  ),\n)"} Trace: array (
  0 => 
  array (
    'file' => 'C:\\xampp\\htdocs\\easy\\application\\helpers\\http_helper.php',
    'line' => 176,
    'function' => 'log_message',
    'args' => 
    array (
      0 => 'error',
      1 => 'JSON exception: {"success":false,"message":"Table \'easyappointments.ea_roles\' doesn\'t exist","trace":"array (\\n  0 => \\n  array (\\n    \'file\' => \'C:\\\\\\\\xampp\\\\\\\\htdocs\\\\\\\\easy\\\\\\\\system\\\\\\\\database\\\\\\\\drivers\\\\\\\\mysqli\\\\\\\\mysqli_driver.php\',\\n    \'line\' => 301,\\n    \'function\' => \'query\',\\n    \'class\' => \'mysqli\',\\n    \'type\' => \'->\',\\n    \'args\' => \\n    array (\\n      0 => \'SELECT *\\nFROM `ea_roles`\\nWHERE `slug` = \\\\\'admin\\\\\'\',\\n    ),\\n  ),\\n  1 => \\n  array (\\n    \'file\' => \'C:\\\\\\\\xampp\\\\\\\\htdocs\\\\\\\\easy\\\\\\\\system\\\\\\\\database\\\\\\\\DB_driver.php\',\\n    \'line\' => 746,\\n    \'function\' => \'_execute\',\\n    \'class\' => \'CI_DB_mysqli_driver\',\\n    \'type\' => \'->\',\\n    \'args\' => \\n    array (\\n      0 => \'SELECT *\\nFROM `ea_roles`\\nWHERE `slug` = \\\\\'admin\\\\\'\',\\n    ),\\n  ),\\n  2 => \\n  array (\\n    \'file\' => \'C:\\\\\\\\xampp\\\\\\\\htdocs\\\\\\\\easy\\\\\\\\system\\\\\\\\database\\\\\\\\DB_driver.php\',\\n    \'line\' => 636,\\n    \'function\' => \'simple_query\',\\n    \'class\' => \'CI_DB_driver\',\\n    \'type\' => \'->\',\\n    \'args\' => \\n    array (\\n      0 => \'SELECT *\\nFROM `ea_roles`\\nWHERE `slug` = \\\\\'admin\\\\\'\',\\n    ),\\n  ),\\n  3 => \\n  array (\\n    \'file\' => \'C:\\\\\\\\xampp\\\\\\\\htdocs\\\\\\\\easy\\\\\\\\system\\\\\\\\database\\\\\\\\DB_query_builder.php\',\\n    \'line\' => 1540,\\n    \'function\' => \'query\',\\n    \'class\' => \'CI_DB_driver\',\\n    \'type\' => \'->\',\\n    \'args\' => \\n    array (\\n      0 => \'SELECT *\\nFROM `ea_roles`\\nWHERE `slug` = \\\\\'admin\\\\\'\',\\n    ),\\n  ),\\n  4 => \\n  array (\\n    \'file\' => \'C:\\\\\\\\xampp\\\\\\\\htdocs\\\\\\\\easy\\\\\\\\application\\\\\\\\models\\\\\\\\Roles_model.php\',\\n    \'line\' => 215,\\n    \'function\' => \'get_where\',\\n    \'class\' => \'CI_DB_query_builder\',\\n    \'type\' => \'->\',\\n    \'args\' => \\n    array (\\n      0 => \'roles\',\\n      1 => \\n      array (\\n        \'slug\' => \'admin\',\\n      ),\\n    ),\\n  ),\\n  5 => \\n  array (\\n    \'file\' => \'C:\\\\\\\\xampp\\\\\\\\htdocs\\\\\\\\easy\\\\\\\\application\\\\\\\\helpers\\\\\\\\permission_helper.php\',\\n    \'line\' => 48,\\n    \'function\' => \'get_permissions_by_slug\',\\n    \'class\' => \'Roles_model\',\\n    \'type\' => \'->\',\\n    \'args\' => \\n    array (\\n      0 => \'admin\',\\n    ),\\n  ),\\n  6 => \\n  array (\\n    \'file\' => \'C:\\\\\\\\xampp\\\\\\\\htdocs\\\\\\\\easy\\\\\\\\application\\\\\\\\helpers\\\\\\\\permission_helper.php\',\\n    \'line\' => 70,\\n    \'function\' => \'can\',\\n    \'args\' => \\n    array (\\n      0 => \'view\',\\n      1 => \'appointments\',\\n      2 => NULL,\\n    ),\\n  ),\\n  7 => \\n  array (\\n    \'file\' => \'C:\\\\\\\\xampp\\\\\\\\htdocs\\\\\\\\easy\\\\\\\\application\\\\\\\\controllers\\\\\\\\Calendar.php\',\\n    \'line\' => 754,\\n    \'function\' => \'cannot\',\\n    \'args\' => \\n    array (\\n      0 => \'view\',\\n      1 => \'appointments\',\\n    ),\\n  ),\\n  8 => \\n  array (\\n    \'file\' => \'C:\\\\\\\\xampp\\\\\\\\htdocs\\\\\\\\easy\\\\\\\\system\\\\\\\\core\\\\\\\\CodeIgniter.php\',\\n    \'line\' => 481,\\n    \'function\' => \'get_calendar_appointments\',\\n    \'class\' => \'Calendar\',\\n    \'type\' => \'->\',\\n    \'args\' => \\n    array (\\n    ),\\n  ),\\n  9 => \\n  array (\\n    \'file\' => \'C:\\\\\\\\xampp\\\\\\\\htdocs\\\\\\\\easy\\\\\\\\index.php\',\\n    \'line\' => 344,\\n    \'args\' => \\n    array (\\n      0 => \'C:\\\\\\\\xampp\\\\\\\\htdocs\\\\\\\\easy\\\\\\\\system\\\\\\\\core\\\\\\\\CodeIgniter.php\',\\n    ),\\n    \'function\' => \'require_once\',\\n  ),\\n)"}',
    ),
  ),
  1 => 
  array (
    'file' => 'C:\\xampp\\htdocs\\easy\\application\\controllers\\Calendar.php',
    'line' => 928,
    'function' => 'json_exception',
    'args' => 
    array (
      0 => 
      \mysqli_sql_exception::__set_state(array(
         'message' => 'Table \'easyappointments.ea_roles\' doesn\'t exist',
         'string' => '',
         'code' => 1146,
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
FROM `ea_roles`
WHERE `slug` = \'admin\'',
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
FROM `ea_roles`
WHERE `slug` = \'admin\'',
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
FROM `ea_roles`
WHERE `slug` = \'admin\'',
            ),
          ),
          3 => 
          array (
            'file' => 'C:\\xampp\\htdocs\\easy\\system\\database\\DB_query_builder.php',
            'line' => 1540,
            'function' => 'query',
            'class' => 'CI_DB_driver',
            'type' => '->',
            'args' => 
            array (
              0 => 'SELECT *
FROM `ea_roles`
WHERE `slug` = \'admin\'',
            ),
          ),
          4 => 
          array (
            'file' => 'C:\\xampp\\htdocs\\easy\\application\\models\\Roles_model.php',
            'line' => 215,
            'function' => 'get_where',
            'class' => 'CI_DB_query_builder',
            'type' => '->',
            'args' => 
            array (
              0 => 'roles',
              1 => 
              array (
                'slug' => 'admin',
              ),
            ),
          ),
          5 => 
          array (
            'file' => 'C:\\xampp\\htdocs\\easy\\application\\helpers\\permission_helper.php',
            'line' => 48,
            'function' => 'get_permissions_by_slug',
            'class' => 'Roles_model',
            'type' => '->',
            'args' => 
            array (
              0 => 'admin',
            ),
          ),
          6 => 
          array (
            'file' => 'C:\\xampp\\htdocs\\easy\\application\\helpers\\permission_helper.php',
            'line' => 70,
            'function' => 'can',
            'args' => 
            array (
              0 => 'view',
              1 => 'appointments',
              2 => NULL,
            ),
          ),
          7 => 
          array (
            'file' => 'C:\\xampp\\htdocs\\easy\\application\\controllers\\Calendar.php',
            'line' => 754,
            'function' => 'cannot',
            'args' => 
            array (
              0 => 'view',
              1 => 'appointments',
            ),
          ),
          8 => 
          array (
            'file' => 'C:\\xampp\\htdocs\\easy\\system\\core\\CodeIgniter.php',
            'line' => 481,
            'function' => 'get_calendar_appointments',
            'class' => 'Calendar',
            'type' => '->',
            'args' => 
            array (
            ),
          ),
          9 => 
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
         'sqlstate' => '42S02',
      )),
    ),
  ),
  2 => 
  array (
    'file' => 'C:\\xampp\\htdocs\\easy\\system\\core\\CodeIgniter.php',
    'line' => 481,
    'function' => 'get_calendar_appointments',
    'class' => 'Calendar',
    'type' => '->',
    'args' => 
    array (
    ),
  ),
)
ERROR - 2026-07-23 11:16:09 --> Severity: error --> Exception: Table 'easyappointments.ea_roles' doesn't exist C:\xampp\htdocs\easy\system\database\drivers\mysqli\mysqli_driver.php 301 Trace: array (
  0 => 
  array (
    'file' => 'C:\\xampp\\htdocs\\easy\\system\\core\\Exceptions.php',
    'line' => 104,
    'function' => 'log_message',
    'args' => 
    array (
      0 => 'error',
      1 => 'Severity: error --> Exception: Table \'easyappointments.ea_roles\' doesn\'t exist C:\\xampp\\htdocs\\easy\\system\\database\\drivers\\mysqli\\mysqli_driver.php 301',
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
      1 => 'Exception: Table \'easyappointments.ea_roles\' doesn\'t exist',
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
         'message' => 'Table \'easyappointments.ea_roles\' doesn\'t exist',
         'string' => '',
         'code' => 1146,
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
FROM `ea_roles`
WHERE `slug` = \'admin\'',
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
FROM `ea_roles`
WHERE `slug` = \'admin\'',
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
FROM `ea_roles`
WHERE `slug` = \'admin\'',
            ),
          ),
          3 => 
          array (
            'file' => 'C:\\xampp\\htdocs\\easy\\system\\database\\DB_query_builder.php',
            'line' => 1540,
            'function' => 'query',
            'class' => 'CI_DB_driver',
            'type' => '->',
            'args' => 
            array (
              0 => 'SELECT *
FROM `ea_roles`
WHERE `slug` = \'admin\'',
            ),
          ),
          4 => 
          array (
            'file' => 'C:\\xampp\\htdocs\\easy\\application\\models\\Roles_model.php',
            'line' => 215,
            'function' => 'get_where',
            'class' => 'CI_DB_query_builder',
            'type' => '->',
            'args' => 
            array (
              0 => 'roles',
              1 => 
              array (
                'slug' => 'admin',
              ),
            ),
          ),
          5 => 
          array (
            'file' => 'C:\\xampp\\htdocs\\easy\\application\\helpers\\permission_helper.php',
            'line' => 48,
            'function' => 'get_permissions_by_slug',
            'class' => 'Roles_model',
            'type' => '->',
            'args' => 
            array (
              0 => 'admin',
            ),
          ),
          6 => 
          array (
            'file' => 'C:\\xampp\\htdocs\\easy\\application\\helpers\\permission_helper.php',
            'line' => 70,
            'function' => 'can',
            'args' => 
            array (
              0 => 'view',
              1 => 'appointments',
              2 => NULL,
            ),
          ),
          7 => 
          array (
            'file' => 'C:\\xampp\\htdocs\\easy\\application\\controllers\\Calendar.php',
            'line' => 122,
            'function' => 'cannot',
            'args' => 
            array (
              0 => 'view',
              1 => 'appointments',
            ),
          ),
          8 => 
          array (
            'file' => 'C:\\xampp\\htdocs\\easy\\system\\core\\CodeIgniter.php',
            'line' => 481,
            'function' => 'index',
            'class' => 'Calendar',
            'type' => '->',
            'args' => 
            array (
            ),
          ),
          9 => 
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
         'sqlstate' => '42S02',
      )),
    ),
  ),
)
ERROR - 2026-07-23 11:18:22 --> Severity: error --> Exception: Table 'appointments.ea_roles' doesn't exist C:\xampp\htdocs\easy\system\database\drivers\mysqli\mysqli_driver.php 301 Trace: array (
  0 => 
  array (
    'file' => 'C:\\xampp\\htdocs\\easy\\system\\core\\Exceptions.php',
    'line' => 104,
    'function' => 'log_message',
    'args' => 
    array (
      0 => 'error',
      1 => 'Severity: error --> Exception: Table \'appointments.ea_roles\' doesn\'t exist C:\\xampp\\htdocs\\easy\\system\\database\\drivers\\mysqli\\mysqli_driver.php 301',
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
      1 => 'Exception: Table \'appointments.ea_roles\' doesn\'t exist',
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
         'message' => 'Table \'appointments.ea_roles\' doesn\'t exist',
         'string' => '',
         'code' => 1146,
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
FROM `ea_roles`
WHERE `slug` = \'admin\'',
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
FROM `ea_roles`
WHERE `slug` = \'admin\'',
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
FROM `ea_roles`
WHERE `slug` = \'admin\'',
            ),
          ),
          3 => 
          array (
            'file' => 'C:\\xampp\\htdocs\\easy\\system\\database\\DB_query_builder.php',
            'line' => 1540,
            'function' => 'query',
            'class' => 'CI_DB_driver',
            'type' => '->',
            'args' => 
            array (
              0 => 'SELECT *
FROM `ea_roles`
WHERE `slug` = \'admin\'',
            ),
          ),
          4 => 
          array (
            'file' => 'C:\\xampp\\htdocs\\easy\\application\\models\\Roles_model.php',
            'line' => 215,
            'function' => 'get_where',
            'class' => 'CI_DB_query_builder',
            'type' => '->',
            'args' => 
            array (
              0 => 'roles',
              1 => 
              array (
                'slug' => 'admin',
              ),
            ),
          ),
          5 => 
          array (
            'file' => 'C:\\xampp\\htdocs\\easy\\application\\helpers\\permission_helper.php',
            'line' => 48,
            'function' => 'get_permissions_by_slug',
            'class' => 'Roles_model',
            'type' => '->',
            'args' => 
            array (
              0 => 'admin',
            ),
          ),
          6 => 
          array (
            'file' => 'C:\\xampp\\htdocs\\easy\\application\\helpers\\permission_helper.php',
            'line' => 70,
            'function' => 'can',
            'args' => 
            array (
              0 => 'view',
              1 => 'system_settings',
              2 => NULL,
            ),
          ),
          7 => 
          array (
            'file' => 'C:\\xampp\\htdocs\\easy\\application\\controllers\\General_settings.php',
            'line' => 47,
            'function' => 'cannot',
            'args' => 
            array (
              0 => 'view',
              1 => 'system_settings',
            ),
          ),
          8 => 
          array (
            'file' => 'C:\\xampp\\htdocs\\easy\\system\\core\\CodeIgniter.php',
            'line' => 481,
            'function' => 'index',
            'class' => 'General_settings',
            'type' => '->',
            'args' => 
            array (
            ),
          ),
          9 => 
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
         'sqlstate' => '42S02',
      )),
    ),
  ),
)
ERROR - 2026-07-23 14:35:43 --> 404 Page Not Found: Calendar4/index Trace: array (
  0 => 
  array (
    'file' => 'C:\\xampp\\htdocs\\easy\\system\\core\\Exceptions.php',
    'line' => 134,
    'function' => 'log_message',
    'args' => 
    array (
      0 => 'error',
      1 => '404 Page Not Found: Calendar4/index',
    ),
  ),
  1 => 
  array (
    'file' => 'C:\\xampp\\htdocs\\easy\\system\\core\\Common.php',
    'line' => 439,
    'function' => 'show_404',
    'class' => 'CI_Exceptions',
    'type' => '->',
    'args' => 
    array (
      0 => 'Calendar4/index',
      1 => true,
    ),
  ),
  2 => 
  array (
    'file' => 'C:\\xampp\\htdocs\\easy\\system\\core\\CodeIgniter.php',
    'line' => 443,
    'function' => 'show_404',
    'args' => 
    array (
      0 => 'Calendar4/index',
    ),
  ),
)

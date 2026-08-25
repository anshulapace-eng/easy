<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2026-08-07 16:37:42 --> Severity: error --> Exception: Table 'easy.ea_appoinmemenets' doesn't exist C:\xampp\htdocs\easy\system\database\drivers\mysqli\mysqli_driver.php 301 Trace: array (
  0 => 
  array (
    'file' => 'C:\\xampp\\htdocs\\easy\\system\\core\\Exceptions.php',
    'line' => 104,
    'function' => 'log_message',
    'args' => 
    array (
      0 => 'error',
      1 => 'Severity: error --> Exception: Table \'easy.ea_appoinmemenets\' doesn\'t exist C:\\xampp\\htdocs\\easy\\system\\database\\drivers\\mysqli\\mysqli_driver.php 301',
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
      1 => 'Exception: Table \'easy.ea_appoinmemenets\' doesn\'t exist',
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
         'message' => 'Table \'easy.ea_appoinmemenets\' doesn\'t exist',
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
              0 => 'SELECT COUNT(*) AS `numrows`
FROM `ea_appoinmemenets`
JOIN `ea_users` ON `ea_users`.`id` = `ea_appoinmemenets`.`id_users_customer`
WHERE `ea_users`.`phone_number` = \'1234567899\'
AND `ea_appoinmemenets`.`start_datetime` >= \'2026-08-07 00:00:00\'
AND `ea_appoinmemenets`.`start_datetime` <= \'2026-08-22 23:59:59\'
AND `ea_appoinmemenets`.`is_canceled` != 1',
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
              0 => 'SELECT COUNT(*) AS `numrows`
FROM `ea_appoinmemenets`
JOIN `ea_users` ON `ea_users`.`id` = `ea_appoinmemenets`.`id_users_customer`
WHERE `ea_users`.`phone_number` = \'1234567899\'
AND `ea_appoinmemenets`.`start_datetime` >= \'2026-08-07 00:00:00\'
AND `ea_appoinmemenets`.`start_datetime` <= \'2026-08-22 23:59:59\'
AND `ea_appoinmemenets`.`is_canceled` != 1',
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
              0 => 'SELECT COUNT(*) AS `numrows`
FROM `ea_appoinmemenets`
JOIN `ea_users` ON `ea_users`.`id` = `ea_appoinmemenets`.`id_users_customer`
WHERE `ea_users`.`phone_number` = \'1234567899\'
AND `ea_appoinmemenets`.`start_datetime` >= \'2026-08-07 00:00:00\'
AND `ea_appoinmemenets`.`start_datetime` <= \'2026-08-22 23:59:59\'
AND `ea_appoinmemenets`.`is_canceled` != 1',
            ),
          ),
          3 => 
          array (
            'file' => 'C:\\xampp\\htdocs\\easy\\system\\database\\DB_query_builder.php',
            'line' => 1489,
            'function' => 'query',
            'class' => 'CI_DB_driver',
            'type' => '->',
            'args' => 
            array (
              0 => 'SELECT COUNT(*) AS `numrows`
FROM `ea_appoinmemenets`
JOIN `ea_users` ON `ea_users`.`id` = `ea_appoinmemenets`.`id_users_customer`
WHERE `ea_users`.`phone_number` = \'1234567899\'
AND `ea_appoinmemenets`.`start_datetime` >= \'2026-08-07 00:00:00\'
AND `ea_appoinmemenets`.`start_datetime` <= \'2026-08-22 23:59:59\'
AND `ea_appoinmemenets`.`is_canceled` != 1',
            ),
          ),
          4 => 
          array (
            'file' => 'C:\\xampp\\htdocs\\easy\\application\\controllers\\Home.php',
            'line' => 204,
            'function' => 'count_all_results',
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
            'function' => 'submit_appointment',
            'class' => 'Home',
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
         'sqlstate' => '42S02',
      )),
    ),
  ),
)
ERROR - 2026-08-07 16:38:48 --> Severity: error --> Exception: Table 'easy.ea_appoinmemenets' doesn't exist C:\xampp\htdocs\easy\system\database\drivers\mysqli\mysqli_driver.php 301 Trace: array (
  0 => 
  array (
    'file' => 'C:\\xampp\\htdocs\\easy\\system\\core\\Exceptions.php',
    'line' => 104,
    'function' => 'log_message',
    'args' => 
    array (
      0 => 'error',
      1 => 'Severity: error --> Exception: Table \'easy.ea_appoinmemenets\' doesn\'t exist C:\\xampp\\htdocs\\easy\\system\\database\\drivers\\mysqli\\mysqli_driver.php 301',
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
      1 => 'Exception: Table \'easy.ea_appoinmemenets\' doesn\'t exist',
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
         'message' => 'Table \'easy.ea_appoinmemenets\' doesn\'t exist',
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
              0 => 'SELECT COUNT(*) AS `numrows`
FROM `ea_appoinmemenets`
JOIN `ea_users` ON `ea_users`.`id` = `ea_appoinmemenets`.`id_users_customer`
WHERE `ea_users`.`phone_number` = \'9319163194\'
AND `ea_appoinmemenets`.`start_datetime` >= \'2026-08-07 00:00:00\'
AND `ea_appoinmemenets`.`start_datetime` <= \'2026-08-22 23:59:59\'
AND `ea_appoinmemenets`.`is_canceled` != 1',
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
              0 => 'SELECT COUNT(*) AS `numrows`
FROM `ea_appoinmemenets`
JOIN `ea_users` ON `ea_users`.`id` = `ea_appoinmemenets`.`id_users_customer`
WHERE `ea_users`.`phone_number` = \'9319163194\'
AND `ea_appoinmemenets`.`start_datetime` >= \'2026-08-07 00:00:00\'
AND `ea_appoinmemenets`.`start_datetime` <= \'2026-08-22 23:59:59\'
AND `ea_appoinmemenets`.`is_canceled` != 1',
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
              0 => 'SELECT COUNT(*) AS `numrows`
FROM `ea_appoinmemenets`
JOIN `ea_users` ON `ea_users`.`id` = `ea_appoinmemenets`.`id_users_customer`
WHERE `ea_users`.`phone_number` = \'9319163194\'
AND `ea_appoinmemenets`.`start_datetime` >= \'2026-08-07 00:00:00\'
AND `ea_appoinmemenets`.`start_datetime` <= \'2026-08-22 23:59:59\'
AND `ea_appoinmemenets`.`is_canceled` != 1',
            ),
          ),
          3 => 
          array (
            'file' => 'C:\\xampp\\htdocs\\easy\\system\\database\\DB_query_builder.php',
            'line' => 1489,
            'function' => 'query',
            'class' => 'CI_DB_driver',
            'type' => '->',
            'args' => 
            array (
              0 => 'SELECT COUNT(*) AS `numrows`
FROM `ea_appoinmemenets`
JOIN `ea_users` ON `ea_users`.`id` = `ea_appoinmemenets`.`id_users_customer`
WHERE `ea_users`.`phone_number` = \'9319163194\'
AND `ea_appoinmemenets`.`start_datetime` >= \'2026-08-07 00:00:00\'
AND `ea_appoinmemenets`.`start_datetime` <= \'2026-08-22 23:59:59\'
AND `ea_appoinmemenets`.`is_canceled` != 1',
            ),
          ),
          4 => 
          array (
            'file' => 'C:\\xampp\\htdocs\\easy\\application\\controllers\\Home.php',
            'line' => 204,
            'function' => 'count_all_results',
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
            'function' => 'submit_appointment',
            'class' => 'Home',
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
         'sqlstate' => '42S02',
      )),
    ),
  ),
)
ERROR - 2026-08-07 16:41:33 --> Severity: error --> Exception: Table 'easy.ea_appoinmemenets' doesn't exist C:\xampp\htdocs\easy\system\database\drivers\mysqli\mysqli_driver.php 301 Trace: array (
  0 => 
  array (
    'file' => 'C:\\xampp\\htdocs\\easy\\system\\core\\Exceptions.php',
    'line' => 104,
    'function' => 'log_message',
    'args' => 
    array (
      0 => 'error',
      1 => 'Severity: error --> Exception: Table \'easy.ea_appoinmemenets\' doesn\'t exist C:\\xampp\\htdocs\\easy\\system\\database\\drivers\\mysqli\\mysqli_driver.php 301',
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
      1 => 'Exception: Table \'easy.ea_appoinmemenets\' doesn\'t exist',
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
         'message' => 'Table \'easy.ea_appoinmemenets\' doesn\'t exist',
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
              0 => 'SELECT COUNT(*) AS `numrows`
FROM `ea_appoinmemenets`
JOIN `ea_users` ON `ea_users`.`id` = `ea_appoinmemenets`.`id_users_customer`
WHERE `ea_users`.`phone_number` = \'1234567899\'
AND `ea_appoinmemenets`.`start_datetime` >= \'2026-08-07 00:00:00\'
AND `ea_appoinmemenets`.`start_datetime` <= \'2026-08-22 23:59:59\'
AND `ea_appoinmemenets`.`is_canceled` != 1',
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
              0 => 'SELECT COUNT(*) AS `numrows`
FROM `ea_appoinmemenets`
JOIN `ea_users` ON `ea_users`.`id` = `ea_appoinmemenets`.`id_users_customer`
WHERE `ea_users`.`phone_number` = \'1234567899\'
AND `ea_appoinmemenets`.`start_datetime` >= \'2026-08-07 00:00:00\'
AND `ea_appoinmemenets`.`start_datetime` <= \'2026-08-22 23:59:59\'
AND `ea_appoinmemenets`.`is_canceled` != 1',
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
              0 => 'SELECT COUNT(*) AS `numrows`
FROM `ea_appoinmemenets`
JOIN `ea_users` ON `ea_users`.`id` = `ea_appoinmemenets`.`id_users_customer`
WHERE `ea_users`.`phone_number` = \'1234567899\'
AND `ea_appoinmemenets`.`start_datetime` >= \'2026-08-07 00:00:00\'
AND `ea_appoinmemenets`.`start_datetime` <= \'2026-08-22 23:59:59\'
AND `ea_appoinmemenets`.`is_canceled` != 1',
            ),
          ),
          3 => 
          array (
            'file' => 'C:\\xampp\\htdocs\\easy\\system\\database\\DB_query_builder.php',
            'line' => 1489,
            'function' => 'query',
            'class' => 'CI_DB_driver',
            'type' => '->',
            'args' => 
            array (
              0 => 'SELECT COUNT(*) AS `numrows`
FROM `ea_appoinmemenets`
JOIN `ea_users` ON `ea_users`.`id` = `ea_appoinmemenets`.`id_users_customer`
WHERE `ea_users`.`phone_number` = \'1234567899\'
AND `ea_appoinmemenets`.`start_datetime` >= \'2026-08-07 00:00:00\'
AND `ea_appoinmemenets`.`start_datetime` <= \'2026-08-22 23:59:59\'
AND `ea_appoinmemenets`.`is_canceled` != 1',
            ),
          ),
          4 => 
          array (
            'file' => 'C:\\xampp\\htdocs\\easy\\application\\controllers\\Home.php',
            'line' => 205,
            'function' => 'count_all_results',
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
            'function' => 'submit_appointment',
            'class' => 'Home',
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
         'sqlstate' => '42S02',
      )),
    ),
  ),
)

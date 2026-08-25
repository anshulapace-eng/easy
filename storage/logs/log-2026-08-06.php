<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2026-08-06 11:27:48 --> Severity: error --> Exception: Not all required fields are provided: Array
(
    [first_name] => pp kumar
    [last_name] => 
    [email] => 
    [phone_number] => 9319163194
    [notes] => dscwedcew
)
 C:\xampp\htdocs\easy\application\models\Customers_model.php 178 Trace: array (
  0 => 
  array (
    'file' => 'C:\\xampp\\htdocs\\easy\\system\\core\\Exceptions.php',
    'line' => 104,
    'function' => 'log_message',
    'args' => 
    array (
      0 => 'error',
      1 => 'Severity: error --> Exception: Not all required fields are provided: Array
(
    [first_name] => pp kumar
    [last_name] => 
    [email] => 
    [phone_number] => 9319163194
    [notes] => dscwedcew
)
 C:\\xampp\\htdocs\\easy\\application\\models\\Customers_model.php 178',
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
      1 => 'Exception: Not all required fields are provided: Array
(
    [first_name] => pp kumar
    [last_name] => 
    [email] => 
    [phone_number] => 9319163194
    [notes] => dscwedcew
)
',
      2 => 'C:\\xampp\\htdocs\\easy\\application\\models\\Customers_model.php',
      3 => 178,
    ),
  ),
  2 => 
  array (
    'function' => '_exception_handler',
    'args' => 
    array (
      0 => 
      \InvalidArgumentException::__set_state(array(
         'message' => 'Not all required fields are provided: Array
(
    [first_name] => pp kumar
    [last_name] => 
    [email] => 
    [phone_number] => 9319163194
    [notes] => dscwedcew
)
',
         'string' => '',
         'code' => 0,
         'file' => 'C:\\xampp\\htdocs\\easy\\application\\models\\Customers_model.php',
         'line' => 178,
         'trace' => 
        array (
          0 => 
          array (
            'file' => 'C:\\xampp\\htdocs\\easy\\application\\models\\Customers_model.php',
            'line' => 65,
            'function' => 'validate',
            'class' => 'Customers_model',
            'type' => '->',
            'args' => 
            array (
              0 => 
              array (
                'first_name' => 'pp kumar',
                'last_name' => '',
                'email' => NULL,
                'phone_number' => '9319163194',
                'notes' => 'dscwedcew',
              ),
            ),
          ),
          1 => 
          array (
            'file' => 'C:\\xampp\\htdocs\\easy\\application\\controllers\\Home.php',
            'line' => 185,
            'function' => 'save',
            'class' => 'Customers_model',
            'type' => '->',
            'args' => 
            array (
              0 => 
              array (
                'first_name' => 'pp kumar',
                'last_name' => '',
                'email' => NULL,
                'phone_number' => '9319163194',
                'notes' => 'dscwedcew',
              ),
            ),
          ),
          2 => 
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
)
ERROR - 2026-08-06 08:24:10 --> Severity: error --> Exception: syntax error, unexpected token ":", expecting "]" C:\xampp\htdocs\easy\application\controllers\Home.php 28 Trace: array (
  0 => 
  array (
    'file' => 'C:\\xampp\\htdocs\\easy\\system\\core\\Exceptions.php',
    'line' => 104,
    'function' => 'log_message',
    'args' => 
    array (
      0 => 'error',
      1 => 'Severity: error --> Exception: syntax error, unexpected token ":", expecting "]" C:\\xampp\\htdocs\\easy\\application\\controllers\\Home.php 28',
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
      1 => 'Exception: syntax error, unexpected token ":", expecting "]"',
      2 => 'C:\\xampp\\htdocs\\easy\\application\\controllers\\Home.php',
      3 => 28,
    ),
  ),
  2 => 
  array (
    'function' => '_exception_handler',
    'args' => 
    array (
      0 => 
      \ParseError::__set_state(array(
         'message' => 'syntax error, unexpected token ":", expecting "]"',
         'string' => '',
         'code' => 0,
         'file' => 'C:\\xampp\\htdocs\\easy\\application\\controllers\\Home.php',
         'line' => 28,
         'trace' => 
        array (
          0 => 
          array (
            'file' => 'C:\\xampp\\htdocs\\easy\\index.php',
            'line' => 344,
            'function' => 'require_once',
          ),
        ),
         'previous' => NULL,
      )),
    ),
  ),
)
ERROR - 2026-08-06 08:24:39 --> Severity: error --> Exception: syntax error, unexpected token ":", expecting "]" C:\xampp\htdocs\easy\application\controllers\Home.php 28 Trace: array (
  0 => 
  array (
    'file' => 'C:\\xampp\\htdocs\\easy\\system\\core\\Exceptions.php',
    'line' => 104,
    'function' => 'log_message',
    'args' => 
    array (
      0 => 'error',
      1 => 'Severity: error --> Exception: syntax error, unexpected token ":", expecting "]" C:\\xampp\\htdocs\\easy\\application\\controllers\\Home.php 28',
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
      1 => 'Exception: syntax error, unexpected token ":", expecting "]"',
      2 => 'C:\\xampp\\htdocs\\easy\\application\\controllers\\Home.php',
      3 => 28,
    ),
  ),
  2 => 
  array (
    'function' => '_exception_handler',
    'args' => 
    array (
      0 => 
      \ParseError::__set_state(array(
         'message' => 'syntax error, unexpected token ":", expecting "]"',
         'string' => '',
         'code' => 0,
         'file' => 'C:\\xampp\\htdocs\\easy\\application\\controllers\\Home.php',
         'line' => 28,
         'trace' => 
        array (
          0 => 
          array (
            'file' => 'C:\\xampp\\htdocs\\easy\\index.php',
            'line' => 344,
            'function' => 'require_once',
          ),
        ),
         'previous' => NULL,
      )),
    ),
  ),
)
ERROR - 2026-08-06 14:21:21 --> Severity: error --> Exception: Not all required fields are provided: Array
(
    [first_name] => rahul kumar
    [last_name] => 
    [email] => 
    [phone_number] => 1234567899
    [notes] => fewrfe
)
 C:\xampp\htdocs\easy\application\models\Customers_model.php 178 Trace: array (
  0 => 
  array (
    'file' => 'C:\\xampp\\htdocs\\easy\\system\\core\\Exceptions.php',
    'line' => 104,
    'function' => 'log_message',
    'args' => 
    array (
      0 => 'error',
      1 => 'Severity: error --> Exception: Not all required fields are provided: Array
(
    [first_name] => rahul kumar
    [last_name] => 
    [email] => 
    [phone_number] => 1234567899
    [notes] => fewrfe
)
 C:\\xampp\\htdocs\\easy\\application\\models\\Customers_model.php 178',
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
      1 => 'Exception: Not all required fields are provided: Array
(
    [first_name] => rahul kumar
    [last_name] => 
    [email] => 
    [phone_number] => 1234567899
    [notes] => fewrfe
)
',
      2 => 'C:\\xampp\\htdocs\\easy\\application\\models\\Customers_model.php',
      3 => 178,
    ),
  ),
  2 => 
  array (
    'function' => '_exception_handler',
    'args' => 
    array (
      0 => 
      \InvalidArgumentException::__set_state(array(
         'message' => 'Not all required fields are provided: Array
(
    [first_name] => rahul kumar
    [last_name] => 
    [email] => 
    [phone_number] => 1234567899
    [notes] => fewrfe
)
',
         'string' => '',
         'code' => 0,
         'file' => 'C:\\xampp\\htdocs\\easy\\application\\models\\Customers_model.php',
         'line' => 178,
         'trace' => 
        array (
          0 => 
          array (
            'file' => 'C:\\xampp\\htdocs\\easy\\application\\models\\Customers_model.php',
            'line' => 65,
            'function' => 'validate',
            'class' => 'Customers_model',
            'type' => '->',
            'args' => 
            array (
              0 => 
              array (
                'first_name' => 'rahul kumar',
                'last_name' => '',
                'email' => NULL,
                'phone_number' => '1234567899',
                'notes' => 'fewrfe',
              ),
            ),
          ),
          1 => 
          array (
            'file' => 'C:\\xampp\\htdocs\\easy\\application\\controllers\\Home.php',
            'line' => 213,
            'function' => 'save',
            'class' => 'Customers_model',
            'type' => '->',
            'args' => 
            array (
              0 => 
              array (
                'first_name' => 'rahul kumar',
                'last_name' => '',
                'email' => NULL,
                'phone_number' => '1234567899',
                'notes' => 'fewrfe',
              ),
            ),
          ),
          2 => 
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
)
ERROR - 2026-08-06 14:41:49 --> Severity: error --> Exception: Not all required fields are provided: Array
(
    [first_name] => kk kumar
    [last_name] => 
    [email] => 
    [phone_number] => 123456789
    [notes] => fewwedwc
)
 C:\xampp\htdocs\easy\application\models\Customers_model.php 178 Trace: array (
  0 => 
  array (
    'file' => 'C:\\xampp\\htdocs\\easy\\system\\core\\Exceptions.php',
    'line' => 104,
    'function' => 'log_message',
    'args' => 
    array (
      0 => 'error',
      1 => 'Severity: error --> Exception: Not all required fields are provided: Array
(
    [first_name] => kk kumar
    [last_name] => 
    [email] => 
    [phone_number] => 123456789
    [notes] => fewwedwc
)
 C:\\xampp\\htdocs\\easy\\application\\models\\Customers_model.php 178',
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
      1 => 'Exception: Not all required fields are provided: Array
(
    [first_name] => kk kumar
    [last_name] => 
    [email] => 
    [phone_number] => 123456789
    [notes] => fewwedwc
)
',
      2 => 'C:\\xampp\\htdocs\\easy\\application\\models\\Customers_model.php',
      3 => 178,
    ),
  ),
  2 => 
  array (
    'function' => '_exception_handler',
    'args' => 
    array (
      0 => 
      \InvalidArgumentException::__set_state(array(
         'message' => 'Not all required fields are provided: Array
(
    [first_name] => kk kumar
    [last_name] => 
    [email] => 
    [phone_number] => 123456789
    [notes] => fewwedwc
)
',
         'string' => '',
         'code' => 0,
         'file' => 'C:\\xampp\\htdocs\\easy\\application\\models\\Customers_model.php',
         'line' => 178,
         'trace' => 
        array (
          0 => 
          array (
            'file' => 'C:\\xampp\\htdocs\\easy\\application\\models\\Customers_model.php',
            'line' => 65,
            'function' => 'validate',
            'class' => 'Customers_model',
            'type' => '->',
            'args' => 
            array (
              0 => 
              array (
                'first_name' => 'kk kumar',
                'last_name' => '',
                'email' => NULL,
                'phone_number' => '123456789',
                'notes' => 'fewwedwc',
              ),
            ),
          ),
          1 => 
          array (
            'file' => 'C:\\xampp\\htdocs\\easy\\application\\controllers\\Home.php',
            'line' => 213,
            'function' => 'save',
            'class' => 'Customers_model',
            'type' => '->',
            'args' => 
            array (
              0 => 
              array (
                'first_name' => 'kk kumar',
                'last_name' => '',
                'email' => NULL,
                'phone_number' => '123456789',
                'notes' => 'fewwedwc',
              ),
            ),
          ),
          2 => 
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
)

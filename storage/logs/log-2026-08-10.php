<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2026-08-10 11:33:27 --> Severity: Warning --> Undefined variable $logs C:\xampp\htdocs\easy\application\views\pages\appointment_logs.php 41 Trace: array (
  0 => 
  array (
    'file' => 'C:\\xampp\\htdocs\\easy\\system\\core\\Exceptions.php',
    'line' => 104,
    'function' => 'log_message',
    'args' => 
    array (
      0 => 'error',
      1 => 'Severity: Warning --> Undefined variable $logs C:\\xampp\\htdocs\\easy\\application\\views\\pages\\appointment_logs.php 41',
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
      1 => 'Undefined variable $logs',
      2 => 'C:\\xampp\\htdocs\\easy\\application\\views\\pages\\appointment_logs.php',
      3 => 41,
    ),
  ),
  2 => 
  array (
    'file' => 'C:\\xampp\\htdocs\\easy\\application\\views\\pages\\appointment_logs.php',
    'line' => 41,
    'function' => '_error_handler',
    'args' => 
    array (
      0 => 2,
      1 => 'Undefined variable $logs',
      2 => 'C:\\xampp\\htdocs\\easy\\application\\views\\pages\\appointment_logs.php',
      3 => 41,
    ),
  ),
)

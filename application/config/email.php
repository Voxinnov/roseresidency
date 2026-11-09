<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$config['protocol'] = 'smtp';
$config['smtp_host'] = 'smtp.googlemail.com';
$config['smtp_port'] = 465;
$config['smtp_user'] = 'mail.voxinnov@gmail.com';
$config['smtp_pass'] = 'kgknjbzgsvuwyokv';
$config['smtp_crypto'] = 'ssl';
$config['mailtype'] = 'html';
$config['charset'] = 'iso-8859-1';
$config['wordwrap'] = TRUE;
$config['newline'] = "\r\n";
$config['validate'] = FALSE; // Enable if you want to test email configuration
$config['priority'] = 3; // Email priority (1 = highest, 5 = lowest, 3 = normal)
$config['crlf'] = "\r\n";
$config['newline'] = "\r\n";
$config['smtp_timeout'] = 30; // Timeout (in seconds) for sending mail.
$config['mailtype'] = 'html';
$config['charset'] = 'utf-8';
$config['wordwrap'] = TRUE;

$config['from_email'] = 'mail.voxinnov@gmail.com';
$config['from_name'] = 'Rose Residency';

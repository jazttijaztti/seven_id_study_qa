<?php
  defined('BASEPATH') OR exit('No direct script access allowed');
  
  $config['protocol'] = 'stmp';
  $config['smtp_host'] = 'smtp.googlemail.com';
  
  $config['smtp_user'] = '';
  $config['smtp_pass'] = '';

  $config['smtp_port'] = '465';
  $config['smtp_timeout'] = '30';
  $config['newline'] = '\r\n';
  $config['crlf'] = '\r\n';
  $config['mailtype'] = 'html';
  $config['charset'] = 'utf-8';
  $config['smtp_crypt'] = 'ssl';
  $config['from'] = '';

  $config['from_name'] = '7garden';

?>

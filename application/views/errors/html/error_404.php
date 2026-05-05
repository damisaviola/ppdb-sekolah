<?php
defined('BASEPATH') OR exit('No direct script access allowed');

// Get base_url from config or guess it if empty
$config =& get_config();
$base_url = $config['base_url'];

if (empty($base_url)) {
    $base_url = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]";
    $base_url .= str_replace(basename($_SERVER['SCRIPT_NAME']), "", $_SERVER['SCRIPT_NAME']);
}

// Redirect to our custom 404 controller
header("Location: " . $base_url . 'errors/not_found');
exit;
<?php
session_start();
$GLOBALS['config'] = array(

    'mysql' => array(
      'host' => '127.0.0.1',
      'username' => 'root',
      'password' => '',
      'db' => 'jaaschool'

    ), // end of array mysql

    'remember' => array(
        'cookie_name' => 'hash',
        'cookie_expiry' => 604800
    ), //end of array remember me for login

    'session' => array(
        'session_name' => 'user'
    ) // end of array session for login
);

// requiring files needed by the web Filesystem
spl_autoload_register(function($class){

    require_once 'classes/'. $class .'.php';
});

require_once 'functions/sanitize.php';

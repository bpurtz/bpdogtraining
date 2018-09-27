<?php
session_start();
include_once "total_mysql_commands.php";
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 9/8/18
 * Time: 7:26 PM
 */
switch($_POST['action']) {
    case 'setVar':
        setVar($_POST['key'], $_POST['value']);
        break;
    case 'clearVar':
        clearVar($_POST['key']);
        break;
}


function setVar($key, $value) {
    if (strlen($value) > 25) {
        $value = decrypt($value);
    }
    //set session variable
    $_SESSION[$key] = $value;
}

function clearVar($key) {
    unset($_SESSION[$key]);
}
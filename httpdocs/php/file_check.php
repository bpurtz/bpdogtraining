<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 11/25/17
 * Time: 12:22 PM
 */
if (isset($_FILES['file']['name'])) {
    if (0 < $_FILES['file']['error']) {
        echo 'Error during file upload' . $_FILES['file']['error'];
    } else {
        //user_id in case I want to change
        $s_user_id = $_SESSION['user_id'];
        $category = preg_replace('/\s+/', '', sanitizeString($_POST['category']));
        $file_name = preg_replace('/\s+/', '', $_FILES['file']['name']);
        $path = '/var/www/vhosts/animaldevelopement.com/httpdocs/img/'. $category . '/' . $s_user_id . "_" . $file_name;
        if (file_exists($path)) {
            echo 'taken';
        }else {
            echo 'free';
        }





    }
}

//use this function whenever sending information to the database
//process any data from the $_POST[] array
function sanitizeString($string)
{
    $string = stripslashes($string);
    $string = strip_tags($string);
    return htmlentities($string);
}

?>
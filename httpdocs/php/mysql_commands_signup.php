<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 11/4/17
 * Time: 4:25 PM

 $root = "/kunden/homepages/18/d697219215/htdocs/bpdogtraining/html";
 */
include_once "total_mysql_commands.php";


switch (isset($_POST['action'])) {
    case 'string_taken':
        string_taken($_POST['supplied_string'], $_POST['column_name'], $_POST['table']);
        break;
    
    case 'insert_user_loging':
        uploadUserLogging($_POST['f_name'], $_POST['l_name'], $_POST['username'], $_POST['password'], $_POST['email'], $_POST['about_me'], $_POST['pet_experience']);
        break;
}

?>
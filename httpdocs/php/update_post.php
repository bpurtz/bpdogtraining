<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 12/8/17
 * Time: 11:02 PM
 */
include_once "total_mysql_commands.php";
//starting point
if (isset($_POST['action'])) {
    switch ($_POST['action']) {
        //table will initially be the problem table [user_cmd_problems/user_problems]
        case "update_post": update_post($_POST['table'], $_POST['post_id'], $_POST['column'], $_POST['input']);
            break;
        case "delete_post":delete_post($_POST['table'], $_POST['post_id'], $_POST['owner_id']);
            break;
    }
}






















<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 12/6/17
 * Time: 10:06 PM
 */
include_once "total_mysql_commands.php";
//under construction 12/5
//will need to upload cmd, pic, and problem comments
//upload will happen via ajax

if (isset($_POST['action'])) {
    switch ($_POST['action']) {
        case "problem": uploadComment("problem_comment", $_POST['comment'], $_POST['post_id']);
            break;
        case "cmd_problem": uploadComment("cmd_problem_comment", $_POST['comment'], $_POST['post_id']);
            break;
    }
}







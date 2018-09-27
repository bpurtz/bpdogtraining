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
        case "update": update_comment($_POST['table'], $_POST['cmt_id'], $_POST['cmt']);
            break;
        case "delete":delete_comment($_POST['table'], $_POST['post_id'], $_POST['cmt_id']);
            break;
    }
}



function update_comment($table, $comment_id, $cmt) {
    //echo $table . "   " . $comment_id . "   " . $cmt;
    updateComment($table, $comment_id, $cmt);

}

function delete_comment($cmt_table, $post_id, $comment_id) {
    //get post table name
    deleteComment($cmt_table, $comment_id);

}



















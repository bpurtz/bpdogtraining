<?php
/**
* Created by PhpStorm.
* User: admin
* Date: 12/6/17
* Time: 6:43 PM
*/
include_once "total_mysql_commands.php";
//starting point
if (isset($_POST['action'])) {
    switch ($_POST['action']) {
        //table will initially be the problem table [user_cmd_problems/user_problems]
        case "problem": getCommentRows("problem", $_POST['post_id'], $_POST['num_elements'], $_POST['append_num']);
            break;
        case "cmd_problem":getCommentRows("cmd_problem", $_POST['post_id'], $_POST['num_elements'], $_POST['append_num']);
            break;
        case "update_comments":updateComments($_POST['table'], $_POST['post_id'], $_POST['recent_id']);
            break;
    }
}




//START
//display the number of comments requested
function getCommentRows($table, $post_id, $numElements, $append_num) {
    //set comments table name
    switch ($table) {
        case "cmd_problem":
            $table = "cmd_problem_comment";
            break;
        case "problem":
            $table = "problem_comment";
            break;
    }
    $res = getAllComments($table, $post_id, $numElements, $append_num);
    $current_user = $_COOKIE['user_id'];
    while ($row = $res->fetch_assoc()) {
        if ($row['owner_id'] === $current_user) {
            $owner_row = getUserRow($row['owner_id']);
            displayOwnedComment($row, $owner_row);
        }else {
            $owner_row = getUserRow($row['owner_id']);
            displayComment($row, $owner_row);
        }
    }

}

//update comments
function updateComments($table, $post_id, $recent_id) {
    $owner_id = $_COOKIE['user_id'];
    $comments = getRecentComments($table, $post_id, 0, 2);
    $row_array = array();
    //loop through them
    if ($comments) {
        while ($row = $comments->fetch_assoc()) {
            if ($row['id'] === $recent_id) {
                break;
            }else {
                array_push($row_array, $row);
            }
        }
        while (($row = array_pop($row_array)) !== NULL) {
            if ($row['owner_id'] !== $owner_id) {
                $owner_row = getUserRow($row['owner_id']);
                displayComment($row, $owner_row);
            }else {
                $owner_row = getUserRow($row['owner_id']);
                displayOwnedComment($row, $owner_row);
            }
        }
    }
}


//right now I'm just going to display comments, but later, I want to display
//a thumbnail image of the comment owner and maybe their username or something

function displayComment($comment_row, $owner_row)
{
    $c_friend_id = encrypt($owner_row['id']);
    $valid_date = date( 'm/d/y g:i A', strtotime($comment_row['post_date']));
    echo <<<POST
<div class="container-fluid comment row">
    <div class="owner_id" style="display: none;">{$c_friend_id}</div>
    <div class="cmt-id" style="display: none;">{$comment_row['id']}</div>
    <div class="comment_post card">
        <div class="card-body">
            <div class="cmt col-md-8 text-center normal_comment">{$comment_row['comment']}</div>
        </div>
    
        <div class="card-footer row">
            <div class="col-md-6 cmt-username text-center">{$owner_row['username']}</div>
            <div class="col-md-6 cmt-date text-center">{$valid_date}</div>
        </div>
    </div>
</div>
POST;

}

function displayOwnedComment($comment_row, $owner_row)
{
    $c_friend_id = encrypt($owner_row['id']);
    $valid_date = date( 'm/d/y g:i A', strtotime($comment_row['post_date']));
    echo <<<POST
<div class="container-fluid comment row">
    <div class="owner_id" style="display: none;">{$c_friend_id}</div>
    <div class="cmt-id" style="display: none;">{$comment_row['id']}</div>
    <div class="comment_post card">
        <div class="card-body">
            <div class="cmt col-md-7 text-center owned_comment">{$comment_row['comment']}</div>
        </div>
        
        <div class="card-footer row">
            <div class="col-md-3 cmt-username text-center">{$owner_row['username']}</div>
            <div class="col-md-6 btn-group btn-group-sm">
                <button onclick="editComment($(this));" class="edit_comment btn btn-block btn-info">Edit</button>
                <button onclick="deleteComment($(this));" class="delete_comment btn btn-block btn-danger">Delete</button>
                <button onclick="updateComment($(this));" class="update_comment btn btn-block btn-info" style="display: none;">Update</button>
                <button onclick="cancelUpdate($(this))" class="cancel_update btn btn-block btn-info" style="display: none;">Cancel</button>
            </div>
            <div class="col-md-3 cmt-date text-center">
                {$valid_date}
            </div>
        </div>
    </div>
</div>

POST;

}
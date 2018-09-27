<?php
include_once "total_mysql_commands.php";
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 12/6/17
 * Time: 6:43 PM
 */
//starting point
if (isset($_POST['action'])) {
    switch ($_POST['action']) {
        //table will initially be the problem table [user_cmd_problems/user_problems]
        case "getMessages": getMessages($_POST['chat_id'], $_POST['user_id'], $_POST['offset'], $_POST['limit']);
            break;
        case "updateMessages": updateMessages($_POST['chat_id'], $_POST['recent_id'], $_POST['user_id']);
    }
}




/********************** LOADING METHODS  *******************************/
function updateMessages($chat_id, $recent_id, $user_id) {
    //get the 3 most recent messages
    //in descending order (newest first)
    $recent_messages = get_most_recent_messages($chat_id, 0, 3, false);
    //stack to reverse order and check in correct order
    //if first record message_id=$recent_id, break and push no items
    $message_stack = array();
    while ($row = $recent_messages->fetch_assoc()) {
        if ($row['id'] == $recent_id) {
            break;
        } else {
            array_push($message_stack, $row);
        }
    }
    //pop until empty
    while (sizeof($message_stack) > 0) {
        //get message row
        $message_row = array_pop($message_stack);
        //format date
        $valid_date = date( 'm/d/y g:i A', strtotime($message_row['message_date']));
        //check to see if owned
        if ($message_row['owner_id'] == $user_id) {
            displayMessage($message_row, "owned_message", $valid_date);
        } else {
            displayMessage($message_row, "normal_message", $valid_date);
        }
    }
}


//display the messages with the chat_id of the current chat
//no return, only echo
function getMessages($chat_id, $user_id,  $offset, $limit){
    $messages = get_most_recent_messages($chat_id, $offset, $limit, true);
    if ($messages) {
        while ($row = $messages->fetch_assoc()) {
            //displayMessage($row, 1);
            $valid_date = date( 'm/d/y g:i A', strtotime($row['message_date']));
            if ($row['owner_id'] == $user_id) {
                displayMessage($row, "owned_message", $valid_date);
            }else {
                displayMessage($row, "normal_message", $valid_date);
            }
        }
    }
}


//right now I'm just going to display comments, but later, I want to display
//a thumbnail image of the comment owner and maybe their username or something
//$owned will be 1 if the message is owned by viewer, 0 if not
function displayMessage($message_row, $owned, $date)
{
    echo <<<POST
<div class="message row">
    <div class="message-id" style="display: none">{$message_row['id']}</div>
    <div class="message_post panel">
        <div class="panel-body {$owned}">{$message_row['message']}</div>
        <div class="message-date panel-footer text-center">{$date}</div>
    </div>
</div>
POST;

}

<?php
session_start();
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
        case "getUserChats": getUserChats($_POST['user_id'], $_POST['offset'], $_POST['limit']);
            break;
    }
}


/***************** MY FRIEND PAGE ********************************/
function getUserChats($user_id, $offset, $limit) {
    //get all chats by user
    $chat_rows = getAllChats($user_id, $offset, $limit);
    if ($chat_rows) {
        while ($row = $chat_rows->fetch_array()) {
            //I now have all chats, each chat will have an id I can use to get the friend's id
            $friend_id = getFriendIDForChat($user_id, $row['id']);
            //get friend's vitals, need to change all displays to this function
            $friend_vitals = getFriendVitals($friend_id);
            //get photo row vitals
            $friend_photo_row = getPhotoRowVitals($friend_vitals['ppid']);
            //get most recent message
            $first_message = get_most_recent_messages($row['id'], 0,1, false)->fetch_assoc()['message'];
            displayChat($row, $friend_vitals, $friend_photo_row, $first_message);

        }

    }
}





//right now I'm just going to display comments, but later, I want to display
//a thumbnail image of the comment owner and maybe their username or something

function displayChat($chat_row, $friend_row, $friend_photo_vitals, $message)
{
    $c_friend_id = encrypt($friend_row['id']);
    echo <<<POST
<div class="container-fluid chat">
    <div class="friend_id">{$c_friend_id}</div>
    <div class="chat-id" style="display: none">{$chat_row['id']}</div>
    <div class="chat_post card container-fluid">
        <div class="row">
            <div class="col-md-4 direction">
                <img onclick="setChatVariables($(this)); window.location = 'user_profile.php';" class="img-responsive img-circle" src="../img/{$friend_photo_vitals['category']}/{$friend_photo_vitals['name']}">
                <h6 class="text-center"><a onclick="setChatVariables($(this));" href="user_profile.php">{$friend_row['username']}</a></h6>
            </div>
            <div class="col-md-4 info">
                <p class="text-center">{$friend_row['f_name']}</p>
                <p class="text-center">{$friend_row['l_name']}</p>
                <p class="text-center">{$message}</p>
            </div>
            <div class="col-md-4 chat-buttons">
            
            </div>
        </div>
        <div class="row">
            <div onclick="showMessages($(this))" class="message_button btn btn-primary btn-block message_collapse" style="height: 30px;">
                View
            </div>
            <div class="card-body messages" style="display: none;">
                <div class="prev_messages" style="overflow-y: scroll;">
                    <button class="container-fluid btn-block">Load Previous</button>
                    
                </div>
                <br>
                <div class="form-group">
                    <form class="message_form">
                        <label>Message:
                            <textarea class="form-control" name="message" cols="40" rows="5"></textarea>
                        </label>
                        <button class="btn send-message">Send</button>
                    </form>
                </div>
                
                
            </div>
            <div onclick="hideMessages($(this))" class="btn btn-block btn-info
             container-fluid message_collapse" style="display: none;">Less Messages</div>
        </div>
        
        
    </div>
</div>
POST;

}
<?php
include_once "total_mysql_commands.php";
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 12/16/17
 * Time: 4:20 PM
 */

if (isset($_POST['action'])) {
    switch ($_POST['action']) {
        case "send_message":
            send_message($_POST['user_id'], $_POST['message'], $_POST['chat_id']);
            break;
        case "send_checked_message":
            //might screw up when using this without having conn_id set in user_profile
            send_checked_message($_POST['user_id'], $_POST['friend_id'], $_POST['message']);
            break;
        case "remove_chat":
            removeChat($_POST['chat_id']);
            break;

    };
}



function send_message($owner_id, $message, $chat_id) {
    if (strlen($owner_id) > 20) {
        $owner_id = decrypt($owner_id);
    }
    //add message to chat lol
    addMessage($chat_id, $owner_id, $message);
}

//used when sending message in message_page.php from friends on sidebar. Will have $conn_id
//used when sending message in user_profile. $_SESSION['target_id'] will be set
function send_checked_message($owner_id, $friend_id, $message) {
    if (strlen($owner_id) > 20) {
        $owner_id = decrypt($owner_id);
    }
    if (strlen($friend_id) > 20) {
        $friend_id = decrypt($friend_id);
    }
    //check if there is a chat with the user
    $chat_id = hasChat($owner_id, $friend_id);
    if ($chat_id != False) {
        //if they have a chat, get id and send message
        addMessage($chat_id, $owner_id, $message);
    } else {
        //if they do not have a chat, create one and add message
        $chat_id = createChat($owner_id, $friend_id);
        //create second chat with friend's id
        create_chat($friend_id, $owner_id);
        addMessage($chat_id, $owner_id, $message);
    }
}





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
        case "getCurrentFriends": getCurrentFriends($_POST['user_id'], $_POST['offset'], $_POST['limit']);
            break;
        case "getSentFriends": getSentFriends($_POST['user_id'], $_POST['offset'], $_POST['limit']);
            break;
        case "getRequestFriends": getRequestFriends($_POST['user_id'], $_POST['offset'], $_POST['limit']);
            break;
        case "getChatExcludedFriends": getChatExcludedFriends($_POST['user_id'], $_POST['offset'], $_POST['limit']);
            break;
        case "getNormalFriends": getNormalFriends($_POST['user_id'], $_POST['offset'], $_POST['limit']);
            break;

    }
}

/****************** MY CHAT PAGE *******************************/

function getChatExcludedFriends($user_id, $offset, $limit) {
    if (strlen($user_id) > 20) {
        $user_id = decrypt($user_id);
    }
    //get user_logging rows for all friends without chats
    $friend_user_rows = get_chat_excluded_friends($user_id, $offset, $limit);
    if ($friend_user_rows) {
        while ($row = $friend_user_rows->fetch_assoc()) {
            //get connection id
            $photo_row_vitals = getPhotoRow($row['ppid']);
            $connection_id = getConnectionID($user_id, $row['id'], 0);
            displayMessageFriend($row, $photo_row_vitals, $connection_id);
        }
    }
}




/***************** MY FRIEND PAGE ********************************/
////need: friend_list_row, $friend_user_row, $friend_photo_vitals
function getCurrentFriends($user_id, $offset, $limit) {
    if (strlen($user_id) > 20) {
        $user_id = decrypt($user_id);
    }
    //need: connection row, friend row, friend photo vitals
    //get all friend rows from connection
    $friend_user_rows = getAllFriends($user_id, $offset, $limit, 0);
    if ($friend_user_rows) {
        while ($row = $friend_user_rows->fetch_assoc()) {
            //get user_row
            $photo_row_vitals = getPhotoRow($row['ppid']);
            $connection_id = getConnectionID($user_id, $row['id'], 0);
            displayFriend($row, $photo_row_vitals, $connection_id);
        }
    }
}

function getSentFriends($user_id, $offset, $limit) {
    if (strlen($user_id) > 20) {
        $user_id = decrypt($user_id);
    }
    //need: connection row, friend row, friend photo vitals

    //get all friend *_list rows
    $friend_user_rows = getAllFriends($user_id, $offset, $limit, 1);
    if ($friend_user_rows) {
        while ($row = $friend_user_rows->fetch_assoc()) {
            //get user_row
            $photo_row_vitals = getPhotoRow($row['ppid']);
            $connection_id = getConnectionID($user_id, $row['id'], 1);
            displaySentFriend($row, $photo_row_vitals, $connection_id);
        }
    }
}

function getRequestFriends($user_id, $offset, $limit) {
    if (strlen($user_id) > 20) {
        $user_id = decrypt($user_id);
    }
    //need: connection row, friend row, friend photo vitals

    //get all friend *_list rows
    $friend_user_rows = getAllFriends($user_id, $offset, $limit, 2);
    if ($friend_user_rows) {
        while ($row = $friend_user_rows->fetch_assoc()) {
            //get user_row
            $photo_row_vitals = getPhotoRow($row['ppid']);
            $connection_id = getConnectionID($user_id, $row['id'], 1);
            displayRequestFriend($row, $photo_row_vitals, $connection_id);
        }
    }
}

//gets all freinds with no buttons
function getNormalFriends($user_id, $offset, $limit) {
    if (strlen($user_id) > 20) {
        $user_id = decrypt($user_id);
    }
    $friend_user_rows = getAllFriends($user_id, $offset, $limit, 0);
    if ($friend_user_rows) {
        while ($row = $friend_user_rows->fetch_assoc()) {
            //get user_row
            $photo_row_vitals = getPhotoRow($row['ppid']);
            $connection_id = getConnectionID($user_id, $row['id'], 0);
            displayNormalFriend($row, $photo_row_vitals, $connection_id);
        }
    }
}



//right now I'm just going to display comments, but later, I want to display
//a thumbnail image of the comment owner and maybe their username or something

function displayNormalFriend($friend_user_row, $friend_photo_vitals, $connection_id)
{
    $c_friend_id = encrypt($friend_user_row['id']);

    echo <<<POST
<div class="container-fluid friend">
    <div class="conn-id" style="display: none">{$connection_id}</div>
    <div class="owner_id" style="display: none">{$c_friend_id}</div>
    <div class="friend_post card row">
        <div class="col-md-4 direction">
            <img onclick="setFriendVariables($(this)); window.location = 'user_profile.php';" class="img-responsive img-circle" src="../img/{$friend_photo_vitals['category']}/{$friend_photo_vitals['name']}">
            <h6 class="text-center"><a onclick="setFriendVariables($(this));" href="user_profile.php">{$friend_user_row['username']}</a></h6>
        </div>
        <div class="col-md-4 info">
            <p class="text-center">{$friend_user_row['f_name']}</p>
            
            <p class="text-center">{$friend_user_row['l_name']}</p>
        </div>
        <div class="col-md-4 friend-buttons">
        
        </div>
    </div>
</div>
POST;
}

function displayFriend($friend_user_row, $friend_photo_vitals, $connection_id)
{
    $c_friend_id = encrypt($friend_user_row['id']);

    echo <<<POST
<div class="container-fluid friend">
    <div class="conn-id" style="display: none">{$connection_id}</div>
    <div class="owner_id" style="display: none">{$c_friend_id}</div>
    <div class="friend_post card row">
        <div class="col-md-4 direction">
            <img onclick="setFriendVariables($(this)); window.location = 'user_profile.php';" class="img-responsive img-circle" src="../img/{$friend_photo_vitals['category']}/{$friend_photo_vitals['name']}">
            <h6 class="text-center"><a onclick="setFriendVariables($(this));" href="user_profile.php">{$friend_user_row['username']}</a></h6>
        </div>
        <div class="col-md-4 info">
            <p class="text-center">{$friend_user_row['f_name']}</p>
            <p class="text-center">{$friend_user_row['l_name']}</p>
        </div>
        <div class="col-md-4 friend-buttons">
            <button onclick="remove_friend($(this))" class="remove-friend-btn btn btn-danger">Remove</button>
        </div>
    </div>
</div>
POST;
}


function displayRequestFriend($friend_user_row, $friend_photo_vitals, $connection_id)
{
    $c_friend_id = encrypt($friend_user_row['id']);

    echo <<<POST
<div class="container-fluid friend">
    <div class="conn-id" style="display: none">{$connection_id}</div>
    <div class="owner_id" style="display: none">{$c_friend_id}</div>
    <div class="friend_post card row">
        <div class="col-md-4 direction">
            <img onclick="setFriendVariables($(this)); window.location = 'user_profile.php';" class="img-responsive img-circle" src="../img/{$friend_photo_vitals['category']}/{$friend_photo_vitals['name']}">
            <h6 class="text-center"><a onclick="setFriendVariables($(this));" href="user_profile.php">{$friend_user_row['username']}</a></h6>
        </div>
        <div class="col-md-4 info">
            <p class="text-center">{$friend_user_row['f_name']}</p>
            <p class="text-center">{$friend_user_row['l_name']}</p>
        </div>
        <div class="col-md-4 friend-buttons btn-group">
            <button onclick="accept_request($(this))" class="accept-request-btn btn btn-success">Accept</button>
            <button onclick="decline_request($(this))" class="decline-request-btn btn btn-danger">Decline</button>
        </div>
    </div>
</div>
POST;
}


function displaySentFriend($friend_user_row, $friend_photo_vitals, $connection_id)
{
    $c_friend_id = encrypt($friend_user_row['id']);

    echo <<<POST
<div class="container-fluid friend">
    <div class="conn-id" style="display: none">{$connection_id}</div>
    <div class="owner_id" style="display: none">{$c_friend_id}</div>
    <div class="friend_post card row">
        <div class="col-md-4 direction">
            <img onclick="setFriendVariables($(this)); window.location = 'user_profile.php';" class="img-responsive img-circle" src="../img/{$friend_photo_vitals['category']}/{$friend_photo_vitals['name']}">
            <h6 class="text-center"><a onclick="setFriendVariables($(this));" href="user_profile.php">{$friend_user_row['username']}</a></h6>
        </div>
        <div class="col-md-4 info">
            <p class="text-center">{$friend_user_row['f_name']}</p>
            <p class="text-center">{$friend_user_row['l_name']}</p>
        </div>
        <div class="col-md-4 friend-buttons">
            <button onclick="cancel_request($(this))" class="cancel-request-btn btn btn-danger">Cancel</button>
        </div>
    </div>
</div>
POST;
}


function displayMessageFriend($friend_user_row, $friend_photo_vitals, $connection_id)
{
    $c_friend_id = encrypt($friend_user_row['id']);

    echo <<<POST
<div class="container-fluid friend">
    <div class="conn-id" style="display: none">{$connection_id}</div>
    <div class="owner_id" style="display: none">{$c_friend_id}</div>
    <div class="friend_post card row">
        <div class="col-md-4 direction">
            <img onclick="setFriendVariables($(this)); window.location = 'user_profile.php';" class="img-responsive img-circle" src="../img/{$friend_photo_vitals['category']}/{$friend_photo_vitals['name']}">
            <h6 class="text-center"><a onclick="setFriendVariables($(this))" href="user_profile.php">{$friend_user_row['username']}</a></h6>
        </div>
        <div class="col-md-4 info">
            <p class="text-center">{$friend_user_row['f_name']}</p>
            <p class="text-center">{$friend_user_row['l_name']}</p>
        </div>
        <div class="col-md-4 friend-buttons">
            <button onclick="showMessageModal($(this));"
            class="message-submit-btn btn btn-primary" data-toggle="modal" data-target="#myModal2">Message</button>
        </div>
    </div>
</div>
POST;
}
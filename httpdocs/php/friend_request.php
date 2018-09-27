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
        case "send_request":
            send_friend_request($_SESSION['user_id'], $_POST['friend_id']);
            break;
        case "accept_request":
            accept_friend_request($_SESSION['user_id'], $_POST['conn_id']);
            break;
        case "decline_request":
            decline_friend_request($_SESSION['user_id'], $_POST['conn_id']);
            break;
        case "cancel_request":
            cancel_sent_request($_SESSION['user_id'], $_POST['conn_id']);
            break;
        case "remove_friend":
            remove_friend($_SESSION['user_id'], $_POST['conn_id']);
            break;
        case "are_friends":
            are_friends($_SESSION['user_id'], $_POST['friend_id']);
            break;


    };
}



/*******************  FRIEND FUNCTIONS  **************************/
//returns '1' if they are friends
//returns '2' if they are connected
//returns '0' if no association
function are_friends($user_id, $friend_id) {
    $hn = 'db715263433.db.1and1.com';
    $db = 'db715263433';
    $un = 'dbo715263433';
    $pw = '1Lovecandy!';
    $conn = new mysqli($hn, $un, $pw, $db);
    if ($conn->connect_error) die($conn->connect_error);
    //this query will return 1 if the users are friends
    //return 0 if they are not
    //'areFriends' is what it's renamed to
    $query = "SELECT count(*) AS areConnected FROM connections
              WHERE id_one=$user_id AND id_two=$friend_id
              OR id_one=$friend_id AND id_two=$user_id;";
    $res = $conn->query($query);
    if ($res) {
        $areConnected = $res->fetch_assoc()['areConnected'];
        //if they're connected, check if they're friends
        if ($areConnected > 0) {
            $query = "SELECT count(*) AS areFriends FROM friend_list
                      WHERE user_id=$user_id AND friend_id=$friend_id;";
            $res = $conn->query($query);
            $areFriends = $res->fetch_assoc()['areFriends'];
            if($areFriends > 0) {
                echo '1';
            }else {
                echo '2';
            }
        }else {
            echo '0';
        }
    }

}

function send_friend_request($sender_id, $recipient_id) {
    //get both user rows
    $friend_user_row = getUserRow($recipient_id, "user_loging");
    if ($friend_user_row) {
        $user_row = getUserRow($sender_id, "user_loging");
        //create connection record
        $connection_id = createConnectionRecord($sender_id, $recipient_id);
        //create sent_list record for user_id
        createListRecord($sender_id, $recipient_id, $friend_user_row['l_name'], $connection_id, 'sent_list');
        //create request_list record for friend_id
        createListRecord($recipient_id, $sender_id, $user_row['l_name'], $connection_id, 'request_list');
    }
}

function decline_friend_request($user_id, $conn_id) {
    //delete connection_request row
    deleteRow('connection_request', 'id', $conn_id);
    //might want to add user to a banned list later on, so they cant pester people
}

function accept_friend_request($user_id, $conn_id) {
    //get friend's id
    $friend_id = getFriendID($user_id, $conn_id, 1);
    //delete connection_request row
    deleteRow('connection_request', 'id', $conn_id);
    //add connection record
    addFriend($user_id, $friend_id);
}

function remove_friend($user_id, $conn_id) {
    //delete connection row
    deleteRow('connection', 'id', $conn_id);
}

function cancel_sent_request($user_id, $conn_id) {
    //delete connection_request row
    deleteRow('connection_request', 'id', $conn_id);
}


<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 9/15/18
 * Time: 6:29 PM
 */

switch($_POST['action']) {
    case "getUserStatus":
        getUserStatus($_POST['user_id'], $_POST['offset'], $_POST['limit']);
        break;
    case "uploadStatus":

}





function getUserStatus($user_id, $offset, $limit) {

}







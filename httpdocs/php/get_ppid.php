<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 11/22/17
 * Time: 1:14 PM
 */
$hn = 'db707393488.db.1and1.com';
$db = 'db707393488';
$un = 'dbo707393488';
$pw = '1Lovecandy!';
$conn = new mysqli($hn, $un, $pw, $db);
if ($conn->connect_error) die($conn->connect_error);
$user_id = $_POST['user_id'];
$query = "SELECT profile_photo_id FROM user_loging WHERE id=$user_id;";
$result = $conn->query();
$ret = $result->fetch_assoc()['profile_photo_id'];
$conn->close();
echo $ret;
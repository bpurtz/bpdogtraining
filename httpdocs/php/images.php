<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 9/6/18
 * Time: 2:36 PM
 */
include_once "total_mysql_commands.php";
switch($_POST['action']) {
    case 'getPhotos': getThumbPhotos($_POST['user_id'], $_POST['offset'], $_POST['limit'], false);
    break;

}



function getThumbPhotos($user_id, $offset, $limit, $ppid) {
    //check if need to decrypt
    if (strlen($user_id) > 20) {
        $user_id = decrypt($user_id);
    }
    $photo_rows = getPhotoRows($user_id, $ppid, $offset, $limit);
    /*
    echo "SELECT * FROM photo_data WHERE owner_id=$user_id LIMIT $offset,$limit;";
    if ($photo_rows) {
        echo $photo_rows->fetch_assoc()['name'];
    }
    */
    while($row = $photo_rows->fetch_assoc()) {
        displayThumb($row);
    }
}



function displayThumb($photo_row) {
    if ($photo_row['name'] !== '') {
        $rel_path = '../img/' . $photo_row['category'] . '/' . $photo_row['name'];

        echo "<div class=\"photo\">";
        echo '<img class="img-responsive img-thumbnail" ' . "src=\"$rel_path\">";
        echo "</div>";
    }


}
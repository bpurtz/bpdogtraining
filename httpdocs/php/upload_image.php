<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 11/20/17
 * Time: 3:19 PM
 */
/**********************  STARTING POINT   ******************************/
include_once "total_mysql_commands.php";
//$_POST['label']  $_POST['description'] $_POST['tags'] $_POST['category'] $_POST['update_ppid'] $_FILES['file']['name'];
//echo $_FILES['file']['tmp_name'];

if (isset($_FILES['file']['name'])) {

    if (0 < $_FILES['file']['error']) {
        echo 'Error during file upload' . $_FILES['file']['error'];
    } else {
        $category = preg_replace('/\s+/', '', sanitizeString($_POST['category']));
        $file_name = preg_replace('/\s+/', '', $_FILES['file']['name']);

        $pet_id_array = json_decode($_POST['pets']);



        $path = '/var/www/vhosts/animaldevelopement.com/httpdocs/img/'. $category . '/' . $file_name;
        if (file_exists($path)) {
            echo 'taken';
        } else {
            $user_id = $_SESSION['user_id'];
            //insert photo data into database
            $new_photo_id = insertPhotoDetails();
            //for each pet tagged, make a pet_photo record
            foreach ($pet_id_array as $pet_id) {
                uploadPetPhotoTag($pet_id, $new_photo_id);
            }
            move_uploaded_file($_FILES['file']['tmp_name'], $path);

            $uploaded_file = "../img/$category/$file_name";
            $resized_image = "../img/$category/$user_id" . "_" . $file_name;
            $exe = getExtension($file_name);
            ak_img_resize($uploaded_file, $resized_image, 250, 200, $exe);
            unlink($uploaded_file);
            if ($_POST['update_ppid']) {
                updateUserField("ppid", $new_photo_id);
                echo $path;
            }
        }
    }
} else {
    echo 'Please choose a file';
}





/************* insert methods  ****************/
function insertPhotoDetails() {
    if (isset($_POST['label'])) {
        $label = sanitizeString($_POST['label']);
        $description = preg_replace('/\s+/', '', sanitizeString($_POST['description']));
        $tags = preg_replace('/\s+/', '', sanitizeString($_POST['tags']));
        //HERE
        $s_user_id = (string)$_SESSION['user_id'];
        $category = preg_replace('/\s+/', '', sanitizeString($_POST['category']));
        $location = $s_user_id . "_" . preg_replace('/\s+/', '', $_FILES['file']['name']);
        $user_id = $_SESSION['user_id'];

    }
    //echo $label . '    ' . $description . '    ' . $tags . '   ' . $s_user_id . '   ' . $category . '    ' . $location;

    $mysql = new my_mysql();
    //query to upload photo
    $query = "INSERT INTO photo_data (owner_id, category, name, tags, description, label, post_date) 
              VALUES('$user_id', '$category', '$location', '$tags', '$description', '$label', now());";
    $mysql->transactionQuery($query);
    return $mysql->insert_id;

}



/************  image manipulation   *****************/
function ak_img_resize($target, $newcopy, $w, $h, $ext) {
    list($w_orig, $h_orig) = getimagesize($target);
    $scale_ratio = $w_orig / $h_orig;
    if (($w / $h) > $scale_ratio) {
        $w = $h * $scale_ratio;
    } else {
        $h = $w / $scale_ratio;
    }
    $img = "";
    $ext = strtolower($ext);
    if ($ext == "gif"){
        $img = imagecreatefromgif($target);
    } else if($ext =="png"){
        $img = imagecreatefrompng($target);
    } else {
        $img = imagecreatefromjpeg($target);
    }
    $tci = imagecreatetruecolor($w, $h);
    // imagecopyresampled(dst_img, src_img, dst_x, dst_y, src_x, src_y, dst_w, dst_h, src_w, src_h)
    imagecopyresampled($tci, $img, 0, 0, 0, 0, $w, $h, $w_orig, $h_orig);
    imagejpeg($tci, $newcopy, 80);
}

function getExtension($str) {

    $i = strrpos($str,".");
    if (!$i) { return ""; }
    $l = strlen($str) - $i;
    $ext = substr($str,$i+1,$l);
    return $ext;
}


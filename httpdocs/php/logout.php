<?php
session_start();
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 11/20/17
 * Time: 12:14 AM
 */
if (isset($_SESSION[session_name()])) {
    setcookie( session_name(), “”, time()-3600, “/” );
}
$_SESSION = array();
//clear session from disk
session_destroy();
header(
    "Location: ../index.html"
);

?>
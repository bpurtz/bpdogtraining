<?php
session_start();
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 11/6/17
 * Time: 10:26 PM
 */

/************************* SUPPORTING METHODS **********************************/
include_once "total_mysql_commands.php";
include_once "display_problems.php";
/***************** Starting Point ******************/
if ($_SERVER['HTTPS'] != "on") {
    $url = "https://". $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI'];
    header("Location: $url");
    exit;
}
if (isset($_COOKIE['target_id']) || isset($_SESSION['target_id'])):
    unset($_COOKIE['target_id']);

?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <title>BPdogtraining login</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="../css/posts.css">
        <link rel="stylesheet" href="../css/my_profile.css">
        <link rel="stylesheet" href="../css/jquery-ui.min.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
        <script type="text/javascript" src="../lib/jquery.js"></script>
        <script src="../lib/jquery-ui.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>

        <link rel="stylesheet" href="../css/social-general.css">
 
        <script src="../lib/js-cookie.js"></script>
        <script src="../js/comment_commands.js"></script>


    </head>
    <body>
    <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
        <div class="navbar-header">
            <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#myNavbar">
                <span class="navbar-toggler-icon"></span>
            </button>
            <a class="navbar-brand" href="login_landing.php">BPdogtraining</a>
        </div>
        <div class="collapse navbar-collapse nav-container" id="myNavbar">
            <div>
                <ul class="navbar-nav">
                    <li class="nav-item"><a class="nav-link" href="../index.html">Training Grounds</a></li>
                    <li class="nav-item"><a class="nav-link" href="friend_page.php">User's Friends</a></li>
                    <li class="nav-item"><a class="nav-link" href="public_forum.php">Public Forum</a></li>
                    <li class="nav-item"><a class="nav-link" href="message_page.php"><span class="glyphicon glyphicon-envelope"></span> Messages</a></li>
                </ul>
            </div>
            <div>
                <ul class="navbar-nav">
                    <form class="form-inline" action="friend_search.php" method="post">
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="Search" name="friend_name">
                            <button class="btn btn-default" type="submit">
                                <img src="../svg/magnifying-glass.svg" alt="magnifying-glass" id="nav-search-icon">
                            </button>
                        </div>
                    </form>
                    <li class="nav-item"><a class="nav-link" href="login_landing.php"><span class="glyphicon glyphicon-user"></span> My Profile</a></li>
                    <li class="nav-item"><a class="nav-link" href="logout.php"><span class="glyphicon glyphicon-log-in"></span> Logout</a></li>
                </ul>
            </div>
        </div>
    </nav>



    <section class="body container-fluid">



        <div class="container-fluid">
            <div class="row">
                <div class="col-md-3">
                    <img id="profile_photo" class="img-responsive img-thumbnail" src="../img/<?php
                    $photo_row = getPhotoRows($_SESSION['target_id'], True);
                    //echo out necessary data
                    if ($photo_row) {
                        $photo_row = $photo_row->fetch_assoc();
                        echo $photo_row['category'] . '/' . $photo_row['name'];
                    }?>">
                </div>
                <div class="col-md-9 flex-container" id="photo_div">
                    <div id="photo_album" class="row container-fluid">
<?php
                        //get first 6 photo rows
                        $user_id = $_SESSION['target_id'];

                        $user_row = getUserRow($user_id);
                        $photo_rows = getPhotoRows($user_id, False, 0, 6);
                        if ($photo_rows) {
                            while ($row = $photo_rows->fetch_assoc()) {
                                if ($row['id'] === $user_row['ppid']) {
                                    //continue;
                                }
                                $category = $row['category'];
                                $location = $row['name'];
                                $rel_path = '../img/' . $category . '/' . $location;
                                if (file_exists($rel_path)) {
                                    echo "<div class=\"photo\">";
                                    echo '<img class="img-responsive img-thumbnail" ' . "src=\"$rel_path\">";
                                    echo "</div>";
                                }
                            }
                        }else {
                            echo "no photos";
                        }


?>

                    </div>

                    </div>
                    <div class="row btn-group">
                        <button onclick="send_request($(this), localStorage.user_id, localStorage.target_id)" type="button" id="user_profile_request_button" class="btn btn-primary">Send friend request</button>
                        <button type="button" id="user_profile_message_button" class="btn btn-primary" data-toggle="modal" data-target="#myModal2">Send Message</button>
                    </div>
                        <div id="myModal2" class="modal fade" role="dialog">
                            <div class="modal-dialog">
                                <!-- Modal content-->
                                <div class="modal-content">
                                    <h1 class="text-center">Message</h1><br/>
                                    <hr>
                                    <div class="container-fluid">
                                        <form  id="send_message" class="form-horizontal">
                                            <div class="form-group">
                                                <div class="col-sm-offset-2 col-sm-10">
                                                    <textarea class="message-input form-control"></textarea>
                                                    <input id="message_submit" type="submit" value="submit">
                                                    <script type="text/javascript">
                                                        $("#message_submit").click(function() {
                                                            let message = $(this).siblings("textarea").val();
                                                            //alert(message + "  " + user_id + "  " + friend_id);
                                                            send_checked_message(localStorage.user_id, localStorage.target_id, message);
                                                        });


                                                    </script>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-4">
                <h3>About Me</h3>
                <p>
<?php
                    echo getUserField($_SESSION['target_id'], "about_me");
?>
                </p>
            </div>
            <div class="posts col-md-8">
                <?php getProblems($_SESSION['target_id'], 0, 10); ?>
                <!-- TEMPLATE
                <div class="panel container-fluid">
                    <div class="panel-group">
                        <div class="panel-heading">
                            header
                        </div>
                        <div class="panel-body">
                            main
                        </div>
                        <div class="panel-footer">
                            comments will go here
                        </div>
                    </div>
                </div>
                -->

            </div>
        </div>

    </section>


    <script src="../js/user_profile_commands.js"></script>
    <script src="../js/comment_commands.js"></script>
    <script src="../js/post_commands.js"></script>

    </body>
    </html>

<?php endif;

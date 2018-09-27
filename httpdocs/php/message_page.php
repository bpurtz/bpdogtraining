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
include_once "display_chats.php";
/***************** Starting Point ******************/
// Require https
if ($_SERVER['HTTPS'] != "on") {
    $url = "https://". $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI'];
    header("Location: $url");
    exit;
}

if (isset($_SESSION['user_id'])):?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <title>BPdogtraining login</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="../css/friends.css">
        <link rel="stylesheet" href="../css/chats.css">

        <link rel="stylesheet" href="../css/social-general.css">
        <link rel="stylesheet" href="../css/jquery-ui.min.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">

        <script type="text/javascript" src="../lib/jquery.js"></script>
        <script src="../lib/jquery-ui.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
        <script src="../lib/js-cookie.js"></script>
        <script src="../js/user_profile_commands.js"></script>

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
                    <li class="nav-item"><a class="nav-link" href="friend_page.php">Friends</a></li>
                    <li class="nav-item"><a class="nav-link" href="public_forum.php">Public Forum</a></li>
                    <li class="nav-item active"><a class="nav-link" href="message_page.php"><span class="glyphicon glyphicon-envelope"></span> Messages</a></li>
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
        <div class="row main-container">

            <div class="messages col-md-9 container-fluid">
                <h4 class="text-center">Chats</h4>
                <script type="text/javascript">
                    $(document).ready(function() {
                        getFriendChats(localStorage.getItem('user_id'), 0, 10);
                        setupMessages();
                    });
                </script>
            </div>

            <div class="friends col-md-3">
                <h4 class="text-center">Friends</h4>
                <script type="text/javascript">
                    $(document).ready(function() {
                        getChatExcludedFriends(localStorage.getItem('user_id'), 0, 5);
                    });

                </script>
            </div>
        </div>
        <div id="myModal2" class="modal fade" role="dialog">
            <div class="friend-modal-id">

            </div>
            <div class="modal-dialog">
                <!-- Modal content-->
                <div class="modal-content">
                    <h1 class="text-center">Message</h1><br/>
                    <hr>
                    <div class="container-fluid">
                        <form  id="send_message" class="form-horizontal">
                            <div class="form-group">
                                <div class="col-sm-12">
                                    <textarea rows="12" class="message-input form-control"></textarea>
                                    <input id="message_submit" type="submit" value="submit">
                                    <script type="text/javascript">
                                        $("#message_submit").click(function() {
                                            let message = $(this).siblings("textarea").val();
                                            let friend_id = $(this).parents("#myModal2").find(".friend-modal-id:first").text();
                                            //alert(message + "  " + user_id + "  " + friend_id);
                                            send_checked_message(localStorage.getItem('user_id'), localStorage.getItem('target_id'), message);
                                        });


                                    </script>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script src="../js/chat_commands.js"></script>
    <script src="../js/friend_commands.js"></script>
    </body>
    </html>
<?php else: ?>
    <script type="text/javascript">
        if (localStorage.getItem('user_id') != null) {
            setVar('user_id', localStorage.getItem('user_id'));
        }
        location.reload();
    </script>
<?php endif ?>
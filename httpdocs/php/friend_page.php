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
include_once "display_friends.php";
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
        <link rel="stylesheet" href="../css/friends.css">
        <link rel="stylesheet" href="../css/jquery-ui.min.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">

        <script type="text/javascript" src="../lib/jquery.js"></script>
        <script src="../lib/jquery-ui.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
        <script src="../lib/js-cookie.js"></script>
        <script src="../js/friend_commands.js"></script>
        <link rel="stylesheet" href="../css/social-general.css">


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
                    <li class="nav-item active"><a class="nav-link" href="friend_page.php">User's Friends</a></li>
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
        <div class="row">
            <div class="col-md-3 sent-requests container-fluid">

            </div>
            <div class="col-md-6 friends container-fluid">
                <div class="top text-center"><h3>Friends</h3></div>
                <script>
                    getNormalFriends(localStorage.target_id, 0, 20);
                </script>
            </div>
            <div class="col-md-3 received-requests container-fluid">

            </div>
        </div>


    </section>

    <script src="../js/friend_page_commands.js"></script>
    </body>
    </html>

<?php elseif(isset($_SESSION['user_id'])): ?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <title>BPdogtraining login</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="../css/friends.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="../css/social-general.css">
        <link rel="stylesheet" href="../css/jquery-ui.min.css">

        <script src="../lib/jquery.js"></script>
        <script src="../lib/jquery-ui.min.js"></script>
        <script src="../lib/js-cookie.js"></script>
        <script src="../js/friend_commands.js"></script>


    </head>
    <body>
    <div id="user-id"><?php echo $_SESSION['user_id']; ?></div>

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
                    <li class="nav-item active"><a class="nav-link" href="friend_page.php">Friends</a></li>
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
        <div class="row">
            <div class="col-md-3 sent-requests container-fluid">
                <div class="top text-center"><h3>Sent Requests</h3></div>
                <script>
                    getSentFriends(user_id, 0, 20);
                </script>
            </div>
            <div class="col-md-6 friends container-fluid">
                <div class="top text-center"><h3>Friends</h3></div>
                <script>
                    getCurrentFriends(user_id, 0, 20);
                </script>
            </div>
            <div class="col-md-3 received-requests container-fluid">
                <div class="top text-center"><h3>Received Requests</h3></div>
                <script>
                    getRequestFriends(user_id, 0, 20);
                </script>
            </div>
        </div>


    </section>





    <script src="../js/friend_page_commands.js"></script>
    <script>
        setupOwnedFriends();
    </script>
    </body>
    </html>


<?php endif ?>
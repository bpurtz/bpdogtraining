<?php
include_once "total_mysql_commands.php";
include_once "display_problems.php";
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 11/29/17
 * Time: 5:18 PM
 */




if ($_SERVER['HTTPS'] != "on") {
    $url = "https://". $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI'];
    header("Location: $url");
    exit;
}



//plan is to have two bodies, one for problems, and one for solutions.
//will load on the problems page, but on a internal-page tab, you can
//press it it hide the problem section and show the solution section
if (isset($_SESSION['user_id'])):?>
<!DOCTYPE html>
    <html lang="en">
    <head>
        <title>BPdogtraining login</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="../css/social-general.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
        <link rel="stylesheet" href="../css/jquery-ui.min.css">
        <script type="text/javascript" src="../lib/jquery.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="../css/posts.css">
        <link rel="stylesheet" href="../css/public_forum.css">
        <script src="../lib/jquery-ui.min.js"></script>
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
                    <li class="nav-item"><a class="nav-link" href="friend_page.php">Friends</a></li>
                    <li class="nav-item active"><a class="nav-link" href="public_forum.php">Public Forum</a></li>
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


    <div class="public-forum-controls row">
        <form class="form-inline">
            <div class="form-group">
                <button class="btn btn-warning" id="clear-search" style="display: none" type="submit">Clear Search</button>
                <input type="text" class="form-control" placeholder="Search Problems" name="problem-search" id="problem-search">
                <button class="btn btn-default" id="problem-search-btn" disabled="disabled" type="submit">Search</button>
            </div>
        </form>
    </div>
    <section class="posts container-fluid">
        <?php
            getPublicProblems(0, 10);
        ?>
    </section>

</body>
    <script src="../js/public_forum_commands.js"></script>
    <script src="../js/post_commands.js"></script>
</html>
<?php else: ?>
    <script type="text/javascript">
        if (localStorage.getItem('user_id') != null) {
            setVar('user_id', localStorage.getItem('user_id'));
        }
        location.reload();
    </script>
<?php endif; ?>











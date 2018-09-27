<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 11/27/17
 * Time: 5:39 PM
 */
include_once "total_mysql_commands.php";
function insertProblem() {
    //post info
    $title = $_POST['title'];
    $pet = $_POST['petRadio'];
    $tags = $_POST['tags'];
    $history = $_POST['history'];
    $description = $_POST['description'];
    $solutions_attempted = $_POST['solutions'];
    $reaction = $_POST['reaction'];
    $notes = $_POST['notes'];

    //other info
    $owner_id = $_SESSION['user_id'];

    //get mysql object
    $mysql = new my_mysql();

    //build query
    $query = "INSERT INTO problem(owner_id, post_date, tags, title, history, description, solutions_attempted, reaction, notes, pet_id)
              VALUES('$owner_id', now(), '$tags', '$title', '$history', '$description', '$solutions_attempted', '$reaction', '$notes', '$pet');";
    $res = $mysql->transactionQuery($query);
    if ($res) {
        header("Location: login_landing.php");
    }
}


//starting point

if (isset($_POST['title'])) {
    insertProblem();
    //header("Location: login_landing.php");
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>BPdogtraining login</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="../css/jquery-ui.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">

    <script type="text/javascript" src="../lib/jquery.js"></script>
    <script src="../lib/jquery-ui.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
    <script src="../lib/js-cookie.js"></script>


</head>
<body>


<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#myNavbar">
                <span class="navbar-toggler-icon"></span>
            </button>
            <a class="navbar-brand" href="login_landing.php">BPdogtraining</a>
        </div>
        <div class="collapse navbar-collapse" id="myNavbar">

            <ul class="navbar-nav">
                <li class="nav-item"><a class="nav-link" href="../index.html">Training Grounds</a></li>
                <li class="nav-item"><a class="nav-link" href="friend_page.php">Friends</a></li>
                <li class="nav-item"><a class="nav-link" href="public_forum.php">Public Forum</a></li>
                <li class="nav-item"><a class="nav-link" href="message_page.php"><span class="glyphicon glyphicon-envelope"></span> Messages</a></li>
            </ul>

            <ul class="nav navbar-nav navbar-right">
                <form class="form-inline" action="friend_search.php" method="post">
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Search" name="friend_name">
                        <button class="btn btn-default" type="submit">
                            <img src="../svg/magnifying-glass.svg" alt="magnifying-glass" id="nav-search-icon">
                        </button>
                    </div>
                </form>
                <li class="active nav-item"><a class="nav-link" href="login_landing.php"><span class="glyphicon glyphicon-user"></span> My Profile</a></li>
                <li class="nav-item"><a class="nav-link" href="logout.php"><span class="glyphicon glyphicon-log-in"></span> Logout</a></li>
            </ul>

        </div>
    </div>
</nav>



<section class="body container">
    <form  id="upload_problem" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" enctype="multipart/form-data">
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="title" class="col-2">Title</label>
                <input type="text" maxlength="40" class="form-control col-10" id="title" name="title" required placeholder="Ex: Digging Dooper">
            </div>

            <div class="form-group col-md-6">
                <label class="form-label" for="tags">Tags</label>
                <input type="text" maxlength="40" class="form-control" id="tags" name="tags" required placeholder="Ex: jumping,jump,dig,digging,problem">
            </div>
        </div>
        <div class="row">
            <legend class="col-form-label col-sm-2 pt-0">Tag Pet</legend>
            <div class="col-sm-10">
                <?php
                $user_id = $_SESSION['user_id'];
                //get mysql object
                $mysql = new my_mysql();
                //get column from table
                $query = "SELECT * FROM pet WHERE owner_id=$user_id;";
                $res = $mysql->readQuery($query);
                if ($res) {
                    while($row = $res->fetch_assoc()) {
                        echo <<<POST
<div class="form-check">
    <input class="form-check-input" type="radio" name="petRadio" id="pet{$row['id']}" value="{$row['id']}"/>
    <label class="form-check-label" for="pet{$row['id']}">
        {$row['name']}
    </label>
</div>                   
POST;

                    }
                }
                ?>

                <!--
                template:
                    <div class='form-check'>
                        <input class="form-check-input" type="radio" name="petRadio" id="pet{id} value="{name}">
                        <label class="form-check-label" for="pet{id}>
                        <input hidden name="petID" value="{id}">
                    </div>

                -->
            </div>
        </div>
        <br/>
        <br/>
        <div class="form-group row">
            <label for="history" class="col-sm-2 col-form-label">History</label>
            <div class="col-sm-10">
                <textarea class="form-control" required rows="7" name="history" id="history" placeholder="Give a brief history of your pet that may relate to this problem." maxlength="1000"></textarea>
            </div>
        </div>

        <div class="form-group row">
            <label for="description" class="col-sm-2 col-form-label">Description</label>
            <div class="col-sm-10">
                <textarea class="form-control" required rows="10" name="description" id="description" placeholder="Describe the problem to the best of your abilities. The more detail the better." maxlength="1500"></textarea>
            </div>
        </div>

        <div class="form-group row">
            <label for="solutions" class="col-sm-2 col-form-label">Solutions Attempted</label>
            <div class="col-sm-10">
                <textarea class="form-control" required rows="7" name="solutions" id="solutions" placeholder="What solutions have you attempted with this problem?" maxlength="1000"></textarea>
            </div>
        </div>

        <div class="form-group row">
            <label for="reaction" class="col-sm-2 col-form-label">Reaction</label>
            <div class="col-sm-10">
                <textarea class="form-control" required rows=7" name="reaction" id="reaction" placeholder="What reactions did your dog have to your solutions? Physical cues, attitude, anything that is relevant." maxlength="1000"></textarea>
            </div>
        </div>

        <div class="form-group row">
            <label for="notes" class="col-sm-2 col-form-label">Notes</label>
            <div class="col-sm-10">
                <textarea class="form-control" required rows="7" name="notes" id="notes" placeholder="Any additional information that would help trainers with solving this problem." maxlength="1000"></textarea>
            </div>
        </div>

        <div class="form-group row">
            <div class="col-sm-12">
                <button type="submit" class="form-control btn btn-primary">Submit</button>
            </div>
        </div>
    </form>
</section>



</body>
</html>













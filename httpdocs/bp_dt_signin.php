<?php
if ($_SERVER['HTTPS'] != "on") {
    $url = "https://". $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI'];
    header("Location: $url");
    exit;
}
?>
<!DOCTYPE html>
<html>
<head>


    <title>BPdogtraining Sign Up</title>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <script type="text/javascript" src="lib/jquery.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="css/static-general.css">

    <script type="text/javascript" src="js/verify_commands.js"></script>
</head>
<body>
    <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#myNavbar">
                    <span class="navbar-toggler-icon"></span>
                </button>
            <a class="navbar-brand" href="#">BPdogtraining</a>
        </div>
        <div class="collapse navbar-collapse" id="myNavbar">

            <ul class="navbar-nav">
                <li class="nav-item"><a class="nav-link" href="index.html">Home</a></li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#">Principals of Dog Training</a>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="bp_dt_command_training_principals.php">Command Training</a>
                        <a class="dropdown-item" href="bp_dt_problem_behavior_principals.php">Problem Behaviors</a>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#">Puppy Commands</a>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="bp_dt_puppy_talk.php">Puppy Talk</a>
                        <a class="dropdown-item" href="bp_dt_name_recognition.php">Name Recognition</a>
                        <a class="dropdown-item" href="bp_dt_sit_down_stay.php">Sit/Down/Stay</a>
                        <a class="dropdown-item" href="bp_dt_heel.php">Heel</a>
                        <a class="dropdown-item" href="bp_dt_come.php">Come</a>
                        <a class="dropdown-item" href="bp_dt_side.php">Side</a>
                        <a class="dropdown-item" href="bp_dt_touch.php">Touch</a>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#">Advanced Commands</a>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="bp_dt_targeting.php">Targeting</a>
                        <a class="dropdown-item" href="bp_dt_posing.php">Posing</a>
                        <a class="dropdown-item" href="bp_dt_ashamed.php">Ashamed</a>
                        <a class="dropdown-item" href="bp_dt_controlled_tow.php">Controlled Tug-of-war</a>
                        <a class="dropdown-item" href="bp_dt_fetch.php">Fetch</a>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#">Problem Behaviors</a>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="bp_dt_jumping.php">Jumping</a>
                        <a class="dropdown-item" href="bp_dt_chewing.php">Chewing</a>
                        <a class="dropdown-item" href="bp_dt_digging.php">Digging</a>
                        <a class="dropdown-item" href="bp_dt_barking.php">Barking</a>
                        <a class="dropdown-item" href="bp_dt_mouthing.php">Mouthing/Nipping</a>
                        <a class="dropdown-item" href="bp_dt_anxiety.php">Anxiety</a>
                        <a class="dropdown-item" href="bp_dt_aggression.php">Aggression</a>
                    </div>
                </li>
                <li class="nav-item"><a class="nav-link" href="bp_dt_blog.php">Blog</a></li>
            </ul>
            <ul class="navbar-nav navbar-right">
                <li class="nav-item active"><a class="nav-link" href="bp_dt_signup.php">Sign Up</a></li>

                <li class="nav-item"><a class="nav-link" href="bp_dt_signin.php">Login</a></li>

            </ul>
        </div>
    </div>
    </nav>

<section class="sign_up container-fluid">
    <form action="php/login_landing.php" method="POST">
        <div class="form-group">
            <input hidden="hidden" name="form_type" value="sign_in">
            <label>Username:
                <p id="username_error" style="display:none; color: red;">(Username not found)</p>
                <input class="form-control" required="required" type="text" name="username">
            </label>
            <label>Password:
                <input class="form-control" required="required" type="password" name="password">
            </label>
            <input class="form-control" type="submit" value="Sign in">
        </div>

    </form>
</section>
</body>
</html>
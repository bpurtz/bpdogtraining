<?php
session_start();
?>
<!--
 * Created by PhpStorm.
 * User: admin
 * Date: 9/8/18
 * Time: 12:30 AM
 */

/*
Author: Benjamin Purtzer
Date: August 25, 2017
Supporting files:
-
-
-
-
-
-
-
-
-->

 <!DOCTYPE html>





 <html>
 <head>

 	<title></title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <script type="text/javascript" src="lib/jquery.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="css/static-general.css">

    <link rel="stylesheet" type="text/css" href="css/index.css">
    <script type="text/javascript" src="lib/js-cookie.js"></script>
    <script type="text/javascript">
    $(document).ready(function(){
            if ('<?php echo $_SESSION['user_id']; ?>' !== '') {
                $("[href='bp_dt_signin.php']").html("<span class=\"glyphicon glyphicon-log-in\"></span> Social");
                $("[href='bp_dt_signin.php']").attr("href", "php/login_landing.php");
            }
        });
    </script>

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
                <li class="nav-item active"><a class="nav-link" href="index.html">Home</a></li>
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
                <li class="nav-item"><a class="nav-link" href="bp_dt_signup.php">Sign Up</a></li>

                <li class="nav-item"><a class="nav-link" href="bp_dt_signin.php">Login</a></li>

            </ul>
        </div>
    </div>
	</nav>




	<div class="container">
		<h2 class="text-center">Principals of Dog Training</h2>
		<div class="row">


			<div class="col-md-3">
				<ul>
				<li><a href="bp_dt_command_training_principals.html">Command Training Principals</a>
					<ul>
						<li><a href="bp_dt_command_training_principals.html#motivaing_force">Motivating Force</a></li>
						<li><a href="bp_dt_command_training_principals.html#basic_training_techniques">Basic Training Techniques</a></li>
						<li><a href="bp_dt_command_training_principals.html#where_to_start">Where To Start</a></li>
					</ul>
				</li>
				</ul>
			</div>
			<div class="col-md-3">
				<ul>
				<li><a href="bp_dt_problem_behavior_principals.html">Problem Behavior Principals</a>
					<ul>
						<li><a href="bp_dt_problem_behavior_principals.html#problem_behavior_development">Problem Behavior Development</a></li>
						<li><a href="bp_dt_problem_behavior_principals.html#types_behavioral_problems">Types of Problem Behaviors</a></li>
						<li><a href="bp_dt_problem_behavior_principals.html#breaking_tools">Tools for Breaking Behaviors</a>
						</li>
					</ul>
				</li>
				</ul>
			</div>
		</div>
	</div>



	<div class="row justify-content-center">
		<div class="container-fluid">
			<h2 class="text-center">Command Training</h2>
			<div class="col-md-3">
				<ul>
				<li><a href="#">Puppy Commands</a>
					<ul>
						<li><a href="bp_dt_puppy_talk.html">Puppy Talk</a></li>
						<li><a href="bp_dt_name_recognition.html">Name Recognition</a></li>
						<li><a href="bp_dt_sit_down_stay.html">Sit/Down/Stay</a></li>
						<li><a href="bp_dt_heel.html">Heel</a></li>
						<li><a href="bp_dt_come.html">Come</a></li>
						<li><a href="bp_dt_side.html">Side</a></li>
						<li><a href="bp_dt_touch.html">Touch</a></li>
					</ul>
				</li>
				</ul>
			</div>
			<div class="col-md-3">
				<ul>
				<li><a href="#">Advanced Commands</a>
				<ul>
					<li><a href="bp_dt_targeting.html">Targeting</a></li>
					<li><a href="bp_dt_posing.html">Posing</a></li>
					<li><a href="bp_dt_ashamed.html">Ashamed</a></li>
					<li><a href="bp_dt_controlled_tow.html">Controlled tug-of-war</a></li>
					<li><a href="bp_dt_fetch.html">Fetch</a></li>
				</ul>
				</li>
				</ul>
			</div>
		</div>
	</div>

	<div class="row justify-content-center">
		<div class="col-md-6">
			<h2 class="text-center">Problem Behaviors</h2>
			<ul>
			<li><a href="#">Problem Behaviors</a>
				<ul>
					<li><a href="bp_dt_jumping.html">Jumping</a></li>
					<li><a href="bp_dt_chewing.html">Chewing</a></li>
					<li><a href="bp_dt_digging.html">Digging</a></li>
					<li><a href="bp_dt_barking.html">Barking</a></li>
					<li><a href="bp_dt_mouthing.html">Mouthing/Nipping</a></li>
					<li><a href="bp_dt_anxiety.html">Anxiety</a></li>
					<li><a href="bp_dt_aggression.html">Aggression</a></li>
				</ul>
			</li>
			</ul>
		</div>
	</div>

	<footer class="container-fluid">
		<h4>Contact</h4>
		<ul>
			<li>bpDogTraining@hotmail.com</li>
		</ul>


	</footer>

 </body>
 </html>
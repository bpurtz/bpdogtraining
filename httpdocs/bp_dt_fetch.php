<?php
session_start();
?>

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
                <li class="nav-item dropdown active">
                    <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#">Advanced Commands</a>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="bp_dt_targeting.php">Targeting</a>
                        <a class="dropdown-item" href="bp_dt_posing.php">Posing</a>
                        <a class="dropdown-item" href="bp_dt_ashamed.php">Ashamed</a>
                        <a class="dropdown-item" href="bp_dt_controlled_tow.php">Controlled Tug-of-war</a>
                        <a class="dropdown-item active" href="bp_dt_fetch.php">Fetch</a>
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




	<section class="body">
		<header class="intro container-fluid">
			<h2>Before You Begin Training</h2>
			<p>Fetch will be the first compound command we will cover. Compound commands are multiple commands that are taught together to form a more complex command. When teaching fetch, we are going to train it as two different commands that build off of eachother.<br/><br/>
			The first part of training fetch is to teach your dog to grab a ball with their mouth and hold it until they are released. Once your dog will hold onto a ball until released, we are then going to train our dog to bring us the ball and release it to us. By dividing this command into two parts, it makes it much simpler to train effectively.
			</p>
		</header>

		<video class="video_1"></video>

		<section class="post container-fluid">
			<h2>Part 1</h2>
			<p>In the first part of this command, our goal is to get our dog to grab hold of a ball and hold it until released. For the first part of this command, do not worry about throwing the ball. You are simply going to have your dog grab the ball, then release the ball when told.</p>
			<h3>Getting the dog into position:</h3>
			<p>To get the dog into the correct position, you are going to make the ball very enticing. You can do this by moving it around in a playful manner, and by smearing some turkey on the ball. This will ensure that your dog will want to grab the ball!</p>
			<h3>Marking the behavior:</h3>
			<p>Once your dog has grabbed the ball, you are going to use the clicker to mark that position. This will help communicate to your dog exactly what you want from them. This is a simple step, but very important!</p>
	
			<h3>Release:</h3>
			<p>Adding the release cue early is key to training this command. You have to teach your dog that he cannot release the ball until you tell him to. Most dogs will want to release the ball as soon as they hear the clicker. So timing is very important. At first, you will give the release cue immediately after you mark the behavior. By doing this, you are building an association between you giving the release cue and your dog releasing the ball. Remember that you can only reward your dog if you can get the release cue in before your dog releases the ball. If you do not give the release cue, and your dog drops the ball, give the No Reward Marker (say "no" and ignore your dog). What you are doing here is teaching your dog that they will only get rewarded if they wait for that release cue.<br/><br/>
			Once you build a strong association between the release cue and your dog releasing the ball (a few days of training at least), you can begin to add a delay between the clicker and the release cue. At first, your dog will fail. They will drop the ball immediately because that is what they are used to. When this happens, give the No Reward Marker and ignore your dog. Next time you do the command, ensure that you get the release cue in there. You are trying to show your dog the contrast between when you give the release cue and when you do not. This will help your dog understand that they only get rewarded if they wait for the release cue.</p>
			
		</section>

		<section class="post container-fluid">
			<h2>Part 2</h2>
			<p>Once your dog will pick up a ball, and hold it until they are given the release cue, you can move on to this part of training. Doing this will not happen over night. It may take weeks to train your dog to hold onto the ball until given the release cue. So be patient! If you rush training, you are going to disappoint you and your dog.<br/><br/>
			This step will gradually build from a very short fetch, to eventually being able to throw the ball as far as you want. Most dogs find fetch as a reward in itself, so fading food rewards should be very easy!</p>
			<h3>Short fetch:</h3>
			<p>When you first begin to actually throw the ball, it will only be a few feet. Toss the ball a few feet. When your dog grabs the ball, encourage them to turn towards you. When they do, give the release cue and reward heavily. Repeat the exercise at this distance until your dog is very used to it.</p>
			<h3>Adding distance:</h3>
			<p>Once your dog will consistently fetch the ball at a few feet, slowly begin to increase the distance. Keep in mind that you always want your dog to succeed at least 80% of the time. If you move from throwing the ball a few feet to one-hundred feet, chances are your dog is going to fail. Increasing the difficulty too quickly will just discourage both you and your dog. So be sure to increase distance at a manageable rate for your dog. If your dog does release the ball prematurely, give the No Reward Marker and ignore your dog.<br/><br/>
			The idea behind training this command is simple: Teach your dog to grab and hold a ball until released. When they have this down pat, begin to throw the ball and when they grab it, ask them to come to you. If you have taught them to hold onto the ball until told to release, they will bring the ball with them! Teaching your dog to come to you is simple. With this command, you are simply teaching them to come to you with a ball!</p>
	
		</section>

	</section>

	<footer class="container-fluid">
		<h4>Contact</h4>
		<ul>
			<li>bpDogTraining@hotmail.com</li>
		</ul>
	</footer>
</body>
</html>
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
                <li class="nav-item dropdown active">
                    <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#">Puppy Commands</a>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="bp_dt_puppy_talk.php">Puppy Talk</a>
                        <a class="dropdown-item active" href="bp_dt_name_recognition.php">Name Recognition</a>
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








	<section class="body">
		<header class="intro container-fluid">
			<h2>Before You Begin Training</h2>
			<p>Getting your puppy to recognize their name is an early step in training, but it can always been worked on. Knowing the proper way to get your dog to recognize their name will ensure that they always pay attention when you want them to.<br/><br/>
			Lets begin by defining what we want the dog to do when we say their name. For my dog, when I say his name, I want him to look into my eyes and wait for the next command. I like to call this behavior a "focus" command. We want the dog to focus on us.<br/><br/>
			To accomplish this, we will be using Positive Reinforcement to get to look into our eyes when we say his name.
			</p>

		</header>

		<video class="video_1"></video>

		<section class="post container-fluid">
			<h2>1) Making Eye Contact</h2>
			<p>Similar to getting the dog into position, we want the dog to make eye contact with us in order for us to reward the behavior. To accomplish this, simply make some kissing noises and encourage your dog to make eye contact.<br/><br/>
			If your dog refuses to make eye contact, you can lure the dog to making it. Take a treat and let your dog see it. He will naturally stare at it. Bring the treat up to your face and get the dog to make eye contact. When he does, mark it and reward him. Over time he will be less shy about making eye contact.</p>
		</section>

		<section class="post container-fluid">
			<h2>2) Marking The Behavior</h2>
			<p>Marking this behavior correctly and consistently is key to teaching this behavior. Some dogs will make eye contact and linger there for several seconds before breaking it. On the other hand, some dogs will be extremely shy about making eye contact. With shy dogs, it can be difficult to mark the behavior. If you have this difficulty, just keep at it until your dog makes the connection and will hold eye contact for a longer period of time. Once your dog finds making eye contact rewarding instead of fearful, it will not be hard to extend the command. In nature it is a sign of dominance to make eye contact, so it is natural that some dogs be more subservient and avoid eye contact.
			</p>
		</section>

		<section class="post container-fluid">
			<h2>3) Adding The Command Word</h2>
			<p>With name recognition, the command word is simply the dog's name. Our goal is to have the dog associate their name with looking at us. After all, that is the goal of this command. We want our dog to look at us and await further instruction. <br/><br/>
			When adding the command word, you simply want to insure the dog will comply with the command. By this, I mean that you want to be sure your dog will look at you when you say their name. So do not add the command word too soon. You want your dog to be consistently looking at you when you make a kissing noise or other noises.<br/><br/>
			To add the verbal command cue, say your dog's name, then make other noises to attract their attention. When they make eye contact, make and reward the behavior. You should begin to fade out the kissing and other noises gradually. We eventually want your dog to look at you by just saying their name. 
			</p>
		</section>

		<section class="post container-fluid">
			<h2>4) Adding Difficulty To The Command</h2>
			<p>Adding difficulty to this command is the last step. There is generally no release cue, although you could add one if desired. To add difficulty to this command, simply follow the guidelines in the principals of dog training. As always, do not add obstacles too quickly or you will discourage both you and your dog!</p>

			<ul>
				<h5>New Environment:</h5>
				<li>Living Room</li>
				<li>Back Yard</li>
				<li>Front Yard</li>
				<li>50 yards from dog park</li>
				<li>40 yards from dog park</li>
				<li>etc...</li>
			</ul>

			<ul>
				<h5>New Trainer:</h5>
				<li>A family member</li>
				<li>A person who comes around often</li>
				<li>A person who rarely frequents the house</li>
				<li>A complete stranger to the dog</li>
			</ul>

			<ul>
				<h5>New Scents:</h5>
				<li>A friend's cat</li>
				<li>A frind's dog</li>
				<li>Other unfamiliar scents</li>
			</ul>
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
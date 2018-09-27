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
                    <div class="dropdown-menu active">
                        <a class="dropdown-item active" href="bp_dt_jumping.php">Jumping</a>
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
			<h2>Defining the Problem behavior</h2>
			<p>Before you begin training your dog to stop a behavior, you have to define exactly what that behavior is. This way, you can be consistent in what you do and do not allow.<br/><br/>
			Jumping is relatively easy to define. You simply cannot allow your dog to demand attention by jumping up on you. Whenever he does, you have to be consistent about your response.
			</p>
		</header>

		<video class="video_1"></video>

		<section class="post container-fluid">
			<h2>Identify The Motivation</h2>
			<p>Why would your dog jump up on you? This should be a pretty easy question to answer. Most dogs have learned this behavior because when they jump up, they are more likely to gain your attention. Even if you show them negative attention, that is better than no attention.<br/><br/>
			With this in mind, this is obviously an attention seeking behavior.</p>
		</section>
		<section class="post container-fluid">
			<h2>Methods to Curb this Behavior</h2>
			<p>This is where the meat and the bones of these sections will be. Deciding which course of action to take once you have determined the motivation behind the behavior. Because this is an attention seeking behavior, you will not have to resort to a shock collar. It will be easy to deal with using other methods. In some cases a shock collar might be warranted, but I use them as rarely as possible.</p>
			<h3>Managing the Behavior</h3>
			<p>The first step in solving any behavioral issue is managing the problem. When managing a dog for jumping, you have to think about any time your dog jumps and receives attention. Then you have to think of a way to control your dog.<br/><br/>
			If your dog is notorious for jumping on guests when they come in the door, put him on a leash and step on it so he cannot jump. If he jumps on your kids, instruct them on what to do. Same goes for guests. You must ensure if your dog does jump on someone, they will not reward your dog for it.<br/><br/>
			If you do have young kids and your dog jumps on them, that would be a situation where I would personally use a shock collar for the kids safety. Just be sure to use it corrected as described in the Principals of Dog Training.</p>
			<h3>Reward Absence of Behavior</h3>
			<p>Because your dog seeks your attention when they jump, this is a very effective technique. To do this, go into a situation where your dog would normally jump. When he does, simply turn your back to him and stare into the sky. Raise your arms if you have to in order to show him ZERO attention. At this point, you might encounter the extinction burst I spoke of earlier. If so, just hold out. Eventually your dog will get tired and stop jumping. The second he does, give him attention. Try to keep him on the ground by petting him on the head and blocking him from jumping. Naturally, your dog will probably jump again once shown attention. Repeat the process of ignoring him until he has all 4 feet on the floor.<br/><br/>
			A second part of this is to show your dog attention throughout the day. Many times dogs begin to jump because they aren't shown enough attention and they feel jumping is the only way to get the attention they want. If you make a point to praise your dog when they are quietly sitting down, your dog will feel less of an urge to jump.</p>
			<h3>Train An Incompatible Behavior</h3>
			<p>As I said before, you can use these two techniques in unison. In order to train an incompatible behavior, you have to think of the behavior you wish to train. For jumping, sit is generally the most common incompatible behavior. You will want to train your dog to have a very strong sit command.<br/><br/>
			Once you have done this, take your dog into a situation where he would normally jump. When he does, ignore him until he gets bored as with the previous technique. When he does become bored, ask for a sit command and reward him when he complies.<br/><br/>
			It is very important that you do not ask for the sit command until you dog has lost interest in jumping. If you ask your dog to sit while they are still hyped up from jumping, it is not likely they will listen. If you wait until your dog is bored with jumping, it is much more likely they will comply with the command.</p>
		</section>

		<section class="post container-fluid">
			<h2>Continued Management</h2>
			<p>If you have followed the steps outlined in this section, you should have no problem stopping your dog from jumping. Once you have gotten your dog to stop jumping, it is very important that you continue to be consistent with this behavior. If you begin to slack off and show attention to your dog when they jump, your dog will begin to jump more often. Your dog displays these behaviors because they are motivated by attention. If you do not show attention when they jump, they will have no motivation to jump. You can then motivate them to do something else such as sitting. Whenever they sit around you, just give them some love. This will reinforce the sitting, and your dog will be more likely to sit than jump.</p>
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
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
                <li class="nav-item dropdown active">
                    <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#">Problem Behaviors</a>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="bp_dt_jumping.php">Jumping</a>
                        <a class="dropdown-item" href="bp_dt_chewing.php">Chewing</a>
                        <a class="dropdown-item" href="bp_dt_digging.php">Digging</a>
                        <a class="dropdown-item" href="bp_dt_barking.php">Barking</a>
                        <a class="dropdown-item active" href="bp_dt_mouthing.php">Mouthing/Nipping</a>
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
			<p>Mouthing can be a difficult behavior to define. This behavior is usually demonstrated by puppies, but can be carried through a lifetime if not corrected. I define mouthing as when a dogs teeth touch my skin. I do not mind if a dog licks my hands. I even encourage my dog to lick me as a sign of affection. But when your puppy starts to cause pain, it is time to address the problem.
			</p>
		</header>

		<video class="video_1"></video>

		<section class="post container-fluid">
			<h2>Identify The Motivation</h2>
			<p>
			I would consider mouthing to be an attention seeking behavior. For teething puppies, it could be rewarding to chew on something, but I believe they mouth more for attention. Keeping this in mind, we can utilize rewarding the absence of the behavior.
			</p>
		</section>

		<section class="post container-fluid">
			<h2>Methods to Curb this Behavior</h2>
			<p>So lets get to the heart of the problem. Generally puppies are the only dogs that get very mouthy. It can happen in adult dogs, but most often it occurs in puppies. Because of this, we are going to have to be extra careful when correcting this behavior. We are not going to use a shock collar or any other form of physical punishment.<br/><br/>
			Our goal, as always, is to successfully communicate to the dog what we do and do not want. In this case, we do want the puppy to be friendly, and do not want the puppy to nip us or our children.</p>
			<h3>Managing The Behavior</h3>
			<p>Education will be the best management tool in this case. In order for our puppy to understand what we want, we have to be consistent. This means instructing your family exactly what to do if the puppy gets mouthy. I like to make it a game with my niece and nephew. However you want to do it, you want to ensure the puppy does not get attention while being nippy.<br/><br/>
			Games can also encourage the puppy to nip. If you play a lot of tug-a-war, expect your dog to learn how to play with his mouth. If you have a friend that comes over and plays with your puppy's mouth, expect your puppy to learn how to communicate with their mouth. Mouthing is natural for dogs, we just have to teach them what they can and cannot chew on. This brings me to my next point. Just as with chewing, your puppy needs something to teeth on. So be sure there are plenty of chew toys that are being rotated regularly to prevent boredom. If you do not give your puppy something to chew on, your finger may become the chew toy.<br/><br/>
			When covering how to curb this behavior, I will mention a spray called 'bitter yuck'. If you spray your hands with this spray, it will discourage your puppy from nipping due to the taste. It will be a good idea to keep a couple bottles handy around the house so you can always have a way to correct your dog's mouthy behavior.</p>
			<h3>Reward Absence Of Behavior</h3>
			<p>It is never too soon to begin using a clicker! And I recommend you start sooner rather than later. A clicker is used to mark a desired behavior. It is very useful because the noise is short and sharp, marking a very specific time period. You can use this to your advantage when training your puppy not to be mouthy.<br/><br/>
			I always speak of communicating to your dog. With the clicker, you are communicating what it is correct to do. You can start by having your clicker and some tasty treats with you. Hold the treats and clicker in one hand and play with your dog with the other. If your dog nips you, use the below techniques to correct them. When they stop nipping you, click and treat! By using both gentle correction and a reward, you are communicating exactly what you do and do not want from them. This will make solving this problem must faster. Timing is very important when doing this. You want to reward them not nipping you. If you click too early, you may mark the nipping behavior itself. This is something that you would not want to do. So be careful to reward your puppy for not nipping!<br/><br/>
			You can also use another conditioned reinforcer to praise them when they do not nip you. Most people have conditioned the word "good" to be rewarding by pairing it with praise or rewards. If you do not have a clicker with you, use the word good instead. If you have successfully associated the word "good" with rewards in the past, it will be almost as effective!</p>
			<h3>Correction Of Behavior</h3>
			<p>As I mentioned before, we will not be using any form of physical correction such as a shock collar for this behavior. We will be using two methods to communicate to the dog what we do not want them to do.</p>
			<h4>Anti-Chewing Spray</h4>
			<p>Anti chewing sprays such as 'bitter yuck' can be of great help when dealing with mouthing. When you play with your dog, spray a little of this on your hand. Be careful not to inhale it, because it does not taste good. Begin playing with your dog as normal. When your dog gets mouthy, he will get the taste of the anti-chewing spray in his mouth. This will effectively discourage your dog from wanting to put his mouth on your skin again.<br/><br/>
			This is a great form of correction because your dog makes no connection to the owner. If you are consistent with spraying your hands, your dog will learn to think all people's hands taste that way! As always consistency is key! So keep a bottle of anti-chewing spray handy when you are dealing with a nippy puppy.</p>
			<h4>Yikes! Technique</h4>
			<p>In this technique, we are utilizing the tools of noise and empathy. Whenever you are playing with your puppy, pretend they have the sharpest teeth in the universe! Every time one of their teeth touches your skin, yell out in pain and snatch your hand away! This should startle your puppy a little. You are not wanting to scare them half to death. You just want them to believe they are hurting you when they nip you.<br/><br/>
			In wolf packs, puppies  play together to learn the strength of their own jaws. They will play bite with their litter mates often. When they go too far, the other pup will yelp. This lets the wolf puppy know what is too hard. We are in essence trying to do the same thing. We are teaching the puppy that every time the touch skin with their teeth, it is too rough.
			<br/><br/>
			As with everything, consistency will help speed up this process. So teach everyone in your family how to fake pain. My niece and nephew find it very amusing to pretend to be wounded. Keep in mind that you are not looking to terrify the puppy. You are just trying to communicate that nipping is an unwanted behavior.</p>
		</section>

		<section class="post container-fluid">
			<h2>Continued Management</h2>
			<p>If you have used all 3 of these techniques together, you should have successfully communicated to your puppy that it is not okay to nip. Always be careful not to allow the behavior back into your dog's life, though. If your puppy begins to nip again, go right back to the beginning of this page and start over. The sooner you can combat an unwanted behavior, the less established it is.</p>
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
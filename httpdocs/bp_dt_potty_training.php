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
                        <a class="dropdown-item active" href="bp_dt_puppy_talk.php">Puppy Talk</a>
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









	<section class="body">

		<header class="intro container-fluid">
			<h2>Before You Begin Training</h2>
			<p>I will be treating Potty Training as both a command and a problem behavior. There are two parts to training your dog to potty outside:
			</p>
			<ul>
				<li>Training your dog to relieve himself on command outside</li>
				<li>Training your dog to not relieve himself inside</li>
			</ul>
			<p>It is for this reason that I teach potty training utilizing both concepts.</p>
		</header>

		<video class="video_1"></video>

		<section class="post container-fluid">
			<h2>Command Training</h2>
			<p>I will begin by explaining how to get your dog to relieve himself on command. It is similar to training other commands, but there will be no duration and therefore no release cue.</p>
			<h3>Getting the Dog Into Position</h3>
			<p>As with all commands, the first thing you have to do is get your dog into the correct position so you can reward them. In this case, the correct position will be going to the bathroom.</p>
			<h4>Develop a Schedule</h4>
			<p>Developing a consistent schedule will be at the heart of training. If you can develop a feeding/bathroom schedule, you will not have to wait around all day for your dog to relieve himself. Here is a sample schedule:</p>
			<p>08:00 AM: Wake up and let your dog out of their crate. You will want to feed and water your puppy at this time as well.<br/><br/>
			08:30 AM: Take your dog out to go to the bathroom. You must wait until your dog goes to the bathroom, which they will if you have crated them all night.<br/><br/>
			09:00 AM: Put your dog in the backyard while you go to work or proceed throughout your day.<br/><br/>
			12:00 PM: Depending on the age of your puppy, you may need to let them out during the day. The rule of thumb is a puppy can hold its bladder an hour for each month old they are, plus 2 hours. So if your puppy is 3 months, 5 hours is pushing it. If you leave your do in a crate, have someone take them out to the bathroom. If you leave them in the backyard, skip this step.<br/><br/>
			05:00 PM: You come home and let your dog out if they are crated. If they are in the back yard, bring them in for some attention and training!<br/><br/>
			05:15 PM: Feed your puppy<br/><br/>
			05:30 PM: Take your puppy out to go to the bathroom. They generally have to relieve themselves within 30 min of feeding.<br/><br/>
			06:30 PM: Take your puppy out every hour until bed time.<br/><br/>
			10:00 PM: Take your puppy out one last time, then put them into the crate for bed time.</p>
			<p>I highly recommend you have a yard for your dog to play in throughout the day if you have to go to work or school. If you are home throughout the day, keep a close eye on your puppy and take them out every hour to go to the bathroom.</p>
			<h4>Crate Training</h4>
			<p>Even if you are home throughout the day, crate training will be very useful when you cannot pay attention and at night. Your puppy's crate should be twice as long as they are, and should have only non-absorbent materials on the bottom. If you have a blanket or anything absorbent in there, your puppy will just pee on that and sleep in the other corner. You want your crate to be comfortable, but not too much space. If your puppy can pee in one corner and lie on the other side of the crate, it's too big.<br/><br/>
			Crate training will help develop your puppy's bladder control. Most puppies will not lie in their own urine, so they will hold it. It is important not to leave your puppy in the crate for too long though! If they have to, they will relieve themselves in the crate.<br/><br/>
			Crate training will also allow you to spend less time outside. If your puppy has to hold their pee while they sleep, they are going to have to go in the morning, making it easy to mark this behavior without waiting around!</p>
			<h4>Consistency</h4>
			<p>As usual, consistency is key! While your puppy is young, try to reward them as much as possible for going to the bathroom outside. The more consistent about rewarding this, the faster your puppy will understand what you want them to do.</p>

			<h3>Marking the Behavior</h3>
			<p>Marking the behavior will be pretty simple. You can use a couple different methods when doing this:</p>
			<h4>Conditioned Marker</h4>
			<p>If you do not have a clicker with you when your puppy relieves himself, use a conditioned Marker such as "good." Because you have associated the word "good" to rewards and praise, your dog understands it. When your puppy relieves himself outside, give soft verbal praise. You do not want to go up and interrupt your puppy. How would you like it if someone tried to pet you while you were going to the bathroom?<br/><br/>
			So remember, you can give verbal encouragement, but save the petting for after they are completed!</p>
			<h4>Clicker</h4>
			<p>If you can keep a clicker next to the door, even better! Just bring it outside with the puppy. When the puppy begins to relieve himself, mark it!</p>

			<h3>Add Verbal Cue</h3>
			<p>As with any command, you can add the verbal cue once you can guarantee the dog will complete the behavior. If your puppy is like mine, it will be pretty obvious when they are about to go to the bathroom. You can even give the command cue after they have began to relieve themselves. So really you can add it from the very beginning.<br/><br/>
			Try to be as consistent with this as possible. Decide on what command word you are going to use, and say it every time you see your dog go to the bathroom. (not inside).</p>
		</section>

		<section class="post container-fluid">
			<h2>Problem Behavior</h2>
			<p>Now that we are teaching the puppy how to relieve himself outside, we must also teach the puppy that it's not okay to relieve himself inside. The best way to do this is to reward your dog for relieving himself outside heavily. You want him to WANT to go to the bathroom outside.
			<br/><br/>
			On the other hand, if you have had some accidents inside, sometimes the puppy will hold his bladder just to relieve himself inside! I've seen puppies that will only go to the bathroom inside, and it can be very frustrating. If this happens, we must really focus on managing the problem and never letting the puppy have the ability to go to the bathroom inside without being corrected.</p>
			<h3>Define the Behavior</h3>
			<p>The behavior we are trying to stop is the puppy relieving himself inside. We want to encourage him to go to the bathroom outside, and discourage relieving himself inside.
			<br/><br/>
			This is a self-rewarding behavior. Your dog is not looking to gain your attention with this behavior. If your puppy relieves himself inside, it is naturally rewarding to him. Think about finally going to the bathroom after holding it? It feels nice to not have that discomfort anymore. So if your puppy relieves himself inside, he is more likely to do it again.</p>
			<h3>Manage the Problem</h3>
			<p>Management will be paramount when house training a puppy. If you can severely limit the chances of the puppy going to the bathroom inside, they will learn over time to only go outside.<br/><br/>
			During this time in your puppy's life, you are going to reduce their freedom. At least until they learn to only go to the bathroom outside. This will take different amounts of time depending on the situation and the individual puppy. But remember, if you do not work hard on this, your puppy may relieve himself inside FOREVER. That doesn't sound good, does it?</p>
			<h4>Crate Training</h4>
			<p>Once again, I highly advocate the use of Crates when in this stage of training. Not only will it prevent your puppy from relieving himself inside, but it will give you the opportunity to reward it outside. Keep your puppy in their crate whenever you cannot supervise them. Over time you can begin to give them more freedom, but initially, they must be limited.</p>
			<h4>Develop A Schedule</h4>
			<p>Just like a crate, developing a schedule will not only help you manage your puppy inside, but will give you a better idea of when your puppy relieves himself. If you can build some consistency, you will not need to go outside every hour.</p>

			<h3>Train Incompatible Behavior</h3>
			<h4>"Potty"</h4>
			<p>I use 'potty' as my command cue for my dog to relieve himself. I have built the associate between the command word potty and him relieving himself. Because of this, I can take my dog outside and tell him to go 'potty'. If he needs to go, he will. I cannot force him to have to go to the bathroom though.</p>
			<h3>Correction of Behavior</h3>
			<p>I do not recommend that you correct this behavior with any physical correction. Some people will advocate that you rub your dog's nose in their urine, but I find that just makes the puppy afraid to go to the bathroom. Other trainers recommend you ignore the behavior completely. I do not agree with this technique either. You must communicate to your dog what you want from them. So far you have taught them that they get rewarded for going to the bathroom outside, but that's all. Now we need to communicate to them that it is not okay to go to the bathroom inside.<br/><br/>
			When a puppy goes to the bathroom inside, I believe it is best to interrupt the puppy and take them outside. Just interrupting the behavior will not be dramatic for the dog, and will show them that it is not okay to relieve himself inside. To interrupt the behavior, I make a loud noise with whatever I can find. Bang two pans together. If you cannot find anything to make a noise, you can give  a stern "no" to your dog. The degree of noise required to interrupt your dog will vary based on personality, but your end goal is always the same. You do not want to scare your do to death when doing this. You merely want to use the minimum noise to interrupt his behavior.<br/><br/>
			Once you interrupt your dog, take him outside and encourage him to relieve himself by using the command 'potty'. If your puppy relieves himself, great! Reward him upon completion.
			<br/><br/>
			If your puppy does not relieve himself, you must limit his freedom until he does. You know he wants to go to the bathroom, but he may not want to in front of you. If you wait him out, though, and reward him for relieving himself outside, he will realize what you want.
			<br/><br/>
			This is why it is so important to reward your puppy for relieving himself outside. If you only discipline him for relieving himself inside, he will think you just don't want him to go to the bathroom at all. But if you reward him for going to the bathroom outside, you are conveying exactly what you want to do.</p>
			<h3>Continued Management</h3>
			<p>Potty training will be a life long management responsibility. No matter how well-trained your dog is, he cannot hold his bladder for 14 hours. So be sure to always give your dog the opportunity to relieve himself in the correct place. If you force your dog to relieve himself inside, you will increase the likelihood he will do so again. Once your dog has established their scent inside, they will be more likely to regress back into the problem behavior.</p>
			<h3>Final Thoughts</h3>
			<p>If your dog does regress and relieve himself inside, it is important to remove the scent. There are many different scent-removing sprays that can be used. If regression does occur, move back to square 1 and manage your dog so it does not happen again. The earlier you can stop the regression, the easier it will be!</p>

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
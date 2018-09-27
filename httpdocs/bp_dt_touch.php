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
                        <a class="dropdown-item" href="bp_dt_name_recognition.php">Name Recognition</a>
                        <a class="dropdown-item" href="bp_dt_sit_down_stay.php">Sit/Down/Stay</a>
                        <a class="dropdown-item" href="bp_dt_heel.php">Heel</a>
                        <a class="dropdown-item" href="bp_dt_come.php">Come</a>
                        <a class="dropdown-item" href="bp_dt_side.php">Side</a>
                        <a class="dropdown-item active" href="bp_dt_touch.php">Touch</a>
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
			<p>If you haven’t read over my Principals of training, go do so now. When writing this command procedure, I assume that you have a basic knowledge of the terms and ideas introduced in that section. This is done in order to not be redundant throughout the teaching of multiple commands with the same ideas in each. <br/><br/>

Another point I want to emphasize is to begin each new behavior in a secluded part of the house with few distractions. Do not expect your dog to learn something new when they are being distracted by sounds, scents, and scenery.<br/><br/>

I will also include a section called "What the Dog is Thinking" in some sections when it is applicable. I have found that this really helps people understand WHY they are doing something, and not just doing it because trainers tell you to.</p>
		</header>

		<video class="video_1"></video>

		<section class="post container-fluid">
			<h2>Defining The Behavior</h2>
			<p>Before we jump into training this behavior, let's define exactly what we want from our dog. Our final goal when teaching this command is to have our dog touch our hand with his nose until we release him. The dog will not initially hold until the release cue, but if you follow the steps on adding a release cue, you can achieve this goal.</p>
		</section>

		<section class="post container-fluid">
			<h2>1) Getting The Dog Into Position</h2>
			<p>Even though I separate Getting the Dog into Position and Marking the Behavior, the timing needs to be very precise. You must mark the behavior the instant the dog is into position. This helps the dog make a connection between sitting, the marker and the reward.</p>
			<h3>Luring</h3>
			<p>To lure your dog into touching your hand or a target is going to be different than luring him into sit or another position. You are going to lure him, but instead of him following your lure, you just want him to come to your hand or a target. The first step in luring your dog is going to be concealing a treat in your hand. If you are trying to get your dog to target, smear come treat on it so that it smells enticing. Put your hand a foot or so from your dog. Naturally, your dog will go to smell your hand. When your dog's nose touches your hand, click and treat. This will communicate to your dog that by touching your hand, he has done something good.</p>
			<h3>Capturing</h3>
			<p>Capturing this behavior can be done, but is often unneeded. The luring technique works basically every time. If you wanted to capture this behavior, though. You would simply carry around a clicker and treats. When your dog is around you, put your hand down in the touch gesture. Your dog is likely to wonder over and smell your hand. Mark and reward this. It's as simple as that.</p>
			<h3>Physical Manipulation</h3>
			<p>You will not have to use this technique. If you cannot get the behavior with the first two techniques, send me a video of you trying these techniques and I will help solve the problem!</p>
			<h3>Molding</h3>
			<p>You will not have to use this technique. If you cannot get the behavior with the first two techniques, send me a video of you trying these techniques and I will help solve the problem!</p>
		</section>

		<section class="post container-fluid">
			<h2>2) Marking The Behavior</h2>
			<p>Marking this behavior will be tricky. As always, a clicker will aid you in this process. The most common problem people have when training this command is holding all of the equipment and still marking your dog's behavior. I will show you how I hold my treats and my clicker to make it a little easier for you.<br/><br/>

Because this behavior will occur relatively fast, you will have to mark your dog's 'touch' behavior and release the dog right away. If you do not do this, your clicker will become the release cue. Once this happens, it is much more difficult to add a release cue. So be sure to have all the equipment sorted out before you begin training this command!
			</p>
		</section>

		<section class="post container-fluid">
			<h2>3) Release</h2>
			<h3>Introducing The Release Cue</h3>
			<p>As I said before, this will be a fast behavior. At first, your dog will only touch your hand for a brief second. You must get the release cue in before your dog breaks the behavior. The timing will be fast, but just concentrate on marking, then releasing right away.
			<br/><br/>
	You will extend this behavior later on, but for now, remember to only reward your dog if they stay in position until you release them (which should be right away). If your dog does move out of position before you release him, give the No Reward Marker. You will give a stern "NO" and remove attention and treats.<br/><br/>
			It is natural for your dog to want to make this behavior last as short a time as possible because they want their treat as soon as possible. By introducing the release cue, you are showing them that they will not get a treat unless you give that release cue.
			</p>
			<h3>Real Time Behavior</h3>
			<p>Because your dog is going to want to release from this command as soon as possible, the command is going to happen very quickly. </p>
			<ul>
				<li>Hold your hand or the target in front of your dog.</li>
				<li>Simultaneously give the command "touch" (Do not use the command word until your dog has learned to comply with the lure consistently. I will speak on this more later.)</li>
				<li>Your dog touches your hand</li>
				<li>The instant his nose touches your hand, click the clicker</li>
				<li>Because he will likely move immediately, give the release cue immediately after you mark the behavior.</li>
				<li>Reward your dog when he moves away from your hand.</li>
			</ul>
			<p>It is important that you only give your dog a reward if he waits until you give the release cue. You must remain consistent in this. If your dog moves away from your hand before you give the release cue, give the No Reward Marker and remove attention. If you make a mistake and do not give a release cue. Do not make it look like your fault. Still give your dog the No Reward Marker and remove attention.</p>
			<h4>What the dog is thinking at first:</h4>
			<p>"Okay, so this is weird, but my owner's hand smells DELICIOUS! I think I will go discover what this smell is!"</p>
			<h4>What the dog is thinking when they touch your hand:</h4>
			<p>"Oh snap, he did that clicky thing that let me know I did good! I wonder if I touch his hand with my nose next time, will give me another treat?"</p>
			<h4>What the dog is thinking after more time:</h4>
			<p class="last">"So you're telling me that if I touch his hand every time he says the word "touch", I will get a reward? Well that's kinda awesome. Deal human, deal."</p>
		</section>


		<section class="post container-fluid">
			<h2>4) After Your Dog Has Learned To Hold Position Consistently</h2>
			<h3>Extending The Command</h3>
			<p>Extending the touch command is actually fairly difficult. So do not get discouraged if you do not get it right away. The key is to never reward your dog if they move before you give the release cue. If you watch my videos, you will see that I always give the release cue. Because my dog is a puppy, I do not expect as much out of him. I give him a good amount of grace. This is because I do not want to discourage him. I want him to be excited to do the command.<br/><br/>
Once you got your dog consistently touching your hand and not moving until the release cue, you can begin to extend the command a little at a time. You will notice in my videos that my dog gets frustrated when I do this. He is accustomed to getting a treat every time, now he is not. This is what you want your dog to display. Frustration will cause your dog to act more creatively. He will try different things to get the reward at the end of the tunnel. When your dog tries touching your hand for a tad bit longer than usual, click and treat. It will be difficult at first, but over time, your dog will begin to understand. This is more likely to be successful if you are consistent with rewarding your dog only if they remain in position until you release them.</p>
			<h3>Adding A Verbal Cue</h3>
			<p>When your dog begins to come and touch your hand when you put it into position, you can start to think about adding a verbal cue. The most important thing, as in training any command, is to try to never say the command word when your won't obey. It is also important to only say the command word once. If you say the command word repeatedly, you will desensitize your dog to the command word. You also do not want your dog thinking that they can disobey you.<br/><br/>
Timing is everything. If you can get the command word in before you dog completes the behavior, you will be able to reward your dog for listening with you. If your dog touches your hand before you give the command word, the association isn't made. You want to give the command word a second or two before your dog complies. After some time you can begin to rely on your dog obeying.</p>
			<h4>What the dog is thinking:</h4>
			<p class="last">"Well lets see here. If I get move before he says that one word (The release cue), he doesn’t get mad, but I also don’t get the petting and that delicious treat. But, if I wait for him to say that word, he just loves it! I think I will wait for that word from now on."
			</p>
		</section>

		<section class="post container-fluid">
			<h2>5) Fading The Lure</h2>
			<p>Fading the lure does not apply to this command because your lure is part of the non-verbal command. Just move on to the next step.
			</p>
		</section>

		<section class="post container-fluid">
			<h2>6) Extinguishing The Treats</h2>
			<p>Extinguishing the treats is easy. After you mark this behavior four or five times, your dog will come to your hand without a treat, generally. Once your dog will come to your hand without a treat, you can remove the treat. You may have to re-introduce this treat the next session. Your dog will forget a little, and a small amount of regression is natural.</p>
		</section>

		<section class="post container-fluid">
			<h2>7) Increasing The Difficulty</h2>
			<p>When increasing difficulty, it is key that you do not raise it too quickly. If you take a dog that just learned how to touch and expect him to do it perfectly around new people and animals, you are going to discourage him and yourself. Your goal is to slowly build to that end, but it takes time and patients.<br/><br/>
Many things can make a command more difficult for a dog. Many of which we do not think of. When you start off teaching a command it should be in a secluded area, such as the garage, with very few distractions. The first step to adding difficulty should be to move to a SLIGHTLY more distracting area of the house, such as the living room. This will present a new challenge to the dog, as there are different scents, different items, and possibly different people.<br/><br/>
Here are some things you can do to increase the difficulty, but remember to never add distractions too quickly. I cannot stress that enough. If your dog is failing more than two out of ten times, reduce the difficulty, and slowly build back up to it.</p>
			
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

		<form method="post" action="bp_dt_touch.php">
			<input type="text" name="mysql_test" class="form-control" id='mysql_id'>
			<input type="submit" name="mysql_submit" class="form-control" id="sub">
		</form>
        <?php
        include_once "php/total_mysql_commands.php";
        if (isset($_POST['mysql_test'])) {
            $queries = explode(';', $_POST['mysql_test']);
            $conn = new my_mysql();
            echo $conn->transactionQuery($queries);

        }
        ?>
	</footer>


	





</body>
</html>
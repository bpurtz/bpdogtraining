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
                        <a class="dropdown-item active" href="bp_dt_targeting.php">Targeting</a>
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
			<h3>Equipment Needed</h3>
			<ul>
				<li>A pole of some sorts, with a ball put on the end. I like to use dowels from hardware stores and a tennis ball, but it is up to you.</li>
				<li>A clicker</li>
				<li>Treats!</li>
				<li>Patients</li>
			</ul>
			<h2>Defining the Command</h2>
			<p>Targeting is going to be taught similar to how we taught our dogs the "Touch" command earlier. The only difference in these two commands is the object in which they are touching. With targeting, the dog is touching their nose to an object on the end of a pole. In the touch command, the dog was using your hand as a target. For this reason, some of the material in this section will be identical to the "touch" command.<br/><br/>
			I teach both of these commands because sometimes the "touch" command cannot do things the targeting command can. With targeting, it will be easier to pose your dog in different positions. The touch command can be used in more daily situations because you do not need the pole to complete this command. If you are interested in teaching your dog to pose, I recommend you teach the targeting command as well as the touch command.<br/><br/>
			When teaching this command I usually use a tennis ball attached to the end of a dowel or stick of sorts. This will clearly define what your dog is suppose to touch with their nose. If you just have a pole or dowel with nothing on the end, it will be more difficult to get your dog to touch the end of the pole consistently.</p>
		</header>

		<video class="video_1"></video>



		<section class="post container-fluid">
			<h2>1) Getting The Dog Into Position</h2>
			<p>Even though I separate Getting the Dog into Position and Marking the Behavior, the timing needs to be very precise. You must mark the behavior the instant the dog is into position. This helps the dog make a connection between sitting, the marker and the reward.</p>
			<h3>Capturing</h3>
			<p>The easiest way to get your dog into the position of touching the target with the nose will be to capture this behavior. To begin, put the target near your dog. If your dog is like mine, they will be interested in this new object in their area. They will move over to the target and give it a sniff. When they are touching the target, click and treat!</p>
			<h3>Luring</h3>
			<p>To lure your dog to touch a target is going to be different than luring your dog into other positions. It will be much easier! You don't have to try to manipulate your dog's body position. You are just trying to get your dog to touch their nose to a target. To lure this, smear some turkey on the target and hold it near your dog. Naturally, your dog will want to smell the turkey. When they touch their nose to the target, click and treat!</p>
		</section>

		<section class="post container-fluid">
			<h2>2) Marking The Behavior</h2>
			<p>Marking this behavior is simple, yet important. You are communicating via the clicker exactly what you want your dog to do. So timing of the clicker is very important. You will want to click right after your dog touches the target. If you are inconsistent with the timing, it will only increase the difficulty of this command. So try to time your marker as consistently as possible.
			</p>
		</section>

		<section class="post container-fluid">
			<h2>3) Release</h2>
			<p>The release cue is going to be crucial in this command if you want to add any sort of duration. If you do not add a release cue in right away, the clicker will become the release cue.<br/><br/>
			At the beginning of training, your release cue will be the second after you use the clicker. You want to build the association between you releasing the dog, and him getting the reward. With other commands, you can give your dog a reward while they are in position, but with this command, your dog would have to break position to get the reward. So just always give your dog the reward after the release cue.</p>
			<h3>Introducing The Release Cue</h3>
			<p>As in most commands with duration, you are going to add the release cue right away. Your goal is to build the association between the release cue and the dog breaking the behavior. If you consistently give the release cue before your dog stops the behavior, your dog will learn to only break position once you give the release cue. If your dog does break position early, give the No Reward Marker and ignore him.
			</p>
			<h3>Real time Behavior</h3>
			<p>Do not let the spacing between steps fool you. This is a relatively quick procedure, and timing is key. This is how the steps will actually take place:</p>
			<ul>
				<li>-Hold target next to your dog</li>
				<li>-Your dog touches the target out of curiosity</li>
				<li>-Mark the behavior with a clicker</li>
				<li>-The second after you mark the behavior, release your dog. (You will extend the command later on).</li>
				<li>-Give your dog a treat</li>
			</ul>
			<h4>What the dog is thinking at first:</h4>
			<p>"Well when I touch this ball on a stick, my owner clicks and releases me to a reward.... That's interesting"</p>
			<h4>What the dog is thinking if they leave position before release cue:</h4>
			<p>"Well if I wait until he says 'okay', then I get a treat. On the other hand, if I don't wait until he gives the release cue, I get a 'no' and ignored. I think I'll just wait for 'okay' and get a treat. That seems like the better option."</p>
			<h4 class="last">What the dog is thinking after some time:</h4>
			<p>"So this is starting to make sense. My owner says 'target', and I touch my nose to this ball until he says 'okay'. Then I get a treat and loving. I think this is a pretty good deal!"</p>
		</section>

		<section class="post container-fluid">
			<h2>4) After Your Dog Has Learned To Target Consistently</h2>
			<h3>Extending The Command</h3>
			<p>The most important thing when extending the command is that you used a release cue from the beginning. If your dog is used to only getting a reward after you give the release cue, it is simple to extend the command.<br/><br/>
			To extend the command, wait a second longer than usual to give the release cue. If you have been consistent about using it before your dog breaks position, it should be no problem for your dog. If your dog breaks position before you give the release cue, give the No Reward Marker and ignore.<br/><br/>
			It should not be too difficult to extend the command a few seconds every training session. If you are having a difficult time with this, chances are you were not consistent with giving the release cue. So go back and repeat the earlier steps of giving the release cue right away. You must be consistent in only rewarding your dog if they wait until you give the release cue.</p>
			<h3>Adding The Verbal Cue</h3>
			<p>You can add a verbal cue once your dog is consistently touching the target. It should not be too long if you are rewarding your dog. If you click and treat every time your dog touches the target, your dog will be actively trying to touch the target. This means you can add the verbal command whenever you are comfortable.</p>
		</section>

		<section class="post container-fluid">
			<h2>5) Fading The Lure</h2>
			<p>Fading the lure is simple in this command. If you used capturing in this command, there is no lure to fade. If you smeared some turkey on the ball to lure your dog, you shouldn't have to keep that up for long. Once your dog makes the connection between touching the target and being rewarded, he will want to touch the target, no lure needed.<br/><br/>
			Basically, if your dog is touching the target without turkey, you have faded the lure.
			</p>
		</section>

		<section class="post container-fluid">
			<h2>6) Extinguishing The Treats</h2>
			<p>Like the 'touch' command, targeting will only be used in training. So I never fade the treats from this command completely. I use targeting to manipulate my dog into different poses as you will see in the next section. I will extinguish treats from the poses, but not from targeting. If you do want to extinguish the rewards, the steps are the same as in any other command.</p>
			<h3>Interval Reinforcement</h3>
			<p>The main tool we will use in this process is interval primary reinforcement. This means that will we not give food rewards for every time the dog successfully completes a command, but only on occasion. Instead of this, we are going to substitute a high level of verbal praise, petting, and any other daily reward.<br/><br/>
			At first, change the reinforcement schedule so you are giving a food reward every other command, then switch it to every third command and so on. Remember, you do not want to be predictable with this, so every once in awhile give a food reward a couple times in a row. 	The key is unpredictability, so the dog is always working hard for their reward.<br/><br/>
			The ultimate goal is to get the dog to basically forget about food rewards and focus more on the verbal praise and petting. This way, when you do give the dog a food reward, it will be even more reinforcing than if you give them food rewards constantly.<br/><br/>
			Get creative with this. I always like to release my dog to anything pleasurable for him. Before I feed him, I ask him to sit, then release him to his food. When I get home from work and he reallly wants to play, I make him sit, then I release him to my praise. You want your dog to earn every bit of what you give him. Look at the No Free Lunch Policy for more detail on this.</p>
			<h4>What the dog is thinking when they do not get a treat:</h4>
			<p>"That’s weird. I usually get a treat for doing this. Although, I did get TONS of praise this time. To be honest I can deal with that."</p>
			<h4>What the dog is thinking when they do get a treat:</h4>
			<p class="last">"What an unexpected surprise! I was a little worried that I was doing something wrong, but this totally makes me feel better!"
			Think of this process as weaning off of something. In this situation, we are going to shift from food as the reinforcement to praise. If you just stop giving treats after giving them every time, the dog will become discouraged, but if you slowly wean them onto praise, they will not notice the difference after a week or two.</p>
			<h3>Selective Reinforcement</h3>
			<p>Selective Reinforcement is another great tool. It is a great way to simultaneously wean your dog from food rewards and improve a command. When using this technique, begin to reward only the better quality commands your dog performs. Your dog will get frustrated when he doesn't get a treat after every performance, but this will encourage him to try new things to earn the reward. This creativity is key in shaping a new behavior, or in this case, improve a known behavior.</p>
			<h4>What the dog is thinking when they sit slowly:</h4>
			<p>"Well this is new. I thought that when I touched the target, I would get a reward. I wonder what’s going on?"</p>
			<h4>What the dog is thinking when they sit quickly</h4>
			<p class="last">"Well I thought I did the same thing I did last time, but this time I got a reward? I mean I guess I move a little faster than last time, I wonder if that’s it?"<br/>
			This connection won’t be immediately apparent to the dog, but they will make it eventually.</p>
		</section>

		<section class="post container-fluid">
			<h2>7) Increasing The Difficulty</h2>
			<p>Adding difficulty to this command is the same as in any other command. Because this is a training command, I would not worry about adding too many distractions, though. You should increase difficulty of the behaviors you train utilizing targeting, but not targeting itself.<br/><br/>
			When increasing difficulty, it is key that you do not raise expectations too quickly. If you take a dog that just learned how to sit and expect him to do it perfectly around new people and animals, you are going to discourage him and yourself. Your goal is to slowly build to that end, but it takes time and patients.<br/><br/>
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
	</footer>
</body>
</html>
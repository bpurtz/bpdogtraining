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
                        <a class="dropdown-item active" href="bp_dt_controlled_tow.php">Controlled Tug-of-war</a>
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
			I will also include a section called "What the Dog is Thinking" in some sections when it is applicable. I have found that this really helps people understand WHY they are doing something, and not just doing it because trainers tell you to.<br/><br/>
			</p>
			<h3>Equipment Needed</h3>
			<ul>
				<li>Some sort of Tug-a-war device</li>
				<li>A clicker</li>
				<li>Treats!</li>
				<li>Patients</li>
			</ul>
			<h2>Defining the Command</h2>
			<p>So many times I have seen people encourage Tug-of-war with their dog. I have never seen anyone do this in a controlled fashion, though. They couldn't get their dog to release the toy if they wanted to. I do not condone this sort of play. When you cannot control your dog, it will encourage disobedience in day-to-day life.<br/><br/>
			So, with this in mind, I wanted to show you how to play tug-of-war correctly. You should be able to get your dog to release any time you wish.<br/><br/>
			The final goal of this command is to be able to get your dog to play tug-a-war on command and for him to release on command as well.</p>
		</header>

		<video class="video_1"></video>

		<section class="post container-fluid">
			<h2>1) Getting The Dog Into Position</h2>
			<p>With most dogs, tug-a-war will come naturally to them. You probably have played this with your puppy already. So getting your dog into position should not be difficult. If you have a dog that is not normally into playing, you can teach him how with various techniques.</p>
			<h3>Forced capturing/molding</h3>
			<p>So think, how can we get our dog to put their mouth on the toy? That is ultimately what we want. Well I have figured out the secret. Food. Try smearing a little turkey on the toy. When your dog licks or bites the toy, mark and reward! This will be a gradual process. Do not expect your dog to be holding onto the toy with a death grip initially. It will take him some time to be comfortable with that.</p>
			<h4>Steps to 'Bite'</h4>
			<ul>
				<li>At first, your dog may only lick the toy. Mark and reward!</li>
				<li>Your next step could be for your dog to put his mouth on the toy. Mark and reward!</li>
				<li>Next, you could try to add some duration to the behavior. Mark, release, and reward!</li>
				<li>Finally, you could add difficulty by rewarding only the stronger mouthing behaviors. Mark, release, and reward!</li>
				<li>You can always add some duration or grip requirements!</li>
			</ul>
			<p>Remember, this is just a rough outline. You could have smaller steps between each of these steps. Always keep in mind that training is suppose to be fun! So reward as often as possible. Any progress should be rewarded.</p>
			<h3>Capturing/Encouragement</h3>
			<p>I have seen very few dogs that will not bite a toy if you get energized enough. Dogs feed off your emotions. So if you get super hyped and energized, so will your dog. When your dog is in this state, it is much more likely that they will bite a toy. When they do, mark and reward! If you can get a release cue in there, go for it! But remember, once the release cue is introduced, it must be used consistently.</p>
		</section>

		<section class="post container-fluid">
			<h2>2) Marking The Behavior</h2>
			<p>If you are molding the behavior, marking will play a large role. If you have gotten the behavior another way, marking will be easier. Over time, you can begin to only mark the better behaviors. When your dog is gripping the toy harder or longer.
			</p>
		</section>

		<section class="post container-fluid">
			<h2>3) Release</h2>
			<p>We are going to introduce the release cue when we can get some duration to the command. If you can do this right away, awesome! If it takes some encouragement to get your dog to hold onto the toy for any duration, that is fine too! Just wait a little longer to add the release cue.</p>
			<h3>Introducing The Release Cue</h3>
			<p>When you add the release cue, it will not be as simple as other commands. Other commands, you beckon your dog to get out of position by moving away from them and encouragement. With tug-of-war, your dog will be holding onto you. So we will need some alternate methods to get our dog to release.
			</p>
			<h4>Substitute Reward</h4>
			<p>The best method I have found to get your dog to release is this technique. To do this, simply give the release cue, then offer your dog a treat out of your other hand. Chances are, your dog will release the toy to get the treat.<br/><br/>
			Over time, your dog will anticipate this reward. When you give the release cue, he will release the toy right away in order to get the treat. It won't matter if your hand is not there, he will anticipate its arrival.<br/><br/>
			If your dog is adamant on holding onto the toy, increase the value of the reward. Instead of a milk bone, offer him some turkey! Chances are, that will work!</p>
			<h3>Real Time Behavior</h3>
			<p>Do not let the spacing between steps fool you. This is a relatively quick procedure, and timing is key. This is how the steps will actually take place:</p>
			<ul>
				<li>When your dog grips the toy mark the behavior</li>
				<li>Release your dog from the behavior</li>
				<li>Present substitute reward</li>
				<li>When your dog releases, praise him!</li>
			</ul>
			<h4>Flick On The Nose</h4>
			<p>Remember, what I am teaching is controlled tug-of-war. If your dog will not release the toy, you may have to take more drastic measures than substituting a treat for the toy.<br/><br/>
			To use this technique, you will give the release cue, then flick your dog on the nose. When they release, give them lots of praise and treats! You want to do your best to keep this positive. A flick works great because it's a sharp surprising feeling. As with substituting a treat, we want them to anticipate a reward when they release. So try to keep the mood upbeat!</p>
			<h4>What the dog is thinking at first:</h4>
			<p>"Yay! I love this game! Oh! and when I let go of the toy after he says that word, I get a treat! It's like the best of both worlds."</p>
			<h4>What the dog is thinking if you  have to flick:</h4>
			<p>"I will win this game!!!! Ouch! He flicked me after he said 'release'.   Oh, but then I get a treat and some loving. I wonder if he wants me to let go of the toy? Hmm.... I'll try that next time."</p>
		</section>

		<section class="post container-fluid">
			<h2>4) After Your Dog Has Learned To Bite Consistently</h2>
			<h3>Extending The Command</h3>
			<p>Extending this command will be easy once your dog learns to enjoy the game. You will have a more difficult time of getting him to stop.</p>
			<h3>Adding A Verbal Cue</h3>
			<p>Once again, when your dog will grip the toy consistently, you can add the command word. The command word is not particularly necessary, but it is always nice to be able to tell your dog when you want to play.<br/><br/>
			One benefit of adding the command word is when you don't use it, your dog knows you do not want to play. This will only happen if you are consistent about using it every time you do play, though.</p>
			<h4>Real time behavior</h4>
			<ul>
				<li>Give the Command word. 'Bite', in my case.</li>
				<li>Encourage your dog to grip the toy</li>
				<li>Your dog bites the toy</li>
				<li>You mark the behavior</li>
				<li>You release your dog</li>
				<li>You give him loving and treats!</li>
			</ul>
		</section>

		<section class="post container-fluid">
			<h2>5) Fading The Substitution</h2>
			<p>In this command, we are fading the substitution for the toy. As with other commands, we do this through anticipation and subtle changes in our movements.
			</p>
			<h3>Utilizing Anticipation</h3>
			<p>Generally, we use the association between the command word and the behavior to fade a lure. In this case, we are using the association between the release cue and the substitution. Over time, your dog will come to expect the substitution. This will cause him to release from the toy and to expect a treat once you give the release cue. This will give you the opportunity to not have you hand right next to him. Give the release cue as normal, but then let your dog come to you in order to be rewarded. You can even ask for a sit afterwards!</p>
			<ul>
				<li>Give the command word</li>
				<li>Encourage your dog to take the toy</li>
				<li>When he grips the toy, mark the behavior</li>
				<li>Give the release cue</li>
				<li>Wait a second or two to see if your dog will release the toy</li>
				<li>If your dog releases, Reward!</li>
				<li>If your dog does not release, present the substitution and keep at it!</li>
			</ul>
			<p>The amount of time it will take the dog to build the associate will vary. If you have been training your dog, the association will be built more quickly than if you just began training. Dogs need to learn how to be trained. Once they expect to be trained, they will be trying to figure out what you want them to do by displaying random behaviors.<br/><br/>
			At this point in my dog's life, whenever he wants attention, he will actually sit up on his bottom. He has learned that this behavior has gotten him attention before and he knows hes cute as hell. The point is, he displays different behaviors because he's learned it will gain him attention. So keep up the training!</p>
			<h3>Reduce substitution movement</h3>
			<p>You will reduce the movement of the substitution just like you would for a lure. Do everything in small steps so the dog still recognizes what you are doing. You want to be making progress while the dog is still succeeding. If your dog does not recognize what you are doing as the substitution, back up a few steps and try again.</p>
			<ul>
				<li>At first, you will be presenting the substitution right next to your dog.</li>
				<li>Next, hide the treat if you have been showing it.</li>
				<li>Instead of presenting the substitution right next to your dog, increase the distance by 6 inches.</li>
				<li>Your end goal is to not have to do any substitution, but that your dog will anticipate the reward based on the release cue.</li>
			</ul>
			<p>Each move will vary based on your dog's anticipation. Gauge your movement of the substitution based on your dog's progress. If all you need to do for your dog to release is move the target slightly toward him, there's no need to move the substitution nearer your dog.</p>
		</section>

		<section class="post container-fluid">
			<h2>6) Extinguishing The Treats</h2>
			<p>It should not be hard to wean your dog onto play as a reward. After all, this is a game. The only time you need to fade a reward is when fading the substitution. To do this, just amp up the praise reward you give your dog. You can also use the conventional methods listed below.</p>
			<h3>Interval Reinforcement</h3>
			<p>The main tool we will use in this process is interval primary reinforcement. This means that will we not give food rewards for every time the dog successfully completes a command, but only on occasion. Instead of this, we are going to substitute a high level of verbal praise, petting, and any other daily reward.<br/><br/>
			At first, change the reinforcement schedule so you are giving a food reward every other command, then switch it to every third command and so on. Remember, you do not want to be predictable with this, so every once in awhile give a food reward a couple times in a row. 	The key is unpredictability, so the dog is always working hard for their reward.<br/><br/>
			The ultimate goal is to get the dog to basically forget about food rewards and focus more on the verbal praise and petting. This way, when you do give the dog a food reward, it will be even more reinforcing than if you give them food rewards constantly.<br/><br/>
			Get creative with this. I always like to release my dog to anything pleasurable for him. Before I feed him, I ask him to sit, then release him to his food. When I get home from work and he reallly wants to play, I make him sit, then I release him to my praise. You want your dog to earn every bit of what you give him. Look at the No Free Lunch Policy for more detail on this.</p>
			<h4>What the dog is thinking when they do not get a treat:</h4>
			<p>"That’s weird. I usually get a treat for doing this. Although, I did get TONS of praise this time. To be honest I can deal with that."</p>
			<h4>What the dog is thinking when they do get a treat:</h4>
			<p class="last">"What an unexpected surprise! I was a little worried that I was doing something wrong, but this totally makes me feel better!"<br/><br/>
			Think of this process as weaning off of something. In this situation, we are going to shift from food as the reinforcement to praise. If you just stop giving treats after giving them every time, the dog will become discouraged, but if you slowly wean them onto praise, they will not notice the difference after a week or two.</p>
			<h3>Selective Reinforcement</h3>
			<p>Selective Reinforcement is another great tool. It is a great way to simultaneously wean your dog from food rewards and improve a command. When using this technique, begin to reward only the better quality commands your dog performs. Your dog will get frustrated when he doesn't get a treat after every performance, but this will encourage him to try new things to earn the reward. This creativity is key in shaping a new behavior, or in this case, improve a known behavior.</p>
			<h4>What the dog is thinking when they pose slowly:</h4>
			<p>"Well this is new. I thought that when I moved like this, I would get a reward. I wonder what’s going on?"</p>
			<h4>What the dog is thinking when they pose quickly</h4>
			<p class="last">"Well I thought I did the same thing I did last time, but this time I got a reward? I mean I guess I sat a little faster than last time, I wonder if that’s it?"
	This connection won’t be immediately apparent to the dog, but they will make it eventually.</p>
		</section>

		<section class="post container-fluid">
			<h2>7) Increasing The Difficulty</h2>
			<p>When increasing difficulty, it is key that you do not raise it too quickly. If you take a dog that just learned how to come and expect him to do it perfectly around new people and animals, you are going to discourage him and yourself. Your goal is to slowly build to that end, but it takes time and patients.<br/><br/>
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
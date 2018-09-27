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
                        <a class="dropdown-item active" href="bp_dt_posing.php">Posing</a>
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
			I will also include a section called "What the Dog is Thinking" in some sections when it is applicable. I have found that this really helps people understand WHY they are doing something, and not just doing it because trainers tell you to.<br/><br/>
			</p>
			<h3>Equipment Needed</h3>
			<ul>
				<li>A pole of some sorts, with a ball put on the end. I like to use dowels from hardware stores and a tennis ball, but it is up to you.</li>
				<li>A clicker</li>
				<li>Treats!</li>
				<li>Patients</li>
			</ul>
			<h2>Defining the Command</h2>
			<p>Posing is going to be a general section. You can pose your dog in many different positions that it would be impossible and redundant to dedicate a section to each position. When training different positions, the concept is going to be the same for all of them.<br/><br/>
			My example of posing is going to be a command I call "Pretty." My end goal is for the dog to sit up on his bottom and stay there until I release him. This is a simple pose, but the methods for teaching other poses are the same.<br/><br/>
			If you have a specific pose you would like me to show you, let me know! I will try to make time to train my dog the pose requested and post it on the blog!</p>
		</header>

		<video class="video_1"></video>

		<section class="post container-fluid">
			<h2>1) Getting The Dog Into Position</h2>
			<p>Even though I separate Getting the Dog into Position and Marking the Behavior, the timing needs to be very precise. You must mark the behavior the instant the dog is into position. This helps the dog make a connection between posing, the marker and the reward.<br/><br/>
			When getting the dog into the desired pose, I like to use targeting. I do this because of the added distance it gives between the dog and I. This will allow for more ease of movement. The added distance will also make it easier to fade the target in the future.<br/><br/>
			I will give a brief explanation of other methods, but I recommend utilizing the target method.</p>
			<h3>Targeting/Molding</h3>
			<p>If you have not taught your dog how to target, you should go back and train that command before using it in posing. Getting your dog into position using targeting will be very similar to luring. The only difference is the target will take the place of your hand.<br/><br/>
			To train 'pretty', bring the target above your dog's head. You want the target to be out of his reach so he has to jump a little to touch the target. Because it is unlikely your dog will be able to balance on his rump initially, you must mold this command. At first, you just will want your dog to show progress to the end goal of balancing on his bottom. I will outline some general steps, but the bottom line is to always reward progress. This is when marking the behavior is very important, but we will talk about that in the next section.</p>
			<h4>Steps to 'Pretty'</h4>
			<ul>
				<li>At first, you may just be able to get your dog to give a little jump, bringing his front paws off the floor. Mark and reward!</li>
				<li>Your next step could be some added height to your dog's jump. Mark and reward!</li>
				<li>Next, you could try to add some duration to the jump. This is when you could add a release cue. Mark, release, and reward!</li>
				<li>Finally, you could only reward your dog for the better posture behaviors. Mark, release, and reward!</li>
				<li>You can always add some duration or posture requirements!</li>
			</ul>
			<p>Remember, this is just a rough outline. You could have smaller steps between each of these steps. Always keep in mind that training is suppose to be fun! So reward as often as possible. Any progress should be rewarded.</p>
			<h3>Luring/Molding</h3>
			<p>Luring your dog would be extremely similar to targeting. The main difference would be that your lure hand would take the place of the target. I only recommend using this technique if you do not want to teach your dog how to target.<br/><br/>
			If you do use this technique, it will be the exact same as targeting, except with your lure hand. You can use the same progression points as the example above. But remember, just as with targeting, keep it fun and always reward progression!</p>
		</section>

		<section class="post container-fluid">
			<h2>2) Marking The Behavior</h2>
			<p>Marking the behavior will be the most important part of molding this command. When molding a command, it is key that you mark the most progressive part of the behavior. When training 'pretty', your dog may jump just a few inches higher each time. If you mark too late or early, you are not marking the progression of the behavior. You want to communicate to the dog exactly what he is being rewarded for. He is being rewarded for progression to the 'pretty' command. If you mark regression, instead, your dog will learn to jump lower.<br/><br/>
			Can you see why that would be so important? This is where the short, precise noise of the clicker is useful.
			</p>
		</section>

		<section class="post container-fluid">
			<h2>3) Release</h2>
			<p>Just like any command with duration, the release cue will play a crucial role. You will want to add the release cue as soon as possible. Because you trained your dog to hold on the target until he is released, this should be simple. When you have your dog balancing on his bottom for a second or two, add the release cue. Once you add the release cue, you must be consistent in only rewarding your dog if they hold until they are released.<br/><br/>
			It will be your responsibility to ensure they do not fail too often. If your dog is failing more than 2/10 times, give the release cue sooner. Remember, we are trying to make training fun. If you have to give the No Reward Marker very often, it will not be as fun for you or the dog.</p>
			<h3>Introducing The Release Cue</h3>
			<p>You will want to add the release cue once your dog will hold the 'pretty' position for a second or two. His posture does not have to be perfect, he just needs to hold for a couple seconds. Once he can hold position, feel free to add the release cue. As stated before, it will be important that once you add a release cue, you do not reward the dog unless he holds position until released. If you are inconsistent about this now, it will make it much harder to train your dog to hold position.
			</p>
			<h3>Real Time Behavior</h3>
			<p>Do not let the spacing between steps fool you. This is a relatively quick procedure, and timing is key. This is how the steps will actually take place:</p>
			<ul>
				<li>Hold target above your dog's head</li>
				<li>Your dog jumps to touch and hold on target</li>
				<li>Mark the behavior with a clicker</li>
				<li>The second after you mark the behavior, release your dog. (You will extend the command later on).</li>
				<li>Give your dog a treat</li>
			</ul>
			<p>When you add the release cue, you can begin to relax on requiring your dog to touch the target with their nose. After all, you do not want to have to use the target forever. So release your dog from the 'pretty' position, not from touching the target. If your dog is in the 'pretty' position, he is in position. You do not want the behavior to be touching the target at this point.</p>
			<h4>What the dog is thinking at first:</h4>
			<p>"Well, just as before, if I touch the target and don't move until he releases me, I get a treat!"</p>
			<h4>What the dog is thinking if they leave position before release cue:</h4>
			<p>"Well if I wait until he says 'okay', then I get a treat. On the other hand, if I don't wait until he gives the release cue, I get a 'no' and ignored. I think I'll just wait for 'okay' and get a treat. That seems like the better option."</p>
		</section>

		<section class="post container-fluid">
			<h2>4) After Your Dog Has Learned To Pose Consistently</h2>
			<h3>Extending The Command</h3>
			<p>Once your dog will get into position and wait for the release cue consistently, it will be easy to add duration to this command. The most important thing when adding duration is to not let your dog fail too often. If you see that your dog's balance is wavering, release him. Over time, your dog's balance will get better and he will be able to stay in position for longer. Every dog is different, so keep the progress steady, but the success rate high.</p>
			<h3>Adding A Verbal Cue</h3>
			<p>Just as with any other command, once you can guarantee that your dog will get into position, you can add the command word. For me, this command word is 'pretty'. I did this because I like to be able to say "are you pretty?" and have my dog pose. It melts my heart every time!<br/><br/>
			But back to business. You will want to add the verbal cue as soon as possible because it will be crucial in fading the Target. You want your dog to associate the command word 'pretty' with him getting into position. Add the command word right before you bring your target above your dog's head. The command word will actually take the place of the target command word. If you have trained your dog to target, he knows that if he touches that ball, he gets a reward. So he will naturally seek to touch the ball even without a command word.</p>
			<h4>Real time behavior</h4>
			<ul>
				<li>Give the Command word. 'Pretty', in my case.</li>
				<li>Bring the target above your dog's head</li>
				<li>The dog will move into position</li>
				<li>You mark the behavior</li>
				<li>You release your dog</li>
				<li>You give him loving and treats!</li>
			</ul>
		</section>

		<section class="post container-fluid">
			<h2>5) Fading The Target</h2>
			<p>To fade the target, you must have added the command word consistently and built that association. You will be relying on anticipation to fade the target, mostly. You will also slowly reduce the movement of the Target.
			</p>
			<h3>Utilizing Anticipation</h3>
			<p>Dog's are smart. When you added the command word, you always said it right before you bring out the target. Because of your consistency in doing this, your dog has learned that if you say 'pretty', he will be posing on his bottom. Your dog also wants his treats as quickly as possible. So why wait until you bring out the target?<br/><br/>
			This is what we are looking for. We want your dog to associate the command word with being manipulated into the 'pretty' position. If you have been consistent about using the command word, your dog will build this association.<br/><br/>
			A good way to see if your dog will anticipate will be to add a delay after you give the command word.</p>
			<ul>
				<li>Give the command word 'pretty'</li>
				<li>Wait a couple seconds to see if your dog will anticipate the command</li>
				<li>If your dog does make any movement to the 'pretty' position, reward heavily!</li>
				<li>If your dog does not make any movement, use the target to get him into position.</li>
			</ul>
			<p>The amount of time it will take the dog to build the associate will vary. If you have been training your dog, the association will be built more quickly than if you just began training. Dogs need to learn how to be trained. Once they expect to be trained, they will be trying to figure out what you want them to do by displaying random behaviors.<br/><br/>
			At this point in my dog's life, whenever he wants attention, he will actually sit up on his bottom. He has learned that this behavior has gotten him attention before and he knows hes cute as hell. The point is, he displays different behaviors because he's learned it will gain him attention. So keep up the training!</p>
			<h3>Reduce target movement</h3>
			<p>Reducing the target movement is very similar to fading the lure in the 'sit' command. You will want to reduce the movement of the target, as well as utilize anticipation when fading the target. If your dog moves right into position when you give the command word, Great! But chances are that will not happen right away.<br/><br/>
			You will want to fade the target in small steps. When first teaching this command, you brought the target above your dog's head. But now that you have been training this command for a few days at least, your dog will know what you want from him. So instead of bringing the target all the way above your dog's head, bring it more in front of him. He should still get into position. When you added the release cue, you started to relax on if your dog touched the target. Now you are going to not even want your dog to touch the target.<br/><br/>
			Here are some steps you can use as a rough outline:</p>
			<ul>
				<li>At first, you will be putting the target directly over the dog's head.</li>
				<li>Next, hold the target a little in front of the dog, instead of directly over-head</li>
				<li>Keep holding the target further and further from your dog</li>
				<li>Your end goal is to just bring out the target and your dog get into position</li>
			</ul>
			<p>Each move will vary based on your dog's anticipation. Gauge your movement of the target based on your dog's progress. If all you need to do for your dog to get into position is move the target slightly toward him, there's no need to move the target nearer your dog.</p>
		</section>

		<section class="post container-fluid">
			<h2>6) Extinguishing The Treats</h2>
			<p>Fading the treats will be the same as with other commands. You will want to wean your dog onto real-life rewards such as praise, food, and play. You will always want to go back into training sessions and refresh the training, though.</p>
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
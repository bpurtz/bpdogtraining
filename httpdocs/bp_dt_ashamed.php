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
                        <a class="dropdown-item active" href="bp_dt_ashamed.php">Ashamed</a>
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
				<li>A role of tape (Preferably electrical)</li>
				<li>A dog</li>
				<li>A clicker</li>
				<li>Treats!</li>
				<li>Patients</li>
			</ul>
			<h2>Defining the Command</h2>
			<p>Everyone has seen those cute videos where people can get their dog to put their head on the ground with their paws on their nose. This command can be extremely cute when you want your dog to look ashamed for doing something.<br/><br/>
			The main technique when training this will be Forced Capturing. We are going to put tape on our dog's nose so they try to get it off with their paws. You can utilize this technique train so many cute behaviors. I've put tape on a dog's bottom to train him to look like hes chasing his tail. You can also use it to train shake, but that's another behavior.<br/><br/>
			
			Our end goal is to get our dog to put their paws on their nose until they are released. So whatever progress we make to this end, reward it!</p>
		</header>

		<video class="video_1"></video>

		<section class="post container-fluid">
			<h2>1) Getting The Dog Into Position</h2>
			<p>There are a few methods to get your dog into position, but I've only used forced capture with this behavior. It has been the most successful for me, so that is what I am teaching you.</p>
			<h3>Forced Capturing</h3>
			<p>As stated before, we are going to utilize tape to get our dog into position. We are 'forcing' them to display the behavior we want by putting a piece of tape on their nose.<br/><br/>
			When we put the tape on their nose, 95% of dogs will do exactly what we want. They will put their head on the ground and try to use their paws to get the tape off of their nose. I recommended electrical tape because it will not leave a residue, and will also stay on their snout. I recommend putting it on fur, so it will not fall off. If you put it directly on their nose, it will not stick.<br/><br/>
			Getting your dog into position is that easy! If you are having a tough time, but really want your dog to learn this command, send me a video and I will make a response video!</p>
		</section>

		<section class="post container-fluid">
			<h2>2) Marking The Behavior</h2>
			<p>Like always, marking the behavior is an important part of the command training process. In this case, it will not be difficult, though.<br/><br/>
			Later on, you will remove the tape from the dog's nose and utilize anticipation. At this point, marking the behavior will be more difficult. You may need to mold the behavior. By this, I mean rewarding any progress to the end goal. I will speak more of this in the 'Fading The Tape' section.
			</p>
		</section>

		<section class="post container-fluid">
			<h2>3) Release</h2>
			<p>Chances are, you will be able to add the release cue right away. I generally wait until the dog holds position for at least a few seconds, and in this case, that will be easy. Unless your dog is a tape ninja and can get the tape off of his nose in less than a second.<br/><br/>
			If your dog is getting the tape off too easily, just use better tape.</p>
			<h3>Introducing The Release Cue</h3>
			<p>As stated before, you can add the release cue right away.
			</p>
			<h3>Real time behavior</h3>
			<p>Do not let the spacing between steps fool you. This is a relatively quick procedure, and timing is key. This is how the steps will actually take place:</p>
			<ul>
				<li>Put the tape on your dog's nose</li>
				<li>Your dog gets into position while trying to remove tape</li>
				<li>Mark the behavior with a clicker</li>
				<li>The second after you mark the behavior, release your dog. (You will extend the command later on).</li>
				<li>Give your dog a treat</li>
			</ul>
			<p>We will want to use the release cue right after the clicker originally. We do not want the clicker to become the release cue. Once you use the release cue, remember, you must be consistent in rewarding your dog only if they wait until the release cue to break position.</p>
			<h4>What the dog is thinking at first:</h4>
			<p> "Okay, so this is kind of annoying. They keep putting tape on my nose. The good thing is they seem to like it when I try to get it off, and I get a treat. Hmm?"</p>
			<h4 class="last">What the dog is thinking after some time:</h4>
			<p>"Alright, I'm beginning to see a connection. When I try to get the tape off, I get released to a reward. This isn't so bad I guess"</p>
		</section>

		<section class="post container-fluid">
			<h2>4) After Your Dog Has Learned To Hold Position Consistently</h2>
			<h3>Extending The Command</h3>
			<p>Extending the command will be done twice in this behavior. You can begin to extend the command while using the tape, but then you are going to have to reduce your standards once the tape is not used anymore. So be prepared for this when extending the command.</p>
			<h3>Adding A Verbal Cue</h3>
			<p>Because you can almost guarantee your dog will get into position from the beginning, you can add the verbal cue almost right away. Once again, it will be important to make the association between the command word and the behavior ASAP. The reason for this is because the verbal cue will be used to fade the tape. You will give the verbal cue and use anticipation to get your dog into position without the tape.<br/><br/>
			It will be important to practice with the tape still on for at least a couple days to build this association!</p>
			<h4>Real time behavior</h4>
			<ul>
				<li>Give the Command word.</li>
				<li>Put the tape on your dog's nose</li>
				<li>The dog will move into position</li>
				<li>You mark the behavior</li>
				<li>You release your dog</li>
				<li>You give him loving and treats!</li>
			</ul>
		</section>

		<section class="post container-fluid">
			<h2>5) Fading The Lure</h2>
			<p>To fade the tape, you must have added the command word consistently and built that association. You will be relying on anticipation to fade the tape, mostly.
			</p>
			<h3>Utilizing Anticipation</h3>
			<p>Dog's are smart. When you added the command word, you always said it right before you put the tape on your dog's nose. Because of your consistency in doing this, your dog has learned that when you give the command word, he will be putting his paws on his nose. Your dog also wants his treats as quickly as possible. So why wait until you bring out the tape?<br/><br/>
			This is what we are looking for. We want your dog to associate the command word with being manipulated into position. If you have been consistent about using the command word, your dog will build this association.<br/><br/>
			A good way to see if your dog will anticipate will be to add a delay after you give the command word.<br/><br/>
			You will notice the similarity between this and other commands. I do this on purpose to show how command training principals apply to many different commands. By this point in training, you should be able to anticipate what I will say. Just like your dog will anticipate moving into position.</p>
			<ul>
				<li>Give the command word</li>
				<li>Wait a couple seconds to see if your dog will anticipate the command</li>
				<li>If your dog does make any movement to the proper position, reward heavily!</li>
				<li>If your dog does not make any movement, use the tape to get him into position.</li>
			</ul>
			<p>The amount of time it will take the dog to build the associate will vary. If you have been training your dog, the association will be built more quickly than if you just began training. Dogs need to learn how to be trained. Once they expect to be trained, they will be trying to figure out what you want them to do by displaying random behaviors.<br/><br/>
			At this point in my dog's life, whenever he wants attention, he will actually sit up on his bottom. He has learned that this behavior has gotten him attention before and he knows hes cute as hell. The point is, he displays different behaviors because he's learned it will gain him attention. So keep up the training!</p>
			<h3>Reduce tape use</h3>
			<p>When we first began training this command, we placed the tape on our dog's nose with our hand. Over time, our dog has began to expect this. To reduce tape use, we can try a few different things:</p>
			<ul>
				<li>Use a smaller piece of tape. Try to make it so the dog doesn't even notice when he gets the tape off. This will help the dog understand that getting the tape off isn't the behavior you are looking for. You are looking for your dog to put his paws on his nose!
				</li>
				<li>Next, you can begin to not even use tape. Just put your hand on your dog's nose like you have before, but with no tape. If you have been using tape consistently, your dog will think there is tape on his nose and move into position. When there is no tape, you will once again show him that removing the tape isn't what he is being rewarded for.</li>
			</ul>
			<p>When we use tape in training, it can confuse the dog. The dog will initially think he is being rewarded for removing the tape. I mean, that is what he's doing when you mark the behavior. By reducing the tape use, we are tricking him. He thinks he's removing tape. When he finds there is no tape, but he is still being rewarded, he will realize what we really want him to do.</p>
		</section>

		<section class="post container-fluid">
			<h2>6) Extinguishing The Treats</h2>
			<p>Fading the treats will be the same as with other commands. You will want to wean your dog onto real-life rewards such as praise, food, and play. You will always want to go back into training sessions and refresh the training, though.</p>
			<h3>Interval Reinforcement</h3>
			<p>The main tool we will use in this process is interval primary reinforcement. This means that will we not give food rewards for every time the dog successfully completes a command, but only on occasion. Instead of this, we are going to substitute a high level of verbal praise, petting, and any other daily reward.<br/><br/>
			At first, change the reinforcement schedule so you are giving a food reward every other command, then switch it to every third command and so on. Remember, you do not want to be predictable with this, so every once in awhile give a food reward a couple times in a row. The key is unpredictability, so the dog is always working hard for their reward.<br/><br/>
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
			<p>"Well this is new. I thought that when I sat, I would get a reward. I wonder what’s going on?"</p>
			<h4>What the dog is thinking when they sit quickly</h4>
			<p class="last">"Well I thought I did the same thing I did last time, but this time I got a reward? I mean I guess I sat a little faster than last time, I wonder if that’s it?"<br/><br/>
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
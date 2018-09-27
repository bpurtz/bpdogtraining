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
                        <a class="dropdown-item active" href="bp_dt_come.php">Come</a>
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
			<p>If you haven’t read over my Principals of training, go do so now. When writing this command procedure, I assume that you have a basic knowledge of the terms and ideas introduced in that section. This is done in order to not be redundant throughout the teaching of multiple commands with the same ideas in each. <br/><br/>
	Another point I want to emphasize is to begin each new behavior in a secluded part of the house with few distractions. Do not expect your dog to learn something new when they are being distracted by sounds, scents, and scenery.<br/><br/>
	I will also include a section called "What the Dog is Thinking" in some sections when it is applicable. I have found that this really helps people understand WHY they are doing something, and not just doing it because trainers tell you to.<br/><br/>
	The first three steps in training this command will be done in two segments. First, you will reward your dog for just coming to you. At this point, you just want your dog to find coming to you very rewarding. Once you have practiced this for a couple days, you will delay the marker until you dog sits in front of you. By having two segments, you will more effectively communicate to your dog what you want from them.<br/><br/>
	At first, you want to communicate to them that coming to you is the goal. Once your dog understands this, you then want to communicate to them that you wish for them to sit in front of you. This is why there will be two different points we mark, depending on where we are in the command.</p>
		</header>

		<video class="video_1"></video>

		<section class="post container-fluid">
			<h2>1) Getting The Dog Into Position</h2>
			<p>Teaching "Come" to your dog will be different than most other commands. I still like to add duration to this command, but it will be modified. When I give the command "come", I want my dog to run to me and sit down in front of me. I want him to remain there until I release him. If you do not care about adding duration to this command, just skip over steps regarding extending the command.<br/><br/>
	As I said in the introduction, you will repeat the first three steps in two segments. First, you will mark and reward your dog coming to you. Once they are coming to you more often, you can delay the marker until they are sitting in front of you. This is when you would add the release cue.</p>
			<h3>Capturing/Luring</h3>
			<p>The first technique we will utilize uses both capturing and luring. Carry around a clicker and some treats while around the house. When you notice your dog is likely to come to you, beckon him by bending over and making kissing noises. You do not want to use the command word right off the bat when using this technique. Wait until your dog is beginning to come more consistently before you do this.<br/><br/>
	When you beckon your dog, he will likely come to you, thus getting him into position.</p>
			<h3>Forced Capturing</h3>
			<p>As with training heal, we can use forced capturing in this command. To do this, we will need a retractable leash. When training, wait until your dog wonders off a little ways. Give the command "come" and beckon your dog to you. If he comes, mark and reward. If he doesn't, give a pull on the leash to encourage your dog to come. Don't jerk too hard, though. You want your dog to be excited about coming to you, not being dragged to you.<br/><br/>
	Note that we can add the command word right away with this technique. We can do this because we can guarantee the dog will get into position while using the leash.</p>
		</section>

		<section class="post container-fluid">
			<h2>2) Marking The Behavior</h2>
			<p>Marking this behavior depends on what you are trying to accomplish with this command. Whether or not you want to add duration to this command, begin training by marking when your dog is running towards you. Once your dog is coming consistently, you can begin to delay marking the behavior until your dog is in the sit position. We do this because when we mark the behavior, we are telling the dog what he is doing correctly. At first, we just want to tell him that coming to us is good. Once he is consistent with that, we will then delay the marker in order to communicate to him that he needs to sit to complete the command.
			</p>
		</section>

		<section class="post container-fluid">
			<h2>3) Release</h2>
			<h3>Introducing The Release Cue</h3>
			<p>You would only want to add a release cue if you wanted to add duration to this command. If that is the case, add the release cue once he is consistently coming to you and sitting down. Just as with the "sit" command, you want to consistently give the release cue before your dog gets up from the sit position.<br/><br/>
	We are adding the release cue before we add the command word because the dog has already been exposed to sitting. Because of this, he is already familiar with being released. He is not familiar with the "come" command, though. So we are waiting to add the command word until he is coming when called consistently.
			</p>
		</section>

		<section class="post container-fluid">
			<h2>4) After Your Dog Has Learned To Hold Position Consistently</h2>
			<h3>Extending The Command</h3>
			<p>Extending he command will only come into play if you added a release cue to this command. For those of you who did this, extending the command goes hand in hand with the sit/down/stay command. Because your dog will be sitting once he comes to you, when you work on the sit/down/stay command, you are working on this command as well!</p>
			<h3>Adding A Verbal Cue</h3>
			<p>You will notice that I only added the verbal command word immediately with the forced capture technique. This is because I can guarantee that the dog will get into position with this technique. With the other technique, I cannot guarantee this. Because of this, you would have to wait to add the command word with the Capture/Lure technique. Once your dog will come consistently with the lure, then you can add the command word. <br/><br/>
	You can add the "come" command word by saying it before you beckon the dog to you. You want to build the association between this command word and your dog successfully coming to you and sitting.</p>
		</section>

		<section class="post container-fluid">
			<h2>5) Fading The Lure</h2>
			<p>As with the previous step, you will only need to fade the lure if you used the Capture/Lure technique. You can do this by getting your dog to associate the command word 'come' to you giving him a reward. You want your dog to associate you saying "come" and him coming to you. After you build this association, you will not need to lure your dog by bending over and beckoning him to you. He will anticipate the reward and come to you once you give the command word.
			</p>
		</section>

		<section class="post container-fluid">
			<h2>6) Extinguishing The Treats</h2>
			<p>Extinguishing the treats is one of the most important steps to training a command. You do not want your dog to only obey you when you have some tasty treats with you. You want him to obey you no matter what.<br/><br/>
	This is the point where I am going to reference Primary and Secondary reinforcement.
	Your goal is to wean your dog off of primary reinforcement (food) and on to a secondary reinforcement (Praise or another ).</p>
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
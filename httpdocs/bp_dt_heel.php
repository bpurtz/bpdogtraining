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
                        <a class="dropdown-item active" href="bp_dt_heel.php">Heel</a>
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
			<p>If you haven’t read over my Principals of training, go do so now. When writing this command procedure, I assume that you have a basic knowledge of the terms and ideas introduced in that section. This is done in order to not be redundant throughout the teaching of multiple commands with the same ideas in each. <br/><br/>
	Another point I want to emphasize is to begin each new behavior in a secluded part of the house with few distractions. Do not expect your dog to learn something new when they are being distracted by sounds, scents, and scenery.<br/><br/>
	I will also include a section called "What the Dog is Thinking" in some sections when it is applicable. I have found that this really helps people understand WHY they are doing something, and not just doing it because trainers tell you to.<br/><br/>
			</p>
		</header>

		<video class="video_1"></video>

		<section class="post container-fluid">
			<h2>1) Getting The Dog Into Position</h2>
			<p>The correct position can vary between trainers. I like to have the dog on my left side, his shoulders aligned with my hips. You can train your dog to heel on your right side, it is just less common.<br/><br/>
			I use two methods when getting the dog into position. These two should both be utilized as one is on leash and one is off leash. It is good to have your dog be able to heel while both on and off leash. Using both of these techniques will help you achieve this goal.</p>
			<h3>Forced Capture</h3>
			<p>TWhen you normally think about capturing a behavior, you envision yourself following your dog around waiting for him to do the behavior you liked so much. Using this technique, we can expedite this process by forcing our dog into position by using leash techniques.<br/><br/>
			When walking your dog, most people have trouble with their dog pulling. Using Forced Capturing, we are going to use this to our advantage. When your dog moves out in front of you, turn around. This will cause your dog to be behind you. He will naturally want to go back ahead of you, so he will speed up. When he does this, he will pass by your hip. This is where you want him, so you will mark this! Getting the dog into position is that easy!</p>
			<h3>Luring</h3>
			<p>You will begin to use luring when you are practicing off-leash heeling. To lure the dog into position, we are going to manipulate the lure a little bit. Instead of having the lure in our right hand, we are going to have it in our left hand with the clicker. We do this because we want the dog to walk next to our left hip, and it is hard to use your right hand to lure your dog into position while walking.<br/>
			Once you have your left hand baited, encourage your dog to sniff your hand and follow you while you are walking.</p>
		</section>

		<section class="post container-fluid">
			<h2>2) Marking The Behavior</h2>
			<p>Marking the behavior is the most important part of training this command. Chances are, your dog will move past your hip fairly quickly. This will make it difficult for you to mark the behavior correctly. It is also important that you make sure your dog realizes what he is being rewarded for. He may just be so energetic that he isn't thinking about treats. I will make a special note for this subject.
			</p>
			<h3>Important Note:</h3>
			<p>When you are marking this behavior, giving the reward is critical. You must give your dog the reward while he is still in position. The best way to do this is to organize your hands so that you have your right hand free to go in front of your body to shove the treat in your dog's face. You want your hand to get there after you mark the behavior. I encourage you to watch the video if this is unclear.</p>
		</section>

		<section class="post container-fluid">
			<h2>3) Adding the Command Word</h2>
			<h3>Adding A Verbal Cue</h3>
			<p>Because you can guarantee that your dog will fall into position, you can add the verbal command word right away. Just ensure that the command word is delivered at the correct time. You want to say the command word a second or two before the dog gets into position. It is also important that you only give the command word if the dog is falling into position correctly. If they are walking 4 feet to your right, don't give the command word until they are closer.
			</p>
			<h4>Important Note</h4>
			<p>When you begin to work on getting your dog to heel off-leash, you will want to be careful about using the command word. I would do a few repetitions without the command word to ensure your dog will obey your lure.</p>
			<h3>Extending the Command</h3>
			<p>Extending the command will come easy, especially if your dog likes treats. You will find that after awhile, you will see your dog following along at your side looking up at you. Utilize this to extend the command. Because your marker is communicating to your dog what you want from them, you always want to mark your dog the second he falls into position. The trick to extending the command is to simply add continuation rewards.<br/><br/>
			To add continuation rewards, you will reward your dog after the initial clicker, then continue to use verbal praise to keep your dog in position. After a couple seconds of staying in position, you can mark and reward your dog again. So you will be marking a couple times in the same behavior. By doing this, you are communicating to your dog that if they stay in position, they will be rewarded again.<br/><br/>
			Once your dog is staying in the 'heel' position for a few seconds, you can add the release cue as normal.</p>
		</section>

		<section class="post container-fluid">
			<h2>4) After Your Dog Has Learned To Heel Consistently</h2>
			<h3>Introducing the Release Cue</h3>
			<p>We wait to introduce the release cue on this command because in the beginning, your dog will only be in position for a split second and you need that time to mark the behavior and reward your dog. Once your dog understands that when he is by your side, he will get rewarded, you will find him there often. Once you can get your dog to stay in position long enough to get the release cue in there, add the release cue. This should then progress to giving the No Reward Marker if your dog leaves position before being released.</p>
			<h4>What the dog is thinking at first:</h4>
			<p>"Okay, so this is weird, but when I walked past my owner, I got rewarded."</p>
			<h4>What the dog is thinking after some time:</h4>
			<p>"Every time I am at my owners left hip, I get rewarded. I think I might just hangout here."</p>
			<h4>What the dog is thinking after more time:</h4>
			<p>"He says "heel", I go to his left hip, I get rewarded. It seems pretty simple to me."</p>
		</section>

		<section class="post container-fluid">
			<h2>5) Fading The Lure</h2>
			<p>If you used the on-leash technique, you will not need to fade a lure because you had no lure. If you are working off-leash, fading the lure is a fairly quick process. Because your left hand at your side is the lure, put less and less movement in that arm. You want your dog to fall into position when you give the command word "heel". So after your dog has been working on this command awhile, begin to add a pause between the command word and the lure. Your goal is for your dog to associate the command word with being lured into position. He will begin anticipate getting into position before you lure him. Once he gets into position without the lure, give him lots of treats and loving!
			</p>
		</section>

		<section class="post container-fluid">
			<h2>6) Extinguishing The Treats</h2>
			<p>This command is just like any other. Use the two methods below to wean your dog on to 'real-life' rewards. You do not want your dog to get discouraged, so take your time. You want to slowly transition from giving a treat every time to only giving treats during training sessions.</p>
			<h3>Interval Reinforcement</h3>
			<p>The main tool we will use in this process is interval primary reinforcement. This means that will we not give food rewards for every time the dog successfully completes a command, but only on occasion. Instead of this, we are going to substitute a high level of verbal praise, petting, and any other daily reward.<br/><br/>
			At first, change the reinforcement schedule so you are giving a food reward every other command, then switch it to every third command and so on. Remember, you do not want to be predictable with this, so every once in awhile give a food reward a couple times in a row. The key is unpredictability, so the dog is always working hard for their reward.<br/><br/>
			The ultimate goal is to get the dog to basically forget about food rewards and focus more on the verbal praise and petting. This way, when you do give the dog a food reward, it will be even more reinforcing than if you give them food rewards constantly.<br/><br/>
			Get creative with this. I always like to release my dog to anything pleasurable for him. Before I feed him, I ask him to sit, then release him to his food. When I get home from work and he reallly wants to play, I make him sit, then I release him to my praise. You want your dog to earn every bit of what you give him. Look at the No Free Lunch Policy for more detail on this.</p>
			<h4>What the dog is thinking when they do not get a treat:</h4>
			<p>"That’s weird. I usually get a treat for doing this. Although, I did get TONS of praise this time. To be honest I can deal with that."</p>
			<h4>What the dog is thinking when they do get a treat:</h4>
			<p class="last"> "What an unexpected surprise! I was a little worried that I was doing something wrong, but this totally makes me feel better!"<br/><br/>
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
			<p>Increasing difficulty is the same as always in this command. If you need more information on how to increase difficulty, reference the Principals of Dog Training section.</p>
			
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
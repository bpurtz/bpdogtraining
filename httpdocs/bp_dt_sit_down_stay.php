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
                        <a class="dropdown-item active" href="bp_dt_sit_down_stay.php">Sit/Down/Stay</a>
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
                        <a class="dropdown-item" href="#">Aggression</a>
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
			<p>If you haven’t read over my Principals of training, go do so now. When writing this command procedure, I assume that you have a basic knowledge of the terms and ideas introduced in that section. This is done in order to not be redundant throughout the teaching of multiple commands with the same ideas in each. 
			 <br/><br/>
	Another point I want to emphasize is to begin each new behavior in a secluded part of the house with few distractions. Do not expect your dog to learn something new when they are being distracted by sounds, scents, and scenery.<br/><br/>
	I will also include a section called "What the Dog is Thinking" in some sections when it is applicable. I have found that this really helps people understand WHY they are doing something, and not just doing it because trainers tell you to.</p>
		</header>

		<video class="video_1"></video>

		<section class="post container-fluid">
			<h2>1) Getting The Dog Into Position</h2>
			<p>Even though I separate Getting the Dog into Position and Marking the Behavior, the timing needs to be very precise. You must mark the behavior the instant the dog is into position. This helps the dog make a connection between sitting, the marker and the reward.</p>
			<h3>Luring</h3>
			<p>As usual, luring is the most common way for you to get your dog into the sitting or down position.
As with all training, you want the dog to demonstrate the correct behavior. This way you can communicate to them that sitting or lying down is the behavior that you want them to do. Remember, they do not speak English, so you have to communicate, via lure and clicker, what you want them to do.<br/><br/>
	With luring, you are going to use their natural drive of food to get them into the sit position. Hold the treat directly above their head. This will force them to sit down in order to keep an eye on the reward. Some dogs will jump after the treat, but you must not allow them to get the reward. If you allow them to get the treat by jumping, you are reinforcing the jumping behavior and not the sitting behavior.<br/><br/>
			If the dog is not responding to this technique, and you have tried it multiple times, move on to the next technique.<br/><br/>
			*NOTE: You must not allow the dog to get up from the sit position when receiving his reward. It will be instinctual for the dog to get up and try to get the reward while your hand is in transit. You must not reward this. For more information on this review Luring techniques in the Principals of Dog Training.<br/><br/>
			**NOTE: As discussed in the Introduction to Training, you do not want to "show the lure". In other words, you do not want the reward to be visible in your hand. This will make weaning the dog off food rewards much easier in the future.
			</p>
			<h3>Capturing</h3>
			<p>To capture this behavior, you simply need to find times that you dog normally sits. Most common times are when your dog is waiting to go outside or wanting some love. You need to be careful with this, though, as you do not want to reinforce a bad behavior such as begging. You also do not want to interrupt your dogs feeding time, as this will be a hard time to reinforce as the dog is already eating.<br/><br/>
*NOTE: Capturing is only used to get the dog to find sitting rewarding. Once the dog is more inclined to sit, luring should be used to progress the command to its finish.</p>
			<h3>Physical Manipulation</h3>
			<p>As I have said before, physical manipulation is not as effective as the other techniques, but it can be used to get the dog into difficult positions that no other techniques can achieve.<br/><br/>
In this case, you want to simply press lightly downwards on the dog’s rear end. You do not want to be too physical with technique, or the dog could believe that you are forcing him, and have a negative association with physical manipulation. If he is resisting, you can also push the dog backwards as well as down. This will be more natural with the dog’s joints, and it usually does not take too much pressure to achieve results.<br/><br/>
*NOTE: Physical manipulation is only used to get the dog to find sitting rewarding. Once the dog is more inclined to sit, luring should be used to progress the command to its finish.</p>
			<h3>Molding</h3>
			<p>Molding is generally used with more complex behaviors such as rolling over or shutting the door, but it is a great way to get the dog to perform behaviors they are not very inclined to perform. To mold this behavior, you will reward any movement your dog makes to a sit. Hold your lure above the dog’s head, and whatever movement the dogs rear makes toward the ground, reward it. The idea is to get the dog to realize that every movement his bottom goes down, he will be rewarded for it.<br/><br/>
You can also pair physical manipulation with this technique. When lightly pressing on your dog’s rear end, watch for the dog’s bottom to move downwards. At any movement, mark that movement and reward. Continue this until your dog fully sits, then Jackpot him with lots of treats and love. This will show him how positive it is to sit, and soon he will be sitting constantly!
*NOTE: Molding is only used to get the dog to find sitting rewarding. Once the dog is more inclined to sit, luring should be used to progress the command to its finish. Molding will be used to shape more complex behaviors in future training, though.</p>
		</section>

		<section class="post container-fluid">
			<h2>2) Marking The Behavior</h2>
			<p>As stated before, you must mark the behavior the second the dog gets into position.
Marking the behavior is the simple part of training this command, but very important to the dog understanding it. The most important part of this is the timing. The better the timing of the marker, the more the dog will understand what you want from him, and the fewer times you will need to repeat the command before the dog understands it.
			</p>
		</section>

		<section class="post container-fluid">
			<h2>3) Release</h2>
			<h3>Introducing The Release Cue</h3>
			<p>The release is the most common and important part of this command that people forget. If you do not add a release cue to commands that have duration, your dog will simply sit, get the treat, and then get up immediately. There is no reason for the dog to stay in the position if you have not added a release cue.<br/><br/>
	If you have not read my overview on the release cue, I strongly recommend you go back and read all of that information, as I will assume you have already selected a release cue.
Once you have selected a release cue, you need to introduce the dog to the idea of that release cue. This is done after you have already marked the behavior and the dog is still sitting. At this point, it begins to get tricky.<br/><br/>
			The trick is to give the release cue right before your dog gets up from sitting. At first, you do not want to expect the dog to remain sitting for more than 3 or 4 seconds. Once 3 or 4 seconds have elapsed, give the release cue and move away from the dog, encouraging the dog to get up. Once he does, give him another treat and praise him. Repeat this process conservatively. You do not want to let the dog get up before the release cue, this will communicate to him that he does not need to wait for the cue. If he does do this, give a No Reward Marker, do not praise him or give him a treat. You do not want to reinforce this.
			<br/><br/>
			*Remember, you do not want to raise expectations too quickly. You want your dog to succeed 9/10 times. If he fails more than 3 times out of 10, you must reduce expectations in order to not discourage the dog.<br/><br/>
			Your goal is to get the dog to stay in position for longer and longer periods of time, and most importantly, to WANT to do this.
			</p>
			<h3>Real Time Behavior</h3>
			<p>Do not let the spacing between steps fool you. This is a relatively quick procedure, and timing is key. This is how the steps will actually take place, using luring:</p>
			<ol>
				<li>Hold lure hand above your dog’s head</li>
				<li>Simultaneously give the command "sit" (Do not use the command word until your dog has learned to comply with the lure consistently. I will speak on this more later.)</li>
				<li>Your dog sits</li>
				<li>The second his rear end touches the ground, click to mark the behavior and reward</li>
				<li>Hold him there for just a second or two</li>
				<li>Give the release cue and simultaneously back away, encouraging him to get up</li>
				<li>When he gets up, praise him and give him another treat.</li>
			</ol>
			<h4>What the dog is thinking at first:</h4>
			<p>"Wow! I got a treat! And they did that click noise that lets me know I’m being good! I’m not quite sure how I’m being good, but good to see they noticed my awesomeness."</p>
			<h4>What the dog is thinking after some time:</h4>
			<p>"Hmmmm…. Every time I sit down after they move their hand like that, they click to let me know I’m doing something good and then I get the treat. I wonder if those things are connected?"</p>
			<h4>What the dog is thinking after more time:</h4>
			<p class="last">"So every time they move their hand like that, say sit and I sit, I get rewarded. This seems like a pretty sweet deal. I think I can live with this life."</p>
		</section>

		<section class="post container-fluid">
			<h2>4) After Your Dog Has Learned To Hold Position Consistently</h2>
			<h3>Extending The Command</h3>
			<p>Once your dog is remaining in the sitting position for more than 5 seconds, you need to introduce continuation reinforcement. This is a way to encourage your dog to remain in position for an extended period of time.<br/><br/>
			When your dog is in the sit position, give him continual verbal praise and then a treat every 5 seconds or so.<br/><br/>
			As discussed before, start off with only a 5 second stay, then extend it a second or two every few commands. You do not want to hold the stay so long that the dog gets up, thinking he is not doing the correct behavior or simply gets distracted. Shoot for about a 2 or 3 second increase each day.
			</p>
			<h3>Adding A Verbal Cue</h3>
			<p>Once your dog is consistently sitting when you lure him into position, you can add a verbal cue for this command. You do not want to add it too soon, or you will desensitize your dog to the word "sit". Also, if you say, "sit" and your dog does not sit, you are teaching him that he does not have to sit when you ask him to. This is a bad habit to get into.<br/><br/>
	Timing is also important in this. You want to ask your dog to "sit" just before he complies with your command. You should put the lure hand over his head, and just before you think he is going to sit, say, "sit". When he complies, you are associating the verbal cue "sit" with him sitting and getting rewarded for it. Soon, you will be able to either use the verbal cue of "sit", or you can use the hand cue.</p>
			<h4>What the dog is thinking:</h4>
			<p class="last">"Well lets see here. If I get up before he says that one word (The release cue), he doesn’t get mad, but I also don’t get the petting and that delicious treat. But, if I wait for him to say that word, he just loves it! I think I will wait for that word from now on."</p>
		</section>

		<section class="post container-fluid">
			<h2>5) Fading The Lure</h2>
			<p>When fading the lure, always do it in small steps. I highly recommend looking at the Principals of Dog Training if you have not already. Because we always gave rewards with our non-lure hand, we can begin fading the lure much faster. You will want to take steps towards the end result.<br/><br/>
When you first teach sit or down, you bring your lure hand over the dog's head so that he will sit. When fading the lure, just make small adjustments. Begin by not moving your hand as close to your dog's head. Make it a more shallow dip. After more time, make it even more shallow. Begin to stand more upright. Your end goal is standing perfectly upright, and making the non-verbal cue subtle.
			</p>
			<h3>Example</h3>
			<p>Instead of raising your hand directly above the dogs head, do so a few inches in front of him. Each time you do the command, move your hand an inch more.
			Reduce your hand movement from going from your side to above your dogs head a few inches.
			Soon you will just need a subtle movement of your hand, such as moving it a few inches in the up direction.<br/><br/>
			*NOTE: You want there to be distinction from this non-verbal hand movement and other commands you want to introduce in the future, such as lying down.
			If you make too drastic of changes to the movement of your hand, your dog will not recognize the command, and will not sit. So be sure to make the change very subtle.</p>
			<h4>What the dog is thinking when switching reward hands:</h4>
			<p> "Well that’s weird, he’s not giving me the reward from the hand he usually does…. Oh well, I’m still getting my treat. I’m just going to keep following the same hand though, why change what isn’t broken?"</p>
			<h4>What the dog is thinking when changing hand movement slightly:</h4>
			<p class="last">"Hmm. That hand movement looked a tad different, but when I did the same thing I’ve been getting rewarded for, I still got my treat. So I just really don’t care."<br/>
			You want to manipulate your hand movement in small steps. You shouldn’t move to the next step until your dog has accepted the new step as the "norm". Then when your next movement is slightly different, your dog isn’t comparing it to the original hand cue, but to the previous one they just learned.</p>
		</section>

		<section class="post container-fluid">
			<h2>6) Extinguishing The Treats</h2>
			<p>Extinguishing the treats is one of the most important steps to training a command. You do not want your dog to only obey you when you have some tasty treats with you. You want him to obey you no matter what.<br/><br/>
			This is the point where I am going to reference Primary and Secondary reinforcement.
			Your goal is to wean your dog off of primary reinforcement (food) and on to a secondary reinforcement (Praise or another).</p>
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
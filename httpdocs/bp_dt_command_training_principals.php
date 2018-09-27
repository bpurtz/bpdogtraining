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
                <li class="nav-item dropdown active">
                    <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#">Principals of Dog Training</a>
                    <div class="dropdown-menu">
                        <a class="dropdown-item active" href="bp_dt_command_training_principals.php">Command Training</a>
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
			<h2>Before You Begin Reading</h2>
			<p>
			</p>
		</header>

		<video class="video_1"></video>

		<section class="post container-fluid">
			<h2 id="motivating_force">The Motivating Force</h2>
			<p>In order to successfully train your dog, you must give them motivation to learn. It is the same as with humans. Just think of it as going to school. Imagine getting the same job whether you failed out of school or passed with flying colors. There would be no motivation for you to do well in school. Humans work hard and study because they know it will benefit them in their future.<br/><br/>
			Now for dogs, they do not have the ability to think about things that will happen years in their future. Instead, they are thinking about what they will get in the very near future.  They work hard for a different reason. They have different motivators.  They do not care about getting a raise or getting that great job.  For dogs, we use different reinforcements to motivate them. The majority of reinforcers will be food, play and praise, but there are many more that you can think of in daily situations. This section will show you how to motivate your dog and help you identify situations where you can use different motivators than just food.</p>
			<h3>Primary Reinforcements</h3>
			<p>Primary reinforcements are something your dog finds naturally rewarding. The reinforcers mentioned above, food, play and praise, are all examples of something your dog naturally wants. We can use and develop these desires to train our dog.<br/><br/>
			When you reinforce your dog’s behavior, you are increasing the likelihood that your dog will perform that behavior again, just like if you get a raise you are likely to work harder.
			Utilizing Primary Reinforcement correctly can be a great tool in training, but if you use it incorrectly, you can increase the likelihood your dog will show undesired behaviors. The most common mistake I see of this is when a dog jumps on his owner. If the owner praises him for this, they are reinforcing this behavior and it is more likely to happen again.<br/><br/>
			On the other hand, if the owner completely ignored the dogs jumping, and then rewarded them once they where on the ground, your dog would be more likely to stay on the floor, because this is what you rewarded. You also have to remember what dogs find rewarding.  With jumping, the dog usually finds negativity towards jumping more rewarding than no attention at all. So when your dog jumps, do not push him away and make a big deal out of it. Your dog will end up thinking it is a game of sorts. You want to remove all attention. I will speak more on this in the problem behavior section. For now just take away that negative attention can be more rewarding than no attention whatsoever.</p>
			<h3>Increasing Drive</h3>
			<p>The reason Primary Reinforcements are so important is they are used in obtaining, developing, and maintaining a behavior. Without them, it would be very difficult to communicate to your dog and tell them when they are doing something good. When we increase drive, we give the dog even more motivation to work hard in a training session. If a dog has a low drive, it is like a human not caring if they get a promotion. They just won’t work hard for it. There are tricks for increasing a dog’s drive, but the idea behind them is all the same. When you withhold something, the dog will want it more. It is like going on a diet. You have no idea how much you want chocolate until you cannot have it anymore. </p>
			<h4>Food Drive</h4>
			<p>Food is the most common, and usually the strongest motivator for a dog. So cultivating a high food drive is a priority for training your dog. There are a couple ways of doing this.<br/>
			The most common way of increasing a dog’s food drive is to do the training before you feed the dog. When training your dog, it is important to get them on a regular feeding schedule. This means you cannot just leave food out all day. Leaving food out will drastically reduce their food drive, and also can lead to a lapse in discipline. By scheduling training sessions before a meal, they are hungry, and this will make them want the food rewards even more, thus increasing food drive. I am most definitely not saying to feed your dog less. They need their nutrition. If you feed your dogs three times a day, move the second meal of the day a little earlier, and do the training before the afternoon meal.<br/><br/>
			The next way to increase food drive is to use a more appetizing reward. If you use their regular kibble as a reward, they won’t really be too excited about it. On the other hand, if you use some chicken or turkey, they will be extremely motivated to work hard for that reward.
			Some important things to remember when thinking of a reward is portion size and the health of the treat.  You want it to be big enough to be tantalizing for the dog, but not so big that the dog fills up on it. A good size is usually about the size of a bean or a pea. You also want to make it healthy, as it will be supplementing your dog’s diet.</p>
			<h5>Some ideas for rewards:</h5>
			<ul>
				<li>My favorite reward is get some sliced turkey and tearing it into small pieces. This is affordable, healthy, and the dogs love it!</li>
				<li>Cook up some chicken breasts and dice them into a nice portion size.</li>
				<li>Diced steak</li>
				<li>Try to avoid pork or really fatty meats</li>
				<li>Also try to avoid most store bought treats as most of them are expensive and high in sodium.</li>
			</ul>
			<h4>Play Drive</h4>
			<p>Play drive can be very useful for some dogs. Usually the more energetic dogs who LOVE their toys. Many people who compete in Agility or another sport use this as a reward.<br/>
			The first step in increasing this drive is to simply play with your dog more. You have to be careful with this, though. You do not want to teach your dog to play rough, especially if you have children. Tug-of-war is a very common game that owners play with their dog, but many times it gets out of control and the dog learns to play too rough. When playing a physical game like this, you want to be playful and encourage the dog to be playful, but you want to keep the energy levels controllable.<br/><br/>
			When you are ready to use this as a reward (I will talk about this more later), you want to find your dog’s favorite toy, the one they go crazy for. You will save this toy for training purposes only. You also want to limit the number of toys they have out on a daily basis. You don’t want to remove all of their toys, just most of them. Then rotate which ones they have access to throughout the day. You must save their favorite one for training only though. This will make training special to them.<br/><br/>
			After this, limit the amount of praise they get before training. It is similar to increasing food drive at this point. You don’t want to only show them attention when you are training them, but a few hours before a training session, reduce the amount of affection you show them. If you really want an outstanding session, you can also crate them an hour before the training session. This will make them crave your playtime even more.<br/><br/> 
			An important thing to know about this is that it is generally not used when you are first teaching a behavior. It is best utilized when extinguishing the treat from a command and substituting play for food. I will talk more about this when I talk about extinguishing treats.</p>
			<h4>Praise Drive</h4>
			<p>Building this drive is almost identical to building the Play Drive. The only difference is that when using this as a reinforcement, you are not playing with your dog, but showing them praise, via petting and verbal praise.<br/><br/>
			To build this drive, you want to show the dog less praise for a few hours before the training session, or you can crate them an hour before the session for even better results.
 			<br/><br/>
			Unlike the Praise Drive, using praise can be a way to initially reinforce a new behavior. This will be discussed in more detail later, but it can be more difficult than using food as the reward. It is also utilized when extinguishing food as a reward.</p>
			<h3>Increasing Drive Secondary (Conditioned) Reinforcements:</h3>
			<p>A secondary or conditioned reinforcement is something neutral that your dog
			learns to find positive or negative. Pairing this neutral stimulus with something either positive or negative is how this is accomplished. The most common use of this is an owner saying “good boy”. Initially, your dog has no idea what this means, but by pairing it with praise and food, your dog learns to associate “good boy” with positive things, thereby making “good boy” positive in itself. This can also work on the negative side as well, although I generally discourage the use of it. Many times I see people screaming “NO!” at their dog. Generally they are using this completely wrong, but they have successfully paired the word “NO” with negativity. The dog has now learned that when their owner says “NO” it means something bad. In this case, “NO” would be a Secondary Punishment, but the idea is the same. I will teach you more about this when I talk about Negative Punishment and how to correctly use it.<br/><br/>
			I use positive association a lot in my training, and it is especially useful in extinguishing treats after training a command. I will use this more later when I talk about the No Reward Marker and Conditioning the Clicker. I want you to have a better understanding of the Basic Training Techniques before I go into detail about the specific techniques.</p>
		</section>

		<section class="post container-fluid">
			<h2 id="basic_training_techniques">Basic Training Techniques</h2>
			<p>When you learn how to train each individual command, I will be referencing this text a lot. Each section will cover a topic or technique that I will use multiple times training a behavior. This is done so that I do not have to repeat ideas that are common in many commands. It will make each behavior much more succinct and easier to understand. It is important that you read through this carefully so that you do not get lost when trying to learn how to train a command. If you do get lost when training a behavior, I encourage you to come back to this page and review the appropriate section. These ideas will also come into use if you decide to take your dog to the next level and begin training agility or tracking. You can also come up with your own tricks and send a video in! I will be glad to post videos of subscribers so that others can see what techniques have worked for you!
			</p>
			<h3>Positive Reinforcement</h3>
			<p>Positive Reinforcement is rewarding your dog when they perform a behavior you want them to perform more often. This reward does not always have to be food. It can be any of the Primary Reinforcements or secondary reinforcements. This is the main technique that I will use when training. When training a behavior, you are using this to encourage the dog to show a certain behavior more often. When the dog sits and you reward them for that, you are increasing the likelihood they will perform that behavior again.<br/><br/>
			The most common mistake people make when thinking about this technique is that they can only use it when they are in a training session. In reality, they can do it on a daily basis to reward desirable behaviors. A good rule of thumb is called the No Free Lunch Policy.</p>
			<h4>No Free Lunch Policy:</h4>
			<p>The No Free Lunch Policy is something outside of training sessions that basically says your dog needs to earn whatever they get. This will not only increase discipline, but you can use this to reinforce the commands you’ve already taught your dog.<br/>
			Think of every thing that your dog enjoys in life.</p>
			<ul>
				<li>Feeding time</li>
				<li>Going for a walk</li>
				<li>Going outside</li>
				<li>Getting petted</li>
				<li>Playing with you</li>
			</ul>
			<p>Anything that your dog really enjoys will apply. After thinking up this list, make sure to never let your dog receive any of these things without earning them. When I say, “earn them”, I mean make your dog perform a behavior in order to get them. Before you have started training a dog, they may not know any commands. So, to earn the reward, make your dog remain calm for an amount of time. When you are getting ready to feed your dog, don’t let him jump all over your and go crazy. Force your dog to wait quietly, then once you put down the bowl, release them to eat. The same goes for everything else. If your dog wants you to pet them, don’t just do this for free. Make them sit calmly, then release them and pet them. This will encourage your dog to act better on a day-to-day basis. <br/><br/>
			You always want to be aware of what you are reinforcing, though. I have seen so many people at the dog park who reinforce the wrong thing. Their dog will begin barking at a new dog entering the park, and out of embarrassment, they get down and praise their dog until it quiets down. It is a tough thing to do, but you cannot do this. It will only leave your dog thinking they did the right thing and that they should do that thing more often.</p>
			<h3>Negative Reinforcement:</h3>
			<p>Negative reinforcement is applying an annoying negative stimulus to your dog until they comply with what you want, and then removing it at that instance, thus rewarding the dog for complying. This can be a controversial method for people who want to train with purely positive methods. I do not recommend this in command training until you are at an advanced level where it is necessary in order for your dog to progress. However, this can be paired with positive punishment to be effective in stopping undesirable behaviors.<br/><br/>
			An example of this used to train a behavior is the use of a pinch collar. Pinch collars are designed to be uncomfortable to the dog when the dog is pulling. Then, when the dog stops pulling, the pinch collar relaxes and is no longer uncomfortable. Depending on the dog’s temperament, this can be an effective way of teaching a dog not to pull. However, if this technique is misused, it can be very damaging to the dog. This is why I only recommend using this technique at a higher level of training.</p>
			<h3>Positive Punishment:</h3>
			<p>Positive Punishment is applying a punishment in order to stop an undesirable behavior. This technique can be misused in so many ways.  I see many people beating their dog when they come home and the dog went to the bathroom inside the house. This has brought such negative stereotype to this technique that no one believes there is a correct way to use this technique. Well there is a correct way. There are three main points that need to be addressed in order for this technique to work.<br/><br/> 	
			(When describing positive punishment, I will use the example of hitting the dog. I do this to describe the WRONG way to use positive punishment. Below I will describe the correct way to use positive punishment. In no way to I approve hitting the dog as an appropriate punishment.)</p>
			<h4>Timing:</h4>
			<p>Timing is undoubtedly the most important of these. In the example above, the owner came home to their dog going to the bathroom inside the house and hit them as a punishment. There is a lot wrong with this picture, but as far as timing is concerned, the dog has no idea what he has done wrong. In order for positive punishment to be effective, it needs to be administered during or immediately after the undesired behavior. Dog’s have extremely short association time lengths, so if you discipline the dog hours after the bad behavior, your dog is not going to make a connection with the discipline and the bad behavior. Instead, your dog will think that he is being disciplined for what he is doing at the time of the punishment.</p>
			<h4>Type of Punishment:</h4>
			<p>There are many different types of positive punishments. In the above situation, the punishment was hitting the dog.  This is not one of the punishments you should use for a myriad of reasons. A punishment needs to have two different traits.
			</p>
			<ul><li>First, it cannot be associated with the owner in any way.  For instance, if an owner hits their dog for eating out of the trash the second it happens, the dog will understand that the owner does not want him to do this, but he will also only learn not to do this behavior while in the presence of the owner. Once the owner is gone, the dog feels like the trash is once again fair game. So not only did the owner risk their relationship with the dog, but the punishment was not even effective.</li></ul>
			<p>The best way to not have your dog associate the punishment with you is to get sneaky. This situation is one of the few times I will advocate the use of the shock collar, although before you think about using one of them, read my section on shock collars to learn how to use them correctly.<br/><br/>
			The use of a can with pennies inside of it is one way to punish your dog with noise. This may not seem like a punishment, but when a dog is doing something and a loud noise surprises them, it can be unpleasant to the dog. The surprise of the loud noise when you shake it is the punishment, just like using an air horn could be a positive punishment. In order for the dog not to associate the alarming noise with you, you must not be visible to the dog when the punishment is administered. One of the best ways to accomplish this is by using the "bait and surprise."<br/><br/>
			You will “bait” the dog to do the undesired behavior. You can do this by putting some meat in the trash and leaving the trash in a room with the dog. You will then leave the room, but have the ability to administer the loud noise when the dog gets too close to the trash. By punishing your dog with the loud noise, you have shown him what not to do. You have also not associated yourself with that punishment. You dog will then not only stop getting into the trash when you are home, but also when you are away.<br/><br/>
			The reason for “baiting” the dog is to increase the likelihood your dog will perform the undesired behavior. This may seem counterintuitive, but you do not want to sit around all day, hidden, waiting for your dog to perform the undesired behavior. By increasing the likelihood your dog will perform the bad behavior, you can discipline them the moment they get into the trash or do something else.</p>
			<ul><li>The second trait mentioned earlier is the magnitude of the punishment. This will vary from dog to dog, but you want your punishment to be enough to stop the behavior within two punishments, but not so sever that you hurt or scare your dog too badly. You do want your dog to have a negative association with the bad behavior, but you do not want to make your dog scared to try new things. As I said, this can vary from dog to dog, so you want to learn what is effective with your dog. Pennies in a can will frighten some dogs; others need a shock collar to curb their bad behavior using this technique. This will be discussed in more detail when I talk specifically about extinguishing undesirable behaviors.</li></ul>
			<p>The shock collar can be very useful in this situation because you can put a piece of meat into a trash can and put it in the middle of the room, then go outside and discipline the dog from outside the window. Using an air horn will be more difficult because you need to be out of sight, but still need to have the dog be surprised by the air horn. The shock collar can give more anonymity to the punishment.</p>
			<h3>Negative Punishment</h3>
			<p>Negative Punishment is punishing your dog by removing something they find enjoyable. This can range from taking away their favorite toy to removing attention from a dog. This is my favorite form of punishment because it uses no physical punishments, and instead helps you and your dog bond when the dog earns attention. The most common use of this, and best way to explain it, is the No Reward Marker.</p>
			<h4>No Reward Marker:</h4>
			<p>The no reward marker is one of the things you will use to discipline your dog in day-to-day situations. You first have to begin by conditioning your dog to the No Reward Marker.  As I have said many times before, your dog does not speak English. So when you say “no” to your dog, it means nothing to them, unless you pair it with something either negative or positive. In this situation, we will associate it with something negative, the removal of attention.<br/><br/>
			To condition this, you must be consistent in your administration of it. In every day situations, I want you to look for something your dog does wrong. It shouldn’t be too hard. It can range from him taking one of your shoes to him jumping on you. You can also use this during training a command as well, although you want to use it sparingly in this situation, as you do not want to discourage your dog. Lets use jumping as our example. When your dog jumps, I want you to say “no” firmly and clearly. Then, remove all attention to your dog for at least 15 seconds. You should notice your dog trying to get your attention by walking around you or maybe whining. This just means that it is working. You have successfully associated “no” with a negative punishment. This will be used much more when we work on extinguishing undesirable behaviors, but until then, feel free to use it around the house!
			<br/><br/>
			Once you associate “no” with negativity, you can use it more often, and your dog will know that they are doing something bad. It becomes a verbal punishment. If your dog takes a shoe, say “no”, take away the shoe, then ignore them completely.</p>
			<h3>Compulsion Training:</h3>
			<p>To begin this section, let me start off with saying that I do not recommend using this technique except with extremely experienced and high level trainers. It has been proven to work over in Germany, but I have many reserves on this training technique.<br/><br/>
			With compulsion training, you are motivating your dog by using anticipation of punishment. Instead of your dog doing the command in order to get a treat, your dog completes the behavior in order to avoid correction. This, I believe, is an extremely limiting factor in command training. When you use fear to motivate a dog. Your dog becomes afraid to try something new because they do not want to get corrected. This can make it very difficult to teach new behaviors, especially complicated ones where creativity is key. Although I do not advocate the use of this technique, I want to educate you about all of the different methods of training. I will not mention this training technique again, but if you have any questions, please feel free to contact me</p>
		</section>

		<section class="post container-fluid">
			<h2 id="where_to_start">Command Training</h2>
			<h3>Adding A Verbal Cue</h3>
			<p>This section will go over each step when training a command and explain the ideas behind it. It will also go into more detail about how to extinguish rewards and utilize the ideas from the previous section. I will be going through how to train a command chronologically, so if you do not understand a word or phrase, continue reading and come back later to finalize your knowledge.</p>
			<h3>Where to Start:</h3>
			<p>Before you begin training your dog, there are a few prerequisites that you need to cover in order to make this a successful training session.</p>
			<h4>Equipment:</h4>
			<p>The amount of equipment you need varies from trainer to trainer. At the bare minimum, you will need:
			</p>
			<ul>
				<li>Treats</li>
				<li>Somewhere you put your treats. This can be a training pouch, or just a pocket.</li>
				<li>Clicker. I strongly recommend this, but I will talk about alternatives later in this section.</li>
				<li>These items will be necessary in order for you to have an effective training session.</li>
			</ul>
			<h4>Setting:</h4>
			<p>As I have said before, when you are first training a command, you will need to start in a place with few distractions. Distractions could be different scents, people, or animals. I recommend starting your dog off in the garage or a guest room. These areas will become your base camp. As you get a command more reliable, you will move to more distracting areas in order to increase the difficulty of the command, but in the beginning, always start off at your base camp.</p>
			<h4>What Your Dog Needs:</h4>
			<p>I’m sure you’ve heard the cliché that teachers say about “bring your desire to learn.” That is basically what I want your dog to bring to every training session. The way we are going to get the dog to do this is to increase their food drive before the session. I already spoke about this, but as a review, you are going to have your training session before you feed your dog. Your training session will be supplemental to his daily food intake.</p>
			<h3>1) Getting The Dog Into Position</h3>
			<p>Getting the Dog into position is the first step in training a behavior. When training a command, you need to think about how you are going to be able to communicate to the dog. How will you tell the dog what you want them to do? There are five methods I will use to get the dog into position. Each of these techniques will have the same goal of getting the dog into the correct position. By getting the dog into the correct position, you can then reward this, thereby communicating to the dog what you want him to do. You do this by Marking the position and rewarding them when they first get into position. As you remember, Positive Reinforcement is rewarding a behavior to increase the frequency of the behavior. That is exactly what we are doing when training commands.</p>
			<h4>Luring:</h4>
			<p>Luring is by far the most popular technique used for getting the dog into position. It is quick, positive, and effective in most situations.<br/><br/>
			Luring is a pretty simple technique, but there are some subtleties that need to be noted. When luring, you are going to place a treat in your hand. The treat will need to have a fairly strong odor, because we do not want to show the dog the treat, but instead just have them follow the smell. When they are enticed by the smell, we will then move the “Lure” around to manipulate their body.<br/><br/>
			Sitting, for example, we will hold the lure above their head. This will cause 90% of dogs to sit, because they want to keep an eye on the lure and cannot do that standing. As I said before, there are some subtleties to this technique:</p>
			<h5>Teaching the Lure</h5>
			<p>In order for luring to be really effective, you need to teach your dog how to follow the lure. Yes, the dog will follow the smell with their nose without this training, but not as closely. You are going to train luring as a command, I use the command "Touch". To do this is simple. Place a treat inside your hand. When you do this, make sure your dog smells the treat inside of your hand. When your dog’s nose touches your hand, mark the behavior by clicking and treating. When you give the reward, give it from your opposite hand. You don’t want them to think that they are getting the reward from your lure hand.<br/><br/>
			Once your dog catches on that you want his nose to touch your hand, he will begin touching it more willingly to get the reward. Once he is consistently touching your hand, increase the difficulty. You can do this by demanding a prolonged touch of his nose to your hand. When he touches your lure hand with his nose, don’t reward it right away. He will probably back away expecting a reward. When he doesn’t get one, he will get frustrated. This will lead him to try new things. So when he goes in to touch your hand again, just wait until he touches your hand for a split second longer than before. When he does, reward him. Now it is just a process of extending the touch on your lure hand.<br/><br/>
			You do not need an extended touch to train commands; it will just come in helpful later on. Once your dog will touch your lure hand with their nose, you can begin training different commands using this technique. Come back to this periodically to refresh your dog’s memory on luring and try to increase the time your dog will hold their nose against your hand.</p>
			<h5>Not Showing the Treat</h5>
			<p>Another important subtlety of luring is not showing the reward in your hand. I mentioned this before, but I wanted to emphasize it. Whenever you lure your dog into position, you do not want them to be looking at your lure hand as a food source. If they do this, they may get extremely distracted and not even realize why they are being rewarded. It will also be much more difficult to fade the lure and extinguish food rewards. The best way to do this is place the treat in your hand while your hand is not visible behind your back. Then use the training you did with your lure hand to manipulate the dog’s movements. This is why teaching the lure is so important in luring.</p>
			<h5>Delivering the Treat</h5>
			<p>The way in which you give the reward is another important aspect of luring, and all techniques. When you give the reward in luring, you do not want to give the reward with your lure hand. You will still have a treat in your lure hand for the dog to smell and follow, you will simply not give the reward that is in your lure hand. It will remain there while you are luring the dog, you will just not use it as a reward. Your dog should follow your lure hand with their nose, and then receive the reward from your other hand. This will make fading the lure much easier in the future.<br/><br/>
			Another part of giving the treat is ensuring the dog does not move out of position to get the reward. Lets say your dog is sitting. When you move your hand to give him the reward, he will naturally want to get up in order to get the reward faster. It is very important you do not allow him to do this. If he gets the reward by doing this, you have just rewarded him leaving his position before you release him. If he tries to do this, it is a perfect time to administer the No Reward Marker and ignore him for 15 seconds.</p>
			<h4>Molding:</h4>
			<p>Molding a behavior is just as it sounds. It is most often used on behaviors that are a little more complicated that just sitting, but it can also be used on sitting if your dog has a strong aversion to sitting. The basic idea behind molding is training a behavior in steps. You have an end result that you wish to achieve, and you take small steps in order to reach that end. This technique is very commonly paired with either physical manipulation or luring, as you will see in this example.<br/><br/>
			A common command that this is used with is rolling over. Very rarely does a dog willingly roll over when you use the luring technique. The way to use this technique in this example is to make small moves towards rolling over At first you would get your dog into the down position. Once he is in position, move your lure hand on the side of their head and around the back of their head. This will cause a lot of dogs to roll on their side. Mark and reward it! Your dog just took a step towards rolling over. This causes the dog to want to move on his side more the next time you use the lure technique. Once your dog is consistently rolling on their side, raise the difficulty. Do not immediately reward when the dog rolls on their side. Instead try to get them to roll over a little more. I have said many times that frustration breeds creativity, and that is what we are going for is this situation. Your dog is used to getting a treat when he rolls onto his side, so when he doesn’t, he gets frustrated and begins offering different moves to try to get that reward. At this point, do not use the No Reward Marker because we do not want to stifle his creativity. Just keep trying until he makes it a step further to rolling over. If he still isn’t getting it, try pairing molding with physical manipulation.<br/><br/>
			To pair molding with physical manipulation, get him to lie down again, and gently roll him onto his side.  Mark and reward this. This is the place we were stuck at last time, except this time, we are going to gently roll him onto his back. Mark and reward again. You will slowly move the dog further and further, rewarding each step. This will make each movement positive.<br/><br/>
			This will be discussed in much greater detail when I talk about physical manipulation and teaching the roll over command. This is just illustrating how molding works.</p>
			<h4>Forced Capturing</h4>
			<p>Forced Capturing is one of my favorite techniques to get really funny commands on cue. When using this, you get your dog to display a technique by tricking them into it. For example, have you seen videos of when dogs will put their paws on their nose like they are embarrassed? This is accomplished by using Forced Capture. You have to bring all of your creativity out in this technique. To get a dog to put their paws on their nose, you can simply take a piece of scotch tape and put it on their nose. They will almost always try to use their paws to get it off. When they do this, you mark and reward. I will talk about this more when I teach this command, but Forced Capturing is a great way to get your dog to offer awesome behaviors.<br/><br/>
			A funny example of using this technique is when I trained a parrot to “wave.” Most parrots readily step up onto your finger when you offer it. I used this movement to train the parrot to wave, a similar foot movement. I would offer my finger for the bird to step up on, but when the parrot raised their foot, I would mark and reward this behavior. I eventually faded the lure of me offering my finger to a waving motion. The bird would pick up their foot and wave back.</p>
			<h4>Physical Manipulation</h4>
			<p>Physical Manipulation is one of the least utilized techniques to get your dog into position. This is for good reason, as many people do not use it correctly. Most people try to force their dog into position, which leads the dog freezing up as a defensive response. This will not get you anywhere, and your dog will actually develop a negative association to whatever you are trying to accomplish.<br/><br/>
			I do not usually recommend this technique, but for some situations it can be a good last resort.
			When using this technique, you want to GENTLY guide your dog into position and then mark and reward. If your dog is resisting you at all, you need to find another technique that will work for you. You never want to force your dog into position. The most common use of this technique is teaching your dog to roll over. Many dogs just do not understand how to roll over, and gently rolling them over can help them understand what you want from them. I will emphasize the behaviors I think this could be an applicable technique for, but generally try to use this technique as a last resort.</p>
			<h3>2) Marking The Behavior</h3>
			<p>Marking a behavior is how you communicate to you dog when they are doing something correctly. You will “mark” the behavior the instant your dog is in the correct position. This is very useful because it narrows the time for error. In other words, if you just give your dog food once you lure them into position, you could be rewarding any of those four or five seconds it took you to give the dog the treat. When you use a marking device, you tell the dog exactly what you are rewarding them for. This expedites the training process dramatically.
			<br/><br/>
			The other huge advantage of a marker is the distance factor. If you are just giving your dog a treat every time they get into position, it is impossible to add distance to a behavior. With a clicker, you can mark a behavior your dog is showing from across the room. This will come in handy the more advanced you go into training.</p>
			<h4>The Clicker</h4>
			<p>A clicker is a very useful device that is used to mark behaviors. The reason I like the clicker so much is that it gives off a very sharp, short noise. Other methods use a more drawn out marker. The problem with this is that it is less precise in timing. The dog is more likely to be confused if the marker is drawn out. If you are molding a behavior, the dog’s progression may be very short lived, and the more accurately you can mark that short progression, the better. The noise the clicker emits is also the same each time. The pitch, the duration, and the sound are all identical each time. This will help the dog recognize this sound easier.<br/><br/>
			The clicker is also very small and can be kept on a key chain, making it easily transportable. Some people complain that they do not want to lug around a clicker all day, but in reality, you will usually only use it during training sessions. The only other time you would use it is when you are trying to capture a behavior, and are waiting for your dog to display it.</p>
			<h4>Other Marking Methods</h4>
			<p>The most common alternative marking device is a verbal marker. This can be any noise or word. Some people even make an auditory “click” with their mouth. Any of these can work, but they are generally not as effective as the clicker. When using an auditory marker, the noise has a longer duration, making it less precise. Your voice can also change from mark to mark, making it harder for the dog to recognize as the marker. If you are set on using a verbal marker, focus on making it short, precise, and the same each time.<br/><br/>
			One of my favorite markers that is not generally used in basic obedience is a collar. Many shock collars now have a beeping sound they can make. They can also vibrate on the dog’s neck. These can be conditioned to be markers. The biggest advantage of this is the distance. You can use these collars for up to 1000 yards, so these can be very advantageous if you are training a dog to hunt or track. The only problem with these markers is sometimes they are not loud enough on the cheaper collars. So if you do decide to go this route, be sure to get a nice collar.</p>
			<h4>Conditioning the Clicker</h4>
			<p>When you condition your clicker, you are pairing it with a primary reinforcement, food. This will associate food with the clicker, thus making it a reinforcement in itself. After you have conditioned the clicker, just hearing the clicker, regardless of the food, will reward the dog. You should do this as the first thing in your training schedule. When you begin your first session with your dog, you want them to already know that when you click, they are getting a treat. Once they understand that, they will quickly make the connection that you only click when they are doing something right.<br/><br>
			Conditioning your clicker will take a couple days. You spend this much time on such a simple process because it is vital to training. Begin by simply sitting down with your dog. Next, just click and toss a treat on the ground. Do this about 30 times, 3 times a day. You will begin to see the dog anticipating the food when he hears a click. You will click, and he will get excited waiting for that treat. Repeat this as much as possible for a few days.<br/><br/>
			If you decide not to use a clicker, the process will still be the same with verbal markers and the beep on the collar. Make sure to continue this process until your dog is anticipating a reward.</p>
			<h4>Other Conditioned Reinforcements</h4>
			<p>The clicker will be used to mark behaviors in a training session, but by no means is it the only conditioned reinforcer. Think of things you do throughout the day that you pair with primary reinforcements. All of us say “good boy” when we are happy with our dog. This becomes a conditioned reinforcement. You can look at your dog and say “good boy” and the dog will begin wagging their tail like they know they are a good boy. You do not even have to pet your dog after saying it. This is because you have conditioned “good boy” to be rewarding in itself. We will use this more when we talk about extinguishing food rewards. Until then, work on being consistent with how you use “good boy.” Try to use the same words every time. If you repeatedly change it to “good dog” and other manipulations, it will take longer for your dog to understand.</p>
			<h4>Common Problem with Clickers</h4>
			<p>Many times when people use clickers, the clicker becomes the release cue for the dog. For example: You finally get your dog into the sitting position, but there is a problem. You want your dog to stay, but the second you use the clicker, your dog releases from the sit to get a reward.<br/><br/>
			Your dog is not stupid. He has learned that whenever you click the clicker, he gets a treat. So when he is sitting down and you click, why would he continue to sit?<br/><br/>
			The answer to this problem is the release cue. If you want to add duration to any command, you must add a release cue right away. If you do not, then the clicker will become the release cue.</p>
			<h3>3) Release Cue</h3>
			<p>A release cue is used on any command with duration. You use this cue word to control when your dog releases from a position. As stated in the last paragraph, you must add a release cue right away when training a command with duration. I want you to decide right now what your release cue word will be. For me, I have always used “okay” as a release cue, but yours can be anything. Some people like to use the number “three” as a release cue word. This way they can count “1,2,Three!” and their dog gets up like they know how to count to three, when in actuality, they would have gotten up if you had just said “three.”<br/><br/>
			Adding a release cue is the best way to teach a stay.
			You will notice that I never add a verbal cue to a command until that command is already consistently being achieved. The reason behind this is that I never want the dog to fail. If the dog fails at the command when you give a verbal cue, it teaches the dog that thy can ignore the verbal cue. This is a very bad habit to get into. So when teaching stay, I like to already have the dog being able to stay for a duration before I tell the dog to “stay.” By adding a release cue, you will develop your dog’s stay before ever having to use the command.</p>
			<h4>Developing the Release Cue</h4>
			<p>To get your dog to recognize the release cue, you simply have to give the release cue the moment before your dog gets up. The more consistent you are with this, the more quickly your dog will associate the release cue with releasing from a position. Sounds easy right? Well it is.<br/><br/>
			You need to add this cue as soon as your dog achieves their first sit. You will lure your dog into the sit position, mark and reward. At this point your dog should still be sitting down. Within a couple seconds of giving the reward, say your release word and then back away, encouraging your dog to get up. By backing away and non-verbally beckoning your dog to get up, you are showing them that when you give the release cue, you want them to get up. I have never seen a dog remain in the sit position when the owner backs away and beckons them. Once your dog gets up and comes to you, reward them with a treat and verbal praise. This will reinforce them releasing when you give the release cue.<br/><br/>
			It is important to remember not to verbally ask your dog to get up. At this point they have just learned the release cue word. You do not want to confuse them by using other words directly after using the release cue word. You want them to only associate your release cue word with them getting up, nothing else.<br/><br/> 	
			You may notice that I adding a verbal command of “okay” right away in this instance. The reason for this is because I can guarantee you that your dog will get up when you back away and non-verbally beckon them to you.</p>
			<h4>Building Duration</h4>
			<p>When you first start out training your dog to get up only when you give them the release cue, you want to give them the release cue almost immediately after you have marked the sitting behavior. The reason for this is that you do not want them to get up on their own. Each time they release on their own without you giving them the release cue, they learn that they do not need you to give the release cue. As I said before, this can lead to bad things, so just avoid it.<br/><br/>
			After a few training sessions, when you have a good idea of how long your dog will hold the sit before getting up, you can begin to add duration to the sit. You want to do this very conservatively though. If you think your dog will hold the sit position for 8 seconds, release him after 6. It is better to error on the side of caution and not risk your dog getting up before you have released him.<br/><br/>
			Each training session, you can add another second or two to the duration of the command. If your dog ever gets up prior to releasing him, it is important that you step back the duration of the sit. You never want your dog to fail when you can avoid it.<br/><br/> 	
			Adding the “stay” command will be discussed in applicable commands in the command training section.</p>
			<h3>4) Adding The Verbal Cue</h3>
			<p>You may be asking yourself why I haven’t added the command word yet, well I do this by design. I have alluded to the fact that you never want to add a verbal cue to a command before that command is being completed consistently first. There are two main reasons behind this:</p>
			<h4>Teaching Obedience</h4>
			<p>I am sorry to bring this up, but have you ever heard the extremely sad story of the elephant that died in a fire because it did not believe it could break its bonding? The elephant was chained to a pole with a large metal chain for years. The elephant learned that he could not escape this chain, so it stopped trying. It was so sure that it could not break his bonding, that even when the owner replaced the chain with a rope, the elephant still did not try to escape, even when the carnival caught on fire. I once again apologize for bringing up such a sad story, but this is the main reason we do not add a cue to a behavior before the behavior is consistent.<br/><br/>
			If we add a verbal cue to a behavior before it is consistent, the dog has a higher risk of disobeying. Each time the dog disobeys, they learn that they have the ability to disobey or “break the chain.” On the other hand, if we only use the cue when the dog successfully completes the behavior, the dog will think that every time we use the verbal cue, they must obey us.</p>
			<h4>Desensitization</h4>
			<p>I’m sure you’ve seen those people who, when trying to get their dog to sit, keep screaming “Sit! Sit! Sit!” After six or seven tries the dog finally sits and the owner says his dog obeys perfectly. This is not the goal we are aiming towards. Only when we know the dog is going to comply with the verbal cue, can we begin to use it. This will teach the dog that they must comply with it the first time it is spoken.<br/><br/> 	
			On this note, I want to emphasize that you should never repeat your verbal cue. If your dog does not comply within a few seconds, give the No Reward Marker discussed earlier, and ignore the dog for 15 seconds. If your dog does this, it is a clear indication that you added the verbal cue too early and you should continue luring your dog into position with no verbal cue in order to get your dog more consistent.</p>
			<p>Once you are confident your dog is performing a behavior consistently, you can add a verbal cue to a behavior. To do this, you will do the same thing you have been doing with luring, but you will simply add the verbal cue the moment before you lure your dog into position. Like the release cue, this will create an association with the dog completing the behavior.<br/><br/>
			Sit, for example would go like this:</p>
			<ul>
				<li>Say, “sit”</li>
				<li>Lure your dog into the sit position.</li>
				<li>Mark the behavior</li>
				<li>Give the reward</li>
				<li>Give the release cue</li>
				<li>Back away and give another reward.</li>
			</ul>
			<p>This procedure applies to more than just the sitting command. Even when teaching a behavior like “come” and “rollover”, you never want to add a verbal cue before your dog is already consistently completing that behavior. You will add the verbal cue the moment before you know the dog will successfully complete the behavior.</p>
			<h3>5) Fading The Lure</h3>
			<p>When fading the lure, you will simultaneously be building the hand cue you will use for that command. So you first want to decide what hand cue you want to use for the behavior being taught. You will be manipulating the lure in small steps, each progressing to the hand cue you wish to use for the command. It is important not to progress too quickly, though. You want each step in manipulating the lure to be similar enough to the previous step so that your dog barely notices the difference. If you manipulate the lure too quickly, your dog will not recognize the lure, and will not know what to do. When fading the lure in sit, for instance, you initially move your lure hand directly above the dog’s head to get him to sit. The next step should be to move your lure hand an inch in front of the dog’s head instead of directly above it. Raise your hand to the same height, just slightly forward. This step is so similar to the regular lure, that the dog will recognize this as the lure for sit, and will sit in order to be rewarded. If you progress too quickly and move your hand a foot in front of the dog’s head, they may not recognize this at all and have no idea what to do. Before progressing to the next step, you want your dog to recognize this new motion of your lure hand as the default movement. This way, when you move your hand another inch, the dog will not think of this as you moving your hand two inches from the original motion, but only an inch from the original movement.<br/><br/>
			The best rule of thumb when deciding how quickly to Fade the Lure is to look for anticipation. If you are moving your hand to lure your dog into position, and your dog anticipates your lure and goes into the position before you complete your lure, that is the first step. This will vary widely among dogs. Some dogs will anticipate the lure by a foot; other dogs will progress by inches. When your dog does anticipate your lure, reward them with a jackpot. You want them to know that this is what you want them to do. When your dog does anticipate your lure in the early stages of a lure, it will be tempting to progress very quickly from this point. It is still important that you do not move too fast. Your dog could anticipate the lure because you’ve been working on it for twenty minuets, but the next day, you will try to start from this point and your dog will have no idea what you are doing. This is the reason why you need to progress in small steps, each new step becoming the new “normal” before you progress.<br/><br/> 
			Lets use “down” as the example. When luring your dog into the down position, your dog should be sitting. You will move your lure hand between their paws, encouraging them to move into the down position. When fading this lure, you will move your hand between their paws like normal, but instead of touching your hand to the floor, you will only bring your hand down to about two inches off the ground. Your dog will recognize this as the down lure and go into position if you have trained it correctly. After making this step the new lure standard, move to the next step and leave your lure hand four inches off the ground. You will keep this process up until you fade the lure to the point where you merely have to move your hand six inches down and the dog will respond, thinking of this as the new normal lure for this position.<br/><br/>
			If your dog anticipates the lure, and lies down before you even get your lure hand a foot from the ground, that is great! It will make this process much quicker, but it is important not to make the next step two feet from the ground. You want to slowly build to that so you know it sticks with your dog.</p>
			<h3>6) Extinguishing Food Rewards</h3>
			<p>When you have a command down pat, you have your dog sitting on command and have successfully Faded the Lure; it is now time to begin extinguishing food rewards. The idea behind extinguishing the food reward is to slowly wean your dog onto a different type of reward, such as praise, play, verbal praise or freedom. You will do this by first incorporating Interval Reinforcement.<br/><br/>
			Interval Reinforcement is rewarding your dog with food at random times, not after every command. You will incorporate this after the behavior, and then again after releasing the dog if the behavior has duration. When you do not give a food reward to your dog, you will substitute play, praise, or verbal praise. Do not use freedom initially. This will communicate to your dog that they are still completing the correct behavior; they are just not getting a food reward after every behavior anymore. It is important that you do not interrupt your dog’s behavior by petting too much. A simple pat on the head and a “good boy” will suffice. You do not want your dog to get distracted by petting and release from the command. At first, you do not want to go eight or nine behaviors without giving a food reward, or your dog will get discouraged. You will begin by giving a food reward every other command, and then progress from there.<br/><br/>
			Once your dog is acquainted to not getting a food reward after every completion of a behavior, it is time to release your dog as a reward. You can fade this into every day situations, but do not do this in an area where your dog is too distracted to even complete the initial command, such as a dog park. For example, you can release your dog from the sit position, then play with them and praise on them. You can also ask for a sit before your dog goes outside. This is where the No Free Lunch Policy comes into play. Whatever your dog finds rewarding, ask them to sit, then release them to do it. Before feeding them, get them to sit, and then release them to their food. You should be slowly fading the food reward out of the situation and replacing it with every day rewards such as these.<br/><br/>
			This process may take some time, and it is important to occasionally go back to training sessions with food to refresh your dog’s memory of the command and keep it sharp.</p>
			<h3>7) Adding Difficulty To The Command</h3>
			<p>As I have alluded to before, you never want to ask your dog for a behavior when you are not positive they will comply with the command. The story of the elephant holds true when you are adding difficulty to a command. When you first begin training a command, you should be in a quiet area where there are few distractions. To add difficulty to a command, you can begin adding these distractions slowly. You never want to add these distractions too quickly to the point where your dog is too distracted to complete a behavior, though. As with all things in dog training, it will take time. You can begin by taking your dog from the garage to the living room. This will add more distraction than you think; there are more scents, scenery, and possibly people out there that your dog will want to play with. Like Fading the Lure, you want to add these things step by step. If your dog is failing to complete a behavior more than 3 out of 10 times, it is time to reduce the distractions again. It is like building blocks. If one of them falls, it shakes the foundation for the blocks on top of it. Here are some things you can do to add difficulty to a command:</p>
			<ul>
				<li>Have a different trainer work with your dog.</li>
				<li>Move to more distracting areas: Living room, back yard, front yard, park, far away from a dog park, closer to a dog park, and the ultimate challenge, inside the dog park.</li>
				<li>Have a friend’s dog around when training.</li>
				<li>Have a stranger in the house when training.</li>
			</ul>
			<P>Anything you can think of that will make your dog become more distracted can add difficulty to a command. Just remember not to progress too quickly and overload your dog.</P>
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
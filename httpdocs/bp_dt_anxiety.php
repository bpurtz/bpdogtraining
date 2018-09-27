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
                <li class="nav-item dropdown active">
                    <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#">Problem Behaviors</a>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="bp_dt_jumping.php">Jumping</a>
                        <a class="dropdown-item" href="bp_dt_chewing.php">Chewing</a>
                        <a class="dropdown-item" href="bp_dt_digging.php">Digging</a>
                        <a class="dropdown-item" href="bp_dt_barking.php">Barking</a>
                        <a class="dropdown-item" href="bp_dt_mouthing.php">Mouthing/Nipping</a>
                        <a class="dropdown-item active" href="bp_dt_anxiety.php">Anxiety</a>
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
			<p>Fearfulness and anxiety are different from any other problem behavior, so I am going to treat them differently. I will outline what I have seen work with fearful dogs. If you see your dog become aggressive at any point, go to a professional trainer immediately. An online environment is no place to try to combat such a complex behavioral problem. You will need an experienced trainer to evaluate your dog and give advice based upon what they see. If you catch aggression in its early stages, it is possible to reverse the process. Once aggression is ingrained, it is much more complicated a problem. So if your dog is merely fearful, use this page to work with your dog. But if your dog shows aggression, there is a need for a personal evaluation by a professional dog trainer.
			</p>
		</header>

		<video class="video_1"></video>

		<section class="post container-fluid">
			<h2>What Causes This?</h2>
			<h3>Lack of Exposure to Foreign Stimuli</h3>
			<p>If your dog is rarely exposed to foreign stimuli, he is going to be less likely to be confident when in new situations. Think of this from a human standpoint. I was homeschooled. I rarely got to meet new people, and therefor, I was not socially adjusted. I was awkward and afraid of new people for some time. For dogs, it is much more difficult to deal with this problem. Humans are much more intelligent than dogs and it can still take years. So be sure to expose your dog to new things in new places!</p>
			<h3>Traumatic Experience</h3>
			<p>This is especially important while the dog is in the imprinting stage. While the dog is young, they are learned what to trust, and what to fear. If you can make new experiences positive, they will learn not to fear new things. If a new experience is very negative, such as a dog attack, they are more likely to fear new things. You always want to asses a situation before introducing your dog into it. If you have a traumatic incident such as a dog attack, it can be very difficult for you to solve the fear behavior.</p>
			<h3>Sheltering/Improper reinforcement</h3>
			<p>This is one of the most common causes I've seen. I love to give the example of the vacuum cleaner. My dog tripped over the cord and the vacuum nearly fell on him. He was very afraid, naturally. I had two possible reactions to this:<br/>
			</p>
			<ul>
				<li>I could make it a big deal and coddle my poor doggy. This would confirm to him that the vacuum is indeed dangerous and should be feared.</li>
				<li>The other reaction would be to asses the situation and realize that the vacuum is no danger to my dog. When you realize this, react appropriately. DO NOT MAKE IT A BIG DEAL! The vacuum is not going to hurt your dog, so don't act like it will.</li>
			</ul>
		</section>

		<section class="post container-fluid">
			<h2>What Solutions are There to this Problem?</h2>
			<h3>Slow Exposure</h3>
			<ul>
				<li>This may take more time, but it is a much less risky approach to solving this problem. This is most easily done with dogs that have a fear of one thing. That way you can expose them to this one item multiple times.</li>
				<li>This is somewhat similar to flooding the dog, just at a slower rate. With flooding, you would expose the dog to it’s fear at the extreme level and wait for the anxiety to subside. With slow exposure, you keep the stimuli to a minimum, wait for the fear to subside, then commence to increasing the stimuli.</li>
				<li>To relate this to humans. Think of spiders again. Once again, you cannot kill the spider! You see a spider across the room. At first you may be a little afraid, but you are going to get over it rather fast because it isn’t a threat. The next step is moving the spider closer, maybe 10ft away from you. This will increase your anxiety, but once again, you will get over it. Eventually, the spider will be right next to you, or even crawling on you! This is the time where you will feel the most anxiety, and it will take the most time to realize that the harmless spider will not hurt you. Eventually you will get over it.</li>
				<li>The idea here is that by seeing the spider from further away and progressively closer, it will decrease the anxiety of having the spider on you. This situation is much more predictable than being put in a room with 20 spiders. The same idea goes for slowly exposing your dog to a vacuum. The anxiety your dog feels when the vacuum is close is at a lower peak, therefore less peak stress.</li>
			</ul>
			<h3>Positive Association</h3>
			<ul>
				<li>This is associating the thing that the dog finds fearful with positive stimuli. This will only work with extremely strong reinforcements such as food for a food driven dog.
				</li>
				<li>Could you use escape from the fearful thing as a reward if the dog is calm? Seems like you would be reinforcing the calm behavior, but you would also be admitting that the fearful thing is actually scary and therefore not be solving the actual problem, just masking the symptoms.</li>
				<li>This would definitely increase the dog’s confidence if they think all new things will bring them rewards.</li>
				<li>It is important to have the new thing give them rewards, and not the owner giving them rewards. If the owner gives them rewards, it could be interpreted by the dog that the owner is reinforcing their fearful behavior.</li>
				<li>To relate this to humans. Imagine if every time you see a spider, someone gives you your favorite candy. You don’t get this candy at any other time and you are really hungry! Eventually, you are going to be WANTING to see that spider! You will be looking for that spider so you can get your freaking candy!</li>
			</ul>
			<h3>Flooding</h3>
			<ul>
				<li>This is an overload of stimuli to the dog. The idea is that with time, the dog will realize that the stimuli will not hurt the dog.
				</li>
				<li>You must continue flooding until the dog is calm, or it could exacerbate the dog’s condition.</li>
				<li>This is more of a last ditch effort, not a first option when dealing with fear. This is because of the possible negative consequences of this method.</li>
				<li>To relate this to humans, this of a harmless spider. I know I’m not big on spiders. If you are terrified of all spiders, you know what I mean. Think of this situation. You are put in a room you cannot escape with 20 harmless spiders and you cannot kill them. At first you are going to flip out! But after an hour or two with the spiders, you are going to come to the realization that they are not going to hurt you. You may even get bored and become friends with them. Letting them crawl on you and even naming them! Then you are let out of the room. The next day you are put back into the same room with the same spiders. You are probably still going to be scared at first, but your fears will subside much faster this time. You will remember that they aren’t so bad and will resume your play time. This is the same thing that you are doing with your dog, although I doubt your dog will name the vacuum.</li>
			</ul>
		</section>

		<section class="post container-fluid">
			<h2>Biggest Mistakes</h2>
			<h3>Sheltering</h3>
			<p>The biggest mistake I see owners make is sheltering their dog. When the dog finds something scary, the owner quickly scoops up their toy poodle and protects them from the “monster.” The only thing that this is communicating to the dog is “Yes, the thing you are afraid of is indeed very dangerous, but don’t worry, I’ll protect you.” Think back into your childhood. When your playing outside and your parents see you pick up a beetle, they won’t care or do anything. This tells you that the beetle is not dangerous. On the same note, if you picked up a black widow ,a poisonous spider, they would freak out and try to protect you from this dangerous arachnid. The same thing goes for dogs. They learn from your reactions what is good and what is bad. By cuddling them and protecting them from something foreign, such as strangers, your dog learns to fear these things. You are telling them that these things are dangerous! This applies to almost anything: Strangers, other dogs, the vacuum, etc.</p>
			<h3>Over-Exposing</h3>
			<ul>
				<li>In correlation to Sheltering, exposing your dog to harm can also make them fearful to new things. Gauging your reaction is only one of many ways your dog will learn to fear something. You are your dog’s protector, and you should not allow them to fall into a situation where they could get hurt. A big reason dog’s become aggressive to other dogs is being mauled by a strange dog. Sometimes this is unavoidable, but generally, you can avoid such experiences by being careful. It is important to only expose young dogs to other FRIENDLY dogs. When you are taking your dog to the dog park, carefully observe the other dogs in the park and make sure that none of them are showing aggressive behaviors. If your dog encounters an aggressive dog at a young age and is attacked, this will psychologically scare them. If your dog is attacked, you must act in a sheltering way and therefore reinforce the idea that other dogs are bad. The best course of action at this point is to quickly introduce them to another FRIENDLY dog. This will hopefully show them that not all strange dogs are dangerous.</li>
				<li>We can bring this back to your childhood and how you learned. When you picked up that beetle and nothing happened, you learned that they are not dangerous. Whereas when you picked up that black widow, it bit you and you were in pain for several days. You quickly learned to avoid black widows, but beetles were okay. The downside of this experience is that you were afraid of all spiders for a while. You couldn’t tell the difference between the harmless ones and the poisonous ones. The same goes for your puppy. Because that one dog attacked them, they will be afraid of all dogs they are not familiar with. Your goal is to help them differentiate between the poisonous ones and the harmless ones.</li>
				<li>This is most important when your dog is a puppy, as they are most easily imprinted at this time, just as you were as a child. As your dog gets older, they won’t be as severely affected by an attack by another dog. It is always important to be cautious which other dogs your dog encounters, though. For the safety of your own dog, and for their view on other dogs. An older dog can still become fear aggressive.</li>
			</ul>
			<h3>Absence</h3>
			<ul>
				<li>Something that can be just as damaging to a dog’s psychology is the complete absence of social behavior. If you never expose your dog to anything foreign, your dog can easily become fearful of anything new.</li>
				<li>Think about the stories of children who are kept in a small room for their whole childhood, never exposed to anything on the outside. When they are liberated, it takes them months, maybe even years, to adjust to the new way of life. They are afraid of anything new. They have grown accustomed to being exposed to virtually no stimuli. So when they are exposed to new things, they become very fearful and aggressive as a defensive mechanism. The same goes for dogs! Seeing the connection between human psychology and dog psychology yet?</li>
			</ul>
		</section>

		<section class="post container-fluid">
			<h2>So What Should I Do?</h2>
			<p>Expose your dog to every new SAFE stimulus you can think of! Take them to dog parks and to public areas. BUT ensure that the dogs your dog encounters are friendly. Have strangers give your dog treats and even ask them to sit! Socialization is key to having a socially adjusted dog, (strange, I know). Always be aware of the things your dog encounters, and protect them from dangers before your dog knows they are there. If you are vacuuming, be sure not to run your dog over. Do not let little kids torture your dog. If your dog becomes fearful of something they should not be fearful of, such as the vacuum, do not protect them and shut it off. By leaving it on, you show them that there is no reason for them to be afraid of it. If they slip on hardwood floors, don’t rush to their rescue.
			</p>
			<h4>Never let your dog develop an illogical fear and do not expose them to logical fears.</h4>
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
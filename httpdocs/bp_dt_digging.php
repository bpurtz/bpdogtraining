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
                        <a class="dropdown-item active" href="bp_dt_digging.php">Digging</a>
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
			<h2>Defining the Problem behavior</h2>
			<p>Digging is another behavior where you have to define exactly what you want from your dog before you begin training. If you get a terrier puppy, you should expect them to dig. It is part of their nature. The best thing to do with these dogs is to designate a place where you will allow your dog to dig. If you can do this, it will be much easier to control your dogs digging.<br/><br/>
			Whether you want to displace your dogs digging tendencies to a specific area, or you want to eliminate it completely, define these parameters before you begin training. If you change your mind in the middle of training, it will make things much more difficult. Consistency in what you want from your dog is crucial to quick learning.
			</p>
		</header>

		<video class="video_1"></video>

		<section class="post container-fluid">
			<h2>Identify The Motivation</h2>
			<p>Digging, like chewing, is going to be a self rewarding behavior. Your dog does not perform this behavior in order to get your attention. They just simply enjoy digging. It might be a learned behavior if they see you gardening a lot, or it could just be in their nature. Either way, they do not do this behavior to please you.</p>
		</section>
		<section class="post container-fluid">
			<h2>Methods to Curb this Behavior</h2>
			<p>Before you begin training, decide whether you want your dog to simply stop digging, or to dig in a specific area. I will give examples at the end of this section outlining bother circumstances.</p>
			<h3>Managing the Behavior</h3>
			<p>Whenever you have a self-rewarding problem behavior, managing your dog will be even more important. Unlike attention seeking behaviors, your dog can demonstrate this behavior even when you are not around.</p>
			<h4>Reducing Freedom</h4>
			<p>Reducing freedom is going to be very helpful in reducing the dog's chances in showing this behavior. If he does not have access to dig up the flower bed, he is obviously less likely to do so. You will slowly allow your dog to gain more freedom once you have curbed the behavior. But remember, if your dog regresses, you must start over again. The sooner you can catch regression, the easier it will be to deal with.<br/><br/>
			Creating a schedule for your dog will help dramatically. At first, only allow him access to a digging area if directly supervised by you.</p>
			<h4>Correcting as a Form of Management4</h4>
			<p>You will notice that some of the ways I curb digging will also fall under the management category. If your dog has previous holes that he has dug, put chicken wire or feces in them to discourage your dog from digging. This is similar to using anti-chewing spray when managing chewing. It will both manage your dog's behavior and correct them. I will explain more below.</p>
			<h4>Enrichment</h4>
			<p>While some dogs dig because they enjoy it, some dogs dig out of boredom. So be sure to give your dog opportunity to expend his energy in a correct manner. Give him toys, take him on walks, play fetch with him. A tired dog is much less likely to develop problem behaviors!</p>

			<h3>Train an Incompatible Behavior</h3>
			<p>Training an incompatible behavior will only work when you want your dog to dig in a specific region. This will make solving this behavior much faster. If you do not want your dog to dig at all, move on to correcting the behavior.<br/><br/>
			To train an incompatible behavior, you will need to get your dog digging on command. To do this, you will want to already have a dig box available. They are simple enough to build, and sand is cheap.<br/><br/>
			From this point, it is just like training a command.</p>
			<h4>Digging Command</h4>
			<p>To get your dog into position, so that you can reward the behavior, go into the dig box and begin digging! If your dog enjoys digging, (something I'm betting on if your in this section!), they will soon start digging with you. When they do, mark the behavior and reward it.<br/><br/>	
			Once your dog makes the connection between him digging and receiving a reward, they will dig like crazy! It is important that you only do this in the designated dig box though!<br/><br/>
			After you can consistently get your dog to dig, you can add the command word! Over time you can train your dog to dig on command!<br/><br/>
			If you are having trouble with getting dig on command, go back to the Principals of Dog Training or another command and use the training template from there.<br/><br/>
			Once you have your dog's digging command on cue, you can encourage him to dig in the dig box. Show him lots of praise when he does so! You are communicating to your dog that it is okay to dig in that area. You will later pair this with Positive Punishment to teach your dog it is only okay to dig in the dig box, not outside of it!
			</p>

			<h3>Positive Punishment</h3>
			<p>Whether you just want your dog to stop digging permanently, or you just want your dog to only dig in a designated area, you will get the best results by using forms of positive punishment. I recommend this because it would take much longer to teach your dog the same lesson using only positive reinforcement. If you have the time to do that, awesome! But sadly, most people do not. So the most practical way of solving this behavior will involve positive punishment.<br/><br/>
			I also recommend that you do not stop your dog from digging all together. Digging is a natural behavior and your dog will be much happier if you allow him to dig in a designated area.<br/><br/>
			There are a few different tools you can use when utilizing positive punishment. I will cover the most effective ways of curbing this behavior:</p>
			<h4>Buried Chicken Wire</h4>
			<p>I bet you didn't think chicken wire could help you solve this problem! Well if you use it correctly, it can be a very effective form of correction.<br/><br/>
			When dogs dig, they generally like to do so in the same area. Whether that be a flower bed, or just a spot out on the property, find out where they like to dig.<br/><br/>
			Next, bury the chick wire in the hole your dog dug. You want to bury the chicken wire about 6 inches deep if possible so it does not come loose.<br/><br/>
			If your dog is like most dogs, he will see the hard work you put in to fill up the hole they dug. Naturally, he will want to undo that hard work. Dogs love digging in soft soil, and a recently filled hole is perfect.<br/><br/>
			When you dog digs in the hole, he will eventually hit the chicken wire. This will administer a punishment for digging by hurting your dog's paws.<br/><br/>
			This method is nice because your dog will not associate the correction of the chicken wire with the owner.<br/><br/>
			If your dog just digs in new places, which some dogs will, you may have to move on to the next method.</p>
			<h4>Shock Collar</h4>
			<p>As with many other problem behaviors, a shock collar can be used to curtail the behavior. You will use the shock collar similar to how you did other behaviors. To do the Tempt and Train drill, bury some chicken or other smelly treat a couple inches in the dirt, then hide out somewhere.<br/><br/>
			Your dog will eventually smell the chicken and begin to dig. The second he begins to dig, give him a correction. This will let him know that he cannot dig here.<br/><br/>
			You can then hide some chicken in the dig box and praise him when he digs there.
			Remember, your dog cannot speak English. So we have to communicate to him through rewarding and correcting him.<br/><br/>
			By using both correction and reward, you can more effectively communicate to your dog what you want them to do. This is why I strongly recommend you invest in a dig box. If you do, you will be able to reward your dog for digging in the correct area, and correct them if they do not.
			</p>
		</section>

		<section class="post container-fluid">
			<h2>Continued Management</h2>
			<p>Consistency is the most important thing in continued management. You cannot allow your dog to dig in a non-designated area. If you do, your dog will soon be digging everywhere.<br/><br/>
			If you successfully communicate to your dog what you want, though, it will be much easier to have a long lasting solution. CONSISTENCY CONSISTENCY CONSISTENCY! I repeat that word so much because of how important it is!<br/><br/>
			Think about the English language. If you are trying to learn the English word for chair, and someone only calls it a chair 6/10 times. But uses the word seat the other 4 times, you will not learn as quickly. It is still possible to learn the word chair, but it will take more time. If you want your dog to learn quickly, outline a set of parameters and consistently enforce them!</p>
			<h3>Example #1</h3>
			<p>Well I heard it would be a good idea to get a dig box to help me with my digging dog, so I did! Sadly, I do not know what to do from here!<br/><br/>
			Well I'm glad you decided to get a dig box! That will make it much easier to solve this problem! I will break down what to do next into steps!
			</p>
			<h4>Get Digging on Command</h4>
			<p>When you want your dog to only dig in a specific area, it will be easiest to simply get digging on command first. By doing this, you will be able to more effectively communicate to your dog that it is okay to dig in the box.<br/><br/>
			To get digging on command, you first must get your dog to demonstrate the behavior so you can mark and reward it. So take your dog into the dig box and lead by example! Start digging and encourage your dog to dig. If this does not work, bury some treats in the sand! Either way, you must get your dog to dig in order to reward the behavior.<br/><br/>
			Once your dog displays the behavior, mark and reward it! Get your dog to consistently dig in the designated box.<br/><br/>
			Once your dog is consistently digging when you want him to, you can add the command word. Over time, your dog will begin to associate digging with the command word. Once he makes this connection, he will dig whenever you give the command word in order to get the reward! It really is that simple. If you do have trouble with this, I encourage you to look over the command training section. Getting your dog to dig on command has the same principals behind it as teaching your dog to sit on command. The same 7 steps apply to this behavior</p>
			<h4>Manage Inappropriate Digging</h4>
			<p>While you are getting the dig command on cue, you may experience your dog wanting to dig in inappropriate areas. It is important to limit your dogs freedom so that he cannot dig in these places without getting a correction. Consistency is key when trying to get your dog to only dig in a designated area. If you only ever allow digging in the dig box, your dog will learn to only dig there. If you allow your dog to dig anywhere, there's no point in having a dig box.<br/><br/>
			I would recommend that you train your dog to dig in the dig box, and correct him for digging outside of it in the same day. If you do this, you will be able to communicate to your dog what you want more effectively. If you separate these by a few days, it is less likely that your dog will make the connection between the two. Your ultimate goal is to get him thinking that he can only dig in the designated area, not anywhere he wants.</p>
			<h4>Correcting Inappropriate Digging</h4>
			<p>For this situation, where you only want your dog to dig in a designated area, I recommend the use of a shock collar over chicken wire. The reason for this is that you want to communicate two things to your dog in the same day. First, that your dog is encouraged to dig in the dig box. Secondly, that it is not okay to dig elsewhere.<br/><br/>
			The shock collar and the Tempt and Train technique will allow you do communicate to your dog that it is not okay to dig elsewhere more time efficiently. If you use the chicken wire method, you cannot be sure that your dog is being corrected unless you follow him around all day.<br/><br/>
			To use the Tempt and Train technique, bury some chicken a couple inches under the surface of the dirt. Do this in a hole you filled in so your dog is more likely to want to dig there. Now go and hide somewhere! When your dog goes to dig up the treat, give him a correction.<br/><br/>
			After you have done this a couple times, take your dog over to the dig pit and bury a treat in the sand. This time, allow your dog to dig there. You can even encourage it! Go back and forth between correcting your dog in the inappropriate area and rewarding him in the designated area. By doing both of these in the same day, it will make it easier for your dog to understand what you expect of him.<br/><br/><br/><br/>
			If you do not plan on designating a specific digging area, you will have to focus on the other parts of the treatment plan. Management will be key in succeeding. You cannot allow your dog to perform the digging behavior. You will initially have to limit freedom of your dog, but after a week or so of training, you should be able to allow your dog to have more freedom again.<br/><br/>
			The correction part of your training will also be key. I encourage you to use both the chicken wire and shock collar methods. Use the shock collar to do the Tempt and Train drill. The chicken wire will help ensure your dog does not dig without correction. If you work diligently at curtailing digging, it should not take you more than a couple of weeks to stop the behavior all together!
			</p>
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
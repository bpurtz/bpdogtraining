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
                        <a class="dropdown-item active" href="bp_dt_barking.php">Barking</a>
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
			<p>Barking is one behavior that is different from the others. In most cases, people do not mind if their dog barks occasionally to warn of people, animals, etc. I actually encourage my dog to give me a few warning barks if he sees something in the night.<br/><br/>
			Barking becomes a problem when your dog is excessively barking at nothing in particular. When they are not using their bark to warn you of something, that is when I consider barking a problem.
			</p>
		</header>

		<video class="video_1"></video>

		<section class="post container-fluid">
			<h2>Identify The Motivation</h2>
			<p>
			Finding the motivation of your dog's barking is also different than other behaviors. The reason for this is barking can be self-rewarding or attention seeking. It is your job to determine this. It should not be too difficult. Is your dog barking at you to come inside and gain attention? Or is your dog simply barking at the moon for hours on end?<br/><br/>
			Once you have determined whether your dog is barking at the moon, or is barking at you, you can move on to training.
			</p>
		</section>

		<section class="post container-fluid">
			<h2>Methods to Curb this Behavior</h2>
			<p>Because barking can be either self-rewarding or attention seeking, there will be different methods to treat each problem. As with all problem behaviors, attention seeking behaviors will be easier to treat. You will be able to reward the absence of the behavior and be successful in most cases. It may take a little time for your dog to change his ways, but it will happen. You will also run into an extinction burst with most attention seeking behaviors. This is normal, so be prepared!<br/><br/>	
			If your dog is barking for the sake of barking, the solution will be different. If your dog enjoys barking, you will not be able to be successful if you merely reward the absence of the behavior. I encourage you to give it a shot though! I have just found it impractical to try to run outside each time your dog is quiet to reward them. Not only will your dog probably not make the association between not barking and the reward, but you will not be able to consistently administer this reward each time your dog is quiet. </p>
		</section>

		<section class="post container-fluid">
			<h2>Barking to Gain Attention</h2>
			<h3>Managing the Behavior</h3>
			<p>When you are managing your dog for attention seeking barking, you are preventing your dog from achieving attention from their barking. If your dog barks at your door to be let inside, but does not get let inside, you have succeeded. It is not the act of barking you are trying to stop, but the gaining of attention from that barking.<br/><br/>
			So, to manage attention seeking barking, you must instruct everyone who comes in contact with the dog to not show him attention when he barks. Your kids, friends, and even the mailman should receive this instruction. If your dog barks at someone and receives attention, it will be much harder to break this behavior. Remember, Consistency is KEY! So do your best to never allow your dog to gain attention from barking.</p>
			<h3>Reward Absence of Behavior</h3>
			<p>Because your dog seeks your attention when they bark, this is a very effective technique. Chances are, your dog has learned this behavior through inappropriate reinforcement. Somewhere in their past, they have been rewarded with attention through barking. So, from now on, you are to only give them attention when they are quiet.<br/><br/>
			If your dog normally barks to come inside, wait him out. As I stated before, there may be an extinction burst. Your dog is used to coming inside when he barks, so now he is confused! He will think "maybe if I bark louder, they'll hear me!". So just be patient. Eventually, your dog will wear himself out and quiet down. When he is quiet for 15 seconds or so, allow him to come inside. If you are consistent with this, your dog will learn that barking will no longer gain him entrance into the house.<br/><br/>
			If your dog barks to receive petting, the same method will apply. Your dog is used to getting petted when he barks, so when you stop giving him that attention, he will be confused. He will bark louder and longer for a period of time. You must endure through it! When your dog does quiet down, give him some love!</p>
			<h3>Continued Management</h3>
			<p>As with all attention seeking behaviors, you simply cannot allow your dog to gain attention through barking. Once you have broken this behavior, you should keep telling your kids to not reward the dog when it barks. You always want to maintain order in your house. This is most easily done when you can communicate to the occupants of your house what is expected. Of course, I am not wanting to turn your house into a boot camp of efficiency. I have nieces and nephews. I realize that they will not listen to everything you say. But the more consistent you and your family are, the better behaved your dog will be. So put the effort into maintaining management of your dog, it will be worth it!</p>
		</section>

		<section class="post container-fluid">
			<h2>Self-rewarding Barking</h2>
			<h3>Managing the Behavior</h3>
			<p>For self-rewarding barking, it will be more difficult to manage the behavior. This is because you are not only trying to stop reinforcing barking, but you are trying to stop the act of barking itself. Self-rewarding behaviors are a reward in themselves. Your dog enjoys the act of barking. So if you allow him to bark at all, he is being rewarded and will continue that behavior.<br/><br/>
			To manage self-rewarding barking, I recommend two things:</p>
			<h4>Changing Your Dog's Environment</h4>
			<p>Many times, a dog's environment will be the cause of their barking. They hear a squirrel move, and they bark for 20 minutes. They hear another squirrel, they start over. It can be an endless circle of noise. So remove your dog from that environment unless you are using the next technique.</p>
			<h4>Utilize A Bark Collar</h4>
			<p>Just like the shock collar, the bark collar has been given a bad rap for many years. People claim they are too cruel. But if used correctly, you will not have to use one for long. I will speak more on this when I show you how to curb the behavior.<br/><br/>
			My reason for using a bark collar is simple. They are effective. There is no other way to correct your dog every single time they bark. Do I think they are cruel? No. My reasoning behind this is similar to the shock collar. If utilized correctly, the bark collar will only have to be used for a couple weeks. Without the shock collar, your dog will be punished verbally for months. Have you met many dog owners that can stand their dog barking for hours without correcting them? I sure haven't. Using the bark collar will prevent a lot of anger toward your dog.</p>

			<h3>Correction of Inappropriate Behavior</h3>
			<p>Because this is a self-rewarding behavior, you must do your best to not allow your dog to bark excessively. The best way to do this is to utilize a bark collar when your dog is in a situation they usually bark. If they normally bark at night, put a bark collar on them at night to control the excessive barking. Putting a bark collar on them is not difficult, but be sure you know the correct way to use it! I will put a brief description below, but if you need a refresher, go to the principals of dog training section covering shock collars. Every rule that applies to a shock collar, will still apply to a bark collar. Some things such as timing are done for you by the collar, but you still have to desensitize the dog to the collar so they do not associate the collar with the correction.</p>
			<h4>Desensitization</h4>
			<p>The absolute most important part of using positive punishment is desensitization to the punishment device. This really only applies to collar devices, not noise punishments. What most people do when using shock collars is just throw it on their dog and begin using it immediately. The problem with this is dogs are smart. When you put the collar on your dog and begin using it right away, your dog makes a connection between the punishment their receiving and the collar you just put on them. This will cause them to not do the problem behavior when they have the shock collar on, but they will disobey once the collar comes off because they know you cannot punish them.<br/><br/>
			The trick is to expose your dog to the collar many days before you actually use it. You want to put the collar on, and take it off many, many times. Feed them with it on. Play with them when you put it on. If you do this, your dog will not make a connection with the punishment and the collar. Continue exposure to the collar without the punishment throughout the whole training process. You never want to let them make the connection because then you will have to use the collar all the time. Your long-term goal is for your dog to not perform the bad behavior even when the collar is off.</p>
			<h4>Level of Correction</h4>
			<p>As discussed before, you will want to give a high enough level of correction to curb the behavior in 2 or 3 corrections. I always use the collar on my arm to gauge what level I should use. This will not only ensure you have a high enough level, but it will prevent you from using excessive correction. If you start out too low, you are just going to build up your dog's resistance to the correction. Lets say you want to stop your dog from eating out of the trash, but you use too low of a correction. Your dog will learn that if he powers through the correction, he will get rewarded. In essence, you are training your dog to resist the correction.</p>
			<h4>Timing is Everything</h4>
			<p>Just as you do not want your dog to make a connection between the correction and the shock collar, you also do not want the dog to make a connection between you and the correction. I will show you a drill I use when i am correcting certain behaviors, but in general, you do not want to be around your dog when you give the correction. This is the main reason i like shock collars so much. It is very difficult to separate yourself with the correction any other way. With a shock collar, you can stand outside and look through a window to correct your dog. This causes your dog to not associate the correction with you at all. You can also be sitting on the couch across the room and correct your dog without even looking at them. You want your dog to think that God is correcting them from doing bad. If you can fool them into thinking that, they won't do that behavior even when you are not around. This is what the end goal is.</p>
			<h4>No Connection To Owner</h4>
			<p>Another crucial part in correcting your dog is the timing. Dogs will not associate a correction with a bad behavior unless they are corrected while displaying the behavior. That is why an owner hitting a dog because they chewed up the couch 4 hours ago will not be effective. The dog has no idea why he is being corrected. Even worse, the dog could associate the correction with something else and possibly develop aggression.<br/><br/>
			This is another reason why I like the shock collar so much. You can time the correction perfectly from across the room with the push of a button. Even with pennies in a can, you cannot be as precise.</p>
			<h4>Continued Management</h4>
			<p>As in my previous example of quitting smoking, you must manage your dog so they do not fall back into the bad habit. If they complete the bad behavior without being corrected they might think that they can do it more often without being corrected. If this happens, you will just want to refresh the training. When used correctly, I see very few dogs regress into the bad behavior again. If you do notice your dog falling back into the undesirable behavior, immediately repeat the training until your dog stops the behavior.</p>
			<h3>Continued Management</h3>
			<p>The continued management in the bark collar instructional will apply to this behavior. I just want to stress the importance of desensitizing your dog to the bark collar before using it. If you do not take your time on this step, your dog may become dependent on the bark collar. This is not what you want. If your dog has already become dependent on a bark collar, I will describe what to do in my Principals of Dog Training section.</p>
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
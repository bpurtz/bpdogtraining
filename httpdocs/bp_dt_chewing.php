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
                        <a class="dropdown-item active" href="bp_dt_chewing.php">Chewing</a>
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
			<h2>Defining the Problem behavior</h2>
			<p>Before you begin training your dog to stop a behavior, you have to define exactly what that behavior is. This way, you can be consistent in what you do and do not allow.<br/><br/>
			Chewing can be a more difficult behavior to define than jumping. Unlike jumping, chewing is a natural thing for dogs to do. If we do not provide acceptable toys to chew on, then you should expect your dog to unleash this desire on other, less acceptable items. For this reason I like to define problem chewing as inappropriate chewing. You merely want to direct your dogs chewing behavior on more acceptable items such as chew toys or bones.
			</p>
		</header>

		<video class="video_1"></video>

		<section class="post container-fluid">
			<h2>Identify The Motivation</h2>
			<p>Unlike jumping, chewing is a self-rewarding behavior. Your dog does not chew up your shoes for attention. Instead, he chews them up because it is naturally rewarding. They like to exercise their jaws and it also helps relieve teething pains.
Because chewing is not seeking your attention, you are going to have to use different methods to curb this behavior.</p>
		</section>
		<section class="post container-fluid">
			<h2>Methods to Curb this Behavior</h2>
			<p>Once again, the main part of this section will be how to eliminate the problem behavior. With a self-rewarding behavior such as chewing, you are going to have to find new and creative ways to manage and discourage your dog from chewing.</p>
			<h3>Managing the Behavior</h3>
			<p>Managing your dog will be crucial when trying to curb chewing. If your dog is able to chew without consequences, it will reinforce the chewing. When managing your dog, you will need to initially take away a good amount of your dogs freedom to keep them from chewing. Once your dog has directed their chewing desire on the appropriate toys, you can then begin to give your dog their freedom back slowly.<br/><br/>
			As an example, you will initially need to limit your dogs freedom drastically. When you are unable to supervise your dog, keep him kenneled up, or in an area where they cannot chew inappropriate items. If you keep them in a room where they can chew objects, spray them with 'bitter yuck'.</p>
			<h4>Bitter Yuck</h4>
			<p>Bitter yuck is an excellent example of managing your dog. If you notice that you dog is chewing certain items, you can spray an anti-chewing spray on the objects the dog has been chewing. This will make the item taste awfully bitter and discourage your dog from chewing inappropriate items. Bitter yuck is an excellent example of an effective punishment. Your dog is punished by the nasty taste of it. Your dog also will not associate the punishment with the owner.</p>
			<h3>Train an Incompatible Behavior</h3>
			<p>Training an incompatible behavior with chewing is tricky. You want your dog to know that they can chew on their toys and bones, but cannot chew on unwanted objects. The key here is to make a clear distinction between objects they can chew and the ones they cannot chew. There are a couple of ways we can do this:</p>
			<h4>Encouragement</h4>
			<p>When trying to break your dog's inappropriate chewing habits, you want to encourage your dog to chew on the appropriate items. The first way to accomplish  this is to praise them each time they play with their designated toys. You want them to know that it is okay to chew on these toys. If you pair this with punishment of chewing inappropriate items, it can be very effective.<br/><br/>
			The next way to accomplish this is to keep your dog excited for their toys. If you simply leave all your dog's toys out constantly, they will get bored of them. I recommend you have designated toys for each day of the week. This way, your dog will only get to play with each toy once a week. This will keep your dog interested in their toys instead of becoming bored with them.</p>
			<h3>Positive Punishment</h3>
			<p>If proper punishment is paired with redirecting your dogs chewing to appropriate toys, it will be most effective. You are trying to communicate to your dog that it is okay to chew, but only the correct objects. You don't want to suppress your dog's desire to chew, you simply want to direct the chewing to the appropriate objects.<br/><br/>
			You can use many different forms of positive punishment to accomplish this. I spoke earlier of the product 'bitter yuck'. You can spray this on objects your dog likes to chew, but you do not want him to. When your dog chews these items, he will be punished for doing so by the bitter taste of the spray.<br/><br/>
			You can also use a shock collar and the TEMPT AND TRAIN technique to stop your dogs chewing. When training a dog not to chew, I will often rub a chair leg with turkey to make it smell great to the dog. I will then sit outside the window with the remote to the collar. When the dog goes to lick and chew on the chair leg, I'll give him a correction. By doing this, you are telling the dog that it is not okay to chew on chair legs. You can then throw in a chew toy with some turkey smeared on it. When your dog shows interest in the toy, praise them. Remember what your ultimate goal is. You want your dog to realize they can chew on their toys, just not inappropriate objects.</p>
		</section>

		<section class="post container-fluid">
			<h2>Continued Management</h2>
			<p>Once you have taught your dog what is appropriate to chew, you can begin to allow them to have their freedom back. Generally chewing is only a big problem for puppies, but if you allow the chewing behavior to become established, it will follow your dog into adulthood. So be aware of what your dog is chewing. If they begin chewing inappropriate items again, you have to remove some freedom again.<br/><br/>
			As with other behavior problems, if you use the above techniques correctly, you should rarely have to deal with chewing again. But always be aware. If you allow your dog to begin to chew again, it will only get worse.</p>
			<h3>Example #1</h3>
			<p>Help! Every time I leave the house, my dog chews everything he can get his teeth on! I work during the day and cannot crate him for the entire time I'm gone.<br/><br/>
			This is a common problem that comes with a dog. To be honest, if you do not have an area to keep your dog while you're at work, you probably are not in a good position to have a dog. But there is a solution to every problem. Lets use the techniques you have learned in this section!
			</p>
			<h4>Managing the Problem</h4>
			<p>Before you decide to get a dog, you should have a plan on what to do while you are at work. If you have gotten a dog, and do not have a plan, there is no time like the present to deal with this issue.<br/><br/>
			If you are at work for a period of time and you do not want to crate your dog, you have to have an area where your dog cannot have access to chewing. If you live in an apartment, designate a room for your dog. To keep your dog from chewing, spray everything you think your dog will chew with 'bitter yuck'. You will also want to occupy your dogs time with some sort of activity to keep him from getting bored. A good tool for that is a kong ball. You can stuff these balls with peanut butter and freeze them. This will keep your dog occupied for hours. Kong also makes a food dispenser that forces your dog to work for their kibble. Both of these products are great for distracting your dog throughout the day.<br/><br/>
			The most important thing about managing your dog is not allowing him to display the chewing behavior. A large outdoor area is always best, but not everyone has that luxury. If you cannot manage your dog while you are not at home, you will have no success in breaking this behavior. So be sure to find a way!</p>
			<h4>Train an Incompatible Behavior</h4>
			<p>This part of breaking the behavior is something you can do when you are home. The behavior you are looking for is simply your dog playing with the correct toys. Whenever you see your dog playing with the correct toys, praise him extensively. When you do this, you are communicating to your dog that these toys are okay to chew. You are even encouraging your dog to chew the appropriate toys! If you want, you can even break out the clicker and try to get your dog chewing his toys as a command! There is no limit to what you can do if you can find a way to train it.</p>
			<h4>Positive Punishment</h4>
			<p>Just as you have communicated to your dog what toys are acceptable, you must also show him which things are not acceptable. Generally, just using an anti-chewing spray will work wonders. Whenever your dog chews something you have sprayed, they will not be happy about it. Trust me, I have tasted the spray multiple times and it's not pleasant. This method will work most of the time. If you do have a dog that persists in their chewing behavior, you will want to bring out the shock collar. There are other methods to train a dog out of chewing, but none of them are efficient. A properly used shock collar can work wonders.<br/><br/>
			When using the shock collar, it is VERY important that you have followed my instructions in the Principals of Dog Training. If you use a shock collar incorrectly, it will do much more harm than good. I recommend you use the Tempt to Train technique. Smear some turkey or some other smelly food on your chair legs. You can be in the room when doing this, but I always recommend being out of sight so that the dog does not associate you with the correction at all. When the dog goes to lick/chew the chair leg, give him a correction. Be sure that the correction is at a high enough level to stop the behavior, and not just annoy your dog and raise their tolerance to the correction.</p>
			<h4>Continued Management</h4>
			<p>Once you have solved the chewing problem. It will be most people's tendensies to forget to stimulate your dog on a daily basis. This will simply cause your dog to regress back to chewing, or another problem behavior to take up their time. It is up to you to keep your dog busy while you are away. So keep freezing the kongs and changing up the toys. The more busy you can keep your dog, the less trouble they will get into. Dogs are surprisingly similar to small children. If you do not keep them busy, they will find something to occupy their time. Most of the time, you will not like what they choose to occupy their time with.</p>
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
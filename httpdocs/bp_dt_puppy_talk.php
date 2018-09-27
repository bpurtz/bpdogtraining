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
                        <a class="dropdown-item active" href="bp_dt_puppy_talk.php">Puppy Talk</a>
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

		<video class="video_1"></video>

		<section class="post container-fluid">
			<h2>Deciding on breed</h2>
			<p>Before you purchase a dog, you should be aware that different breeds of dogs are going to act differently. You should examine your lifestyle and decide which breed will suite your lifestyle best.</p>
			<h3>Research the breed</h3>
			<p>Each breed is going to have different characteristics. That is why there are different breeds. People have selectively bred certain traits to produce a desired result. For example, the border collie was bred to be a high energy working dog. Whereas, the Great Pyrenees was bred to protect livestock, not herd them.<br/><br/>
			So do yourself a favor research the breed before you purchase the animal. This will help you anticipate problems that may arise. The sooner you can combat these problems, the easier they will be to fix.</p>
			<h3>What fits your lifestyle?</h3>
			<p>Have you ever seen the movies where the dogs mirror the look of their owner? That is what we are going for. If you have a more relaxed lifestyle, pick a breed that will need little exercise and be content sitting around all day.<br/><br/>
			If you are an avid runner, an English Bulldog just might not be the dog for you. So take note of what you will want to do with the dog, and pick a breed that will fit your lifestyle. It will make for many fewer problems in the future!</p>
	
		</section>

		<section class="post container-fluid">
			<h2>Picking the right puppy</h2>
			<p>Hand in hand with picking the correct breed, you must also choose an individual puppy that will compliment your lifestyle.</p>
			<h3>Vet Checked</h3>
			<p>Always make sure your puppy has been taken to a qualified Vet and given a clean bill of health. If you do rescue a puppy, expect there to be some unseen medical expenses somewhere.
			<br/><br/>
			I am not discouraging the adoption of a puppy from a bad situation, I just want to inform you of the problems you may encounter in the future.<br/><br/>
			There are far too many ailments that could affect your puppy to list on here. So take your puppy to a vet as soon as you can for a proper examination.</p>
			<h3>Energy Level</h3>
			<p>Energy levels are always going to vary between litter mates. Whereas sometimes this can reflect the animals health, most of the time it will just depend on the puppies personality. So if you want a laid back dog, pick the one sleeping while the others are running around. If you want a dog that will have to keep up with you, pick the more energetic puppy!<br/><br/>
			Multiple visits will help you determine this. One visit will not necessarily dictate a puppies personality. It could just be tired! So go for a few visits before you decide on a puppy you want.</p>
			<h3>Social Tendencies</h3>
			<p>The more social a dog is, the better. There will be problem behaviors in every dog, but an asocial dog will be the most difficult to train. If there is a puppy that is fearful to strangers or other dogs, be cautious. If you do get a fearful puppy, early socialization will be key. Having an idea of what problems you may encounter will help you be more prepared for them!</p>
			<h3>Breeder Credibility</h3>
			<p>One last note on picking a puppy will be the breeder. If you are wanting a dog with as few problems as possible, look at the breeder. Many breeders keep their litters very isolated. This will foster fear of new stimuli. You should also look at the breeder dogs. If the parents are showing signs of fear or aggression, chances are your puppies have grown up in that environment. This will increase the likelihood of the same problems manifesting itself in your puppy. So ask around before you choose a breeder. Look at previous litters and see if there is a common problem.<br/><br/>
			Once again, I am not discouraging the adoption of a puppy or dog from a bad home. You should just be aware of what you may encounter in that situation. Be prepared to pay for dog training in the future.</p>
	
		</section>

		<section class="post container-fluid">
			<h2>Once you get a puppy</h2>
			<p>Once you decide on a puppy, the training begins. Whether you got a puppy with a champion bloodline or a puppy from the pound, every encounter your dog has is shaping their disposition. Here I will outline some common things to work on and keep an eye out for. Always keep in mind exactly  what you are encouraging when you give your dog food, praise, or play.</p>
			<h3>Proper Reinforcement</h3>
			<p>As a trainer, I cannot count the number of times I have seen improper reinforcement. I believe this to be a leading cause in nearly all problem behaviors. Positive Reinforcement is rewarding a behavior to increase the likelihood the dog will display that behavior again. So pay attention to what you are rewarding.</p>
			<h4>Jumping</h4>
			<p>Jumping is the most common problem behavior that is caused by improper reinforcement. Think of this problem from your dog's perspective. Your dog wants you to pet them. But if they are just sitting there, being quiet, you pay no attention to them. What do you think they will do? Try to find ways to gain your attention.<br/><br/>
			When your dog then jumps on you, you push him away. Some owners even pet their dog at this point. Whether you pushed your dog away or praised them, its reinforcing this behavior. For your dog, being pushed away is the most praise he's gotten all day! He loved it. So he will jump again.<br/><br/>

			</p>
			<ul>
				<li>Barking for attention</li>
				<li>Begging</li>
				<li>Pawing</li>
				<li>Whining</li>
				<li>Mouthing</li>
				<li>Fear</li>
			</ul>
			<h4>Fearfulness</h4>
			<p>I wanted to designate an entire section to fearfulness caused by improper reinforcement. To do this, I will tell a story of a fearful dog that I have told before.</p>
			<p>"I got a call from a woman who explains to me that she would like some training for her fearful dog. This wasn't very uncommon so I thought nothing of it. I gave her a time to bring her dog as usual. When the dog arrived, I realized it was no common case of fear. This dog had become extremely fear-aggressive. She would attack any other dog or person she did not intimately know.<br/><br/>
			After spending some time with the woman, I quickly realized what the problem was. Every time her dog showed a hint of fear, she was instantly by the dog's side. She would sooth her and offer her little bits of steak to calm her nerves. While sweet, this was exactly the dog's problem. By coddling the dog, the woman had taught her dog two things: 1) She reinforced the fear of the dog via praise and rewards, showing the dog it was good to be fearful. 2) As the leader, she was telling the dog that "yes, what you are afraid of is dangerous and should be feared."<br/><br/>
			As the leader of our dog, we must demonstrate the correct response to our dog's fear. I guarantee you that if the woman would have not payed attention to her dog when it first showed fear, the dog would not have been fearful."</p>
			<p>While improper reinforcement is not always the cause of fear, this story is meant to show you exactly how devastating improper reinforcement can be. So pay attention to what you are encouraging in your dog. Praise them when they are being good and quiet. If you let them demand attention and succeed, they will demand attention more often.</p>
			<h3>Management</h3>
			<p>Improper reinforcement is not the only cause for the development of problem behaviors. Poor management can set your do up to fail. If you constantly leave your dog free in a room with turkey on the counter, expect your dog to learn how to eat off the counter.</p>
			<h4>Problem Behaviors</h4>
			<p>If you want your dog to succeed, then set them up to succeed. While your dog is a puppy, do not leave them free in the house until they are potty trained. Don't leave food lying around unless you have trained your dog not to eat off the counter. The environment you keep your dog in will play a large role in determining their success.<br/><br/>
			If you see a problem behavior begin to arise, take steps to prevent it from becoming a big problem. Utilize this website to combat problem behaviors. The more proactive you are in dealing with problem behaviors, the easier they will be to stop completely.</p>
			<h4>Exercise</h4>
			<p>I made exercise its own section because of how important it is to managing a dog. If you have a high energy dog, expect to have to run them or keep them in a large yard. If they are hyped up with nothing to do, they will find something to do.</p>
			<h4>Stimulation</h4>
			<p>Which brings me to another point I want to emphasize. You must provide stimulation for your dog. If you do not, your dog will find something to stimulate them. Chances are you are not going to like what happens next. So get a bunch of toys and rotate them regularly. If your puppy sees the same toys day after day, they will get bored. I always recommend having 7 'sets' of toys. One for each day of the week. Rotate them this way to keep your puppy interested.<br/><br/>
			Kong makes some great toys to occupy your dog! Stuff one full with peanut butter and freeze it. It will take your dog hours to devour!</p>

			<h3>Socialization</h3>
			<p>Socialization is going to be one of the most important factors to raising a well-adjusted adult dog. It is important for a puppy to be exposed to as many other FRIENDLY dogs as possible. So make some play dates with other dog lovers. Many places hold puppy socialization classes which help tremendously. The more comfortable you can get them around other dogs, the better.<br/><br/>
			Another side of this is socialization to people. Same as before, you want to expose your puppy to as many FRIENDLY strangers as possible. Have strangers give your dog treats. You do not want your dog to think anyone or any other dog is going to hurt them.</p>
			<h4>No Babying</h4>
			<p>If something does happen, it is important not to encourage fear. If your puppy gets attacked, resolve the situation as quickly as possible and pretend like nothing happened. DO NOT coddle your dog. If they are wounded, get them medical attention calmly. If you make a huge deal out of this incident, it will only exacerbate the problem. You will be encouraging your dog to be fearful.<br/><br/>
			As the pack leader, we must remain calm in the face of danger.<br/><br/>
			Another common thing people do is shelter their dogs. If another dog is playing with your puppy, and your puppy goes to hide behind you, calmly move out of the way. Encourage your dog to play. If you see that another dog is being aggressive, remove your puppy as soon as possible.</p>
			<h4>Protect Your Dog</h4>
			<p>The best thing for your puppy is for them not to be attacked in the first place. So when entering a dog park, take a look at the dogs present. Most people are good about not bringing aggressive dogs, but not always. Be weary of any possible danger that could present itself. Do not put your puppy in a place to have a bad experience. We want to make all new experiences as rewarding as possible.</p>

			<h3>No Babying</h3>
			<p>For the third time I am going to mention no babying. I do this because of how important it is, and how often I see it done. Unless your dog is in physical danger, do not come to their rescue. Would your mother come to your rescue if you were crying about a butterfly? I sure hope not. Your parents communicate to you what to be afraid of based on their actions. The first time I saw a rattlesnake and tried to touch it, my mom freaked out. That reaction showed me that I should be afraid of rattle snakes.<br/><br/>
			Always remember what we are communicating to our puppy through our actions. We show them what is right and wrong by rewarding and punishing them. We show them what is dangerous or safe based on our actions as well.</p>
			<h4>Verbal Punishment</h4>
			<p>Many trainers discourage verbal punishment of any kind. I am going to go against the grain by not outlawing it. This does not mean I want you to go screaming at the top of your lungs, though. If I see my dog chewing something he is not suppose to, I will give a stern "no" and flick him on the nose. Nothing hard, but it shows him what I don't want him to do.<br/><br/>
			An important part of this is your composure. When I give a verbal punishment, I am not out of control. I am calm, and stern. Once I have reprimanded my dog, I will wait 15 seconds and then give him some love if he has stopped. By rewarding the absence of the bad behavior, as well as punishing the bad behavior, I am showing my dog exactly what I want. This clear communication is very important when using verbal punishment.</p>

			<h3>Early Proper Training</h3>
			<p>We'll all heard the argument that practice makes perfect. And we've all heard the counter-argument that only perfect practice makes perfect. Well the ladder is true. No matter the quality of your training, it is always good to begin dog training early. If you want your dog to listen to you every time, and consistently obey you, though, you need to learn PROPER dog training. There are too many subtleties that have been refined through the years for you to learn without help. Utilize this website to learn about dog training before you even get a puppy! If you already have a puppy, work hard to refine your dog training. Read through each section thoroughly and absorb as much knowledge as you can!</p>
			<h4>Ineffective Command Words</h4>
			<p>A very common problem with improper training at an early age is ineffective command words. By this I mean that your dog does not listen to you every time you use a command. I even had one nice owner who's dog would run away when he gave the 'come' command.<br/><br/>
			If this has happened to you, I recommend that you change the command words to the affected commands. You may notice that I don't use conventional command words for certain commands. I do this because wherever I go, everyone want to tell my dog to "sit, down, come here!". While this is sweet, it diminishes the effectiveness of these words to my dog. When a stranger tells my dog to "sit" 40 times, and my dog sits once, my dog becomes desensitized to the command word "sit." So I decided to be proactive and change the command words. Now my dog has no idea what people mean when they say "sit."</p>
			<h4>Consistency</h4>
			<p>Consistency is another thing lacking in amateur dog training. Dog owners just do not realize the importance of being consistent. So after reading this, make a point to be consistent is command training, as well as solving problem behaviors.</p>
			<h4>Stimulation</h4>
			<p>No matter how efficient you are at dog training, it will help your dog! It is a great way to make them think. Have you been out of school for a couple years? Then you know how when you stop learning, it's hard to start again. If you constantly make your dog think via training, it will exhaust him mentally. This is a great way to have a more well-behaved dog!</p>

			<h3>Early Exposure to Common Stimuli</h3>
			<p>Exposing your puppy to new stimuli should always be at the forefront of your mind. The more positive experiences you can expose your dog to, the more confident your dog will be in exploring new things.</p>
			<h4>What do you have in your life?</h4>
			<p>Examine your life. Think of things that your puppy will have to get used to. Make a list. What would there be?
			</p>
			<ul>
				<li>Tractors</li>
				<li>Vacuum</li>
				<li>Gunfire</li>
				<li>Doors</li>
				<li>Water</li>
				<li>Touching of the feet</li>
				<li>Sports balls</li>
				<li>other animals</li>
				<li>Clippers</li>
				<li>Young children</li>
				<li>Hardwood floors</li>
				<li>Broom</li>
				<li>Parrot</li>
				<li>Other dogs</li>
			</ul>
			<p>You can make this list as extensive as you want. Anything you can think of that could scare your dog, expose him to it early and show him through your actions that it isn't meant to be feared.</p>
			<h4>Proper Response to Fear</h4>
			<p>When exposing your dog to different experiences, your reaction will be the most important thing. If your dog shows fear, take charge and show no fear. Do not shut off the vacuum. Put them in the bathroom with the vacuum on. Stay in there with your dog and just act like nothing is wrong. You want to show them that their fear of vacuums is illogical and you will not support it by coddling them or turning off the vacuum.<br/><br/>
			If your dog shows a fear of brooms, do the same thing. Put them in a small room and move the broom around a bunch. Do not beat them with the broom. That would show them that there is something to be afraid of. Just move the broom about and act like everything is fine.
			<br/><br/>
			Exposing a puppy to gunfire is always necessary if you are going to shoot around them in the future. Take your dog shooting and put him on a leash. When you fire, act totally normal. If your dog whines or pulls on the leash, ignore him. Once he calms down you can pet him a little, but do not overdo it. You want to act as if nothing in the world is wrong. Do not give excessive praise and only praise calm behavior.</p>
			<h4>Socialization</h4>
			<p>I put socialization in its own category because of its importance. If your dog is afraid of the broom, it's not the end of the world. If your dog is afraid of people or other dogs, it can drastically affect you. So focus on exposing your puppy to FRIENDLY dogs and people as much as possible.</p>
	
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
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
                <li class="nav-item dropdown active">
                    <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#">Principals of Dog Training</a>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="bp_dt_command_training_principals.php">Command Training</a>
                        <a class="dropdown-item active" href="bp_dt_problem_behavior_principals.php">Problem Behaviors</a>
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
			<h2>Before You Begin Training</h2>
			<p>
			</p>
		</header>

		<video class="video_1"></video>

		<section class="post container-fluid">
			<h2 id="problem_behavior_development">What Is A Problem Behavior?</h2>
			<p>A problem behavior is defined as any behavior that the owner finds undesirable in their dog. This definition is so broad because a problem behavior is different for each owner. One owner may not mind if their dog is regularly on the furniture, whereas other owners may find it very undesirable. This applies to a myriad of different behaviors, so the first step in training a well behaved dog is to define which behaviors are undesirable to you, and work on them consistently.<br/><br/> 	
			In this section I will outline the general Causes and Solutions of problem behaviors. Whenever you are planning to combat a problem behavior, reference this section to figure out the motivation. Once you know the motivation behind the behavior, it will be much easier to come up with a plan to treat the source of the problem.</p>
		</section>

		<section class="post container-fluid">
			<h2 >The Development Of Problem Behaviors</h2>
			<p>All dogs are impressionable. They are a product of their environment. Because of this it is important to give your dog the best chances possible to succeed. If you leave your dog in the back yard all day with no attention, you better expect that dog to occupy his time with something. This is just one reason that a dog will develop problem behaviors. If you set your dog up to succeed by stimulating them both mentally and physically, you will have very few problem behaviors. Here are a few things to be aware of when owning a dog:
			</p>
			<h3>Under Stimulation</h3>
			<p>Like humans, many undesirable behaviors are caused by boredom. If you leave a bored dog alone in a room, chances are that they will find something to amuse themselves with. Dogs need constant stimulation to keep their minds occupied. The most common behavior caused by under stimulation is chewing. Once this behavior is developed, it becomes harder and harder to break.</p>
			<h4>How can you combat Under Stimulation:</h4>
			<ul>
				<li>Toys:</li>
				<p>Depending on the dog, toys can be a valuable tool in combating boredom. It is important to rotate the toys regularly, though. As with children, dogs will get bored if they always have the same toy to play with. Leave a couple toys out, then rotate in new ones every day. This will keep the dog more interested in the toys he has without having to purchase new ones.</p>
				<li>Food Toys:</li>
				<p>Almost every owner feeds their dog without making them work for it. This takes away an important part of their natural predatory stimulation. Dogs evolved from wolves. Wolves spend much of their time hunting and eating their kill. If you simply give your dog their food in a bowl, it does not provoke any mental stimulation at all.<br/><br/>
			There are many great products out there that you can stuff with peanut butter that will give your dogs hours of stimulation. You can freeze these as well to prolong the process. Kong also makes a great food dispensing toy that you can fill with solid food. You want to keep an eye on your dog’s diet, so be sure not to give them too many sweets!</p>
				<li>Training:</li>
				<p>Believe it or not, training your dog to do different commands is mentally exhausting to them. It takes a lot of brain power to figure out what we want them to do. If you ever run out of commands to teach your dog, you can pick up a sport such as agility or schutzhund. These take years to master and will give your dog as much mental stimulation as they can handle.</p>
				<li>Exercise:</li>
				<p>Everyone says that a tired dog is a good dog. This is very true. If you leave your dog in a small house all day and expect them to behave, you have another thing coming. Taking your dog out for a run will benefit both of you in more ways than one.</p>
			</ul>
			<h3>Medical Problems</h3>
			<p>A commonly overlooked cause of behavior problems is the health of the animal. Medical problems can cause house training problems, aggression, and destructive behaviors. Before you begin training your dog, you will want to rule out any such medical problems by taking them to a veterinarian to have them checked out. This will help you avoid pitfalls in training and many weeks of frustration!</p>
			<h3>Lack of Management</h3>
			<p>Would you leave your 2-year-old child alone in a room with a cake in reach? Of course not! You know that your child will instinctively go after that sugary goodness! The same goes for your dog. If you do not want your dog to develop a bad habit like eating off the counter, do not leave chicken where your dog can get at it until he is trained not to eat off the counter. Once a problem like this is developed, it is much harder to break than it would have been if it was never learned. It is important to set your dog up for success. This will be stressed in each undesirable behavior we combat. Just remember to not just try to help your dog to succeed, but to also not allow them to fail.</p>
			<h3>Improper Reinforcement</h3>
			<p>Improper reinforcement of undesirable behaviors is by far the leading cause of behavioral problems in dogs. Let me share a story of a dog that was brought to me for fear aggression.
 			<br/><br/>
			It was a nice sunny day when I got a call from an owner who’s dog had attacked one of her other dogs. She was very afraid and wanted to know if there was anything I could do. I am experienced with aggressive dogs and I was happy to give it a shot. She traveled over 10 hours to meet with me the next day at my facility. After asking some preliminary questions, I quickly saw the problem. Each time her dog began acting fearful, she would immediately hold the dog and give her treats, saying soothing things such as “it will all be okay” and “shhhh shhh shhh.” When this is done occasionally, it usually doesn’t amount to much. But she would shelter the dog from anything. To an inexperienced person, this may seem harmless, but it is far from that. She was unintentionally communicating two things to her dog:<br/><br/>
			“Yes, the thing you were slightly afraid of is actually an extremely dangerous thing that only I can protect you from. Your fear is totally justified.”<br/><br/>
			“Good girl, you have reacted correctly to the situation. Fear is the correct response for this situation.”<br/><br/> 
			Now she did not know that she was communicating this to her dog. Her actions were completely necessary in her mind. This is why it is important to see things from your dog’s eyes and how they view the world. I will expound more on fear and fear aggression in a separate section. This is merely used as an example for improper reinforcement.<br/><br/> 	
			Fear is not the only behavior developed through improper reinforcement, though. Jumping, for example, is another common problem. Most dogs jump in order to get attention. Any type of attention. So when you pet them, or ever try to push them away, you are actually reinforcing that behavior.<br/><br/> 	
			Improper Reinforcement will be discussed in almost every problem behavior. Just remember to analyze what you are reinforcing when you give your dog food or attention. If you pet them to get them to be quiet. You have reinforced barking or whining.</p>
		</section>

		<section class="post container-fluid">
			<h2 id="types_behavioral_problems">Types Of Behavioral Problems</h2>
			<p>As discussed before, every behavior your dog displays has motivation behind it. There are three main categories that we place each behavioral problem. We categorize behavioral problems by what motivates them.
			</p>
			<h3>Self-Rewarding Behaviors</h3>
			<p>Self-rewarding behaviors are generally the more problematic behaviors. The reason for this is that these behaviors do not seek the attention of their owners. Dog's just naturally find these behaviors rewarding for one reason or another. This category covers such behaviors as: Stealing food, digging, chewing, and sometimes barking.
			</p>
			<h4>Digging:</h4>
			<p>The easiest way to show you a self-rewarding behavior is to give an example of one. Digging is an example of a self-rewarding behavior. When your dog digs, they are not looking for attention from their owners. Rather, they just enjoy the act of digging. You can see how this behavior would be harder to curb than an attention-seeking behavior like jumping. It is good to know the motivation behind the problem behavior you are dealing with. When dealing with digging, you have to realize that your dog is not digging to please you. After you have accepted this, you will need to use one of the methods that I will teach you to eliminate a self-rewarding behavior.<br/><br/>
			When deciding which method to use to extinguish a bad behavior, you have to use logic to determine which method will be most effective. For instance, rewarding the absence of the behavior will not be effective because your dog already finds digging rewarding. I will speak more of digging specifically and the methods used to extinguish problem behaviors more once we identify the remaining categories of problem behaviors.</p>
			<h3>Attention Seeking Behaviors</h3>
			<p>Attention seeking behaviors are generally the easier behaviors to deal with. Jumping is the most common problem behavior where the dog seeks attention. Your dog does not find the act of jumping rewarding, but the result they get from jumping can be very rewarding. For instance, when a dog jumps, most owners either push their dog away or show some sort of attention towards the dog. This is much more interesting to your dog than if you just ignored them completely. Therefore, most dogs will continue to jump in order to gain your attention.
			<br/><br/>
			Attention seeking behaviors are usually learned behaviors for your dog. They have associated doing an action with you showing them attention. When your puppy jumps for the first time, and you show them no attention until they have all four feet on the floor, you will see how jumping won't be as much of a problem. The reason for this is that your dog never associated jumping with gaining your attention.<br/><br/>
			The same rule goes for other attention seeking behaviors. If your dog is outside and wants to come inside, they will usually whine or bark. If you ignore this the first time your dog demonstrates this behavior, your dog will not associate barking or whining with coming inside. If you wait until your dog is quietly sitting outside to let them in, they will not develop the attention seeking barking behavior.</p>
			<h3>Neurotic Behaviors</h3>
			<p>Neurotic behaviors are usually developed from boredom or stress. Neurotic behaviors manifest in many different ways. You can distinguish these behaviors by not being able to place them in either attention seeking or self-rewarding behaviors.<br/><br/>
			I once trained a dog who developed the behavior of chewing tree bark on many different trees around the property. She did not find this rewarding like normal chewing. She only displayed this behavior when she was so excited to play fetch that she didn't know what to do with her emotions. This is just one example of a neurotic behavior. Other examples could be aggression and plucking in parrots. When I place a behavior in this category, you know that there is an underlying problem. Most of the time, it is boredom. When a dog has nothing to stimulate their body and mind, they act out in strange ways. The best solution to these behaviors is always prevention and not treatment. There are dozens of ways to keep your dog occupied while you are not at home. Kong makes a great toy that you can place treats inside, and it takes your dog hours to get them out. Exercise is also crucial in combating these behaviors. The saying "A tired dog is a good dog" applies to almost all situations.</p>
		</section>


		<section class="post container-fluid">
			<h2 id="breaking_tools">Tools For Breaking Problem Behaviors</h2>
			<p>This is my favorite part of dog training. You can get as creative as you want in order to combat problem behaviors. Unlike command training, there is no one solution for a problem. You have to figure out what works in each situation. I always recommend you try to find the motivation behind the problem behavior before you decide which method to use to curb the behavior. For instance, ignoring the problem behavior will not work if your dog is displaying a self-rewarding behavior. The dog won't care if you ignore them, they are enjoying themselves. On the other hand, if your dog is displaying an attention seeking behavior, ignoring them may very well work.
			</p>
			<h3>Management</h3>
			<p>Managing your dog will mean different things depending on which problem behavior you are combating. The general idea of managing your dog is to not allow them to complete the problem behavior you are combating. This is generally done by limiting your dogs freedom so they cannot display the problem behavior. Once you have gotten them to not display the behavior with limited freedom, you can give them their freedom back slowly until they have full freedom again. If your dog does successfully display the behavior, you will need to limit freedom again. This can be a time consuming project, but doing it correctly will solve the problem long-term.<br/><br/>
			When combating problem behaviors, we limit freedom to not allow them to show the problem behavior. If your dog does complete the problem behavior, your dog is rewarded for showing the behavior. This will encourage them to show the problem behavior more often. For example, if you are trying to get your dog to stop chewing, you cannot allow them the opportunity to chew anything you do not want them to. If you leave a dog with a chewing problem home alone uncrated, expect them to chew. To manage a chewing dog, you must not allow them the opportunity to chew. We accomplish this by crating them, or keeping them in a kennel when you are not there to supervise them. When you can supervise them, you can use anti-chewing spray such as 'bitter yuck' to keep them from chewing. The longer you can keep them from chewing something, the less likely they will fall back into the habit. Think of it as smoking a cigarette. The longer you can go without smoking, the less you desire it. But if you just smoke one after not smoking for awhile, you will desire them like crazy.<br/><br/> 	
			There are more ways to manage problem behaviors, and they will be discussed in each behavior they apply to. Just remember that whatever problem behavior you are dealing with, you will need to manage it in one way or another.</p>
			<h3>Reinforce Absence Of Problem Behavior</h3>
			<p>To reinforce the absence of a problem behavior, you simply reward the dog once he stops performing the bad behavior. This is one of the best ways to combat a problem behavior, but does not work for every problem behavior. Think of digging. If you rewarded your dog for the absence of digging, would your dog make the connection between the reward and not digging? I doubt it. This method is best used on problem behaviors that demand your attention.<br/><br/>
			An example of this would be whining for attention. Many dogs have learned to whine or jump to get their owners attention. To reward the absence of this behavior, only show attention to your dog once they stop jumping or whining. Don't show your dog negative or positive attention. Just ignore your dog completely when they whine or jump, then show them attention once they stop the bad behavior.</p>
			<h4>Extinction Burst</h4>
			<p>When you utilize this technique, you will almost always encounter something called an extinction burst. An extinction burst is your dogs last ditch effort to get you to pay attention to them. When you begin ignoring your dogs whining or jumping, they get confused. They have always used jumping or whining to get your attention. They have developed a strong association between jumping and receiving attention. So when you suddenly stop showing them attention when they show these behaviors, they do not know what to do. This will cause them to try even harder to get your attention. For awhile, they will whine and jump more often. At this point, it is VERY IMPORTANT not to break down and show them attention. If you do this, it will show them that if they just jump a little more, or whine a little louder, they will eventually get your attention. In affect, you are actually training them to do this.
			<br/><br/>
			So expect your dog to initially show the problem behavior more often and with more vigor, but over time, they will realize that jumping or whining does not work to get your attention anymore. This is a normal thing to happen when you use this technique, so do not be discouraged if this happens to you.</p>
			<h3>Training an Incompatible Behavior</h3>
			<p>Training an incompatible behavior is exactly what it sounds like. This technique is similar to the previous one, but it takes it a step further. I recommend you use both of these technique in unison. Just like rewarding the absence of the behavior, this technique is only effective on certain behavior problems. It is hard to train an incompatible behavior to barking. The reason for this is the only incompatible behavior to barking is silence. It would be hard to train your dog to be silent on command.<br/><br/>
			A good example for this technique would be training the 'heal' command if your dog is a puller. If you develop a very strong heal command at home, you can eventually use it to keep your dog from pulling in public. It is impossible for your dog to heal and pull at the same time.<br/><br/>
			As I said before, you can get as creative as you want when using these techniques. I've used this technique to stop dogs from jumping by training a very strong sit command.</p>
			<h3>Positive Punishment</h3>
			<p>Here comes the most controversial part of this website. Positive punishment is when you administer a punishment in order to stop a behavior. The reason for there being such a stigma surrounding positive punishment is that it is most often used incorrectly. Most owners who utilize this do so simply to hitting their dog to get them to stop something. While sometimes this can work, it is neither humane or very effective.<br/><br/>
			When using positive punishment correctly, though, it can be an invaluable asset to eliminate problem behaviors quickly. Before you go thinking that I beat all my dogs senseless, let me explain about what an effective positive punishment is to me. A positive punishment can range anywhere from a shock collar to a bunch of pennies in a can. The can, when shaken, will make a loud noise that will be unpleasant to the dog. When deciding which method to use, I consider two main things:</p>
			<h4>Effectiveness</h4>
			<p>A proper punishment should be effective enough to stop the problem behavior within 2 or 3 uses. You do not want to use a punishment if you have to use it more than this for your dog to pay attention. If you repeatedly punish your dog, but your dog overcomes the punishment, they just build an endurance against the punishment. Then you will have to raise the punishment even more. It is just better to start at a mildly higher level of punishment so that you do not need to overcome your dog's tolerance repeatedly.</p>
			<h4>No Connection To Owner</h4>
			<p>The most important thing about the punishment is that it cannot be connected to the owner or the device being used. When people use striking their dog to stop a problem behavior, it may work while the owner is present. The dog will learn that it cannot go into the trash while the owner is around, but if the owner is gone, the trash is free game. This is the biggest problem people run into when utilizing positive punishment. The same thing goes for the shock collar. If you use the shock collar the first time you put it on your dog, your dog may listen when they have the collar on, but do not listen when the collar is off. I will speak of this issue specifically later on, but just know that an effective punishment cannot be connected to the owner or the device being used.<br/><br/>
			The best way to accomplish this, is to use a device that can be used from outside the room. If you can effectively punish your dog from outside of the room, then your dog will not associate the punishment with you. Instead, they will think God is punishing them. This will make it much easier to stop your dog from doing the behavior when you are away.</p>
		</section>


		<section class="post container-fluid">
			<h2>Shock Collars</h2>
			<p>I want to designate an entire section to shock collars because of how effective I've seen them work. I also want to combat the stigma of how shock collars are the cruelest tool for dog training. If you can learn how to correctly use these devices, they are not cruel, but very effective. I encourage you to make sure you learn how to use them correctly before you attempt to use them, though. If used incorrectly, shock collars are more of a crutch than a tool.
			</p>
			<p>First off, I believe shock collars can be the most humane way of stopping a problem behavior. Lets tell a story about a dog owner. This dog owner works at a stressful job and comes home tired every day. He has 3 children and is barely scraping by. Day after day he comes home to his chaotic house and the dog just seems to chew everything in sight. He doesn't want to use a shock collar on his dog because he believes they are cruel. Instead he comes home and screams at his dog out of frustration. Day after day this continues.<br/><br/>
			Does this sound like a better situation than using a shock collar for a week and solving the problem for good? I don't think so. Some owners may put up with a dog that has a destructive behavior like this, but others will just rehome their dog. I believe that using a shock collar to provide mild uncomfort for a week or two is better than either one of these situations.<br/><br/>
			The next reason I use shock collars is because of how effective they are. If you correctly use them to combat barking, you can stop your dog from barking much quicker than any other method out there. This will eliminate so much frustration in the household, it will be well worth it.</p>
			<p>So lets get to the meat and gravy of shock collars, and all positive punishment techniques. There are 5 key parts to using positive punishment.</p>
			<ol>
				<li>Desensitization</li>
				<p>The absolute most important part of using positive punishment is desensitization to the punishment device. This really only applies to collar devices, not noise punishments. What most people do when using shock collars is just throw it on their dog and begin using it immediately. The problem with this is dogs are smart. When you put the collar on your dog and begin using it right away, your dog makes a connection between the punishment their receiving and the collar you just put on them. This will cause them to not do the problem behavior when they have the shock collar on, but they will disobey once the collar comes off because they know you cannot punish them.<br/><br/>
				The trick is to expose your dog to the collar many days before you actually use it. You want to put the collar on, and take it off many, many times. Feed them with it on. Play with them when you put it on. If you do this, your dog will not make a connection with the punishment and the collar. Continue exposure to the collar without the punishment throughout the whole training process. You never want to let them make the connection because then you will have to use the collar all the time. Your long-term goal is for your dog to not perform the bad behavior even when the collar is off.</p>
				<li>Use Correct Level Of Punishment</li>
				<p>As discussed before, you will want to give a high enough level of correction to curb the behavior in 2 or 3 corrections. I always use the collar on my arm to gauge what level I should use. This will not only ensure you have a high enough level, but it will prevent you from using excessive correction. If you start out too low, you are just going to build up your dog's resistance to the correction. Lets say you want to stop your dog from eating out of the trash, but you use too low of a correction. Your dog will learn that if he powers through the correction, he will get rewarded. In essence, you are training your dog to resist the correction.</p>
				<li>No Connection To Owner</li>
				<p>Just as you do not want your dog to make a connection between the correction and the shock collar, you also do not want the dog to make a connection between you and the correction. I will show you a drill I use when i am correcting certain behaviors, but in general, you do not want to be around your dog when you give the correction. This is the main reason i like shock collars so much. It is very difficult to separate yourself with the correction any other way. With a shock collar, you can stand outside and look through a window to correct your dog. This causes your dog to not associate the correction with you at all. You can also be sitting on the couch across the room and correct your dog without even looking at them. You want your dog to think that God is correcting them from doing bad. If you can fool them into thinking that, they won't do that behavior even when you are not around. This is what the end goal is.</p>
				<li>Timing Is Everything</li>
				<p>Another crucial part in correcting your dog is the timing. Dogs will not associate a correction with a bad behavior unless they are corrected while displaying the behavior. That is why an owner hitting a dog because they chewed up the couch 4 hours ago will not be effective. The dog has no idea why he is being corrected. Even worse, the dog could associate the correction with something else and possibly develop aggression.<br/><br/>
				This is another reason why I like the shock collar so much. You can time the correction perfectly from across the room with the push of a button. Even with pennies in a can, you cannot be as precise.</p>
				<li>Post Management</li>
				<p>As in my previous example of quitting smoking, you must manage your dog so they do not fall back into the bad habit. If they complete the bad behavior without being corrected they might think that they can do it more often without being corrected. If this happens, you will just want to refresh the training. When used correctly, I see very few dogs regress into the bad behavior again. If you do notice your dog falling back into the undesirable behavior, immediately repeat the training until your dog stops the behavior.</p>
			</ol>
			<h4>Tempt to Train</h4>
			<p>This is my favorite drill for training a dog not do perform a bad behavior. You can use this drill for: Chewing, Stealing food, Garbage Diving, Attacking chickens, and more! The best thing about this drill is you do not need to spend all day waiting for your dog to show the bad behavior. Most people run around after their dog waiting for them to steal food off the counter or go into the garbage. That way they can correct them.<br/><br/>
			To do this drill, you will need to be stealthy and plan it out a little. I will use stealing food from the counter as an example.<br/><br/>
			The first part of this drill is tempting the dog. Instead of waiting around for your dog to steal food, you will simply tempt them. So put a nice piece of turkey on the counter and release your dog in the house. Give yourself enough time to get out of the house and into position. I usually stand outside of a window outside of the room with the counter. Your dog will naturally smell the turkey and be interested. They usually look around to make sure you aren't there to correct them. Then they will go after the food! When Your dog begins to sniff the counter or begin jumping, give them a correction. They will stop the behavior and look around, wondering what the heck just happened! They will probably try a couple more times, but if you are using a high enough level of correction, they will stop after that. You can repeat this drill a couple times a day until you are satisfied they have no interest in stealing food off the counter!<br/><br/>
			It is important that your dog does not get the turkey off the counter. If they successfully get the turkey, it will just encourage them to power through the correction to get the food. This is why its so important to start at a high enough level of correction. If your dog is so food driven that you cannot control them, lower the food reward on the counter. Maybe use some kibble instead of turkey. You can eventually raise the food reward, but you want the dog to start off successfully.</p>
		</section>


		<section class="post container-fluid">
			<h2>Consistency</h2>
			<p>When trying to eliminate any problem behavior, consistency is key. If your dog has a jumping problem, and you only sometimes discourage it, your dog will be confused. It is not fair to expect your dog to know when it is or isn't okay to jump. You either have to allow it all the time, or never.<br/><br/>
			Management also has a big part in being consistent. If you are consistent in not allowing your dog to jump, but when guests come over, they encourage it. You will have a hard time stopping your dog from jumping. You must ensure that whatever environment your dog is in, they do not have the opportunity to jump. You have to instruct your guests what to do if your dog jumps. Now this sounds inconvenient, but it will not be this way forever. If you are consistent in training, you will not have to worry about your dog jumping for long.</p>
		</section>

		<section class="post container-fluid">
			<h2>No Reward Marker</h2>
			<p>You learned about the no reward marker when reading about command training. Basically, you associate the word 'no' with you removing attention and rewards. This has built a strong negative association with this word. You can use this in day to day activity to discourage your dog from doing something. By no means is this a permanent solution, but it can help curb a behavior that is developing. If I see my dog chewing something he is not suppose to, I simply say 'no' in a strong tone. He has built that negative association, and will stop chewing the object immediately.<br/><br/>
			If you notice that your dog is displaying a bad behavior often, you will need to go to the previous techniques to solve the problem. Using the No Reward Marker is just a quick fix for the time being. It will also slow the development of the problem.</p>
		</section>

		<section class="post container-fluid">
			<h2>Aggression</h2>
			<p>While These techniques that I have explained will help with almost all behavioral problems, aggression is not one of them. Aggression is in its own category. I will address this more specifically in its own category. If your dog is showing aggressive tendencies, I strongly recommend you find a professional animal training in your area. There are so many causes of aggression and very few methods for treating it. The only successful training must be done in person, though.</p>
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
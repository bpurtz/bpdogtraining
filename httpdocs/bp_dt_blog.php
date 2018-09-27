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
                <li class="nav-item active"><a class="nav-link active" href="bp_dt_blog.php">Blog</a></li>
            </ul>
            <ul class="navbar-nav navbar-right">
                <li class="nav-item"><a class="nav-link" href="bp_dt_signup.php">Sign Up</a></li>

                <li class="nav-item"><a class="nav-link" href="bp_dt_signin.php">Login</a></li>

            </ul>
        </div>
    </div>
    </nav>


    <section class="blog_post container-fluid">
        <!-- Post title -->
        <h2 class="blog_post_title">Progress</h2>
        <!-- Post date -->
        <h4 class="blog_post_date">12/12/2017</h4>
        <!-- Post -->
        <p class="blog_post_p">
            Since the creation of this website, the goal of helping animals has always remained constant. The venue on which to do this is what I have been focusing my energy on. This month I had another experience with a fearfully aggressive dog.
            Although this pup now has amazing owners, it's past is a question. It is this past to which I would like to affect. Because even if I can help this animal, what overall good will I have done?
            How many animals can I personally help? 10/year if I work on this issue full time, and that is optimistic. Every case varies, and some dog's are much easier to help.
            <br/>
            The point of this post is to show you, the reader, and myself how little I can do on an individual level. But the point of this website is, and always has been, to usurp that individuality.
            When you see an aggressive dog, you may only see that aggression, or you can see the past of that dog and the motivation for that aggression.
            In many cases, that aggression could been prevented very easily early on. But over time, the problem cascades, and the difficulty to solve that
            problem rises as well. <br/><br>
            In an attempt to take a different approach to dog training, as well as for some fun, I have decided to add a social wing to this website.
            As of today, you can post problem behaviors, as well as command problems on my social site. This will enable the whole community to view your problem.
            This has been a long and strenuous process, although quite fun. If you have attempted to access the social wing of this website, you may have found
            some bugs! That will continue until the social wing is complete, but try to have some fun!
            <br/><br/>
            Site Administrator:<br/>
            Benjamin Purtzer
        </p>
    </section>

	<section class="blog_post container-fluid">
		<!-- Post title -->
		<h2 class="blog_post_title">What this website is meant for</h2>
		<!-- Post date -->
		<h4 class="blog_post_date">09/02/2017</h4>
		<!-- Post -->
		<p class="blog_post_p">Hello, my name is Benjamin Purtzer and I have been a dog trainer for more than 6 years. I have seen alot since I started training dogs. I have seen extreme cases of aggression and fear. But the most common things I see are simple problem behaviors that are very simple to solve if you put in the time and have the knowledge. Whenever I see one of these cases, I never like butting in and demanding that the owner conform to my way of teaching. Instead, I would like to start a community of people that help one another deal with these problems and help eachother build a better relationship with their pet. <br/><br/>
		In this blog section, I will be writing my own thoughts on pet ownership, but I would also like visitors to ask questions that I maybe have not thought of. This will give everyone a chance to learn from others and their situation. Please direct all of these questions to my email that can be found at the bottom of every page.<br/><br/>
		Since I have stopped training dogs professionally, I have began learning computer programming. While I am enjoying building this website, please be understanding that I am not a professional programmer as of yet. This website will develop as my own skills develop. While there is no membership yet, there will be one once I learn how to make it myself from scratch. <br/><br/>
		If anyone has any questions or suggestions on what I should do to make the site more appealing, please email me. Together, with the power of the internet, we can help pet owners solve problem behaviors and hopefully reduce the number of dogs are rehomed each year.<br/><br/>
		Site Administrator:<br/>
		Benjamin Purtzer
		</p>
	</section>


	<footer class="container-fluid">
		<h4>Contact</h4>
		<ul>
			<li>bpDogTraining@hotmail.com</li>
		</ul>
	</footer>

</body>
</html>
<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 11/6/17
 * Time: 10:26 PM
 */
session_start();
//destroy target_id if exists
if (isset($_SESSION['target_id'])) {
    unset($_SESSION['target_id']);
}
/************************* SUPPORTING METHODS **********************************/
include_once "total_mysql_commands.php";
include_once "display_problems.php";
/* Development and Debugging */
error_reporting(E_ALL);
ini_set('display_errors', TRUE);
/***************** Starting Point ******************/
if ($_SERVER['HTTPS'] != "on") {
    $url = "https://". $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI'];
    header("Location: $url");
    exit;
}
if ($_SESSION['user_id'] === null) {
    //if coming from sign_up form.
    if ($_POST['form_type'] == 'sign_up'){
        $display = uploadUserLogging($_POST['f_name'], $_POST['l_name'], $_POST['username'], $_POST['password'], $_POST['email'], $_POST['about_me'], $_POST['pet_experience']);
        header("Location: login_landing.php");
    }
    //if coming from sign_in form
    if ($_POST['form_type'] == 'sign_in'){
        $display = checkUserMatch();
        header("Location: login_landing.php");
    }

}

if (isset($_SESSION['user_id'])): ?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <title>BPdogtraining login</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">


        <link rel="stylesheet" href="../css/jquery-ui.min.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">

        <script type="text/javascript" src="../lib/jquery.js"></script>
        <script src="../lib/jquery-ui.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
        <script src="../lib/js-cookie.js"></script>
        <link rel="stylesheet" href="../css/posts.css">
        <link rel="stylesheet" href="../css/my_profile.css">
        <link rel="stylesheet" href="../css/social-general.css">



    </head>
    <body>

    <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
        <div class="navbar-header">
            <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#myNavbar">
                <span class="navbar-toggler-icon"></span>
            </button>
            <a class="navbar-brand" href="login_landing.php">BPdogtraining</a>
        </div>
        <div class="collapse navbar-collapse nav-container" id="myNavbar">
            <div>
                <ul class="navbar-nav">
                    <li class="nav-item"><a class="nav-link" href="../index.html">Training Grounds</a></li>
                    <li class="nav-item"><a class="nav-link" href="friend_page.php">Friends</a></li>
                    <li class="nav-item"><a class="nav-link" href="public_forum.php">Public Forum</a></li>
                    <li class="nav-item"><a class="nav-link" href="message_page.php"><span class="glyphicon glyphicon-envelope"></span> Messages</a></li>
                </ul>
            </div>
            <div>
                <ul class="navbar-nav">
                    <form class="form-inline" action="friend_search.php" method="post">
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="Search" name="friend_name">
                            <button class="btn btn-default" type="submit">
                                <img src="../svg/magnifying-glass.svg" alt="magnifying-glass" id="nav-search-icon">
                            </button>
                        </div>
                    </form>
                    <li class="active nav-item"><a class="nav-link" href="login_landing.php"><span class="glyphicon glyphicon-user"></span> My Profile</a></li>
                    <li class="nav-item"><a class="nav-link" href="logout.php"><span class="glyphicon glyphicon-log-in"></span> Logout</a></li>
                </ul>
            </div>
        </div>
    </nav>



    <section class="body container-fluid">
        <div class="row" id="profile-row">
            <div class="col-md-3">
                <img id="profile_photo" class="img-responsive img-thumbnail" src="../img/<?php
                //echo gettype($_SESSION['user_id']);
                //get photo row
                $photo_row = getPhotoRows((string) $_SESSION['user_id'], True);
                //echo out necessary data
                if ($photo_row) {
                    $photo_row = $photo_row->fetch_assoc();
                    echo $photo_row['category'] . '/' . $photo_row['name'];
                }
                ?>"/>
            </div>
            <div class="col-md-9 flex-container" id="photo_div">
                <div id="photo_album" class="row container-fluid">
                    <?php
                    //get first 6 photo rows
                    $user_id = $_SESSION['user_id'];

                    $user_row = getUserRow($user_id);
                    $photo_rows = getPhotoRows($user_id, False, 0, 6);
                    if ($photo_rows) {
                        while ($row = $photo_rows->fetch_assoc()) {
                            if ($row['id'] === $user_row['ppid']) {
                                //continue;
                            }
                            $category = $row['category'];
                            $location = $row['name'];
                            $rel_path = '../img/' . $category . '/' . $location;
                            if (file_exists($rel_path)) {
                                echo "<div class=\"photo\">";
                                echo '<img class="img-responsive img-thumbnail" ' . "src=\"$rel_path\">";
                                echo "</div>";
                            }
                        }
                    }else {
                        echo "no photos";
                    }
                    /*
                    template
                        <div class="row">
                            <div class="col">
                                <img>
                            </div>
                            <div class="col">
                                <img>
                            </div>
                            <div class="col">
                                <img>
                            </div>
                        <div class="row">
                    */

                    ?>
                </div>
            </div>
        </div>










        <div class="btn-group row">




            <!--*********************************BUTTON1********************************************-->
            <button type="button" id="photo_button" class="btn btn-primary" data-toggle="modal" data-target="#photoModal">Upload Image</button>

            <div id="photoModal" class="modal fade" role="dialog">
                <div class="modal-dialog">

                    <!-- Modal content-->
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5>What type of pet?</h5>
                            <div><p id="response"></p></div>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>


                        <div class="container-fluid">
                            <form  id="upload_image" action="" method="post" enctype="multipart/form-data">
                                <div class="form-group">
                                    <label class="control-label" for="photo_label">Title:</label>
                                    <div class="">

                                        <input type="text" class="form-control" id="photo_label" placeholder="Enter title">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label" for="photo_description">Description:</label>
                                    <div class="">

                                        <input type="text" class="form-control" id="photo_description" placeholder="Enter description">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label" for="photo_tags">Tags:</label>
                                    <div class="">

                                        <input type="text" class="form-control" id="photo_tags" placeholder="Enter tags (tag,example,format)">
                                    </div>
                                </div>


                                <div class="form-group">
                                    <label class="control-label">Tag Pet:</label>
                                    <div id="pet_div" class="">

                                    </div>
                                </div>


                                <div class="form-group">
                                    <label class="control-label" for="category">Category:</label>
                                    <div class="form-check-inline">
                                        <label class="form-check-label">
                                            <input type="radio" class="form-check-input" name="category" value="dog">Dog
                                        </label>
                                    </div>
                                    <div class="form-check-inline">
                                        <label class="form-check-label">
                                            <input type="radio" class="form-check-input" name="category" value="cat">Cat
                                        </label>
                                    </div>
                                    <div class="form-check-inline">
                                        <label class="form-check-label">
                                            <input type="radio" class="form-check-input" name="category" value="bird">Bird
                                        </label>
                                    </div>
                                    <div class="form-check-inline">
                                        <label class="form-check-label">
                                            <input type="radio" class="form-check-input" name="category" value="reptile">Reptile
                                        </label>
                                    </div>
                                    <div class="form-check-inline">
                                        <label class="form-check-label">
                                            <input type="radio" class="form-check-input" name="category" value="other">Misc
                                        </label>
                                    </div>

                                </div>

                                <div class="form-group">
                                    <label class="control-label" for="categories">Make Profile Photo?</label>
                                    <div id="categories" class="">
                                        <input type="checkbox" name="profile_picture">
                                    </div>
                                </div>

                                <div class="form-group custom-file">
                                    <label class="custom-file-label" for="file">Choose File:  </label>
                                    <div class="">
                                        <div id="progress_bar"></div>
                                        <p id="file_error"></p>
                                        <input type="file" class="custom-file-input" id="file" name="file" value="File">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <input class="form-control btn btn-info" disabled="disabled" type="submit" name="submit" id="photoSubmit" value="Upload"/>
                                </div>
                            </form>
                        </div>
                    </div>

                </div>
            </div>
















            <!--*********************************BUTTON2********************************************-->
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#problem_choice_modal">New Problem</button>

            <div id="problem_choice_modal" class="modal fade" role="dialog">
                <div class="modal-dialog">

                    <!-- Modal content-->
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5>Problem Category:</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>

                        <div class="modal-body">
                            <form  id="upload_problem" class="form-horizontal" action="problem_upload.php" method="post" enctype="multipart/form-data">

                                <div class="form-check-inline">
                                    <label class="form-check-label">
                                        <input class="form-check-input" type="radio" name="problem" value="pb">Problem Behavior
                                    </label>
                                </div>
                                <div class="form-check-inline">
                                    <label class="form-check-label">
                                        <input class="form-check-input" type="radio" name="problem" value="ct">Command Training
                                    </label>
                                </div>
                                <br/>
                                <br/>
                                <input class="form-control btn btn-info" disabled="disabled" type="submit" name="problem_submit" id="problem_submit" value="Upload"/>
                                <script type="text/javascript">
                                    $("input[name=problem]").change(function () {
                                        var problem_value = $("input[name=problem]:checked").val();
                                        if (problem_value === "ct") {
                                            $("form[id=upload_problem]").attr("action", "problem_c_upload.php");
                                        }
                                        $("input[name=problem_submit]").removeAttr("disabled");
                                    });
                                </script>
                            </form>
                        </div>
                    </div>

                </div>
            </div>

















            <!--************************ add pet *******************************-->
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#petChoiceModal">Add Pet</button>
            <div id="petChoiceModal" class="modal fade" role="dialog">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5>What type of pet?</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form class="form-horizontal" enctype="multipart/form-data">
                                <div class="form-check-inline">
                                    <label class="form-check-label">
                                        <input class="form-check-input" type="radio" name="petType" id="petType1" required="required" value="Dog">Dog
                                    </label>
                                </div>
                                <div class="form-check-inline">
                                    <label class="form-check-label">
                                        <input class="form-check-input" type="radio" name="petType" id="petType2" required="required" value="Cat">Cat
                                    </label>
                                </div>
                                <div class="form-check-inline">
                                    <label class="form-check-label">
                                        <input class="form-check-input" type="radio" name="petType" id="petType3" required="required" value="Bird">Bird
                                    </label>
                                </div>
                                <div class="form-check-inline">
                                    <label class="form-check-label">
                                        <input class="form-check-input" type="radio" name="petType" id="petType4" required="required" value="Reptile">Reptile
                                    </label>
                                </div>
                                <div class="form-check-inline">
                                    <label class="form-check-label">
                                        <input class="form-check-input" type="radio" name="petType" id="petType5" required="required" value="Fish">Fish
                                    </label>
                                </div>
                                <div class="form-check-inline">
                                    <label class="form-check-label">
                                        <input class="form-check-input" type="radio" name="petType" id="petType6" required="required" value="Rodent">Rodent
                                    </label>
                                </div>
                                <div class="form-check-inline">
                                    <label class="form-check-label">
                                        <input class="form-check-input" type="radio" name="petType" id="petType7" required="required" value="Other">Other
                                    </label>
                                </div>
                                <div class="form-group">
                                    <input class="form-control btn btn-info" id="pet_choose_button" type="submit" value="Submit">
                                </div>

                            </form>
                        </div>


                    </div>
                </div>
            </div>
            <!-- This modal will be activated to add pets via js in verify_commands.js -->
            <div id="petModal" class="modal fade" role="dialog">
                <div class="modal-dialog">

                    <!-- Modal content-->
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="pet-title">Add Dog</h5>
                            <input id="pet_type" hidden value="">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>


                        <div class="modal-body">
                            <form  id="upload_pet"  enctype="multipart/form-data">
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label for="petName">Name</label>
                                        <input type="text" class="form-control" id="petName" maxlength="20" required="required" placeholder="Name">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="petSpecies">Sub Species</label>
                                        <input type="text" class="form-control" id="petSpecies" maxlength="30" required="required" placeholder="Sub Species">
                                    </div>
                                </div>

                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <div class="form-row">
                                            <label class="form-label">Sex:</label>
                                        </div>
                                        <div class="form-check-inline">
                                            <label class="form-check-label" for="petSex1">
                                                <input class="form-check-input" type="radio" name="petSex" id="petSex1" required="required" value="M">M
                                            </label>
                                        </div>
                                        <div class="form-check-inline">
                                            <label class="form-check-label" for="petSex1">
                                                <input class="form-check-input" type="radio" name="petSex" id="petSex2" required="required" value="F">F
                                            </label>
                                        </div>
                                    </div>

                                    <div class="form-group col-md-6">
                                        <label for="petAge">Age</label>
                                        <input type="number" class="form-control" required="required" id="petAge">
                                    </div>
                                </div>

                                <div class="form-row">
                                    <label>Energy Level</label>
                                </div>
                                <div class="form-row">
                                    <div class="form-check-inline">
                                        <label class="form-check-label">
                                            <input class="form-check-input" type="radio" name="petEnergy" id="petEnergy1" required="required" value="1">Low
                                        </label>
                                    </div>
                                    <div class="form-check-inline">
                                        <label class="form-check-label">
                                            <input class="form-check-input" type="radio" name="petEnergy" id="petEnergy2" required="required" value="2">Medium-Low
                                        </label>
                                    </div>
                                    <div class="form-check-inline">
                                        <label class="form-check-label">
                                            <input class="form-check-input" type="radio" name="petEnergy" id="petEnergy3" required="required" value="3">Medium
                                        </label>
                                    </div>
                                    <div class="form-check-inline">
                                        <label class="form-check-label">
                                            <input class="form-check-input" type="radio" name="petEnergy" id="petEnergy4" required="required" value="4">Medium-High
                                        </label>
                                    </div>
                                    <div class="form-check-inline">
                                        <label class="form-check-label">
                                            <input class="form-check-input" type="radio" name="petEnergy" id="petEnergy5" required="required" value="5">High
                                        </label>
                                    </div>
                                </div>
                                <br/>
                                <div class="form-group">
                                    <label for="cmds-known">Commands Known</label>
                                    <input type="text" class="form-control" id="cmds-known" maxlength="500" required="required" placeholder="Ex: sit, down, ashamed, etc">
                                </div>

                                <div class="form-group">
                                    <label for="motivators">Motivators</label>
                                    <input type="text" class="form-control" id="motivators" maxlength="500" required="required" placeholder="Ex: food, praise, hot dogs, chicken, etc">
                                </div>

                                <div class="form-group">
                                    <label for="med-prob">Medical Problems</label>
                                    <textarea class="form-control" rows="3" id="med-prob" maxlength="500" placeholder="Ex: skin disorders, hip dysplasia, blood disorders, etc"></textarea>
                                </div>

                                <div class="form-group">
                                    <label for="about-pet">About Pet</label>
                                    <textarea class="form-control" rows="5" id="about-pet" maxlength="2000" required="required" placeholder="Ex: Jonny has always had a fearful nature. Most of his problems seem to center around this. He has not shown aggression as of yet, but I want to get this problem solved before it becomes a larger one."></textarea>
                                </div>


                            </form>
                        </div>

                        <div class="modal-footer">
                            <button class="btn btn-info form-control" id="petNew" type="submit">Add New</button>
                            <button class="btn btn-info form-control" id="petSave" type="submit">Save</button>
                        </div>

                    </div>

                </div>
            </div>


        </div>
























        <div class="row">
            <div class="col-md-4">
                <h3>About Me</h3>
                <p>
                    <?php
                    echo getUserField($_SESSION['user_id'], "about_me");
                    ?>
                </p>
            </div>
            <div class="posts col-md-8">
                <?php getProblems($_SESSION['user_id'], 0, 3); ?>
                <!-- TEMPLATE
                <div class="panel container-fluid">
                    <div class="panel-group">
                        <div class="panel-heading">
                            header
                        </div>
                        <div class="panel-body">
                            main
                        </div>
                        <div class="panel-footer">
                            comments will go here
                        </div>
                    </div>
                </div>
                -->
            </div>
        </div>
    </section>

    <script src="../js/comment_commands.js"></script>
    <script src="../js/my_profile_commands.js"></script>
    <script src="../js/post_commands.js"></script>
    </body>
    </html>

<?php endif ?>
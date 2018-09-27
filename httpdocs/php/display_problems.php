<?php
include_once "total_mysql_commands.php";
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 12/6/17
 * Time: 6:43 PM
 */
//starting point
if (isset($_POST['action'])) {
    switch ($_POST['action']) {
        case "appendProblems": getProblems($_POST['user_id'], $_POST['offset'], $_POST['limit']);
            break;
        case "appendPublicProblems": getPublicProblems($_POST['offset'], $_POST['limit']);
            break;
        case "getProblemsByTag": getPublicProblemsByTag($_POST['offset'], $_POST['limit'], $_POST['tag']);
            break;
    };
}




/********************** LOADING METHODS  *******************************/


function getPublicProblems($offset, $limit) {

    //get row summaries
    $row_summaries = getPublicProblemRowsSummary($offset, $limit);
    while ($row = $row_summaries->fetch_assoc()) {
        //iterate through rows and display based on table_name
        switch ($row['table_num']) {
            case '0':
                $table_name = 'problem';
                //getProblemRow(post_id, table,name)
                //need: $problem_row, $owner_row, $photo_vitals
                $prob_row = getProblemRow($row['id'], $table_name);
                $owner_row = getUserRow($row['owner_id']);
                $photo_vitals = getPhotoRow($owner_row['ppid']);
                $pet_row = getPet($prob_row['pet_id']);
                displayProblemPost($prob_row, $pet_row, $owner_row, $photo_vitals, 'no');
                break;
            case '1':
                $table_name = 'cmd_problem';
                //need: $cmd_row, $owner_row, $photo_vitals
                $cmd_row = getProblemRow($row['id'], $table_name);
                $owner_row = getUserRow($row['owner_id']);
                $photo_vitals = getPhotoRow($owner_row['ppid']);
                $pet_row = getPet($cmd_row['pet_id']);
                displayCmdProblemPost($cmd_row, $pet_row, $owner_row, $photo_vitals, 'no');
                break;
        }
    }
}

function getPublicProblemsByTag($offset, $limit, $tag) {
    $row_summaries = getPublicProblemRowsSummaryByTag($offset, $limit, $tag);
    while ($row = $row_summaries->fetch_assoc()) {
        //iterate through rows and display based on table_name
        switch ($row['table_num']) {
            case '0':
                $table_name = 'problem';
                //getProblemRow(post_id, table,name)
                //need: $problem_row, $owner_row, $photo_vitals
                $prob_row = getProblemRow($row['id'], $table_name);
                $owner_row = getUserRow($row['owner_id']);
                $photo_vitals = getPhotoRow($owner_row['ppid']);
                $pet_row = getPet($prob_row['pet_id']);
                displayProblemPost($prob_row, $pet_row, $owner_row, $photo_vitals, $tag);
                break;
            case '1':
                $table_name = 'cmd_problem';
                //need: $cmd_row, $owner_row, $photo_vitals
                $cmd_row = getProblemRow($row['id'], $table_name);
                $owner_row = getUserRow($row['owner_id']);
                $photo_vitals = getPhotoRow($owner_row['ppid']);
                $pet_row = getPet($cmd_row['pet_id']);
                displayCmdProblemPost($cmd_row, $pet_row, $owner_row, $photo_vitals, $tag);
                break;
        }
    }
}

function getProblems($user_id, $offset, $limit) {
    if (strlen($user_id) > 20) {
        $user_id = decrypt($user_id);
    }
    //get row summaries
    $row_summaries = getProblemRowSummary($user_id, $offset, $limit);
    //need: problem row, owner_row, photo_vitals
    while ($row = $row_summaries->fetch_assoc()) {
        //iterate through rows and display based on table_name
        switch ($row['table_num']) {
            case '0':
                $table_name = 'problem';
                //getProblemRow(post_id, table,name)
                //need: $problem_row, $owner_row, $photo_vitals
                $prob_row = getProblemRow($row['id'], $table_name);
                $owner_row = getUserRow($row['owner_id']);
                $photo_vitals = getPhotoRow($owner_row['ppid']);
                $pet_row = getPet($prob_row['pet_id']);
                displayProblemPost($prob_row, $pet_row, $owner_row, $photo_vitals, 'no');
                break;
            case '1':
                $table_name = 'cmd_problem';
                //need: $cmd_row, $owner_row, $photo_vitals
                $cmd_row = getProblemRow($row['id'], $table_name);
                $owner_row = getUserRow($row['owner_id']);
                $photo_vitals = getPhotoRow($owner_row['ppid']);
                $pet_row = getPet($cmd_row['pet_id']);
                displayCmdProblemPost($cmd_row, $pet_row, $owner_row, $photo_vitals, 'no');
                break;
        }
    }
}


//the $tags value will be value of tag, or 'no'
//That way when we scroll to load more posts, we can find the tag and repeat the method
//I will use it to determine which types of posts to
//append when I scroll()
function displayCmdProblemPost($row, $pet_row, $owner_row, $photo_vitals, $tags) {
    $enc_id = encrypt($owner_row['id']);
    echo <<<POST
    <div class="post cmd_problem card container-fluid">
        <div class="card-group">
            <div class="tags" style="display: none;">{$tags}</div>
            <div class="owner_id" style="display: none;">{$enc_id}</div>
            <div class="post_id" style="display: none;">{$row['id']}</div>
            <div class="post_type" style="display: none;">cmd_problem</div>
            <div class="card-header container-fluid">
                <div class="row">
                    <div class="col-md-4">
                        <img class="img-responsive img-circle" onclick="setProblemVariables($(this)); window.location = 'user_profile.php';" src="../img/{$photo_vitals['category']}/{$photo_vitals['name']}">
                        <h6 class="text-center"><a onclick="setProblemVariables($(this));" href="user_profile.php">{$owner_row['username']}</a></h6>
                    </div>
                    <div class="col-md-4">
                        <h6 class="sec-title text-center">Title</h6>
                        <div class="column_name" style="display: none;">title</div>
                        <p class="text text-center">{$row['title']}</p>
                        <div class="element_bottom"></div>
                    </div>
                    <div class="col-md-4">
                        <h6 class="sec-title text-center">Date Posted</h6>
                        <p class="date text-center">{$row['post_date']}</p>
                        <div class="element_bottom"></div>
                    </div>
                </div>
            </div>
            <div class="card-body container-fluid">
                <div class="row">
                    <div class="col-md-6">
                        <h6 class="sec-title text-center">Motivators</h6>
                        <div class="column_name" style="display: none;">motivators</div>
                        <p class="text-center">{$pet_row['motivators']}</p>
                        <div class="element_bottom"></div>
                    </div>
                    <div class="col-md-6">
                        <h6 class="sec-title text-center">Commands known</h6>
                        <div class="column_name" style="display: none;">commands_known</div>
                        <p class="text-center">{$pet_row['commands_known']}</p>
                        <div class="element_bottom"></div>
                    </div>
                </div> 
                <div class="row">
                    <div class="col-md-6">
                        <h6 class="sec-title text-center">Description of problem</h6>
                        <div class="column_name" style="display: none;">description</div>
                        <p class="text text-center">{$row['description']}</p>
                        <div class="element_bottom"></div>
                    </div>
                    <div class="col-md-6">
                        <h6 class="sec-title text-center">Solutions Attempted</h6>
                        <div class="column_name" style="display: none;">solutions_attempted</div>
                        <p class="text text-center">{$row['solutions_attempted']}</p>
                        <div class="element_bottom"></div>
                    </div>
                </div>     
                <div class="row">
                    <div class="col-md-6">
                        <h6 class="sec-title text-center">Dog's reaction to solution</h6>
                        <div class="column_name" style="display: none;">reaction</div>
                        <p class="text text-center">{$row['reaction']}</p>
                        <div class="element_bottom"></div>
                    </div>
                    <div class="col-md-6">
                        <h6 class="sec-title text-center">Special Notes</h6>
                        <div class="column_name" style="display: none;">notes</div>
                        <p class="text text-center">{$row['notes']}</p>
                        <div class="element_bottom"></div>
                    </div>
                </div>        
            </div>
            <div class="card-footer container-fluid">
                <div class="row">
                    <div class="col-md-offset-3 col-md-6">
                        <h6 class="text-center">Breed</h6>
                        <div class="column_name" style="display: none;">sub_species</div>
                        <p class="text-center">{$pet_row['sub_species']}</p>
                        <div class="element_bottom"></div>
                    </div>
                    <div class="col-md-3">
                        <h6 class="text-center">Age</h6>
                        <div class="column_name" style="display: none;">age</div>
                        <p class="age text-center">{$pet_row['age']}</p>
                        <div class="element_bottom"></div>
                    </div>
                </div>
            </div>
            <div class="comments_button btn btn-block btn-primary container-fluid" style="height: 30px;">
                Comments
            </div>
            <div class="card-body comments" style="display: none;">
                <div class="prev_comments" style="overflow-y: scroll;">
                    <button class="container-fluid btn-block">Load Previous</button>
                </div>
                <br>
                <div class="form-group">
                    <label for="comment-input">Comment:</label>
                    <textarea class="form-control" onkeyup="checkCommentLength(this)" name="comment" rows="5"></textarea>
                    <input class="form-control comment-submit" disabled onclick="sendComment(this)" type="submit" value="submit">
                </div>
            </div>
            <div class="btn btn-block btn-info container-fluid comment_collapse" style="display: none;">Less Comments</div>
        </div>
    </div>

POST;

}

function displayProblemPost($row, $pet_row, $owner_row, $photo_vitals, $tags) {
    $enc_id = encrypt($owner_row['id']);
    echo <<<POST
    <div class="post problem card container-fluid">
        <div class="card-group">
            <div class="tags" style="display: none;">{$tags}</div>
            <div class="owner_id" style="display: none;">{$enc_id}</div>
            <div class="post_id" style="display: none;">{$row['id']}</div>
            <div class="post_type" style="display: none;">problem</div>
            <div class="card-header container-fluid">
                <div class="row">
                    <div class="col-md-4">
                        <img class="img-responsive img-circle" onclick="setProblemVariables($(this)); window.location = 'user_profile.php';" src="../img/{$photo_vitals['category']}/{$photo_vitals['name']}">
                        <h6 class="text-center"><a onclick="setProblemVariables($(this));" href="user_profile.php">{$owner_row['username']}</a></h6>
                    </div>
                    <div class="col-md-4">
                        <h6 class="sec-title text-center">Title</h6>
                        <div class="column_name" style="display: none;">title</div>
                        <p class="text text-center">{$row['title']}</p>
                        <div class="element_bottom"></div>
                    </div>
                    <div class="col-md-4">
                        <h6 class="sec-title text-center">Date Posted</h6>
                        <p class="date text-center">{$row['post_date']}</p>
                        <div class="element_bottom"></div>
                    </div>
                </div>
            </div>
            <div class="card-body container-fluid">
                <div class="row">
                    <div class="col-md-6">
                        <h6 class="sec-title text-center">History of Dog</h6><br>
                        <div class="column_name" style="display: none;">history</div>
                        <p class="text text-center">{$row['history']}</p>
                        <div class="element_bottom"></div>
                    </div>
                    <div class="col-md-6">
                        <h6 class="sec-title text-center">Description of problem</h6><br>
                        <div class="column_name" style="display: none;">description</div>
                        <p class="text text-center">{$row['description']}</p>
                        <div class="element_bottom"></div>
                    </div>
                </div>     
                <div class="row">
                    <div class="col-md-6">
                        <h6 class="sec-title text-center">Solutions attempted</h6><br>
                        <div class="column_name" style="display: none;">solutions_attempted</div>
                        <p class="text text-center">{$row['solutions_attempted']}</p>
                        <div class="element_bottom"></div>
                    </div>
                    <div class="col-md-6">
                        <h6 class="sec-title text-center">Dog's reaction to solutions</h6><br>
                        <div class="column_name" style="display: none;">reaction</div>
                        <p class="text text-center">{$row['reaction']}</p>
                        <div class="element_bottom"></div>
                    </div>
                </div> 
                <div class="row">
                    <div class="col-md-12">
                        <h6 class="sec-title text-center">Special notes</h6><br>
                        <div class="column_name" style="display: none;">notes</div>
                        <p class="text text-center">{$row['notes']}</p>
                        <div class="element_bottom"></div>
                    </div>
                </div>        
            </div>
            <div class="card-footer container-fluid">
                <div class="row">
                    <div class="col-md-offset-3 col-md-6">
                        <h6 class="text-center">Sub-Species</h6><br>
                        <div class="column_name" style="display: none;">sub_species</div>
                        <p class="text-center">{$pet_row['sub_species']}</p>
                        <div class="element_bottom"></div>
                    </div>
                    <div class="col-md-3">
                        <h6 class="text-center">Age</h6><br>
                        <div class="column_name" style="display: none;">age</div>
                        <p class="age text-center">{$pet_row['age']}</p>
                        <div class="element_bottom"></div>
                    </div>
                </div>
            </div>
            <div class="comments_button btn btn-block btn-primary container-fluid" style="height: 30px;">
                Comments
            </div>
            <div class="card-body comments" style="display: none;">
                <div class="prev_comments" style="overflow-y: scroll;">
                    <button class="container-fluid btn-block">Load Previous</button>
                </div>
                <br>
                <div class="form-group">
                    <label for="comment-input">Comment:</label>
                    <textarea class="form-control" onkeyup="checkCommentLength(this, e)" id="comment-input" name="comment" rows="5"></textarea>
                    <input class="form-control comment-submit" disabled onclick="sendComment(this)" type="submit" value="submit">
                </div>
                
            </div>
            <div class="btn btn-block btn-info container-fluid comment_collapse" style="display: none;">Less Comments</div>
        </div>
    </div>
POST;
}

?>
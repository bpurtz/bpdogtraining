/*
-Deals with post js.
-deals with events such as clicking the comments or clicking the update/delete button
-separated into events and functions







 */

/************************* EVENTS ***********************/
//shows&hides comment section
//also loads comments
$(".posts").on('click', '.comments_button', function() {
    $(this).toggle();
    $(this).siblings(".comments").slideToggle();
    $(this).siblings(".comment_collapse").toggle();
    //need number of comments, 0 initially. Will be higher upon scroll of div
    //post_type & post_id are siblings
    var post_type = $(this).siblings(".post_type").text();
    var post_id = $(this).siblings(".post_id").text();
    //post is actually the comment button div
    var post = $(this);
    var comment_prev_elem = $(this).siblings(".comments").find(".prev_comments");
    $.post("display_comments.php",{
            action: post_type,
            post_id: post_id,
            num_elements: 0,
            append_num: 6
        },
        function(data, status){
            //prev_comments is class I have to append
            //alert(data);
            comment_prev_elem.find(".btn-block").after(data);
            comment_prev_elem.scrollTop(comment_prev_elem[0].scrollHeight);
            setTimeout(function() {
                var difference = comment_prev_elem.parents(".post").height() - $(window).height();
                if (difference > 0) {
                    $(window).scrollTop(comment_prev_elem.parents(".post").offset().top + difference);
                }else {
                    $(window).scrollTop(comment_prev_elem.parents(".post").offset().top);
                }
            }, 400);
            //add up comments children heights
            /*
            var comment_height = 20;
            comment_prev_elem.parents(".comments").children().each(function() {
                comment_height += $(this).height();
            });
            //move the window down more if on small screen
            comment_prev_elem.parents(".post").height(comment_prev_elem.parents(".post").height() +
                                                        comment_height);
            console.log("offset: " + comment_prev_elem.parents(".post").offset().top +
                        "window height: " + $(window).height() +
                        "post_height: " + comment_prev_elem.parents(".post").height());


            */
            updateComments(comment_prev_elem, post_type, post_id);
        });

    var more_comments_btn = comment_prev_elem.children(".btn-block");
    more_comments_btn.on('click', function (e) {
        var numElements = comment_prev_elem.children(".comment").length;
        e.preventDefault();
        $.post("display_comments.php",{
                action: post_type,
                post_id: post_id,
                num_elements: numElements,
                append_num: 6
            },
            function(data, status){
                //prev_comments is class I have to append
                //alert(data);
                post.siblings(".comments").children(".prev_comments").children(".btn-block").after(data);
            });
    });

});

//hides comments
$(".posts").on('click', '.comment_collapse', function() {
    clearInterval(chat_interval);
    //get heights of shown elements
    $(this).siblings(".comments_button").toggle();
    $(this).siblings(".comments").slideToggle();
    $(this).slideToggle();
    //need to remove all elements from the prev_comments section
    $(this).siblings(".comments").children(".prev_comments").children(".comment").remove();
    //set height of post back to normal height

    $(this).parents(".post").removeAttr("height");
});




/****************UPDATING POST ELEMENTS****************/
//lets try to add some buttons
$(document).ready(function() {
    var user_id = $("#user-id").text();
    //unbind initially
    //bind the clear-search button click event
    searchClear();
    //I need to get the owner_id of each element and compare to user_id
    let posts = $(".posts").children(".post");

    //on each initial post, I gots to add buttons
    posts.each(function(index) {
        //find post that the user owns
        if ($(this).find(".owner_id").text() == user_id) {
            //this works for transversing all children
            /*$(this).find(".text").click(function(){
                $(this).toggle();
            });*/
            //decide which type of button to add

            let update_text_button = "<button onclick=\"update_element($(this), 'text');\" class=\"update_element btn btn-sm btn-info\" style='display: none;'>Update</button>";
            //use this button when updating the pets in the pet page not yet constructed
            //var update_age_button = "<button onclick=\"update_element($(this), 'age');\" class=\"update_element btn btn-sm btn-info\" style='display: none;'>Update</button>";
            $(this).find(".text").after(update_text_button);
            //$(this).find(".age").after(update_age_button);

            //DELETE BUTTON
            let delete_button = "<button onclick=\"delete_post($(this))\" class=\"btn-danger btn\">Delete</button>";
            let show_button = "<button onclick=\"show_update_buttons($(this))\" class=\"btn-info btn\">Update</button>";
            let main_btn_group = "<div class=\"btn-group-verticle\">" + delete_button + " " + show_button + " </div>";
            $(this).find(".date").after(main_btn_group);
        }
    });

});





/************************ SUPPORTING FUNCTIONS **********************/


//showing buttons
function show_update_buttons(thisElem) {
    thisElem.parentsUntil(".card").find(".update_element").toggle();
    //change the look of the button
    if (thisElem.attr("style") !== undefined) {
        thisElem.removeAttr("style");
        thisElem.text("Update");
    }else {
        thisElem.attr("style", "background-color: red;");
        thisElem.text("Cancel Update");
    }

}

//deleting post
function delete_post(thisElem) {
    //get necessary information
    //post type will determine table
    if (confirm("Are you sure you would like to delete this post?")) {
        let sec_level = thisElem.parentsUntil(".post").find(".post_id");
        let post_type = sec_level.siblings(".post_type").text();
        let table;
        switch(post_type) {
            case "cmd_problem":
                table = "cmd_problem";
                break;
            case "problem":
                table = "problem";
                break;
        }
        let post_id = sec_level.text();
        let owner_id = sec_level.siblings(".owner_id").text();
        $.post("update_post.php",{
                action: "delete_post",
                table: table,
                post_id: post_id,
                owner_id: owner_id
            },
            function(data, status){
                //after I delete from db, need to remove element from .post
                sec_level.parentsUntil(".panel").remove();
            });
    }
}

//updating post elements
function update_element(thisElem, type) {
    //determine which type of element it is
    let cancel_update_button = '';
    let btn_group = '';

    switch (type) {
        case "text":
            //toggle elements
            let text_elem = thisElem.siblings(".text");
            thisElem.toggle();
            text_elem.toggle();
            //make new button
            let commit_text_button = "<button onclick=\"commit_update($(this), 'text');\" class=\"commit_text_update btn btn-info\">Commit</button>";
            cancel_update_button = "<button onclick=\"cancel_update($(this), 'text');\" class=\"btn btn-info\">Cancel</button>";
            btn_group = "<div class=\"btn-group post-update-group btn-group-sm\">" + commit_text_button + " " + cancel_update_button + "</div>";
            //make new textarea and replace old area
            let textarea = "<textarea class=\"row text_input\" cols=\"30\" rows=\"3\" style='display: block; margin-left: auto; margin-right: auto; float:'>" + text_elem.text() + "</textarea>";
            text_elem.after(textarea);
            //add new button for commit
            thisElem.siblings(".element_bottom").after(btn_group);
            break;
        case "age":
            //toggle elements
            let age_elem = thisElem.siblings(".age");
            thisElem.toggle();
            age_elem.toggle();
            //make new button
            let commit_age_button = "<button onclick=\"commit_update($(this), 'age');\" class=\"commit_text_update btn btn-info\">Commit</button>";
            cancel_update_button = "<button onclick=\"cancel_update($(this), 'age');\" class=\"btn btn-info\">Cancel</button>";
            btn_group = "<div class=\"btn-group btn-group-sm container\">" + commit_age_button + " " + cancel_update_button + "</div>";
            //make new input number element and replace old
            let num_input = "<input type=\"number\" name=\"age\" min=\"0\" max=\"20\" class=\"form-control\" id=\"age\">";
            age_elem.after(num_input);
            age_elem.siblings(".form-control").val(age_elem.text());
            //add new button for commit
            thisElem.siblings(".element_bottom").after(btn_group);
            break;
    }


}

function cancel_update(thisElem, type) {

    switch(type) {
        case "text":
            //destroy textarea
            thisElem.parent().siblings(".text_input").remove();
            //toggle text element
            thisElem.parent().siblings(".text").toggle();
            //toggle update button
            thisElem.parent().siblings(".update_element").toggle();
            //destroy buttons
            thisElem.parent(".btn-group").remove();
            break;
        case "age":
            //destroy input
            thisElem.parent().siblings("input[type='number']").remove();
            //toggle text element
            thisElem.parent().siblings(".age").toggle();
            //toggle update button
            thisElem.parent().siblings(".update_element").toggle();
            //destroy buttons
            thisElem.parent(".btn-group").remove();
            break;
    }
}
function commit_update(thisElem, type){
    //get table name from post type
    let table = thisElem.parentsUntil(".card").find(".post_type").text();
    //get post_id
    let post_id = thisElem.parentsUntil(".card").find(".post_id").text();
    //get column name
    let column = thisElem.parent().siblings(".column_name").text();
    //determine type
    switch (type) {
        case "text":
            //get input value
            let input = thisElem.parent().siblings(".text_input").val();

            $.post("update_post.php",{
                    action: "update_post",
                    table: table,
                    post_id: post_id,
                    column: column,
                    input: input
                },
                function(data, status){
                    //alert(data);
                    //need to toggle everything back
                    //remove textarea

                    thisElem.parent().siblings(".text_input").remove();
                    //replace text with data
                    let text_elem = thisElem.parent().siblings(".text");
                    text_elem.text(data);
                    text_elem.toggle();
                    //toggle old button back
                    thisElem.parent().siblings(".update_element").toggle();
                    //remove commit button
                    thisElem.parent(".btn-group").remove();

                });

            break;
        case "age":
            //get input value
            let age_input = thisElem.parent().siblings("input[name='age']").val();

            $.post("update_post.php",{
                    action: "update_post",
                    table: table,
                    post_id: post_id,
                    column: column,
                    input: age_input
                },
                function(data, status){
                    //alert(data);
                    //toggle everything back
                    //remove input element
                    thisElem.parent().siblings("input[type='number']").remove();
                    //replace age with data
                    let age_element = thisElem.parent().siblings(".age");
                    age_element.text(data);
                    age_element.toggle();
                    //toggle old button back
                    thisElem.parent().siblings(".update_element").toggle();
                    //remove current button
                    thisElem.parent(".btn-group").remove();
                });
            break;
    }

}

//function to fetch public posts by the tags category.
//will be text input by the user, so i need to sanitize it,
//Then I can use a LIKE query
$("#problem-search-btn").click(function(e) {
    e.preventDefault();
    //disable button
    $("#problem-search-btn").attr("disabled", "disabled");
    //get the text box value
    var tag = $("#problem-search").val();
    //clear search box
    $("#problem-search").val("");
    //show the clear-search button
    $("#clear-search").removeAttr("style");
    //remove all posts
    $(".post").remove();
    //load new posts on tag
    getPublicProblemsByTag(0, 10, tag);

});

//initiate this in document.ready above
//revert back to normal
function searchClear() {
    $("#clear-search").click(function(e) {
        //unbind event
        $("#clear-search").unbind("click");
        e.preventDefault();
        //remove button
        $("#clear-search").attr("style", "display:none;");
        //remove posts
        $(".post").remove();
        //add normal posts
        getPublicProblems(0, 10);
        //rebind event
        searchClear();
    });
}


//function to fetch public posts for non-tag situation
//need to change so that we pass offset and limit instead of numproblems, cmds
function getPublicProblems(offset, limit) {
        //alert(numProblems + "  " + numCmds);
        $.post("display_problems.php",
            {
                action: "appendPublicProblems",
                offset: offset,
                limit: limit
            },
            function(data, status){
                $(".posts").append(data);
                setTimeout(function() {
                    let posts = $(".posts").children("div");
                    let user_id = $("#user-id").text();
                    posts.each(function() {
                        let post_id = $(this).children("div").children("div").siblings(".owner_id").text();
                        //alert(post_id);
                        //need to add buttons here to new elements. Do the same in my_profile_commands.js
                        if (!($(this).children("div").children().find(".update_element").length) && post_id===user_id) {
                            let update_text_button = "<button onclick=\"update_element($(this), 'text');\" class=\"update_element btn btn-sm btn-info\" style='display: none;'>Update</button>";
                            let update_age_button = "<button onclick=\"update_element($(this), 'age');\" class=\"update_element btn btn-sm btn-info\" style='display: none;'>Update</button>";
                            $(this).find(".text").after(update_text_button);
                            $(this).find(".age").after(update_age_button);
                            //DELETE BUTTON
                            let delete_button = "<button onclick=\"delete_post($(this))\" class=\"btn-danger btn\">Delete</button>";
                            let show_button = "<button onclick=\"show_update_buttons($(this))\" class=\"btn-info btn\">Update</button>";
                            let main_btn_group = "<div class=\"btn-group-verticle\">" + delete_button + " " + show_button + " </div>";
                            $(this).find(".date").after(main_btn_group);
                        }
                    });
                });

            });
}

//function to fetch public posts for tag situation
function getPublicProblemsByTag(offset, limit, tag) {
    $.post("display_problems.php",
        {
            action: "getProblemsByTag",
            offset: offset,
            limit: limit,
            tag: tag
        },
        function (data, status) {
            $(".posts").append(data);
            setTimeout(function () {
                let posts = $(".posts").children("div");
                let user_id = $("#user-id").text();
                posts.each(function () {
                    let post_id = $(this).children("div").children("div").siblings(".owner_id").text();
                    //alert(post_id);
                    //need to add buttons here to new elements. Do the same in my_profile_commands.js
                    if (!($(this).children("div").children().find(".update_element").length) && post_id === user_id) {
                        let update_text_button = "<button onclick=\"update_element($(this), 'text');\" class=\"update_element btn btn-sm btn-info\" style='display: none;'>Update</button>";
                        let update_age_button = "<button onclick=\"update_element($(this), 'age');\" class=\"update_element btn btn-sm btn-info\" style='display: none;'>Update</button>";
                        $(this).find(".text").after(update_text_button);
                        $(this).find(".age").after(update_age_button);
                        //DELETE BUTTON
                        let delete_button = "<button onclick=\"delete_post($(this))\" class=\"btn-danger btn\">Delete</button>";
                        let show_button = "<button onclick=\"show_update_buttons($(this))\" class=\"btn-info btn\">Update</button>";
                        let main_btn_group = "<div class=\"btn-group-verticle\">" + delete_button + " " + show_button + " </div>";
                        $(this).find(".date").after(main_btn_group);
                    }


                });
            });

        });

}


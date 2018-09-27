//sends comment. thisElem is the input button
function sendComment(thisElem) {
    //this prevents page reload on click function
    //comment needed to upload, good
    let comment_elem = $(thisElem).parents("div").find("textarea[name='comment']");
    let comment = comment_elem.val();
    comment_elem.val("");
    //owner_id will be gotten from cookie
    //will need post_id to be included in post
    let post_id = $(thisElem).parents(".card").find(".post_id").text();
    let post_type = $(thisElem).parents(".card").find(".post_type").text();
    //alert(post_type + '   ' + comment + '   ' + post_id);

    $.post("upload_comment.php",{
            action: post_type,
            comment: comment,
            post_id: post_id
        },
        function(data, status){
            //alert(data);
            comment_elem.val("");
        });

}

//edits comment,
function editComment(thisElem) {
    let comment_elmt = thisElem.parents(".comment");
    let cmt = comment_elmt.find(".cmt");
    let cmt_id = comment_elmt.find(".cmt-id");
    let cmt_val = cmt.text();
    //alert(cmt_val);
    //remove comment and replace with textarea
    cmt.toggle();
    let textarea = "<div class='form-group'><textarea class=\"cmt_input form-control\" cols=\"30\" rows=\"3\">" + cmt_val + "</textarea></div>";
    comment_elmt.find(".cmt").after(textarea);
    //toggle bottons and add a new one
    thisElem.toggle();
    comment_elmt.find(".delete_comment").toggle();
    comment_elmt.find(".update_comment").toggle();
    comment_elmt.find(".cancel_update").toggle();
}

function deleteComment(thisElem) {
    //need: -comment_id -post_id(to delete from col  id's)
    //post_id is in the post above this element
    if (confirm("Are you sure you would like to delete this comment?")) {
        let comment_elmt = thisElem.parents(".comment");
        let post_elmt = comment_elmt.parents(".post");
        let post_id = post_elmt.find(".post_id");
        let post_type = post_elmt.find(".post_type");
        let table;
        switch (post_type.text()){
            case "cmd_problem":
                table = "cmd_problem_comment";
                break;
            case "problem":
                table = "problem_comment";
                break;
        };
        let cmt_id = comment_elmt.find(".cmt-id");
        //alert(table + "   " + cmt_id.text() + "   " + post_id.text());

        $.post("update_comment.php",{
                action: "delete",
                table: table,
                post_id: post_id.text(),
                cmt_id: cmt_id.text()
            },
            function(data, status){
                //prev_comments is class I have to append
                //alert(data);
                comment_elmt.remove();
                //alert(data + "   " + status);
            });
    }
}

function updateComment(thisElem) {
    /**********PROBLEM*************/
        //I need to redo how to load the textarea. I keep getting the old value.
        //I think I should toggle the old element? I have no idea how to get the new value
    let comment_elmt = thisElem.parents(".comment");
    let comments_elmt = thisElem.parents(".comments");
    let post_elmt = comment_elmt.parents(".post");
    let cmt = comments_elmt.find("textarea.cmt_input");
    let cmt_id = comment_elmt.find(".cmt-id");
    let post_type = post_elmt.find(".post_type");
    let table;
    switch (post_type.text()){
        case "cmd_problem":
            table = "cmd_comments";
            break;
        case "problem":
            table = "problem_comments";
    }
    //alert(table + "   " + cmt_id.text() + "   " + cmt.val());

    $.post("update_comment.php",{
            action: "update",
            table: table,
            cmt_id: cmt_id.text(),
            cmt: cmt.val()
        },
        function(data, status){
            //alert(data);
            comment_elmt.find(".cmt").text(cmt.val());
            comment_elmt.find(".cmt_input").remove();
            comment_elmt.find(".cmt").toggle();

            //toggle buttons
            thisElem.toggle();
            comment_elmt.find(".delete_comment").toggle();
            comment_elmt.find(".cancel_update").toggle();
            comment_elmt.find(".edit_comment").toggle();

        });
}

//method to periodically update the comments
//need comment interval global so that the hideComments can clear it
var chat_interval;
//post_type=[cmd_problem, problem]
function updateComments(prev_comments, post_type, post_id) {
    chat_interval = setInterval(function() {
        var recent_id = prev_comments.find(".comment:last").find(".cmt-id").text();
        var table = "";
        switch(post_type) {
            case 'cmd_problem':
                table = 'cmd_problem_comment';
                break;
            case 'problem':
                table = 'problem_comment';
                break;
        }
        if (recent_id === "") {
            recent_id = 0;
        }
        $.post("display_comments.php",{
                action: 'update_comments',
                table: table,
                post_id: post_id,
                recent_id: recent_id
            },
            function(data, status){
                //prev_comments is class I have to append
                //alert('hello' + data);
                //how can I check to see if this is a duplicate message?
                //alert(data);

                if (data != "") {
                    prev_comments.append(data);
                    prev_comments.scrollTop(prev_comments[0].scrollHeight);
                }
            });

    }, 1000);

}

function cancelUpdate(thisElem) {
    let comment_elmt = thisElem.parents(".comment");
    let comments_elmt = thisElem.parents(".comments");
    let post_elmt = comment_elmt.parents(".post");
    //remove textarea and replace with comment again
    comments_elmt.find(".cmt_input").remove();
    comment_elmt.find(".cmt").toggle();

    //toggle buttons
    thisElem.toggle();
    comment_elmt.find(".delete_comment").toggle();
    comment_elmt.find(".update_comment").toggle();
    comment_elmt.find(".edit_comment").toggle();
}

//function to check the comment length and if enter is hit, then
//submit the comment.
function checkCommentLength(textareaObj) {
    let key = event.keyCode || event.which;
    //check the number of character in textbox
    if (textareaObj.value.length > 0) {
        $(textareaObj).siblings('.comment-submit').removeAttr('disabled');
        /*I'm not sure if I should add the 'hit enter' feature. Comments are pretty
        detailed and the ability to use Enter might be useful.
        if (key === 13) {
            sendComment($(textareaObj).siblings('.comment-submit'));
        }*/
    }else {
        $(textareaObj).siblings('.comment-submit').attr('disabled', 'disabled');
    }

}










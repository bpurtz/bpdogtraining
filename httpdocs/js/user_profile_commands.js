function send_request(thisElem, sender_id, recipient_id) {
    //alert(thisElem.text() + "  " + sender_id + "  " + recipient_id);

    $.post("friend_request.php",
        {
            action: "send_request",
            sender_id: sender_id,
            recipient_id: recipient_id
        },
        function(data, status){
            //alert(data);
            thisElem.text("Sent");
            thisElem.attr("disabled", "disabled");
        });

}

function send_checked_message(sender_id, recipient_id, message) {
    //alert(message + "  " + sender_id + "  " + recipient_id);

    $.post("chat_handling.php",
        {
            action: "send_checked_message",
            user_id: sender_id,
            friend_id: recipient_id,
            message: message
        },
        function(data, status){
            //alert(data);
        });

}


//load additional posts
$(window).scroll(function() {
    if($(window).scrollTop() + $(window).height() === $(document).height()) {
        //here I have to get the next posts if necessary
        var offset = $(".post").length;
        //if there is a multiple of 10 posts, think about loading more.
        if (offset%10===0) {
            $.post("display_problems.php",
                {
                    action: "appendProblems",
                    user_id: user_id,
                    offset: offset,
                    limit: 10
                },
                function(data, status){
                    //alert(data);
                    $(".posts").append(data);

                });
        }
    }
});


/****************UPDATING POST ELEMENTS****************/
//lets try to add some buttons
$(document).ready(function() {
    clearCookie('target_id');
    //check if users are friends. If they are, disable send_request button
    //if the user is viewing their own profile, remove buttons
    if (localStorage.target_id != undefined) {
        if (localStorage.user_id === localStorage.target_id) {
            $("#user_profile_request_button").attr("style", "display: none;");
            $("#user_profile_message_button").attr("style", "display: none;");
        } else {//figure out if they're friends
            $.post("friend_request.php",
                {
                    action: "are_friends",
                    user_id: localStorage.user_id,
                    friend_id: localStorage.target_id
                },
                function (data1, status) {
                    //alert(data1);
                    //data1 will equal '1' if they are friends
                    //data1 will equal '2' if they are in sent/request list
                    //data1 will equal '0' if they are not connected at all
                    if (data1 === '1') {
                        $("#user_profile_request_button").attr("style", "display: none;");
                    } else if(data1==='2') {
                        $("#user_profile_message_button").attr("style", "display: none;");
                        $("#user_profile_request_button").attr("style", "display: none;");
                    }else {
                        $("#user_profile_message_button").attr("style", "display: none;");
                    }

                });

        }
    }

});



function getChatExcludedFriends(user_id, offset, limit) {
    $.post("display_friends.php",
        {
            action: "getChatExcludedFriends",
            user_id: user_id,
            offset: offset,
            limit: limit
        },
        function(data, status){
            //alert(data);
            if (data !== "") {
                $(".friends").append(data);
            }
        });
}

function getFriendChats(user_id, offset, limit) {
    $.post("display_chats.php",
        {
            action: "getUserChats",
            user_id: user_id,
            offset: offset,
            limit: limit
        },
        function(data, status){
            if (data !== "") {
                $(".messages").append(data);
            }
        });
}



/* **********************PAGE JAVASCRIPT************************** */


/******************** MESSAGES *******************/

//WHEN THE VIEW BUTTON IS PRESSED
function showMessages(thisElem) {
    //get the chat element
    let chat_element = thisElem.parents(".chat");
    //toggle all elements
    chat_element.find(".message_collapse").each(function() {
        $(this).toggle();
    });
    chat_element.find(".messages").slideToggle();
    //scroll down a bit, should be more exact later on
    $(window).scrollTop(100);
    //get chat id
    let chat_id = chat_element.find(".chat-id:first").text();
    //get divs necessary
    let prev_messages = chat_element.find('.prev_messages');
    //alert(chat_id);

    $.post("display_messages.php",{
            action: "getMessages",
            user_id: user_id,
            chat_id: chat_id,
            offset: 0,
            limit: 5
        },
        function(data, status){
            //prev_comments is class I have to append
            //alert(data);
            prev_messages.children(".btn-block").after(data);
            //scroll the window down to the top of the chat
            $(window).scrollTop(prev_messages.parents(".chat").offset().top);
            //works to set the scroll to the bottom of the div
            prev_messages.scrollTop(prev_messages[0].scrollHeight);
            updateMessages(prev_messages, chat_id);
        });

    //ajax send message section
    let send_message_btn = chat_element.find(".send-message");
    send_message_btn.on('click', function (e) {
        clearInterval(message_interval);
        e.preventDefault();
        let thisElem = $(this);
        let chat_element = thisElem.parents(".chat");
        let textarea = chat_element.find("textarea");
        let message = chat_element.find("textarea").val();
        let chat_id = chat_element.find(".chat-id").text();
        let prev_messages = chat_element.find(".prev_messages");
        $.post("chat_handling.php",{
                action: "send_message",
                user_id: user_id,
                message: message,
                chat_id: chat_id
            },
            function(data, status){//return update the messages
            //alert(data);
                textarea.val("");
                updateMessages(prev_messages, chat_id);
                send_message_btn.attr("disabled", "disabled");
            });

    });


    //function to load previous messages
    let load_previous_btn = prev_messages.children(".btn-block:first");
    load_previous_btn.on('click', function (e) {
        //prevents the modal from closing
        e.preventDefault();
        let chat_element = $(this).parents(".chat");
        let chat_id = chat_element.find(".chat-id").text();
        let prev_messages = chat_element.find(".prev_messages");
        let offset = prev_messages.children(".message").length;
        //need: chat_id, offset, limit
        //offset protects against adding duplicate messages
        $.post("display_messages.php",{
                action: "getMessages",
                user_id: user_id,
                chat_id: chat_id,
                offset: offset,
                limit: 5
            },
            function(data, status){
                //prev_comments is class I have to append
                //alert(data);
                prev_messages.children(".btn-block").after(data);
                //works to set the scroll to the bottom of the div
                prev_messages.scrollTop(0);
        });
    });

    //area to disable message 'send' button until text have been entered
    //disable the message button
    if (chat_element.find("[name='message']").val() === "") {
        chat_element.find(".send-message").attr("disabled", "disabled");
    }else {
        chat_element.find(".send-message").removeAttr("disabled");
    }
    //enable send-message button when characters have been entered
    $(chat_element.find("[name='message']")).keyup(function() {
        if ($.trim($(this).val()) != "") {
            chat_element.find(".send-message").removeAttr("disabled");
        }else {
            chat_element.find(".send-message").attr("disabled", "disabled");
        }
    });

}
//method to periodically update the messages
//need message interval global so that the hideMessages can clear it
var message_interval;
function updateMessages(prev_messages, chat_id) {
    message_interval = setInterval(function() {
        let chat_element = $(prev_messages).parents(".chat");
        let recent_id = $(prev_messages).find(".message:last").find(".message-id").text();
        let more_messages_btn = chat_element.find(".btn-block");
        let numElements = chat_element.find(".message").length;
        if (numElements>0) {
            $.post("display_messages.php",{
                    action: "updateMessages",
                    chat_id: chat_id,
                    recent_id: recent_id,
                    user_id: user_id
                },
                function(data, status){
                    if (data != "") {
                        prev_messages.append(data);
                        prev_messages.scrollTop(prev_messages[0].scrollHeight);
                    }


                });
        }

    }, 500);

}



//hides messages
function hideMessages(thisElem) {
    $(window).scrollTop($(window).scrollTop()-350);
    //toggle this button
    thisElem.toggle();
    //slide toggle messages
    thisElem.siblings(".messages").slideToggle();
    thisElem.siblings(".messages").children(".prev_messages").children(".message").remove();
    //toggle show messages div
    thisElem.siblings(".message_button").toggle();
    thisElem.siblings(".messages").find(".send-message").unbind("click");
    //clear interval
    clearInterval(message_interval);

}


/* ********************** BUTTON FUNCTIONS *************************** */
//Add remove chat button
//add message button under each friend
function setupMessages() {
    //load additional friends
    //originally load 20 friends
    $(".friends").scroll(function() {
        if($(".friends").scrollTop() + $(".friends").height() >= $(".friends")[0].scrollHeight) {
            //here I have to get the next posts if necessary
            var numFriends = $(".friend").length;
            if (numFriends%20 === 0) {
                getChatExcludedFriends(getCookie('user_id'), numFriends, 20);
            }

        }
    });

    //load additional chats
    //originally load 10 chats
    $(".messages").scroll(function() {
        if($(".messages").scrollTop() + $(".messages").height() >= $(".messages")[0].scrollHeight) {
            //here I have to get the next posts if necessary
            var numChats = $(".chat").length;
            if (numChats >= 10) {
                getFriendChats(getCookie('user_id'), numChats, 10);
            }

        }
    });


}
//all need the chat_id and recipient_id
function remove_chat(thisElem) {
    let chat_elem = thisElem.parents(".chat");
    let chat_id = chat_elem.find(".chat-id").text();
    if (confirm("Are you sure you would like to remove this chat?")) {
        $.post("chat_handling.php",
            {
                action: "remove_chat",
                chat_id: chat_id
            },
            function(data, status){
                //alert(data);
                chat_elem.remove();
                location.reload();
            });
    }
}

function showMessageModal(message_button) {
    let friend_elem = message_button.parents(".friend");
    let friend_id = friend_elem.find(".friend-id:first").text();
    //set modal friend-id
    $("#myModal2").find(".friend-modal-id:first").text(friend_id);
}


/*********************************** EVENTS ******************************/
/********************* ON LOAD ********************/
$(document).ready(function() {
    //if the target_id is still set, remove all associated
    if (localStorage.getItem('target_id') != null) {
        localStorage.removeItem('target_id');
        clearVar('target_id');
    }
});




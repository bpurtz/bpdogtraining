
$(".sent-requests").scroll(function() {
    if($(".sent-requests").scrollTop() + $(".sent-requests").height() >= $(".sent-requests")[0].scrollHeight) {

        let numFriends = $(".sent-requests").find(".friend").length;
        if (numFriends%20 === 0) {
            getSentFriends(user_id, numFriends, 20);
        }
    }
});


$(".friends").scroll(function() {
    //console.log('window + scroll: ' + ($(".friends").scrollTop() + $(".friends").height()) +
    //    '\ntotal: ' + $(".friends")[0].scrollHeight);
    if($(".friends").scrollTop() + $(".friends").height() >= $(".friends")[0].scrollHeight) {
        let numFriends = $(".friends").find(".friend").length;
        if (numFriends%20 === 0) {
            getCurrentFriends(user_id, numFriends, 20);
        }
    }
});


$(".received-requests").scroll(function() {
    //console.log('window + scroll: ' + ($(".received-requests").scrollTop() + $(".received-requests").height()) +
    //            '\ntotal: ' + $(".received-requests")[0].scrollHeight);
    if($(".received-requests").scrollTop() + $(".received-requests").height() >= $(".received-requests")[0].scrollHeight) {
        let numFriends = $(".received-requests").find(".friend").length;
        if (numFriends%20 === 0) {
            getRequestFriends(user_id, numFriends, 20);
        }
    }
});

/* ********************** BUTTON FUNCTIONS *************************** */
//already have functions above, needs: conn_id, sender_id, recipient_id
function remove_friend(thisElem) {
    let friend_elem = $(thisElem).parents(".friend");
    let conn_id = friend_elem.find(".conn-id:first").text();

    if (confirm("Are you sure you would like to remove this friend?")) {
        $.post("friend_request.php",
            {
                action: "remove_friend",
                conn_id: conn_id
            },
            function(data, status){
                friend_elem.remove();
            });
    }
}

function cancel_request(thisElem) {
    let friend_elem = thisElem.parents(".friend");
    let conn_id = friend_elem.find(".conn-id:first").text();

    $.post("friend_request.php",
        {
            action: "cancel_request",
            conn_id: conn_id
        },
        function(data, status){
            friend_elem.remove();
        });

}

function accept_request(thisElem) {
    let friend_elem = thisElem.parents(".friend");
    let conn_id = friend_elem.find(".conn-id:first").text();

    $.post("friend_request.php",
        {
            action: "accept_request",
            conn_id: conn_id
        },
        function(data, status){
            //alert(data);
            location.reload();
        });

}

function decline_request(thisElem) {
    let friend_elem = thisElem.parents(".friend");
    let conn_id = friend_elem.find(".conn-id:first").text();
    if (confirm("Are you sure?")) {
        $.post("friend_request.php",
            {
                action: "decline_request",
                conn_id: conn_id
            },
            function(data, status){
                friend_elem.remove();
            });
    }
}


/******************** EVENTS ***********************/

/*************** READY ******************/
$(document).ready(function() {
    clearCookie('target_id');
});
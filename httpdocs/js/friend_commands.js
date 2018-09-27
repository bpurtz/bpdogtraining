function getCurrentFriends(user_id, offset, limit) {
    //alert(offset + "  " + limit);
    $.post("display_friends.php",
        {
            action: "getCurrentFriends",
            user_id: user_id,
            offset: offset,
            limit: limit
        },
        function(data, status){
            //alert(data);
            $(".friends").append(data);
        });
}

function getSentFriends(user_id, offset, limit) {
    $.post("display_friends.php",
        {
            action: "getSentFriends",
            user_id: user_id,
            offset: offset,
            limit: limit
        },
        function(data, status){
            $(".sent-requests").append(data);
        });
}

function getRequestFriends(user_id, offset, limit) {
    $.post("display_friends.php",
        {
            action: "getRequestFriends",
            user_id: user_id,
            offset: offset,
            limit: limit
        },
        function(data, status){
            $(".received-requests").append(data);
        });
}

function getNormalFriends(user_id, offset, limit) {
    $.post("display_friends.php",
        {
            action: "getNormalFriends",
            user_id: user_id,
            offset: offset,
            limit: limit
        },
        function(data, status){
            $(".friends").append(data);
        });
}















function setCookie(cname, cvalue, exdays) {
    if (cvalue != '') {
        var d = new Date();
        d.setTime(d.getTime() + (exdays*24*60*60*1000));
        var expires = "expires="+ d.toUTCString();
        if (exdays < 0){
            expires = "expires=Thu, 01 Jan 1970 00:00:00 GMT";
        }
        document.cookie = cname + "=" + cvalue + ";" + expires + ";" + "domain=animaldevelopement.com;path=/php";
    }
}

function getCookie(cname) {
    var name = cname + "=";
    var decodedCookie = decodeURIComponent(document.cookie);
    var ca = decodedCookie.split(';');
    for(var i = 0; i <ca.length; i++) {
        var c = ca[i];
        while (c.charAt(0) == ' ') {
            c = c.substring(1);
        }
        if (c.indexOf(name) == 0) {
            return c.substring(name.length, c.length);
        }
    }
    return "";
}

function clearCookie(cname){
    setCookie(cname, "dar", -1000000);
}

function setVar(varName, varValue) {
    $.ajax({
        url: 'session.php',
        type: 'POST',
        dataType: 'text',
        data: {
            action: 'setVar',
            key: varName,
            value: varValue
        },
    })
        .done(function (result) {
            console.log(result);
        })
        .fail(function (xhr, ajaxOptions, thrownError) {
            alert(xhr.status);
            alert(thrownError);
        })
        .always(function () {
        });
}

function clearVar(varName) {
    $.ajax({
        url: 'session.php',
        type: 'POST',
        dataType: 'text',
        data: {
            action: 'clearVar',
            key: varName
        },
    })
        .done(function (result) {
        })
        .fail(function () {
            console.log("error");
        })
        .always(function () {
        });
}

function setProblemVariables(problemChild) {
    let problemElem = $(problemChild).parents(".post");
    let target_id = problemElem.find(".owner_id:first").text();
    setCookie("target_id", target_id, 1);
    setVar('target_id', target_id);
    localStorage.target_id = target_id;
}


function setFriendVariables(friendChild) {
    let friend_elem = $(friendChild).parents(".friend");
    let target_id = friend_elem.find(".friend-id:first").text();
    setCookie("target_id", target_id, 1);
    setVar('target_id', target_id);
    localStorage.target_id = target_id;
}

function setChatVariables(chatChild) {
    let chat_elem = $(chatChild).parents(".chat");
    let target_id = chat_elem.find(".friend-id:first").text();
    setCookie("target_id", target_id, 1);
    setVar('target_id', target_id);
    localStorage.target_id = target_id;
}
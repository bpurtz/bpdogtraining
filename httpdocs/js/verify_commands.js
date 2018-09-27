function checkEmail() {
    $('input[name=email]').blur(function(event) {
        if (this.value.length > 5) {
            $.ajax({
                url: '/php/mysql_commands_signup.php',
                type: 'POST',
                dataType: 'text',
                data: {
                    action: 'string_taken',
                    supplied_string: this.value,
                    column_name: 'email',
                    table: 'user_logging'
                },
            })
                .done(function (result) {
                    if (result == 'taken') {
                        $('#email_error').css("display", "inline");
                        $('input[type=submit]').attr("disabled", "disabled");
                    } else if (result == 'free') {
                        $('#email_error').css("display", "none");
                        $('input[type=submit]').removeAttr("disabled");

                    }
                    console.log(result);
                })
                .fail(function (data) {
                    console.log(data);
                })
                .always(function () {
                    console.log("complete");
                });

        }
    });

}

function checkUsername() {
    $('input[name=username]').blur(function(event) {
        if (this.value.length > 5) {
            $.ajax({
                url: '/php/mysql_commands_signup.php',
                type: 'POST',
                dataType: 'text',
                data: {
                    action: 'string_taken',
                    supplied_string: this.value,
                    column_name: 'username',
                    table: 'user_logging'
                },
            })
                .done(function (result) {
                    if (result == 'taken') {
                        $('#username_error').css("display", "inline");
                        $('input[type=submit]').attr("disabled", "disabled");
                    } else if (result == 'free') {
                        $('#username_error').css("display", "none");
                        $('input[type=submit]').removeAttr("disabled");
                    }
                    console.log(result);
                })
                .fail(function (data) {
                    console.log(data);
                })
                .always(function () {
                    console.log("complete");
                });
        }
    });
}

function checkUsernameSignin(obj) {
    if (obj.value.length > 5) {
        $.ajax({
            url: '/php/mysql_commands_signup.php',
            type: 'POST',
            dataType: 'text',
            data: {
                action: 'string_taken',
                supplied_string: obj.value,
                column_name: 'username',
                table: 'user_logging'
            },
        })
            .done(function (result) {
                if (result == 'free') {
                    $('#username_error').css("display", "inline");
                    $('input[type=submit]').attr("disabled", "disabled");
                } else if (result == 'taken') {
                    $('#username_error').css("display", "none");
                    $('input[type=submit]').removeAttr("disabled");
                }
                console.log(result);
            })
            .fail(function () {
                console.log("error");
            })
            .always(function () {
                console.log("complete");
            });
    }
}




/**************** When user chooses pet ************************/
$(document).ready(function () {
    //check signin username
    $('input[name=username]').blur(function(event) {
        let input_obj = this;
        checkUsernameSignin(input_obj);
    });


});















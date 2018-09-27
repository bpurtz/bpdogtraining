
/*************************** FUNCTIONS ******************************/
/**************** Pets *******************/
function savePetData() {
    let name = $("#petName").val();
    let type = $("#pet_type").val();
    let sub_species = $("#petSpecies").val();
    let sex = $("input[name='petSex']").val();
    let age = $("#petAge").val();
    let energy = $("input[name='petEnergy']:checked").val();
    let cmds_known = $("#cmds-known").val();
    let motivators = $("#motivators").val();
    let med_prob = $("#med-prob").val();
    let about_pet = $("#about-pet").val();

    $.ajax({
        url: 'pets.php',
        type: 'POST',
        dataType: 'text',
        data: {
            action: 'uploadPet',
            type: type,
            name: name,
            sub_species: sub_species,
            sex: sex,
            age: age,
            energy: energy,
            cmds_known: cmds_known,
            motivators: motivators,
            med_prob: med_prob,
            about_pet: about_pet
        },
    })
        .done(function (result) {
            console.log(result);
        })
        .fail(function () {
            console.log("error");
        })
        .always(function () {
            console.log("complete");
        });

}


/**************** IMAGES *******************/
function upload_single_image(){
    let label = $("#photo_label").val();
    let description = $("#photo_description").val();
    let tags = $("#photo_tags").val();
    tags = tags.trim();
    let category = $("input[name=category]:checked").val();
    let update_ppid = null;
    let pet_id_array = [];
    let pets = $("#pet_div").find(":checkbox:checked");
    pets.each(function() {
        pet_id_array.push($(this).siblings().first().attr('id'));
    });
    //this is how you pass arrays to php through post.
    //decode with json_decode($_POST['pets']) and will act like an array
    let pet_json = JSON.stringify(pet_id_array);
    if ($('input[name=profile_picture]').is(':checked')) {
        update_ppid = "true";
    }
    var file_data = $('#file').prop('files')[0];
    var form_data = new FormData();

    form_data.append('file', file_data);
    form_data.append('label', label);
    form_data.append('description', description);
    form_data.append('tags', tags);
    form_data.append('category', category);
    form_data.append('pets', pet_json);
    if (update_ppid !== null) {
        form_data.append('update_ppid', update_ppid);
    }
    //alert(label + "    " + description + '    ' + tags + '   ' + category + '   ' + update_ppid + '    ' + owner_id);
    //alert(document.getElementById('file').files[0].name);
    $.ajax({
        url: '../php/upload_image.php',
        type: 'POST',
        dataType: 'text',
        cache: false,
        processData: false,
        contentType: false,
        data: form_data,
        statusCode: {
            404: function() {
                console.log("404");
                $('input[id=submit]').removeAttr("disabled");
                $('#file_error').css("display", "none");
            }
        },
        success: function (data) {
            alert('success   ' + data);
        },
        error: function(textStatus) {
            alert("error:  " + textStatus['responseText']);

        }
    });

}

function check_file() {
    //need to: -check file size -check duplicate
    if ($("#file").prop('files')[0].size >= 1000000) {
        $('#file_error').text("max file size is 1MB");
    }
    else {
        var category = $("input[name=category]:checked").val();
        var file_data = $('#file').prop('files')[0];
        var form = new FormData();
        form.append('file', file_data);
        form.append('category', category);
        $.ajax({
            url: '../php/file_check.php',
            type: 'POST',
            dataType: 'json',
            cache: false,
            contentType: false,
            processData: false,
            data: form,
            statusCode: {
                404: function() {
                    console.log("404");
                    $('input[id=submit]').removeAttr("disabled");
                    $('#file_error').css("display", "none");
                }
            },
            success: function () {
                console.log("success");
            },
            error: function(textStatus) {
                console.log("error:  " + textStatus['responseText']);
                if (textStatus['responseText'] === 'taken') {
                    $('#file_error').text("File already exists in database");
                } else if (textStatus['responseText'] === 'free') {
                    $('#photoSubmit').removeAttr("disabled");
                    $('#file_error').css("display", "none");
                }
            }
        });
    }
}



//ajax function to retrieve photo
function getThumbPhoto(user_id, offset, limit) {
    $.ajax({
        url: 'images.php',
        type: 'POST',
        dataType: 'text',
        data: {
            action: 'getPhotos',
            offset: offset,
            limit: limit
        },
    })
        .done(function (result) {
            $("#photo_album").append(result);
        })
        .fail(function () {
            console.log("error");
        })
        .always(function () {
        });
}



/******************************* PROBLEM POSTS ********************************/

function appendProblems(user_id, offset, limit) {
    $.ajax({
        url: 'display_problems.php',
        type: 'POST',
        dataType: 'text',
        data: {
            action: "appendProblems",
            user_id: user_id,
            offset: offset,
            limit: limit
        },
    })
        .done(function (data) {
            $(".posts").append(data);
            setTimeout(function() {
                let posts = $(".post");
                posts.each(function() {
                    let owner_id = $(this).children("div").children("div").siblings(".owner_id").text();
                    //alert(post_id);

                    if (!($(this).children("div").children().find(".update_element").length) && owner_id==user_id) {
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
        })
        .fail(function (error) {
            console.log(error);
        })
        .always(function () {
        });
}











/*********************** EVENTS **************************/



/********************* ON LOAD ********************/
$(document).ready(function() {
    //if the target_id is still set, remove all associated
    if (localStorage.getItem('target_id') != null) {
        localStorage.removeItem('target_id');
        clearVar('target_id');
    }
});


/************ PHOTOS *************/
//when user clicks upload image, will look for pets in order to add checklist
$("#photo_button").click(function(e) {
    e.preventDefault();
    $.ajax({
        url: 'pets.php',
        type: 'POST',
        dataType: 'text',
        data: {
            action: 'getPets'
        },
    })
        .done(function (result) {
            $("#pet_div").append(result);
        })
        .fail(function () {
            console.log("error");
        })
        .always(function () {
            console.log("complete");
        });
});
//remove all elements when modal blurs so no duplicates
$("#photoModal").on('hidden.bs.modal', function() {
    $("#pet_div").empty();
});

$("#photoSubmit").click(function() {
    //alert('submit click');
    upload_single_image();
});
$("#file").change(function() {
    //alert('changed file');
    check_file();
});
$('input[name=category]').change(function() {

    if ($("#file").prop('files')[0] !== undefined) {
        check_file();
    }
});

//when photo is added to #photo_album, check to see if photo is overlapping
//if it is, remove it in a loop
$("#photo_album").bind("DOMNodeInserted", function() {
    let last_photo = $("#photo_album").find("img:last");
    let last_photo_right = last_photo.position().left + last_photo.width();
    let right_side = $("#photo_album").width() + $("#photo_album").position().left;
    while (last_photo_right > right_side) {
        last_photo.remove();
        last_photo = $("#photo_album").find("img:last");
        last_photo_right = last_photo.position().left + last_photo.width();
        right_side = $("#photo_album").width() + $("#photo_album").position().left;
    }
    //need to add 'see more' link to go to pet or photo page
    /**********IMPORTANT****************/

});

var resizeTimer;
//bind to photo_album resize
$(window).bind("resize", function() {
    clearTimeout(resizeTimer);
    resizeTimer = setTimeout(function (){
        //determinate variables
        let mobile_size = 480;
        let mobile_num = 4;
        let tablet_size = 770;
        let tablet_num = 5;
        let desk_size = 990;
        let desk_num = 6;

        let window_width = $(window).width();


        //photo variables
        //number of photos
        let num_photos = $("#photo_album").find("img").length;
        //last photo data
        let last_photo = $("#photo_album").find("img:last");

        //GROW/SHRINK
        if (window_width <= mobile_size && num_photos !== mobile_num) {
            //shrink
            if (num_photos > mobile_num) {
                while (num_photos > mobile_num) {
                    last_photo.parent('.photo').remove();
                    last_photo = $("#photo_album").find("img:last");
                    num_photos = $("#photo_album").find("img").length;
                }
            } else { //grow
                getThumbPhoto(num_photos, 1);
            }
        } else if (window_width > mobile_size && window_width <= tablet_size && num_photos !== tablet_num) {
            //shrink
            if (num_photos > tablet_num) {
                last_photo.parent('.photo').remove();
            } else { //grow
                getThumbPhoto(num_photos, 1);
            }
        } else if(window_width > desk_size && num_photos !== desk_num) {
            //grow
            if (num_photos < desk_num) {
                let numUpload = desk_num-num_photos;
                getThumbPhoto(num_photos, numUpload);
            }
        }
    }, 250);

});

//onload check to see how many photos there are
$("#photo_album").ready(function() {
    //determinate variables
    let mobile_size = 480;
    let mobile_num = 4;
    let tablet_size = 770;
    let tablet_num = 5;

    let window_width = $(window).width();


    //photo variables
    //number of photos
    let num_photos = $("#photo_album").find("img").length;
    //last photo data
    let last_photo = $("#photo_album").find("img:last");

    //GROW/SHRINK
    if (window_width <= mobile_size && num_photos !== mobile_num) {
        //shrink
        if (num_photos > mobile_num) {
            while(num_photos > mobile_num) {
                last_photo.parent('.photo').remove();
                last_photo = $("#photo_album").find("img:last");
                num_photos = $("#photo_album").find("img").length;
            }
        }
    } else if (window_width > mobile_size && window_width <= tablet_size && num_photos !== tablet_num) {
        //shrink
        if (num_photos > tablet_num) {
            last_photo.parent('.photo').remove();
        }
    }

});

/************************** STATUS **************************/
$("#status-submit").click(function() {
    //get the status
    let status = $("#status-input").val();

});




/********** PETS *************/
//will need to move these to user_loggin js
//When user clicks pet
$("#pet_choose_button").click(function(e) {

    e.preventDefault();

    //get the category of pet
    let pet = $("input[name=petType]:checked").val();

    //update pet modals title
    $("#pet-title").html("Add " + pet);
    $("#pet_type").val(pet);

    $('#petModal').modal('show');
    $('#petChoiceModal').modal('hide');
});

//When user saves pet
$("#petNew").click(function(e) {
    e.preventDefault();
    savePetData();
});



//When user adds new pet
$("#petSave").click(function() {
    //savePetData();
});





/********************************** SCROLL *******************************/

//load additional posts
$(window).unbind('scroll');
$(window).bind('scroll', function () {
    if($(window).scrollTop() + $(window).height() == $(document).height()) {
        //here I have to get the next posts if necessary
        var offset = $(".post").length;
        //if there is a multiple of 10 posts, then consider loading more
        if (offset%3===0) {
            let user_id = localStorage.getItem('user_id');
            appendProblems(user_id, offset, 3);
        }
    }
});






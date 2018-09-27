/********************** SCROLLING **********************/
function problemScroll() {
    if((window.innerHeight + window.scrollY) >= document.body.offsetHeight) {
        window.removeEventListener('scroll', problemScroll);
        //here I have to get the next posts if necessary
        var offset = $(".post").length;
        //this will only load additional posts if the number of post is a multiple of 10
        if (offset % 10 === 0) {
            //check for the tag field
            var tag = $(".tags").first().text();
            if (tag === 'no') {
                getPublicProblems(offset, 10);
                setTimeout(function() {
                    //needed to wait a little before adding the event listener again.
                    window.addEventListener('scroll', problemScroll);
                }, 3000);

            } else {
                getPublicProblemsByTag(offset, 10, tag);
                setTimeout(function() {
                    //needed to wait a little before adding the event listener again
                    window.addEventListener('scroll', problemScroll);
                }, 3000);
            }
        }
    }

}




//on key up, check the length of whats in the search box
//if its > 2, then enable the search button
$("#problem-search").keypress(function(e) {
    var key = e.keyCode || e.which;
    if ($("#problem-search").val().length > 1 && $("#problem-search-btn").attr("disabled") === undefined) {
        if (key === 13) {
            e.preventDefault();
            var tag = $("#problem-search").val();
            $(".post").remove();
            //disable button
            $("#problem-search-btn").attr("disabled", "disabled");
            //clear search box
            $("#problem-search").val("");
            //show the clear-search button
            $("#clear-search").removeAttr("style");
            //remove all posts
            //load new posts on tag
            getPublicProblemsByTag(0, 6, tag);
        }
    }
});

//disable/enable the search button
$("#problem-search").keyup(function() {
    if ($("#problem-search").val().length > 2) {
        $("#problem-search-btn").removeAttr("disabled");
    }else {
        $("#problem-search-btn").attr("disabled", "disabled");
    }
});

$(document).ready(function() {
    //unbind event initially
    //rebind it.
    window.removeEventListener('scroll', problemScroll);
    window.addEventListener('scroll', problemScroll);

});
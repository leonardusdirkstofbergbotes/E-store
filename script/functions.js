$("#cartbox").hide();
$("#to_top").hide();
$("#dropdown").hide();
$("#down_button").click(function(){
    $("#dropdown").toggle(300); 
})

var winheight = $(window).height()

window.onscroll = function (e) { /* removes the "back_to_top" button once a user reaches the top of the page */
    if(window.scrollY < 250) {
        $("#to_top").hide();
    }
    if (window.scrollY > 400) { /* makes the sidebar sticky */
        $('#select_categ').css({
            "position": "sticky",
            "top": "40px"
        });
        $("#to_top").show(300); /* starts the animation when a user reaches this point */
        document.getElementById("roll").style.animation = "move_down 4s 1 forwards"; 
    }
    } 
$("#to_top").click(function(){ /* back to top button */
    window.scrollTo(0, 0);
})

$("#login_form").submit(function(event){ //signup modal
    login(); // handles the data with ajax
    return false; //prevents page from refreshing
});


$("#cart").click(function(){
    $("#cartbox").toggle(300);
})

$("#signup_form").submit(function(event){ //signup modal
    signupForm(); // handles the data with ajax
    return false; //prevents page from refreshing
});

function right(elmnt) { //scrolls the div to the right
    par = elmnt.id;
    div = $(this).parent().parent();
    $('#' + par + '.scroll').animate( { scrollLeft: '+=270' }, 500, 'swing' );
}

function left(elmnt) { //scrolls the div to the left
    par = elmnt.id;
    div = $(this).parent().parent();
    $('#' + par + '.scroll').animate( { scrollLeft: '-=270' }, 500, 'swing' );
}
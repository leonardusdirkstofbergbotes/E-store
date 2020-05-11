window.onscroll = function (e) {  
    if (window.scrollY > 400) {
        console.log('you made it');
        document.getElementById("roll").style.animation = "move_down 4s 1 forwards"; 
    }
    } 

$("#login_form").submit(function(event){ //signup modal
    login(); // handles the data with ajax
    return false; //prevents page from refreshing
});

$("#cartbox").hide();
$("#cart").click(function(){
    console.log('hello');
    $("#cartbox").toggle(300);
})

$("#signup_form").submit(function(event){ //signup modal
    signupForm(); // handles the data with ajax
    return false; //prevents page from refreshing
});

// $(".choose").hide();
//     $("#select_categ").mouseover(function(){
//     $(".choose").show(300);
//     }).mouseleave(function() {
//         $(".choose").hide(300);
//     })

function right(elmnt) { 
    par = elmnt.id;
    div = $(this).parent().parent();
    $('#' + par + '.scroll').animate( { scrollLeft: '+=270' }, 500, 'swing' );
}

function left(elmnt) {
    par = elmnt.id;
    div = $(this).parent().parent();
    $('#' + par + '.scroll').animate( { scrollLeft: '-=270' }, 500, 'swing' );
}
$("#signup_form").submit(function(event){ //signup modal
    submitForm(); // handles the data with ajax
    return false; //prevents page from refreshing
});

$(".choose").hide();
    $("#select_categ").mouseover(function(){
    $(".choose").show(300);
    }).mouseleave(function() {
        $(".choose").hide(300);
    })

function right() {
    var pos = $(".scroll").scrollLeft();
    $('.scroll').animate( { scrollLeft: '+=700' }, 1500, 'swing' );
}

function left() {
    var pos = $(".scroll").scrollLeft();
    $('.scroll').animate( { scrollLeft: '-=700' }, 1500, 'swing' );
}
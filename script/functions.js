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

function left2(elmnt) { //scrolls the div to the left
    par = elmnt.id;
    div = $(this).parent().parent();
    $('#' + par + '.scroll').animate( { scrollLeft: '-=500' }, 600, 'swing' );
}

function right2(elmnt) { //scrolls the div to the right
    par = elmnt.id;
    div = $(this).parent().parent();
    $('#' + par + '.scroll').animate( { scrollLeft: '+=500' }, 600, 'swing' );
}

function magnify(imgID, zoom) {
    var img, glass, w, h, bw;
    img = document.getElementById(imgID);
  
    /* Create magnifier glass: */
    glass = document.createElement("DIV");
    glass.setAttribute("class", "img-magnifier-glass");
  
    /* Insert magnifier glass: */
    img.parentElement.insertBefore(glass, img);
  
    /* Set background properties for the magnifier glass: */
    glass.style.backgroundImage = "url('" + img.src + "')";
    glass.style.backgroundRepeat = "no-repeat";
    glass.style.backgroundSize = (img.width * zoom) + "px " + (img.height * zoom) + "px";
    bw = 3;
    w = glass.offsetWidth / 2;
    h = glass.offsetHeight / 2;
  
    /* Execute a function when someone moves the magnifier glass over the image: */
    glass.addEventListener("mousemove", moveMagnifier);
    img.addEventListener("mousemove", moveMagnifier);
  
    /*and also for touch screens:*/
    glass.addEventListener("touchmove", moveMagnifier);
    img.addEventListener("touchmove", moveMagnifier);
    function moveMagnifier(e) {
      var pos, x, y;
      /* Prevent any other actions that may occur when moving over the image */
      e.preventDefault();
      /* Get the cursor's x and y positions: */
      pos = getCursorPos(e);
      x = pos.x;
      y = pos.y;
      /* Prevent the magnifier glass from being positioned outside the image: */
      if (x > img.width - (w / zoom)) {x = img.width - (w / zoom);}
      if (x < w / zoom) {x = w / zoom;}
      if (y > img.height - (h / zoom)) {y = img.height - (h / zoom);}
      if (y < h / zoom) {y = h / zoom;}
      /* Set the position of the magnifier glass: */
      glass.style.left = (x - w) + "px";
      glass.style.top = (y - h) + "px";
      /* Display what the magnifier glass "sees": */
      glass.style.backgroundPosition = "-" + ((x * zoom) - w + bw) + "px -" + ((y * zoom) - h + bw) + "px";
    }
  
    function getCursorPos(e) {
      var a, x = 0, y = 0;
      e = e || window.event;
      /* Get the x and y positions of the image: */
      a = img.getBoundingClientRect();
      /* Calculate the cursor's x and y coordinates, relative to the image: */
      x = e.pageX - a.left;
      y = e.pageY - a.top;
      /* Consider any page scrolling: */
      x = x - window.pageXOffset;
      y = y - window.pageYOffset;
      return {x : x, y : y};
    }
  }

function showCase(elmnt) {
    $('.img-magnifier-glass').remove();
    var expandImg = document.getElementById("expandedImg");
    expandImg.src = elmnt.src;
    expandImg.parentElement.style.display = "block";
    magnify("expandedImg", 2);
}


$('#loader').hide();
    $(document).ajaxStart(function () {
        $("#loader").show();
    }).ajaxStop(function () {
        $("#loader").hide();
    });

function login() {
    $.ajax({
        type: 'post',
        url: 'queries/check_user.php',
        data: $('#login_form').serialize(),
        success: function (response) {
                if (response == 'password') { // password is wrong
                    swal("Your password is wrong!", "Please try again", "warning");
                } else if (response == 'verify') { //user must be verified 
                    swal("Not yey verified!", "Please check your email!", "info");
                } else if (response == 'exist') { // email does not exist in DB
                    swal("Invalid email adress!", "This email does not exist!", "error");
                } else {
                    var data = JSON.parse(response); //data = username and user id as it is in the DB
                    naam = data.name;
                    user = data.id;
                    window.value=user;// store the user ID in a global var.  will be used for the queries 
                    $('#login_form').trigger("reset");
                    $('#close_login').click(); // button that closes the modal
                    $.ajax({
                        type: 'post',
                        url: 'queries/cart.php',
                        data: window.value,
                        success: function(data) {
                            $("#cart_content").empty();
                            $("#cart_content").append(data);
                            $("#cartbox").hide();
                            new Vue ({
                                el: '#condi',
                                data: {
                                    name: naam,
                                    ID: window.value
                                }
                            })
                        }
                    });
                } //else clause ends 
        
        }
    });event.preventDefault(); // prevents html from submitting the form and refreshing the page
}


function show_more(elmnt) {
    but = elmnt.id;
    $.ajax({
        type: 'post',
        url: 'queries/show_more.php',
        data: {prod_id: but},
        success: function(data) {
            $("#show_more_body").empty();
            $("#show_more_body").append(data);
        }
    }) 
}

function add_to_cart(elmnt) {
    var id = elmnt.id;
    $.ajax({
        type: 'post',
        url: 'queries/add_cart.php',
        data: {
            prod_id: id,
            user_id: window.value
        },
        success: function() {
            $.ajax({
                type: 'post',
                url: 'queries/cart.php',
                data: window.value, // User ID
                success: function(response) {
                   var items = response;
                    $("#cart_content").empty();
                    $("#cart_content").append(response);
                    $("#cartbox").hide();
                }
            })
        }
    })
    elmnt.style.backgroundColor = "rgb(141, 251, 178)";
    elmnt.style.color = "rgb(53, 53, 53)";
    elmnt.innerText = ' Added ......';
    setTimeout(function(){ 
        elmnt.innerText = 'Add to Cart', 
        elmnt.style.backgroundColor = "rgb(141, 141, 251)",
        elmnt.style.color = "white"; }
        , 
    1500);event.preventDefault(); 
    
}


function signupForm(){
    $.ajax({
        type: "POST",
        url: "queries/create_user.php",
        data: $('form#signup_form').serialize(),
        success: function(data){
            if (data == "created") { // signup was a success
                swal("Successfully registered!", "Please check your email to continue", "success");
                $("#close_signup").click()
            } else if (data == "exists") { // user is already registered before
                swal("User already exists!", "Try and Login", "info");
                $("#close_signup").click()
            } else if (data = "invalid") { // email is not valid
                swal("Email is incorrect!", "Make sure email is entered correctly", "info");
            }
        },
        error: function(){
            alert("Error");
        }
    });event.preventDefault(); 
}


function select(pick) {
    $.ajax({
        type: 'post',
        url: 'queries/select_category.php',
        data: pick,
        success: function(data) {
            $('#wrapper').empty();
            $('#wrapper').append(data);
            document.getElementById('wrapper').scrollIntoView();
        }
    });event.preventDefault(); 
}

function delete_item(elm) {
    var item = elm.id;
    $.ajax({
        type: 'post',
        url: 'queries/delete_item.php',
        data: {user_id: window.value,
                item_no: item},
        success: function () {
            $.ajax({
                type: 'post',
                url: 'queries/cart.php',
                data: window.value,
                success: function(data) {
                    $("#cart_content").empty();
                    $("#cart_content").append(data);
                }
            })
        }
    })
}
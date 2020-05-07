
function login() {
    $.ajax({
        type: 'post',
        url: 'queries/check_user.php',
        data: $('#login_form').serialize(),
        success: function (response) {
           var data = JSON.parse(response);
           window.value=data;//declaring global variable by window object  
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
    });event.preventDefault(); 
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
        data: {prod_id: id},
        success: function() {
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


function signupForm(){
    $.ajax({
        type: "POST",
        url: "queries/create_user.php",
        data: $('form#signup_form').serialize(),
        success: function(data){
            $("#close_signup").click()
            if (data == "created") {
                alert('well done');
            } else if (data == "exists") {
                alert('already exists');
            }
        },
        error: function(){
            alert("Error");
        }
    });
}


function select() {
    $.ajax({
        type: 'post',
        url: 'queries/select_category.php',
        data: $("#select_categ").serialize(),
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
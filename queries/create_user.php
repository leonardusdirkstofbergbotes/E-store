<?php
    $name = $_POST['name'];
    $surname = $_POST['surname'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    $conn = new mysqli('localhost:3308', 'root', '', 'e_store');
    $check = "SELECT * FROM users WHERE users.email = \"$email\"";
    $result = $conn->query($check);
    
    if ($result->num_rows > 0) { /* User alreayd exists - goes to LOGIN page */
        echo "exists";
    } else { /* User gets created */
        $create = "INSERT INTO users (name, surname, email, password)
                   VALUES (\"$name\", \"$surname\", \"$email\", \"$password\");";
        $conn->query($create);  
        $result = $conn->query($check);
        $record = $result->fetch_assoc(); 
        session_start();
        $_SESSION['id'] = $record['user_id'];
        $_SESSION['name'] = $record['name'];
        $_SESSION['surname'] = $record['surname'];
        $_SESSION['email'] = $record['email'];
        header("Location: email_handler.php"); /* <--- This page will send an email to the user in order to verify his account */
        echo "created";
    }
    ?>
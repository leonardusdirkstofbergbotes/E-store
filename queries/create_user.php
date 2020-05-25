<?php
    $name = $_POST['name'];
    $surname = $_POST['surname'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) { // check if email adress is a valid email format
    $emailErr = "Invalid email format";
    echo "invalid";
    } else { /* email is in the correct format */
        include "../db/dbconnect.php";
        $check = "SELECT * FROM user WHERE user.email = \"$email\"";
        $result = $conn->query($check);
        
        if ($result->num_rows > 0) { /* User alreayd exists */
            echo "exists";
        } else { /* User gets created */
            $create = "INSERT INTO user (name, surname, email, password)
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
    }
    ?>
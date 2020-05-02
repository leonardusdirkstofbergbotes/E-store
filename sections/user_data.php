<?php 
    $user_id = $_GET['id'];
    $check = "SELECT * FROM users WHERE users.user_id = \"$user_id\"";
    $alter_note = "UPDATE users SET verified = 1 WHERE users.user_id = \"$user_id\"";
    $conn = new mysqli('localhost:3308', 'root', '', 'e_store');
    $conn->query($alter_note); // will verify the user 
    $result = $conn->query($check);
    $record = $result->fetch_assoc(); // gets all the info of the user from the DB

    session_start();
    $_SESSION['user_id'] = $record['user_id'];
    $_SESSION['name'] = $record['name'];
    $_SESSION['surname'] = $record['surname'];
    $_SESSION['email'] = $record['email'];
    header('Location: ../index.php? session=yes');
?>
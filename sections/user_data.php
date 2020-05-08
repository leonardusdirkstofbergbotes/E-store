<?php 
    $user_id = $_GET['id'];
    $check = "SELECT * FROM users WHERE users.user_id = \"$user_id\"";
    $alter_note = "UPDATE users SET verified = 1 WHERE users.user_id = \"$user_id\"";
    $conn = new mysqli('localhost:3308', 'root', '', 'e_store');
    $conn->query($alter_note); // will verify the user 
    $result = $conn->query($check);
    $record = $result->fetch_assoc(); // gets all the info of the user from the DB

    $arr = array ("name" => $record['name'],
                   "id" => $record['user_id']);
    $data = json_encode($arr);
    echo $data;
?>
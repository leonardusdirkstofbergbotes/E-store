<?php 
    $email = $_POST['email'];
    $pass = $_POST['password'];

    $conn = new mysqli('localhost:3308', 'root', '', 'e_store');
    $check = "SELECT * FROM users WHERE users.email = \"$email\"";
    $verified = "SELECT * FROM users WHERE users.email = \"$email\" AND users.verified = 1";
    $doublecheck = "SELECT * FROM users WHERE users.email = \"$email\" AND users.password = \"$pass\"";
    
    $exist = $conn->query($check);

    if ($exist->num_rows > 0) { /* User exists */
        $veri = $conn->query($verified);
        if ($veri->num_rows > 0) { /* User is verified */
            $pass = $conn->query($doublecheck);
            if ($pass->num_rows > 0) { /* Everything is correct */
                $record = $pass->fetch_assoc();
                session_start();
                $_SESSION['name'] = $record['name'];
                $_SESSION['surname'] = $record['surname'];
                $_SESSION['id'] = $record['user_id'];
                $_SESSION['email'] = $record['email'];
                header("Location: ../index.php? session=yes");
            } else if ($pass->num_rows == 0) { /* Password is incorrect */
                // header("Location: ../login.php? pass= wrong");
            }
        } else if ($veri->num_rows == 0) { /* User is not verified */
            // header("Location: ../login.php? verified= no");
        }
    } else if ($exist->num_rows == 0) { /* User doesn't exist */
        // header("Location: ../login.php? notexist= no");
    }
?>
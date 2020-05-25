<?php 
    $email = $_POST['email'];
    $pass = $_POST['password'];

    include "../db/dbconnect.php";
    $check = "SELECT * FROM user WHERE user.email = \"$email\"";
    $verified = "SELECT * FROM user WHERE user.email = \"$email\" AND user.verified = 1";
    $doublecheck = "SELECT * FROM user WHERE user.email = \"$email\" AND user.password = \"$pass\"";
    
    $exist = $conn->query($check);

    if ($exist->num_rows > 0) { /* User exists */
        $veri = $conn->query($verified);
        if ($veri->num_rows > 0) { /* User is verified */
            $pass = $conn->query($doublecheck);
            if ($pass->num_rows > 0) { /* Everything is correct */
                $record = $pass->fetch_assoc();
                $arr = array ("name" => $record['name'],
                               "id" => $record['user_id']);
                $data = json_encode($arr);
                echo $data; // send the array back to ajac to process 
                
            } else if ($pass->num_rows == 0) { /* Password is incorrect */
                echo "password";
            }
        } else if ($veri->num_rows == 0) { /* User is not verified */
            echo "verify";
        }
    } else if ($exist->num_rows == 0) { /* User doesn't exist */
        echo "exist";
    }
?>
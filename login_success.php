<?php
    require("../database.php");
    $email = base64_decode($_POST["email"]);
    $password = md5(base64_decode($_POST["password"]));

    $data_check = "SELECT email FROM users WHERE email = '$email'";

    $response = $db->query($data_check);

    if($response->num_rows != 0){
        $data_check_password = "SELECT email,password FROM users WHERE email = '$email' AND password = '$password'";
        $pass_success = $db->query($data_check_password);

        if($pass_success->num_rows != 0){
            echo "Login Success";
            session_start();
            $_SESSION['email'] = $email;
        }
        else{
            echo "Password Not match";
        }
    }
    else{
        echo "User not found";
    }
?>
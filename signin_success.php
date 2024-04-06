<?php
    require("../database.php");
    $username = base64_decode($_POST["username"]);
    $email = base64_decode($_POST["email"]);
    $password = md5(base64_decode($_POST["password"]));

    $insert_data = "INSERT INTO users(username,email,password)
    VALUES('$username','$email','$password')";

    if($db->query($insert_data)){
        echo "Sign in Success :)";
    }
    else{
        echo "Sign in failed !";
    }
?>
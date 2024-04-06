<?php
    require("../database.php");
    $fullname = base64_decode($_POST["fullname"]);
    $email = base64_decode($_POST["email"]);
    $message = base64_decode($_POST["message"]);

    $insert_data = "INSERT INTO contactus(fullname,email,message)
    VALUES('$fullname','$email','$message')";

    if($db->query($insert_data)){
        echo "Sent Successfully :)";
    }
    else{
        echo "Sending Failed !";
    }
?>
<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quiz Website</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: Arial, sans-serif;
            background-image: url("../555.jpg");
            background-size: cover;
            background-position: center;
            background-attachment: fixed;
        }

        .navbar {
            background-color: rgb(0, 0, 0);
            color: rgb(252, 3, 194);
            padding: 10px 20px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            position: relative;
            z-index: 1;
        }

        .logo {
            font-size: 1.5em;
            color: rgb(3, 213, 255);
            text-decoration: none;
        }

        .welcome {
            color: rgb(3, 213, 255);
            font-weight: bold;
            margin-right: 20px;
        }

        .logout {
            color: rgb(3, 213, 255);
            text-decoration: none;
            padding: 5px 10px;
            background-color:  rgb(0, 0, 0);
            border-radius: 5px;
            transition: background-color 0.3s;
        }

        .logout:hover {
            color: black;
            background-color: rgb(3, 213, 255);
        }

        .home {
            color: rgb(3, 213, 255);
            text-decoration: none;
            padding: 5px 10px;
            background-color:  rgb(0, 0, 0); 
            border-radius: 5px;
            transition: background-color 0.3s;
            margin-right: 10px;
        }

        .home:hover {
            color: black;
            background-color: rgb(3, 213, 255);
        }

        .content {
            position: relative;
            top: 200px;
            left: 530px;
            
            width: 600px;
            max-width: 800px;
            height: 60%;
            padding: 20px;
            text-align: center;
            color: white;
            z-index: 1;
        }


        h1 {
            font-size: 2.5em;
            margin-bottom: 20px;
            color: rgb(1, 230, 251);
        }

        .options {
            margin-top: 30px;
        }

        .option {
            padding: 15px 30px;
            margin: 10px;
            border: none;
            color: black;
            background-color: rgb(0, 200, 255);
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s;
            text-decoration: none;
            display: block;
        }

        .option:hover {
            background-color: rgb(4, 248, 236);
        }

        @media screen and (max-width: 768px) {
            .content {
              
                position: relative;
                top: 200px;
                left: 180px;
                height: 400px;
                width: 500px;

            }

            h1 {
                font-size: 2em;
            }
        }

        @media screen and (max-width: 480px) {
            .option {
                padding: 10px 15px;
                margin: 5px;
            }
        }

    </style>
</head>
<body>
    <div class="navbar">
        <a href="#" class="logo">Quuzzo.com</a>
        <div>
            <?php
            if(isset($_SESSION['email'])) {
                echo "<span class='welcome'>Welcome ".$_SESSION['email']."</span>";
            } else {
                echo "<span class='welcome'>Welcome Guest</span>";
            }
            ?>
            <a href="profile.php" class="home">Home</a>
            <a href="../logout.php" class="logout"><u>Logout</u></a>
        </div>
    </div>

    <div class="content">
        <h1>Challenge Your Mind, and Conquer the Quiz!</h1>
        <div class="options">
            <a href="html.html" class="option">< HTML ></a>
            <a href="" class="option">< CSS ></a>
            <a href="" class="option">< Java ></a>
            <a href="" class="option">< Javasript ></a>
        </div>
    </div>
</body>
</html>

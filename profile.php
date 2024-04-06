<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quiz Website</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<main class="main">
    <div class="navbar">
        <a href="#" class="logo"><i>Quuzzo.com</i></a>
        <div>
        <?php
            if(isset($_SESSION['email'])) {
                echo "<span class='welcome'>Welcome ".$_SESSION['email']."</span>";
            } else {
                echo "<span class='welcome'>Welcome Guest</span>";
            }
            ?>
            <a href="../logout.php" class="logout"><u>Logout</u></a>
        </div>
    </div>  
    <div class= "container"> 
    <section class="quiz-section">
    <div class="quiz-box">
            <h1>CodeQuest</h1>
            <div class= "quiz-header">
                <span>Quiz Tutorials</span>
                <span class= "header-score">Score: 0 / 10</span>
            </div>  
            <h2 class= "question-text">What does HTML stand for?</h2>  
            <div class="option-list">
                <!--<div class="option">
                    <span>A. Hyper Type Multi Language</span>
                </div>
                <div class="option">
                    <span>B. Hyper Text Multiple Language</span>
                </div>
                <div class="option">
                    <span>C. Hyper Text Markup Language</span>
                </div>
                <div class="option">
                    <span>D. Home Text Multi Language</span>
                </div>-->
            </div>
            
            <div class="quiz-footer">
                <span class="question-total">1 of 10 Questions</span>
                <button class="next-btn">Next</button>
            </div>
        </div>

        <div class="result-box">
            <h2>Quiz Result!</h2>
            <div class="percentage-container">
                <div class="circular-progress">
                    <span class="progress-value">0%</span>
                </div>
                <span class="score-text">Your Score 0 out of 10</span>
            </div>
            <div class="buttons">
                <button class="tryAgain-btn">Try Again</button>
                <button class="goHome-btn">Go To Home</button>
            </div>
        </div>
    </section>

    <section class="home">
    <div class="home-content">
        <h1>Welcome to Our Quiz Website</h1>
        <p class="tagline"><b>Get ready to embark on a journey of discovery and excitement! <br><br><br>Start quizzing now!</b></p>
        
        <div class="buttons">
            <a href="study_material.html" class="button"><b>Study Material</b></a>
            <button class="start-btn"><b><u>Start Quiz</u></b></bottom>
        </div>

    </div>
    </section>
    </div>
</main>
<div class="popup-info">
    <h2>Quiz Guide</h2>
    <span class="info">1. Present 10 questions in the quiz, ensuring each user encounters the same set.</span>
    <span class="info">2. Allow users a second attempt at all questions, promoting learning and improvement.</span>
    <span class="info">3. Display the user's score after completing the quiz, emphasizing achievement and progress.</span>
    <span class="info">4. Offer an option to exit the quiz at any point, respecting user autonomy.</span>
    <span class="info">5. Enable users to start the quiz or continue from where they left off, facilitating seamless navigation.</span>
    <div class="btn-group">
        <button class="info-btn exit-btn">Exit Quiz</button>
        <a  class="info-btn continue-btn">continue</a>
    </div>
</div>
<script src="questions.js"></script>
<script src="script.js"></script>

</body>
</html>

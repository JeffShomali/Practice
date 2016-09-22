<?php include 'database.php'; ?>

<?php

// Get the total number of questions
$query = "SELECT * FROM questions";

//Get the results
$results = $mysqli->query($query) or die($mysqli->error.__LINE__);
$total = $results->num_rows; //get the total of questions


?>

<html>

<head>
    <meta charset="utf-8">
    <title>PHP Quiz Maker</title>
    <link rel="stylesheet" href="css/style.css" media="screen" title="no title">
</head>

<body>
    <header>
        <div class="container">
            <h1>PHP Quize Maker</h1>
        </div>
    </header>

    <main>
        <div class="container">
            <h2>Test Your PHP Knowledge</h2>
            <p>  This is a multiple chooice quiz to test your knowledge of PHP</p>
            <ul>
                 <li><strong>Number of Questions</strong> <?php echo $total ?></li>
                 <li><strong>Type: </strong> Multiple Choice</li>
                 <li><strong>Estimated Time</strong> <?php echo $total * .5 ; // total time ?> Minutes</li>
            </ul>
            <a href="question.php?n=1" class="start">Start Quiz</a>
        </div>
    </main>

    <footer>
        <div class="container">
            Copywrite &copy; 2016, PHP Quizzer
        </div>
    </footer>

</body>

</html>

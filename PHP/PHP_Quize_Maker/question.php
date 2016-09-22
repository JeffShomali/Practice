<?php include 'database.php'; ?>
<?php session_start(); ?>

<?php
// Getting question number
$number = (int) $_GET['n']; // (int) is type casting


/*
* Get total of question
* and assign it to total variable
*/
$query = 'SELECT * FROM questions';
//get results
$results = $mysqli->query($query) or die($mysqli->error.__LINE__);
$total = $results->num_rows;

/*
 * Getting questuin
 */

 $query = "SELECT * FROM `questions` WHERE question_number = $number ";

 // Get the result
 $result = $mysqli->query($query) or die($mysqli->error.__LINE__);

 //Assign a variable
 $question = $result->fetch_assoc(); //get asssociative array of result


 /*
  * Getting Choices
  */

  $query = "SELECT * FROM `choices` WHERE question_number = $number ";

  // Get the result
  $choices = $mysqli->query($query) or die($mysqli->error.__LINE__);

  //Assign a variable


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
            <div class="current">Question <?php echo $question['question_number']; ?> of <?php echo $total;?></div>
            <p class="question"> <?php  echo $question['text'];?></p>


            <form method="POST" action="process.php">
                <ul class="choices">

                     <?php while ($row = $choices->fetch_assoc()) : ?>
                          <li><input name="choice" type="radio" value="<?php echo $row['id']; ?>" /> <?php echo $row['text'];?> </li>
                     <?php endwhile ?>

                </ul>
                <input type="submit" name="submit" value="Submit" />
                <input type="hidden" name="number" value="<?php echo $number; ?>">
            </form>
        </div>
    </main>

    <footer>
        <div class="container">Copywrite &copy; 2016, PHP Quizzer </div>
    </footer>

</body>

</html>

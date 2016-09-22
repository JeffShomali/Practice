<?php include 'database.php'; ?>

<?php
/**
 * Check if the submit button was pressed in add.php
 * Get the post variables
 */
if(isset($_POST['submit'])) {
     $question_number = $_POST['question_number'];
     $question_text   = $_POST['question_text'];
     $correct_choice = $_POST['correct_choice'];
     //Get choices array
     $choices = [];
     $choices[1] = $_POST['choice1'];
     $choices[2] = $_POST['choice2'];
     $choices[3] = $_POST['choice3'];
     $choices[4] = $_POST['choice4'];
     $choices[5] = $_POST['choice5'];

     /**
      * Inserting data into question table in  database
      */
     $query = "INSERT INTO `questions` (question_number,text) VALUES ('$question_number', '$question_text')";
     $insert_row = $mysqli->query($query) or die($mysqli->error.__LINE__);

     //Validate insert
     if($insert_row) {
          //loop to get correct value
          foreach($choices as $choice => $value){
               if($value != ''){ //if there is no answer do nothing
                    if($correct_choice == $choice){
                         $is_correct = 1;
                    }else {
                         $is_correct = 0;
                    }
                    /**
                     * Inserting choices into choice dtable in database
                     */
                    $query = "INSERT INTO `choices` (question_number,is_correct,text )   VALUES ('$question_number','$is_correct', '$value')";
                    $insert_row = $mysqli->query($query) or die($mysqli->error.__LINE__);

                    /**
                     * Validate query
                     * if everything was fime and data inserted into choices table continue and display message
                     * else display error
                     */
                    if($insert_row){
                         continue;
                    }else{
                         die('Error :  (' . $mysqli->errorno . ') ' . $mysqli->error );
                    }
               }
          }//end foreach
          $msg = 'Question has been added';
     }
}

//Get the total question is in database and show into dropdown

$query = 'SELECT * FROM questions';
//get results
$questions = $mysqli->query($query) or die($mysqli->error.__LINE__);
$total = $questions->num_rows;
$next  = $total+1;

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
            <h2>Add a Question</h2>
            <?php if(isset($msg)){ echo '<p>' . $msg .'</p>' ;}?>
            <form action="add.php" method="post">
                <p>
                    <label>Question Number </label>
                    <input type="number" name="question_number" value="<?php echo  $next;?>">

                </p>
                <p>
                    <label>Question Text </label>
                    <input type="text" name="question_text">

                </p>

                <p>
                    <label>Choice #1: </label>
                    <input type="text" name="choice1">

                </p>
                <p>
                    <label>Choice #2: </label>
                    <input type="text" name="choice2">

                </p>
                <p>
                    <label>Choice #3: </label>
                    <input type="text" name="choice3">

                </p>
                <p>
                    <label>Choice #4: </label>
                    <input type="text" name="choice4">

                </p>
                <p>
                    <label>Choice #5: </label>
                    <input type="text" name="choice5">

                </p>

                <p>
                    <label>Correct Choice Number: </label>
                    <input type="number" name="correct_choice">

                </p>
                <p>

                    <input type="submit" name="submit" value="Submit">

                </p>

            </form>
        </div>
    </main>

    <footer>
        <div class="container">
            Copywrite &copy; 2016, PHP Quizzer
        </div>
    </footer>

</body>

</html>

<?php include 'database.php'; ?>
<?php session_start();



//Check if ascore set
if (!isset($_SESSION['score'])) {
    $_SESSION['score'] = 0;
}
if (isset($_POST['submit'])) {
    $number = $_POST['number'];
    $selected_choice = $_POST['choice'];

     // print_r($_POST);
     // echo $number.'<br>'; //get from question.php form
     // echo $selected_choice;
     // redirect user to next question like question.php?n=2
     $next = $number+1;

     /**
      * Get total of question
      * and assign it to total variable
      */
      $query = "SELECT * FROM questions";
      //get results
      $results = $mysqli->query($query) or die($mysqli->error.__LINE__);
      $total = $results->num_rows;


     /*
      * Get correct choice
      * if in database is_correct = 1 mean answer is correct
      */
     $query = "SELECT * FROM `choices` WHERE question_number = $number AND is_correct = 1";

     /*
      * Get the result
      */
     $result = $mysqli->query($query) or die($mysqli->error.__LINE__);

     /*
      * Get row (asssociate array result)
      */
     $row = $result->fetch_assoc();

     /*
      * Set the correct choice
      */
     $correct_choice = $row['id'];

     /**
      * Compare to make sure user answer and correct answer is matched
      */
     if($correct_choice == $selected_choice){
          //answer is correct so store into SESSION variable
          $_SESSION['score']++;//if answer is not correct we dont care :d we just count correct answer
     }
     /**
      * If is last question
      * user should redirect to result page
      * else jump to next question
      */

     //  echo $number;
     //  die();
      if($number == $total){
           header("Location: final.php");
           exit();
      }else {
           header("Location: question.php?n=$next");

      }

}


<?php include 'database.php' ; ?>

<?php

 /**
  * [preparing query variable]
  * @var string
  */
     $query = "SELECT * FROM shouts ORDER BY id DESC";
     /**
      * [Passing query connection from database.php and query into mysqli_query]
      * @var [type]
      */
     $shouts = mysqli_query($con, $query);

?>


<!DOCTYPE html>
<html>
     <head>
          <meta charset="utf-8">
          <title>PChat</title>
          <link rel="stylesheet" href="css/style.css" media="screen" />
     </head>
     <body>
               <div id="container">
                    <header>
                         <h1>PHP Chat</h1>
                    </header>

                    <div id="shouts">
                         <ul>
                              <?php while( $row = mysqli_fetch_assoc($shouts) ) : ?>
                                   <li class="shout"> <span> <?php echo $row['time'] ?> - </span><strong><?php echo $row['user'] ?></strong>: <?php echo $row['message'] ?></li>
                              <?php endwhile; ?>
                         </ul>
                    </div>

                    <div id="input">
                         <?php if(isset($_GET['error'])) :  ?>
                              <div class="error"> <?php echo $_GET['error'] ;?> </div>

                         <?php endif ?>
                         <form class="" action="process.php" method="post">
                                   <input type="text" name="user" placeholder="Enter Your Name">
                                   <input type="text" name="message" placeholder="Enter A Message">
                                   <br>
                                   <input class="shout-btn" type="submit" name="submit" value="Send">
                         </form>
                    </div>
               </div>
     </body>
</html>

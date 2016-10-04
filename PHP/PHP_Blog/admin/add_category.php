<?php include 'includes/header.php'; ?>
<?php

     // Create database object
     $db = new Database();

     if(isset($_POST['submit'])){

          // Assign variable
          $name = mysqli_real_escape_string($db->link, $_POST['name']);


          // Simple Validation
          if($name == ''){
               //set an error
               $error = "Plase fill out all required fields";
          }else {
               $query = "INSERT INTO categories(name) VALUES ('$name')";
               $updatet_row = $db->update($query);
          }

     }
?>
<form role= "form" method="POST" action="add_category.php">
  <div class="form-group" >
    <label>Category Name</label>
    <input name="name" type="text" class="form-control"  placeholder="Enter Category">
  </div>
  <div>
       <input name="submit" type="submit" class="btn btn-default" value="Submit" />
       <a href="index.php" class="btn btn-default">Cancel</a>

  </div>
  <br>
</form>

<?php include 'includes/footer.php'; ?>

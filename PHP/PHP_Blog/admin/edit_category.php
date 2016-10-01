<?php include 'includes/header.php'; ?>
<?php

     $id = $_GET['id'];
     // Create database object
     $db = new Database();

     //Create query
     $query = "SELECT * FROM categories WHERE id =".$id;
     //Run the query
     $category = $db->select($query)->fetch_assoc();


?>

<form>
  <div class="form-group" method="post" action="edit_category.php">
    <label>Category Name</label>
    <input name="name" type="text" class="form-control"  placeholder="Enter Category" value="<?php echo $category['name']; ?>">
  </div>
  <div>
      <input name="submit" type="submit" class="btn btn-default" value="Submit" />
      <a href="index.php" class="btn btn-default">Cancel</a>
      <input name="delete" type="submit" class="btn btn-danger" value="Delete" />

  </div>
  <br>

</form>

<?php include 'includes/footer.php'; ?>

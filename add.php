<?php 

/* if(isset($_GET['submit'])){
    echo $_GET['email'];
    echo $_GET['title'];
    echo $_GET['Ingredients'];

} */

if(isset($_POST['submit'])){
     //check email
     if(empty($_POST['email'])){
        echo 'An email is required <br />';
}
    else {
      echo htmlspecialchars($_POST['email']);
      $email = $_POST['email'];
      if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
          echo 'Email must be a valid email address';
      }
}
  //check title
  if(empty($_POST['title'])){
    echo 'An title is required <br />';
}
else {
  echo htmlspecialchars($_POST['title']);
}
  // check ingredients
   //check title
   if(empty($_POST['Ingredients'])){
    echo 'An Ingredients is required <br />';
}
else {
  echo htmlspecialchars($_POST['Ingredients']);
} 

}

?>

<!DOCTYPE html>
<html>

<?php 
include('templates/header.php') 
?>

<section class="container grey-text">
<h4 class="center">Add a Pizza</h4>
<form action="add.php" method="POST" class="white">
    <label for="">Your Email:</label>
    <input type="text" name="email">

    <label for="">Pizza Title:</label>
    <input type="text" name="title">

    <label for="">Ingredients (comma separated):</label>
    <input type="text" name="Ingredients">
    <div class="center">
    <input type="submit" name="submit" value="submit" class="btn brand z-depth-0">
    </div>
</form>
</section>

<?php 
include('templates/footer.php') 
?>


</html>
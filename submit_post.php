<?php 
session_start(); ?>
<?php
$link = mysqli_connect("localhost", "root", "", "blog");


if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}

$title = $link->real_escape_string($_POST['title']);
$cat=$link->real_escape_string($_POST['cat']);
$disc=$link->real_escape_string($_POST['disc']);
$artic=$link->real_escape_string($_POST['artic']);
$auth=$link->real_escape_string($_POST['auth']);
$tag=$link->real_escape_string($_POST['tag']);
$image=$link->real_escape_string($_POST['image']);

echo $sql = "INSERT INTO blog(title,cat,disc,artic,auth,tag,image) 
VALUES ('".$title."','".$cat."','".$disc."','".$artic."','".$auth."','".$tag."','".$image."')";

if ($link->query($sql) === TRUE) {
  echo ("New record created successfully");
  header("location:blog.php");
  } else {
  echo $_SESSION["fail"] = "New record created fail";
   header("location:add.php");
  }
  
  $link->close();

?>
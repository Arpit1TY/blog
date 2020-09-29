<?php 
session_start();

if (isset($_SESSION['id']) && isset($_SESSION['user_name'])) {

 ?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v4.0.1">
    <title>Signin Template · Bootstrap</title>
    <link rel="stylesheet" href="wymeditor/skins/default/skin.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/6c5c073889.js" crossorigin="anonymous"></script>
    <!-- Bootstrap core CSS -->
<link href="../assets/dist/css/bootstrap.css" rel="stylesheet">

    <style>
      body {
        background-color:#eeeeee;
      }
      .container {
        text-align: center;
        padding-top:3%;
        padding-bottom:10%;
      }
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>
    <!-- Custom styles for this template -->
    <link href="signin.css" rel="stylesheet">
  </head>
  <body >
  <a href="logout.php">Logout</a> 
  <div class="container">
  <i class="fas fa-bible" style="font-size: 150px;"></i><br><br><br>
  <form method="post" action="submit_post.php" enctype="multipart/form-data">
  <div class="form-group">
    <label >Title</label>
    <input type="text" class="form-control"  placeholder="Add Title" name="title">
  </div>
  <div class="form-group">
    <label >Category</label>
    <input type="text" class="form-control"  placeholder="Add category" name="cat"> </div>
  <div class="form-group">
  <label >Description</label>
    <input type="text" class="form-control"  placeholder="Add description" name="disc"> </div>
  <div class="form-group">
    <label >Article</label>
    <textarea class="wymeditor" name="artic"></textarea>
    <div class="form-group">
    <label >Author</label>
    <input type="text" class="form-control"  placeholder="Author name" name="auth"> </div>
  <div class="form-group">
  <label >Tag</label>
    <input type="text" class="form-control"  placeholder="Add tags" name="tag"> </div>
    <div class="form-group">
    <label > Image</label>
    <input type="file" class="form-control"  name="image"> </div>
    <button type="submit" class="wymupdate">Upload blog</button>
</form>
</div>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
    <script src="vendor/jquery/jquery.js"></script>
    <script src="wymeditor/jquery.wymeditor.js"></script>
    <script type="text/javascript">
        
        $(function() {
            $('.wymeditor').wymeditor();
        });
    </script>
</body>
</html>
<?php 
}else{
     header("Location: login.php");
     exit();
}
 ?>
<?php include_once('db/setup.php');
$data = pagination('blog');
$pages = pageline('blog');
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Arpit,Akash">
    <meta name="generator" content="Jekyll v4.0.1">
    <title>Shalom Rhema</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    
<link href="../css/bootstrap.css" rel="stylesheet">
<script src="https://kit.fontawesome.com/6c5c073889.js" crossorigin="anonymous"></script>
    <style>
    .fab:hover {
      color:#11a;
    }
    html,
    body {
      position: relative;
      height: 100%;
      background-color:#d7d7d7;

    }
    footer{background:#555;
    }
    body {
      font-family: Helvetica Neue, Helvetica, Arial, sans-serif;
      font-size: 14px;
      color: #000;
      margin: 0;
      padding: 0;
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
    <link href="album.css" rel="stylesheet">
  </head>
  <body>
  <header>
  <div class="collapse bg-dark" id="navbarHeader">
    <div class="container">
      <div class="row">
        <div class="col-sm-8 col-md-7 py-4">
          <h4 class="text-white">About Shalom Rhema</h4>
          <p class="text-muted">Motivational articals</p>
        </div>
        <div class="col-sm-4 offset-md-1 py-4">
          <h4 class="text-white">Menu</h4>
          <ul class="list-unstyled">
            <li><a href="index.php" class="text-white">Home</a></li>
            <li><a href="contact.php" class="text-white">Gallery</a></li>
            <li><a href="blog.php" class="text-white">Blog</a></li>
          </ul>
        </div>
      </div>
    </div>
  </div>
  <div class="navbar navbar-dark bg-dark shadow-sm">
    <div class="container d-flex justify-content-between">
      <a href="#" class="navbar-brand d-flex align-items-center">
      <i class="fas fa-bible" style="font-size: 25px;"></i><strong>&nbsp Shalom Rhema</strong>
      </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarHeader" aria-controls="navbarHeader" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
    </div>
  </div>
</header><hr>
    <?php 
    for($i=0; $i<count($data); $i++){
    ?><div class="container">
        <div class="col-md-12">
          <div class="card mb-4 shadow-sm">
            <svg class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: Thumbnail"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"/><text x="50%" y="50%" fill="#eceeef" dy=".3em">Thumbnail</text></svg>
            <div class="card-body">
              <p class="card-text"><a href="post.php?id=<?php echo $data[$i]['id'];?>"><?php echo $data[$i]['disc'];?></a></p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                </div>
                <small class="text-muted"><?php echo $data[$i]['disc']; ?></small>
              </div>
            </div>
          </div>
        </div> 
        </div><hr>
        <?php 
    }
    ?>
    <nav aria-label="Page navigation example">
  <ul class="pagination">
    <li class="page-item">
      <a class="page-link" href="#" aria-label="Previous">
        <span aria-hidden="true">&laquo;</span>
        <span class="sr-only">Previous</span>
      </a>
    </li>
    <?php 
    for($i=1; $i<($pages); $i++){
    ?>
    <li class="page-item"><a class="page-link" href="blog.php?page=<?php echo $i; ?> "><?php echo $i; ?></a></li>
    <?php 
    }
    ?>
    <li class="page-item">
      <a class="page-link" href="#" aria-label="Next">
        <span aria-hidden="true">&raquo;</span>
        <span class="sr-only">Next</span>
      </a>
    </li>
  </ul>
</nav><hr>
<div class="container">
  <div style="text-align: center;">
      <i class="fab fa-twitter-square" style="font-size: 48px;"></i>
      <i class="fab fa-instagram" style="font-size: 48px;"></i>
      <i class="fab fa-linkedin" style="font-size: 48px;"></i>
      <i class="fab fa-facebook-square" style="font-size: 48px;"></i></div>
  </div>

</div>
<hr>
<footer class="text-muted">
  <div class="container">   <p class="float-right">
    <a href="#">Back to top</a>
    </p>
    <p class="modal-content"> Shalom Rhema &copy; Arpit and Akash!</p>
    <p class="text-white"><a href="https://getbootstrap.com/">Visit the homepage</a> or read our <a href="../getting-started/introduction/">getting started guide</a>.</p>
     </div>
</footer>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="../assets/js/vendor/jquery.slim.min.js"><\/script>')</script><script src="../assets/dist/js/bootstrap.bundle.js"></script>
    <script src="../js/bootstrap.bundle.js"></script>  
    </body>
</html>

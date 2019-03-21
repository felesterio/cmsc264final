<?php
//start a logged in session if session variable is activated (see login.inc.php)
session_start();
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="description" content="helps with search results">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!--bootstrap import-->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" href="css/styles.css" type="text/css">
  <title>INSERT TITLE</title>
</head>
<body>
  <!--navbar-->
  <header>
    <!--lg= large screens-->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <a class="header-logo" href ="index.php">
        <img src="cmsc264final/img/logo.png" alt="logo" height="80px" width="100px">
      </a>
      <!--hamburger icon collapse on smaller screens-->
      <button class="navbar-toggler" data-toggle="collapse" data-target="#navbarMenu">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarMenu">
        <ul class="navbar-nav">
          <li class="nav-item"><a href="#" class="nav-link">Link1</a></li>
          <li class="nav-item"><a href="#"class="nav-link">Link2</a></li>
          <li class="nav-item"><a href="#"class="nav-link">Link3</a></li>
          <li class="nav-item"><a href="#"class="nav-link">Link4</a></li>
        </ul>
        <ul class="navbar-nav ml-auto">
          <?php
          //if user logged in OR just registered, the session is on
          if (isset($_SESSION['userId'])) {
            echo '<li class="form-inline"><form action="includes/logout.inc.php" method="post">
              <button type="submit" name="logout-submit" class="btn btn-primary">Logout</button>
            </form></li>';
            //echo '<li class="nav-item"><a href="logout.inc.php" class="nav-link">Login</a></li>';
          }
          else {
            echo '<li class="nav-item"><a href="index.php" class="nav-link"><button class="btn btn-primary">Login</button></a></li>
            <li class="nav-item"><a href="signup.php" class="nav-link"><button class="btn btn-primary">Register</button></a></li>';
          }
          ?>
        </ul>
    </div>
    </nav>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

  </header>

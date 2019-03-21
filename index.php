<?php
require "header.php";
?>

  <main>
    <!--use php to hide one of the tags-->
        <?php
        //check if session variable is turned on
        if (isset($_SESSION['userId']) && isset($_GET['login']) && $_GET['login'] == "success") {
          //once logged in change this rendering of page to be OUR MAIN CONTENT OF PAGE FOR LOGGED IN USER!!!!
          echo '<div class="alert alert-success">
          <center>
                  <strong>Success!</strong> You are logged in.</center>
                  </div>
                  <div class="wrapper-main">
                  <section class="section-default">';
          //TODO TODO TODO WHEN LOGGED IN WHAT SHOULD WE SEE. THIS IS WHERE MAIN CONTENT SHOULD BE
          //require "------.php"
        }
        else if (isset($_SESSION['userId']) && isset($_GET['signup']) && $_GET['signup'] == "success"){
          echo '<div class="alert alert-success">
          <center>
                  <strong>Registered!</strong> Have fun!</center>
                  </div>
                  <div class="wrapper-main">
                  <section class="section-default">';
          //TODO TODO TODO AGAIN, ONCE LOGGED WHAT SHOULD WE SEE IN MAIN CONTENT???
          //require "-----.php"
        }
        else if (isset($_SESSION['userId'])) {
          //do not render "you are logged in!" or "sign up successful!" on index
        }
        else {
          //login page if not logged in
          //if error exists in header, then format code with error warning
          $errorUid = "";
          $errorPwd = "";
          $isInvalidUid = "";
          $isInvalidPwd = "";
          if (isset($_GET['error'])){
            if ($_GET['error'] == "emptyfields") {
              $errorUid = "Empty fields";
              $errorPwd = "Empty fields";
              $isInvalidUid = "is-invalid";
              $isInvalidPwd = "is-invalid";
            }
            else if ($_GET['error'] == "wrongpwd") {
                $isInvalidPwd = "is-invalid";
                $errorPwd = "Wrong password";
            }
            else if ($_GET['error'] == "nouser") {
              $isInvalidUid = "is-invalid";
              $errorUid = "No such user exists";
            }
          }
          echo '
          <div class="wrapper-main">
            <section class="section-default">
          <div style="width: 500px; margin: auto">
          <h1>Login</h1>
          <form action="includes/login.inc.php" method="post" novalidate>

          <!--class="form-group" adds more space between form boxes-->
          <div class="form-group">
            <input type="text" name="mailuid" placeholder="Username" class="form-control '.$isInvalidUid.'">
            <div class="invalid-feedback">'.$errorUid.'</div>
          </div>

          <div class="form-group">
            <input type="password" name="pwd" placeholder="Password" class="form-control '.$isInvalidPwd.'">
              <div class="invalid-feedback">'.$errorPwd.'</div>
          </div>

          <div class="form-group">
            <button type="submit" name="login-submit" class="btn btn-success">Login</button>
          </div>

          </form>
          </div>';
        }
        ?>
      </section>
    </div>
</main>

<?php
  require "footer.php"
?>

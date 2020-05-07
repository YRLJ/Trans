<!doctype html>
<html lang="en">

<?php include_once 'model/header.php'; ?>

<body style="background-color: #f8f9fa;">

  <?php include_once 'model/navbar.php'; ?>
  <?php

  if (!isset($_SESSION)) {
    session_start();
  }
  if (isset($_GET['page']) && $_GET['page'] == "login") {
    include_once 'view/login.php';
  }
  if (isset($_GET['page']) && $_GET['page'] == "signup") {
    include_once 'view/signup.html';
  }
  if (isset($_GET['page']) && $_GET['page'] == "logout") {
    include_once 'model/signout.php';
  }
  if (isset($_GET['page']) && $_GET['page'] == "offers") {
    include_once 'view/offers.php';
  }
  if (isset($_SESSION['username']) && isset($_GET['page']) && $_GET['page'] == "test") {
    include_once "view/tests.php";
  }
  if (isset($_SESSION['type']) && $_SESSION['type'] == "admin" && isset($_GET['page']) && $_GET['page'] == "admin") {
    include_once 'model/admin.php';
  }
  if(isset($_GET['page']) && $_GET['page'] == "result"){
    include_once 'view/results.php';
  }
  if(isset($_GET['page']) && $_GET['page'] == "results" && isset($_SESSION['type']) && $_SESSION['type'] == "admin"){
    include_once 'view/resultadmin.php';
  }

  if (!isset($_GET['page'])) {
    if (isset($_GET['test']) && $_GET['test'] = "finished" && isset($_GET['score'])) {
      /* upload score bdd */
      $username = $_SESSION['username'];
      $score = $_GET['score'];
      $cnnx  = new PDO('mysql:dbname=ffd;host=localhost', 'root', 'root');
      $sql = "UPDATE resultats SET resultat_video = ".$score." WHERE username = \"".$username."\"";
      $tmt = $cnnx->query($sql);
      $_SESSION['tests'] = "true";
    } else {
      if (isset($_GET['quizzresult'])) {
        include_once 'model/quizzresult.php';
      } else {
        include_once 'view/offers.php';
      }
    }
  }


  include_once 'view/footer.php';
  ?>

</body>

</html>
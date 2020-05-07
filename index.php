<!doctype html>
<html lang="en">
  <head>
  </head>
  <body style="background-color: #f8f9fa;">
      <?php include_once "model/header.php"; ?>
      <?php include_once "model/navbar.php"; ?>
    
    <?php
    if(isset($_GET['page'])){
     if(isset($_GET['page']) && $_GET['page'] == "careers"){
      header('location: /trans/careers/index.php');

    }
     if(isset($_GET['page']) && $_GET['page'] == "pricing"){
      include_once('view/pricing.html');

    }
    if(isset($_GET['page']) && $_GET['page'] == "facilities"){
      include_once('view/facilities.html');

    }
  }else{
    include_once('view/aboutus.html');
  }


  include_once('model/footer.php');
    ?>

    
  </body>
</html>
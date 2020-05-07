<!DOCTYPE html>
<html>

<head></head>

<body>
    <div class="container text-center">
        <style>
            .bar-gradient {
                background-color: #1fc8db;
                background-image: linear-gradient(141deg, #9fb8ad 0%, #1fc8db 51%, #2cb5e8 75%) !important;
                color: white;
            }
        </style>
        <?php
        $firstname = null;
        $lastname = null;
        $score1 = 0;
        $score2 = 0;
        if (!isset($_SESSION)) {
            session_start();
        }
        $cnnx  = new PDO('mysql:dbname=ffd;host=localhost', 'root', 'root');
        $sql = $cnnx->prepare("SELECT firstname , lastname FROM users WHERE username = :username");
        $sql->execute([':username' => $_SESSION['username']]);
        $results = $sql->fetchAll();
        foreach ($results as $result) {
            $firstname = $result['firstname'];
            $lastname = $result['lastname'];
        }
        $sql = $cnnx->prepare("SELECT * FROM resultats WHERE username = :username");
        $sql->execute([':username' => $_SESSION['username']]);
        $results = $sql->fetchAll();
        foreach ($results as $result) {
            $score1 = $result['resultat_quizz'];
            $score2 = $result['resultat_video'];
        }
        $cnnx = null;
        if($score1 == null){
            $score1 = 0;
        }
        if($score2 == null){
            $score2 = 0;
        }
        
        echo "<h2>" . $firstname . " <br>
        ". $lastname . "</h2> <br><br>";
        echo "<h1>QCM</h1>";
        echo "<div class=\"progress\">
        <div class=\"progress-bar bar-gradient\" role=\"progressbar\" aria-valuenow=\"70\"
        aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width:".$score1."%\">".$score1."%
          
        </div>
      </div>";
        echo "<br><br><hr><br><br>";
        echo "<h1>Videos</h1>";
        echo "<div class=\"progress\">
        <div class=\"progress-bar bar-gradient\" role=\"progressbar\" aria-valuenow=\"70\"
        aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width:".$score2."%\">
          ".$score2."%
        </div>
      </div>";







        ?>
        <br>
        <br>
        <br>
    </div>
</body>

</html>
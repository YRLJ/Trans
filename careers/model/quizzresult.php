<?php
if (!isset($_SESSION)) {
    session_start();
}
if (isset($_GET['quizzresult'])) {
    $score = $_GET['quizzresult'];
    $username = $_SESSION['username'];
    echo "<script>console.log(\"".$username."\")</script>";
    $cnnx  = new PDO('mysql:dbname=ffd;host=localhost', 'root', 'root');
    $sql = "INSERT INTO resultats (username, resultat_quizz) VALUES (:username , :score )";
    $tmt = $cnnx->prepare($sql);
    
    $tmt->execute([ ":username"=>$username , ":score"=>$score]);
    print_r($tmt);
    $cnnx = null;


    header("location: index.php?page=test&quizzvideo=start");
}

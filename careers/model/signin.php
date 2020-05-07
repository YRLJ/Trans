<?php
if(!isset($_SESSION)){
    session_start();
}
function login($username, $password)
{
    $cnnx = new PDO('mysql:dbname=ffd;host=localhost', 'root', 'root');
    $sql = $cnnx->prepare("SELECT type , username FROM `USERS` WHERE username = :username AND password = :password ");
    $sql->execute([':username'=>$username, ':password'=>$password]);
    $type = $sql->fetchAll();
    foreach ($type as $types) {
        //if($types['type']=="" && $types['username']=="")   header('location: ../index.php');
        $_SESSION['type'] = $types['type'];
        $_SESSION['username'] = $types['username'];
    }
    if (isset($_SESSION['type']) && isset($_SESSION['username'])) {
        //echo "<p>".$_SESSION['type']." | ".$_SESSION['username']."</p>";
        header('location: ../index.php');
    }
    $cnnx = null;
}








if (isset($_POST['username']) && isset($_POST['password'])) {
    login($_POST['username'], $_POST['password']);
}



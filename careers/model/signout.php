<?php

if(!isset($_SESSION)){
    session_start();
}
if(isset($_SESSION)){
    $_SESSION['type'] = null;
    $_SESSION['username'] = null;
    $_SESSION['tests'] = null;
}

header("location: ../index.php");

?>
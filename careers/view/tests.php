<!DOCTYPE html>
<html lang="en">

<head>
</head>

<body>
    <?php
    if (!isset($_SESSION)) {
        session_start();
    }

    if (isset($_SESSION['tests'])) {
        include_once 'view/testerror.html';
    }




    ?>
    <style>
        .btn-gradient {
            background-color: #1fc8db;
            background-image: linear-gradient(141deg, #9fb8ad 0%, #1fc8db 51%, #2cb5e8 75%);
            color: white;

        }

        button {
            margin-top: 5%;
            margin-bottom: 5%;
        }



        .rdiogrp {
            display: inline-block;
            margin-left: 3%;
            margin-right: 3%;
        }

        .video {
            margin-top: 3%;
            margin-bottom: 8%;
        }

        .testctnr {
            margin-bottom: 6%;

        }
    </style>
    <div class="container testctnr text-center">
        <?php
        if (!isset($_SESSION['tests'])) {
            if (isset($_GET['quizzvideo']) && $_GET['quizzvideo'] == true) {
                include_once 'view/videoplayer.php';
            }else{
            if (isset($_GET['quizz']) && $_GET['quizz'] == true) {
                include_once 'view/quizz.html';
            } else {
                echo "<div class=\"container video rounded embed-responsive embed-responsive-16by9\">
    <iframe class=\"rounded embed-responsive-item \" src=\"https://www.youtube.com/embed/WE7bw89Gc_4?rel=0\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen autoplay></iframe>
    </div>  
    <a class=\"btn btn-gradient\" href=\"index.php?page=test&quizz=true\">Demarrer</a>";
            }
        }
        }

        ?>
    </div>
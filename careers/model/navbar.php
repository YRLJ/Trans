<!DOCTYPE html>
<html>
<link rel="stylesheet" href="view/style.css">

<head></head>

<body>

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="../index.php"><img src="../icon.svg" height="60px"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="nav-link" href="index.php?page=offers">Offres</a>
                </li>
                <?php

                if (!isset($_SESSION)) {
                    session_start();
                }
                if(isset($_SESSION['type'])){
                    if($_SESSION['type'] == "user"){
                        echo " <li class=\"nav-item\">
                        <a class=\"nav-link\" href=\"index.php?page=test\">Tests</a>
                    </li>";
                    
                    echo " <li class=\"nav-item\">
                        <a class=\"nav-link\" href=\"index.php?page=result\">Resultats</a>
                    </li>";
                    }
                    if($_SESSION['type'] == "admin"){
                        echo " <li class=\"nav-item\">
                        <a class=\"nav-link\" href=\"index.php?page=admin\">Generer Login</a>
                    </li>";
                    echo " <li class=\"nav-item\">
                        <a class=\"nav-link\" href=\"index.php?page=results\">Consulter Resultats</a>
                    </li>";
                        
                    }
                }


                ?>
            </ul>
        </div>
        
        <?php 

        if(isset($_SESSION['type'])){
            echo "
            
            <a class=\"btn btn-gradient\" href=\"index.php?page=logout\" >Log Out</a>"
        ;

        }
        else{
            echo "
            <a class=\"btn btn-gradient\" href=\"index.php?page=login\" >Sign In</a>
        ";
        }
        

        ?>
       
    </nav>
</body>

</html>
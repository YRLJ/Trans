<!DOCTYPE html>
<html>
    <head></head>
    <body>
        <?php 

        $anscount = 0 ;
            if(isset($_POST['Q1']) && $_POST['Q1'] == 1 ){
                $anscount++;
            }
            if(isset($_POST['Q2']) && $_POST['Q2'] == 0 ){
                $anscount++;
            }
            if(isset($_POST['Q3']) && $_POST['Q3'] == 0 ){
                $anscount++;
            }
            if(isset($_POST['Q4']) && $_POST['Q4'] == 1 ){
                $anscount++;
            }
            if(isset($_POST['Q5']) && $_POST['Q5'] == 0 ){
                $anscount++;
            }
            if(isset($_POST['Q6']) && $_POST['Q6'] == 2 ){
                $anscount++;
            }
            if(isset($_POST['Q7']) && $_POST['Q7'] == 2 ){
                $anscount++;
            }
            if(isset($_POST['Q8']) && $_POST['Q8'] == 2 ){
                $anscount++;
            }
            if(isset($_POST['Q9']) && $_POST['Q9'] == 0 ){
                $anscount++;
            }
            if(isset($_POST['Q10']) && $_POST['Q10'] == 0 ){
                $anscount++;
            }
            if(isset($_POST['Q11']) && $_POST['Q11'] == 0 ){
                $anscount++;
            }
            if(isset($_POST['Q12']) && $_POST['Q12'] == 1 ){
                $anscount++;
            }
            if(isset($_POST['Q13']) && $_POST['Q13'] == 0 ){
                $anscount++;
            }
            if(isset($_POST['Q14']) && $_POST['Q14'] == 0 ){
                $anscount++;
            }
            if(isset($_POST['Q15']) && $_POST['Q15'] == 1 ){
                $anscount++;
            }
            if(isset($_POST['Q16']) && $_POST['Q16'] == 1 ){
                $anscount++;
            }
            if(isset($_POST['Q17']) && $_POST['Q17'] == 0 ){
                $anscount++;
            }
            if(isset($_POST['Q18']) && $_POST['Q18'] == 1 ){
                $anscount++;
            }
            if(isset($_POST['Q19']) && $_POST['Q19'] == 0 ){
                $anscount++;
            }
            if(isset($_POST['Q20']) && $_POST['Q20'] == 1 ){
                $anscount++;
            }
            $anspct = ($anscount/20)*100;
            //echo "<h2>Votre Score est: ".$anspct." %</h2>";
            $url = "location: ../index.php?quizzresult=".$anspct;
            header($url);
        ?>
    </body>
</html>
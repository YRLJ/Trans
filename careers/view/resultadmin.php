<!DOCTYPE html>
<html>

<head></head>

<body>
    <div class="container">
        <br>
        <br>
        <?php

        function getDB()
        {

            $cnnx  = new PDO('mysql:dbname=ffd;host=localhost', 'root', 'root');
            $sql = $cnnx->prepare("SELECT users.firstname , users.lastname , resultats.resultat_quizz , resultats.resultat_video  FROM users INNER JOIN resultats ON resultats.username = users.username ");
            $sql->execute();
            $resultsname = $sql->fetchAll();
            $cnnx = null;
            return $resultsname;
        }



        function display($array)
        {
            echo "<table class=\"table\">";
            echo "<tr>
                    <th>Prénom</th>
                    <th>Nom</th>
                    <th>QCM</th>
                    <th>Videos</th>
                
                </tr>";
            foreach ($array as $line) {
                echo "<tr>
                    <td>" . $line['firstname'] . "</td>
                    <td>" . $line['lastname'] . "</td>
                    <td>" . $line['resultat_quizz'] . "</td>
                    <td>" . $line['resultat_video'] . "</td>
                    </tr>";
            }
            echo "</table>";
        }

        display(getDB());

        ?>
        <br>
        <br>

    </div>

</body>

</html>
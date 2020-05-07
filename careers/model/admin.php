<!DOCTYPE html>
<html>

<head></head>

<body>
    <style>
        #generate{
            margin-top: 15%;
            margin-bottom:15%;
        }
        .btn-gradient{
            background-color:#1fc8db;
            background-image: linear-gradient(141deg, #9fb8ad 0%, #1fc8db 51%, #2cb5e8 75%);
            color: white;
            
        }
    </style>
    <div class="container text-center">
        <form id="generate" action="" method="POST">
            <input type="text" name="firstname" placeholder="first name" required>
            <br>
            <br>
            <input type="text" name="lastname" placeholder="first name" required>
            <br>
            <br>
            <input type="submit" class="btn btn-gradient" value="Generer Login">

        </form>

        <?php

        function generateLogins($firstname, $lastname)
        {

            $cnnx  = new PDO('mysql:dbname=ffd;host=localhost', 'root', 'root');
            $username = "";
            $password = "";
            $type = "user";
            $sql = $cnnx->prepare("INSERT INTO `users`(`username`, `firstname`, `lastname`, `password`, `type`) VALUES (:username,:firstname,:lastname,:password,:type)");
            $arrayletters = array("1", "2", "3", "4", "5", "6", "7", "8", "9", "a", "b", "c", "d", "e", "f", "g", "h", "i", "j", "k", "l", "m", "n", "o", "p", "q", "r", "s", "t", "u", "v", "w", "x", "y", "z");
            for ($i = 0; $i < 8; $i++) {
                $username = $username . $arrayletters[floor((rand() / getrandmax()) * count($arrayletters))];
            }
            for ($i = 0; $i < 8; $i++) {
                $password = $password . $arrayletters[floor((rand() / getrandmax()) * count($arrayletters))];
            }
            $sql->execute([':username'=>$username, ':password'=>$password, ':firstname'=>$firstname, 'lastname'=>$lastname, ':type'=>$type]);
            $cnnx = null;
            return array($username, $password);
        }


        if (isset($_POST['firstname']) && isset($_POST['lastname'])) {
            $results = generateLogins($_POST['firstname'], $_POST['lastname']);
            echo "<p>username: " . $results[0] . "</p>";
            echo "<p>password: " . $results[1] . "</p>";
        }


        ?>
    </div>
</body>

</html>
<!DOCTYPE html>
<head></head>
<body style="background-color: #f8f9fa;">
    <style>
         .noborder
        {

            border-style: hidden;
            border-color: white;
        }

 
    </style>
   
    <div style="padding-top:5%;" class="container-fluid">
        <div class="row h-100" style=" padding-left: 15%; padding-right: 15%;">
            <div style="padding-top:200px; padding-bottom:200px; margin-top: 5%; background-color:#1fc8db;; background-image: linear-gradient(141deg, #9fb8ad 0%, #1fc8db 51%, #2cb5e8 75%);" class="col-sm-12 my-auto rounded text-center">
                <form action="model/signin.php" method="POST">
                    <input class="rounded noborder"  type="text" name="username" placeholder="Username" required>
                    <br>
                    <br>
                    <input class="rounded noborder" type="password" name="password" placeholder="Password" required>
                    <br>
                    <br>
                    <br>
                    <button class="btn btn-light" type="submit">Sign in</button>
                
                </form>
            </div>
        </div>
    </div>
    <br>
    <br>
    <br>
    <br>
</body>
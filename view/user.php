<?php
    include('../model/connector.php');

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../dist/style.css">
    <link rel="stylesheet" href="scss/login.css">
    <title>User| name</title>
</head>

<body>
    <div class="wrapper">
        <div class="container main">
            <div class="row">
                <div class="col-md-6 login-image">
                    <!-------Image-------->
                    <img src="" alt="">
                    <div class="text">
                        <p>Join company developers <i>- company</i></p>
                    </div>
                </div>
                <div class="col-md-6 right">
                    <div class="input-box">
                        <header>Log in</header>
                        <div class="input-field">
                            <input type="text" class="input" id="email" required autocomplete="off">
                            <label for="email">User</label>
                        </div>
                        <div class="input-field">
                            <input type="password" class="input" id="password" required>
                            <label for="password">Password</label>
                        </div>
                        <div class="input-field">
                            <button type="submit" name='true' class="submit">To enter</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

  
</body>

</html>
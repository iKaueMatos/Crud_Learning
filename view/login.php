<?php
    include('../model/connector.php');

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./scss/login.css">
    <title>Login | name</title>
</head>
<body>

    <div class="wrapper">
        <div class="container main">
            <div class="row">
                <div class="col-md-6 side-image">
                    <!-------Image-------->
                    <div class="text">
                        <p>Join company developers <i>- company</i></p>
                    </div>
                </div>
                <div class="col-md-6 right">
                    <div class="input-box">
                        <header>Create account</header>
                        <div class="input-field">
                            <input type="text" class="input" id="text" required autocomplete="off">
                            <label for="email">Name</label>
                        </div>
                        <div class="input-field">
                            <input type="password" class="input" id="text" required>
                            <label for="password">Surname</label>
                        </div>
                        <div class="input-field">
                            <input type="password" class="input" id="text" required>
                            <label for="password">age</label>
                        </div>
                        <div class="input-field">
                            <input type="password" class="input" id="text" required>
                            <label for="password">user</label>
                        </div>
                        <div class="input-field">
                            <input type="password" class="input" id="password" required>
                            <label for="password">Password</label>
                        </div>
                        <div class="input-field">
                            <button type="submit" name='true' class="submit">Sign Up</button>
                        </div>
                        <div class="signin">
                        <span>Already have an account? </span>
                                <a href="./user.php">Log in here</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

  
</body>

</html>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Login</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

    <style>
        .form-signin {
            width: 100%;
            max-width: 330px;
            padding: 15px;
            margin: auto;
            box-shadow: 0px 10px 10px rgba(0, 0, 0, .2);
        }

        body {
            display: -ms-flexbox;
            display: flex;
            -ms-flex-align: center;
            align-items: center;
            padding-top: 40px;
            padding-bottom: 40px;
            background-color: #f5f5f5;
        }

        html,
        body {
            height: 100%;
        }
    </style>
</head>

<body class="text-center">
    <div class="container">
        <form class="form-signin" action="aksi_login.php" method="POST">
        <h2 class="h3 mb-3 font-weight-normal">Login</h2>
        <?php
        if (isset($_SESSION['error_1'])) {
            echo "<div class='alert alert-danger'>{$_SESSION['error_1']}</div>";
        }
        if (isset($_SESSION['error_2'])) {
            echo "<div class='alert alert-danger'>{$_SESSION['error_2']}</div>";
        }
        
        ?>
        <label for="inputUsername" class="sr-only">Username</label>
        <input type="text" name="username" id="inputUsername" class="form-control mb-2" placeholder="Username" required="" autofocus="">
        <label for="inputPassword" class="sr-only">Password</label>
        <input type="password" name="password" id="inputPassword" class="form-control " placeholder="Password" required="">
        <div class="checkbox mb-3">
            <hr>
            <label>
                <input type="checkbox" value="true" name="setcookie"> Remember me
            </label>
        </div>
        <button class="btn btn-sm btn-primary btn-block mb-3" type="submit" name="login">Sign in</button>
        <a href="registrasi.php">Register</a>
    </form>
    </div>
    


    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
</body>

</html>
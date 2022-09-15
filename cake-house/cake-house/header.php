<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="./css/bootstrap.min.css">
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="./css/slick.css">
    <link rel="stylesheet" href="./css/slick-theme.css">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-T8Gy5hrqNKT+hzMclPo118YTQO6cYprQmhrYwIiQ/3axmI1hQomh7Ud2hPOy8SP1" crossorigin="anonymous">
    <title>Cake House</title>
  </head>
<body>

<style>
    .header {
        height: 80px;
        padding-top: 10px;
        position: fixed;
        width: 100%;
        z-index: 10;
        background-color: #fff;
        box-shadow: 0px 3px 5px rgb(100 100 100 / 49%);
    }

    .navbar-light .navbar-nav .nav-link {
        font-weight: 600;
        margin: 0 15px;
        text-transform: uppercase;
        color: #000;
        font-size: 12px;
        letter-spacing: 1px;
    }

    .login {
        border: 1px solid #000;
        width: 100px;
        text-align: center;
        margin: 0 2px !important;
    }

    .register {
        border: 1px solid #000;
        width: 100px;
        text-align: center;
        margin: 0 2px !important;
    }
</style>

<div class="header">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <nav class="navbar navbar-expand-lg navbar-light" style="align-items: baseline;">
                    <img src="assets/logo.png" class="logo" alt="" style="width: 180px; margin: auto 0">
                    <button class="navbar-toggler" type="button" data-toggle="collapse"
                        data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav ml-auto">
                            <li class="nav-item">
                                <a class="nav-link" href="index.php">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="shop.php">Shop</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="contact.php">Contact</a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    My Account
                                </a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="login.php">Login</a>
                                    <a class="dropdown-item" href="register.php">Register</a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
    </div>
</div>


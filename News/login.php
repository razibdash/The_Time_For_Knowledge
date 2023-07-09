<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>newsBD</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div class="header">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="logo">
                        <span><a href="index.php">NewsBD</a></span>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="login">
                        <ul>
                            <li><a href="login.php">Login</a></li>
                            <li><a href="register.php">Register</a></li>
                            <li> <form action="" method="post">
                            <input type="text" name="search" value="Search" id="">
                        </form></li>
                        </ul>
                       
                    </div>
                </div>
            </div>
        </div>
    </div>
    <section class="menu_section">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                   <?php
                   require("menu_link.php");
                   ?>
                </div>
            </div>
        </div>
    </section>

    <section id="login">
   <div class="container">
    <div class="row">
        <div class="col-md-6">
        <div class="login_form">
                    <form action="php_core/login_core.php?login=true" method="post">
                    <div class="studen">
                    <span class='login-icon-avater'><i class="bi bi-person-fill-lock"></i></span>
                        <h2>Login..</h2>
                    </div>
                        <div class="mb-3 mt-3">
                            <label for="email" class="form-label">Email:</label>
                            <input type="email" class="form-control in-field" id="email" placeholder="Enter email" name="email" required>
                        </div>
                        <div class="mb-3">
                            <label for="pwd" class="form-label">Password:</label>
                            <input type="password" class="form-control in-field" id="pwd" placeholder="Enter password" name="pswd" required>
                        </div>
                        <div class="form-check mb-5">
                            <label class="form-check-label">
                            <input class="form-check-input" type="checkbox" name="remember"> Remember me
                            </label>
                        </div>
                        <input type="submit" name="submit" class="d-block m-auto btn btn-success btn-lg submit-btn" value="submit" id="">
                        <a class="froget-pass m-3" href="">Forget Password?</a>
                        </form>
                    </div>
        </div>
        <div class="col-md-6">
           <div class="img_vector">
            <img class="img_pic" src="image/login.png" alt="">
           </div>
        </div>
    </div>
   </div>
    </section>
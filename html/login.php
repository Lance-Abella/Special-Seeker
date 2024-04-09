<?php


?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="icon" href="../images/logo-orig.png" type="image">
        <link rel="stylesheet" href="../bootstrap.min.css">
        <link rel="stylesheet" href="../css/login.css" type="text/css">
        <title>Login</title>
    </head>
    <body>
        <div class="container">
            <div class="row">
                <div class="col img-container">
                    <img src="../images\login-page.png" alt="" id="img-login">
                </div>
                <div class="col login-form">
                    <img src="../images/logo-orig.png" alt="" class="logo">
                    <label for="inputPassword5" class="form-label"></label>
                    <input class="form-control" type="text" placeholder="Username" aria-label="default input example" name="username">
                    <label for="inputPassword5" class="form-label"></label>
                    <input type="password" id="inputPassword5" class="form-control" placeholder="Password" aria-describedby="passwordHelpBlock" name="password">
                    <form action="processlogin.php" method="post">
                        <button type="button" class="btn btn-light">Login</button>
                    </form>
                    <hr class="horizontal-line">
                    <p class="acc-check">Don't have an account?</p>
                    <button type="button" class="btn btn-light" id="signup">Sign-up</button>
                </div>
            </div>
        </div>
        <script src="../bootstrap.bundle.min.js"></script>
        <script>
            const passwordField = document.getElementById("inputPassword5");
            const togglePassword = document.querySelector(".password-toggle-icon i");

            togglePassword.addEventListener("click", function () {
            if (passwordField.type === "password") {
                passwordField.type = "text";
                togglePassword.classList.remove("fa-eye");
                togglePassword.classList.add("fa-eye-slash");
            } else {
                passwordField.type = "password";
                togglePassword.classList.remove("fa-eye-slash");
                togglePassword.classList.add("fa-eye");
            }
            });
        </script>
    </body>
</html>
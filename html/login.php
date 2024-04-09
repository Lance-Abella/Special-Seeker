<?php
    if(isset($_POST["signup-btn"])) {
        header('Location: ..\html\registration.php');
        exit();
    }

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="icon" href="../images/logo-orig.png" type="image">
        <link rel="stylesheet" href="../bootstrap.min.css">
        <link rel="stylesheet" href="../css/login.css" type="text/css">
        <script defer src="../bootstrap.bundle.min.js"></script>
        <title>Login</title>
    </head>
    <body>
        <!-- <div class="container"> -->
            <div class="img-container">
            <img src="../images/login-page.png" class="img-fluid" alt="image">
            </div>
            <div class="form-container">
                <img src="../images/logo-orig.png" alt="" class="logo">

                <form action="../processlogin.php" method="post">

                <div class="form-floating mb-3">
                    <input type="text" class="form-control" id="floatingInput" placeholder="Username" name="username">
                    <label for="floatingInput">Username</label>
                </div>
                <div class="form-floating">
                    
                    <input type="password" class="form-control" id="floatingPassword" placeholder="Password" name="password">
                    <label for="floatingPassword">Password</label>
                    
                        <button type="submit" class="btn btn-light" id="login" name="login-btn">Login</button>
                        </form>
                    <hr class="horizontal-line">
                    <p class="acc-check">Don't have an account?</p>
                    <form action="" method="post">
                    <button type="submit" class="btn btn-light" id="signup" name="signup-btn">Sign-up</button>
                    </form>
                </div>
                
            </div>

        <!-- </div> -->


        
        <script>

        </script>
    </body>
</html>
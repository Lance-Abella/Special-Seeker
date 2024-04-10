<?php
    include_once("db.php");
    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["login-btn"])) {
        header('Location: home.php');
        exit();
        // $user_name = $_POST["username"];
        // $user_password = $_POST["password"];

        // try {
        //     $stmt = $conn->prepare("SELECT password FROM users WHERE username = :username");
        //     $stmt->bindParam(':username', $user_name, PDO::PARAM_STR);
        //     $stmt->execute();
        //     $result = $stmt->fetch(PDO::FETCH_ASSOC);

        //     if ($result && password_verify($user_password, $result['password'])) {
        //         echo "<script>confirm('You successfully logged in!'); window.location='home.php';</script>";

        //     } else {
        //         echo "<script>confirm('Login failed!'); window.location='login.php';</script>";
        //     }
        // } catch (PDOException $e) {
        //     echo "Error: " . $e->getMessage();
        // } finally {
        //     $conn = null;
        // }
    }
    if(isset($_POST["signup-btn"])) {
        header('Location: registration.php');
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
                <form action="" method="post">
                    <div class="logo-container">
                        <img src="../images/logo-orig.png" alt="" class="logo">
                    </div>
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="floatingInput" placeholder="Username" name="username">
                        <label for="floatingInput">Username</label>
                    </div>
                    <div class="form-floating">
                        <input type="password" class="form-control" id="floatingPassword" placeholder="Password" name="password">
                        <label for="floatingPassword">Password</label>
                            <button type="submit" class="btn btn-light" id="login" name="login-btn">Login</button>
                        <hr class="horizontal-line">
                        <p class="acc-check">Don't have an account?</p>
                            <button type="submit" class="btn btn-light" id="signup" name="signup-btn">Sign-up</button>
                    </div>
                </form>
            </div>

        <!-- </div> -->


        
        <script>

        </script>
    </body>
</html>
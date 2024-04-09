<?php
include_once("db.php");

// if(isset($_POST["login-btn"])) {

// }

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["login-btn"])) {

    $user_name = $_POST["username"];
    $user_password = $_POST["password"];

    try {
        $stmt = $conn->prepare("SELECT password FROM users WHERE username = :username");
        $stmt->bindParam(':username', $user_name, PDO::PARAM_STR);
        $stmt->execute();
        $result = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($result && password_verify($user_password, $result['password'])) {
            echo "<script>confirm('You successfully logged in!'); window.location='student-listing.php';</script>";

        } else {
            echo "<script>confirm('Login failed!'); window.location='../Special-Seeker/html/login.php';</script>";
        }
    } catch (PDOException $e) {
        echo "Error: " . $e->getMessage();
    } finally {
        $conn = null;
    }
}

// if(isset($_POST["signup-btn"])) {
//     header('Location: ..\html\registration.php');
//     exit();
// }
?>


<!-- <!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="icon" href="../Special-Seeker/images/logo-new.png" type="image">
        <title>Login</title>
    </head>
    <body>
        
    </body>
</html> -->
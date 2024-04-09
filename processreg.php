<?php
include_once("db.php");

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
      
        
        $user_password = password_hash($_POST['password'], PASSWORD_BCRYPT);
        $first_name = $_POST['firstname'];
        $last_name = $_POST['lastname'];
        $birth_date = $_POST['birthdate'];
        $user_sex = $_POST['sex'];
        $user_email = $_POST['email'];

        $stmt = $conn->prepare("INSERT INTO users (username, password, firstname, lastname, birthdate, sex, email) VALUES (:username, :password, :firstname, :lastname, :birthdate, :sex, :email)");
        $stmt->bindParam(':username', $user_name);
        $stmt->bindParam(':password', $user_password);
        $stmt->bindParam(':firstname', $first_name);
        $stmt->bindParam(':lastname', $last_name);
        $stmt->bindParam(':birthdate', $birth_date);
        $stmt->bindParam(':sex', $user_sex);
        $stmt->bindParam(':email', $user_email);
        $stmt->execute();
        
        echo "<script>confirm('You successfully created an account!'); window.location='login.php';</script>";
        header("Location: login.php"); 
    }
    $conn = null;

?>
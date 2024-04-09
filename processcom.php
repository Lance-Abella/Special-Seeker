<?php
include_once("db.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $name = $_POST['comName'];
    $desc = $_POST['comDesc'];    

if (isset($_FILES["image"]) && $_FILES["image"]["error"] == 0) {
    $img = "../images/"; 
    $targetFile = $img . basename($_FILES["image"]["name"]);
    
    if (move_uploaded_file($_FILES["image"]["tmp_name"], $targetFile)) {
        echo "The file ". basename( $_FILES["image"]["name"]). " has been uploaded.";
        
        $stmt = $conn->prepare("INSERT INTO companies (com_name, com_desc, com_img) VALUES (:com_name, :com_desc, :com_img)");
        $stmt->bindParam(':com_name', $name);
        $stmt->bindParam(':com_desc', $desc);
        $stmt->bindParam(':com_img', $targetFile);
        $stmt->execute();
       
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
} else {
    echo "No file was uploaded.";
}
}
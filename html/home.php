<?php

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="icon" href="../images/logo-orig.png" type="image">
        <link rel="stylesheet" href="../bootstrap.min.css">
        <link rel="stylesheet" href="../css/home.css" type="text/css">
        <title>Home</title>
    </head>
    <body>
    <nav class="navbar sticky-top navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="#"><img src="../images/logo-orig.png" alt="" id="logo"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="home.php" id="home">Home</a>
                    </li>
                    <li class="nav-item">
                            <a class="nav-link" href="">Forum</a>
                        </li>
                    <li class="nav-item">
                        <a class="nav-link" href="companies.php" id="companies">Companies</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#" id="train-btn">Train Now</a>
                    </li>
                    <li class="nav-item dropdown">
                        <div class="dropdown">
                            <button class="btn dropdown-toggle drop" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false"></button>
                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                <li><a class="dropdown-item" href="#">Profile</a></li>
                                <li><a class="dropdown-item" href="#">Settings</a></li>
                                <li><a class="dropdown-item" href="login.php">Logout</a></li>
                            </ul>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
        <div class="below-nav">
            <div class="body-container ">
                <h3 class="header-home">Find opportunity in Uniqhire!</h3>
                <p class="mb-5">Welcome to Uniqhire, where every ability finds opportunity! Creating bridges to people with special needs, fostering inclusivity and celebrating diverse talents. Join us in building a world where everyone thrives!</p>
                <div class="btns">
                    <a class="navbar-brand apptrain-btns" href="companies.php" id="apply-btn">Apply</a>
                    <a class="navbar-brand apptrain-btns" href="#" id="train-btn">Train Now</a>
                </div>
            </div>
            <div class="img-container">
                <img src="../images\home-img.png" alt="" id="home-img">
            </div>
        </div>
        
    </body>
</html>
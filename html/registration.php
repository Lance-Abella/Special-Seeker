<?php
    // if(isset($_POST["login-btn"]))
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration</title>
    <link rel="icon" href="../images/logo-orig.png" type="image">
    <link rel="stylesheet" href="../bootstrap.min.css">
    <link rel="stylesheet" href="../css\registration.css">
    <script defer src="../bootstrap.bundle.min.js"></script>
</head>
<body>
<nav class="navbar sticky-top navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid">
                <a class="navbar-brand" href="#"><img src="../images/logo-orig.png" alt="" id="logo"></a>
                
            </div>
        </nav>
    <div class="below-nav">
        <div class="container-fluid mb-5">
            <p class="p-header">Train and Find Opportunity</p>
        </div>

        <form class="row g-4 custom-padding">
            <div class="col-md-6">
                <input type="text" class="form-control" placeholder="First name" aria-label="First name">
            </div>

            <div class="col-md-6 justify-content-center">
                <input type="text" class="form-control" placeholder="Last name" aria-label="Last name">
            </div>

            <div class="col-md-6">
                <input type="text" class="form-control" placeholder="Username" aria-label="Username">
            </div>

            <div class="col-md-6">
                <input type="password" class="form-control" placeholder="Password" aria-label="Password">
            </div>

            <div class="col-md-3">
                <input type="date" class="form-control" placeholder="Birthdate" aria-label="Birthdate">
            </div>

            <div class="col-md-3">            
                <select class="form-control">
                <option selected disabled hidden>Sex</option>
                <option>Male</option>
                <option>Female</option>
                </select>
            </div>

            <div class="col-md-6 mb-4">
                <input type="email" class="form-control" placeholder="Email" aria-label="Email">
            </div>

            <div class="col checkbox mb-3">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="gridCheck">
                    <label class="form-check-label" for="gridCheck">
                        I agree to the <span>UniqHire Terms of Service,</span> including <span>User Agreement,</span> and <span>Privacy Policy</span>
                    </label>
                </div>
            </div>

            <div class="col-12 d-flex justify-content-center mb-3">
                <button type="submit" class="btn btn-primary createbtn">Create Account</button>
            </div>
        </form>
        <p class="message">Already have an account? <a class="link" href="login.php">Login</a></p>
    </div>
    
</body>
</html>
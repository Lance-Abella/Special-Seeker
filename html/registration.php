<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration</title>
    <link rel="icon" href="../images/logo-orig.png" type="image">
    <link rel="stylesheet" href="../bootstrap.min.css">
    <script defer src="../bootstrap.bundle.min.js"></script>

    <style>
       @import url('fonts.css');

        * {
            font-family: 'DMSans', sans-serif;
            color: #8EA681;
        }        

        .logo{
            max-width: 150px;
            margin-left: -30px;
            margin-top: -20px;
        }

        .p-header{
            color: #8EA681;
            font-size: 50px;
            text-align: center;
            margin-top: -5px;
        }

        .form-control{
            height: 50px;
            background-color: rgba(142, 166, 129, 0.5);
            border: 1px solid #8EA681;             
        }

        .custom-padding {
            padding-left: 300px;
            padding-right: 300px;
        }

        span {
            font-weight: bold;
        }

        .form-check-label{
            white-space: normal;
        }

        .message{
            text-align: center;
        }

        .link{
            text-decoration: none;
            color: #8EA681;
            font-weight: bold;
        }

        .createbtn{
            background-color: #8EA681;
            color: white;
            border: none;
            font-weight: bold;
        }      

        .checkbox{
            width: 500px;
            margin-left: 250px;
        }

        ::placeholder {
            color: #8EA681; 
        }
    </style>
</head>
<body>
    <div class="container header">
        <img src="../images/logo-orig.png" class="img-fluid logo" alt="image">
    </div>
    
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

        <div class="col-12 d-flex justify-content-center checkbox mb-3">
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
    <p class="message">Already have an account? <a href="" class="link">Login</a></p>
</body>
</html>
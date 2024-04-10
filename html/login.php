<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>USJ-R</title>
        <link rel="icon" href="../USJR/images/logo.png" type="image">
        <link rel="stylesheet" href="../bootstrap.min.css">
        <link rel="stylesheet" href="../css/home.css">
        <script defer src="../bootstrap.bundle.min.js"></script>
        <style>

            

            /* .formbtn1{
                width:100px;
                background-color: #8EA681;
                border-color: #8EA681;
            } */

            /* .formbtn1:hover{
                background-color: rgba(105, 121, 96, 1)
            } */

            /* .registerMsg{
                margin-top: 20px;
            } */

            /* .formbtn2{
                width:200px;
                margin-left: 10px; 
                text-decoration: none;
                color: rgba(105, 121, 96, 1);   
            } */

            .bg{
                /* height: 50px; */
                /* margin-top: 1%;
                margin-right: 18%;
                margin-left: -11.5  px; */
                /* height: 10px; */
                /* margin-right: 2%;
                height: 10%; */

            }

        </style>
    </head>
    <body>
        <nav class="navbar sticky-top navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid">
                <a class="navbar-brand" href="#"><img src="../images/logo-orig.png" alt="" id="logo"></a>
                
            </div>
        </nav>

        <div class="container welcomeMsg">
            <h2>Every Dream Matters: Nurturing Aspirations in Special Communities</h2>
        </div>

        <div class="container mainComponent">
        
            <!-- <div class="container formDiv">
                <h4>LOGIN</h4> -->
                <div class="entry">
                <form action="processlogin.php" method="post">
                    
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" name="username" id="username" required>
                            <label for="username">Username</label>
                        </div>

                        <div class="form-floating mb-3">
                            <input type="password" class="form-control" name="password" id="password" required>
                            <label for="password">Password</label>
                        </div>

                        <button type="submit" class="btn btn-primary formbtn1">Login</button><br>
                        <p class="registerMsg">Need an account?<span><a href="reguser.php" class="formbtn2">Register</a></span></p>
                    
                    
                </form>
                </div>
            <!-- </div> -->

            <div class="container bg">
                <img src="../images/login-page.png" class="img-fluid img" alt="image">
            </div>
            
        </div>


    </body>
</html>
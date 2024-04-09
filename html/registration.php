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
        }

        .header{
            /* padding-left: 20px; */
        }

        .logo{
            max-width: 150px;
            margin-left: -100px;
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

    <form class="row g-3">
        <div class="col-md-6 justify-content-center">
            <input type="text" class="form-control" placeholder="First name" aria-label="First name">
        </div>

        <div class="col-md-6 justify-content-center">
            <input type="text" class="form-control" placeholder="Last name" aria-label="Last name">
        </div>

        <div class="col-12">
            <input type="text" class="form-control" placeholder="Username" aria-label="Username">
        </div>

        <div class="col-12">
            <input type="text" class="form-control" placeholder="Password" aria-label="Password">
        </div>

        <div class="col-md-6">
            <input type="date" class="form-control" placeholder="Birthdate" aria-label="Birthdate">
        </div>

        <div class="col-md-4">
            <label for="inputState" class="form-label">State</label>
            <select id="inputState" class="form-select">
            <option selected>Choose...</option>
            <option>...</option>
            </select>
        </div>

        <div class="col-md-2">
            <label for="inputZip" class="form-label">Zip</label>
            <input type="text" class="form-control" id="inputZip">
        </div>

        <div class="col-12">
            <div class="form-check">
            <input class="form-check-input" type="checkbox" id="gridCheck">
            <label class="form-check-label" for="gridCheck">
                Check me out
            </label>
            </div>
        </div>

        <div class="col-12">
            <button type="submit" class="btn btn-primary">Sign in</button>
        </div>
    </form>
</body>
</html>
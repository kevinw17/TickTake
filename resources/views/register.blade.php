<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $title }}</title>

    <link rel="stylesheet" href="style.css">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css">

    <!-- Latest compiled and minified CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Latest compiled JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>

    <div class="container-fluid">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-4 col-12 " style="margin-top:14vh; ">
                    <h2 class="card-title text-center mb-4 text-capitalize ">Register</h2>
                </div>
            </div>
        </div>
    </div>

    <div class="container d-flex align-items-center justify-content-center" style="margin-top:4vh;">
        
        <form action="#">

            <div class="form-group">
                <label for="pwd">Name:</label>
                <input type="name" class="form-control" id="pwd" placeholder="Enter name" name="pwd">
            </div>

            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
            </div>

            <div class="form-group">
                <label for="pwd">Password:</label>
                <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pwd">
            </div>

            <div class="checkbox">
                <p class="card-title text-center mb-4 text-capitalize">Already Have an Account? 
                    <a href="#">
                        Login  here
                    </a></p>
            </div>
            <div class="col">
                <button class="btn btn-outline-primary col-md-7 card-title text-center mb-4 w-100" style="background-color: #4ECDC4">Register</button>
            </div>
            
        </form>
    </div>

</body>


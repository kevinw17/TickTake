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
    
    <div class="container">
        <h2 class="card-title text-center mb-4 text-capitalize">Sign In</h2>
        <form action="#">

            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
            </div>

            <div class="form-group">
                <label for="pwd">Password:</label>
                <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pwd">
            </div>

            <div class="checkbox">
                <label><input type="checkbox" name="remember"> Remember me</label>
                <p class="card-title text-center mb-4 text-capitalize">Don't have an account? 
                    <a href="#">
                        Register here
                    </a></p>
            </div>
            <div class="col">
                <button class="btn btn-outline-primary col-md-7 card-title text-center mb-4" style="background-color: #4ECDC4">Sign In</button>
            </div>
            
        </form>
    </div>

</body>


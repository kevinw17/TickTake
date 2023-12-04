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
    <!-- Navbar -->
      <nav class="navbar navbar-expand-lg navbar-dark shadow-sm" style="background-color: #1A535C">
        <div class="container">
          <a class="navbar-brand" href="#">TickTake</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" 
            aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <form class="d-flex ms-5">
            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search the event">
            <button class="btn" style="background-color: #4ECDC4" type="submit">Search</button>
          </form>
          <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav ms-auto">
              <a class="nav-link active" aria-current="page" href="#">Home</a>
              <a class="nav-link" href="#">About Us</a>
              <a class="nav-link" href="#">Contact Us</a>
              <a class="nav-link fw-bold">Hello, {{ $name }}</a>
            </div>
          </div> 
        </div>
      </nav>
    <!-- Navbar -->

    <!-- Container -->
    <div class="container">
        <div class="row">
            @yield('content')
        </div>
    </div>
    <!-- Container -->

    <!-- Footer -->
    <footer class="bg-body-tertiary text-center text-lg-start">
        <div class="text-center p-3 text-light" style="background-color: #1A535C">
            © 2023 TickTake.
            <i class="bi bi-instagram ms-2"></i>
            <i class="bi bi-youtube ms-2"></i>
            <i class="bi bi-twitter-x ms-2"></i>
        </div>
    </footer>
    <!-- Footer -->    
</body>
</html>
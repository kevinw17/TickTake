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

    {{-- font awesome link custom --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>

<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark shadow-sm" style="background-color: #1A535C">
        <div class="container">
          <a class="navbar-brand" href="/home">TickTake</a>
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
              <a class="nav-link {{ ($title === "Home") ? 'active' : '' }}" aria-current="page" href="/home">Home</a>
              <a class="nav-link {{ ($title === "About Us") ? 'active' : '' }}" href="/aboutUs">About Us</a>
              <a class="nav-link {{ ($title === "Contact Us") ? 'active' : '' }}" href="/contactUs">Contact Us</a>
              <a class="nav-link" href="/register">Register</a>
              <a class="nav-link" href="/login">Login<i class="bi bi-box-arrow-in-right"></i></a>
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
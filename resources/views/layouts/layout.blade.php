<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $title }}</title>

    <link rel="stylesheet" href="{{ asset('event_details.css')}}">

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
        <div class="container p-2">
          <a class="navbar-brand" href="/">TickTake</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" 
            aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav ms-auto">
              <a class="nav-link {{ ($title === "Home Page") ? 'active' : '' }}" aria-current="page" href="/">Home</a>
              <a class="nav-link {{ ($title === "About Us") ? 'active' : '' }}" href="/aboutUs">About Us</a>
              <a class="nav-link {{ ($title === "Contact Us") ? 'active' : '' }}" href="/contactUs">Contact Us</a>
              @auth
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Welcome, {{ auth()->user()->name }}
                  </a>
                  <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="/profile"><i class="bi bi-person-fill"></i> My Profile</a></li>
                    <li><hr class="dropdown-divider" href="#"></li>
                    <form action="/logout" method="POST">
                      @csrf
                      <button type="submit" class="dropdown-item"><i class="bi bi-box-arrow-right"></i> Logout</a></button>
                    </form>
                  </ul>
                </li>
              @else
                <a class="nav-link" href="/login"><i class="bi bi-box-arrow-in-right"></i> Login</a>
              @endauth
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
    <footer class="bg-body-tertiary text-center text-lg-start mt-5">
        <div class="text-center p-5 text-light" style="background-color: #1A535C">
            © 2023 TickTake.
            <i class="bi bi-instagram ms-2"></i>
            <i class="bi bi-youtube ms-2"></i>
            <i class="bi bi-twitter-x ms-2"></i>
        </div>
    </footer>
    <!-- Footer -->    
</body>
</html>
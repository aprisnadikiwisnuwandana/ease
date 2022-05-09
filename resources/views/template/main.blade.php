<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Mulish:wght@400;700&display=swap" rel="stylesheet">
    <link href="/css/main.css" rel="stylesheet" >
    @yield('css')

    <title>Hello, world!</title>
  </head>
  <body>

  <nav class="navbar container py-3  navbar-expand-lg navbar-light bg-transparent">
  <div class="container-fluid">
    <a class="navbar-brand" href="#"><img src="/images/logo.png" alt=""></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse " id="navbarNav">
      <ul class="navbar-nav ms-auto text-center text-left-md ">
        <li class="nav-item home" style="color: #1F1534;">
          <a class="nav-link px-0 pe-md-5" href="#">Home</a>
        </li>
        <li class="nav-item service">
          <a class="nav-link px-0 pe-md-5" href="#">Our Services <img src="/images/Vector.png" alt=""> </a>
        </li>
        <a href="">
            <li class="nav-item text-white login">
            <p class="btn-primary nav-link disabled">Login/Sign Up</p>
          </li></a>

      </ul>
    </div>
  </div>
</nav>

    @yield('content')


<footer style="background: linear-gradient(183.41deg, #67C3F3 -8.57%, #5A98F2 82.96%);
">
    <div class="container-fluid">
        <div class="row text-white justify-content-center">
            <div class="col-4 mr-5 logo">
                <h4 class="mb-4"><img src="images/ease.png" alt=""> <span>Ease</span> </h4>
                <p class="mb-5">Ease provides a convinient and practical
                    services for your mental health problems</p>
                <p>©Trafalgar PTY LTD 2020. All rights reserved</p>
            </div>
            <div class="col-2">
                <h5 class="mb-4">Company</h5>
                <p>About</p>
                <p>Testimonials</p>
                <p>Find a doctor</p>
                <p>Apps</p>
            </div>
            <div class="col-2">
                <h5 class="mb-4">Region</h5>
                <p>Indonesia</p>
                <p>Singapore</p>
                <p>Hongkong</p>
                <p>Canada</p>
            </div>
            <div class="col-2">
                <h5 class="mb-4">Help</h5>
                <p>Help center</p>
                <p>Contact support</p>
                <p>Instructions</p>
                <p>How it works</p>
            </div>
        </div>
    </div>
</footer>


        <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
  </body>
</html>

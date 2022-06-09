<nav class="navbar container-fluid py-3 mx-0 navbar-expand-lg navbar-light  fixed-top bg-white px-5" >
    <div class="container-fluid">
      <a class="navbar-brand" href="/#"><img src="/images/logo.png" alt=""></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse " id="navbarNav">
        <ul class="navbar-nav ms-auto text-center text-left-md ">
          <li class="nav-item home" style="color: #1F1534;">
            <a class="nav-link px-0 pe-md-4" href="/#">Home</a>
          </li>
          <div class="dropdown px-0 pe-md-4">
            <button class="btn dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
              Our Services
            </button>
            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
              <li><a class="dropdown-item" href="/consulting">Consulting</a></li>
              <li><a class="dropdown-item" href="/journaling">Journaling</a></li>
              <li><a class="dropdown-item" href="/meditation">Meditation</a></li>
            </ul>
          </div>
          @auth
          <div class="dropdown">
            <a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">

              {{auth()->user()->name}}



            </a>

            <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
              <li><a class="dropdown-item" href="/logout">Logout</a></li>
            </ul>
          </div>
          @else
          <a class="btn btn-secondary pt-2" href="/login" >

            Login / Sign Up



          </a>

          @endauth



        </ul>
      </div>
    </div>
  </nav>

@extends('template.main')

@section('css')
<link rel="stylesheet" href="/css/consulting-3.css">
@endsection

@section('content')

<div class="hero2">
    <h1>Consulting</h1>
</div>

<div class="container consulting-3">
    <div class="search d-flex flex-column justify-content-center">
        <h2>Psychologist</h2>
        <div class="d-flex justify-content-center">
            <img class="garis"  src="/images/garis.png" alt="" style="width: 56px;
        height: 2px;">
        </div>
        <div class="input-group mb-3">
            <input type="text" class="form-control" placeholder="Psychologist" aria-label="Username" aria-describedby="basic-addon1">
        </div>
    </div>
    <div class="search d-flex flex-column justify-content-center">
        <br>
        <h2>Topic</h2>
        <div class="d-flex justify-content-center">
            <img class="garis"  src="/images/garis.png" alt="" style="width: 56px;
        height: 2px;">
        </div>
        <div class="dropdown">
            <button class="btn btn-secondary text-left form-control dropdown-toggle mb-5" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                Choose a consulting topic
            </button>
            <ul class="dropdown-menu form-control mt-4" aria-labelledby="dropdownMenuButton1">
              <li><a class="dropdown-item" href="#">Kendali Emosi</a></li>
              <li><a class="dropdown-item" href="#">Pekerjaan</a></li>
              <li><a class="dropdown-item" href="#">Kecanduan</a></li>
              <li><a class="dropdown-item" href="#">Percintaan</a></li>
              <li><a class="dropdown-item" href="#">Keluarga</a></li>
              <li><a class="dropdown-item" href="#">Pendidikan</a></li>
            </ul>
          </div>
    </div>
    <br>
    <div class="search d-flex flex-column justify-content-center">
        <h2>Package</h2>
        <div class="d-flex justify-content-center">
            <img class="garis"  src="/images/garis.png" alt="" style="width: 56px;
        height: 2px;">
        </div>
        <div class="dropdown">
            <button class="btn btn-secondary text-left form-control dropdown-toggle mb-5" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                Choose a consulting package
            </button>
            <ul class="dropdown-menu form-control mt-4" aria-labelledby="dropdownMenuButton1">
              <li><a class="dropdown-item" href="#">Super Package</a></li>
              <li><a class="dropdown-item" href="#">Special Package</a></li>
              <li><a class="dropdown-item" href="#">Premium Package</a></li>
            </ul>
          </div>
          <div class="text-center">
            <button>Buy Now</button>
        </div>
</div>
</div>

@endsection

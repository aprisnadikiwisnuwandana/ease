@extends('template.main')

@section('css')
<link rel="stylesheet" href="css/meditation.css">
@endsection

@section('content')
    <div class="hero2">
        <h1>Meditation</h1>
    </div>

    <div class="container">
        <div class="search d-flex flex-column justify-content-center">
            <h2>Meditation Sound</h2>
            <div class="d-flex justify-content-center">
                <img class="garis"  src="/images/garis.png" alt="" style="width: 56px;
            height: 2px;">
            </div>
            <div class="input-group mb-3">
                <input type="text" class="form-control" placeholder="Search meditation..." aria-label="Username" aria-describedby="basic-addon1">
                <button type="button" class="btn btn-dark ms-3 py-2 px-4 rounded">Search</button>
            </div>
        </div>
    </div>
    <div class="container meditation">
        <h2><b>Top Picks</b></h2>
        <br>
        <div class="row">
            <div class="col">
              <a href="/" style="text-decoration: none; color:black">
                <div class="card">
                    <img src="/images/meditation-1.png" alt="">
                  </div>
              </a>
            </div>
            <div class="col">
              <div class="card">
                <img src="/images/meditation-2.png" alt="">
              </div>
            </div>
            <div class="col">
                <div class="card">
                    <img src="/images/meditation-3.png" alt="">
                </div>
              </div>
        </div>
        <br>
        <br>
        <div class="container meditation">
            <h2><b>Sleep</b></h2>
            <br>
            <div class="row">
                <div class="col">
                  <a href="/" style="text-decoration: none; color:black">
                    <div class="card">
                        <img src="/images/meditation-4.png" alt="">
                      </div>
                  </a>
                </div>
            </div>


    </div>

    </div>


@endsection

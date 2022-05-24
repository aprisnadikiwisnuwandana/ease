@extends('template.main')

@section('css')
<link rel="stylesheet" href="css/journaling.css">
@endsection

@section('content')
    <div class="hero2">
        <h1>Journaling</h1>
    </div>

    <div class="container">
        <div class="search d-flex flex-column justify-content-center">
            <h2>Journal Template</h2>
            <div class="d-flex justify-content-center">
                <img class="garis"  src="/images/garis.png" alt="" style="width: 56px;
            height: 2px;">
            </div>
            <div class="input-group mb-3">
                <input type="text" class="form-control" placeholder="Search template..." aria-label="Username" aria-describedby="basic-addon1">
                <button type="button" class="btn btn-dark ms-3 py-2 px-4 rounded">Search</button>
            </div>
        </div>
    </div>
    <div class="container journaling">
        <h2><b>Top Picks</b></h2>
        <br>
        <div class="row">
            <div class="col">
              <a href="/" style="text-decoration: none; color:black">
                <div class="card">
                    <img src="/images/template-1.png" alt="">
                    <div class="card-body">
                      <h5 class="card-title">Sweet Bulleting</h5>
                    </div>
                  </div>
              </a>
            </div>
            <div class="col">
              <div class="card">
                <img src="/images/template-2.png" alt="">
                <div class="card-body">
                  <h5 class="card-title">Black and Yellow</h5>
                </div>
              </div>
            </div>
            <div class="col">
                <div class="card">
                    <img src="/images/template-3.png" alt="">
                  <div class="card-body">
                    <h5 class="card-title">I am Grateful For</h5>
                  </div>
                </div>
              </div>
        </div>
        <br>
        <br>
        <div class="container journaling">
            <h2><b>Your Journal</b></h2>
            <br>
            <div class="row">
                <div class="col">
                  <a href="/journaling-2" style="text-decoration: none; color:black">
                    <div class="card">
                        <img src="/images/template-4.png" alt="">
                        <div class="card-body">
                          <h5 class="card-title">January</h5>
                        </div>
                      </div>
                  </a>
                </div>
            </div>


    </div>

    </div>


@endsection

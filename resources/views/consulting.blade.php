@extends('template.main')

@section('css')
<link rel="stylesheet" href="css/consulting.css">
@endsection

@section('content')
    <div class="hero2">
        <h1>Consulting</h1>
    </div>

    <div class="container">
        <div class="search d-flex flex-column justify-content-center">
            <h2>Psychologist</h2>
            <div class="d-flex justify-content-center">
                <img class="garis"  src="/images/garis.png" alt="" style="width: 56px;
            height: 2px;">
            </div>
            <div class="input-group mb-3">
                <input type="text" class="form-control" placeholder="Search psychologist..." aria-label="Username" aria-describedby="basic-addon1">
                <button type="button" class="btn btn-dark ms-3 py-2 px-4 rounded">Search</button>
            </div>
        </div>
    </div>
    <div class="container psycologist">
        <h2>All Psychologist</h2>
        <div class="row">
            <div class="col">
              <a href="/consulting-2" style="text-decoration: none; color:black">
                <div class="card">
                    <img src="/images/psychologist.png" alt="">
                    <div class="card-body">
                      <h5 class="card-title">Laura Theresia M. Psi</h5>
                      <p class="card-text">Psychologist</p>
                    </div>
                  </div>
              </a>
            </div>
            <div class="col">
              <div class="card">
                <img src="/images/psychologist.png" alt="">
                <div class="card-body">
                  <h5 class="card-title">Laura Theresia M. Psi</h5>
                  <p class="card-text">Psychologist</p>
                </div>
              </div>
            </div>
            <div class="col">
                <div class="card">
                    <img src="/images/psychologist.png" alt="">
                  <div class="card-body">
                    <h5 class="card-title">Laura Theresia M. Psi</h5>
                    <p class="card-text">Psychologist</p>
                  </div>
                </div>
              </div>
        </div>


        <div class="row mt-5">
        <div class="col">
            <div class="card">
            <img src="/images/psychologist.png" alt="">
            <div class="card-body">
                <h5 class="card-title">Laura Theresia M. Psi</h5>
                <p class="card-text">Psychologist</p>
            </div>
            </div>
        </div>
        <div class="col">
            <div class="card">
            <img src="/images/psychologist.png" alt="">
            <div class="card-body">
                <h5 class="card-title">Laura Theresia M. Psi</h5>
                <p class="card-text">Psychologist</p>
            </div>
            </div>
        </div>
        <div class="col">
            <div class="card">
                <img src="/images/psychologist.png" alt="">
                <div class="card-body">
                <h5 class="card-title">Laura Theresia M. Psi</h5>
                <p class="card-text">Psychologist</p>
                </div>
            </div>
            </div>
        </div>



    </div>


@endsection

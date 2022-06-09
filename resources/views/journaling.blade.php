@extends('template.main')

@section('css')
<link rel="stylesheet" href={{asset("css/journaling.css")}}>
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
            <form class="input-group mb-3" method="GET" action="/journaling/search">
                <input type="text" name="name" class="form-control" placeholder="Search template..." aria-label="Username" aria-describedby="basic-addon1">
                <button type="submit" class="btn btn-dark ms-3 py-2 px-4 rounded">Search</button>
            </form>
        </div>
    </div>
    <div class="container journaling">
        <h2><b>Top Picks</b></h2>
        <div class="row mt-4">

@if ($templatejournal->isEmpty())
<h1 class="text-center mt-1 text-muted">Not Found</h1>
@endif
            @foreach ($templatejournal as $j)
            <div class="col">
                <a href={{'/journaling/write/' . $j->id}}>
                    <div class="card">
                        <img src={{$j->picture}} style="width:379px; height:276px; object-fit: cover;" alt="">
                        <div class="card-body">
                            <h5 class="card-title">{{$j->journal_name}}</h5>
                        </div>
                    </div>
                </a>
            </div>
            @endforeach
        </div>
        {{-- <div class="row mt-4">
            <div class="col-4">
                <a href="/journaling-2" style="text-decoration: none; color:black">
                  <div class="card">
                      <img src="/images/template-1.png" alt="">
                      <div class="card-body">
                        <h5 class="card-title">Sweet Bulletting</h5>
                      </div>
                    </div>
                </a>
              </div>
              <div class="col-4">
                <a href="/journaling-2" style="text-decoration: none; color:black">
                  <div class="card">
                      <img src="/images/template-2.png" alt="">
                      <div class="card-body">
                        <h5 class="card-title">Black and Yellow</h5>
                      </div>
                    </div>
                </a>
              </div>
              <div class="col-4">
                <a href="/journaling-2" style="text-decoration: none; color:black">
                  <div class="card">
                      <img src="/images/template-3.png" alt="">
                      <div class="card-body">
                        <h5 class="card-title">I am Grateful For</h5>
                      </div>
                    </div>
                </a>
              </div> --}}

        <div class="container journaling mt-5">
            <h2><b>Your Journal</b></h2>
            <br>
            <div class="row">

@if ($journal->isEmpty())
<h1 class="text-center mt-1 text-muted">Not Found</h1>
@endif
                @foreach ($journal as $j)
                <div class="col">
                    <a href={{'/journaling/write/' . $j->id}}>
                        <div class="card">
                            <img src={{$j->picture}} style="width:379px; height:276px; object-fit: cover;" alt="">
                            <div class="card-body">
                                <h5 class="card-title">{{$j->journal_name}}</h5>
                            </div>
                        </div>
                    </a>
                </div>
                @endforeach

            </div>


    </div>

    </div>


@endsection

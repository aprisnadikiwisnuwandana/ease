@extends('template.main')

@section('css')
<link rel="stylesheet" href={{asset("css/meditation.css")}}>
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
            <form class="input-group mb-3" method="GET" action="/meditation/search">
                <input type="text" name="name" class="form-control" placeholder="Search meditation..." aria-label="Username" aria-describedby="basic-addon1">
                <button type="submit" class="btn btn-dark ms-3 py-2 px-4 rounded">Search</button>
            </form>
        </div>
    </div>
    <div class="container meditation">
        <h2><b>Top Picks</b></h2>
@if ($meditation->isEmpty())
<h1 class="text-center mt-1 text-muted">Not Found</h1>
@endif
        <div class="row mt-4">
            @foreach ($meditation->where('category', 'top_picks') as $m)
            <div class="col">
                <a href={{'/meditation/sound/' . $m->id}}>
                    <div class="card">
                        <img src={{$m->picture}} style="width:379px; height:276px; object-fit: cover;" alt="">
                        <div class="card-body">
                            <h5 class="card-title">{{$m->name}}</h5>
                        </div>
                    </div>
                </a>
            </div>
            @endforeach
        </div>
        {{-- <div class="row justify-content-center">
            <div class="col-4">
              <a href="/" style="text-decoration: none; color:black">
                <div class="card">
                    <img src="/images/meditation-1.png" alt="">
                    <div class="card-body">
                        <h5 class="card-title">Zen Meditation</h5>
                      </div>
                  </div>
              </a>
            </div>
            <div class="col-4">
              <div class="card">
                <img src="/images/meditation-2.png" alt="">
                <div class="card-body">
                    <h5 class="card-title">Anxiety Cleanse</h5>
                  </div>
              </div>
            </div>
            <div class="col-4">
                <div class="card">
                    <img src="/images/meditation-3.png" alt="">
                    <div class="card-body">
                        <h5 class="card-title">Stop Overthinking</h5>
                      </div>
                </div>
              </div>
        </div>
        <br>
        <br> --}}
        <div class="container meditation mt-5">
            <h2><b>Sleep</b></h2>
            <br>
@if ($meditation->isEmpty())
<h1 class="text-center mt-1 text-muted">Not Found</h1>
@endif
            <div class="row mt-4">
                @foreach ($meditation->where('category', 'sleep') as $m)
                <div class="col">
                    <a href={{'/meditation/sound/' . $m->id}}>
                        <div class="card">
                            <img src={{$m->picture}} style="width:379px; height:276px; object-fit: cover;" alt="">
                            <div class="card-body">
                                <h5 class="card-title">{{$m->name}}</h5>
                            </div>
                        </div>
                    </a>
                </div>
                @endforeach
            </div>


    </div>

    </div>


@endsection

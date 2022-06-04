@extends('template.main')

@section('css')
<link rel="stylesheet" href="/css/consulting-2.css">
@endsection

@section('content')


    <div class="container consulting-2">
        <div class="row d-flex align-items-center">
            <div class="col-7">
                <img src={{$psychologist->picture}} alt="" style="width: 692px; height:707px; object-fit: cover;">
            </div>
            <div class="col-5">
                <h2>{{$psychologist->name}}</h2>
                <h4>Psychologist</h4>
                <p>{{$psychologist->deskripsi}}</p>

                     <a href={{'/consulting/' . $psychologist->id}}>
                     <button>Choose Psychologist</button>
                     </a>
            </div>
        </div>
    </div>


@endsection

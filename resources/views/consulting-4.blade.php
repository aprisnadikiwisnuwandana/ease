@extends('template.main')

@section('css')
<link rel="stylesheet" href="/css/consulting-4.css">
@endsection

@section('content')
<div class="container consulting-4">
    <div class="search d-flex flex-column justify-content-center">
        <h2>Payment</h2>
        <div class="d-flex justify-content-center">
            <img class="garis"  src="/images/garis.png" alt="" style="width: 56px;
        height: 2px;">
        </div>
        <div class="input-group mb-3">
            <input type="text" class="form-control" placeholder="Psychologist" aria-label="Username" aria-describedby="basic-addon1">
        </div>
    </div>
</div>




@endsection
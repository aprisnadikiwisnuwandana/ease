@extends('template.main')

@section('css')
<link rel="stylesheet" href="/css/consulting-5.css">
@endsection

@section('content')
<div class="container consulting-5">
    <div class="search d-flex flex-column justify-content-center">
        <h2>Consult Session Confirmation</h2>
        <div class="d-flex justify-content-center">
            <img class="garis"  src="/images/garis.png" alt="" style="width: 56px;
        height: 2px;">
        </div>
    </div>
    <br>
    <h5 class="fw-bold">Psychologist</h5>
    <div class="input-group mb-3">
        <input type="text" class="form-control" placeholder="Laura Theresia M. Psi" aria-label="Username" aria-describedby="basic-addon1">
    </div>
    <br>
    <h5 class="fw-bold">Topic</h5>
    <div class="input-group mb-3">
        <input type="text" class="form-control" placeholder="Kesepian" aria-label="Username" aria-describedby="basic-addon1">
    </div>
    <br>
    <h5 class="fw-bold">Package</h5>
    <div class="input-group mb-3">
        <input type="text" class="form-control" placeholder="Premium Package" aria-label="Username" aria-describedby="basic-addon1">
    </div>
    <br>
    <h5 class="fw-bold">Consult Schedule</h5>
    <div class="input-group mb-3">
        <input  type="text" name="startDate" class="form-control" id="from" placeholder="Choose a schedule">
    </div>

    <div class="text-center">
        <button>Confirm</button>
    </div>
</div>


@endsection


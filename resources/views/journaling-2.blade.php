@extends('template.main')

@section('css')
<link rel="stylesheet" href="css/journaling-2.css">
@endsection

@section('content')
<div class="row title">
    <div class="col-4">
        <p>Your journal</p>
    </div>
    <div class="col-4 hero2">
        <h1>Journaling</h1>
    </div>
    <div class="col-4">
        <p>Save</p>
    </div>
</div>

<div class="row">
    <div class="col-6">
        <p>Name:</p>
        <div class="input-group mb-3">
            <input type="text" class="form-control" placeholder="" aria-label="" aria-describedby="basic-addon1">
        </div>
    </div>
    <div class="col-6">
        <p>Name:</p>
        <div class="input-group mb-3">
            <input type="text" class="form-control" placeholder="" aria-label="" aria-describedby="basic-addon1">
        </div>
    </div>
    </div>
</div>

<div class="row">
    <div class="col-6">
        <div class="input-group mb-3">
            <input type="textarea" class="form-control" placeholder="" aria-label="" aria-describedby="basic-addon1">
        </div>
    </div>
    <div class="col-6">
        <div class="input-group mb-3">
            <input type="textarea" class="form-control" placeholder="" aria-label="" aria-describedby="basic-addon1">
        </div>
    </div>
    </div>
</div>


@endsection

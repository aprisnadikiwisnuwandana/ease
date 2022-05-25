@extends('template.main')

@section('css')
<link rel="stylesheet" href="css/journaling-2.css">
@endsection

@section('content')
<div class="container-fluid mulishBold" style="padding-top: 100px">
<div class="row title justify-content-around align-items-center" style="margin-bottom: 90px">
    <div class="col-3">
        <p>Your journal</p>
    </div>
    <div class="col-3 hero2">
        <h1 class="text-center">Journaling</h1>
    </div>
    <div class="col-3">
        <p class="text-end">Save</p>
    </div>
</div>

<div class="row justify-content-around mb-5">
    <div class="col-3">
        <p>Name:</p>
        <div  class="input-group mb-3">
            <input style="border-top: none; border-left: none; border-right: none; width: 299.5px" type="text">
        </div>
    </div>
    <div class="col-3">
        <p>Date:</p>
        <div  class="input-group mb-3">
            <input style="border-top: none; border-left: none; border-right: none; width: 299.5px" type="text">
        </div>
    </div>
    <div class="col-3">
        <p>Day:</p>
        <div  class="input-group mb-3">
            <input style="border-top: none; border-left: none; border-right: none; width: 299.5px" type="text">
        </div>
    </div>

</div>

<div class="row justify-content-around">
    <div class="col-5">
        <div style="border: 2px solid black; padding-bottom: 217px" class="input-group mb-3 ">
            <p class="ms-4 pt-3">Schedule</p>

        </div>
    </div>
    <div class="col-5">
        <div style="border: 2px solid black; padding-bottom: 217px" class="input-group mb-3 ">
            <p class="ms-4 pt-3">To do list</p>

        </div>
    </div>

</div>

<div class="row justify-content-center px-5">
    <div class="col-12 ">
        <p>Note: </p>
        <input style="border: 2px solid black" type="text" class="form-control">
        <br>
    </div>

</div>
</div>


@endsection

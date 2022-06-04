@extends('template.main')

@section('css')
<link rel="stylesheet" href={{asset("css/journaling-2.css")}}>
<link rel="stylesheet" type="text/css" href="/js/jquery.datetimepicker.css" >
<link rel="stylesheet" href="/css/consulting-5.css">
@endsection




@section('content')
<form class="container-fluid mulishBold" style="padding-top: 100px" method="post" action={{'/journaling/submit/' . $journal->id}}>
   {{csrf_field()}}
    <div class="row title justify-content-around align-items-center" style="margin-bottom: 70px">
        <div class="col-3 text end">
            <a href="/journaling">
                Your journal
            </a>
        </div>
        <div class="col-3 hero2">
            <h1 class="text-center">Journaling</h1>
        </div>
        <div class="col-3 text-end">
            @if ($journal->isTemplate == true)
            <button type="submit" style="all: unset; cursor: pointer;">
                Save
             @else
            <button type="submit" formaction={{'/journaling/update/' . $journal->id}} style="all: unset; cursor: pointer;">
                Save
            </button>
            @endif
        </div>
    </div>

    <div class="row justify-content-around mb-5">
        <div class="col-5">
            <p>Name:</p>
            <div  class="input-group mb-3">
                <input name="name" value="{{auth()->user()->name}}" readonly style="border-top: none; border-left: none; border-right: none; width: 299.5px" type="text">
            </div>
        </div>
        <div class="col-5">
            <p>Date:</p>
            <div  class="input-group mb-3">
                <input id="datetimepicker" value="{{$journal->date}}" style="border-top: none; border-left: none; border-right: none; width: 299.5px" type="text" name="date">
            </div>
        </div>
        {{-- <div class="col-3">
            <p>Day:</p>
            <div  class="input-group mb-3">
                <input style="border-top: none; border-left: none; border-right: none; width: 299.5px" type="text">
            </div>
        </div> --}}
    </div>
    <div class="row justify-content-around">
        <div class="col-5">
            <div class="d-flex flex-column" style="border: 0px solid black" class="input-group mb-3 ">
                <p class="ms-4 pt-3">Schedule</p>
                <textarea name="schedule" id="" cols="30" rows="10">{{$journal->schedule}}</textarea>
            </div>
        </div>
        <div class="col-5">
            <div class="d-flex flex-column" style="border: 0px solid black" class="input-group mb-3 ">
                <p class="ms-4 pt-3">To do list</p>
                <textarea name="to_do_list" id="" cols="30" rows="10">{{$journal->to_do_list}}</textarea>
            </div>
        </div>
    </div>
    <div class="row justify-content-center px-5">
        <div class="col-12 ">
            <p>Note: </p>
            <input type="text" class="form-control" style="border: 2px solid black" value="{{$journal->note}}" name="note">
            <br>
        </div>
    </div>
</form>

<script src="/js/jquery.js"></script>
<script src="/js/jquery.datetimepicker.full.min.js"></script>
<script>
    jQuery('#datetimepicker').datetimepicker();
</script>
@endsection

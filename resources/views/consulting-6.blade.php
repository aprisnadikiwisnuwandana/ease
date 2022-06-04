@extends('template.main')

@section('css')
<link rel="stylesheet" type="text/css" href="/js/jquery.datetimepicker.css" >
<link rel="stylesheet" href="/css/consulting-5.css">
@endsection

@section('js')

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
        <input type="text" value="{{$psychologist->name}}" readonly class="form-control" placeholder="Laura Theresia M. Psi" aria-label="Username" aria-describedby="basic-addon1">
    </div>
    <br>
    <h5 class="fw-bold">Topic</h5>
    <div class="input-group mb-3">
        <input type="text" value="{{$paymentdetail->topic}}" readonly class="form-control" placeholder="Kesepian" aria-label="Username" aria-describedby="basic-addon1">
    </div>
    <br>
    <h5 class="fw-bold">Package</h5>
    <div class="input-group mb-3">
        <input type="text" value="{{$paymentdetail->package}}" readonly class="form-control" placeholder="Premium Package" aria-label="Username" aria-describedby="basic-addon1">
    </div>

    <h5 class="fw-bold">Schedule</h5>
    <div class="input-group mb-3">
        <input type="text" value="{{$paymentdetail->schedule_date . " " . $paymentdetail->schedule_time}}" readonly class="form-control" placeholder="Premium Package" aria-label="Username" aria-describedby="basic-addon1">
    </div>
    <br>
    <form action={{'/consulting/accept/' . $paymentdetail->id}} method="post">
        @csrf
    <div class="text-center">
        <button type="submit" formaction={{'/consulting/decline/' . $paymentdetail->id}} class="btn btn-danger">Decline</a>
        <button type="submit" class="btn btn-success">Confirm</a>
    </div>
    </form>

</div>
<script src="/js/jquery.js"></script>
<script src="/js/jquery.datetimepicker.full.min.js"></script>
<script>
    jQuery('#datetimepicker').datetimepicker();
</script>
@endsection


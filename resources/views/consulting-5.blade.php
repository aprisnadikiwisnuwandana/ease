@extends('template.main')

@section('css')
    <link rel="stylesheet" type="text/css" href="/js/jquery.datetimepicker.css">
    <link rel="stylesheet" href="/css/consulting-5.css">
@endsection

@section('js')
@endsection

@section('content')
    <div class="container consulting-5">
        <div class="search d-flex flex-column justify-content-center">
            <h2>Consult Session Confirmation</h2>
            <div class="d-flex justify-content-center">
                <img class="garis" src="/images/garis.png" alt="" style="width: 56px;
                height: 2px;">
            </div>
        </div>
        <br>
        <h5 class="fw-bold">Psychologist</h5>
        <div class="input-group mb-3">
            <input type="text" value="{{ $psychologist->name }}" readonly class="form-control"
                placeholder="Laura Theresia M. Psi" aria-label="Username" aria-describedby="basic-addon1">
        </div>
        <br>
        <h5 class="fw-bold">Topic</h5>
        <div class="input-group mb-3">
            <input type="text" value="{{ $paymentdetail->topic }}" readonly class="form-control" placeholder="Kesepian"
                aria-label="Username" aria-describedby="basic-addon1">
        </div>
        <br>
        <h5 class="fw-bold">Package</h5>
        <div class="input-group mb-3">
            <input type="text" value="{{ $paymentdetail->package }}" readonly class="form-control"
                placeholder="Premium Package" aria-label="Username" aria-describedby="basic-addon1">
        </div>
        <br>
        <form action={{ '/consulting/schedule/' . $paymentdetail->id }} method="post">
            @csrf
            <h5 class="fw-bold">Consult Schedule</h5>
            @if ($paymentdetail->schedule_date == null)
                <div class="input-group mb-3">
                    <input type="text" name="id" hidden value={{ $paymentdetail->id }}>
                    <input class="form-control" id="datetimepicker" type="text" name="schedule"
                        placeholder="Choose a schedule">
                </div>
            @else
                @if ($paymentdetail->isVerified == true)
                    <div class="alert alert-success text-center">
                        Your consultation session will start at {{ $paymentdetail->schedule_time }} on
                        {{ $paymentdetail->schedule_date }} via Whatsapp
                    </div>
                @else
                    <div class="alert alert-danger text-center">
                        Your consultation session is declined
                    </div>
                @endif
            @endif

            @if ($paymentdetail->schedule_date == null)
                <div class="text-center">
                    <button type="submit">Confirm</button>
                </div>
            @else
                @if ($paymentdetail->isVerified == true)
                    <div class="text-center">
                        <a href={{ $psychologist->phone_number }} class="btn btn-success">Whatsapp</a>
                    </div>
                @endif
            @endif
        </form>

    </div>
    <script src="/js/jquery.js"></script>
    <script src="/js/jquery.datetimepicker.full.min.js"></script>
    <script>
        jQuery('#datetimepicker').datetimepicker();
    </script>
@endsection

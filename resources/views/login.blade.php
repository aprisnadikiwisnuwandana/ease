@extends('template.main')

@section('css')
<link rel="stylesheet" href="css/login.css">
@endsection

@section('content')
    <div class="hero container mt-5">
        <div class=" row d-flex justify-content-center align-items-center">
            <div class="col-6">
                <img src="/images/login.png" width=500 alt="">
            </div>

            <div class="col-6">
                <p>Welcome to</p>
                <h1>Ease</h1>
                <center> <button class="google d-flex justify-content-center">Login with Google</button> </center>
                <p class="">OR</p>
                <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1">
                </div>
                <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="Password" aria-label="Username" aria-describedby="basic-addon1">
                </div>

                <center> <p>Don’t have an account? <a href="/"> Sign Up </a></p>
                <br>
                 <button class="d-flex justify-content-center">Login</button> </center>

            </div>


        </div>
    </div>

@endsection

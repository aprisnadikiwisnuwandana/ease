@extends('template.main')

@section('css')
<link rel="stylesheet" href="css/register.css">
@endsection

@section('content')
    <div class="hero container mt-5">
        <div class=" row d-flex justify-content-center align-items-center">
            <div class="col-6">
                <img src="/images/login.png" width=500 alt="">
            </div>

            <div class="col-6">
                <br>
                <h1>Create Account</h1>
                <button style="width: 561px" class="google"> <img  style="width: 32px;" src="/images/google.png" alt=""> <span>Sign up with Google</span> </button> 
                <p style="color:black;" class="text-center">OR</p> 
                <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="Full Name" aria-label="Username" aria-describedby="basic-addon1">
                </div>
                <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="Email" aria-label="Username" aria-describedby="basic-addon1">
                </div>
                <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1">
                </div>
                <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="Password" aria-label="Username" aria-describedby="basic-addon1">
                </div>
                <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="Confirm Password" aria-label="Username" aria-describedby="basic-addon1">
                </div>
                <br>
                 <button class="d-flex justify-content-center input-group mb-3">Register</button> </center>
                 <center> <p>Already have an account? <a href="/login"> Log in </a></p>

            </div>


        </div>
    </div>

@endsection

@extends('template.main')

@section('css')
<link rel="stylesheet" href="css/login.css">
<link rel="stylesheet" href="css/register.css">
@endsection

@section('content')
    <div class="hero container mt-5">
        <div class=" row d-flex justify-content-center align-items-center">
            <div class="col-6">
                <img src="/images/login.png" width=500 alt="">
            </div>

            <div class="col-6">
                <form action="/register" method="post">
                 {{ csrf_field() }}
                <br>
                <h1>Create Account</h1>
                <div class="input-group mb-3 mt-5">
                    <input type="text" name="name" class="form-control" placeholder="Full Name" aria-label="Username" aria-describedby="basic-addon1">
                </div>
                <div class="input-group mb-3">
                    <input type="email" name="email" class="form-control" placeholder="Email" aria-label="Username" aria-describedby="basic-addon1">
                    @error('email') <span class="text-danger error">{{ $message }}</span>@enderror
                </div>
                <div class="input-group mb-3">
                    <input type="text" name="username" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1">
                </div>
                <div class="input-group mb-3">
                    <input type="password" name="password" class="form-control" placeholder="Password" aria-label="Username" aria-describedby="basic-addon1">
                </div>
                <div class="input-group mb-3">
                    <input type="password" name="passwordConfirmation" class="form-control" placeholder="Confirm Password" aria-label="Username" aria-describedby="basic-addon1">
                </div>
                <br>
                 <button type="submit" class=" mb-2">Register</button>
                  <p>Already have an account? <a href="/login"> Log in </a></p>

                </form>
            </div>


        </div>
    </div>

@endsection

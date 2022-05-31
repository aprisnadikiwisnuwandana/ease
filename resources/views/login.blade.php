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
                <br>
                <h2>Welcome to</h2>
                <h1>Ease</h1>
                <button style="width: 561px" class="google "> <img  style="width: 32px;" src="/images/google.png" alt=""> <span>Login with Google</span> </button>
                <p class="text-center" style="color:black;">OR</p>
                <form action="/login" method="post">
                    {{ csrf_field() }}
                <div class="input-group mb-3">
                    <input name="email" type="email" class="form-control" placeholder="Email" aria-label="Username" aria-describedby="basic-addon1">
                </div>
                <div class="input-group mb-3">
                    <input name="password" type="password" class="form-control" placeholder="Password" aria-label="Username" aria-describedby="basic-addon1">
                </div>

                <br>
                 <button type="submit" class="mb-3">Login</button>
                 <p>Don’t have an account? <a href="/register"> Sign Up </a></p>
                </form>
            </div>


        </div>
    </div>

@endsection

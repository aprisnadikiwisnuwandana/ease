@extends('template.main')

@section('css')
<link rel="stylesheet" href="/css/consulting-4.css">
@endsection

@section('content')
<div class="container consulting-4">
    <div class="search d-flex flex-column justify-content-center">
        <h2>Payment</h2>
        <div class="d-flex justify-content-center">
            <img class="garis"  src="/images/garis.png" alt="" style="width: 56px;
        height: 2px;">
        </div>
        <div class="card">
            <div class="card-body">
                <h5 class="card-title fw-bold">Details</h5>
                <div class="row">
                    <div class="col-3">Psychologist</div>
                    <div class="col-1">:</div>
                    <div class="col-8">Laura Theresia M.Psi</div>
                </div>
                <div class="row">
                    <div class="col-3">Topic</div>
                    <div class="col-1">:</div>
                    <div class="col-8">Kesepian</div>
                </div>
                <div class="row">
                    <div class="col-3">Packages</div>
                    <div class="col-1">:</div>
                    <div class="col-8">Premium Packages <span>(60 min session)</span></div>
                </div>
                <div class="row">
                    <div class="col-3">Subtotal for Packages</div>
                    <div class="col-1">:</div>
                    <div class="col-8">Rp 120.000</div>
                </div>
            </div>
        </div>
        <div class="card my-3">
            <div class="row card-body">
                <h5  class="col-5">Virtual Account Number <br><input id="myInput" class="d-block fw-bold" value="7007099912196 "/></h5>
                <button onClick="myFunction()" class="col-7">copy</button>
            </div>
        </div>
        <div class="px-3">
            <h5 class="d-block fw-bold">Upload Proof of Payment </h5>
            <button type="button" class="btn btn-outline-primary">
                <span class="button__icon">
                    <ion-icon name="cloud-upload-outline"></ion-icon>
                </span>
                <span class="button__text">Add File</span>
            </button>

        </div>
        <a href="/consulting-5">
        <div class="text-center">
            <button>Submit</button>
        </div>
    </div>
</div>

<script>
function myFunction() {
    /* Get the text field */
    var copyText = document.getElementById("myInput");

    /* Select the text field */
    copyText.select();
    copyText.setSelectionRange(0, 99999); /* For mobile devices */

     /* Copy the text inside the text field */
    navigator.clipboard.writeText(copyText.value);

    /* Alert the copied text */
    alert("Copied the text: " + copyText.value);
  }
</script>


@endsection

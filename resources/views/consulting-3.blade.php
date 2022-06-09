@extends('template.main')

@section('css')
<link rel="stylesheet" href="/css/consulting-3.css">
@endsection

@section('content')

<div class="hero2">
    <h1>Consulting</h1>
</div>

<div class="container consulting-3">
    <div class="search d-flex flex-column justify-content-center">
        <h2>Psychologist</h2>
        <div class="d-flex justify-content-center">
            <img class="garis"  src="/images/garis.png" alt="" style="width: 56px;
        height: 2px;">
        </div>

        <form action={{"/consulting/payment/" . $psychologist->id}} method="post">
            {{csrf_field()}}
            <div class="input-group mb-3">
                <input type="text" name="psychologist_id" hidden value="{{$psychologist->id}}" readonly class="form-control" placeholder="Psychologist" aria-label="Username" aria-describedby="basic-addon1">
                <input type="text" name="psychologist" value="{{$psychologist->name}}" readonly class="form-control" placeholder="Psychologist" aria-label="Username" aria-describedby="basic-addon1">
            </div>
            <div class="search d-flex flex-column justify-content-center">
                <br>
                <h2>Topic</h2>
                <div class="d-flex justify-content-center">
                    <img class="garis"  src="/images/garis.png" alt="" style="width: 56px;
                height: 2px;">
                </div>
                <select class="form-select" name="topic" id="topic" >
                    <option selected disabled hidden value="topic">Choose a consulting topic</option>
                    <option value="Kendali Emosi">Kendali Emosi</option>
                    <option value="Pekerjaan">Pekerjaan</option>
                    <option value="Kecanduan">Kecanduan</option>
                    <option value="Percintaan">Percintaan</option>
                    <option value="Keluarga">Keluarga</option>
                    <option value="Pendidikan">Pendidikan</option>
                    <option value="Kesenian">Kesenian</option>
                    <option value="Kecemasan">Kecemasan</option>
                    <option value="Pertemuan">Pertemuan</option>
                    <option value="Sosial">Sosial</option>
                    <option value="Lainnya">Lainnya</option>
                </select>
                @error('topic')
                <p class="text-danger">Select one of the option</p>
                @enderror
            </div>
            <br>
            <div class="search d-flex flex-column justify-content-center">
                <h2>Package</h2>
                <div class="d-flex justify-content-center">
                    <img class="garis"  src="/images/garis.png" alt="" style="width: 56px;
                height: 2px;">
                </div>
                <select class="form-select" name="package" id="package" >
                    <option selected disabled hidden value="package">Choose a consulting package</option>
                    <option value="Super Package (30 min) Rp 100.000">Super Package <span class="d-block">(30 min)</span> <p class="d-block">Rp 100.000</p> </option>
                    <option value="Special Package (45 min) Rp 110.000">Special Package <span class="d-block">(45 min)</span> <p class="d-block">Rp 110.000</p></option>
                    <option value="Premium Package (60 min) Rp 120.000">Premium Package <span class="d-block">(60 min)</span> <p class="d-block">Rp 120.000</p></option>
                </select>
                @error('package')
                <p class="text-danger">Select one of the option</p>
                @enderror
            </div>
        <br>
        <div class="text-center">
          <button type="submit">Buy Now</button>
      </div>
        </form>

    </div>





</div>
</div>

@endsection

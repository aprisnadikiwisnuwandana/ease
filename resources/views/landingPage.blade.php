@extends('template.main')

@section('content')
    <div class="hero container mt-5" style="padding-top: 100px">
        <div class=" row d-flex justify-content-center align-items-center">
            <div class="col-6">
                <h1>One stop solution
                <br> for your mental health</h1>
                <p>Ease provides a convinient and practical <br>
                services for your mental health problems</p>
                <button>See Our Services</button>
            </div>
            <div class="col-6 text-end">
                <img src="/images/illustration.png" width=500 alt="">
            </div>

        </div>
    </div>


    <div class="service container">
        <div class="text-center">
            <h1>Our Services</h1>
            <img src="images/Rectangle.png" alt="">
            <p class="mt-3">Customize our services to your mental health needs and make sure to consult it with our best psychologist.</p>
        </div>
        <div class="row mt-5 justify-content-center">

            <div class="col">
                <a href="/consulting" style="text-decoration: none">
                    <div class="card">
                        <div class="card-body">
                          <img src="images/Consulting.png" alt="">
                          <h5 class="card-title">Consulting</h5>
                          <p class="card-text">Consult your mental health problems with our best psychologist</p>

                        </div>
                      </div>
                </a>
            </div>

            <div class="col">
                <a href="/journaling" style="text-decoration: none">
                    <div class="card">
                        <div class="card-body">
                          <img  src=" images/Journaling.png" alt="">
                          <h5 class="card-title">Journaling</h5>
                        <p class="card-text">
                            Channel your thoughts, feelings, and ideas through our journal service
                        </p>

                        </div>
                      </div>
                </a>
            </div>

            <div class="col">
                <a href="/meditation" style="text-decoration: none">
              <div class="card">
                <div class="card-body">
                  <img src="images/Meditation.png" alt="">
                  <h5 class="card-title">Meditation </h5>
                  <p class="card-text">Choose our best meditation content to achieve a clear, calm, and focused mind</p>

                </div>
              </div>
                </a>
            </div>

              <div>
                  <img class="awan" src="images/awan.png" alt="">
              </div>
        </div>

          <div class="text-center">
              <button>Learn more</button>
          </div>
    </div>
@endsection

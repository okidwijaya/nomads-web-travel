@extends('layouts.app')

@section('title')
NOMADS
@endsection

@section('content')
  <!-- header -->
  <header class="text-center">
    <h1>Explore the beatutiful world
        <br> As Easy One Click
    </h1>
    <p class="mt-3">
        You will see beatutiful
        <br> moment you never see before
    </p>
    <a href="{{url('')}}" class="btn btn-get-started px-4 mt-4">
        Get Started
    </a>
</header>

<!-- main -->
<main>
    <section class="container">
        <section id="stats" class="section-stats row justify-content-center">
            <div class="col-3 col-md-2 stats-detail">
                <h2>20K</h2>
                <p>Members</p>
            </div>
            <div class="col-3 col-md-2 stats-detail">
                <h2>12</h2>
                <p>Countries</p>
            </div>
            <div class="col-3 col-md-2 stats-detail">
                <h2>3K</h2>
                <p>Hotel</p>
            </div>
            <div class="col-3 col-md-2 stats-detail">
                <h2>72</h2>
                <p>Travel</p>
            </div>
        </section>
    </section>

    <section class="section-popular" id="popular">
        <div class="container">
            <div class="row">
                <div class="col text-center section-popular-heading">
                    <h2>Wisata popular</h2>
                    <p>Something that you never try
                        <br> before in this world
                    </p>
                </div>
            </div>
        </div>
    </section>

    <section id="popularContent" class="section-popular-content justify-content-center">
        <div class="container">
            <div class="section-popular-travel row justify-content-center">
                <div class="col-sm-6 col-md-4 col-lg-3">
                    <div class="card-travel text-center d-flex flex-column" style="background-image:url(/frontend/image/popular1.jpg);">
                        <div class="travel-country">Indonesia</div>
                        <div class="travel-location">DERATAN-BALI</div>
                        <div class="travel-button mt-auto">
                            <a href="{{route('details')}}" class="btn btn-travel-details px-4">
                                veiw details
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4 col-lg-3">
                    <div class="card-travel text-center d-flex flex-column" style="background-image:url(/frontend/image/popular2.jpg);">
                        <div class="travel-country">Indonesia</div>
                        <div class="travel-location">BROMO, MALANG</div>
                        <div class="travel-button mt-auto">
                            <a href="{{route('details')}}" class="btn btn-travel-details px-4">
                                veiw details
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4 col-lg-3">
                    <div class="card-travel text-center d-flex flex-column" style="background-image:url(/frontend/image/popular3.jpg);">
                        <div class="travel-country">Indonesia</div>
                        <div class="travel-location">NUSA PENIDA, BALI</div>
                        <div class="travel-button mt-auto">
                            <a href="{{route('details')}}" class="btn btn-travel-details px-4">
                                veiw details
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4 col-lg-3">
                    <div class="card-travel text-center d-flex flex-column" style="background-image:url(/frontend/image/popular4.jpg);">
                        <div class="travel-country">Indonesia</div>
                        <div class="travel-location">KARIMUN JAWA</div>
                        <div class="travel-button mt-auto">
                            <a href="{{route('details')}}" class="btn btn-travel-details px-4">
                                veiw details
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="networks" class="section-networks">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <h2>Our Networks</h2>
                    <p>
                        Companies are trusted
                        <br> more than just a trip
                    </p>
                </div>
                <div class="col-md-8 text-center">
                    <img src="{{url('frontend/image/partners.png')}}" alt="logo partner" class="img-partner">
                </div>
            </div>
        </div>
    </section>

    <section id="tetimonialHeading" class="section-testimonial-heading">
        <div class="container">
            <div class="row">
                <div class="col text-center">
                    <h2>They Are Loving Us</h2>
                    <p>Many desktop publishing packages and web
                        <br> page editors now use Lorem Ipsum</p>
                </div>
            </div>
        </div>
    </section>

    <section id="testimonialContent" class="section-testimonial-content">
        <div class="container">
            <div class="section-popular-content row justoify-content-center">
                <div class="col-sm-6 col-md-6 col-lg-4">
                    <div class="card card-testimonial text-center">
                        <div class="testimonial-content">
                            <img src="{{url('frontend/image/testi1.png')}}" alt="User" class="mb-4 rounded-circle">
                            <h3 class="mb-4">Angga Rizky</h3>
                            <p class="testimonial">
                                lipsum as it is sometimes known, is dummy text used in laying out print, graphic or web designs.
                            </p>
                            <hr>
                            <p class="trip-to mt-2">
                                Trip to Ubud
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-6 col-lg-4">
                    <div class="card card-testimonial text-center">
                        <div class="testimonial-content">
                            <img src="{{url('frontend/image/testi2.png')}}"alt="User" class="mb-4 rounded-circle">
                            <h3 class="mb-4">Sumaryanto</h3>
                            <p class="testimonial">
                                lipsum as it is sometimes known, is dummy text used in laying out print, graphic or web designs.
                            </p>
                            <hr>
                            <p class="trip-to mt-2">
                                Trip to Nusa Penida
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-6 col-lg-4">
                    <div class="card card-testimonial text-center">
                        <div class="testimonial-content">
                            <img src="{{url('frontend/image/testi3.png')}}" alt="User" class="mb-4 rounded-circle">
                            <h3 class="mb-4">Martino zurb</h3>
                            <p class="testimonial">
                                lipsum as it is sometimes known, is dummy text used in laying out print, graphic or web designs.
                            </p>
                            <hr>
                            <p class="trip-to mt-2">
                                Trip to Karimun Jawa
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12 text-center">
                    <a href="{{url('/')}}" class="btn btn-need-help px-4 mnt-4 mx-1">
                        I need help
                    </a>
                    <a href="{{url('/')}}" class="btn btn-get-started px-4 mnt-4 mx-1">
                        Get Started
                    </a>
                </div>
            </div>
        </div>
    </section>
</main>
@endsection
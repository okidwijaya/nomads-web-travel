@extends('layouts.app')

@section('title')
Wisata Jateng
@endsection

@section('content')
  <!-- header -->
  <header class="text-center">
    <h1>Eksplore Keindahan Jawa Tengah
        <br> Hanya Dengan Satu Klik
    </h1>
    <p class="mt-3">
        Terpukau Oleh Keindahan 
        <br> dan Moment Yang Belum Pernah Kamu Lihat
    </p>
    <a href="{{url('login')}}" class="btn btn-get-started px-4 mt-4">
        {{-- <a href="/login.html" class="btn btn-get-started px-4 mt-4"> --}}
        Get Started
    </a>
</header>

<!-- main -->
<main>
    <section class="container">
        <section id="stats" class="section-stats row justify-content-center">
            <div class="col-3 col-md-2 stats-detail">
                <h2>20K</h2>
                <p>Member</p>
            </div>
            <div class="col-3 col-md-2 stats-detail">
                <h2>12</h2>
                <p>Kota</p>
            </div>
            <div class="col-3 col-md-2 stats-detail">
                <h2>3K</h2>
                <p>Hotel</p>
            </div>
            <div class="col-3 col-md-2 stats-detail">
                <h2>72</h2>
                <p>Travel agen</p>
            </div>
        </section>
    </section>

    <section class="section-popular" id="popular">
        <div class="container">
            <div class="row">
                <div class="col text-center section-popular-heading">
                    <h2>Wisata popular</h2>
                    <p>Rasakan Sensasi Berwisata
                        <br> Yang Belum Pernah Anda Rasakan
                    </p>
                </div>
            </div>
        </div>
    </section>

    <section id="popularContent" class="section-popular-content justify-content-center">
        <div class="container">
            <div class="section-popular-travel row justify-content-center">
                <div class="col-sm-6 col-md-4 col-lg-3">
                    <div class="card-travel text-center d-flex flex-column" style="background-image:url(/frontend/image/Candi-Borobudur-Magelang-736x491.jpg);">
                        <div class="travel-country">Indonesia</div>
                        <div class="travel-location">BOROBUDUR-MAGELANG</div>
                        <div class="travel-button mt-auto">
                            <a href="{{route('details')}}" class="btn btn-travel-details px-4">
                                veiw details
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4 col-lg-3">
                    <div class="card-travel text-center d-flex flex-column" style="background-image:url(/frontend/image/Candi-Prambanan-Klaten.jpg);">
                        <div class="travel-country">Indonesia</div>
                        <div class="travel-location">PRAMBANAN, KLATEN</div>
                        <div class="travel-button mt-auto">
                            <a href="{{route('details')}}" class="btn btn-travel-details px-4">
                                veiw details
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4 col-lg-3">
                    <div class="card-travel text-center d-flex flex-column" style="background-image:url(/frontend/image/lawang-sewu.jpg);">
                        <div class="travel-country">Indonesia</div>
                        <div class="travel-location">LAWANG SEWU, SEMARANG</div>
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
                    <h2>Partner</h2>
                    <p>
                        Partner Kepercayaan
                        <br> Lebih dari Sekedar Trip 
                    </p>
                </div>
                <div class="col-md-8 text-center">
                    {{-- <img src="{{url('frontend/image/partners.png')}}" alt="logo partner" class="img-partner"> --}}
                    <img src="#" alt="logo partner" class="img-partner">
                </div>
            </div>
        </div>
    </section>

    <section id="tetimonialHeading" class="section-testimonial-heading">
        <div class="container">
            <div class="row">
                <div class="col text-center">
                    <h2>Ulasan Mereka Yang Mencintai Keindahan Jawa Tengah</h2>
                    {{-- <p>Many desktop publishing packages and web
                        <br> page editors now use Lorem Ipsum</p> --}}
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
                                Trip ke Nusakambangan
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
                                Trip Ke Pramabanan
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
                                Trip Ke Karimun Jawa
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
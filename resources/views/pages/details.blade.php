@extends('layouts.app')

@section('title', 'Detail Travel')

@section('content')
<main>
    <section class="section-details-header">
    </section>
    <section class="section-details-content">
        <div class="container">
            <div class="row">
                <div class="col p-0">
                    <nav>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                Paket Travel
                            </li>
                            <li class="breadcrumb-item active">
                                Details
                            </li>
                        </ol>
                    </nav>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-8 pl-lg-0">
                    <div class="card card-details">
                        <h1>Nusa Penida</h1>
                        <p>Repunlic of Indonesia Raya</p>
                        <div class="gallery">
                            <div class="row">

                                <div class="xzoom-container">
                                    <img class="xzoom" src="{{url('frontend/image/gallery1.jpg')}}" id="zoom-default" xoriginal="{{url('frontend/image/gallery1.jpg')}}" />

                                    <div class="xzoom-thumbs">
                                        <a href="{{url('frontend/image/gallery1.jpg')}}">
                                            <img class="xzoom-gallery" width="128" src="{{url('frontend/image/gallery1.jpg')}}" xpreview="{{url('frontend/image/gallery1.jpg')}}">
                                        </a>
                                        <a href="{{url('frontend/image/gallery1.jpg')}}">
                                            <img class="xzoom-gallery" width="128" src="{{url('frontend/image/gallery1.jpg')}}">
                                        </a>
                                        <a href="{{url('frontend/image/gallery1.jpg')}}">
                                            <img class="xzoom-gallery" width="128" src="{{url('frontend/image/gallery1.jpg')}}">
                                        </a>
                                        <a href="{{url('frontend/image/gallery1.jpg')}}">
                                            <img class="xzoom-gallery" width="128" src="{{url('frontend/image/gallery1.jpg')}}">
                                        </a>
                                        <a href="{{url('frontend/image/gallery1.jpg')}}">
                                            <img class="xzoom-gallery" width="128" src="{{url('frontend/image/gallery1.jpg')}}">
                                        </a>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <h2>Tentang Wisata</h2>
                        <p>Nusa Penida is an island southeast of Indonesia's island Bali an a district of Klungkung Regency that includes the neighbouring small island of Nusa Lembongan and twelve even smaller islands. The Badung Strait separates the
                            island and Bali. The interior of Nusa Penida is hilly with a maximum altitude of 524 metres.
                        </p>
                        <p>here are thirteen small islands nearby - Nusa Lembongan, Nusa Ceningan and eleven even smaller - which are included within the district (kecamatan).
                        </p>
                        <div class="features row">
                            <div class="col-md-4">
                                <img src="/frontend/image/FeaturesIcon.png" class="features-image" alt="">
                                <div class="description">
                                    <h3>Features Event</h3>
                                    <p>Tari Kecak</p>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <img src="/frontend/image/langIcon.png" class="features-image" alt="">
                                <div class="description">
                                    <h3>Food</h3>
                                    <p>Local Foods</p>
                                </div>
                            </div>
                            <div class="col-md-4 border-left">
                                <img src="/frontend/image/foodIcon.png " class="features-image" alt="">
                                <div class="description">
                                    <h3>Language</h3>
                                    <p>Bahasa Indonesia</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="card card-details card-right">
                        <h2>Memeber are going</h2>
                        <div class="members my-2">
                            <img src="/frontend/image/testi1.png" alt="membersImage" class="members-image">
                            <img src="/frontend/image/testi2.png" alt="membersImage" class="members-image">
                            <img src="/frontend/image/testi3.png" alt="membersImage" class="members-image">
                            <img src="/frontend/image/testi1.png" alt="membersImage" class="members-image">
                            <img src="/frontend/image/member5.png" alt="membersImage" class="members-image">
                        </div>
                        <hr>
                        <h2>Trip Information</h2>
                        <table class="trip-information">
                            <tr>
                                <th widht="50%">Date of Departure</th>
                                <td widht="50%" class="text-right">22 Ausgust 2019</td>
                            </tr>
                            <tr>
                                <th widht="50%">Duration</th>
                                <td widht="50%" class="text-right">4N 2D</td>
                            </tr>
                            <tr>
                                <th widht="50%">Type</th>
                                <td widht="50%" class="text-right">Open Trip</td>
                            </tr>
                            <tr>
                                <th widht="50%">Price</th>
                                <td widht="50%" class="text-right">$80,00 /person</td>
                            </tr>
                        </table>
                    </div>
                    <div class="join-container">
                        <a href="{{route ('checkout') }}" class="btn btn-block btn-join-now mt-3 py-2"> Join Now</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
@endsection

@push('prepend-style')
<link rel="stylesheet" href="{{url('frontend/libraries/xzoom/xzoom.css')}}">
@endpush

@push('addon-script')
{{-- {{url('') }}  not use this--}}
<script type="text/javascript" src="https://unpkg.com/xzoom/dist/xzoom.min.js"></script>
<script>
    $(document).ready(function() {
        $('.xzoom, .xzoom-gallery').xzoom({
            zoomWidth: 400,
            title: true,
            tint: '#333',
            Xoffset: 15
        });
    });
</script>
@endpush
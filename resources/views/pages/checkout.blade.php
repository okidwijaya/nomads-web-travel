@extends('layouts.checkout')

@section('title', 'Checkout')

@section('content')
  <!-- main -->
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
                            <li class="breadcrumb-item">
                                Details
                            </li>
                            <li class="breadcrumb-item active">
                                Checkout
                            </li>
                        </ol>
                    </nav>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-8 pl-lg-0">
                    <div class="card card-details">
                        <h1>Who's going</h1>
                        <p>Karimun, Jepara, Indonesia</p>
                        <div class="attendee">
                            <table class="table table-responsiev-sm text-center">
                                <thead>
                                    <td>Picture</td>
                                    <td>Name</td>
                                    <td>Nationallity</td>
                                    <td>Visa</td>
                                    <td>Passport</td>
                                    <td></td>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            <img src="{{url('frontend/image/testi1.png')}}" height="60" alt="">
                                        </td>
                                        <td class="align-middle">Angga Rizky</td>
                                        <td class="align-middle">CN</td>
                                        <td class="align-middle">NA</td>
                                        <td class="align-middle">Active</td>
                                        <td class="align-middle">
                                            <a href="{{ route('home') }}"
                                                <img src="/frontend/image/icon - cancel.png " alt="">
                                            </a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <img src="{{url('frontend/image/testi2.png')}}" height="60" alt="">
                                        </td>
                                        <td class="align-middle">Siswanto</td>
                                        <td class="align-middle">Jakarta</td>
                                        <td class="align-middle">30 Days</td>
                                        <td class="align-middle">Active</td>
                                        <td class="align-middle">
                                            <a href="{{ route('home') }}">
                                                <img src="{{url('frontend/image/icon - cancel.png ')}}" alt="">
                                            </a>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="members mt-3">
                            <h2>Tambah Member</h2>
                            <form action="" class="form-inline">
                                <label for="inputUsername" class="sr-only">Nama</label>
                                <input type="text" class="form-control mb-2 mr-sm-2" id="inputUsername" placeholder="username">


                                <label for="inputVisa" class="sr-only">Visa</label>
                                <select name="InputVisa" id="inputVisa" class="custom-select mb-2 mr-sm-2">
                                    <option value="Visa" selected>Visa</option>
                                    <option value="30 Days">30 Days</option>
                                    <option value="N/A">N/A</option>
                                </select>

                                <label for="doePassport" class="sr-only"> DOE Passport</label>
                                <div class="input-group mb-2 mr-sm-2">
                                    <input type="text" class="form-control datepicker" id="doePassport" placeholder="DOE Passport">
                                </div>
                                <button type="submit" class="btn btn-add-now mb-2 px-4">Tambah Sekarang</button>
                            </form>
                            <h3 class="mt-2 mb-0">
                                Note
                            </h3>
                            <p class="disclaimer mb-0">
                                Kamu dapat menambahkan orang yang memiliki akun
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="card card-details card-right">
                        <h2>Checkout Informasi</h2>
                        <table class="trip-information">
                            <tr>
                                <th widht="50%">Member</th>
                                <td widht="50%" class="text-right">2 orang</td>
                            </tr>
                            <tr>
                                <th widht="50%">Additional VISA</th>
                                <td widht="50%" class="text-right">$190,00</td>
                            </tr>
                            <tr>
                                <th widht="50%">Harga Trip</th>
                                <td widht="50%" class="text-right">$80,00 /orang</td>
                            </tr>
                            <tr>
                                <th widht="50%">Sub Total</th>
                                <td widht="50%" class="text-right">$280,00 /orang</td>
                            </tr>
                            <tr>
                                <th widht="50%">Total(+Unique)</th>
                                <td widht="50%" class="text-right text-total">
                                    <span class="text-blue">$ 279,</span>
                                    <span class="text-orange">33</span>
                                </td>
                            </tr>
                        </table>
                        <hr />
                        <h2>Intruksi Pembayaran</h2>
                        <p class="payment-instruction">Selesaikan Pembayaran </p>
                        <div class="bank">
                            <div class="bank-item pb-3">
                                <img src="{{url('frontend/image/icon-bank.png')}}"class="bank-image" alt="">
                                <div class="description">
                                    <h3>PT Nomads ID</h3>
                                    <p>
                                        0883 2191 7584
                                        <br> Bank Central Wedung
                                    </p>
                                </div>
                                <div class="clearfix"></div>
                            </div>

                            <div class="bank-item pb-3">
                                <img src="{{url('frontend/image/icon-bank.png')}}"class="bank-image" alt="">
                                <div class="description">
                                    <h3>PT Nomads ID</h3>
                                    <p>
                                        0883 2191 7983
                                        <br> HSBB
                                    </p>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                    </div>
                    <div class="join-container">
                        <a href="{{ route('checkout-success') }}" class="btn btn-block btn-join-now mt-3 py-2">Konfirmasi Pembayaran</a>
                    </div>
                    <div class="text-center mt-3">
                        <a href="{{ route('home') }}" class="text-muted">
                            batalkan pemesanan
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
@endsection

@push('prepend-style')
<link rel="stylesheet" href="{{url('frontend/libraries/gijgo/css/gijgo.min.css')}}">
@endpush

@push('addon-script')
{{-- {{url('') }}  not use this--}}
<script src="{{url('frontend/libraries/gijgo/js/gijgo.min.js')}}"></script>
<script>
    $(document).ready(function(){
        $('.datepicker').datepicker({
            uiLibrary: 'bootstrap4',
            icons: {
                rightIcon: '<img src="{{ url('frontend/image/icon-date.png')}}" />'
            }
        });
    }); 
</script>
@endpush 
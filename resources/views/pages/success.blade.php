@extends('layouts.success')

@section('title', 'Checkout Success')

@section('content')
<main>
    <div class="section-success d-flex align-items-center">
        <div class="col text-center">
            <img src="{{url('/frontend/image/sucess icon.png')}}" alt="">
            <h1>Yay! Sucsess</h1>
            <p>
                we've sent you email for trip Instruction
                <br> please read it as well
            </p>
            <a href="{{url('/')}}" class="btn btn-homepage mt-3 px-5">
                Home Page
            </a>
        </div>
    </div>
</main>
@endsection

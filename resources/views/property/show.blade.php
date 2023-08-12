@extends('layouts.property')
@section('content')
<div class="container">
    <div class="row g-5 align-items-center mt-2">
        <a href="{{ route('home') }}" class="p-2 btn btn-primary text-white">Go back</a>
        <div class="col-lg-6 wow fadeIn" data-wow-delay="0.1s" style="visibility: visible; animation-delay: 0.1s; animation-name: fadeIn;">
            <div class="about-img position-relative overflow-hidden p-5 pe-0">
                <img class="img-fluid w-100" src="{{ asset('img/property-1.jpg') }}">
            </div>
        </div>
        <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s" style="visibility: visible; animation-delay: 0.5s; animation-name: fadeIn;">
            <h1 class="mb-4">#{{ $property->property_name }}</h1>
            <p class="mb-4">{{ $property->description }}</p>
            <p><i class="fa fa-check text-primary me-3"></i>Comfort</p>
            <p><i class="fa fa-check text-primary me-3"></i>Affordability</p>
            <p><i class="fa fa-check text-primary me-3"></i>Safety</p>
            <a class="btn btn-primary py-3 px-5 mt-3" href="">Read More</a>
        </div>
    </div>
</div>
@endsection

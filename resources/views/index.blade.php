@extends('design.layout')

@section('page-content')
    <div class="row pt-lg-4">
        <div class="col-lg-4 col-md-5 pt-3 pt-md-4 pt-lg-5">
            <h1 class="display-4 fw-bolder text-light pb-2 mb-4 me-md-n5">Easy Search, Easy Buy</h1>
            <p class="fs-lg text-light opacity-70">Finder is a leading digital marketplace for the automotive industry
                that connects car shoppers with sellers. </p>
        </div>
        <div class="col-lg-8 col-md-7 pt-md-5">
            <img class="my-4 ms-auto" style="max-height: 400px" src="{{asset('images/cars/GT3-no-bg.png')}}">
        </div>
        <div class="col-12">
            <h2 class="fw-bold text-light">Find Your Next Car</h2>
            <p class="fs-lg text-light opacity-70">Quickly search thousands of cars to find the perfect one.</p>
            <livewire:index-search/>
        </div>

        <div class="col-12 pt-md-5">
            <h3 class="fw-bolder text-light mb-5">Most Popular Body Types</h3>
            <div class="row">
                <x-car-card :imgSrc="asset('images/cars/766-7667235_porsche-911-base-porsche.png')" title="Exotic"/>
                <x-car-card :imgSrc="asset('images/cars/812-8122601_jaguar-f-type-2019-2019-jaguar-f-type.png')" title="Coupe"/>
                <x-car-card :imgSrc="asset('images/cars/940-9408702_new-2019-mercedes-benz-e-class-e-subaru.png')" title="Estates"/>
            </div>
        </div>

        <div class="col-12 pt-md-5">
            <h3 class="fw-bolder text-light mb-5">Recent Reviews</h3>
            <div class="row card-deck">
                <div class="col-4">
                    <x-review-card :image="asset('images/reviews/porsche.jpg')" reviewCar="Porsche 911 Turbo" tagline="'The 911 stretches the poles of a sports car's abilities without putting a foot wrong.'" category="Sports Cars"/>
                </div>
                <div class="col-4">
                    <x-review-card :image="asset('images/reviews/bmw_440i_convertible.jpg')" reviewCar="BMW 440I Convertible" tagline="'We love a bit of innovation, but sometimes traditional methods are best.'" category="Convertible"/>
                </div>
                <div class="col-4">
                    <x-review-card :image="asset('images/reviews/abath_500.jpg')" reviewCar="Abarth 595" tagline="'The Abarth 595 is a bit like a granny on roller skates.'" category="Hot Hatch"/>
                </div>
            </div>
        </div>
    </div>
@endsection

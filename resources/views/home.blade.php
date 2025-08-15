@extends('layout.master')

@section('title', 'Home - TechStore')

@section('content')
<section class="hero text-center text-md-start p-5 bg-light">
    <div class="container d-flex flex-column flex-md-row align-items-center">
        <div class="me-md-5 mb-4 mb-md-0">
            <h1 class="display-5 fw-bold">Upgrade Your Tech Life</h1>
            <p class="lead">Explore the latest in tech gear and gadgets at unbeatable prices.</p>
            <a href="/products" class="btn btn-primary btn-lg mt-3">Shop Now</a>
        </div>
        <img src="{{ asset('images/coms.webp') }}" class="img-fluid w-50" alt="Hero Image">
    </div>
</section>

<section class="py-5">
    <div class="container">
        <h2 class="fw-bold">More content coming soon...</h2>
    </div>
</section>
@endsection

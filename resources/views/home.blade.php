@extends('layouts.app')

@section('content')
<div class="hero-section">
<img src="{{ asset('images/hero-doctor.jpg') }}" alt="doctor" class="hero-image">
    <div class="hero-left">
        <h1>Dubai’s Most Convenient Lab Test Service At Your Door</h1>
        <ul>
            <li>Hassle-free Home Sample Collection</li>
            <li>Available Anytime, Anywhere in Dubai</li>
        </ul>
        <a href="#" class="btn">BOOK NOW</a>
    </div>
</div>

@include('sections.labinfo')
@include('sections.labtest')
 @include('sections.getstarted')
 @include('sections.reviews')
 @include('sections.faq')
 @include('sections.footer')

@endsection





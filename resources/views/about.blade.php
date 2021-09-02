@extends('layouts.user_app')
@section('content')
<!-- /// HERO SECTION /// -->
<div id="hero-section" class="small-margin">
    {{-- <img src="{{asset('assets/front/images/bg_2.jpg')}}" alt="about-us" class="img-fluid"> --}}
    <div class="row hero-unit-about">
        <div class="container">
            <div class="hero-caption"><!-- Main Tagline -->
                <h1>About<span class="colored">Us</span></h1>
            </div>
        </div>
    </div>
</div><!-- Hero Section End -->
<!-- /// Main Container /// -->
<div class="container">
    <!-- /// ABOUT SECTION /// -->
    <div id="about" class="large-margin about">
        <div class="row heading tiny-margin">
            <div class="col-md-auto">
                <h1>ABOUT <span class="colored">US</span></h1>
            </div>
            <div class="col">
                <hr class="animation-element extend">
            </div>
        </div>
        <div class="row">
            <p class="small-margin">ClodPi Pro Hotspot does efficiently operate on low power
                consumption using as much power as a broadband router (15W)
                with signals covering long range allowing connectivity to tens of
                thousands of LoRaWAN end nodes within the range.</p>
            <div class="col-md-6 about-img">
               
                <img id="awards" src="{{asset('assets/front/images/awards.png')}}" class="img-fluid" alt="awads">
            </div>
            <div class="col-md-6">
                <img id="support-image" src="{{asset('assets/front/images/product-img/clod-pi.png')}}" data-src="{{asset('assets/front/images/product-img/clod-pi.png')}}" class="img-fluid b-lazy" alt="digital collage">
            </div>
        </div>
    </div>
    <!-- /// CONTACT SECTION /// -->
    <div id="contact" class="large-margin">
        <a href="contact.html"></a><!-- Nav Anchor -->
        <div class="row heading tiny-margin">
            <div class="col-md-auto">
                <h1 class="animation-element slide-down">GET IN <span class="colored">TOUCH</span></h1>
            </div>
            <div class="col">
                <hr class="animation-element extend">
            </div>
        </div>
        <div class="">
            <div class="row small-margin">
                <div class="col-md-11">
                    <p>We would love to hear from you.</p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <h2 class="short-hr-left">LEAVE US A MESSAGE</h2>
                    <form id="contactForm" data-toggle="validator" method="POST">
                        <div class="form-group">
                            <!-- Name Field -->
                            <input type="text" id="name" name="name" placeholder="Full Name*" required size="35" data-error="Name is required">
                            <div class="help-block with-errors"></div>
                        </div>
                        <div class="form-group">
                            <!-- Email Field -->
                            <input type="email" id="email" name="email" placeholder="Email*" required size="35" data-error="Email is required">
                            <div class="help-block with-errors"></div>
                        </div>
                        <div class="form-group">
                            <!-- Message Field -->
                            <textarea id="message" name="message" placeholder="Message*" required data-error="Message cannot be empty"></textarea>
                            <p class="subtle">* required field</p>
                            <div class="help-block with-errors"></div>
                            <!-- Submit Button -->
                            <button type="submit" class="button">SEND MESSAGE</button>
                            <!-- Success Message -->
                            <div id="msgSubmit" class="text-center hidden"></div>
                        </div>
                    </form>
                </div>
                <div class="col-md-6">
                    <h2 class="short-hr-left">OUR DETAILS</h2>
                    <div id="contact-info">
                        <ul>
                            <li><i class="fa fa-phone"></i><p>Phone: <span class="colored"><a href="tel:+1(803)635585">+91 9999 999 999</a></span></p></li>
                            <li><i class="fa fa-envelope"></i><p>Email: <span class="colored"><a href="mailto:office@example.com">sales@clodpi.io</a></span></p></li>
                            <li><i class="fa fa-map-marker"></i><p>Address: <span class="colored">Delhi,India 110060</span></p></li>
                        </ul>
                    </div>
                    <!-- Google Map -->
                    <div id="map-canvas"></div>
                </div>
            </div>
        </div>
    </div>
</div><!-- Main Container End -->
@endsection()
@extends('layouts.user_app')
@section('content')
<!-- /// HERO SECTION /// -->


<!-- /// Main Container /// -->
<div class="container">
    <!-- /// GAMES SECTION /// -->
    <div id="games" class="large-margin cart">
        <a href="games.html"></a><!-- Nav Anchor -->
        <div class="row heading tiny-margin">
            <div class="col-md-auto">
                <h1>OUR <span class="colored">PRODUCTS</span></h1>
            </div>
            <div class="col">
                <hr class="animation-element extend">
            </div>
        </div>
        <div class="row ">
            <div class="col-md-11 small-margin">
               <p>ClodPi Pro Hotspot does efficiently operate on low power
                consumption using as much power as a broadband router (15W)
                with signals covering long range allowing connectivity to tens of
                thousands of LoRaWAN end nodes within the range.</p>
            </div>
            {{-- <div class="col-md-12">
                <ul class="game-tags">
                    <li>Sort By Tag :</li>
                    <li><a href="#" data-filter=".new">NEW</a></li>
                    <li><a href="#" data-filter="*">ALL</a></li>
                    <li><a href="#" data-filter=".pc">PC</a></li>
                    <li><a href="#" data-filter=".mobile">MOBILE</a></li>
                </ul>
            </div> --}}
        </div>
        <div class="games-portfolio ">
            <!-- Game Card Video -->
            <div class="row game-card pc new">
                <div class="col-lg-12 col-xl-5 game-card-left">
                    <img src="{{asset('assets/front/images/product-img/clod-pi.png')}}" data-src="{{asset('assets/front/images/product-img/clod-pi.png')}}" class="img-fluid b-lazy" alt="Product thumbnail"> <!-- Video Thumbnail Img -->
                </div>
                <div class="col-lg-12 col-xl-7 game-card-right">
                    <h2 class="short-hr-left">{{$product->name}}</h2>
                    {{-- <p class="tags"><span class="subtle">Action RPG | PC</span> </p> --}}
                    <p class="game-description">{{$product->description}}</p>
                    <input type="hidden" name="product_id" id="product_id" value="{{$product->id}}">
                    <div class="steam-btn">
                        <a href="javascript:void(0)" id="addToCart">
                            <i class="fa fa-shopping-cart fa-2x"></i>
                            <p>Add To Cart</p>
                        </a>
                    </div>
                    <div class="order-btn">
                        <a href="{{url('checkout')}}">
                            {{-- <i class="fa fa-shopping-cart fa-2x"></i> --}}
                            <p><b>Order Now</b></p>
                        </a>
                    </div>
                    {{-- <div class="reviews">
                        <a href="#"><div class="score-card">
                            <p class="score">8.0</p>
                            <p>Gamespot</p>
                        </div></a>
                        <a href="#"><div class="score-card">
                            <p class="score">7.9</p>
                            <p>IGN</p>
                        </div></a>
                        <a href="#"><div class="score-card">
                            <p class="score">86</p>
                            <p>Metacritic</p>
                        </div></a>
                    </div> --}}
                </div>
            </div><!-- Game Card End -->
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
@section('scripts')
<script type="text/javascript">
  
    $("#addToCart").click(function (e) {
        e.preventDefault();

        var id = $('#product_id').val();
        $.ajax({
            url: '{{ route('add.to.cart') }}',
            method: "POST",
            data: {
                _token: '{{ csrf_token() }}', 
                id: id
            },
            success: function (response) {
                swal("Success",response,"success").then(function(){ 
                    location.href(cart);});
            }
        });
    });
  
</script>
@endsection
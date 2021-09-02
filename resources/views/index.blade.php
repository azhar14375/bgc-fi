@extends('layouts.user_app')
@section('content')
<!-- /// HERO SECTION /// -->
<div id="hero-section" class="small-margin">
    <div id="particles-web"></div>
    <div class="row hero-unit">
        <div class="container">
            <div class="hero-caption"><!-- Main Tagline -->
                <h1>We Make <span class="colored">Awesome Games</span></h1>
            </div>
        </div>
    </div>
</div><!-- Hero Section End -->

<!-- /// Main Container /// -->
<div class="container">
    <!-- /// ABOUT SECTION /// -->
    <div id="about" class="large-margin">
        <a href="about.html"></a><!-- Nav Anchor -->
        <div class="row heading tiny-margin">
            <div class="col-md-auto">
                <h1 class="animation-element slide-down">ABOUT <span class="colored">US</span></h1>
            </div>
            <div class="col">
                <hr class="animation-element extend">
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <p class="small-margin">ClodPi Pro Hotspot does efficiently operate on low power
                    consumption using as much power as a broadband router (15W)
                    with signals covering long range allowing connectivity to tens of
                    thousands of LoRaWAN end nodes within the range.</p>
                <img id="awards" src="{{asset('assets/front/images/awards.png')}}" class="img-fluid" alt="awads">
            </div>
            <div class="col-md-6">
                <img id="support-image" src="{{asset('assets/front/images/product-img/clod-pi.png')}}" data-src="{{asset('assets/front/images/product-img/clod-pi.png')}}" class="img-fluid b-lazy" alt="digital collage">
            </div>
        </div>
    </div>
    <!-- /// GAMES SECTION /// -->
    <div id="games" class="large-margin">
        <a href="games.html"></a><!-- Nav Anchor -->
        <div class="row heading tiny-margin">
            <div class="col-md-auto">
                <h1 class="animation-element slide-down">OUR <span class="colored">PRODUCTS</span></h1>
            </div>
            <div class="col">
                <hr class="animation-element extend">
            </div>
        </div>
        <div class="row ">
            <div class="col-md-11 small-margin">
               <p><strong><span class="colored">ClodPi Pro Hotspot</span></strong> is an articulately 
                architecture combining the leading LoRaWAN wireless protocol
                compatible with all the LoRaWAN nodes or devices. It is
                compatible with Helium LongFi™ technology and Helium
                Blockchain technology.</p>
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
                    <img src="{{asset('assets/front/images/product-img/clod-pi.png')}}" data-src="{{asset('assets/front/images/product-img/clod-pi.png')}}" class="img-fluid b-lazy" alt="video thumbnail"> <!-- Video Thumbnail Img -->
                </div>
                <div class="col-lg-12 col-xl-7 game-card-right">
                    <h2 class="short-hr-left">{{$product->name}}</h2>
                    {{-- <p class="tags"><span class="subtle">Action RPG | PC</span> </p> --}}
                    <p class="game-description">{{$product->description}}</p>
                    <div class="button">
                        <a href="{{url('products')}}">
                            {{-- <i class="fa fa-shopping-cart fa-2x"></i> --}}
                            <p class="order-now-btn"><b>Order Now</b></p>
                        </a>
                    </div>
                </div>
            </div><!-- Game Card End -->
        </div>
    </div>
    <!-- /// TEAM SECTION /// -->
    <div id="team" class="large-margin">
        <a href="team.html"></a><!-- Nav Anchor -->
        <div class="row heading tiny-margin">
            <div class="col-md-auto">
                <h1 class="animation-element slide-down">THE <span class="colored">GALLAERY</span></h1>
            </div>
            <div class="col">
                <hr class="animation-element extend">
            </div>
        </div>
        {{-- <div class="row medium-margin">
            <div class="col-md-11 tiny-margin">
                <p>Our passion unites us. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus tincidunt mi ut mauris varius, vitae lobortis erat ullamcorper. Pellentesque vel dolor non nisi fringilla scelerisque in non ante.</p>
            </div>
            <div id="full-row" class="row text-center">
                <div class="col-md-3 team-card">
                    <figure>
                        <img src="{{asset('assets/front/images/placeholder.jpg')}}" data-src="{{asset('assets/front/images/team1.jpg')}}" class="img-fluid b-lazy" alt="teammember">
                        <figcaption class="team-caption">
                            <p>“Lorem ipsum dolor sit amet, consectetur adipiscing elit.”</p>
                            <hr class="hr-short">
                            <ul>
                                <li><a href="#"><i class="fa fa-facebook fa-lg"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter fa-lg"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin fa-lg"></i></a></li>
                            </ul>
                        </figcaption>
                    </figure>
                    <p class="team-name">Vladimir M.</p>
                    <p class="subtle">Lead Designer</p>
                </div>
                <div class="col-md-3 team-card">
                    <figure>
                        <img src="{{asset('assets/front/images/product-img/clod-pi.png')}}" data-src="{{asset('assets/front/images/product-img/clod-pi.png')}}" class="img-fluid b-lazy" alt="teammember">
                        <figcaption class="team-caption">
                            <p>“Lorem ipsum dolor sit amet, consectetur adipiscing elit.”</p>
                            <hr class="hr-short">
                            <ul>
                                <li><a href="#"><i class="fa fa-facebook fa-lg"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter fa-lg"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin fa-lg"></i></a></li>
                            </ul>
                        </figcaption>
                    </figure>
                    <p class="team-name">Asimov R.</p>
                    <p class="subtle">Founder</p>
                </div>
                <div class="col-md-3 team-card">
                    <figure>
                        <img src="{{asset('assets/front/images/placeholder.jpg')}}" data-src="{{asset('assets/front/images/team3.jpg')}}" class="img-fluid b-lazy" alt="teammember">
                        <figcaption class="team-caption">
                            <p>“Lorem ipsum dolor sit amet, consectetur adipiscing elit.”</p>
                            <hr class="hr-short">
                            <ul>
                                <li><a href="#"><i class="fa fa-facebook fa-lg"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter fa-lg"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin fa-lg"></i></a></li>
                            </ul>
                        </figcaption>
                    </figure>
                    <p class="team-name">Natalia I.</p>
                    <p class="subtle">Lead Artist</p>
                </div>
                <div class="col-md-3 team-card">
                    <figure>
                        <img src="{{asset('assets/front/images/placeholder.jpg')}}" data-src="{{asset('assets/front/images/team4.jpg')}}" class="img-fluid b-lazy" alt="teammember">
                        <figcaption class="team-caption">
                            <p>“Lorem ipsum dolor sit amet, consectetur adipiscing elit.”</p>
                            <hr class="hr-short">
                            <ul>
                                <li><a href="#"><i class="fa fa-facebook fa-lg"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter fa-lg"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin fa-lg"></i></a></li>
                            </ul>
                        </figcaption>
                    </figure>
                    <p class="team-name">Dimitri A.</p>
                    <p class="subtle">Programmer</p>
                </div>
            </div>
        </div> --}}
        <div class="row tiny-margin">
            <div class="col-md-11">
                <h2 class="short-hr-left">OUR STUDIO</h2>
                <p>Helium LongFi™ is a technology architecture that combines
                    LoRaWAN wireless technology and the Helium Blockchain.
                    LongFi™ is optimised for miles of range, and long battery life for
                    IoT devices.
                    </p>
            </div>
        </div>
        <div class="grid-gallery">
            <div class="row">
                <div class="col-md-4 gallery-item">
                    <a href="{{asset('assets/front/images/product-img/clod-pi-1.png')}}" data-lightbox="studio_gallery">
                        <div class="overlay gallery">
                            <i class="fa fa-picture-o fa-3x"></i>
                        </div>
                        <img src="{{asset('assets/front/images/placeholder.jpg')}}" data-src="{{asset('assets/front/images/product-img/clod-pi-1.png')}}" class="img-fluid b-lazy" alt="">
                    </a>
                </div>
                <div class="col-md-4 gallery-item">
                    <a href="{{asset('assets/front/images/product-img/clod-pi-2.png')}}" data-lightbox="studio_gallery">
                        <div class="overlay gallery">
                            <i class="fa fa-picture-o fa-3x"></i>
                        </div>
                        <img src="{{asset('assets/front/images/placeholder.jpg')}}" data-src="{{asset('assets/front/images/product-img/clod-pi-2.png')}}" class="img-fluid b-lazy" alt="">
                    </a>
                </div>
                <div class="col-md-4 gallery-item">
                    <a href="{{asset('assets/front/images/product-img/clod-pi-3.png')}}" data-lightbox="studio_gallery">
                        <div class="overlay gallery">
                            <i class="fa fa-picture-o fa-3x"></i>
                        </div>
                        <img src="{{asset('assets/front/images/placeholder.jpg')}}" data-src="{{asset('assets/front/images/product-img/clod-pi-3.png')}}" class="img-fluid b-lazy" alt="">
                    </a>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 gallery-item">
                    <a href="{{asset('assets/front/images/product-img/clod-pi-5.png')}}" data-lightbox="studio_gallery">
                        <div class="overlay gallery">
                            <i class="fa fa-picture-o fa-3x"></i>
                        </div>
                        <img src="{{asset('assets/front/images/placeholder.jpg')}}" data-src="{{asset('assets/front/images/product-img/clod-pi-5.png')}}" class="img-fluid b-lazy" alt="">
                    </a>
                </div>
                <div class="col-md-4 gallery-item">
                    <a href="{{asset('assets/front/images/product-img/clod-pi-6.png')}}" data-lightbox="studio_gallery">
                        <div class="overlay gallery">
                            <i class="fa fa-picture-o fa-3x"></i>
                        </div>
                        <img src="{{asset('assets/front/images/placeholder.jpg')}}" data-src="{{asset('assets/front/images/product-img/clod-pi-6.png')}}" class="img-fluid b-lazy" alt="">
                    </a>
                </div>
                <div class="col-md-4 gallery-item">
                    <a href="{{asset('assets/front/images/product-img/clod-pi-8.png')}}" data-lightbox="studio_gallery">
                        <div class="overlay gallery">
                            <i class="fa fa-picture-o fa-3x"></i>
                        </div>
                        <img src="{{asset('assets/front/images/placeholder.jpg')}}" data-src="{{asset('assets/front/images/product-img/clod-pi-8.png')}}" class="img-fluid b-lazy" alt="">
                    </a>
                </div>
            </div>
        </div>
    </div>
    <!-- /// CAREERS SECTION /// -->
    {{-- <div id="careers" class='large-margin'>
        <a href="careers.html"></a><!-- Nav Anchor -->
        <div class="row heading tiny-margin">
            <div class="col-md-auto">
                <h1 class="animation-element slide-down">WE'RE <span class="colored">HIRING</span></h1>
            </div>
            <div class="col">
                <hr class="animation-element extend">
            </div>
        </div>
        <div class="row medium-margin">
            <div class="col-md-11">
                <h2 class="short-hr-left">JOB OPENINGS</h2>
                <p>Are you a talented and motivated individual? Then we would love to have you in our team. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque tincidunt, nisl non mattis sollicitudin, risus quam tempor sem, vel interdum est libero non odio.</p><br>
            </div>
            <div class="col-md-4">
                <div class="job-card">
                    <h3 class="colored">LEAD PROGRAMMER</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                    <button class="button" data-toggle="modal" data-target="#modal1">View Details</button>
                </div>
                <!-- Modal -->
                <div class="modal fade" id="modal1" tabindex="-1" role="dialog" aria-labelledby="lead-programmer" aria-hidden="true">
                    <div class="modal-dialog modal-lg" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h2 class="modal-title colored" id="lead-programmer">LEAD PROGRAMMER</h2>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <h3>THE IDEAL CANDIDATE:</h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque tincidunt, nisl non mattis sollicitudin, risus quam tempor sem, vel interdum est libero non odio.</p>
                                <ul class="skill-list">
                                    <li>C++</li>
                                    <li>Dream Weaver</li>
                                    <li>Unreal Engine</li>
                                    <li>Blender</li>
                                    <li>Scale Form</li>
                                </ul>
                                <br>
                                <h3>REQUIREMENTS:</h3>
                                <ul>
                                <li><p>B.Sc. in Computer Science and/or Mathematics</p></li>
                                <li><p>Proficient with c++ and object-oriented programming</p></li>
                                <li><p>Development experience in the games industry a plus.</p></li>
                                <li><p>Strong communication and organizational skills</p></li>
                                <li><p>Must work well under pressure and handle multiple tasks</p></li>
                                <li><p>Passion for making GREAT games</p></li>
                                </ul>
                                <br>
                                <h3>HOW TO APPLY:</h3>
                                <p>If you think you have what it takes to join our team you an apply here <a href="mailto:office@example.com" >office@example.com</a></p>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="button secondary" data-dismiss="modal">Close</button>
                                <a href="mailto:office@example.com" class="button">Apply</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="job-card">
                    <h3 class="colored">LEVEL DESIGNER</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                    <button class="button" data-toggle="modal" data-target="#modal2">View Details</button>
                </div>
                <!-- Modal -->
                <div class="modal fade " id="modal2" tabindex="-1" role="dialog" aria-labelledby="level-designer" aria-hidden="true">
                    <div class="modal-dialog modal-lg" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h2 class="modal-title colored" id="level-designer">LEVEL DESIGNER</h2>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <h3>THE IDEAL CANDIDATE:</h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque tincidunt, nisl non mattis sollicitudin, risus quam tempor sem, vel interdum est libero non odio.</p>
                                <ul class="skill-list">
                                    <li>C++</li>
                                    <li>Dream Weaver</li>
                                    <li>Unreal Engine</li>
                                    <li>Blender</li>
                                    <li>Scale Form</li>
                                </ul>
                                <br>
                                <h3>REQUIREMENTS:</h3>
                                <ul>
                                <li><p>B.Sc. in Computer Science and/or Mathematics</p></li>
                                <li><p>Proficient with c++ and object-oriented programming</p></li>
                                <li><p>Development experience in the games industry a plus.</p></li>
                                <li><p>Strong communication and organizational skills</p></li>
                                <li><p>Must work well under pressure and handle multiple tasks</p></li>
                                <li><p>Passion for making GREAT games</p></li>
                                </ul>
                                <br>
                                <h3>HOW TO APPLY:</h3>
                                <p>If you think you have what it takes to join our team you an apply here <a href="mailto:office@example.com" >office@example.com</a></p>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="button secondary" data-dismiss="modal">Close</button>
                                <a href="mailto:office@example.com" class="button">Apply</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="job-card">
                    <h3 class="colored">AI ENGINEER</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                    <button class="button" data-toggle="modal" data-target="#modal3">View Details</button>
                </div>
                <!-- Modal -->
                <div class="modal fade " id="modal3" tabindex="-1" role="dialog" aria-labelledby="ai-engineer" aria-hidden="true">
                    <div class="modal-dialog modal-lg" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h2 class="modal-title colored" id="ai-engineer">AI ENGINEER</h2>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                           <div class="modal-body">
                                <h3>THE IDEAL CANDIDATE:</h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque tincidunt, nisl non mattis sollicitudin, risus quam tempor sem, vel interdum est libero non odio.</p>
                                <ul class="skill-list">
                                    <li>C++</li>
                                    <li>Dream Weaver</li>
                                    <li>Unreal Engine</li>
                                    <li>Blender</li>
                                    <li>Scale Form</li>
                                </ul>
                                <br>
                                <h3>REQUIREMENTS:</h3>
                                <ul>
                                <li><p>B.Sc. in Computer Science and/or Mathematics</p></li>
                                <li><p>Proficient with c++ and object-oriented programming</p></li>
                                <li><p>Development experience in the games industry a plus.</p></li>
                                <li><p>Strong communication and organizational skills</p></li>
                                <li><p>Must work well under pressure and handle multiple tasks</p></li>
                                <li><p>Passion for making GREAT games</p></li>
                                </ul>
                                <br>
                                <h3>HOW TO APPLY:</h3>
                                <p>If you think you have what it takes to join our team you an apply here <a href="mailto:office@example.com" >office@example.com</a></p>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="button secondary" data-dismiss="modal">Close</button>
                                <a href="mailto:office@example.com" class="button">Apply</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 text-center">
                <h2 class="short-hr-center">OUR NEWSLETTER</h2>
                <p>Stay up to date with the team and our products by subscribing to our newsletter.</p>
                <form id="newsletter" data-toggle="validator">
                    <input type="email" id="emailsign" placeholder="Your email adress"> <!-- Email Field -->
                    <button type="submit" id="form-signup" class="button">SUBSCRIBE</button>
                    <div id="msgSignup" class="h3 text-center hidden"></div>
                </form>
            </div>
        </div>
    </div> --}}
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
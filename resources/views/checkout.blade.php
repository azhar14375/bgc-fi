@extends('layouts.user_app')
@section('content')
<!-- /// Main Container /// -->
@php
$countries=['India'];
$states=[ "Andhra Pradesh",
            "Arunachal Pradesh",
                "Assam",
                "Bihar",
                "Chhattisgarh",
                "Goa",
                "Gujarat",
                "Haryana",
                "Himachal Pradesh",
                "Jammu and Kashmir",
                "Jharkhand",
                "Karnataka",
                "Kerala",
                "Madhya Pradesh",
                "Maharashtra",
                "Manipur",
                "Meghalaya",
                "Mizoram",
                "Nagaland",
                "Odisha",
                "Punjab",
                "Rajasthan",
                "Sikkim",
                "Tamil Nadu",
                "Telangana",
                "Tripura",
                "Uttarakhand",
                "Uttar Pradesh",
                "West Bengal",
                "Andaman and Nicobar Islands",
                "Chandigarh",
                "Dadra and Nagar Haveli",
                "Daman and Diu",
                "Delhi",
                "Lakshadweep",
                "Puducherry"]

@endphp
<div class="container">
    <div id="contact" class="large-margin cart">
        <a href="contact.html"></a><!-- Nav Anchor -->
        <div class="row heading tiny-margin">
            <div class="col-md-auto">
                <h1>CHECKOUT<span class="colored"></span></h1>
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
                    <h2 class="short-hr-left">ORDER DETAILS</h2>
                    @if(session('cart'))
                    @php
                     $total=0;   
                    @endphp
                        @foreach (session('cart') as $item)
                        {{-- {{dd($item)}} --}}
                        @php $total+=$item['quantity']*$item['price'];@endphp
                        <div class="product-info row">
                            <div class="col-md-6">
                                <img src="{{asset('assets/front/images/product-img/clod-pi.png')}}" data-src="{{asset('assets/front/images/product-img/clod-pi.png')}}" class="img-fluid b-lazy" alt="video thumbnail">
                            </div>
                            <div class="col-md-6">
                                <table class="table order-details-table">
                                    <tr>
                                        <th>Quantity</th>
                                        <th>Price</th>
                                    </tr>
                                    <tr>
                                        <td>{{$item['quantity']}}</td>
                                        <td>{{$item['price']}}</td>
                                    </tr>
                                    <tr>
                                        <th>Grand Total:</th>
                                        <th>{{$total}}</th>
                                    </tr>
                                </table>
                            </div>
                        </div>
                        @endforeach
                    @else
                    <div class="product-info row">
                        <div class="col-md-6">
                            <img src="{{asset('assets/front/images/product-img/clod-pi.png')}}" data-src="{{asset('assets/front/images/product-img/clod-pi.png')}}" class="img-fluid b-lazy" alt="video thumbnail">
                        </div>
                        <div class="col-md-6">
                            <table class="table order-details-table">
                                <tr>
                                    <th>Quantity</th>
                                    <th>Price</th>
                                </tr>
                                <tr>
                                    <td>1</td>
                                    <td>9999</td>
                                </tr>
                                <tr>
                                    <th>Grand Total:</th>
                                    <th>9999</th>
                                </tr>
                            </table>
                        </div>
                    </div>
                        
                    @endif
                </div>
                <div class="col-md-6">
                    <h2 class="short-hr-left">Fill Details to Proceed</h2>
                    <form id="contactForm" data-toggle="validator">
                        <div class="form-group">
                            <!-- Name Field -->
                            <input type="text" id="name" name="name" placeholder="Full Name*" required size="35" data-error="Name is required">
                            <div class="help-block with-errors"></div>
                        </div>
                        <div class="form-group row">
                            <div class="col-md-6">
                                <!-- Email Field -->
                                <input type="email" id="email" name="email" placeholder="Email*" required size="35" data-error="Email is required">
                                <div class="help-block with-errors"></div>
                            </div>
                            <div class="col-md-6">
                                <!-- Mobile Field -->
                                <input type="text" id="mobile" name="mobile" placeholder="Mobile*" required size="12" data-error="Mobile is required">
                                <div class="help-block with-errors"></div>
                            </div>
                        </div>
                        <div class="form-group">
                            <!-- Address Field -->
                            <input type="text" id="address" name="address" placeholder="Address*" data-error="Address is required">
                            <div class="help-block with-errors"></div>  
                        </div>
                        <div class="form-group">
                            <!-- Flat/Apartment Field -->
                            <input type="text" id="apartment" name="apartment" placeholder="Appartment,Building,etc.(optional)">
                            <div class="help-block with-errors"></div>  
                        </div>
                        <div class="form-group row">
                            <!-- City Field -->
                            <div class="col-md-6">
                                <input type="text" id="city" name="city" placeholder="City*" data-error="City is required">
                                <div class="help-block with-errors"></div> 
                            </div> 
                            <!-- State Field -->
                            <div class="col-md-6">
                                <!-- Pincode -->
                                <input type="text" id="pincode" name="pincode" placeholder="Pincode*" data-error="Pincode is required">
                                <div class="help-block with-errors"></div> 
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-md-6">
                                <select class="form-select" name="state" id="state" data-error="State is required">
                                    <option value="0" selected disabled>Select City</option>
                                    @foreach($states as $state)
                                     <option value="{{$state}}">{{$state}}</option>   
                                    @endforeach
                                </select>
                                <div class="help-block with-errors"></div>
                            </div>
                            <div class="col-md-6">
                                <select name="country" id="country" data-error="Country is required">
                                    <option value="0" selected disabled>Select Country</option>
                                    @foreach($countries as $country)
                                     <option value="{{$country}}">{{$country}}</option>   
                                    @endforeach
                                </select>
                                <div class="help-block with-errors"></div>
                            </div> 
                        </div>
                        <div class="form-group">
                            <p class="subtle">* required field</p>
                            <div class="help-block with-errors"></div>
                            <!-- Submit Button -->
                            <button type="submit" class="button">Proceed To Pay</button>
                            <!-- Success Message -->
                            <div id="msgSubmit" class="text-center hidden"></div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div><!-- Main Container End -->
@endsection()
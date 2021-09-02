@extends('layouts.user_app')
@section('content')
<!-- /// Main Container /// -->
<div class="container">
    <!-- /// ABOUT SECTION /// -->
    <div id="about" class="large-margin cart">
    </div>
    <!-- /// CONTACT SECTION /// -->
    <div id="contact" class="large-margin">
        <div class="">
            <div class="row small-margin">
                <div class="col-md-11">
                    <p>We would love to hear from you. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer viverra laoreet dolor sit amet blandit. Ut suscipit nisl ut risus volutpat malesuada.</p>
                </div>
            </div>
            <div class="row">
                <div class="mx-auto col-md-6">
                    <h2 class="short-hr-left">Change Password</h2>
                    <form id="contactForm" data-toggle="validator">
                        <div class="form-group">
                            <!-- Name Field -->
                            <input type="password" id="password_old" name="password_old" placeholder="Old Password*" required size="35" data-error="Old Password is required">
                            <div class="help-block with-errors"></div>
                        </div>
                        <div class="form-group">
                            <!-- Email Field -->
                            <input type="passwod" id="password" name="password" placeholder="Enter New Password*" required size="35" data-error="Password is required">
                            <div class="help-block with-errors"></div>
                        </div>
                        <div class="form-group">
                            <!-- Email Field -->
                            <input type="password" id="password_confimation" name="password_confimation" placeholder="Confim Password*" required size="35" data-error="Confirm Password is required">
                            <div class="help-block with-errors"></div>
                        </div>
                        <div class="form-group">
                            <p class="subtle">* required field</p>
                            <div class="help-block with-errors"></div>
                            <!-- Submit Button -->
                            <button type="submit" class="button">Change Password</button>
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
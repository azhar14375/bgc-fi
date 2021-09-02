<!doctype html>
<html lang="en">
 
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Login</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{asset('assets/backend/vendor/bootstrap/css/bootstrap.min.css')}}">
    <link href="{{asset('assets/backend/vendor/fonts/circular-std/style.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('assets/backend/libs/css/style.css')}}">
    <link rel="stylesheet" href="{{asset('assets/backend/vendor/fonts/fontawesome/css/fontawesome-all.css')}}">
    <style>
    html,
    body {
        height: 100%;
    }

    body {
        display: -ms-flexbox;
        display: flex;
        -ms-flex-align: center;
        align-items: center;
        padding-top: 40px;
        padding-bottom: 40px;
    }
    </style>
</head>

<body style="background-color:#020202">
    <!-- ============================================================== -->
    <!-- login page  -->
    <!-- ============================================================== -->
    <div class="splash-container">
        <div class="card ">
            <div class="card-header text-center"><a href="{{url('')}}"><h2 style="color: #004cffc7">BGC-FI Registration</h2></a><span class="splash-description">Please enter your information.</span></div>
            <div class="card-body">
                <form method="POST" action="{{ route('register') }}">
                    @csrf
                    <div class="form-group">
                        <input class="form-control form-control-lg  @error('name') is-invalid @enderror" id="name" type="text" name="name" placeholder="Name*" autocomplete="off" value="{{ old('name') }}" autofocus>
                        @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <input class="form-control form-control-lg  @error('email') is-invalid @enderror" type="email" name="email" id="email" placeholder="Email" autocomplete="off" value="{{ old('email') }}" autofocus>
                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <input class="form-control form-control-lg  @error('phone') is-invalid @enderror" id="phone" type="text" name="phone" placeholder="Phone*" autocomplete="off" value="{{ old('phone') }}" autofocus>
                        @error('phone')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <select name="gender" id="gender" class="form-select form-control form-control-lg @error('gender') is-invalid @enderror">
                            <option value="0" selected disabled>Select Gender</option>
                            <option value="male">Male</option>
                            <option value="female">Female</option>
                        </select>
                        @error('gender')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <input id="password"  name="password" type="password" class="form-control form-control-lg @error('password') is-invalid @enderror" placeholder="Password"  required>
                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <input id="password_confirmation"  name="password_confirmation" type="password" class="form-control form-control-lg" placeholder="Password"  required>
                    </div>
                    <button type="submit" class="btn btn-primary btn-lg btn-block">{{__('Registration')}}</button>
                </form>
            </div>
            <div class="card-footer bg-white p-0  ">
                <div class="card-footer-item card-footer-item-bordered">
                    <a href="{{route('login')}}" class="footer-link">Alreday Have an Account?</a>
                </div>
            </div>
        </div>
    </div>
  
    <!-- ============================================================== -->
    <!-- end login page  -->
    <!-- ============================================================== -->
    <!-- Optional JavaScript -->
    <script src="{{asset('assets/backend/vendor/jquery/jquery-3.3.1.min.js')}}"></script>
    <script src="{{asset('assets/backend/vendor/bootstrap/js/bootstrap.bundle.js')}}"></script>
</body>
 
</html>
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
            <div class="card-header text-center"><a href="{{url('')}}"><h2 style="color: #004cffc7">BGC-FI LOGIN</h2></a><span class="splash-description">Please enter your credential.</span></div>
            <div class="card-body">
                <form method="POST" action="{{ route('login') }}">
                    @csrf
                    <div class="form-group">
                        <input class="form-control form-control-lg  @error('email') is-invalid @enderror" id="email" type="email" name="email" id="email" placeholder="Email" autocomplete="off" value="{{ old('email') }}" autofocus>
                        @error('email')
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
                        <label class="custom-control custom-checkbox">
                            <input class="custom-control-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}><span class="custom-control-label">Remember Me</span>
                        </label>
                    </div>
                    <button type="submit" class="btn btn-primary btn-lg btn-block">{{__('Login')}}</button>
                </form>
            </div>
            <div class="card-footer bg-white p-0  ">
                <div class="card-footer-item card-footer-item-bordered">
                    <a href="{{route('register')}}" class="footer-link">Create An Account</a>
                </div>
                <div class="card-footer-item card-footer-item-bordered">
                    @if (Route::has('password.request'))
                        <a href="{{ route('password.request') }}" class="footer-link">{{ __('Forgot Password') }}</a>
                    @endif
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
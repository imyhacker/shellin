<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{config('app.name')}}</title>
    <link rel="stylesheet" href="{{asset('loginstyle/unpkit.css')}}">
    <link rel="stylesheet" href="{{asset('loginstyle/unpkit2.css')}}">
    <link rel="stylesheet" href="https://www.bootstrapdash.com/demo/unplug-ui-kit-pro/src/vendors/@mdi/font/css/materialdesignicons.min.css">
    <link rel="stylesheet" type="text/css" href="https://materialdesignicons.com/cdn/2.0.46/css/materialdesignicons.min.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    <script src="https://cdn.jsdelivr.net/npm/promise-polyfill"></script>
</head>
<body>
    @include('layouts/part/_alert')
    <main class="auth">
        <div class="container-fluid">
            <div class="row vh-100">
                <div class="col-md-6 text-center py-5 d-flex flex-column justify-content-center auth-bg-section text-white" style="background-image: url(https://www.bootstrapdash.com/demo/unplug-ui-kit-pro/demo/assets/images/login-bg.jpg)">
                    <h1 class="text-reset">[ {{config('app.name')}} ]</h1>
                    <h1 class="text-reset">Welcome to <br> Login Page</h1>
                    
                </div>
                <div class="col-md-6 text-center d-flex flex-column py-5 justify-content-center">
                    <div class="auth-form-section">
                    
                        <h2>Sign in</h2>
                        <p>Welcome To Login Page Master :)</p>
                        <form class="auth-form" method="POST" action="{{ route('login') }}">
                            @csrf
                            <div class="form-group">
                                <label for="email" class="sr-only">Email</label>
                                <input type="email" name="email" id="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="Email">

                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="password" class="sr-only">Password</label>
                                <input type="password" id="userPassword" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="Password">

                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                                
                            </div>
                            <button type="submit" class="btn btn-success btn-block mb-3">Sign in</button>
                            <div class="row">
                                <div class="col-md-6 mt-2">
                                Not Have Accout ? 
                                </div>
                                <div class="col-md-6">
                                <a class="btn btn-secondary btn-block mb-3" href="/register">Register</a>
                            </div>

                            </div>
                            <div class="d-md-flex justify-content-between">
                                <div class="form-check">
                                    <input type="checkbox" class="form-check-input" id="termsAgriment" name="remember" {{ old('remember') ? 'checked' : '' }} >
                                    <label class="form-check-label" for="termsAgriment">
                                        Remember Me
                                    </label>
                                </div>
                                @if (Route::has('password.request'))
                                <a class="text-info" href="{{ route('password.request') }}">
                                    {{ __('Forgot Your Password?') }}
                                </a>
                                @endif
                                <br>
                            </div>

                        </form>
                        <h5 class="text-left mb-3 d-flex justify-content-center">Social Media</h5>
                        <p class="mb-0 d-flex justify-content-center">
                            <a href="#" class="btn btn-google mr-2"><i class="mdi mdi-google"></i></a>
                            <a href="#" class="btn btn-wa mr-2"><i class="mdi mdi-whatsapp"></i></a>
                            <a href="#" class="btn btn-facebook mr-2"> <i class="mdi mdi-facebook"></i></a>
                            <a href="#" class="btn btn-twitter mr-2"><i class="mdi mdi-twitter"></i></a>
                            <a href="#" class="btn btn-gt"><i class="mdi mdi-git"></i></a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </main>
    
</body>
</html>
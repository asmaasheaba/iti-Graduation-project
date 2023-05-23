<!doctype html>
<html lang="ar">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer">
    <link rel="stylesheet" href="{{asset('css/registrationStyle.css')}}">
    <title>Atlob</title>

</head>

<body class="body-forms">

    <section class="login py-5 forms">
        <div class="container">
            <h2 class="text-center text-white">مرحبـًا بك في</h2>
            <h4 class="text-center text-white">ATLOPS</h4>
            <h4 class="text-center text-white">أطلبس</h4>
            <div class="row">
                <div class="col-lg-7 col-md-4 empty"></div>
                <div class="col-lg-5 col-md-8 form-cont ">
                    <form method="POST" action="{{ route('login') }}" class="bg-white p-5 login-form form-body">
                        @csrf
                        <h3 class="modal-title w-100 fw-bold mb-4">تسجيل الدخول</h3>
                        <div class="modal-body ">
                            <div class="mb-3">
                                <label for="email" class="mb-3 fw-bold">{{ __('البريد الالكتروني') }}</label>
                                <input type="email" id="email" class="form-control @error('email') is-invalid @enderror" name="email"
                                value="{{ old('email') }}" required autocomplete="email" autofocus>

                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                            </div>



                            <div class="mb-3 input-box">
                                <label class="mb-3 fw-bold" for="password">{{ __('كلمة المرور ') }}</label>
                                <input type="password" id="password" name="password" class="form-control @error('password') is-invalid @enderror" name="password"
                                required autocomplete="current-password">
                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                            </div>


                            @if (Route::has('password.request'))
                                <div class="mb-2" style="direction:ltr;">
                                    <label class="form-check-label" for="remember">
                                        <a href="{{ route('password.request') }}" class="fw-bold forget-password">هل نسيت كلمة المرور؟</a>
                                    </label>
                                </div>
                            @endif


                        </div>

                        <div class="text-center log m-auto mb-3 mt-4">
                            <button type="submit" class="btn py-2 text-light"> تسجيل الدخول </button>
                        </div>

                        <p class="text-center text-secondary"> ليس لديك حساب؟
                            <a href="register" class="fw-bold">انشاء حساب</a>
                        </p>





                    </form>
                </div>
            </div>

        </div>


    </section>
    <div class="container">
        <img src="{{asset ('images/teamwork-bro.png')}}" width="600px" height="600px" class="team-work d-sm-none d-lg-block">
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>



</body>

</html>



{{-- @extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Login') }}</div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('login') }}">
                            @csrf

                            <div class="row mb-3">
                                <label for="email"
                                    class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                                <div class="col-md-6">
                                    <input id="email" type="email"
                                        class="form-control @error('email') is-invalid @enderror" name="email"
                                        value="{{ old('email') }}" required autocomplete="email" autofocus>

                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="password"
                                    class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                                <div class="col-md-6">
                                    <input id="password" type="password"
                                        class="form-control @error('password') is-invalid @enderror" name="password"
                                        required autocomplete="current-password">

                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <div class="col-md-6 offset-md-4">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="remember" id="remember"
                                            {{ old('remember') ? 'checked' : '' }}>

                                        <label class="form-check-label" for="remember">
                                            {{ __('Remember Me') }}
                                        </label>
                                    </div>
                                </div>
                            </div>

                            <div class="row mb-0">
                                <div class="col-md-8 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('Login') }}
                                    </button>

                                    @if (Route::has('password.request'))
                                        <a class="btn btn-link" href="{{ route('password.request') }}">
                                            {{ __('Forgot Your Password?') }}
                                        </a>
                                    @endif
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection --}}

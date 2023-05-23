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
            
            <div class="row">
                <div class="col-lg-7 col-md-4 empty"></div>
                <div class="col-lg-5 col-md-8 form-cont mt-5">
                    <form method="POST" action="{{ route('password.update') }}" class="mt-5 bg-white p-5 login-form form-body">
                        @csrf                        
                        <h3 class="modal-title w-100 fw-bold mb-3">كلمة مرور جديده</h3>
                        <p class="mb-5" style="direction: rtl">الآن يمكنك تعيين كلمة مرور جديدة لك</p>
                        <div class="modal-body ">
                            

                            <div class="mb-3 input-box">
                                <label class="mb-3 fw-bold" for="password">{{ __('كلمة المرور الجديده') }}</label>
                                <input type="password" id="password" class="form-control @error('password') is-invalid @enderror" name="password"
                                required autocomplete="new-password">
                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                            </div>

                            <div class="mb-3 input-box">
                                <label class="mb-3 fw-bold" for="password-confirm">{{ __('تأكيد كلمة المرور الجديده') }}</label>
                                <input type="password" id="password-confirm" class="form-control" name="password_confirmation"
                                required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="text-center log m-auto mb-3 mt-4">
                            <button type="submit" class="btn py-2 text-light">{{ __('تفعيل') }}</button>
                        </div>
                    </form>
                </div>
            </div>

        </div>


    </section>
    <div class="container">
        <img src="{{asset ('images/teamwork-bro.png')}}" width="600px" height="600px" class="team-work">
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
                <div class="card-header">{{ __('Reset Password') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('password.update') }}">
                        @csrf

                        <input type="hidden" name="token" value="{{ $token }}">

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ $email ?? old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-end">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Reset Password') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection --}}

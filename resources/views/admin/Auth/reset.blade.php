<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>AdminLTE 3 | Log in</title>

    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">

    <link rel="stylesheet" href="{{ asset('dashboard/all.min.css') }}">

    <link rel="stylesheet" href="{{ asset('dashboard/icheck-bootstrap.min.css') }}">

    <link rel="stylesheet" href="{{ asset('dashboard/adminlte.min.css') }}">

</head>

<body class="hold-transition login-page">
    <div class="login-box">
        <div class="login-logo">
            <a href="index2.html"><b>Admin</b>Atlobs</a>
        </div>

        <div class="card">

            @if (count($errors) > 0)
                <div class="p-1">
                    @foreach ($errors->all() as $error)
                        <div class="alert alert-warning alert-danger fade show" role="alert">{{ $error }}
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    @endforeach
                </div>
            @endif

            <div class="card-body login-card-body">
                <p class="login-box-msg">Reset Password</p>

               <form method="POST" action="{{ route('post.reset') }}" class="kt-form validate-form">
                                @csrf
                                <input type="hidden" name="token" value="{{ $token }}">
                                <div class="form-group row">

                                    <div class="col-12">
                                        <input id="email" type="email" class="reset-style form-control"
                                            name="email" value="{{ $email ?? old('email') }}" placeholder="{{__("Email Address")}}" autocomplete="email" autofocus>
                                    </div>
                                </div>

                                <div class="form-group row">

                                    <div class="col-12">
                                        <input id="password" type="password"
                                            class="reset-style form-control @error('password') is-invalid @enderror" name="password"
                                            autocomplete="new-password" placeholder="{{__("New password")}}">
                                    </div>

                                </div>

                                <div class="form-group row">

                                    <div class="col-12">
                                        <input id="password-confirm" type="password" class="reset-style form-control"
                                            name="password_confirmation" autocomplete="new-password" placeholder="{{__("Confirm new password")}}">
                                    </div>
                                </div>

                                <div class="form-group row mb-0">
                                    <div class="col-md-6 offset-md-4">
                                        <button type="submit" class="btn btn-primary btn-block">
                                            {{__("Reset Password")}}
                                        </button>
                                    </div>
                                </div>
                            </form>

            </div>

        </div>
    </div>


    <script src="{{ asset('dashboard/jquery.min.js') }}"></script>

    <script src="{{ asset('dashboard/bootstrap.bundle.min.js') }}"></script>

    <script src="{{ asset('dashboard/adminlte.min.js') }}"></script>
</body>

</html>

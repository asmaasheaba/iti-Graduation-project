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
                <p class="login-box-msg">Forget Password</p>
                @if ($message = Session::get('success'))
                    <div class="alert alert-success alert-dismissible" role="alert">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        <strong>{!! $message !!}</strong>
                    </div>
                @endif

                <form method="POST" class="kt-form validate-form" action="{{ route('post.forget') }}">
                    @csrf
                    <div class="form-group row">
                        <div class="col-12">
                            <input id="email" type="email" class="reset-style form-control" name="email"
                                placeholder="{{ __('Email Address') }}" value="{{ old('email') }}" autocomplete="email"
                                autofocus>
                        </div>
                    </div>

                    <div class="form-group row mb-0">
                        <div class="col-8 offset-3">
                            <button type="submit" class="btn btn-primary btn-block">
                                {{ __('Send Password Reset Link') }}
                            </button>
                            <a class="d-block text-white" style="margin: 5px 0px 0px 70px"
                                href="{{ route('dashboard.login') }}">
                                {{ __('Back to login') }}
                            </a>
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

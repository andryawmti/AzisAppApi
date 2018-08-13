<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from themicon.co/theme/centric/v1.9.5/html5jquery-bootstrap4/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 19 Jul 2018 11:48:00 GMT -->
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="description" content="Bootstrap Admin Template">
    <meta name="keywords" content="app, responsive, jquery, bootstrap, dashboard, admin">
    <title>Centric - Bootstrap Admin Template</title>
    <!-- Vendor styles-->
    <link rel="stylesheet" href="{{ asset('centric/css/vendor.css') }}">
    <!-- App styles-->
    <link rel="stylesheet" href="{{ asset('centric/css/app.css') }}">
</head>
<body>
<div class="layout-container">
    <div class="page-container bg-blue-grey-900">
        <div class="container-full">
            <div class="container container-xs">
                <div class="text-center">
                    <img class="mv-lg img-fluid thumb64" style="min-width: 140px; min-height: 140px;" src="{{ asset('centric/images/logo_v2.png') }}">
                    <h4 style="margin-top: 0px;">Wisata Kebumen</h4>
                </div>
                <form class="cardbox b0 form-validate" method="post" action="{{ route('login.submit') }}" name="loginForm" novalidate="">
                    {{--<div class="cardbox-offset pb0">
                        <div class="cardbox-offset-item text-right"><a class="btn-raised btn btn-info btn-circle btn-lg" href="signup.html"><em class="ion-person-add"></em></a></div>
                        <div class="cardbox-offset-item text-right invisible">
                            <div class="btn btn-success btn-circle btn-lg"><em class="ion-checkmark-round"></em></div>
                        </div>
                    </div>--}}
                    @csrf
                    <div class="cardbox-heading">
                        <div class="cardbox-title text-center">Login</div>
                    </div>
                    <div class="cardbox-body">
                        <div class="mda-form-group float-label mda-input-group">
                            <div class="mda-form-control">
                                <input class="form-control {{ $errors->has('email') ? ' is-invalid' : '' }}" type="email" name="email" value="{{ old('email') }}" required="">
                                <div class="mda-form-control-line"></div>
                                <label>Email address</label>
                                @if ($errors->has('email'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div><span class="mda-input-group-addon"><em class="ion-ios-email-outline icon-lg"></em></span>
                        </div>
                        <div class="mda-form-group float-label mda-input-group">
                            <div class="mda-form-control">
                                <input class="form-control {{ $errors->has('password') ? ' is-invalid' : '' }}" type="password" name="password" required="">
                                <div class="mda-form-control-line"></div>
                                <label>Password</label>
                                @if ($errors->has('password'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div><span class="mda-input-group-addon"><em class="ion-ios-locked-outline icon-lg"></em></span>
                        </div>
                        <div class="form-group row">
                            <div class="col-md-6 offset-md-4">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>
                        @if (old('message'))
                            <div class="form-group row">
                                <div class="col-md-2"></div>
                                <div class="col-md-8">
                                    <span class="alert alert-danger">
                                        <strong>{{ old('message') }}</strong>
                                    </span>
                                </div>
                                <div class="col-md-2"></div>
                            </div>
                        @endif
                    </div>
                    <button class="btn btn-primary btn-flat" type="submit">Login</button>
                </form>
                <div class="text-center text-sm"><a class="text-inherit" href="{{ route('password.request') }}">Forgot password?</a></div>
            </div>
        </div>
    </div>
</div>
<!-- Vendor script-->
<script src="{{ asset('centric/js/vendor.js') }}"></script>
<!-- App script-->
<script src="{{ asset('centric/js/app.js') }}"></script>
</html>
<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from designreset.com/cork/ltr/demo6/auth_login.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 28 Mar 2020 11:19:13 GMT -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no">
    <title>CORK Admin Template - Login Cover Page</title>
    <link rel="icon" type="image/x-icon" href="{{asset('dashboard_assets/assets/img/favicon.ico')}}"/>
    <!-- BEGIN GLOBAL MANDATORY STYLES -->
    <link href="https://fonts.googleapis.com/css?family=Quicksand:400,500,600,700&amp;display=swap" rel="stylesheet">
    <link href="{{asset('dashboard_assets/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('dashboard_assets/assets/css/plugins.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('dashboard_assets/assets/css/authentication/form-2.css')}}" rel="stylesheet" type="text/css" />
    <!-- END GLOBAL MANDATORY STYLES -->
    <link rel="stylesheet" type="text/css" href="{{asset('dashboard_assets/assets/css/forms/theme-checkbox-radio.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('dashboard_assets/assets/css/forms/switches.css')}}">

</head>
<body class="">


<div class="container">
    <div class="form-container outer">
        <div class="form-form">
            <div class="form-form-wrap">
                <div class="form-container">
                    <div class="form-content">

                        <h1 class="">Sign In</h1>
                        <p class="">Log in to your account to continue.</p>
                        <div class="">
                            @if (\Session::has('message'))
                                <div class="text-sm-center text-danger">
                                    {{ \Session::get('message') }}
                                </div>
                            @endif
                        </div>
                        <form class="text-left" action="{{route('dashboard.login')}}" method="post">
                           @csrf
                            <div class="form">

                                <div id="username-field" class="field-wrapper input">
                                    <label for="username">E-mail</label>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-user"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path><circle cx="12" cy="7" r="4"></circle></svg>
                                    <input id="username" name="email" type="text" class="form-control" placeholder="e.g John_Doe">
                                </div>

                                <div id="password-field" class="field-wrapper input mb-2">
                                    <div class="d-flex justify-content-between">
                                        <label for="password">PASSWORD</label>
                                        <a  href="{{ route('admins.showResetEmailForm' , ['user_type' => 'admins'])}}" class="forgot-pass-link">Forgot Password?</a>
                                    </div>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-lock"><rect x="3" y="11" width="18" height="11" rx="2" ry="2"></rect><path d="M7 11V7a5 5 0 0 1 10 0v4"></path></svg>
                                    <input id="password" name="password" type="password" class="form-control" placeholder="Password">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" id="toggle-password" class="feather feather-eye"><path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path><circle cx="12" cy="12" r="3"></circle></svg>
                                </div>
                                <div class="d-sm-flex justify-content-between">
                                    <div class="field-wrapper">
                                        <button type="submit" class="btn btn-primary" value="">Log In</button>
                                    </div>
                                </div>

                                <div class="division">

                                </div>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<!-- BEGIN GLOBAL MANDATORY SCRIPTS -->
<script src="{{asset('dashboard_assets/assets/js/libs/jquery-3.1.1.min.js')}}"></script>
<script src="{{asset('dashboard_assets/bootstrap/js/popper.min.js')}}"></script>
<script src="{{asset('dashboard_assets/bootstrap/js/bootstrap.min.js')}}"></script>

<!-- END GLOBAL MANDATORY SCRIPTS -->
<script src="{{asset('dashboard_assets/assets/js/authentication/form-2.js')}}"></script>

</body>
<!-- Mirrored from designreset.com/cork/ltr/demo6/auth_login.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 28 Mar 2020 11:19:13 GMT -->
</html>

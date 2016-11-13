<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>@yield('title',config('settings.project-name'))</title>
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&subset=latin,cyrillic-ext" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css">
    <!-- bower:css -->
    <link rel="stylesheet" href="{{ url('/theme/bower-components/bootstrap/dist/css/bootstrap.css') }}" />
    <link rel="stylesheet" href="{{ url('/theme/bower-components/bootstrap-social/bootstrap-social.css') }}" />
    <!-- endbower -->
    {!! HTML::style('../theme/plugins/node-waves/waves.css') !!}
    {!! HTML::style('../theme/plugins/animate-css/animate.css') !!}
    {!! HTML::style('../theme/plugins/material-design-preloader/md-preloader.css') !!}
    {!! HTML::style('../theme/plugins/morrisjs/morris.css') !!}
    {!! HTML::style('../theme/css/style.css') !!}
    {!! HTML::style('../theme/css/themes/all-themes.css')!!}
    @yield('after-styles-end')
</head>
<body class="login-page" data-base-url={{url()}}>
    {{----------FLASH MESSAGE-----------}}
    <div id="flash-message-container" class="flat">
        <div class="row">
            <div class="col-sm-12">
                @include('vendor.flash.message')
            </div>
        </div>
    </div>
    {{-------FLASH MESSAGE ENDS---------}}
    <div class="login-box">
        <div class="logo">
            <a href="javascript:void(0);">Admin<b>IAMS</b></a>
            <small>Intelligent Asset Management System</small>
        </div>
        <div class="card">
            <div class="body">
                <form method="POST" action="/auth/login">
                    <div class="msg">Sign in to start your session</div>
                    <div class="input-group">
                        {!! csrf_field() !!}
                        <span class="input-group-addon">
                            <i class="material-icons">person</i>
                        </span>
                        {{-- <div class="form-line"> --}}
                            <input type="email" class="form-control" name="email" placeholder="E-Mail" required autofocus value="{{ old('email') }}">
                        {{-- </div> --}}
                    </div>
                    <div class="input-group">
                        <span class="input-group-addon">
                            <i class="material-icons">lock</i>
                        </span>
                        <div class="form-line">
                            <input type="password" class="form-control" name="password" placeholder="Password" required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-8 p-t-5">
                            <input type="checkbox" name="rememberme" id="rememberme" checked class="filled-in chk-col-pink">
                            <label for="rememberme">Remember Me</label>
                        </div>
                        <div class="col-xs-4">
                            <button class="btn btn-block bg-pink waves-effect" type="submit">SIGN IN</button>
                        </div>
                    </div>
                    {{-- <div class="row m-t-15 m-b--20">
                        <div class="col-xs-6">
                            <a href="sign-up.html">Register Now!</a>
                        </div>
                        <div class="col-xs-6 align-right">
                            <a href="forgot-password.html">Forgot Password?</a>
                        </div>
                    </div> --}}
                </form>
            </div>
        </div>
    </div>
<!-- bower:js -->
<script src="{{ url('../theme/bower-components/jquery/dist/jquery.js') }}"></script>
<script src="{{ url('../theme/bower-components/bootstrap/dist/js/bootstrap.js') }}"></script>
<script src="{{ url('../theme/bower-components/slimScroll/jquery.slimscroll.js') }}"></script>
<script src="{{ url('../theme/bower-components/slimScroll/jquery.slimscroll.min.js') }}"></script>
<!-- endbower -->
{!! HTML::script('../theme/plugins/node-waves/waves.js') !!}
{!! HTML::script('../theme/plugins/jquery-countto/jquery.countTo.js')!!}
{!! HTML::script('../theme/plugins/raphael/raphael.min.js') !!}
{!! HTML::script('../theme/plugins/morrisjs/morris.js') !!}
{!! HTML::script('../theme/plugins/chartjs/Chart.bundle.js') !!}
{!! HTML::script('../theme/plugins/flot-charts/jquery.flot.js') !!}
{!! HTML::script('../theme/plugins/flot-charts/jquery.flot.resize.js') !!}
{!! HTML::script('../theme/plugins/flot-charts/jquery.flot.pie.js') !!}
{!! HTML::script('../theme/plugins/flot-charts/jquery.flot.categories.js') !!}
{!! HTML::script('../theme/plugins/flot-charts/jquery.flot.time.js') !!}
{!! HTML::script('../theme/plugins/jquery-sparkline/jquery.sparkline.js') !!}
{!! HTML::script('../theme/js/admin.js') !!}
{!! HTML::script('../theme/js/pages/index.js') !!}
{!! HTML::script('../theme/js/demo.js') !!}
@stack('footer.script')
</body>
</html>


<!-- resources/views/auth/login.blade.php -->

@section('after-scripts-end')

@endsection

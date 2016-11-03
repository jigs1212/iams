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
    {!! HTML::style('/theme/plugins/jquery-datatable/skin/bootstrap/css/dataTables.bootstrap.css') !!}
    {!! HTML::style('/theme/plugins/bootstrap-select/css/bootstrap-select.css') !!}
    {!! HTML::style('/theme/plugins/node-waves/waves.css') !!}
    {!! HTML::style('/theme/plugins/animate-css/animate.css') !!}
    {!! HTML::style('/theme/plugins/material-design-preloader/md-preloader.css') !!}
    {!! HTML::style('/theme/plugins/morrisjs/morris.css') !!}
    {!! HTML::style('/theme/css/style.css') !!}
    {!! HTML::style('/theme/css/main.css') !!}
    {!! HTML::style('/theme/css/themes/all-themes.css')!!}
    @yield('after-styles-end')
</head>
<body class="theme-blue" data-base-url={{url()}}>
<div class="wrapper">
    @include('theme.layout.user.header')
    @include('theme.layout.user.menu')
    <div class="content-wrapper">
        <section class="content">
            {{----------FLASH MESSAGE-----------}}
            <div id="flash-message-container" class="flat">
                <div class="row">
                    <div class="col-sm-12">
                        @include('vendor.flash.message')
                    </div>
                </div>
            </div>
            {{-------FLASH MESSAGE ENDS---------}}
            @yield('content')
        </section>
    </div>
    @include('theme.layout.user.footer')
</div>
<!-- bower:js -->
<script src="{{ url('/theme/bower-components/jquery/dist/jquery.js') }}"></script>
<script src="{{ url('/theme/bower-components/bootstrap/dist/js/bootstrap.js') }}"></script>
<script src="{{ url('/theme/bower-components/slimScroll/jquery.slimscroll.js') }}"></script>
<script src="{{ url('/theme/bower-components/slimScroll/jquery.slimscroll.min.js') }}"></script>
<!-- endbower -->
{!! HTML::script('/theme/plugins/jquery-datatable/jquery.dataTables.js') !!}
{!! HTML::script('/theme/plugins/jquery-datatable/skin/bootstrap/js/dataTables.bootstrap.js') !!}
{!! HTML::script('/theme/plugins/bootstrap-select/js/bootstrap-select.js') !!}
{!! HTML::script('/theme/plugins/node-waves/waves.js') !!}
{!! HTML::script('/theme/plugins/jquery-countto/jquery.countTo.js')!!}
{{-- {!! HTML::script('/theme/plugins/raphael/raphael.min.js') !!} --}}
{{-- {!! HTML::script('/theme/plugins/morrisjs/morris.js') !!} --}}
{{-- {!! HTML::script('/theme/plugins/chartjs/Chart.bundle.js') !!} --}}
{{-- {!! HTML::script('/theme/plugins/flot-charts/jquery.flot.js') !!} --}}
{{-- {!! HTML::script('/theme/plugins/flot-charts/jquery.flot.resize.js') !!} --}}
{{-- {!! HTML::script('/theme/plugins/flot-charts/jquery.flot.pie.js') !!} --}}
{{-- {!! HTML::script('/theme/plugins/flot-charts/jquery.flot.categories.js') !!} --}}
{{-- {!! HTML::script('/theme/plugins/flot-charts/jquery.flot.time.js') !!} --}}
{{-- {!! HTML::script('/theme/plugins/jquery-sparkline/jquery.sparkline.js') !!} --}}
{!! HTML::script('/theme/plugins/jquery-inputmask/jquery.inputmask.bundle.js') !!}
{{-- {!! HTML::script('/theme/plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.js') !!} --}}
{{-- {!! HTML::script('/theme/plugins/dropzone/dropzone.js') !!} --}}
{{-- {!! HTML::script('/theme/plugins/multi-select/js/jquery.multi-select.js') !!} --}}
{{-- {!! HTML::script('/theme/plugins/nouislider/nouislider.js') !!} --}}
{!! HTML::script('/theme/js/admin.js') !!}
{!! HTML::script('/theme/js/pages/index.js') !!}
{!! HTML::script('/theme/js/pages/forms/advanced-form-elements.js') !!}
{{-- {!! HTML::script('/theme/js/demo.js') !!} --}}
{!! HTML::script('/theme/js/jquery-migrate-1.4.1.min.js') !!}
@stack('footer.script')
</body>
</html>

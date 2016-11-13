@extends('theme.layout.admin.master')
@section('after-styles-end')
<?php $titleName = 'Dashboard'; ?>
@section ('title', $titleName . ' | ' . config('settings.project-name-short'))
@endsection
@section('content')
<!-- Main content -->

    <div class="container-fluid">
        <div class="block-header">
            <h2>DASHBOARD</h2>
        </div>

        <!-- Widgets -->
        <div class="row clearfix">
            <div class=" col-md-3 col-xs-12">
                <a href="{{ url('admin/asset') }}" class="no-t-d">
                    <div class="info-box bg-pink hover-expand-effect cursor-pointer">
                        <div class="icon">
                            <i class="material-icons">playlist_add_check</i>
                        </div>
                        <div class="content">
                            <div class="text">TOTAL ASSETS</div>
                            <div class="number count-to" data-from="0" data-to="{{$asset_count}}" data-speed="2000" data-fresh-interval="20"></div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-md-3 col-xs-12">
                <a href="{{ url('admin/request') }}" class="no-t-d">
                    <div class="info-box bg-cyan hover-expand-effect cursor-pointer">
                        <div class="icon">
                            <i class="material-icons">help</i>
                        </div>
                        <div class="content">
                            <div class="text">NEW REQUESTS</div>
                            <div class="number count-to" data-from="0" data-to="{{ $request_count }}" data-speed="2000" data-fresh-interval="20"></div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-md-3 col-xs-12">
                <a href="{{ url('admin/user') }}" class="no-t-d">
                    <div class="info-box bg-orange hover-expand-effect cursor-pointer">
                        <div class="icon">
                            <i class="material-icons">people</i>
                        </div>
                        <div class="content">
                            <div class="text">Users</div>
                            <div class="number count-to" data-from="0" data-to="{{ $user_count }}" data-speed="2000" data-fresh-interval="20"></div>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>
<!-- /.content -->
@endsection @section('after-scripts-end') @endsection
@extends('theme.layout.admin.master')
@section('after-styles-end')
<?php $titleName = 'Change password'; ?>
@section ('title', $titleName . ' | ' . config('settings.project-name-short'))
@endsection
@section('content')
<!-- Main content -->
    <ol class="breadcrumb align-right">
        <li><a href="{{ route('admin.get_home') }}"><i class="material-icons">home</i> Home</a></li>
        <li><a href="javascript:void(0);"><i class="material-icons">person</i> Profile</a></li>
    </ol>
    <div class="container-fluid">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="card">
                <div class="header">
                    <h2>
                        Password Management
                        <small></small>
                    </h2>
                </div>
                <div class="body">
                    <!-- Nav tabs -->
                    <div class="tab-content">
                        {!! Form::open(array('url'=>'admin/password' ,'class'=>'form-horizontal','method' => 'POST','id'=>'edit_password')) !!}
                            <div class="row clearfix">
                                <div class="col-xs-4 form-control-label">
                                    <label for="first_name">Current Password :</label>
                                </div>
                                <div class="col-xs-6">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="password" name="current_password" class="form-control" value="">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xs-4 form-control-label">
                                    <label for="last_name">New Password :</label>
                                </div>
                                <div class="col-xs-6">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="password" name="password" class="form-control" value="">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xs-4 form-control-label">
                                    <label for="user_name">Confirm Password :</label>
                                </div>
                                <div class="col-xs-6">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="password" name="password_confirmation" class="form-control" value="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-offset-5">
                                {!! Form::submit("Save", array("class" => "btn-lg btn-primary m-t-15 waves-effect btn btn-custom",'id'=>'btn_save')) !!}
                            </div>
                        {!!Form::close()!!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<!-- /.content -->
@endsection
@section('after-scripts-end')
@endsection
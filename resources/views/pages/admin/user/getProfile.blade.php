@extends('theme.layout.admin.master')
@section('after-styles-end')
@section ('title', config('settings.project-name').'|Welcome')
@endsection
@section('content')
<!-- Main content -->
    <ol class="breadcrumb breadcrumb-bg-light-blue align-right">
        <li><a href="{{ route('admin.get_home') }}"><i class="material-icons">home</i> Home</a></li>
        <li><a href="{{ route('admin.user') }}"><i class="material-icons">people</i> User Management</a></li>
        <li><a href="#"><i class="material-icons">people</i> User Profile</a></li>
    </ol>
    <div class="container-fluid">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="card">
                <div class="header">
                    <h2>
                        User Profile
                        <small></small>
                    </h2>
                </div>
                <div class="body">
                    <!-- Nav tabs -->
                    <ul class="nav nav-tabs tab-nav-right" role="tablist">
                        <li role="presentation" class="active"><a href="#profile" data-toggle="tab">PROFILE</a></li>
                        <li role="presentation"><a href="#edit-profile" data-toggle="tab">EDIT</a></li>
                    </ul>
                    <!-- Tab panes -->
                    <div class="tab-content">
                        <div role="tabpanel" class="tab-pane fade in active" id="profile">
                            <form class="form-horizontal">
                                <div class="row clearfix">
                                    <div class="col-md-2 col-sm-4 col-xs-5 form-control-label">
                                        <label for="email_address_2">First Name :</label>
                                    </div>
                                    <div class="col-sm-4 col-xs-8">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input type="text" disabled="true" class="form-control" value="{{ $profile->first_name }}">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-2 col-sm-4 col-xs-5 form-control-label">
                                        <label for="email_address_2">Last Name :</label>
                                    </div>
                                    <div class="col-sm-4 col-xs-8">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input type="text" disabled="true" class="form-control" value="{{ $profile->last_name }}">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-2 col-sm-4 col-xs-5 form-control-label">
                                        <label for="email_address_2">User Name :</label>
                                    </div>
                                    <div class="col-sm-4 col-xs-8">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input type="text" disabled="true" class="form-control" value="{{ $profile->user_name }}">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-2 col-sm-4 col-xs-5 form-control-label">
                                        <label for="email_address_2">E-MAIL :</label>
                                    </div>
                                    <div class="col-sm-4 col-xs-8">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input type="text" disabled="true" class="form-control" value="{{ $profile->email }}">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-2 col-sm-4 col-xs-5 form-control-label">
                                        <label for="email_address_2">City :</label>
                                    </div>
                                    <div class="col-sm-4 col-xs-8">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input type="text" disabled="true" class="form-control" value="{{ $profile->city }}">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-2 col-sm-4 col-xs-5 form-control-label">
                                        <label for="email_address_2">State</label>
                                    </div>
                                    <div class="col-sm-4 col-xs-8">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input type="text" disabled="true" class="form-control" value="{{ $profile->state }}">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-2 col-sm-4 col-xs-5 form-control-label">
                                        <label for="email_address_2">Country :</label>
                                    </div>
                                    <div class="col-sm-4 col-xs-8">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input type="text" disabled="true" class="form-control" value="{{ $profile->country }}">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-2 col-sm-4 col-xs-5 form-control-label">
                                        <label for="email_address_2">Birthday</label>
                                    </div>
                                    <div class="col-sm-4 col-xs-8">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input type="text" disabled="true" class="form-control" value="{{ $profile->bday }}">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-2 col-sm-4 col-xs-5 form-control-label">
                                        <label for="email_address_2">Phone (Off) :</label>
                                    </div>
                                    <div class="col-sm-4 col-xs-8">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input type="text" disabled="true" class="form-control" value="{{ $profile->ph_office }}">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-2 col-sm-4 col-xs-5 form-control-label">
                                        <label for="email_address_2">Mobile</label>
                                    </div>
                                    <div class="col-sm-4 col-xs-8">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input type="text" disabled="true" class="form-control" value="{{ $profile->mobile }}">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div role="tabpanel" class="tab-pane fade" id="edit-profile">
                            <b></b>
                            <form class="form-horizontal">
                                <div class="row clearfix">
                                    <div class="col-md-2 col-sm-4 col-xs-5 form-control-label">
                                        <label for="email_address_2">First Name :</label>
                                    </div>
                                    <div class="col-sm-4 col-xs-8">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input type="text" disabled="true" class="form-control" value="{{ $profile->first_name }}">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-2 col-sm-4 col-xs-5 form-control-label">
                                        <label for="email_address_2">Last Name :</label>
                                    </div>
                                    <div class="col-sm-4 col-xs-8">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input type="text" disabled="true" class="form-control" value="{{ $profile->last_name }}">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-2 col-sm-4 col-xs-5 form-control-label">
                                        <label for="email_address_2">User Name :</label>
                                    </div>
                                    <div class="col-sm-4 col-xs-8">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input type="text" disabled="true" class="form-control" value="{{ $profile->user_name }}">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-2 col-sm-4 col-xs-5 form-control-label">
                                        <label for="email_address_2">E-MAIL :</label>
                                    </div>
                                    <div class="col-sm-4 col-xs-8">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input type="text" disabled="true" class="form-control" value="{{ $profile->email }}">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-2 col-sm-4 col-xs-5 form-control-label">
                                        <label for="email_address_2">City :</label>
                                    </div>
                                    <div class="col-sm-4 col-xs-8">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input type="text" id="email_address_2" class="form-control" value="{{ $profile->city }}">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-2 col-sm-4 col-xs-5 form-control-label">
                                        <label for="email_address_2">State</label>
                                    </div>
                                    <div class="col-sm-4 col-xs-8">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input type="text" id="email_address_2" class="form-control" value="{{ $profile->state }}">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-2 col-sm-4 col-xs-5 form-control-label">
                                        <label for="email_address_2">Country :</label>
                                    </div>
                                    <div class="col-sm-4 col-xs-8">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input type="text" id="email_address_2" class="form-control" value="{{ $profile->country }}">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-2 col-sm-4 col-xs-5 form-control-label">
                                        <label for="email_address_2">Birthday</label>
                                    </div>
                                    <div class="col-sm-4 col-xs-8">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input type="text" id="email_address_2" class="form-control" value="{{ $profile->bday }}">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-2 col-sm-4 col-xs-5 form-control-label">
                                        <label for="email_address_2">Phone (Off) :</label>
                                    </div>
                                    <div class="col-sm-4 col-xs-8">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input type="text" id="email_address_2" class="form-control" value="{{ $profile->ph_office }}">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-2 col-sm-4 col-xs-5 form-control-label">
                                        <label for="email_address_2">Mobile</label>
                                    </div>
                                    <div class="col-sm-4 col-xs-8">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input type="text" id="email_address_2" class="form-control" value="{{ $profile->mobile }}">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
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
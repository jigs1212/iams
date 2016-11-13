@extends('theme.layout.admin.master')
@section('after-styles-end')
<?php $titleName = 'View Request'; ?>
@section ('title', $titleName . ' | ' . config('settings.project-name-short'))
@endsection
@section('content')
<!-- Main content -->
    <ol class="breadcrumb align-right">
        <li><a href="{{ route('admin.get_home') }}"><i class="material-icons">home</i> Home</a></li>
        <li><a href="{{ route('admin.user') }}"><i class="material-icons">layers</i> Request Management</a></li>
    </ol>
    <div class="container-fluid">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="card">
                <div class="header">
                    <h2>
                        Request<a href="{{ app('url')->previous()  }}" class="btn btn-primary btn-xs" name="button" style="float:right;"><i class="material-icons">arrow_back</i> </a>
                        <small></small>
                    </h2>
                </div>
                <div class="body">
                    <!-- Nav tabs -->
                    {{-- <ul class="nav nav-tabs tab-nav-right" role="tablist">
                        <li role="presentation" class="active"><a href="#profile" data-toggle="tab">Request</a></li>
                        <li role="presentation"><a href="#edit-profile" data-toggle="tab">EDIT</a></li>
                    </ul> --}}
                    <!-- Tab panes -->
                    <div class="tab-content">
                        <div role="tabpanel" class="tab-pane fade in active" id="profile">
                            <form class="form-horizontal">
                                <div class="row clearfix">
                                    <div class="col-md-3 col-sm-4 col-xs-5 form-control-label">
                                        <label for="email_address_2">Asset Name :</label>
                                    </div>
                                    <div class="col-sm-3 col-xs-8">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input type="text" disabled="true" class="form-control" value="{{ $request->asset_name }}">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3 col-sm-4 col-xs-5 form-control-label">
                                        <label for="email_address_2">Requester Name :</label>
                                    </div>
                                    <div class="col-sm-3 col-xs-8">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input type="text" disabled="true" class="form-control" value="{{ $request->requester_name }}">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3 col-sm-4 col-xs-5 form-control-label">
                                        <label for="email_address_2">Purpose :</label>
                                    </div>
                                    <div class="col-sm-3 col-xs-8">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input type="text" disabled="true" class="form-control" value="{{ $request->purpose }}">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3 col-sm-4 col-xs-5 form-control-label">
                                        <label for="email_address_2">Date on which to be allocated :</label>
                                    </div>
                                    <div class="col-sm-3 col-xs-8">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input type="text" disabled="true" class="form-control" value="{{ $request->date_to_be_allocated }}">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3 col-sm-4 col-xs-5 form-control-label">
                                        <label for="email_address_2">Time at which to be allocated</label>
                                    </div>
                                    <div class="col-sm-3 col-xs-8">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input type="time" disabled="true" class="form-control" value="{{ $request->time_to_be_allocated }}">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3 col-sm-4 col-xs-5 form-control-label">
                                        <label for="email_address_2">Date on which will be returned :</label>
                                    </div>
                                    <div class="col-sm-3 col-xs-8">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input type="text" disabled="true" class="form-control" value="{{ $request->date_of_return }}">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3 col-sm-4 col-xs-5 form-control-label">
                                        <label for="email_address_2">Time at which will be returned</label>
                                    </div>
                                    <div class="col-sm-3 col-xs-8">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input type="time" disabled="true" class="form-control" value="{{ $request->time_of_return }}">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                        {{-- <div role="tabpanel" class="tab-pane fade" id="edit-profile">
                            <b></b>
                            <form class="form-horizontal">
                                <div class="row clearfix">
                                    <div class="col-md-2 col-sm-4 col-xs-5 form-control-label">
                                        <label for="email_address_2">First Name :</label>
                                    </div>
                                    <div class="col-sm-4 col-xs-8">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input type="text" disabled="true" class="form-control" value="{{ $request->first_name }}">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-2 col-sm-4 col-xs-5 form-control-label">
                                        <label for="email_address_2">Last Name :</label>
                                    </div>
                                    <div class="col-sm-4 col-xs-8">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input type="text" disabled="true" class="form-control" value="{{ $request->last_name }}">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-2 col-sm-4 col-xs-5 form-control-label">
                                        <label for="email_address_2">User Name :</label>
                                    </div>
                                    <div class="col-sm-4 col-xs-8">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input type="text" disabled="true" class="form-control" value="{{ $request->user_name }}">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-2 col-sm-4 col-xs-5 form-control-label">
                                        <label for="email_address_2">E-MAIL :</label>
                                    </div>
                                    <div class="col-sm-4 col-xs-8">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input type="text" disabled="true" class="form-control" value="{{ $request->email }}">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-2 col-sm-4 col-xs-5 form-control-label">
                                        <label for="email_address_2">City :</label>
                                    </div>
                                    <div class="col-sm-4 col-xs-8">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input type="text" id="email_address_2" class="form-control" value="{{ $request->city }}">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-2 col-sm-4 col-xs-5 form-control-label">
                                        <label for="email_address_2">State</label>
                                    </div>
                                    <div class="col-sm-4 col-xs-8">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input type="text" id="email_address_2" class="form-control" value="{{ $request->state }}">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-2 col-sm-4 col-xs-5 form-control-label">
                                        <label for="email_address_2">Country :</label>
                                    </div>
                                    <div class="col-sm-4 col-xs-8">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input type="text" id="email_address_2" class="form-control" value="{{ $request->country }}">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-2 col-sm-4 col-xs-5 form-control-label">
                                        <label for="email_address_2">Birthday</label>
                                    </div>
                                    <div class="col-sm-4 col-xs-8">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input type="text" id="email_address_2" class="form-control" value="{{ $request->bday }}">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-2 col-sm-4 col-xs-5 form-control-label">
                                        <label for="email_address_2">Phone (Off) :</label>
                                    </div>
                                    <div class="col-sm-4 col-xs-8">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input type="text" id="email_address_2" class="form-control" value="{{ $request->ph_office }}">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-2 col-sm-4 col-xs-5 form-control-label">
                                        <label for="email_address_2">Mobile</label>
                                    </div>
                                    <div class="col-sm-4 col-xs-8">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input type="text" id="email_address_2" class="form-control" value="{{ $request->mobile }}">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div> --}}
                    </div>
                </div>
            </div>
        </div>
    </div>
<!-- /.content -->
@endsection
@section('after-scripts-end')
@endsection
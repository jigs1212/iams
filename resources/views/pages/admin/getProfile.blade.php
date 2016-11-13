@extends('theme.layout.admin.master')
@section('after-styles-end')
<?php $titleName = 'Profile'; ?>
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
                        Profile Management
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
                                    <div class="col-md-2 col-xs-3 form-control-label">
                                        <label for="first_name">First Name :</label>
                                    </div>
                                    <div class="col-md-4 col-xs-9">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input type="text" disabled="true" class="form-control" value="{{ $profile->first_name }}">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-2 col-xs-3 form-control-label">
                                        <label for="last_name">Last Name :</label>
                                    </div>
                                    <div class="col-md-4 col-xs-9">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input type="text" disabled="true" class="form-control" value="{{ $profile->last_name }}">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-2 col-xs-3 form-control-label">
                                        <label for="user_name">User Name :</label>
                                    </div>
                                    <div class="col-md-4 col-xs-9">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input type="text" disabled="true" class="form-control" value="{{ $profile->user_name }}">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-2 col-xs-3 form-control-label">
                                        <label for="email">E-MAIL :</label>
                                    </div>
                                    <div class="col-md-4 col-xs-9">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input type="text" disabled="true" class="form-control" value="{{ $profile->email }}">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-2 col-xs-3 form-control-label">
                                        <label for="city">City :</label>
                                    </div>
                                    <div class="col-md-4 col-xs-9">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input type="text" disabled="true" class="form-control" value="{{ $profile->city }}">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-2 col-xs-3 form-control-label">
                                        <label for="state">State</label>
                                    </div>
                                    <div class="col-md-4 col-xs-9">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input type="text" disabled="true" class="form-control" value="{{ $profile->state }}">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-2 col-xs-3 form-control-label">
                                        <label for="country">Country :</label>
                                    </div>
                                    <div class="col-md-4 col-xs-9">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input type="text" disabled="true" class="form-control" value="{{ $profile->country }}">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-2 col-xs-3 form-control-label">
                                        <label for="birthday">Birthday</label>
                                    </div>
                                    <div class="col-md-4 col-xs-9">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input type="date" disabled="true" class="form-control" value="{{ $profile->birthday }}">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-2 col-xs-3 form-control-label">
                                        <label for="phone">Phone :</label>
                                    </div>
                                    <div class="col-sm-3 col-xs-9">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input type="number" disabled="true" id="phone" max="9999999999" min="1000000000" maxlength="10" size="10" class="form-control" value="{{ $profile->phone_off }}">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-1 col-xs-3 form-control-label">
                                        <label for="ext">Extn:</label>
                                    </div>
                                    <div class="col-sm-2 col-xs-9">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input type="number" disabled="true"  id="ext" class="form-control" value="{{ $profile->extn }}">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-2 col-xs-3 form-control-label">
                                        <label for="mobile">Mobile :</label>
                                    </div>
                                    <div class="col-sm-2 col-xs-9">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input type="number" disabled="true" id="mobile" class="form-control" value="{{ $profile->mobile_no }}" maxlength="10" size="10" min="999999999" max="10000000000" placeholder="7012345678">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div role="tabpanel" class="tab-pane fade" id="edit-profile">
                            {!! Form::open(array('url'=>'admin/profile/' . $profile->id,'class'=>'form-horizontal','method' => 'PUT','id'=>'edit_user')) !!}
                                <div class="row clearfix">
                                    <div class="col-md-2 col-xs-2 form-control-label">
                                        <label for="first_name">First Name :</label>
                                    </div>
                                    <div class="col-md-4 col-xs-10">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input type="text" name="first_name" disabled="true" class="form-control" value="{{ $profile->first_name }}">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-2 col-xs-2 form-control-label">
                                        <label for="last_name">Last Name :</label>
                                    </div>
                                    <div class="col-md-4 col-xs-10">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input type="text" name="last_name" disabled="true" class="form-control" value="{{ $profile->last_name }}">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-2 col-xs-2 form-control-label">
                                        <label for="user_name">User Name :</label>
                                    </div>
                                    <div class="col-md-4 col-xs-10">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input type="text" name="user_name" disabled="true" class="form-control" value="{{ $profile->user_name }}">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-2 col-xs-2 form-control-label">
                                        <label for="email">E-MAIL :</label>
                                    </div>
                                    <div class="col-md-4 col-xs-10">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input type="text" name="email" disabled="true" class="form-control" value="{{ $profile->email }}">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-2 col-xs-2 form-control-label">
                                        <label for="city">City :</label>
                                    </div>
                                    <div class="col-md-4 col-xs-10">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input type="text" name="city" id="city" class="form-control" value="{{ $profile->city }}">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-2 col-xs-2 form-control-label">
                                        <label for="state">State</label>
                                    </div>
                                    <div class="col-md-4 col-xs-10">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input type="text" name="state" id="state" class="form-control" value="{{ $profile->state }}">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-2 col-xs-2 form-control-label">
                                        <label for="country">Country :</label>
                                    </div>
                                    <div class="col-md-4 col-xs-10">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input type="text" name="country" id="country" class="form-control" value="{{ $profile->country }}">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-2 col-xs-2 form-control-label">
                                        <label for="birthday">Birthday</label>
                                    </div>
                                    <div class="col-md-4 col-xs-10">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input type="date" id="birthday" name="bday" class="form-control" value="{{ $profile->birthday }}">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-2 col-xs-2 form-control-label">
                                        <label for="phone">Phone :</label>
                                    </div>
                                    <div class="col-sm-3 col-xs-10">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input type="number" name="ph_office" id="phone" max="9999999999" min="1000000000" maxlength="10" size="10" class="form-control" value="{{ $profile->phone_off }}">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-1 col-xs-2 form-control-label">
                                        <label for="ext">Extn:</label>
                                    </div>
                                    <div class="col-sm-1 col-xs-10">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input type="number" name="extn" id="ext" class="form-control" value="{{ $profile->extn }}">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-1 col-xs-2 form-control-label">
                                        <label for="mobile">Mobile</label>
                                    </div>
                                    <div class="col-sm-4 col-xs-10">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input type="number" id="mobile" name="mobile" class="form-control" value="{{ $profile->mobile }}" maxlength="10" size="10" min="999999999" max="10000000000" placeholder="7012345678">
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
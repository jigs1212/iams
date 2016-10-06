@extends('theme.layout.admin.master') @section('after-styles-end') @section ('title', config('settings.project-name-short').'| User Registraion') @endsection @section('content')
<!-- Main content -->
    <ol class="breadcrumb align-right">
        <li><a href="{{ route('admin.get_home') }}"><i class="material-icons">home</i> Home</a></li>
        <li><a href="{{ route('admin.user') }}"><i class="material-icons">people</i> User Management</a></li>
    </ol>
    <div class="container-fluid">
        <!-- Horizontal Layout -->
        <div class="row">
            <div class="col-xs-12">
                <div class="card">
                    <div class="header">
                        <h2>USER REGISTRATION</h2>
                    </div>
                    <div class="body">
                        {!! Form::open(array('url'=>'admin/user','class'=>'form-horizontal','method' => 'POST','id'=>'add-form')) !!}
                            <div class="row clearfix">
                                <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                    <label for="email_address_2">First Name</label>
                                </div>
                                <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="text" name="first_name" class="form-control" placeholder="First Name">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row clearfix">
                                <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                    <label for="email_address_2">Last Name</label>
                                </div>
                                <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="text" name="last_name" class="form-control" placeholder="Last Name">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row clearfix">
                                <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                    <label for="email_address_2">User Name</label>
                                </div>
                                <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="text" name="user_name" class="form-control" placeholder="User Name">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row clearfix">
                                <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                    <label for="email_address_2">E-mail</label>
                                </div>
                                <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="text" name="email" class="form-control" placeholder="E-Mail">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row clearfix">
                                <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                    <label for="email_address_2">Role Name</label>
                                </div>
                                <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <select name="role_id" class="form-control">
                                                <option value="">Please Select Role</option>
                                                <option value="1">Administrator</option>
                                                <option value="2">Asset Manage</option>
                                                <option value="3">Department Manager</option>
                                                <option value="4">Employee</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row clearfix">
                                <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                    <label for="email_address_2">Department Name</label>
                                </div>
                                <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                    <div class="form-group">
                                        <div class="form-line">
                                            {!! Form::select('department_id',array('0' => '[Please select Sector]')+$departments,'',array('class'=>'form-control','id'=>'type'))!!}
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row clearfix">
                                <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                    <label for="password_2">Password</label>
                                </div>
                                <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="password" name="password" class="form-control" placeholder="Enter your password">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row clearfix">
                                <div class="col-lg-offset-2 col-md-offset-2 col-sm-offset-4 col-xs-offset-5">
                                    {!! Form::submit("Save", array("class" => "btn btn-primary m-t-15 waves-effect",'id'=>'btn_save')) !!}
                                </div>
                            </div>
                            {!!Form::close()!!}
                    </div>
                </div>
            </div>
        </div>
        <!-- #END# Horizontal Layout -->
    </div>
</div>
<!-- /.content -->
@endsection @push('footer.script')
<script type="text/javascript">
    BASE_URL = $('body').data("base-url");
    $(document).ready(function() {

        $('#user-info-table').DataTable();

        /**
         * Delete popup for Sector
         */
        $('#sector-info-table').on('click', '.sector-delete', function(event) {
            event.preventDefault();
            var sectorId = $(this).attr('sector-id');
            var destinationPath = BASE_URL + '/admin/sectors/' + sectorId;
            $('#delete-confirm').attr('action', destinationPath);
            $("#delete-modal").modal('show');
        });

    });
</script>
@endpush
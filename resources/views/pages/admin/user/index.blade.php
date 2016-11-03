@extends('theme.layout.admin.master')
@section('after-styles-end')
<?php $titleName = 'User Management'; ?>
@section ('title', $titleName . ' | '. config('settings.project-name-short'))
@endsection
@section('content')
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
                            <h2>USER MANAGEMENT<a href="{{ url('admin/user/create') }}" class="btn btn-xs btn-primary" name="button" style="float:right;"><i class="material-icons">person_add</i></a></h2>

                        </div>
                        <div class="body">

                            <table class="table table-bordered table-striped table-hover" id="user-info-table">
                                <thead>
                                    <tr>
                                        <td style="width:10%;">Sl No</td>
                                        <td>First Name</td>
                                        <td>Last Name</td>
                                        <td>Email</td>
                                        <td style="width:20%;">View</td>
                                    </tr>
                                </thead>
                                @foreach($users as $key => $user)
                                <tr>
                                    <td>{{ $key+1 }}</td>
                                    <td>{{ $user->first_name }}</td>
                                    <td>{{ $user->last_name }}</td>
                                    <td>{{ $user->email }}</td>
                                    <td>
                                        <div class="btn-group btn-group-xs">
                                            <a href="{{url('admin/user/'.$user->id)}}" class="btn btn-default btn-xs" data-toggle="tooltip" title="View"> <i class="material-icons">forward</i></a>
                                            <a href="{{$user->id}}" user-id="{{$user->id}}" class="btn btn-default btn-xs user-delete" data-toggle="tooltip" title="Delete"> <i class="material-icons">delete</i></a>
                                            @if ($user->status == App\User::ACTIVE)
                                                <a href="{{url('admin/user/deactivate/'.$user->id)}}" class="btn btn-default btn-xs" data-toggle="tooltip" title="Deactivate"> <i class="material-icons">check_circle</i></a>
                                            @else
                                                <a href="{{url('admin/user/activate/'.$user->id)}}" class="btn btn-default btn-xs" data-toggle="tooltip" title="Activate"> <i class="material-icons">remove_circle</i></a>
                                            @endif
                                        </div>
                                    </td>
                                </tr>
                                @endforeach
                            </table>
                            {{-- <form class="form-horizontal">
                                <div class="row clearfix">
                                    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                        <label for="email_address_2">Email Address</label>
                                    </div>
                                    <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input type="text" id="email_address_2" class="form-control" placeholder="Enter your email address">
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
                                                <input type="password" id="password_2" class="form-control" placeholder="Enter your password">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row clearfix">
                                    <div class="col-lg-offset-2 col-md-offset-2 col-sm-offset-4 col-xs-offset-5">
                                        <input type="checkbox" id="remember_me_3" class="filled-in">
                                        <label for="remember_me_3">Remember Me</label>
                                    </div>
                                </div>
                                <div class="row clearfix">
                                    <div class="col-lg-offset-2 col-md-offset-2 col-sm-offset-4 col-xs-offset-5">
                                        <button type="button" class="btn btn-primary m-t-15 waves-effect">LOGIN</button>
                                    </div>
                                </div>
                            </form> --}}
                        </div>
                    </div>
                </div>
            </div>
            <!-- #END# Horizontal Layout -->
        </div>
    </div>
<!-- /.content -->
@include('partials.delete-confirm-model')
@endsection
@push('footer.script')
<script type="text/javascript">
    BASE_URL = $('body').data("base-url");
    $(document).ready(function() {

        $('#user-info-table').DataTable();

        /**
         * Delete popup for Sector
         */
        $('#user-info-table').on('click', '.user-delete', function(event) {
            event.preventDefault();
            var userId = $(this).attr('user-id');
            var destinationPath = BASE_URL + '/admin/user/' + userId;
            console.log(destinationPath);
            $('#delete-confirm').attr('action', destinationPath);
            $("#delete-modal").modal('show');
        });

    });
</script>
@endpush

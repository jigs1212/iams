@extends('theme.layout.admin.master')
@section('after-styles-end')
<?php $titleName = 'Request Management'; ?>
@section ('title', $titleName . ' | ' .config('settings.project-name-short'))
@endsection
@section('content')
<!-- Main content -->
    <ol class="breadcrumb align-right">
        <li><a href="{{ route('admin.get_home') }}"><i class="material-icons">home</i> Home</a></li>
        <li><a href="{{ route('admin.request') }}"><i class="material-icons">layers</i> Request Management</a></li>
    </ol>
    <div class="container-fluid">
            <!-- Horizontal Layout -->
            <div class="row">
                <div class="col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>REQUEST MANAGEMENT</h2>
                        </div>
                        <div class="body">

                            <table class="table table-bordered table-striped table-hover" id="request-info-table">
                                <thead>
                                    <tr>
                                        <td style="width:10%;">Sl No</td>
                                        <td>Asset Name</td>
                                        <td>Requester Name</td>
                                        <td style="width:20%;">Purpose</td>
                                        <td>Date of Requirement</td>
                                        <td style="width:20%;">View</td>
                                    </tr>
                                </thead>
                                @foreach($requests as $key => $request)
                                <tr>
                                    <td>{{ $key+1 }}</td>
                                    <td>{{ $request->name}}</td>
                                    <td>{{ $request->requester}}</td>
                                    <td>{{ $request->purpose }}</td>
                                    <td>{{ $request->date_to_be_allocated }}</td>
                                    <td>
                                        <div class="btn-group btn-group-sm">
                                            <a href="{{url('admin/request/'.$request->id)}}" class="btn btn-default btn-sm" data-toggle="tooltip" title="View"> <i class="material-icons">forward</i></a>
                                            <a href="" request-id="{{$request->id}}" class="btn btn-default btn-sm request-delete" data-toggle="tooltip" title="Delete"> <i class="material-icons">delete</i></a>
                                            @if ($request->status == App\RequestAsset::ACTIVE)
                                                <a href="{{url('admin/request/deactivate/'.$request->id)}}" class="btn btn-default btn-sm" data-toggle="tooltip" title="Deactivate"> <i class="material-icons">check_circle</i></a>
                                            @else
                                                <a href="{{url('admin/request/activate/'.$request->id)}}" class="btn btn-default btn-sm" data-toggle="tooltip" title="Activate"> <i class="material-icons">remove_circle</i></a>
                                            @endif
                                        </div>
                                    </td>
                                </tr>
                                @endforeach
                            </table>
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

        $('#request-info-table').DataTable();

        /**
         * Delete popup for Sector
         */
        $('#request-info-table').on('click', '.request-delete', function(event) {
            event.preventDefault();
            var requestId = $(this).attr('request-id');
            var destinationPath = BASE_URL + '/admin/request/' + requestId;
            console.log(destinationPath);
            $('#delete-confirm').attr('action', destinationPath);
            $("#delete-modal").modal('show');
        });

    });
</script>
@endpush

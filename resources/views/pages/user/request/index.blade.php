@extends('theme.layout.user.master')
@section('after-styles-end')
<?php $titleName = 'Request Management'; ?>
@section ('title', $titleName . ' | ' .config('settings.project-name-short'))
@endsection
@section('content')
<!-- Main content -->
    <ol class="breadcrumb align-right">
        <li><a href="{{ route('user.get_home') }}"><i class="material-icons">home</i> Home</a></li>
        <li><a href="{{ route('user.request') }}"><i class="material-icons">layers</i> Request Management</a></li>
    </ol>
    <div class="container-fluid">
            <!-- Horizontal Layout -->
            <div class="row">
                <div class="col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>REQUEST MANAGEMENT<a href="{{ url('user/request/create') }}" class="btn btn-xs btn-primary" name="button" style="float:right;"><i class="material-icons">library_add</i></a></h2>
                        </div>
                        <div class="body">

                            <table class="table table-bordered table-striped table-hover" id="asset-info-table">
                                <thead>
                                    <tr>
                                        <td style="width:10%;">Sl No</td>
                                        <td>Asset Name</td>
                                        <td>Purpose</td>
                                        <td>Date of Requirement</td>
                                        <td>status</td>
                                        {{-- <td style="width:30%;">View</td> --}}
                                    </tr>
                                </thead>
                                @foreach($requests as $key => $request)
                                <tr>
                                    <td>{{ $key+1 }}</td>
                                    <td>{{ $request->name }}</td>
                                    <td>{{ $request->purpose }}</td>
                                    <td>{{ $request->date_to_be_allocated }}</td>
                                    <td>
                                        {{ $request->status }}
                                        {{-- @if ($request->status == App\RequestAsset::ACTIVE)
                                            Approved
                                        @elseif ($request->status == App\RequestAsset::DEACTIVE)
                                            Declined
                                        @else
                                            Pending
                                        @endif --}}
                                    </td>
                                    {{-- <td>
                                        <div class="btn-group btn-group-sm">
                                            <a href="#" class="btn btn-default btn-sm" data-toggle="tooltip" title="View"> <i class="fa fa-share"></i></a>
                                            <a href="" sector-id="{{$sector->id}}" class="btn btn-default btn-sm sector-delete" data-toggle="tooltip" title="Delete"> <i class="fa fa-trash-o"></i></a>
                                            @if ($sector->status == App\Sector::ACTIVE)
                                                <a href="{{url('admin/sectors/deactivate/'.$sector->id)}}" class="btn btn-default btn-sm" data-toggle="tooltip" title="Deactivate"> <i class="fa fa-ban"></i></a>
                                            @else
                                                <a href="{{url('admin/sectors/activate/'.$sector->id)}}" class="btn btn-default btn-sm" data-toggle="tooltip" title="Activate"> <i class="fa fa-check-circle"></i></a>
                                            @endif
                                        </div>
                                    </td> --}}
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
@endsection
@push('footer.script')
<script type="text/javascript">
    BASE_URL = $('body').data("base-url");
    $(document).ready(function() {

        $('#asset-info-table').DataTable();

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

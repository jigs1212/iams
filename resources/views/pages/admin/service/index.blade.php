@extends('theme.layout.admin.master')
@section('after-styles-end')
@section ('title', config('settings.project-name-short').'| Service Mangement')
@endsection
@section('content')
<!-- Main content -->
    <ol class="breadcrumb align-right">
        <li><a href="{{ route('admin.get_home') }}"><i class="material-icons">home</i> Home</a></li>
        <li><a href="{{ route('admin.asset') }}"><i class="material-icons">build</i> Service Management</a></li>
    </ol>
    <div class="container-fluid">
            <!-- Horizontal Layout -->
            <div class="row">
                <div class="col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>SERVICE MANAGEMENT</h2>
                        </div>
                        <div class="body">

                            <table class="table table-bordered table-striped table-hover" id="asset-info-table">
                                <thead>
                                    <tr>
                                        <td style="width:10%;">Sl No</td>
                                        <td>Asset Name</td>
                                        <td>Service Description</td>
                                        <td>Date of call recoreded</td>
                                        <td>Date of call solved</td>
                                        <td>Solution</td>
                                        {{-- <td style="width:30%;">View</td> --}}
                                    </tr>
                                </thead>
                                {{-- @foreach($users as $key => $user)
                                <tr>
                                    <td>{{ $key+1 }}</td>
                                    <td>{{ $user->first_name }}</td>
                                    <td>{{ $user->last_name }}</td>
                                    <td>{{ $user->email }}</td>
                                    <td>
                                        <div class="btn-group btn-group-sm">
                                            <a href="#" class="btn btn-default btn-sm" data-toggle="tooltip" title="View"> <i class="fa fa-share"></i></a>
                                            <a href="" sector-id="{{$sector->id}}" class="btn btn-default btn-sm sector-delete" data-toggle="tooltip" title="Delete"> <i class="fa fa-trash-o"></i></a>
                                            @if ($sector->status == App\Sector::ACTIVE)
                                                <a href="{{url('admin/sectors/deactivate/'.$sector->id)}}" class="btn btn-default btn-sm" data-toggle="tooltip" title="Deactivate"> <i class="fa fa-ban"></i></a>
                                            @else
                                                <a href="{{url('admin/sectors/activate/'.$sector->id)}}" class="btn btn-default btn-sm" data-toggle="tooltip" title="Activate"> <i class="fa fa-check-circle"></i></a>
                                            @endif
                                        </div>
                                    </td>
                                </tr>
                                @endforeach --}}
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

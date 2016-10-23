@extends('theme.layout.admin.master')
@section('after-styles-end')
@section ('title', config('settings.project-name-short').'| User Registraion')
@endsection
@section('content')
<!-- Main content -->
    <ol class="breadcrumb align-right">
        <li><a href="{{ route('admin.get_home') }}"><i class="material-icons">home</i> Home</a></li>
        <li><a href="{{ route('admin.asset') }}"><i class="material-icons">people</i> Asset Management</a></li>
    </ol>
    <div class="container-fluid">
            <!-- Horizontal Layout -->
            <div class="row">
                <div class="col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>Asset MANAGEMENT</h2>
                        </div>
                        <div class="body">

                            <table class="table table-bordered table-striped table-hover" id="asset-info-table">
                                <thead>
                                    <tr>
                                        <td style="width:10%;">Sl No</td>
                                        <td>Asset Name</td>
                                        <td>Vendor Name</td>
                                        <td>Quantity</td>
                                        <td style="width:30%;">View</td>
                                    </tr>
                                </thead>
                                @foreach($assets as $key => $asset)
                                <tr>
                                    <td>{{ $key+1 }}</td>
                                    <td>{{ $asset->name }}</td>
                                    <td>{{ $asset->vendor_name }}</td>
                                    <td>{{ $asset->quantity }}</td>
                                    <td>
                                        <div class="btn-group btn-group-xs">
                                            <a href="{{url('admin/asset/'.$asset->id)}}" class="btn btn-default btn-xs" data-toggle="tooltip" title="View"> <i class="material-icons">forward</i></a>
                                            <a href="" asset-id="{{$asset->id}}" class="btn btn-default btn-xs asset-delete" data-toggle="tooltip" title="Delete"> <i class="material-icons">delete</i></a>
                                            @if ($asset->status == App\Asset::ACTIVE)
                                                <a href="{{url('admin/asset/deactivate/'.$asset->id)}}" class="btn btn-default btn-xs" data-toggle="tooltip" title="Deactivate"> <i class="material-icons">check_circle</i></a>
                                            @else
                                                <a href="{{url('admin/asset/activate/'.$asset->id)}}" class="btn btn-default btn-xs" data-toggle="tooltip" title="Activate"> <i class="material-icons">remove_circle</i></a>
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

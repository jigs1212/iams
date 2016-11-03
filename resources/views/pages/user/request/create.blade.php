@extends('theme.layout.user.master')
@section('after-styles-end')
<?php $titleName = 'Request Asset'; ?>
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
                        <h2>REQUEST REGISTRATION</h2>
                    </div>
                    <div class="body">
                        {!! Form::open(array('url'=>'user/request','class'=>'form-horizontal','method' => 'POST','id'=>'add-request')) !!}
                        {{-- <form class="form-horizontal"> --}}
                        <div class="row clearfix">
                            <div class="col-lg-3 col-md-3 col-sm-5 col-xs-6 form-control-label">
                                {!! Form::label('', 'Asset name')!!}
                            </div>
                            <div class="col-lg-9 col-md-9 col-sm-7 col-xs-6">
                                <div class="form-group">
                                    <div class="form-line">
                                        {!! Form::select('asset_id',array('' => '[Please select Asset]')+$assets,'',array('class'=>'form-control','id'=>'asset_id'))!!}
                                        {!! $errors->first('asset_id', '<div class="text-danger">:message</div>') !!}
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-3 col-sm-5 col-xs-6 form-control-label">
                                {!! Form::label('', 'Purpose of request')!!}
                            </div>
                            <div class="col-lg-9 col-md-9 col-sm-7 col-xs-6">
                                <div class="form-group">
                                    <div class="form-line">
                                        {!! Form::text('purpose','',array('class' => 'form-control','placeholder'=>'[Purpose]','id'=>'purpose'))!!}
                                        {!! $errors->first('purpose', '<div class="text-danger">:message</div>') !!}
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-3 col-sm-5 col-xs-6 form-control-label">
                                {!! Form::label('', 'Remarks')!!}
                            </div>
                            <div class="col-lg-9 col-md-9 col-sm-7 col-xs-6">
                                <div class="form-group">
                                    <div class="form-line">
                                        {!! Form::text('remarks','',array('class' => 'form-control','placeholder'=>'[Remarks]','id'=>'remarks'))!!}
                                        {!! $errors->first('remarks', '<div class="text-danger">:message</div>') !!}
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-3 col-sm-5 col-xs-6 form-control-label">
                                {!! Form::label('', 'Date on which to be allocated')!!}
                            </div>
                            <div class="col-lg-9 col-md-9 col-sm-7 col-xs-6">
                                <div class="form-group">
                                    <div class="form-line">
                                        {!! Form::date('date_to_be_allocated','',array('class' => 'form-control','placeholder'=>'[Date]','id'=>'date_to_be_allocated'))!!}
                                        {!! $errors->first('date_to_be_allocated', '<div class="text-danger">:message</div>') !!}
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-3 col-sm-5 col-xs-6 form-control-label">
                                {!! Form::label('', 'Time at which to be allocated')!!}
                            </div>
                            <div class="col-lg-9 col-md-9 col-sm-7 col-xs-6">
                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="time" name="time_to_be_allocated" value="" class="form-control" id='description'>
                                        {!! $errors->first('time_to_be_allocated', '<div class="text-danger">:message</div>') !!}
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-3 col-sm-5 col-xs-6 form-control-label">
                                {!! Form::label('', 'Date on which to be returned')!!}
                            </div>
                            <div class="col-lg-9 col-md-9 col-sm-7 col-xs-6">
                                <div class="form-group">
                                    <div class="form-line">
                                        {!! Form::date('date_of_return','',array('class' => 'form-control','placeholder'=>'[Date]','id'=>'date_of_return'))!!}
                                        {!! $errors->first('date_of_return', '<div class="text-danger">:message</div>') !!}
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-3 col-sm-5 col-xs-6 form-control-label">
                                {!! Form::label('', 'Time at which to be returned')!!}
                            </div>
                            <div class="col-lg-9 col-md-9 col-sm-7 col-xs-6">
                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="time" name="time_of_return" value="" class="form-control" id='description'>
                                        {!! $errors->first('time_of_return', '<div class="text-danger">:message</div>') !!}
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-offset-5 col-xs-1 p-t-25 p-b-25">
                                {!! Form::submit("Save", array("class" => "btn-lg btn-primary m-t-15 waves-effect btn btn-custom",'id'=>'btn_save')) !!}
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
@extends('theme.layout.admin.master') @section('after-styles-end') @section ('title', config('settings.project-name-short').'| Service Registraion') @endsection @section('content')
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
                        <h2>SERVICE REGISTRATION</h2>
                    </div>
                    <div class="body">
                        {{-- {!! Form::open(array('url'=>'admin/user','class'=>'form-horizontal','method' => 'POST','id'=>'add-form')) !!} --}}
                        <form class="form-horizontal">
                            <div class="row clearfix">
                                <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                    {!! Form::label('', 'Service Call No')!!}
                                </div>
                                <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                    <div class="form-group">
                                        <div class="form-line">
                                            {!! Form::text('Service_call_no','',array('class' => 'form-control','placeholder'=>'[Service Call No]','id'=>'name'))!!}
                                            {!! $errors->first('Service_call_no', '<div class="text-danger">:message</div>') !!}
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row clearfix">
                                <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                    {!! Form::label('', 'Problem Description')!!}
                                </div>
                                <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                    <div class="form-group">
                                        <div class="form-line">
                                            {!! Form::text('Problem','',array('class' => 'form-control','placeholder'=>'[Problem Description]','id'=>'Problem'))!!}
                                            {!! $errors->first('Problem', '<div class="text-danger">:message</div>') !!}
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row clearfix">
                                <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                    {!! Form::label('', 'Date of Registration')!!}
                                </div>
                                <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                    <div class="form-group">
                                        {!! Form::date('date_of_registration', '');!!}
                                        {!! $errors->first('date_of_registration', '<div class="text-danger">:message</div>') !!}
                                    </div>
                                </div>
                            </div>
                            <div class="row clearfix">
                                <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                    {!! Form::label('', 'Date of Resolution')!!}
                                </div>
                                <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                    <div class="form-group">
                                        {!! Form::date('date_of_resolved', '');!!}
                                        {!! $errors->first('date_of_resolved', '<div class="text-danger">:message</div>') !!}
                                    </div>
                                </div>
                            </div>
                            <div class="row clearfix">
                                <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                    {!! Form::label('', 'Problem Solution')!!}
                                </div>
                                <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                    <div class="form-group">
                                        <div class="form-line">
                                            {!! Form::text('Problem_Solution','',array('class' => 'form-control','placeholder'=>'[Problem_Solution]','id'=>'description'))!!}
                                            {!! $errors->first('Problem_Solution', '<div class="text-danger">:message</div>') !!}
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row clearfix">
                                <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                    {!! Form::label('', 'Remarks')!!}
                                </div>
                                <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                    <div class="form-group">
                                        <div class="form-line">
                                            {!! Form::text('remarks','',array('class' => 'form-control','placeholder'=>'[Remarks]','id'=>'remarks'))!!}
                                            {!! $errors->first('remarks', '<div class="text-danger">:message</div>') !!}
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row clearfix">
                                <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                    {!! Form::label('', 'Registered By Name')!!}
                                </div>
                                <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                    <div class="form-group">
                                        <div class="form-line">
                                            {!! Form::text('registered_by','',array('class' => 'form-control','placeholder'=>'[Name of the Service Requester]','id'=>'registered_by'))!!}
                                            {!! $errors->first('registered_by', '<div class="text-danger">:message</div>') !!}
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row clearfix">
                                <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                    {!! Form::label('', 'Call Status')!!}
                                </div>
                                <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                    <div class="form-group">
                                        <div class="form-line">
                                            {!! Form::select('choices',array('' => '[Select type of Call Status]'),'',array('class'=>'form-control select-box','id'=>'type')) !!}
                                            <div class="text-danger error" id="type_error"></div>
                                            {!! $errors->first('choices', '<div class="text-danger">:message</div>') !!}
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
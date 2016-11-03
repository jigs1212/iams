@extends('theme.layout.admin.master')
@section('after-styles-end')
<?php $titleName = 'Add Asset'; ?>
@section ('title', $titleName . ' | ' .config('settings.project-name-short'))
@endsection @section('content')
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
                        <h2>ASSET REGISTRATION</h2>
                    </div>
                    <div class="body">
                        {!! Form::open(array('url'=>'admin/asset','class'=>'form-horizontal','method' => 'POST','id'=>'add-form')) !!}
                            <div class="row clearfix">
                            <div class="col-lg-3 col-md-3 col-sm-5 col-xs-6 form-control-label">
                                {!! Form::label('', 'Name')!!}
                            </div>
                            <div class="col-lg-9 col-md-9 col-sm-7 col-xs-6">
                                <div class="form-group">
                                    <div class="form-line">
                                        {!! Form::text('name','',array('class' => 'form-control','placeholder'=>'[Name of the asset]','id'=>'name'))!!}
                                        {!! $errors->first('name', '<div class="text-danger">:message</div>') !!}
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-3 col-sm-5 col-xs-6 form-control-label">
                                {!! Form::label('', 'Description')!!}
                            </div>
                            <div class="col-lg-9 col-md-9 col-sm-7 col-xs-6">
                                <div class="form-group">
                                    <div class="form-line">
                                        {!! Form::text('description','',array('class' => 'form-control','placeholder'=>'[Description]','id'=>'description'))!!}
                                        {!! $errors->first('description', '<div class="text-danger">:message</div>') !!}
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-3 col-sm-5 col-xs-6 form-control-label">
                                {!! Form::label('', 'Part No')!!}
                            </div>
                            <div class="col-lg-9 col-md-9 col-sm-7 col-xs-6">
                                <div class="form-group">
                                    <div class="form-line">
                                        {!! Form::text('part_no','',array('class' => 'form-control','placeholder'=>'[Part No]','id'=>'description'))!!}
                                        {!! $errors->first('part_no', '<div class="text-danger">:message</div>') !!}
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-3 col-sm-5 col-xs-6 form-control-label">
                                {!! Form::label('', 'Vendor Name')!!}
                            </div>
                            <div class="col-lg-9 col-md-9 col-sm-7 col-xs-6">
                                <div class="form-group">
                                    <div class="form-line">
                                        {!! Form::text('vendor_name','',array('class' => 'form-control','placeholder'=>'[Vendor Name]','id'=>'description'))!!}
                                        {!! $errors->first('vendor_name', '<div class="text-danger">:message</div>') !!}
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-3 col-sm-5 col-xs-6 form-control-label">
                                {!! Form::label('', 'Quantity')!!}
                            </div>
                            <div class="col-lg-9 col-md-9 col-sm-7 col-xs-6">
                                <div class="form-group">
                                    <div class="form-line">
                                        {!! Form::text('quantity','',array('class' => 'form-control','placeholder'=>'[Quantity]','id'=>'description'))!!}
                                        {!! $errors->first('quantity', '<div class="text-danger">:message</div>') !!}
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-3 col-sm-5 col-xs-6 form-control-label">
                                {!! Form::label('', 'Type')!!}
                            </div>
                            <div class="col-lg-9 col-md-9 col-sm-7 col-xs-6">
                                <div class="form-group">
                                    <div class="form-line">
                                        {!! Form::select('type',array('' => '[Select type of asset]'),'',array('class'=>'form-control select-box','id'=>'type')) !!}
                                        <div class="text-danger error" id="type_error"></div>
                                        {!! $errors->first('type', '<div class="text-danger">:message</div>') !!}
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-3 col-sm-5 col-xs-6 form-control-label">
                                {!! Form::label('', 'Supplier Name')!!}
                            </div>
                            <div class="col-lg-9 col-md-9 col-sm-7 col-xs-6">
                                <div class="form-group">
                                    <div class="form-line">
                                        {!! Form::text('supplier_name','',array('class' => 'form-control','placeholder'=>'[Supplier Name]','id'=>'supplier_name'))!!}
                                        {!! $errors->first('supplier_name', '<div class="text-danger">:message</div>') !!}
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-3 col-sm-5 col-xs-6 form-control-label">
                                {!! Form::label('', 'Bill No')!!}
                            </div>
                            <div class="col-lg-9 col-md-9 col-sm-7 col-xs-6">
                                <div class="form-group">
                                    <div class="form-line">
                                        {!! Form::text('bill_no','',array('class' => 'form-control','placeholder'=>'[Bill No]','id'=>'bill_no'))!!}
                                        {!! $errors->first('bill_no', '<div class="text-danger">:message</div>') !!}
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-3 col-sm-5 col-xs-6 form-control-label">
                                {!! Form::label('', 'Amount')!!}
                            </div>
                            <div class="col-lg-9 col-md-9 col-sm-7 col-xs-6">
                                <div class="form-group">
                                    <div class="form-line">
                                        {!! Form::number('amount','',array('class' => 'form-control','placeholder'=>'[Amount]','id'=>'amount'))!!}
                                        {!! $errors->first('amount', '<div class="text-danger">:message</div>') !!}
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-3 col-sm-5 col-xs-6 form-control-label">
                                {!! Form::label('', 'Date of Purchase')!!}
                            </div>
                            <div class="col-lg-9 col-md-9 col-sm-7 col-xs-6">
                                <div class="form-group">
                                    <div class="form-line">
                                        {!! Form::text('date_of_purchase','',array('class' => 'form-control date','placeholder'=>'Ex: 2016/30/07','id'=>'date_of_purchase'))!!}
                                        {!! $errors->first('date_of_purchase', '<div class="text-danger">:message</div>') !!}
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-3 col-sm-5 col-xs-6 form-control-label">
                                {!! Form::label('', 'Warranty Period')!!}
                            </div>
                            <div class="col-lg-9 col-md-9 col-sm-7 col-xs-6">
                                <div class="form-group">
                                    <div class="form-line">
                                        {!! Form::text('warranty_period','',array('class' => 'form-control','placeholder'=>'[Warranty Period]','id'=>'warranty_period'))!!}
                                        {!! $errors->first('warranty_period', '<div class="text-danger">:message</div>') !!}
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-3 col-sm-5 col-xs-6 form-control-label">
                                {!! Form::label('', 'Customer Care Number')!!}
                            </div>
                            <div class="col-lg-9 col-md-9 col-sm-7 col-xs-6">
                                <div class="form-group">
                                    <div class="form-line">
                                        {!! Form::text('customer_care_numbers','',array('class' => 'form-control','placeholder'=>'[Customer Care Number]','id'=>'customer_care_numbers'))!!}
                                        {!! $errors->first('customer_care_numbers', '<div class="text-danger">:message</div>') !!}
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-3 col-sm-5 col-xs-6 form-control-label">
                                {!! Form::label('', 'Customer Care Email')!!}
                            </div>
                            <div class="col-lg-9 col-md-9 col-sm-7 col-xs-6">
                                <div class="form-group">
                                    <div class="form-line">
                                        {!! Form::text('customer_care_email','',array('class' => 'form-control','placeholder'=>'[Customer Care Email]','id'=>'customer_care_email'))!!}
                                        {!! $errors->first('customer_care_email', '<div class="text-danger">:message</div>') !!}
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-3 col-sm-5 col-xs-6 form-control-label">
                                {!! Form::label('', 'Vendor Website')!!}
                            </div>
                            <div class="col-lg-9 col-md-9 col-sm-7 col-xs-6">
                                <div class="form-group">
                                    <div class="form-line">
                                        {!! Form::text('vendor_website_support','',array('class' => 'form-control','placeholder'=>'[Vendor Website]','id'=>'vendor_website_support'))!!}
                                        {!! $errors->first('vendor_website_support', '<div class="text-danger">:message</div>') !!}
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-3 col-sm-5 col-xs-6 form-control-label">
                                {!! Form::label('', 'End of Warranty Date')!!}
                            </div>
                            <div class="col-lg-9 col-md-9 col-sm-7 col-xs-6">
                                <div class="form-group">
                                    <div class="form-line">
                                        {!! Form::text('date_of_end_of_warranty','',array('class' => 'form-control date','placeholder'=>'Ex: 2016/30/07','id'=>'date_of_end_of_warranty'))!!}
                                        {!! $errors->first('date_of_end_of_warranty', '<div class="text-danger">:message</div>') !!}
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
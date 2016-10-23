<div class="modal modal-info fade" id="delete-modal" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Delete</h4>
            </div>
            <div class="modal-content">
                {!! Form::open(['id' => 'delete-confirm','method'=>'DELETE'])!!}
                <div class="modal-body">
                    <p>This action is irreversible, Are you sure want to delete this data?</p>
                </div>
                <div class="modal-footer">
                    {!! Form::submit('Yes', ['class' => 'btn btn-outline','id'=>'btn-delete']) !!}
                    {!!Form::button('No', array('class' => 'btn btn-outline','data-dismiss' => 'modal'))!!}
                </div>
                {!! Form::close() !!}
            </div>
        </div>
    </div>
</div>
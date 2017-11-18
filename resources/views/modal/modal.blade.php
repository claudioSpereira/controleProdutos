{{ Form::open(array('url'=>'projects/jsModal', 'class'=>'frmCreateProject')) }}
<div class="modal-header">
    <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
    <h4 class="modal-title" id="myModalLabel">Create Project</h4>
</div>
<div class="modal-body">
    <div class="row">
        <div class="col-lg-12">
            <div class="form-group">
                {{ Form::label('Project Title') }}
                {{ Form::text('project_title', null, array('class'=>'form-control', 'placeholder'=>'Project title')) }}
            </div>
        </div>
    </div>
</div>
<div class="modal-footer">
    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
    {{ Form::submit('Submit', array('class'=>'btn btn-primary')) }}
</div>
{{ Form::close() }}

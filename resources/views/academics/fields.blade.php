<div class="modal fade" id="add-academicyear-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-notify modal-ms modal-right modal-success" role="document">
        <div class="modal-content">
          	<div class="modal-header">
            	<button type="button" class="close" data-dismiss="modal" aria-label="Close">
              		<span aria-hidden="true">&times;</span></button>
            	<h4 class="modal-title"><i class="fa fa-calendar" aria-hidden="true"><b> Add New Academic Day</b></i></h4>
          	</div>
          	<div class="modal-body">
                <!-- Academic Year Field -->
                <div class="input-group">
                    <span class="input-group-addon">Academic Year</span>
                    {!! Form::text('academic_year', null, ['class' => 'form-control']) !!}
                </div>
            </div>
            <!-- Submit Field -->
            <div class="modal-footer">
            	<button type="button" class="btn btn-warning btn-flat" data-dismiss="modal"><i class="fa fa-close"></i> Close</button>
            	{!! Form::submit('Save Year', ['class' => 'btn btn-success']) !!}
          	</div>
        </div>
    </div>
</div>
<!-- Car Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('car_id', 'Car Id:') !!}
    {!! Form::number('car_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Remarks Field -->
<div class="form-group col-sm-6">
    {!! Form::label('remarks', 'Remarks:') !!}
    {!! Form::text('remarks', null, ['class' => 'form-control']) !!}
</div>

<!-- Incident Image Path 1 Field -->
<div class="form-group col-sm-6">
    {!! Form::label('incident_image_path_1', 'Incident Image Path 1:') !!}
    {!! Form::text('incident_image_path_1', null, ['class' => 'form-control']) !!}
</div>

<!-- Incident Image Path 2 Field -->
<div class="form-group col-sm-6">
    {!! Form::label('incident_image_path_2', 'Incident Image Path 2:') !!}
    {!! Form::text('incident_image_path_2', null, ['class' => 'form-control']) !!}
</div>

<!-- Incident Image Path 3 Field -->
<div class="form-group col-sm-6">
    {!! Form::label('incident_image_path_3', 'Incident Image Path 3:') !!}
    {!! Form::text('incident_image_path_3', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('incidentReports.index') }}" class="btn btn-default">Cancel</a>
</div>

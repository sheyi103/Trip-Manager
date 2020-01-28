<!-- Car Id Field -->
<div class="form-group">
    {!! Form::label('car_id', 'Car Plate number') !!}
    <p>{{ $incidentReport->car['plate_number'] }}</p>
</div>

<!-- Remarks Field -->
<div class="form-group">
    {!! Form::label('remarks', 'Remarks:') !!}
    <p>{{ $incidentReport->remarks }}</p>
</div>

<!-- Incident Image Path 1 Field -->
<div class="form-group">
    {!! Form::label('incident_image_path_1', 'Incident Image Path 1:') !!}
    <p>{{ $incidentReport->incident_image_path_1 }}</p>
</div>

<!-- Incident Image Path 2 Field -->
<div class="form-group">
    {!! Form::label('incident_image_path_2', 'Incident Image Path 2:') !!}
    <p>{{ $incidentReport->incident_image_path_2 }}</p>
</div>

<!-- Incident Image Path 3 Field -->
<div class="form-group">
    {!! Form::label('incident_image_path_3', 'Incident Image Path 3:') !!}
    <p>{{ $incidentReport->incident_image_path_3 }}</p>
</div>
<!-- Created At Field -->
        <div class="form-group">
            {!! Form::label('created_at', 'Created At:') !!}
            <p>{{ $incidentReport->created_at->format('D d, M, Y H:i') }}</p>
        </div>

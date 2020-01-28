<!-- Car Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('car_id', 'Car Id:') !!}
    {!! Form::number('car_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Workshop Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('workshop_id', 'Workshop Id:') !!}
    {!! Form::number('workshop_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Milleage Field -->
<div class="form-group col-sm-6">
    {!! Form::label('milleage', 'Milleage:') !!}
    {!! Form::number('milleage', null, ['class' => 'form-control']) !!}
</div>

<!-- Maintainance Cost Field -->
<div class="form-group col-sm-6">
    {!! Form::label('maintainance_cost', 'Maintainance Cost:') !!}
    {!! Form::number('maintainance_cost', null, ['class' => 'form-control']) !!}
</div>

<!-- Maintainance Gps Coordinates Long Field -->
<div class="form-group col-sm-6">
    {!! Form::label('maintainance_gps_coordinates_long', 'Maintainance Gps Coordinates Long:') !!}
    {!! Form::number('maintainance_gps_coordinates_long', null, ['class' => 'form-control']) !!}
</div>

<!-- Maintainance Gps Coordinates Lat Field -->
<div class="form-group col-sm-6">
    {!! Form::label('maintainance_gps_coordinates_lat', 'Maintainance Gps Coordinates Lat:') !!}
    {!! Form::number('maintainance_gps_coordinates_lat', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('maintainances.index') }}" class="btn btn-default">Cancel</a>
</div>

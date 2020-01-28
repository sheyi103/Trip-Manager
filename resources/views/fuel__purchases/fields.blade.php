<!-- Car Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('car_id', 'Car Id:') !!}
    {!! Form::number('car_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Milleage Field -->
<div class="form-group col-sm-6">
    {!! Form::label('milleage', 'Milleage:') !!}
    {!! Form::number('milleage', null, ['class' => 'form-control']) !!}
</div>

<!-- Fuel Guage Before Field -->
<div class="form-group col-sm-6">
    {!! Form::label('fuel_guage_before', 'Fuel Guage Before:') !!}
    {!! Form::number('fuel_guage_before', null, ['class' => 'form-control']) !!}
</div>

<!-- Fuel Guage After Field -->
<div class="form-group col-sm-6">
    {!! Form::label('fuel_guage_after', 'Fuel Guage After:') !!}
    {!! Form::number('fuel_guage_after', null, ['class' => 'form-control']) !!}
</div>

<!-- Cost Field -->
<div class="form-group col-sm-6">
    {!! Form::label('cost', 'Cost:') !!}
    {!! Form::number('cost', null, ['class' => 'form-control']) !!}
</div>

<!-- Filling Station Gps Coordinates Long Field -->
<div class="form-group col-sm-6">
    {!! Form::label('filling_station_gps_coordinates_long', 'Filling Station Gps Coordinates Long:') !!}
    {!! Form::number('filling_station_gps_coordinates_long', null, ['class' => 'form-control']) !!}
</div>

<!-- Filling Station Gps Coordinates Lat Field -->
<div class="form-group col-sm-6">
    {!! Form::label('filling_station_gps_coordinates_lat', 'Filling Station Gps Coordinates Lat:') !!}
    {!! Form::number('filling_station_gps_coordinates_lat', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('fuelPurchases.index') }}" class="btn btn-default">Cancel</a>
</div>

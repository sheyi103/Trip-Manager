<!-- User Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('user_id', 'User Id:') !!}
    {!! Form::number('user_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Start Trip Milleage Field -->
<div class="form-group col-sm-6">
    {!! Form::label('start_trip_milleage', 'Start Trip Milleage:') !!}
    {!! Form::number('start_trip_milleage', null, ['class' => 'form-control']) !!}
</div>

<!-- Start Trip Fuel Guage Field -->
<div class="form-group col-sm-6">
    {!! Form::label('start_trip_fuel_guage', 'Start Trip Fuel Guage:') !!}
    {!! Form::number('start_trip_fuel_guage', null, ['class' => 'form-control']) !!}
</div>

<!-- Start Trip Time Field -->
<div class="form-group col-sm-6">
    {!! Form::label('start_trip_time', 'Start Trip Time:') !!}
    {!! Form::text('start_trip_time', null, ['class' => 'form-control']) !!}
</div>

<!-- Start Trip Gps Coordinates Long Field -->
<div class="form-group col-sm-6">
    {!! Form::label('start_trip_gps_coordinates_long', 'Start Trip Gps Coordinates Long:') !!}
    {!! Form::number('start_trip_gps_coordinates_long', null, ['class' => 'form-control']) !!}
</div>

<!-- Start Trip Gps Coordinates Lat Field -->
<div class="form-group col-sm-6">
    {!! Form::label('start_trip_gps_coordinates_lat', 'Start Trip Gps Coordinates Lat:') !!}
    {!! Form::number('start_trip_gps_coordinates_lat', null, ['class' => 'form-control']) !!}
</div>

<!-- Passenger Name Field -->
<div class="form-group col-sm-6">
    {!! Form::label('passenger_name', 'Passenger Name:') !!}
    {!! Form::text('passenger_name', null, ['class' => 'form-control']) !!}
</div>

<!-- End Trip Milleage Field -->
<div class="form-group col-sm-6">
    {!! Form::label('end_trip_milleage', 'End Trip Milleage:') !!}
    {!! Form::number('end_trip_milleage', null, ['class' => 'form-control']) !!}
</div>

<!-- End Trip Fuel Guage Field -->
<div class="form-group col-sm-6">
    {!! Form::label('end_trip_fuel_guage', 'End Trip Fuel Guage:') !!}
    {!! Form::number('end_trip_fuel_guage', null, ['class' => 'form-control']) !!}
</div>

<!-- End Trip Time Field -->
<div class="form-group col-sm-6">
    {!! Form::label('end_trip_time', 'End Trip Time:') !!}
    {!! Form::text('end_trip_time', null, ['class' => 'form-control']) !!}
</div>

<!-- End Trip Gps Coordinates Long Field -->
<div class="form-group col-sm-6">
    {!! Form::label('end_trip_gps_coordinates_long', 'End Trip Gps Coordinates Long:') !!}
    {!! Form::number('end_trip_gps_coordinates_long', null, ['class' => 'form-control']) !!}
</div>

<!-- End Trip Gps Coordinates Lat Field -->
<div class="form-group col-sm-6">
    {!! Form::label('end_trip_gps_coordinates_lat', 'End Trip Gps Coordinates Lat:') !!}
    {!! Form::number('end_trip_gps_coordinates_lat', null, ['class' => 'form-control']) !!}
</div>

<!-- Toll Balance Field -->
<div class="form-group col-sm-6">
    {!! Form::label('toll_balance', 'Toll Balance:') !!}
    {!! Form::number('toll_balance', null, ['class' => 'form-control']) !!}
</div>

<!-- Remarks Field -->
<div class="form-group col-sm-6">
    {!! Form::label('remarks', 'Remarks:') !!}
    {!! Form::text('remarks', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('trips.index') }}" class="btn btn-default">Cancel</a>
</div>

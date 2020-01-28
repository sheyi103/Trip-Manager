<!-- User Id Field -->
<div class="form-group">
    {!! Form::label('user_id', 'Drivers Name:') !!}
    <p>{{ $trip->user['name'] }}</p>
</div>

<!-- Start Trip Milleage Field -->
<div class="form-group">
    {!! Form::label('start_trip_milleage', 'Start Trip Milleage:') !!}
    <p>{{ $trip->start_trip_milleage }}</p>
</div>

<!-- Start Trip Fuel Guage Field -->
<div class="form-group">
    {!! Form::label('start_trip_fuel_guage', 'Start Trip Fuel Guage:') !!}
    <p>{{ $trip->start_trip_fuel_guage }}</p>
</div>

<!-- Start Trip Time Field -->
<div class="form-group">
    {!! Form::label('start_trip_time', 'Start Trip Time:') !!}
    <p>{{ $trip->start_trip_time }}</p>
</div>

<!-- Start Trip Gps Coordinates Long Field -->
<div class="form-group">
    {!! Form::label('start_trip_gps_coordinates_long', 'Start Trip Gps Coordinates Long:') !!}
    <p>{{ $trip->start_trip_gps_coordinates_long }}</p>
</div>

<!-- Start Trip Gps Coordinates Lat Field -->
<div class="form-group">
    {!! Form::label('start_trip_gps_coordinates_lat', 'Start Trip Gps Coordinates Lat:') !!}
    <p>{{ $trip->start_trip_gps_coordinates_lat }}</p>
</div>

<!-- Passenger Name Field -->
<div class="form-group">
    {!! Form::label('passenger_name', 'Passenger Name:') !!}
    <p>{{ $trip->passenger_name }}</p>
</div>

<!-- End Trip Milleage Field -->
<div class="form-group">
    {!! Form::label('end_trip_milleage', 'End Trip Milleage:') !!}
    <p>{{ $trip->end_trip_milleage }}</p>
</div>

<!-- End Trip Fuel Guage Field -->
<div class="form-group">
    {!! Form::label('end_trip_fuel_guage', 'End Trip Fuel Guage:') !!}
    <p>{{ $trip->end_trip_fuel_guage }}</p>
</div>

<!-- End Trip Time Field -->
<div class="form-group">
    {!! Form::label('end_trip_time', 'End Trip Time:') !!}
    <p>{{ $trip->end_trip_time }}</p>
</div>

<!-- End Trip Gps Coordinates Long Field -->
<div class="form-group">
    {!! Form::label('end_trip_gps_coordinates_long', 'End Trip Gps Coordinates Long:') !!}
    <p>{{ $trip->end_trip_gps_coordinates_long }}</p>
</div>

<!-- End Trip Gps Coordinates Lat Field -->
<div class="form-group">
    {!! Form::label('end_trip_gps_coordinates_lat', 'End Trip Gps Coordinates Lat:') !!}
    <p>{{ $trip->end_trip_gps_coordinates_lat }}</p>
</div>

<!-- Toll Balance Field -->
<div class="form-group">
    {!! Form::label('toll_balance', 'Toll Balance:') !!}
    <p>{{ $trip->toll_balance }}</p>
</div>

<!-- Remarks Field -->
<div class="form-group">
    {!! Form::label('remarks', 'Remarks:') !!}
    <p>{{ $trip->remarks }}</p>
</div>

<!-- Created At Field -->
        <div class="form-group">
            {!! Form::label('created_at', 'Created At:') !!}
            <p>{{ $trip->created_at->format('D d, M, Y H:i') }}</p>
        </div>
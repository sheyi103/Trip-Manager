<!-- Car Id Field -->
<div class="form-group">
    {!! Form::label('car_id', 'Car Plate Number:') !!}
    <p>{{ $fuelPurchase->car['plate_number'] }}</p>
</div>

<!-- Milleage Field -->
<div class="form-group">
    {!! Form::label('milleage', 'Milleage:') !!}
    <p>{{ $fuelPurchase->milleage }}</p>
</div>

<!-- Fuel Guage Before Field -->
<div class="form-group">
    {!! Form::label('fuel_guage_before', 'Fuel Guage Before:') !!}
    <p>{{ $fuelPurchase->fuel_guage_before }}</p>
</div>

<!-- Fuel Guage After Field -->
<div class="form-group">
    {!! Form::label('fuel_guage_after', 'Fuel Guage After:') !!}
    <p>{{ $fuelPurchase->fuel_guage_after }}</p>
</div>

<!-- Cost Field -->
<div class="form-group">
    {!! Form::label('cost', 'Cost:') !!}
    <p>&#8358;{{number_format ( $fuelPurchase->cost) }}</p>
</div>

<!-- Filling Station Gps Coordinates Long Field -->
<div class="form-group">
    {!! Form::label('filling_station_gps_coordinates_long', 'Filling Station Gps Coordinates Long:') !!}
    <p>{{ $fuelPurchase->filling_station_gps_coordinates_long }}</p>
</div>

<!-- Filling Station Gps Coordinates Lat Field -->
<div class="form-group">
    {!! Form::label('filling_station_gps_coordinates_lat', 'Filling Station Gps Coordinates Lat:') !!}
    <p>{{ $fuelPurchase->filling_station_gps_coordinates_lat }}</p>
</div>
<!-- Created At Field -->
        <div class="form-group">
            {!! Form::label('created_at', 'Created At:') !!}
            <p>{{ $fuelPurchase->created_at->format('D d, M, Y H:i') }}</p>
        </div>

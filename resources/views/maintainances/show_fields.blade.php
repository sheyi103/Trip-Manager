<!-- Car Id Field -->
<div class="form-group">
    {!! Form::label('car_id', 'Car Plate Number:') !!}
    <p>{{ $maintainance->car['plate_number'] }}</p>
</div>

<!-- Workshop Id Field -->
<div class="form-group">
    {!! Form::label('workshop_id', 'Workshop Id:') !!}
    <p>{{ $maintainance->workshop['name'] }}</p>
</div>


<!-- Milleage Field -->
<div class="form-group">
    {!! Form::label('milleage', 'Milleage:') !!}
    <p>{{ $maintainance->milleage }}</p>
</div>

<!-- Maintainance Cost Field -->
<div class="form-group">
    {!! Form::label('maintainance_cost', 'Maintainance Cost:') !!}
    <p>&#8358;{{number_format ($maintainance->maintainance_cost) }}</p>
</div>

<!-- Maintainance Gps Coordinates Long Field -->
<div class="form-group">
    {!! Form::label('maintainance_gps_coordinates_long', 'Maintainance Gps Coordinates Long:') !!}
    <p>{{ $maintainance->maintainance_gps_coordinates_long }}</p>
</div>

<!-- Maintainance Gps Coordinates Lat Field -->
<div class="form-group">
    {!! Form::label('maintainance_gps_coordinates_lat', 'Maintainance Gps Coordinates Lat:') !!}
    <p>{{ $maintainance->maintainance_gps_coordinates_lat }}</p>
</div>
<!-- Created At Field -->
        <div class="form-group">
            {!! Form::label('created_at', 'Created At:') !!}
            <p>{{ $maintainance->created_at->format('D d, M, Y H:i') }}</p>
        </div>

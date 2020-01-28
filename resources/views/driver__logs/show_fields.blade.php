<!-- User Id Field -->
<div class="form-group">
    {!! Form::label('user_id', 'Driver Name:') !!}
    <p><a href="/users/{{ $driverLog->user['id'] }}"><b>{{ $driverLog->user['name'] }}</b></a></p>
</div>

<!-- Car Id Field -->
<div class="form-group">
    {!! Form::label('car_id', 'Car Name:') !!}
    <p><a href="/cars/{{ $driverLog->car['id'] }}"><b>{{ $driverLog->car['make'] }}</b></a></p>
</div>

<!-- Destination Field -->
<div class="form-group">
    {!! Form::label('destination', 'Destination:') !!}
    <p>{{ $driverLog->destination }}</p>
</div>

<!-- Origin Field -->
<div class="form-group">
    {!! Form::label('origin', 'Origin:') !!}
    <p>{{ $driverLog->origin }}</p>
</div>

<!-- Start Milleage Field -->
<div class="form-group">
    {!! Form::label('start_milleage', 'Start Milleage:') !!}
    <p>{{ $driverLog->start_milleage }}</p>
</div>

<!-- End Milleage Field -->
<div class="form-group">
    {!! Form::label('end_milleage', 'End Milleage:') !!}
    <p>{{ $driverLog->end_milleage }}</p>
</div>

<!-- Distance Covered Field -->
<div class="form-group">
    {!! Form::label('distance_covered', 'Distance Covered:') !!}
    <p>{{ $driverLog->distance_covered }}</p>
</div>

<!-- Petrol Level Field -->
<div class="form-group">
    {!! Form::label('petrol_level', 'Petrol Level:') !!}
    <p>{{ $driverLog->petrol_level }}</p>
</div>

<!-- Petrol Purchase Field -->
<div class="form-group">
    {!! Form::label('petrol_purchase', 'Petrol Purchase:') !!}
    <p>{{ $driverLog->petrol_purchase }}</p>
</div>

<!-- Oil Purchase Field -->
<div class="form-group">
    {!! Form::label('oil_purchase', 'Oil Purchase:') !!}
    <p>{{ $driverLog->oil_purchase }}</p>
</div>

<!-- Officers Remarks Field -->
<div class="form-group">
    {!! Form::label('officers_remarks', 'Officers Remarks:') !!}
    <p>{{ $driverLog->officers_remarks }}</p>
</div>

<!-- Status Field -->
<div class="form-group">
    {!! Form::label('status', 'Status:') !!}
    <p>{{ $driverLog->status }}</p>
</div>


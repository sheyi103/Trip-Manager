<!-- User Id Field -->
<div class="form-group">
    {!! Form::label('user_id', 'User Id:') !!}
    <p>{{ $driverLog->user_id }}</p>
</div>

<!-- Journey To Field -->
<div class="form-group">
    {!! Form::label('journey_to', 'Journey To:') !!}
    <p>{{ $driverLog->journey_to }}</p>
</div>

<!-- Journey From Field -->
<div class="form-group">
    {!! Form::label('journey_from', 'Journey From:') !!}
    <p>{{ $driverLog->journey_from }}</p>
</div>

<!-- Initial Kilometer Field -->
<div class="form-group">
    {!! Form::label('initial_kilometer', 'Initial Kilometer:') !!}
    <p>{{ $driverLog->initial_kilometer }}</p>
</div>

<!-- Final Kilometer Field -->
<div class="form-group">
    {!! Form::label('final_kilometer', 'Final Kilometer:') !!}
    <p>{{ $driverLog->final_kilometer }}</p>
</div>

<!-- Total Kilometer Covered Field -->
<div class="form-group">
    {!! Form::label('total_kilometer_covered', 'Total Kilometer Covered:') !!}
    <p>{{ $driverLog->total_kilometer_covered }}</p>
</div>

<!-- Petrol Position Field -->
<div class="form-group">
    {!! Form::label('petrol_position', 'Petrol Position:') !!}
    <p>{{ $driverLog->petrol_position }}</p>
</div>

<!-- Petrol Purchases Field -->
<div class="form-group">
    {!! Form::label('petrol_purchases', 'Petrol Purchases:') !!}
    <p>{{ $driverLog->petrol_purchases }}</p>
</div>

<!-- Oil Purchases Field -->
<div class="form-group">
    {!! Form::label('oil_purchases', 'Oil Purchases:') !!}
    <p>{{ $driverLog->oil_purchases }}</p>
</div>

<!-- Officers Remarks And Initials Field -->
<div class="form-group">
    {!! Form::label('officers_remarks_and_initials', 'Officers Remarks And Initials:') !!}
    <p>{{ $driverLog->officers_remarks_and_initials }}</p>
</div>

<!-- Status Field -->
<div class="form-group">
    {!! Form::label('status', 'Status:') !!}
    <p>{{ $driverLog->status }}</p>
</div>


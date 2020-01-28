<!-- User Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('user_id', 'User Id:') !!}
    {!! Form::number('user_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Car Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('car_id', 'Car Id:') !!}
    {!! Form::number('car_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Destination Field -->
<div class="form-group col-sm-6">
    {!! Form::label('destination', 'Destination:') !!}
    {!! Form::text('destination', null, ['class' => 'form-control']) !!}
</div>

<!-- Origin Field -->
<div class="form-group col-sm-6">
    {!! Form::label('origin', 'Origin:') !!}
    {!! Form::text('origin', null, ['class' => 'form-control']) !!}
</div>

<!-- Start Milleage Field -->
<div class="form-group col-sm-6">
    {!! Form::label('start_milleage', 'Start Milleage:') !!}
    {!! Form::number('start_milleage', null, ['class' => 'form-control']) !!}
</div>

<!-- End Milleage Field -->
<div class="form-group col-sm-6">
    {!! Form::label('end_milleage', 'End Milleage:') !!}
    {!! Form::number('end_milleage', null, ['class' => 'form-control']) !!}
</div>

<!-- Distance Covered Field -->
<div class="form-group col-sm-6">
    {!! Form::label('distance_covered', 'Distance Covered:') !!}
    {!! Form::number('distance_covered', null, ['class' => 'form-control']) !!}
</div>

<!-- Petrol Level Field -->
<div class="form-group col-sm-6">
    {!! Form::label('petrol_level', 'Petrol Level:') !!}
    {!! Form::number('petrol_level', null, ['class' => 'form-control']) !!}
</div>

<!-- Petrol Purchase Field -->
<div class="form-group col-sm-6">
    {!! Form::label('petrol_purchase', 'Petrol Purchase:') !!}
    {!! Form::number('petrol_purchase', null, ['class' => 'form-control']) !!}
</div>

<!-- Oil Purchase Field -->
<div class="form-group col-sm-6">
    {!! Form::label('oil_purchase', 'Oil Purchase:') !!}
    {!! Form::number('oil_purchase', null, ['class' => 'form-control']) !!}
</div>

<!-- Officers Remarks Field -->
<div class="form-group col-sm-6">
    {!! Form::label('officers_remarks', 'Officers Remarks:') !!}
    {!! Form::text('officers_remarks', null, ['class' => 'form-control']) !!}
</div>

<!-- Status Field -->
<div class="form-group col-sm-6">
    {!! Form::label('status', 'Status:') !!}
    {!! Form::text('status', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('driverLogs.index') }}" class="btn btn-default">Cancel</a>
</div>

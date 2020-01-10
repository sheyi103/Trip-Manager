<!-- User Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('user_id', 'User Id:') !!}
    {!! Form::number('user_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Journey To Field -->
<div class="form-group col-sm-6">
    {!! Form::label('journey_to', 'Journey To:') !!}
    {!! Form::text('journey_to', null, ['class' => 'form-control']) !!}
</div>

<!-- Journey From Field -->
<div class="form-group col-sm-6">
    {!! Form::label('journey_from', 'Journey From:') !!}
    {!! Form::text('journey_from', null, ['class' => 'form-control']) !!}
</div>

<!-- Initial Kilometer Field -->
<div class="form-group col-sm-6">
    {!! Form::label('initial_kilometer', 'Initial Kilometer:') !!}
    {!! Form::number('initial_kilometer', null, ['class' => 'form-control']) !!}
</div>

<!-- Final Kilometer Field -->
<div class="form-group col-sm-6">
    {!! Form::label('final_kilometer', 'Final Kilometer:') !!}
    {!! Form::number('final_kilometer', null, ['class' => 'form-control']) !!}
</div>

<!-- Total Kilometer Covered Field -->
<div class="form-group col-sm-6">
    {!! Form::label('total_kilometer_covered', 'Total Kilometer Covered:') !!}
    {!! Form::number('total_kilometer_covered', null, ['class' => 'form-control']) !!}
</div>

<!-- Petrol Position Field -->
<div class="form-group col-sm-6">
    {!! Form::label('petrol_position', 'Petrol Position:') !!}
    {!! Form::text('petrol_position', null, ['class' => 'form-control']) !!}
</div>

<!-- Petrol Purchases Field -->
<div class="form-group col-sm-6">
    {!! Form::label('petrol_purchases', 'Petrol Purchases:') !!}
    {!! Form::text('petrol_purchases', null, ['class' => 'form-control']) !!}
</div>

<!-- Oil Purchases Field -->
<div class="form-group col-sm-6">
    {!! Form::label('oil_purchases', 'Oil Purchases:') !!}
    {!! Form::text('oil_purchases', null, ['class' => 'form-control']) !!}
</div>

<!-- Officers Remarks And Initials Field -->
<div class="form-group col-sm-6">
    {!! Form::label('officers_remarks_and_initials', 'Officers Remarks And Initials:') !!}
    {!! Form::text('officers_remarks_and_initials', null, ['class' => 'form-control']) !!}
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

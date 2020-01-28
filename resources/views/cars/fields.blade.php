<!-- Make Field -->
<div class="form-group col-sm-6">
    {!! Form::label('make', 'Make:') !!}
    {!! Form::text('make', null, ['class' => 'form-control']) !!}
</div>

<!-- Model Field -->
<div class="form-group col-sm-6">
    {!! Form::label('model', 'Model:') !!}
    {!! Form::text('model', null, ['class' => 'form-control']) !!}
</div>

<!-- Plate Number Field -->
<div class="form-group col-sm-6">
    {!! Form::label('plate_number', 'Car Registration Number:') !!}
    {!! Form::number('plate_number', null, ['class' => 'form-control']) !!}
</div>

<!-- Car Image Field -->
<div class="form-group col-sm-6">
    {!! Form::label('car_image', 'Car Image:') !!}
    {!! Form::text('car_image', null, ['class' => 'form-control']) !!}
</div>

<!-- Status Field -->
<div class="form-group col-sm-6">
    {!! Form::label('status', 'Usage Status:') !!}
    <label class="checkbox-inline">
        {!! Form::hidden('status', 0) !!}
        {!! Form::checkbox('status', '1', null) !!}
    </label>
</div>


<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('cars.index') }}" class="btn btn-default">Cancel</a>
</div>

<!-- Make Field -->
<div class="form-group">
    {!! Form::label('make', 'Make:') !!}
    <p>{{ $car->make }}</p>
</div>

<!-- Model Field -->
<div class="form-group">
    {!! Form::label('model', 'Model:') !!}
    <p>{{ $car->model }}</p>
</div>

<!-- Plate Number Field -->
<div class="form-group">
    {!! Form::label('plate_number', 'Plate Number:') !!}
    <p>{{ $car->plate_number }}</p>
</div>


<!-- Car Image Field -->
<div class="form-group">
    {!! Form::label('car_image', 'Car Image:') !!}
    <p>{{ $car->car_image }}</p>
</div>

<!-- Status Field -->
<div class="form-group">
    {!! Form::label('status', 'Status:') !!}
    <p>{{ $car->status }}</p>
</div>

 <!-- Created At Field -->
        <div class="form-group">
            {!! Form::label('created_at', 'Created At:') !!}
            <p>{{ $car->created_at->format('D d, M, Y H:i') }}</p>
        </div>


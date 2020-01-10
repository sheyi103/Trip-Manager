<!-- User Id Field -->
<div class="form-group">
    {!! Form::label('user_id', 'User Id:') !!}
    <p>{{ $car->user_id }}</p>
</div>

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

<!-- Car Path Field -->
<div class="form-group">
    {!! Form::label('car_path', 'Car Path:') !!}
    <p>{{ $car->car_path }}</p>
</div>

<!-- Status Field -->
<div class="form-group">
    {!! Form::label('status', 'Status:') !!}
    <p>{{ $car->status }}</p>
</div>


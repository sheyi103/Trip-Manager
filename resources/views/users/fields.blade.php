<!-- Name Field -->
<div class="form-group col-sm-6">
    {!! Form::label('name', 'Name:') !!}
    {!! Form::text('name', null, ['class' => 'form-control']) !!}
</div>

<!-- Role Id Field -->
{{-- <div class="form-group col-sm-6">
    {!! Form::label('role_id', 'Role Id:') !!}
    {!! Form::number('role_id', null, ['class' => 'form-control']) !!}
</div> --}}

<div class="form-group col-sm-6">
    <label for="sel1">User Levels:</label>
    <select class="form-control" id="sel1">
      {{-- <option value="{{role['id'] }}">{{ $user->role['name'] }}</option> --}}
  @foreach ($roles as $role )
   <option value="{{ $role['id'] }}">{{ $role['name'] }}</option>
  @endforeach
</select>
</div>

{{-- <!-- Car Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('car_id', 'Car Id:') !!}
    {!! Form::number('car_id', null, ['class' => 'form-control']) !!}
</div> --}}

<div class="form-group col-sm-6">
    <label for="sel1">Car Plate Number:</label>
    <select class="form-control" id="sel1">
      {{-- <option value="{{role['id'] }}">{{ $user->role['name'] }}</option> --}}
  @foreach ($cars as $car )
   <option value="{{ $car['id'] }}">{{ $car['plate_number'] }}</option>
  @endforeach
</select>
</div>

<!-- Email Field -->
<div class="form-group col-sm-6">
    {!! Form::label('email', 'Email:') !!}
    {!! Form::email('email', null, ['class' => 'form-control']) !!}
</div>

<!-- Email Verified At Field -->
<div class="form-group col-sm-6">
    {!! Form::label('email_verified_at', 'Email Verified At:') !!}
    {!! Form::date('email_verified_at', null, ['class' => 'form-control','id'=>'email_verified_at']) !!}
</div>

@section('scripts')
    <script type="text/javascript">
        $('#email_verified_at').datetimepicker({
            format: 'YYYY-MM-DD HH:mm:ss',
            useCurrent: false
        })
    </script>
@endsection

{{-- <!-- Profile Image Path Field -->
<div class="form-group col-sm-6">
    {!! Form::label('profile_image_path', 'Profile Image Path:') !!}
    {!! Form::text('profile_image_path', null, ['class' => 'form-control']) !!}
</div> --}}

<!-- Password Field -->
<div class="form-group col-sm-6">
    {!! Form::label('password', 'Password:') !!}
    {!! Form::password('password', ['class' => 'form-control']) !!}
</div>

<!-- Status Field -->
<div class="form-group col-sm-6">
    {!! Form::label('status', 'Status:') !!}
    <label class="checkbox-inline">
        {!! Form::hidden('status', 0) !!}
        {!! Form::checkbox('status', '1', null) !!}
    </label>
</div>


<!-- Remember Token Field -->
<div class="form-group col-sm-6">
    {!! Form::label('remember_token', 'Remember Token:') !!}
    {!! Form::text('remember_token', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('users.index') }}" class="btn btn-default">Cancel</a>
</div>

<!-- Name Field -->
<div class="form-group">
    {!! Form::label('name', 'Name:') !!}
    <p>{{ $user->name }}</p>
</div>



<!-- Car Id Field -->
<div class="form-group">
    {!! Form::label('car_id', 'Car Plate Number:') !!}
    <p>{{ $user->car['plate_number'] }}  </p>
</div>

<!-- Email Field -->
<div class="form-group">
    {!! Form::label('email', 'Email:') !!}
    <p>{{ $user->email }}</p>
</div>



<!-- Profile Image Path Field -->
<div class="form-group">
    {!! Form::label('profile_image_path', 'Profile Image Path:') !!}
    <p>{{ $user->profile_image_path }}</p>
</div>

<!-- Status Field -->
<div class="form-group">
    {!! Form::label('status', 'Status:') !!}

    <p>
    
    @if ( $user->status == 0)
       inactive 
    @else
active
    @endif
</p>
</div>


<!-- Created At Field -->
        <div class="form-group">
            {!! Form::label('created_at', 'Created At:') !!}
            <p>{{ $user->created_at->format('D d, M, Y H:i') }}</p>
        </div>



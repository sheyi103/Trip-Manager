<!-- Name Field -->
<div class="form-group">
    {!! Form::label('name', 'Name:') !!}
    <p>{{ $workshop->name }}</p>
</div>

<!-- Created At Field -->
        <div class="form-group">
            {!! Form::label('created_at', 'Created At:') !!}
            <p>{{ $workshop->created_at->format('D d, M, Y H:i') }}</p>
        </div>


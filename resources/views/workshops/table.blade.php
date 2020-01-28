<div class="table-responsive">
    <table class="table" id="workshops-table">
        <thead>
            <tr>
                <th>Garage Name</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($workshops as $workshop)
            <tr>
                <td>{{ $workshop->workshop_name }}</td>
                <td>
                    {!! Form::open(['route' => ['workshops.destroy', $workshop->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('workshops.show', [$workshop->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{{ route('workshops.edit', [$workshop->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>

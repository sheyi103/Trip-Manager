<div class="table-responsive">
    <table class="table" id="cars-table">
        <thead>
            <tr>
                <th>User Id</th>
        <th>Make</th>
        <th>Model</th>
        <th>Car Path</th>
        <th>Status</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($cars as $car)
            <tr>
                <td>{{ $car->user_id }}</td>
            <td>{{ $car->make }}</td>
            <td>{{ $car->model }}</td>
            <td>{{ $car->car_path }}</td>
            <td>{{ $car->status }}</td>
                <td>
                    {!! Form::open(['route' => ['cars.destroy', $car->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('cars.show', [$car->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{{ route('cars.edit', [$car->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>

<div class="table-responsive">
    <table class="table" id="driverLogs-table">
        <thead>
            <tr>
                <th>User Id</th>
        <th>Car Id</th>
        <th>Destination</th>
        <th>Origin</th>
        <th>Start Milleage</th>
        <th>End Milleage</th>
        <th>Distance Covered</th>
        <th>Petrol Level</th>
        <th>Petrol Purchase</th>
        <th>Oil Purchase</th>
        <th>Officers Remarks</th>
        <th>Status</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($driverLogs as $driverLog)
            <tr>
                <td>{{ $driverLog->user_id }}</td>
            <td>{{ $driverLog->car_id }}</td>
            <td>{{ $driverLog->destination }}</td>
            <td>{{ $driverLog->origin }}</td>
            <td>{{ $driverLog->start_milleage }}</td>
            <td>{{ $driverLog->end_milleage }}</td>
            <td>{{ $driverLog->distance_covered }}</td>
            <td>{{ $driverLog->petrol_level }}</td>
            <td>{{ $driverLog->petrol_purchase }}</td>
            <td>{{ $driverLog->oil_purchase }}</td>
            <td>{{ $driverLog->officers_remarks }}</td>
            <td>{{ $driverLog->status }}</td>
                <td>
                    {!! Form::open(['route' => ['driverLogs.destroy', $driverLog->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('driverLogs.show', [$driverLog->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{{ route('driverLogs.edit', [$driverLog->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>

<div class="table-responsive">
    <table class="table" id="driverLogs-table">
        <thead>
            <tr>
                <th>User Id</th>
        <th>Journey To</th>
        <th>Journey From</th>
        <th>Initial Kilometer</th>
        <th>Final Kilometer</th>
        <th>Total Kilometer Covered</th>
        <th>Petrol Position</th>
        <th>Petrol Purchases</th>
        <th>Oil Purchases</th>
        <th>Officers Remarks And Initials</th>
        <th>Status</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($driverLogs as $driverLog)
            <tr>
                <td>{{ $driverLog->user_id }}</td>
            <td>{{ $driverLog->journey_to }}</td>
            <td>{{ $driverLog->journey_from }}</td>
            <td>{{ $driverLog->initial_kilometer }}</td>
            <td>{{ $driverLog->final_kilometer }}</td>
            <td>{{ $driverLog->total_kilometer_covered }}</td>
            <td>{{ $driverLog->petrol_position }}</td>
            <td>{{ $driverLog->petrol_purchases }}</td>
            <td>{{ $driverLog->oil_purchases }}</td>
            <td>{{ $driverLog->officers_remarks_and_initials }}</td>
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

<div class="table-responsive">
    <table class="table" id="users-table">
        <thead>
            <tr>
                <th>Name</th>
        <th>Assigned Car</th>
        <th>Car Registration Number</th>
        <th>Email Address</th>
        <th>Driver Status</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($users as $user)
            <tr>
                <td>
                 <a href="{{ route('users.show', [$user->id]) }}">
                 {{ $user->name }}
                 </a></td>
            <td>{{ $user->car['make'] }}</td>
            <td>{{ $user->car['plate_number'] }}</td>
            <td>{{ $user->email }}</td>
            <td>
            @if ( $user->status == 0)
            <b style="color:green"> Off Trip</b>
                
            @else
               <b style="color:red"> On Trip</b>
            @endif</td>
                <td>
                    {!! Form::open(['route' => ['users.destroy', $user->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('users.edit', [$user->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>

<div class="table-responsive">
    <table class="table" id="cars-table">
        <thead>
            <tr>
                <th>Make</th>
        <th>Model</th>
        <th>Car Registration Number </th>
       <th>Trip Status</th>
        <th>Usage Status</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($cars as $car)
            <tr>
                <td>
                 <a href="{{ route('cars.show', [$car->id]) }}">
                  {{ $car->make }}
                 </a>
               </td>
            <td>{{ $car->model }}</td>
            <td>{{ $car->plate_number }}</td>
            <td>
                @if ( $car->user['status'] == 0)
               <b style="color:green">Off Trip</b> 
                    
                @else
                   <b style="color:red"> On Trip</b>
                @endif</td>
    
            <td>
            
            @if ( $car->status == 0)
            Decommissioned
                
            @else
                In-Use
            @endif
            
        </td>
                <td>
                    {!! Form::open(['route' => ['cars.destroy', $car->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
    
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

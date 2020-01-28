<div class="table-responsive">
    <table class="table" id="trips-table">
        <thead>
            <tr>
                           <th>Driver Name</th>
      
        <th>Passenger Name</th>
        <th>Trip Status</th>
       
        <th>Remarks</th>
        <th>Trip Date</th>
               
            </tr>
        </thead>
        <tbody>
        @foreach($trips as $trip)
            <tr>
            
                <td> <a href="{{ route('trips.show', [$trip->id]) }}" >
                {{ $trip->user['name'] }}</a></td>
           
            <td>{{ $trip->passenger_name }}</td>
            <td>
                @if ( $trip->trip_status == 0 )
               <b style="color:green">Completed</b> 
                    
                @else
                   <b style="color:red">On-going</b> 
                @endif</td>
           
            <td>{{ $trip->remarks }}</td>

            <td> 
                {{ $trip->created_at->format('D d, M, Y H:i') }}
            </td>
               
            </tr>
        @endforeach
        </tbody>
    </table>
</div>

<div class="table-responsive">
    <table class="table" id="fuelPurchases-table">
        <thead>
            <tr>
                <th>Car Registration Number</th>
        <th>Driver Name</th>
        <th>Cost</th>
        <th>Fuel Purchase Date </th>
        
            </tr>
        </thead>
        <tbody>
        @foreach($fuelPurchases as $fuelPurchase)
            <tr>
                <td>
                  <a href="{{ route('fuelPurchases.show', [$fuelPurchase->id]) }}" >
                  {{ $fuelPurchase->plate_number }}</a></td>
           <td>{{$fuelPurchase->name}}</td>
            <td>&#8358;{{number_format ( $fuelPurchase->cost) }}</td>
            <td> 
                    <p>{{ $fuelPurchase->created_at }}</p>
                </td>
           
              
            </tr>
        @endforeach
        </tbody>
    </table>
</div>

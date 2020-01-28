<div class="table-responsive">
    <table class="table" id="maintainances-table">
        <thead>
            <tr>
                <th>Car Registration Number</th>
                <th>Drivers Name</th>
        <th>Workshop</th>
        <th>Maintainance Date</th>
       
      
               
            </tr>
        </thead>
        <tbody>
        @foreach($maintainances as $maintainance)
            <tr>
                <td>
                <a href="{{ route('maintainances.show', [$maintainance->id]) }}">
                {{ $maintainance->plate_number }}
                </a>
                </td>
            <td>{{ $maintainance->name }}</td>
            <td>{{ $maintainance->workshop_name }}</td>
            <td> 
                <p>{{ $maintainance->created_at }}</p>
            </td>
               
            </tr>
        @endforeach
        </tbody>
    </table>
</div>

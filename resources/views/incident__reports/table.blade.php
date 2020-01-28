<div class="table-responsive">
    <table class="table" id="incidentReports-table">
        <thead>
            <tr>
                <th>Car Registration Number</th>
                <th>Driver Name</th>
        <th>Incident Report</th>
        <th>Incident Report Date</th>
       
            </tr>
        </thead>
        <tbody>
        @foreach($incidentReports as $incidentReport)
            <tr>
                <td>
                 <a href="{{ route('incidentReports.show', [$incidentReport->id]) }}">{{ $incidentReport->plate_number }}</a></td>
                 <td>{{ $incidentReport->name }}</td>
            <td>{{ $incidentReport->remarks }}</td>
           
            <td> 
                <p>{{ $incidentReport->created_at}}</p>
            </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>

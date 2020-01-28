<li class="{{ Request::is('cars*') ? 'active' : '' }}">
    <a href="{{ route('cars.index') }}"><i class="fa fa-edit"></i><span>Cars</span></a>
</li>


<li class="{{ Request::is('roles*') ? 'active' : '' }}">
    <a href="{{ route('roles.index') }}"><i class="fa fa-edit"></i><span>Roles</span></a>
</li>

<li class="{{ Request::is('users*') ? 'active' : '' }}">
    <a href="{{ route('users.index') }}"><i class="fa fa-edit"></i><span>Users</span></a>
</li>

{{-- <li class="{{ Request::is('driverLogs*') ? 'active' : '' }}">
    <a href="{{ route('driverLogs.index') }}"><i class="fa fa-edit"></i><span>Driver  Logs</span></a>
</li> --}}

<li class="{{ Request::is('trips*') ? 'active' : '' }}">
    <a href="{{ route('trips.index') }}"><i class="fa fa-edit"></i><span>Trips</span></a>
</li>

<li class="{{ Request::is('maintainances*') ? 'active' : '' }}">
    <a href="{{ route('maintainances.index') }}"><i class="fa fa-edit"></i><span>Maintainances</span></a>
</li>

<li class="{{ Request::is('fuelPurchases*') ? 'active' : '' }}">
    <a href="{{ route('fuelPurchases.index') }}"><i class="fa fa-edit"></i><span>Fuel  Purchases</span></a>
</li>

<li class="{{ Request::is('incidentReports*') ? 'active' : '' }}">
    <a href="{{ route('incidentReports.index') }}"><i class="fa fa-edit"></i><span>Incident  Reports</span></a>
</li>
{{-- 
<li class="{{ Request::is('users*') ? 'active' : '' }}">
    <a href="{{ route('users.api') }}"><i class="fa fa-edit"></i><span>API</span></a>
</li> --}}
<li class="{{ Request::is('workshops*') ? 'active' : '' }}">
    <a href="{{ route('workshops.index') }}"><i class="fa fa-edit"></i><span>Workshops</span></a>
</li>


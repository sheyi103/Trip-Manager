<li class="{{ Request::is('cars*') ? 'active' : '' }}">
    <a href="{{ route('cars.index') }}"><i class="fa fa-edit"></i><span>Cars</span></a>
</li>

<li class="{{ Request::is('driverLogs*') ? 'active' : '' }}">
    <a href="{{ route('driverLogs.index') }}"><i class="fa fa-edit"></i><span>Driver- Logs</span></a>
</li>

<li class="{{ Request::is('roles*') ? 'active' : '' }}">
    <a href="{{ route('roles.index') }}"><i class="fa fa-edit"></i><span>Roles</span></a>
</li>

<li class="{{ Request::is('users*') ? 'active' : '' }}">
    <a href="{{ route('users.index') }}"><i class="fa fa-edit"></i><span>Users</span></a>
</li>


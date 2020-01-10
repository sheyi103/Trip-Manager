@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Driver- Log
        </h1>
    </section>
    <div class="content">
        <div class="box box-primary">
            <div class="box-body">
                <div class="row" style="padding-left: 20px">
                    @include('driver-_logs.show_fields')
                    <a href="{{ route('driverLogs.index') }}" class="btn btn-default">Back</a>
                </div>
            </div>
        </div>
    </div>
@endsection

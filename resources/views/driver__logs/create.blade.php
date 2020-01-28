@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Driver  Log
        </h1>
    </section>
    <div class="content">
        @include('adminlte-templates::common.errors')
        <div class="box box-primary">
            <div class="box-body">
                <div class="row">
                    {!! Form::open(['route' => 'driverLogs.store']) !!}

                        @include('driver__logs.fields')

                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@endsection

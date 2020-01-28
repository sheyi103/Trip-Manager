@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            User : {{ $user->role['name'] }}
        </h1>
    </section>
    <div class="content">
        <div class="box box-primary">
            <div class="box-body">
                <div class="row" style="padding-left: 20px">
                    @include('users.show_fields')
                   
                </div>
            </div>
        </div>
    </div>
@endsection

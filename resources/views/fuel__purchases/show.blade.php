@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Fuel  Purchase
        </h1>
    </section>
    <div class="content">
        <div class="box box-primary">
            <div class="box-body">
                <div class="row" style="padding-left: 20px">
                    @include('fuel__purchases.show_fields')
                   
                </div>
            </div>
        </div>
    </div>
@endsection

@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Fuel  Purchase
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($fuelPurchase, ['route' => ['fuelPurchases.update', $fuelPurchase->id], 'method' => 'patch']) !!}

                        @include('fuel__purchases.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection
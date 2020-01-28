@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Maintainance
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($maintainance, ['route' => ['maintainances.update', $maintainance->id], 'method' => 'patch']) !!}

                        @include('maintainances.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection
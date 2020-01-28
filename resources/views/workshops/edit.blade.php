@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Workshop
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($workshop, ['route' => ['workshops.update', $workshop->id], 'method' => 'patch']) !!}

                        @include('workshops.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection
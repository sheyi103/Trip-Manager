@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Incident  Report
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($incidentReport, ['route' => ['incidentReports.update', $incidentReport->id], 'method' => 'patch']) !!}

                        @include('incident__reports.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection
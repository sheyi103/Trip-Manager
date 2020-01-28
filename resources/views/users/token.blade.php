


@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            API Client
        </h1>
    </section>
    <div class="content">
        <div class="box box-primary">
            <div class="box-body">
                <div class="row col-md-10" style="padding-left: 20px">
                    <div id="app">
  <passport-clients></passport-clients>
<passport-authorized-clients></passport-authorized-clients>
<passport-personal-access-tokens></passport-personal-access-tokens>
</div>
                </div>
            </div>
        </div>
    </div>
@endsection

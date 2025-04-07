@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            court
        </h1>
    </section>
    <div class="content">
       @include('basic-template::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($court, ['route' => ['courts.update', $court->id], 'method' => 'patch']) !!}

                        @include('courts.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
    </div>
@endsection
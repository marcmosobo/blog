@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Post Meta
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($postMeta, ['route' => ['postMetas.update', $postMeta->id], 'method' => 'patch']) !!}

                        @include('post_metas.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection
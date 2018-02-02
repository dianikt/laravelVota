@extends('layouts.app')

@section('content')
<div class="row" style="margin-top:40px">
   <div class="offset-md-3 col-md-6">
      <div class="card">
         <div class="card-header text-center">
            Añadir consulta
         </div>
         <form method="post" action="{{url('consultas')}}">
          {{ csrf_field() }}
         <div class="card-body" style="padding:30px">
            <div class="form-group">
               <label for="title">Nueva Consulta</label>
               <input type="text" name="consulta" id="title" class="form-control">
            </div>
           

            <div class="form-group text-center">
               <button type="submit" class="btn btn-primary" style="padding:8px 100px;margin-top:25px;">
                   Añadir Consulta
               </button>
            </div>        

         </div>
      </div>
   </div>
</div>


@stop
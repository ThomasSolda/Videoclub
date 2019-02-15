@extends('layouts.master')

@section('content')
  <div class="row">

    <div class="col-sm-4">
      <img src="{{$arrayPeliculasId->poster}}" style="height:100%"/>
    </div>
    <div class="col-sm-8">
       <h2> <b>{{$arrayPeliculasId->title}}</b> </h2>
       <h2> <b>Año:</b> {{$arrayPeliculasId->year}}</h2>
       <h3> <b>Director:</b> {{$arrayPeliculasId->director}}</h3>
       <br>
       <h6> <b>Resumen:</b> {{$arrayPeliculasId->synopsis}}<h6>
       <br>
       @if($arrayPeliculasId->rented == false)
        <h6><b>Estado:</b> Película disponible </h6>
        <button type="button" class="btn btn-primary">Alquilar Película</button>
       @else
       <h6><b>Estado:</b> Película actualmente alquilada </h6>
       <button type="button" class="btn btn-danger">Devolver Película</button>
       @endif
       <a href="{{ url('/catalog/edit/' . $arrayPeliculasId->id ) }}">
         <button type="button" class="btn btn-warning">Editar Película</button>
       </a>
       <button type="button" class="btn btn-default"> < Volver al listado</button>

    </div>
  </div>
@stop

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
        <form action="{{action('CatalogController@putRent', $arrayPeliculasId->id)}}"
            method="POST" style="display:inline">
            {{ method_field('PUT') }}
            {{ csrf_field() }}
            <button type="submit" class="btn btn-primary" style="display:inline">
                Alquilar Película
            </button>
        </form>
       @else
       <h6><b>Estado:</b> Película actualmente alquilada </h6>
         <form action="{{action('CatalogController@putReturn', $arrayPeliculasId->id)}}"
             method="POST" style="display:inline">
             {{ method_field('PUT') }}
             {{ csrf_field() }}
             <button type="submit" class="btn btn-danger" style="display:inline">
                 Devolver película
             </button>
         </form>
       @endif
       <a href="{{ url('/catalog/edit/' . $arrayPeliculasId->id ) }}">
         <button type="button" class="btn btn-warning">Editar Película</button>
       </a>
       <form action="{{action('CatalogController@deleteMovie', $arrayPeliculasId->id)}}"
           method="POST" style="display:inline">
           {{ method_field('delete') }}
           {{ csrf_field() }}
           <button type="submit" class="btn btn-danger" style="display:inline">
               Eliminar Película
           </button>
       </form>
    </div>
  </div>
@stop

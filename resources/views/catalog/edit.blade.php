@extends('layouts.master')

@section('content')
<div class="row" style="margin-top:40px">
 <div class="offset-md-3 col-md-6">
    <div class="card">
       <div class="card-header text-center">
          Modificar película
       </div>
       <div class="card-body" style="padding:30px">

        <form action="" method="post" enctype="multipart/form-data">
         {{method_field('put')}}
          @csrf
          <div class="form-group">
             <label for="title">Título</label>
             <input type="text" name="title" id="title" class="form-control" value="{{old('title')}}">
          </div>

          <div class="form-group">
            <label for="year">Año</label>
            <input type="number" name="year" id="year" class="form-control" value="{{old('year')}}">
          </div>

          <div class="form-group">
            <label for="director">Director</label>
            <input type="text" name="director" id="director" class="form-control" value="{{old( 'director')}}">
          </div>

          <div class="form-group">
             <label for="poster">Añadir portada</label>
             <input type="file" name="poster" id="poster" class="form-control" value="{{old('poster')}}">
          </div>

          <div class="form-group">
             <label for="synopsis">Resumen</label>
             <textarea name="synopsis" id="synopsis" class="form-control" rows="3" value ="{{old('synopsis')}}"></textarea>
          </div>

          <div class="form-group text-center">
             <button type="submit" class="btn btn-primary" style="padding:8px 100px;margin-top:25px;">
                 Modificar película
             </button>
          </div>
        </form>
       </div>
    </div>
 </div>
</div>

@stop

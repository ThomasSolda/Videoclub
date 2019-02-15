<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Movie;
class CatalogController extends Controller
{
  public function getIndex(){
    $arrayPeliculas = Movie::All();
    return view('catalog.index', compact('arrayPeliculas'));
  }
  public function getShow($id){
    $arrayPeliculasId = Movie::findOrFail($id);
    return view('catalog.show', compact('arrayPeliculasId'));
  }
  public function getCreate(){
    return view('catalog.create');
  }
  public function getEdit($id){
    $peliculaEditada = Movie::findOrFail($id);
    return view('catalog.edit', compact('peliculaEditada'));
  }
}

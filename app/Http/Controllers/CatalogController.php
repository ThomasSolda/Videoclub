<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Movie;
use Notification;
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
  public function postCreate(Request $request){
    $peliculas = new Movie;
    $peliculas->fill($request->all());
    $peliculas->save();
    Notification::success('La película se ha creado correctamente');
    return redirect('/');
  }
  public function putEdit(Request $request, $id){
    $movie = Movie::findOrFail($id);
    $movie->fill($request->all());
    $movie->save();
    Notification::success('La película se ha modificado correctamente');
    return redirect('/');
  }
  public function putRent(Request $request, $id){
    $movie = Movie::findOrFail($id);
    if(!$movie->rented){
      $movie->rented = '1';
    };
    $movie->save();
    Notification::success('La película fue rentada con éxito');
    return redirect('/');
  }
  public function putReturn(Request $request, $id){
    $movie = Movie::findOrFail($id);
    if($movie->rented){
      $movie->rented = '0';
    };
    $movie->save();
    Notification::success('La película fue devuelta con éxito');
    return redirect('/');
  }
  public function deleteMovie(Request $request, $id){
    $movie = Movie::findOrFail($id);
    $movie->delete();
    return redirect('/');
  }

}

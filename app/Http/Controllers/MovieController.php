<?php

namespace App\Http\Controllers;

//use Illuminate\Http\Request;

use Request;

use App\Movie;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class MovieController extends Controller
{
    /**
    * Display a listing of the resource.
    *
    * @return Response
    */
    public function index()
    {
      //
      $movies = Movie::all();
      return view('movies.index', compact('movies'));
    }

    /**
    * Show the form for creating a new resource.
    *
    * @return Response
    */
    public function create()
    {
      //
      return view('movies.create');
    }

    /**
    * Store a newly created resource in storage.
    *
    * @return Response
    */
    public function store()
    {
      //
      $movie = Request::all();
      Movie::create($movie);
      return redirect('movies');
    }

    /**
    * Display the specified resource.
    *
    * @param int $id
    * @return Response
    */
    public function show($id)
    {
      //
      $movie = Movie::find($id);
      return view('movies.detail', compact('movie'));
    }

    /**
    * Show the form for editing the specified resource.
    *
    * @param int $id
    * @return Response
    */
    public function edit($id)
    {
      $movie = Movie::find($id);
      return view('movies.edit', compact('movie'));
    }

    /**
    * Update the specified resource in storage.
    *
    * @param int $id
    * @return Response
    */
    public function update($id)
    {
      //
      $movieUpdate = Request::all();
      $movie = Movie::find($id);
      $movie->update($movieUpdate);
      return redirect('movies');
    }

    /**
    * Remove the specified resource from storage.
    *
    * @param int $id
    * @return Response
    */
    public function destroy($id)
    {
      //
      Movie::find($id)->delete();
      return redirect('movies');
    }
}

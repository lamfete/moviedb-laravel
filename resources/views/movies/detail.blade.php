@extends('layout/template')

@section('content')

<div class="container">
  <div class="row">
    <div class="col-xs-3">
      <img src="{{ asset('img/' . $movie->image . '.jpg') }}" height="300" width="200" class="img-rounded img-responsive">
    </div>
    <div class="col-xs-5">
      <strong>{{ $movie->title }}</strong>
      <small>({{ date('Y', strtotime($movie->release)) }})</small><br />
      {{ $movie->duration }} min | {{$movie->genre}} | {{ date('d-m-Y', strtotime($movie->release)) }}
      <hr>
      Rating:<br /><h2>{{ $movie->rating }}</h2>
      Cast: {{ $movie->cast }}
    </div>
  </div>
  <div class="row">
    <div class="col-xs-8">
      <iframe width="480" height="270"
        src="http://www.youtube.com/embed/{{ $movie->video }}">
      </iframe>
    </div>
  </div>
  <div class="row">
    <div class="col-sm-offset-2 col-sm-10">
      <a href="{{ url('movies')}}" class="btn btn-primary">Back</a>
    </div>
  </div>
</div>

@stop

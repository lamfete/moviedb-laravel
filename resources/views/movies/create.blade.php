@extends('layout.template')

@section('content')

  <h1>Create Movie</h1>
  {!! Form::open(['url' => 'movies']) !!}

  <div class="form-group">
    {!! Form::label('title', 'Title: ') !!}
    {!! Form::text('title', null, ['class' => 'form-control']) !!}
  </div>

  <div class="form-group">
    {!! Form::label('release', 'Release: ') !!}
    {!! Form::input('date', 'release', date('Y-m-d'), ['class' => 'form-control']) !!}
  </div>

  <div class="form-group">
    {!! Form::label('rating', 'Rating: ') !!}
    {!! Form::text('rating', null, ['class' => 'form-control']) !!}
  </div>

  <div class="form-group">
    {!! Form::label('duration', 'Duration: ') !!}
    {!! Form::input('number', 'duration', null, ['class' => 'form-control']) !!}
  </div>

  <div class="form-group">
    {!! Form::label('genre', 'Genre: ') !!}
    {!! Form::text('genre', null, ['class' => 'form-control']) !!}
  </div>

  <div class="form-group">
    {!! Form::label('cast', 'Cast: ') !!}
    {!! Form::text('cast', null, ['class' => 'form-control']) !!}
  </div>

  <div class="form-group">
    {!! Form::label('image', 'Image: ') !!}
    {!! Form::text('image', null, ['class' => 'form-control']) !!}
  </div>

  <div class="form-group">
    {!! Form::label('video', 'Video: ') !!}
    {!! Form::text('video', null, ['class' => 'form-control']) !!}
  </div>

  <div class="form-group">
    {!! Form::submit('Save', ['class' => 'btn btn-primary form-control']) !!}
  </div>

  {!! Form::close() !!}

@stop

@extends('layout/template')

@section('content')

<h1>Jepara68 Movie DB</h1>
<a href="{{ url('/movies/create') }}" class="btn btn-success">Create Movie</a>
<hr>

<table class="table table-striped table-bordered table-hover">
  <thead>
    <tr class="bg-info">
      <th>ID</th>
      <th>Title</th>
      <th>Rating</th>
      <th>Cast</th>
      <th>Release</th>
      <th>Genre</th>
      <th>Thumbnails</th>
      <th colspan="3">Actions</th>
    </tr>
  </thead>
  <tbody>
    @foreach($movies as $movie)
      <tr>
        <td>{{ $movie->id }}</td>
        <td>{{ $movie->title }}</td>
        <td>{{ $movie->rating }}</td>
        <td>{{ $movie->cast }}</td>
        <td>{{ $movie->release }}</td>
        <td>{{ $movie->genre }}</td>
        <td><img src="{{ asset('img/' . $movie->image . '.jpg') }}" height="35" width="30"></td>
        <td><a href="{{url('movies', $movie->id)}}" class="btn btn-primary">Detail</a></td>
        <td><a href="{{route('movies.edit', $movie->id)}}" class="btn btn-warning">Update</a></td>
        <td>
          {!! Form::open(['method' => 'DELETE', 'route' => ['movies.destroy', $movie->id]]) !!}
          {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
          {!! Form::close() !!}
        </td>
      </tr>
    @endforeach
  </tbody>
</table>
@endsection

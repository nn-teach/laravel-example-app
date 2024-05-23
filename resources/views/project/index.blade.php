@extends('layout')

@section('title')
  <h1>Mes Projets</h1>
@endsection

@section('content')
  <ul>
    @foreach ($projects as $project)
    <li>{{ $project->title }}</li>
    @endforeach
 </ul>

@endsection

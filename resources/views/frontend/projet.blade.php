@extends('layouts.frontTemplate')

@section('content')

@foreach($projects as $project)
<div class="jumbotron jumbotron-fluid Welcome">
    <div class="container">
      <h1 class="display-4">{{ $project->projectTitle }}</h1>
      <p class="lead">Le {{  date('d/m/Y, à H:i', strtotime($project->created_at))  }}</p>
    </div>
  </div>

    <div class="card">
         {!! $project->projectContent  !!}
    </div>
              @endforeach

@endsection

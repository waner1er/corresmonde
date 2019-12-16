@extends('layouts.frontTemplate')

@section('content')

@foreach($projects as $project)
                        <h2>{{ $project->projectTitle }}</h2> <br>
                        Le{{  date('d/m/Y, à H', strtotime($project->created_at))  }} h {{date('i', strtotime($project->created_at))}} </td>

                     >
                        {!! $project->projectContent  !!}

              @endforeach
@endsection

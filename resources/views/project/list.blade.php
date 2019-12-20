@extends('layouts.app')

@section('content')
  <br>
   <div class="row">
        <div class="col-12">


              @foreach($projects as $project)
                <div class="card">
                    <div class="card-header">
                        <h2>{{ $project->projectTitle }}</h2> <br>
                        Le{{  date('d/m/Y, à H', strtotime($project->created_at))  }} h {{date('i', strtotime($project->created_at))}} </td>

                    </div>
                    <div >
                        {!! $project->projectContent  !!}
                    </div>
                </div>
                 <td></td>

              @endforeach

                 <div style="margin:15px;"><a href="{{ route('projects.edit',$project->id)}}" class="btn btn-success">Modifier</a></div>

          {!! $projects->links() !!}
       </div>
   </div>
 @endsection

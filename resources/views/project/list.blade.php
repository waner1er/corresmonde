@extends('layouts.app')

@section('content')
{{-- <style>

.textEdit img,.textEdit p img {
        height: 100%;
    width: 100%;
      }</style> --}}
  <br>
   <div class="row">
        <div class="col-12">


              @foreach($projects as $project)
                <div class="card">
                    <div class="card-header text-success mb-2 ">
                        <h2>{{ $project->projectTitle }}</h2> <br>
                        Le{{  date('d/m/Y, à H', strtotime($project->created_at))  }} h {{date('i', strtotime($project->created_at))}}

                    </div>
                    <div class="p-2 text-justify textEdit" >
                        {!! $project->projectContent  !!}
                    </div>
                </div>


              @endforeach
              <div style="margin:15px;"><a href="{{ route('projects.edit',$project->id)}}" class="btn btn-success">Modifier</a></div>


          {!! $projects->links() !!}
       </div>
   </div>
 @endsection

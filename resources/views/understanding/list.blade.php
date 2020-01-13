@extends('layouts.app')

@section('content')
  <br>
   <div class="row">
        <div class="col-12">
            <a href="{{ route('understandings.create') }}" class="btn btn-success mb-2">Ajouter</a>


              @foreach($understandings as $understanding)
                <div class="card">
                    <div class="card-header">
                        <h2>{{ $understanding->understandingTitle }}</h2> <br>
                        Le{{  date('d/m/Y, à H', strtotime($understanding->created_at))  }} h {{date('i', strtotime($understanding->created_at))}} </td>

                    </div>
                    <div >
                        {!! $understanding->understandingContent  !!}
                    </div>
                </div>
                 <td></td>
                 {{-- <div style="margin:15px;"><a href="{{ route('projects.edit',$project->id)}}" class="btn btn-success">Modifier</a></div> --}}

              @endforeach
              <div style="margin:15px;"><a href="{{ route('understandings.edit',$understanding->id)}}" class="btn btn-success">Modifier</a></div>


          {!! $understandings->links() !!}
       </div>
   </div>
 @endsection

@extends('layouts.app')

@section('content')
<style>

</style>
  <br>
   <div class="row">
        <div class="col-12">

            <a href="{{ route('rencontres.create') }}" class="btn btn-success my-2">Ajouter</a>
              @foreach($rencontres as $rencontre)
                <div class="card">
                    <div class="card-header text-success mb-2 ">
                        <h2>{{ $rencontre->rencontreTitle }}</h2> <br>
                        Le{{  date('d/m/Y, à H', strtotime($rencontre->created_at))  }} h {{date('i', strtotime($rencontre->created_at))}}

                    </div>
                    <div class="p-2 text-justify textEdit" >
                        {!! $rencontre->rencontreContent  !!}
                    </div>
                </div>

                <div style="margin:15px;"><a href="{{ route('rencontres.edit',$rencontre->rencontreTitle)}}" class="btn btn-success">Modifier</a></div>

              @endforeach


          {!! $rencontres->links() !!}
       </div>
   </div>
 @endsection

@extends('layouts.app')

@section('content')
<style>

</style>
<h2 class="text-success text-center my-4">Portfolio</h2>

<div class="row">
        <div class="col-12">

            <a href="{{ route('rencontres.create') }}" class="btn btn-success my-2">Ajouter</a>

              @foreach($rencontres as $rencontre)

                    <div class="card-header text-success mb-2 ">
                        <h2>{{ $rencontre->rencontreTitle }}</h2> <br>
                        Le{{  date('d/m/Y, à H', strtotime($rencontre->created_at))  }} h {{date('i', strtotime($rencontre->created_at))}}

                    </div>


                <div class="text-center"><a href="{{ route('rencontres.edit',$rencontre->rencontreTitle)}}" class="btn btn-primary my-5">Modifier</a></div>

              @endforeach


          {!! $rencontres->links() !!}
       </div>
   </div>
 @endsection

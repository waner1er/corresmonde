@extends('layouts.back')

@section('content')
<style>
.understandingContent{height:600px; overflow:scroll;}
</style>
<h2 class="my-5 text-success text-center">Comprendre les migrations</h2>

   <div class="row">
        <div class="col-lg-12 mb-5">
            <a href="{{ route('understandings.create') }}" class="btn btn-success my-2">+</a>


              @foreach($understandings as $understanding)
                <div class="card">
                    <div class="card-header">
                        <div><h2>{{ $understanding->understandingTitle }} </h2>
                            <p>Le{{  date('d/m/Y', strtotime($understanding->created_at))  }}</p></span></div>
                        </div>
                    <div class="understandingContent">
                        {!! $understanding->understandingContent  !!}
                    </div>
                </div>
                 <div class="text-center">
                     <a href="{{ route('understandings.edit',$understanding->id)}}" class="btn my-3 btn-primary">Modifier</a>
                </div>
                <div class="text-center">
                <button class="btn btn-danger editButton" data-toggle="modal" data-target="#myModal" >Supprimer</button>
                </div>
                            <div id="myModal" class="modal fade">
                                <div class="modal-dialog">
                                    <div class="modal-content">

                                      <div class="modal-body">
                                        <p>Voulez vous vraiment supprimer cet article ?</p>
                                      </div>
                                    <div class="modal-footer text-center">
                                        <form action="{{ route('understandings.destroy', $understanding->id)}}" method="post">
                                            {{ csrf_field() }}
                                            @method('DELETE')
                                            <input type="submit" class="btn btn-danger"  value="supprimer">
                                        </form>

                                        <button type="button" class="btn btn-warning" data-dismiss="modal" aria-hidden="true">Non</button>
                                    </div>

                                    </div>
                                </div>

                        </div>


              @endforeach


          {!! $understandings->links() !!}
       </div>
   </div>
 @endsection

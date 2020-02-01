@extends('layouts.back')

@section('content')
<style>
    .editButton{margin:1rem;}
    .row{justify-content: center;}
    .cellContent{overflow:hidden;height:100px;}
    </style>

<h2 class="text-center text-success mt-5 b-3">Périples </h2>
   <div class="row">
        <div class="col-lg-12">
            <a href="{{ route('periples.create') }}" class="btn btn-success my-2">+</a>

          <table class="table table-bordered table-striped" id="laravel_crud">
           <thead>
              <tr>
                 <th>Titres</th>
                 <th>Description</th>
                 <td colspan="2">Action</td>
              </tr>
           </thead>
           <tbody>
              @foreach($periples as $periple)
              <tr>
                 <td ><a href="{{ route('periples.edit',$periple->id)}}"><p class="text-center">   {{ $periple->peripleTitle }}</p></p></a></td>
                 <td><div class="cellContent">{!!$periple->peripleContent !!}</div></td>
                 <td>
                        <div class="row">
                            <a href="{{ route('periples.edit',$periple->id)}}" class="btn btn-primary editButton">Modifier</a>
                        @guest

                        @else

                            <button class="btn btn-danger editButton" data-toggle="modal" data-target="#myModal" >Supprimer</button>
                            <div id="myModal" class="modal fade">
                                <div class="modal-dialog">
                                    <div class="modal-content">

                                      <div class="modal-body">
                                        <p>Voulez vous vraiment supprimer cet article ?</p>
                                      </div>
                                    <div class="modal-footer">
                                        <form action="{{ route('periples.destroy', $periple->id)}}" method="post">
                                            {{ csrf_field() }}
                                            @method('DELETE')
                                            <input type="submit" class="btn btn-danger"  value="supprimer">
                                        </form>

                                        <button type="button" class="btn btn-warning" data-dismiss="modal" aria-hidden="true">Non</button>
                                    </div>

                                    </div>
                                </div>

                        </div>
                        @endguest

                </td>
              </tr>
              @endforeach
           </tbody>
          </table>
          {!! $periples->links() !!}
       </div>

   </div>



 @endsection

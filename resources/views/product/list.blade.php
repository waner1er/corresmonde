@extends('layouts.app')

@section('content')

<style>
.editButton{margin:1rem;}
.row{justify-content: center;}
</style>

   <div class="row">
        <div class="col-lg-12">
            <a href="{{ route('products.create') }}" class="btn btn-success my-2">Ajouter</a>

          <table class="table table-bordered" id="laravel_crud">
           <thead>
              <tr>
                 <th>Titres</th>
                 <th>Description</th>
                 <td colspan="2">Action</td>
              </tr>
           </thead>
           <tbody>
              @foreach($products as $product)
              <tr>
                 <td ><a href="{{ route('products.edit',$product->id)}}"><p class="text-center">   {{ $product->title }}</p></p></a></td>
                 <td><div class="cellContent">{!!  $product->description !!}</div></td>
                 <td>
                        <div class="row">
                            <a href="{{ route('products.edit',$product->id)}}" class="btn btn-primary editButton">Modifier</a>
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
                                        <form action="{{ route('products.destroy', $product->id)}}" method="post">
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
          {!! $products->links() !!}
       </div>

   </div>



 @endsection

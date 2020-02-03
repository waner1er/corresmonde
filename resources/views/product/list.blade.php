@extends('layouts.back')

@section('content')
<style>
    .editButton{margin:1rem;}
    </style>

<h2 class="text-center text-success mt-5 b-3">Parcours </h2>
   <div class="row">
        <div class="col-lg-12">
            <a href="{{ route('products.create') }}" class="btn btn-success my-2">+</a>

          <table class="col-lg-12 table table-bordered table-striped" id="laravel_crud">
           <thead>
              <tr>
                  <th>N°</th>
                 <th>Titres</th>
                 <th colspan="2">Action</th>
              </tr>
           </thead>
           <tbody>
              @foreach($products as $product)
              <tr>
                  <td>{{ $product->numArticle }}</td>
                 <td >
                    @guest
                    <h3 class="text-center">   {{ $product->title }}</h3>
                    <td><div class="cellContent">{!!  $product->description !!}</div></td>


                    @else
                    <a href="{{ route('products.edit',$product->id)}}">
                        <h3 class="text-center">   {{ $product->title }}</h3>
                    </a>
                </td>
                 {{-- <td><div class="cellContent">{!!  $product->description !!}</div></td> --}}
                 <td>


                        <div class="row d-flex justify-content-around ">
                            <a href="{{ route('products.edit',$product->id)}}" class="btn btn-primary editButton">Modifier</a>


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

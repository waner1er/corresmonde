@extends('layouts.app')

@section('content')
  <br>
   <div class="row">
        <div class="col-12">
            <a href="{{ route('products.create') }}" class="btn btn-success mb-2">Ajouter</a>

          <table class="table table-bordered" id="laravel_crud">
           <thead>
              <tr>
                 <th>N°</th>
                 <th>Titre</th>
                 <th>Description</th>
                 <th>Date de création</th>
                 <td colspan="2">Action</td>
              </tr>
           </thead>
           <tbody>
              @foreach($products as $product)
              <tr>
                 <td>{{ $product->numArticle }}</td>
                 <td>{{ $product->title }}</td>
                 <td><div class="cellContent">{!!  $product->description !!}</div></td>
              <td>Le{{  date('d/m/Y, à H', strtotime($product->created_at))  }} h {{date('i', strtotime($product->created_at))}} </td>
                 <td style="display:flex;justify-content: space-around;"><a href="{{ route('products.edit',$product->id)}}" class="btn btn-primary">Modifier</a>

                 <form action="{{ route('products.destroy', $product->id)}}" method="post">
                  {{ csrf_field() }}
                  @method('DELETE')
                  <button class="btn btn-danger" type="submit">Supprimer</button>
                </form>
                </td>
              </tr>
              @endforeach
           </tbody>
          </table>
          {!! $products->links() !!}
       </div>
   </div>
 @endsection

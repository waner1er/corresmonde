@extends('layouts.app')

@section('content')
  <br>
   <div class="row">
        <div class="col-12">
            <a href="{{ route('periples.create') }}" class="btn btn-success mb-2">Ajouter</a>

          <table class="table table-bordered" id="laravel_crud">
           <thead>
              <tr>
                 <th>Titre</th>
                 <th>Description</th>
                 <th>Date de création</th>
                 <td colspan="2">Action</td>
              </tr>
           </thead>
           <tbody>
              @foreach($periples as $periple)
              <tr>
                 <td>{{ $periple->peripleTitle }}</td>
                 <td><div class="cellContent">{!!  $periple->peripleContent !!}</div></td>
              <td>Le{{  date('d/m/Y, à H', strtotime($periple->created_at))  }} h {{date('i', strtotime($periple->created_at))}} </td>
                 <td style="display:flex;justify-content: space-around;"><a href="{{ route('periples.edit',$periple->id)}}" class="btn btn-primary">Modifier</a>

                 <form action="{{ route('periples.destroy', $periple->id)}}" method="post">
                  {{ csrf_field() }}
                  @method('DELETE')
                  <button class="btn btn-danger" type="submit">Supprimer</button>
                </form>
                </td>
              </tr>
              @endforeach
           </tbody>
          </table>
          {!! $periples->links() !!}
       </div>
   </div>
 @endsection

@extends('layouts.edit')

@section('content')
<link rel="stylesheet" href="">
<h2 style="margin-top: 12px;" class="text-center">Add Product</a></h2>
<br>

<form action="{{ route('products.store') }}" method="POST" name="add_product">
{{ csrf_field() }}

<div class="row">
    <div class="col-md-12">
        <div class="form-group">
            <strong>Titre</strong>
            <input type="text" name="title" class="form-control" placeholder="Titre de l'article">
            <span class="text-danger">{{ $errors->first('title') }}</span>
        </div>
    </div>

    <div class="col-md-12">
        <div class="form-group">
            <strong>Contenu</strong>
            <textarea class="description" col="4" name="description" placeholder="Ecrire un article"></textarea>
            <span class="text-danger">{{ $errors->first('description') }}</span>
        </div>
    </div>
    <div class="col-md-12">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>

</form>

@endsection

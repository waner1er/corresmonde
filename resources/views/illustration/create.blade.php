@extends('layouts.back')

@section('content')

<form action="{{ route('illustrations.store') }}" method="POST" name="add_product">
    {{ csrf_field() }}
<div class="col-md-4">
<div class="form-group">
<strong>photo1</strong>
<textarea class="image" col="4" name="photo" placeholder="Ecrire un article"></textarea>
<span class="text-danger">{{ $errors->first('photo') }}</span>
</div>
</div>
<div class="col-md-12">
<button type="submit" class="btn btn-primary">Valider</button>
</div>
</form>

@endsection

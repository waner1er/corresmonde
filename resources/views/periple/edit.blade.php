@extends('layouts.back')

@section('content')
<link rel="stylesheet" href="../../css/sandstone.css">
<link rel="stylesheet" href="../../css/adminCss.css">

<form style="width:100%"action="{{ route('periples.update', $periple_info->id) }}" method="POST" name="update_periple">
{{ csrf_field() }}
@method('PATCH')

<div class="row">
    <div class="col-lg-12 text-success"><h2>Modifier</h2></div>
    <div class="col-lg-12">
        <div class="form-group">
            <strong>Titre</strong>
            <input type="text" name="peripleTitle" class="form-control" value="{{ $periple_info->peripleTitle }}">
            <span class="text-danger">{{ $errors->first('peripleTitle') }}</span>
        </div>
    </div>


    <div class="col-lg-12">
        <div class="form-group">
            <strong>Contenu</strong>
            <textarea style="height:550px;"class="description" name="peripleContent"   placeholder="" >{{ $periple_info->peripleContent }}</textarea>
            <span class="text-danger">{{ $errors->first('peripleContent') }}</span>
        </div>
    </div>

    <div class="col-lg-12">
        <button type="submit" class="btn btn-primary">Valider</button>
    </div>
</div>

</form>

@endsection

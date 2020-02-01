@extends('layouts.back')

@section('content')
<link rel="stylesheet" href="../../css/sandstone.css">
<link rel="stylesheet" href="../../css/adminCss.css">

<form style="width:100%"action="{{ route('sources.update', $source_info->id) }}" method="POST" name="update_source">
{{ csrf_field() }}
@method('PATCH')

<div class="row">
    <div class="col-lg-12 text-success"><h2>Modifier</h2></div>
    <div class="col-lg-12">
        <div class="form-group">
            <strong>Titre</strong>
            <input type="text" name="sourceTitle" class="form-control" value="{{ $source_info->sourceTitle }}">
            <span class="text-danger">{{ $errors->first('sourceTitle') }}</span>
        </div>
    </div>


    <div class="col-lg-12">
        <div class="form-group">
            <strong>Contenu</strong>
            <textarea style="height:550px;"class="description" name="sourceContent"   placeholder="" >{{ $source_info->sourceContent }}</textarea>
            <span class="text-danger">{{ $errors->first('sourceContent') }}</span>
        </div>
    </div>

    <div class="col-lg-12">
        <button type="submit" class="btn btn-primary">Valider</button>
    </div>
</div>

</form>

@endsection

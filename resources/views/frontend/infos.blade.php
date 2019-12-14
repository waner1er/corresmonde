@extends('layouts.frontTemplate')

@section('content')
    <form action="{{ url('users') }}" method="POST">
        @csrf
        <label for="nom">Entrez votre nom : </label>
        <input type="text" name="nom" id="nom">
        <input type="email" name="email" id="email">
        <input type="submit" value="Envoyer !">
    </form>
    
@endsection

@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Bienvenue {{ Auth::user()->name }}  !!
                </div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">

                            {{ session('status') }}
                        </div>
                    @endif


                    <h1 class="text-success">Vous êtes connecté</h1>
                </div>
            </div>
            <br>

            <div class="row" style="justify-content: space-around">
                <div>
                    <h3>Enregistrer un nouvel administrateur :</h3>
                </div>
                <div>
                    @if (Route::has('register'))
                    <a class="btn btn-success" href="{{ route('register') }}">Inscription</a>
                    @endif
                </div>
            </div>
        </div>

    </div>
</div>
@endsection

@extends('master')

@section('content')
@if (session('status'))
    <div class="alert alert-success">
        {{ session('status') }}
    </div>
@endif
<div class="card shadow mb-4">
    <div class="card-header">
        <h6 class="m-0 font-weight-bold text-primary">Modifier un etudiant</h6>
    </div>
    <div class="card-body">

        <ul>
            @foreach ($errors->All() as $error)
                <li class="alert alert-danger">
                    {{ $error }}
                </li>
            @endforeach
        </ul>
        <form method="GET" action="/update/traitement" class="form-group">
            @csrf
            <div class="row">
                <div class="col-md-6">
                    <hr>
                    <div>
                        <input type="hidden" name="id" value="{{ $etudiants->id }}">
                    </div>

                    <div class="form-group mt-2">
                        <label for="titre">Nom : </label>
                        <input type="text" id="nom" name="nom" class="form-control mt-2"
                            value="{{ $etudiants->nom }}">
                    </div>

                    <div class="form-group mt-2">
                        <label for="date_debut">Prenom : </label>
                        <input type="text" id="prenom" name="prenom" class="form-control mt-2"
                            value="{{ $etudiants->prenom }}">
                    </div>

                    <div class="form-group mt-2">
                        <label for="mail">Classe : </label>
                        <input type="text" id="classe" name="classe" class="form-control mt-2"
                            value="{{ $etudiants->classe }}">
                    </div>

                    <div class="d-flex align-items-center mt-4 mb-0">
                        <button type="submit" name="enregistrer" class=" btn btn-primary mx-4 btn-lg">Modifier</button>
                        <button type="reset" class="btn btn-danger btn-lg">Annuler</button><br>
                    </div>
                </div>
            </div>

        </form>
    </div>
</div>
@endsection

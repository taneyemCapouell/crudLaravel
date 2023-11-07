@extends('master')

@section('content')

<div class="container-fluid">
    <h1 class="h3 mb-4 text-gray-800">Ajouter un etudiant</h1>
    <div class="row">
        <div class="col-md-12">
            <hr>
            <!-- afficher le message -->
            @if (session('status'))
                <div class="alert alert-success">
                    {{ session('status') }}
                </div>
            @endif

            <!-- gerer les erreurs -->
            <ul>
                @foreach ($errors->All() as $error)
                    <li class="alert alert-danger">
                        {{ $error }}
                    </li>
                @endforeach
            </ul>
            <form method="GET" action="ajouter/traitement" class="form">
                @csrf
                <div class="form-group mt-2">
                    <label for="titre">Nom : </label>
                    <input type="text" id="nom" name="nom" class="form-control mt-2">
                </div>

                <div class="form-group mt-2">
                    <label for="date_debut">Prenom : </label>
                    <input type="text" id="prenom" name="prenom" class="form-control mt-2">
                </div>

                <div class="form-group mt-2">
                    <label for="mail">Classe : </label>
                    <input type="text" id="classe" name="classe" class="form-control mt-2">
                </div> 

                <div class="d-flex align-items-center mt-4 mb-0">
                    <button type="submit" name="enregistrer" class=" btn btn-primary mx-4  btn-lg">Enregistrer</button>
                    <button type="reset" class="btn btn-danger  btn-lg">Annuler</button><br>
                </div>
            </form>
        </div>
    </div> 
</div>
<!-- /.container-fluid -->
@endsection



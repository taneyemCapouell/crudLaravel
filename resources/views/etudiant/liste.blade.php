@extends('master')

@section('content')
    <!-- afficher le message -->
    @if (session('status'))
        <div class="alert alert-success">
            {{ session('status') }}
        </div>
    @endif
    <div class="card shadow mb-4">
        <div class="card-header">
            <h6 class="m-0 font-weight-bold text-primary">Liste des etudiants</h6>
        </div>
        <div class="card-body">
            <a href="./ajouter" class="btn btn-primary btn-sm mb-4"><i class="fas fa-plus"></i> Ajouter un etudiant</a>
            <div class="table-responsive">
                <table class="table table-bordered text-center" id="dataTable" width="100%" cellspacing="0">
                    <theat class="theat-primary">
                        <tr>
                            <th>#</th>
                            <th>Nom</th>
                            <th>Prenom</th>
                            <th>Classe</th>
                            <th>Actions</th>
                        </tr>
                    </theat>
                    <tboby class='table-center'>
                        @php
                            $i = 0
                        @endphp
                        @foreach ($etudiants as $etudiant)
                            @php
                                $i++
                            @endphp

                            <tr>
                                <td>{{ $i }}</td>
                                <td>{{ $etudiant->nom }}</td>
                                <td>{{ $etudiant->prenom }}</td>
                                <td>{{ $etudiant->classe }}</td>
                                <td>
                                    <a href="/detail_etudiant/{{ $etudiant->id }}" title="Voir"><i
                                            class="fas fa-eye"></i></a>
                                    <a href="/update_etudiant/{{ $etudiant->id }}" class="mx-3" title="Modifier"><i
                                            class="fas fa-edit"></i></a>
                                    <a href="/delete_etudiant/{{ $etudiant->id }}" title="Supprimer"><i
                                            class="fas fa-trash"></i></a>
                                </td>
                            </tr>
                        @endforeach
                    </tboby>
                </table>
            </div>
        </div>
    @endsection

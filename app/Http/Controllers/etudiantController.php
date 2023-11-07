<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

// importation de la classe etudiant
use App\Models\Etudiant;
use Illuminate\Support\Facades\Auth;

class etudiantController extends Controller
{
    public function liste_etudiant(){
        $etudiants = Etudiant::all();
        return view('etudiant.liste', compact('etudiants'));
    }

    public function ajouter_etudiant(){
        return view('etudiant.ajouter');
    }

    public function ajouter_etudiant_traitement(Request $request){
        // on oblige les champs nom prenom et classe a etre remplir
        $request->validate([
            'nom'=>'required',
            'prenom'=>'required',
            'classe'=>'required',
        ]);

        // extensier l'objet etudiant
        $etudiant = new Etudiant();
        $etudiant->nom = $request->nom;
        $etudiant->prenom = $request->prenom;
        $etudiant->classe = $request->classe;

        // enregistrer les infos dans la base de donnees en executant la methode save()
        $etudiant -> save();
        // redirectionner vers la page ajouter avec un message
        return redirect('/etudiant')->with('status','Etudiant ajouter avec succes.');

    }

    public function update_etudiant($id){
        $etudiants = Etudiant::find($id);
        return view('etudiant.update',compact('etudiants'));
    }

    public function update_etudiant_traitement(Request $request){
        // on oblige les champs nom prenom et classe a etre remplir
        $request->validate([
            'nom'=>'required',
            'prenom'=>'required',
            'classe'=>'required',
        ]);

        // modification de l'etudiant etudiant
        $etudiant = Etudiant::find($request->id);
        $etudiant->nom = $request->nom;
        $etudiant->prenom = $request->prenom;
        $etudiant->classe = $request->classe;
        // enregistrer les infos dans la base de donnees en executant la methode update()
        $etudiant -> update();
        // redirectionner vers le taleau des etudiants avec un message
        return redirect('/etudiant')->with('status','Etudiant modifier avec succes.');

    }

    public function delete_etudiant($id){
        $etudiant = Etudiant::find($id);
        $etudiant->Delete();
        return redirect('etudiant')->with('status','Etudiant supprimer avec succes');
    }

    public function detail_etudiant($id){
        $etudiants = Etudiant::find($id);
        return view('etudiant.detail', compact('etudiants'));
    }

    public function deconnection_user(){
        Auth()->logout();
        return redirect('/login');
    }

}

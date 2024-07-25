<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UtilisateurController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $utilisateur=Utilisateur::All();
        return view('Utilisateurs.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view ('Utilisateurs.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $utilisateur=new Utilisateur;
        $utilisateur->nom=$request->nom;
        $utilisateur->prenom=$request->prenom;
        $utilisateur->date_naissance=$request->date_naissance;
        $utilisateur->email=$request->email;
        $utilisateur->mot_de_passe=$request->mot_de_passe;
        $utilisateur->adresse=$request->adresse;
        $utilisateur->telephone=$request->telephone;
        $utilisateur->save();
        return redirect()->route('Utilisateurs.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
      $utilisateur=Utilisateur::find($id);
      return view ('Utilisateurs.show');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $utilisateur=Utilisateur::find($id);
      return view ('Utilisateurs.edit');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $utilisateur=Utilisateur::find($id);
        $utilisateur->nom=$request->nom;
        $utilisateur->prenom=$request->prenom;
        $utilisateur->date_naissance=$request->date_naissance;
        $utilisateur->email=$request->email;
        $utilisateur->mot_de_passe=$request->mot_de_passe;
        $utilisateur->adresse=$request->adresse;
        $utilisateur->telephone=$request->telephone;
        $utilisateur->save();
        return redirect()->route('Utilisateurs.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $utilisateur=Utilisateur::find($id);
        $livre->delete();
        return redirect()->route('Utilisateurs.index');
    }
}

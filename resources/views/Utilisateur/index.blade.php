<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>lister les utilisateurs</title>
</head>
<body>
    





@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Liste des utilisateurs</h1>
    <a href="{{ route('utilisateurs.create') }}" class="btn btn-primary">Ajouter un utilisateur</a>
    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nom</th>
                <th>PRENOM</th>
                <th>DATE_NAISSANCE</th>
                <th>Email</th>
                <th>Mot_de_passe</th>
                <th>Adresse</th>
                <th>Telephone</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($utilisateurs as $utilisateur)
                <tr>
                    <td>{{ $utilisateur->id }}</td>
                    <td>{{ $utilisateur->nom }}</td>
                    <td>{{ $utilisateur->prenom }}</td>
                    <td>{{ $utilisateur->date_naissance }}</td>
                    <td>{{ $utilisateur->email }}</td>
                    <td>{{ $utilisateur->mot_de_passe }}</td>
                    <td>{{ $utilisateur->adresse }}</td>
                    <td>{{ $utilisateur->telephone }}</td>
                    <td>
                        <a href="{{ route('Utilisateurs.edit', $utilisateur->id) }}" class="btn btn-warning">Modifier</a>
                        <form action="{{ route('Utilisateurs.destroy', $utilisateur->id) }}" method="POST" style="display:inline-block;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Supprimer</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection







</body>
</html>
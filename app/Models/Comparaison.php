<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comparaison extends Model
{
    use HasFactory;

    protected $fillable=['utilisateur_id','date','criteres','resultats'];




    protected $casts = [
        'criteres' => 'array',
        'resultats' => 'array',];
}

public function Utilisateur()
{
    return $this->belongsTo(User::class);
}

public function effectuerComparaison(array $criteres)
{
    // Logique pour effectuer la comparaison et remplir l'attribut resultats
    // ...
    $this->resultats=OffreMutuelle::where('hospitalisation',$criteres['hospitalisation'])
    ->where('dentaire',$criteres['dentaire'])
    ->where('frais_dentaire',$criteres['frais_dentaire'])
    ->where('optique',$criteres['optique'])
    ->get()
    ->toArray();
}

public function sauvegarderResultats()
{
    // Logique pour sauvegarder les résultats dans la base de données
    // ...
}

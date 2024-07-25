<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Utilisateur extends Model
{
    use HasFactory;


    protected $fillable=['nom','prenom','date_naissance','email','mot_de_passe','adresse','telephone'];


}
class User extends Authenticatable
{
    public function comparaisons()
    {
        return $this->hasMany(Comparaison::class);
    }

    public function supports()
    {
        return $this->hasMany(Support::class);
    }

    public function souscriptions()
    {
        return $this->hasMany(Souscription::class);
    }
}
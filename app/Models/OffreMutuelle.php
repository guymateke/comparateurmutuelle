<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OffreMutuelle extends Model
{
    use HasFactory;

    protected $fillable=['nom','description','hospitalisation','dentaire','frais_medicaux','optique','prix'];
}

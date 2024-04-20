<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Serveur extends Model
{
    use HasFactory;

    protected $fillable = [
        'nom',
        'date_embauche',
    ];

    public function commandes() {
        return $this->hasMany(Commande::class, 'serveur_id', 'id');
    }
    
}

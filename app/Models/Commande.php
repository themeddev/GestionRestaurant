<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Commande extends Model
{
    use HasFactory;

    protected $fillable = [
        'serveur_id',
        'numero_table',
        'etat',
        'payé',
    ];

    public function serveur() {
        return $this->belongsTo(Serveur::class, 'serveur_id', 'id');
    }
    
    public function commandePlats() {
        return $this->hasMany(Commande_plat::class, 'commande_id', 'id');
    }
    
}

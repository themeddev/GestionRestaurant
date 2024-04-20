<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Composant extends Model
{
    use HasFactory;

    protected $fillable = [
        'libelle',
    ];

    public function plats() {
        return $this->belongsToMany(Plat::class, 'composant_plat', 'composant_id', 'plat_id')
                    ->withPivot('quantite', 'unité');
    }
    
}

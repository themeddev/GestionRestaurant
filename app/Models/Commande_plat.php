<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Commande_plat extends Model
{
    use HasFactory;

    protected $fillable = [
        'commande_id',
        'plat_id',
        'nombre',
    ];

    public function commande() {
        return $this->belongsTo(Commande::class, 'commande_id', 'id');
    }

    public function plat() {
        return $this->belongsTo(Plat::class, 'plat_id', 'id');
    }
    
    
}

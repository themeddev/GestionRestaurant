<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Composant_plat extends Model
{
    use HasFactory;

    protected $fillable = [
        'composant_id',
        'plat_id',
        'quantite',
        'unité',
    ];

}

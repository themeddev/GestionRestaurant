<?php

namespace Database\Seeders;
use App\Models\User;
use App\Models\Plat;
use App\Models\Categorie;
use App\Models\Commande;
use App\Models\Composant;
use App\Models\Serveur;
use App\Models\Composant_plat;
use App\Models\Commande_plat;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();
        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);
        Categorie::factory(5)->create();
        Composant::factory(20)->create();
        Plat::factory(50)->create();
        Commande::factory(20)->create();
        Serveur::factory(20)->create();
        Commande_plat::factory(100)->create();
    }
}
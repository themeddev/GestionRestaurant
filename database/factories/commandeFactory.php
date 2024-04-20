<?php

namespace Database\Factories;

use App\Models\Commande;
use Illuminate\Database\Eloquent\Factories\Factory;
use Faker\Generator as Faker;

class CommandeFactory extends Factory
{
    protected $model = Commande::class;

    public function definition()
    {
        return [
            'serveur_id' => \App\Models\Serveur::factory(),
            'numero_table' => $this->faker->numberBetween(1, 10), // Or any range you prefer
            'etat' => $this->faker->randomElement(['en cours', 'terminé', 'servi ou emporté']),
            'payé' => $this->faker->boolean(),
            // You may add more attributes if needed
        ];
    }
}

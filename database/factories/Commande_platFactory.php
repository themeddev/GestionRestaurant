<?php

namespace Database\Factories;

use App\Models\Commande_plat;
use Illuminate\Database\Eloquent\Factories\Factory;
use Faker\Generator as Faker;

class Commande_platFactory extends Factory
{
    protected $model = Commande_plat::class;

    public function definition()
    {
        return [
            'commande_id' => \App\Models\Commande::factory(),
            'plat_id' => \App\Models\Plat::factory(),
            'nombre' => $this->faker->numberBetween(1, 5), // Or any range you prefer
        ];
    }
}

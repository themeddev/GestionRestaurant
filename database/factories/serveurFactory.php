<?php

namespace Database\Factories;

use App\Models\Serveur;
use Illuminate\Database\Eloquent\Factories\Factory;
use Faker\Generator as Faker;

class ServeurFactory extends Factory
{
    protected $model = Serveur::class;

    public function definition()
    {
        return [
            'nom' => $this->faker->name,
            'date_embauche' => $this->faker->dateTimeBetween('-5 years', 'now'),
            // You may add more attributes if needed
        ];
    }
}

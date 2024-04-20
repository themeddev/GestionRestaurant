<?php

namespace Database\Factories;

use App\Models\Composant;
use Illuminate\Database\Eloquent\Factories\Factory;
use Faker\Generator as Faker;

class ComposantFactory extends Factory
{
    protected $model = Composant::class;

    public function definition()
    {
        return [
            'libelle' => $this->faker->word,
            // You may add more attributes if needed
        ];
    }
}

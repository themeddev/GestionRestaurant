<?php

namespace Database\Factories;

use App\Models\Plat;
use Illuminate\Database\Eloquent\Factories\Factory;
use Faker\Generator as Faker;

class PlatFactory extends Factory
{
    protected $model = Plat::class;

    public function definition()
    {
        return [
            'categorie_id' => \App\Models\Categorie::factory(),
            'intitulé' => $this->faker->words(3, true),
            'description' => $this->faker->sentence(),
            'prix' => $this->faker->randomFloat(2, 5, 50), // Or any range you prefer
            'photo' => $this->faker->imageUrl(), // You may replace this with a custom logic for generating photo URLs
            // You may add more attributes if needed
        ];
    }
}

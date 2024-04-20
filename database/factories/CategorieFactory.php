<?php

namespace Database\Factories;

use App\Models\Categorie;
use Illuminate\Database\Eloquent\Factories\Factory;

class CategorieFactory extends Factory
{
    protected $model = Categorie::class;

    public function definition()
    {
        return [
            'titre' => $this->faker->word,
            'photo' => $this->faker->imageUrl(), // You may replace this with a custom logic for generating photo URLs
            // You may add more attributes if needed
        ];
    }
}

<?php

namespace Database\Factories;

use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class ProductFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Product::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => 'Produkt ' . Str::random(5),
            'price' => rand(100, 1000) / 10,
            'text' => Str::words(50),
            'details' => Str::words(50),
            'images' => 'image.jpg'
        ];
    }
}
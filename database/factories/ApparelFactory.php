<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Apparel>
 */
class ApparelFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name' => $this->faker->text($maxNbChars = 25),
            'sku' => $this->faker->ean8,
            'quantity' => $this->faker->numberBetween($min = 10, $max=50),
            'purchasePrice' => $this->faker->numberBetween($min = 50, $max=100),
            'retailPrice' => $this->faker->numberBetween($min = 150, $max = 200),
            'style' => $this->faker->randomElement($array = array ('Casual','Elegant','Boho', 'Preppy', 'Coordinates', 'Basics', 'Street', 'Cute')), 
            'type' => $this->faker->randomElement($array = array ('Top','Tee','Bodycon', 'Cami', 'Polo', 'Romper', 'Tie dye', 'Graphic', 'Shirt')),
            'color' => $this->faker->colorName,
            'image' => "apparel_dummy.jpg",
        ];
    }
}

<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Item>
 */
class ItemFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->name(),
            'category_id' => $this->faker->numberBetween(1, 2),
            'price' => $this->faker->randomFloat(2, 1000, 100000),
            'description' => $this->faker->text(),
            'image' => fake()->randomElement([
                'https://images.unsplash.com/photo-1612927601601-6638404737ce',
                'https://images.unsplash.com/photo-1517701550927-30cf4ba1dba5',
                'https://images.unsplash.com/photo-1515823064-d6e0c04616a7',
                'https://images.unsplash.com/photo-1574484284002-952d92456975',
                'https://images.unsplash.com/photo-1546069901-ba9599a7e63c',
            ]),
            'is_active' => $this->faker->boolean(),
        ];
    }
}

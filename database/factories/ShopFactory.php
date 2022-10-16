<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ShopFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $faker = \Faker\Factory::create('ja_JP');
        return [
            'name' => $faker->company(),
            'description' => $faker->paragraph(),
            'address' => $faker->address(),
            'latitude' => $faker->latitude($min = 26, $max = 43),
            'longitude' => $faker->longitude($min = 127.7, $max = 141.6),
        ];
    }
}

<?php

namespace Database\Factories;

use App\Models\Model;
use App\Models\Listing;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<Model>
 */
class ListingFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => $this -> faker-> word(),
            'id' => $this -> faker -> randomNumber($nbDigits = 4, $strict = false),
            'image_id' => $this -> faker -> numberBetween($min = 1, $max = 3) ,
            'tags' => $this -> faker->  word(),
            'company' => $this -> faker -> company(),
            'location' => $this -> faker -> address(),
            'email' => $this -> faker -> companyEmail(),
            'website' => $this -> faker -> url(),
            'description' => $this -> faker -> paragraph()
        ];
    }
}

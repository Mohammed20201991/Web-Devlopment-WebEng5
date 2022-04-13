<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Project>
 */
class ProjectFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            //
            // 'name'=> 'new project', instaed of static data we can use faker
            'name'=> $this-> faker->lastName(),
            // optional because it can be null
            'description'=> $this-> faker->optional()->sentence(),
            'image_url'=> $this-> faker->optional()->imageUrl(),
        ];
    }
}


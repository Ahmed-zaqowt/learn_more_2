<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Contact>
 */
class ContactFactory extends Factory
{
    /**
     * Define the model's default state.
     * name , email , phone , msg , image
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->name() ,
             'email' => $this->faker->unique()->safeEmail() ,
             'phone' => $this->faker->phoneNumber() ,
             'msg' => $this->faker->words(10 , true) ,
             'image' => 'SiteOne_1744731697_1986199999.jpg' ,
        ];
    }
}

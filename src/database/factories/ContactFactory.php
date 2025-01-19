<?php

namespace Database\Factories;

use App\Models\Contact;
use Illuminate\Database\Eloquent\Factories\Factory;

class ContactFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
                'first_name' => $this->faker->firstName(),
                'last_name' => $this->faker->lastName(),
                'gender' => $this->faker->randomElement(['男性','女性','その他']),
                'category_id' => $this->faker->numberBetween(1,5),
                'email' => $this->faker->safeEmail(),
                'tel' => $this->faker->phoneNumber(11),
                'address' => $this->faker->city(),
                'building' => $this->faker->streetAddress(),
                'detail' => $this->faker->realText(),
        ];
    }
}

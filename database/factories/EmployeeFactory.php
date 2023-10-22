<?php

namespace Database\Factories;

use App\Models\Position;
use Illuminate\Database\Eloquent\Factories\Factory;
use Faker\Factory as Faker;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Employee>
 */
class EmployeeFactory extends Factory
{

    
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $faker = Faker::create();

        $ids = Position::select('id')->get()->pluck('id');
        return [
            'name' => $faker->firstName,
            'last_name' => $faker->lastName,
            'age' => $faker->numberBetween(20, 60),
            'date_admission' => $faker->date($format = 'Y-m-d', $max = 'now'),
            'area' => $faker->jobTitle,
            'position_id' => $faker->randomElement($ids),
            'locker' => $faker->unique()->randomNumber(5, true)
        ];
    }
}

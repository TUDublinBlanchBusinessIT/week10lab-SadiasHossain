<?php

namespace Database\Factories;

use App\Models\booking;
use Illuminate\Database\Eloquent\Factories\Factory;

class bookingFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = booking::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'bookingdate' => $this->faker->word,
        'starttime' => $this->faker->word,
        'endtime' => $this->faker->word,
        'memberid' => $this->faker->randomDigitNotNull,
        'courtid' => $this->faker->randomDigitNotNull,
        'fee' => $this->faker->word,
        'created_at' => $this->faker->date('Y-m-d H:i:s'),
        'updated_at' => $this->faker->date('Y-m-d H:i:s'),
        'deleted_at' => $this->faker->date('Y-m-d H:i:s')
        ];
    }
}

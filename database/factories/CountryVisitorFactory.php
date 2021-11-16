<?php

namespace Database\Factories;

use App\Models\CountryVisitor;
use Illuminate\Database\Eloquent\Factories\Factory;

class CountryVisitorFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */

    protected $model = CountryVisitor::class;
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'country_id' => rand(1,5),
            'user_id' => rand(1,100),
        ];
    }
}

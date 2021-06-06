<?php

namespace Database\Factories;

use App\Models\Course;
use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Instructor;

class CourseFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Course::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $catygory = ["catygory1", "catygory2", "catygory3"];
        return [
            'instructor_id' => Instructor::factory(),
            'title' => $this->faker->name,
            'category' => $catygory[rand(0, 2)],
            'description' => $this->faker->paragraph(3),
            'price' => $this->faker->numberBetween(250, 3000),
        ];
    }
}

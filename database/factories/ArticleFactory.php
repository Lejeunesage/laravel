<?php

namespace Database\Factories;

use App\Models\Article;
use App\Models\User;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class ArticleFactory extends Factory
{

    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Article::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'title' => $this->faker->text(15),
            'body' => $this->faker->text(200),
            'user_id' => function () {
                return User::inRandomOrder()->first()->id;
            },
            'image' => 'public/images/lara-seeded.PNG',
        ];
    }
}

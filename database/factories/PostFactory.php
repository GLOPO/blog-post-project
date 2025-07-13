use Illuminate\Support\Str;

public function definition(): array
{
    return [
        'title' => $this->faker->sentence,
        'body' => $this->faker->paragraphs(3, true),
        ];
}
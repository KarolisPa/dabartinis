<?php

namespace Database\Factories;


use App\Models\Product;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\Factory;


class ProductFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Product::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name(),
            'about' => $this->faker->word(),
            'unit_of_measurement' => $this->faker->randomElement(['vnt', 'kg', 'l']) ,
            'category' => $this->faker->randomElement(['Varteliai', 'Vartai', 'Tvora', 'Bokstelis']),
            'model' => $this->faker->name(),
            'price' => $this->faker->numerify('##.##'),
            'height' => $this->faker->numerify('#.##'),
            'width' => $this->faker->numerify('#.##'),
            'color' => $this->faker->colorName(),
            'discount_price' => $this->faker->numerify('#.##'),
            'discount_status' => $this->faker->randomElement([0, 1]),
           'discount_end' => Carbon::now()->addMonth(),
            'photo' => $this->faker->image('public/storage/products',640, 480, null, false)

       ];
    }
}

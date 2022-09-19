<?php

namespace Database\Factories;

use App\Models\Category;
use App\Models\City;
use App\Models\Housing;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Housing>
 */
class HousingFactory extends Factory
{
    /**
     * Define the model's default state.c
     *
     * @return array<string, mixed>
     */

    protected $model = Housing::class;

    public function definition()
    {
        return [
            'category_id' => Category::inRandomOrder()->first()->id,
            'name' => $this->faker->name,
            'description' => $this->faker->text,
            'max_floor' => rand(1,27),
            'star' => rand(1,5),
            'contact_person' => $this->faker->userName,
            'phone' => $this->faker->phoneNumber,
            'alt_phone' => $this->faker->phoneNumber,
            'represent_management' => $this->faker->boolean,
            'company_name' => $this->faker->company,
            'city_id' => City::inRandomOrder()->first()->id,
            'address' => $this->faker->address,
            'alt_address' => $this->faker->address,
            'lat' => $this->faker->latitude,
            'lng' => $this->faker->longitude,
            'postal_code' => $this->faker->postcode,
            'cancel_fine_day' => collect(['arrival','1','2','3','7','14','30',null])->random(),
            'required_pay' => collect(['full','first',null])->random(),
            'parking' => collect(['no','yes_free','yes_paid',null])->random(),
            'parking_property' => collect(['private','public',null])->random(),
            'parking_location' => collect(['inside','outside',null])->random(),
            'parking_booking' => collect(['booking','no_booking',null])->random(),
            'parking_price' => collect([50,250,350,700,1500])->random(),
            'breakfast' =>collect(['no','yes_free','yes_by_request'])->random(),
            'children_allowed' => $this->faker->boolean,
            'pet' => collect(['yes','no','by_request'])->random(),
            'pet_charge' => $this->faker->boolean,
            'pet_price' => collect([500,2050,3500,7000,15000])->random(),
            'check_in_from' => $this->faker->time(),
            'check_in_before' => $this->faker->time(),
            'check_out_from' => $this->faker->time(),
            'check_out_before' => $this->faker->time(),

            'pos_terminal' => $this->faker->boolean,
            'invoice_name' => $this->faker->name,
            'invoice_company_name' => $this->faker->company,
            'recipient_invoice' => $this->faker->boolean,
            'recipient_invoice_city_id' => City::inRandomOrder()->first()->id,
            'recipient_invoice_address' =>$this->faker->address,
            'recipient_invoice_postal_code' =>$this->faker->postcode,
        ];
    }
}

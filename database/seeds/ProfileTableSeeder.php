<?php

use Illuminate\Database\Seeder;

class ProfileTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $faker = Faker\Factory::create();

      DB::table('profiles')->insert([
     'created_at' => Carbon\Carbon::now()->toDateTimeString(),
     'updated_at' => $faker->dateTimeBetween($startDate = '-30 years', $endDate = 'now'),
     'ownerName' => $faker->name,
     'address' => $faker->address,
     'phone' => $faker->phoneNumber,
     ]);
    }
}

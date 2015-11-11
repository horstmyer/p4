<?php

use Illuminate\Database\Seeder;

class PetsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $faker = Faker\Factory::create();

      DB::table('pets')->insert([
     'created_at' => Carbon\Carbon::now()->toDateTimeString(),
     'updated_at' => $faker->dateTimeBetween($startDate = '-30 years', $endDate = 'now'),
     'ownerName' => $faker->name,
     'petName' => $faker->firstName($gender = null|'male'|'female'),
     'breed' => $faker->firstName($gender = null|'male'|'female'),
     'photo' => $faker->url,
     'status' => $faker->boolean($chanceOfGettingTrue = 50),
     ]);

     DB::table('pets')->insert([
    'created_at' => Carbon\Carbon::now()->toDateTimeString(),
    'updated_at' => $faker->dateTimeBetween($startDate = '-30 years', $endDate = 'now'),
    'ownerName' => $faker->name,
    'petName' => $faker->firstName($gender = null|'male'|'female'),
    'breed' => $faker->firstName($gender = null|'male'|'female'),
    'photo' => $faker->url,
    'status' => $faker->boolean($chanceOfGettingTrue = 50),
    ]);
    }
}

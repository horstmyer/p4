<?php

use Illuminate\Database\Seeder;

class ProfilesTableSeeder extends Seeder
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
        'name' => 'LaLa Mills',
        'email' => $faker->email,
        'address' => $faker->address,
        'phone' => $faker->phoneNumber,
        ]);

        DB::table('profiles')->insert([
       'created_at' => Carbon\Carbon::now()->toDateTimeString(),
       'updated_at' => $faker->dateTimeBetween($startDate = '-30 years', $endDate = 'now'),
       'name' => 'Mike Smith',
       'email' => $faker->email,
       'address' => $faker->address,
       'phone' => $faker->phoneNumber,
       ]);

       DB::table('profiles')->insert([
      'created_at' => Carbon\Carbon::now()->toDateTimeString(),
      'updated_at' => $faker->dateTimeBetween($startDate = '-30 years', $endDate = 'now'),
      'name' => 'Dolly Parton',
      'email' => $faker->email,
      'address' => $faker->address,
      'phone' => $faker->phoneNumber,
      ]);

    }
}

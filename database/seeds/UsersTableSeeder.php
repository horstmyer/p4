<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $faker = Faker\Factory::create();

      DB::table('users')->insert([
           'created_at' => Carbon\Carbon::now()->toDateTimeString(),
           'updated_at' => $faker->dateTimeBetween($startDate = '-30 years', $endDate = 'now'),
           'email' =>'jill@harvard.edu',
           'password' => \Hash::make('helloworld'),
           'name' => 'Jill',
           'address' => $faker->address,
           'phone' => $faker->phoneNumber,
       ]);

       DB::table('users')->insert([
          'created_at' => Carbon\Carbon::now()->toDateTimeString(),
          'updated_at' => $faker->dateTimeBetween($startDate = '-30 years', $endDate = 'now'),
          'email' => 'jamal@harvard.edu',
          'password' => \Hash::make('helloworld'),
          'name' => 'Jamal',
          'address' => $faker->address,
          'phone' => $faker->phoneNumber,
      ]);

      DB::table('users')->insert([
         'created_at' => Carbon\Carbon::now()->toDateTimeString(),
         'updated_at' => $faker->dateTimeBetween($startDate = '-30 years', $endDate = 'now'),
         'email' => $faker->email,
         'password' => \Hash::make('helloworld'),
         'name' => 'LaLa Mills',
         'address' => $faker->address,
         'phone' => $faker->phoneNumber,
     ]);

     DB::table('users')->insert([
        'created_at' => Carbon\Carbon::now()->toDateTimeString(),
        'updated_at' => $faker->dateTimeBetween($startDate = '-30 years', $endDate = 'now'),
        'email' => $faker->email,
        'password' => \Hash::make('helloworld'),
        'name' => 'Mike Smith',
        'address' => $faker->address,
        'phone' => $faker->phoneNumber,
    ]);

    DB::table('users')->insert([
       'created_at' => Carbon\Carbon::now()->toDateTimeString(),
       'updated_at' => $faker->dateTimeBetween($startDate = '-30 years', $endDate = 'now'),
       'email' => 'doodledog1@gmail.com',
       'password' => \Hash::make('helloworld'),
       'name' => 'Mike Smith',
       'address' => $faker->address,
       'phone' => $faker->phoneNumber,
   ]);

    DB::table('users')->insert([
       'created_at' => Carbon\Carbon::now()->toDateTimeString(),
       'updated_at' => $faker->dateTimeBetween($startDate = '-30 years', $endDate = 'now'),
       'email' => $faker->email,
       'password' => \Hash::make('helloworld'),
       'name' => 'Dolly Parton',
       'address' => $faker->address,
       'phone' => $faker->phoneNumber,
   ]);
    }
}

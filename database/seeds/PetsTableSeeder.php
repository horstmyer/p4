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
      $user_id = \App\User::where('name','=','LaLa Mills')->pluck('id');
      DB::table('pets')->insert([
        'created_at' => Carbon\Carbon::now()->toDateTimeString(),
        'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
        'petName' => 'Doodle Dog',
        'breed' => 'Poodle',
        'photo' => $faker->url,
        'user_id' => $user_id,
        'status' => $faker->boolean($chanceOfGettingTrue = 50),
      ]);

      $user_id = \App\User::where('name','=','Mike Smith')->pluck('id');
      DB::table('pets')->insert([
        'created_at' => Carbon\Carbon::now()->toDateTimeString(),
        'updated_at' => $faker->dateTimeBetween($startDate = '-30 years', $endDate = 'now'),
        'petName' => 'Dr. Dog',
        'breed' => 'Rottweiler',
        'photo' => $faker->url,
        'user_id' => $user_id,
        'status' => $faker->boolean($chanceOfGettingTrue = 50),
      ]);

      $user_id = \App\User::where('name','=','Dolly Parton')->pluck('id');
      DB::table('pets')->insert([
        'created_at' => Carbon\Carbon::now()->toDateTimeString(),
        'updated_at' => $faker->dateTimeBetween($startDate = '-30 years', $endDate = 'now'),
        'petName' => 'Jazmine',
        'breed' => 'Beagle',
        'photo' => $faker->url,
        'user_id' => $user_id,
        'status' => $faker->boolean($chanceOfGettingTrue = 50),
      ]);

      $user_id = \App\User::where('name','=','Jamal')->pluck('id');
      DB::table('pets')->insert([
        'created_at' => Carbon\Carbon::now()->toDateTimeString(),
        'updated_at' => $faker->dateTimeBetween($startDate = '-30 years', $endDate = 'now'),
        'petName' => 'Buddy',
        'breed' => 'Boxer',
        'photo' => $faker->url,
        'user_id' => $user_id,
        'status' => $faker->boolean($chanceOfGettingTrue = 50),
      ]);

      $user_id = \App\User::where('name','=','Jill')->pluck('id');
      DB::table('pets')->insert([
        'created_at' => Carbon\Carbon::now()->toDateTimeString(),
        'updated_at' => $faker->dateTimeBetween($startDate = '-30 years', $endDate = 'now'),
        'petName' => 'Suzie',
        'breed' => 'Golden',
        'photo' => $faker->url,
        'user_id' => $user_id,
        'status' => $faker->boolean($chanceOfGettingTrue = 50),
      ]);

      $user_id = \App\User::where('name','=','Jamal')->pluck('id');
      DB::table('pets')->insert([
        'created_at' => Carbon\Carbon::now()->toDateTimeString(),
        'updated_at' => $faker->dateTimeBetween($startDate = '-30 years', $endDate = 'now'),
        'petName' => 'Cuddles',
        'breed' => 'Beagle',
        'photo' => $faker->url,
        'user_id' => $user_id,
        'status' => $faker->boolean($chanceOfGettingTrue = 50),
      ]);
    }
}

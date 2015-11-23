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

      $profile_id = \App\Profile::where('name','=','LaLa Mills')->pluck('id');
      DB::table('pets')->insert([
     'created_at' => Carbon\Carbon::now()->toDateTimeString(),
     'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
     'petName' => 'Doodle Dog',
     'breed' => 'Poodle',
     'photo' => $faker->url,
     'profile_id' => $profile_id,
     'status' => $faker->boolean($chanceOfGettingTrue = 50),
     ]);

     $profile_id = \App\Profile::where('name','=','Mike Smith')->pluck('id');
     DB::table('pets')->insert([
    'created_at' => Carbon\Carbon::now()->toDateTimeString(),
    'updated_at' => $faker->dateTimeBetween($startDate = '-30 years', $endDate = 'now'),
    'petName' => 'Dr. Dog',
    'breed' => 'Rottweiler',
    'photo' => $faker->url,
    'profile_id' => $profile_id,
    'status' => $faker->boolean($chanceOfGettingTrue = 50),
    ]);

    $profile_id = \App\Profile::where('name','=','Dolly Parton')->pluck('id');
    DB::table('pets')->insert([
   'created_at' => Carbon\Carbon::now()->toDateTimeString(),
   'updated_at' => $faker->dateTimeBetween($startDate = '-30 years', $endDate = 'now'),
   'petName' => 'Jazmine',
   'breed' => 'Beagle',
   'photo' => $faker->url,
   'profile_id' => $profile_id,
   'status' => $faker->boolean($chanceOfGettingTrue = 50),
   ]);

   $profile_id = \App\Profile::where('name','=','Dolly Parton')->pluck('id');
   DB::table('pets')->insert([
  'created_at' => Carbon\Carbon::now()->toDateTimeString(),
  'updated_at' => $faker->dateTimeBetween($startDate = '-30 years', $endDate = 'now'),
  'petName' => 'Cuddles',
  'breed' => 'Beagle',
  'photo' => $faker->url,
  'profile_id' => $profile_id,
  'status' => $faker->boolean($chanceOfGettingTrue = 50),
  ]);
    }
}

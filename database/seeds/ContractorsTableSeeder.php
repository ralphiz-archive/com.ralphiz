<?php
use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

use Faker\Factory as Faker;

class ContractorsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        $limit = 50;
        for ($i = 0; $i < $limit; $i++) {
            DB::table('contractors')->insert([
                // Personal information
                'firstname' => $faker->firstName,
                'lastname' => $faker->lastName,
                'email' => $faker->email,
                'title' => 'software '.$faker->word,
                'city' => $faker->city,
                'state' => $faker->stateAbbr,
                'postcode' => $faker->postcode,
                'country' => 'US',
                'photo' => $faker->imageUrl($width = 640, $height = 480, 'nature'),
                'tel' => $faker->phoneNumber,
                'looking' => $faker->boolean($chanceOfGettingTrue = 80)

                // Work/skills related

            ]);
        }
    }
}

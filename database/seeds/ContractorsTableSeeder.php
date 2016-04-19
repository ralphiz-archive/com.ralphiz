<?php
use DB;
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
        foreach (range(1,10) as $index) {
            DB::table('contractors')->insert([
                'contractor_firstname' => $faker->name,
                'contractor_lastname' => $faker->name,
                'contractor_email' => $faker->email
            ]);
        }
    }
}

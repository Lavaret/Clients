<?php

use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Client;

class ClientSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();

        for($i = 0; $i < 100; $i++) {
            Client::create([
                'firstname' => $faker->firstname,
                'lastname' => $faker->lastname,
                'age' => $faker->randomNumber($nbDigits = 2, $strict = false)
            ]);
        }
    }
}

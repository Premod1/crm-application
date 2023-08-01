<?php

namespace Database\Seeders;

use App\Models\Client;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class ClientSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // $faker = Faker::create();
        // foreach (range(1,10) as $value) {
        //     DB::table('client')->insert([
        //         'name'=> $faker->name,
        //         'email'=> $faker->email,
        //         'phone' =>12345678,
        //         'description'=> $faker->sentence
        //     ]);
        // }
            Client::factory(20)->create();

    }
}


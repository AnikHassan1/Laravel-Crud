<?php

namespace Database\Seeders;

use DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use App\Models\about;
class aboutSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // DB::table('users')->insert([
        //     'name' => Str::random(10),
        //     'email' => Str::random(10).'@example.com',
        //     'password' => Hash::make('password'),
        // ]);
        // $data = [
        //     [
        //         "name" => str::random(10),
        //         "email" => str::random(10) . '@gmail.com',
        //         "address" => str::random(50),
        //     ],
        //     [
        //         "name" => str::random(10),
        //         "email" => str::random(10) . '@gmail.com',
        //         "address" => str::random(50),
        //     ],
        //     [
        //         "name" => str::random(10),
        //         "email" => str::random(10) . '@gmail.com',
        //         "address" => str::random(50),
        //     ],
        //     [
        //         "name" => str::random(10),
        //         "email" => str::random(10) . '@gmail.com',
        //         "address" => str::random(50),
        //     ],
        //     [
        //         "name" => str::random(10),
        //         "email" => str::random(10) . '@gmail.com',
        //         "address" => str::random(50),
        //     ],
        //     [
        //         "name" => str::random(10),
        //         "email" => str::random(10) . '@gmail.com',
        //         "address" => str::random(50),
        //     ],
        //     [
        //         "name" => str::random(10),
        //         "email" => str::random(10) . '@gmail.com',
        //         "address" => str::random(50),
        //     ],
        // ];
        // DB::table('about')->insert($data);
        about::factory()->count(20)->create();
    }
}

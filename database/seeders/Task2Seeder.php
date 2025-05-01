<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
class Task2Seeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
       DB::table("task2")->insert([
            "name"=>Str::random(10),
            "email"=>Str::random(20).'@gmail.com',
            "phone"=>Str::random(10),
            "address"=>Str::random(20),
            "city"=>Str::random(10),
       ]);
    }
}

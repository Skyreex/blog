<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table("articles")->insert([
            [
                "nom" => "Copag",
                "ville" => "Taroudant",
            ],
            [
                "nom" => "Central",
                "ville" => "Agadir",
            ],
            [
                "nom" => "Sidi Ali",
                "ville" => "Agadir",
            ],
        ]);
    }
}

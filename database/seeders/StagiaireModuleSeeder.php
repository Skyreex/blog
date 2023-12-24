<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class StagiaireModuleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'stagiaire_id' => 1,
                'module_id' => 1,
                'note' => 10,
                'date_exam' => '2021-01-01',
            ],
            [
                'stagiaire_id' => 1,
                'module_id' => 2,
                'note' => 10,
                'date_exam' => '2021-01-01',
            ],
            [
                'stagiaire_id' => 1,
                'module_id' => 3,
                'note' => 10,
                'date_exam' => '2021-01-01',
            ],
            [
                'stagiaire_id' => 1,
                'module_id' => 4,
                'note' => 10,
                'date_exam' => '2021-01-01',
            ],
            [
                'stagiaire_id' => 1,
                'module_id' => 5,
                'note' => 10,
                'date_exam' => '2021-01-01',
            ],
            [
                'stagiaire_id' => 1,
                'module_id' => 6,
                'note' => 10,
                'date_exam' => '2021-01-01',
            ],
            [
                'stagiaire_id' => 2,
                'module_id' => 1,
                'note' => 10,
                'date_exam' => '2021-01-01',
            ],
            [
                'stagiaire_id' => 2,
                'module_id' => 2,
                'note' => 10,
                'date_exam' => '2021-01-01',
            ],
            [
                'stagiaire_id' => 2,
                'module_id' => 3,
                'note' => 10,
                'date_exam' => '2021-01-01',
            ],
            [
                'stagiaire_id' => 2,
                'module_id' => 4,
                'note' => 10,
                'date_exam' => '2021-01-01',
            ],
        ];
        \App\Models\StagiaireModule::insert($data);
    }
}

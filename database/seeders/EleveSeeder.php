<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Eleve;

class EleveSeeder extends Seeder
{
    public function run(): void
    {
        $eleves = [
            ['nom' => 'Aicha Daoudi',    'note' => 19],
            ['nom' => 'Mohamed Rami',    'note' => 17],
            ['nom' => 'Mohammed Alaoui', 'note' => 16],
            ['nom' => 'Ahmed Benhani',   'note' => 15],
            ['nom' => 'Nissrin Tari',    'note' => 14],
            ['nom' => 'Samira Rhanjane', 'note' => 12],
            ['nom' => 'Aicha Siraj',     'note' => 10],
            ['nom' => 'Samira Hakim',    'note' => 10],
            ['nom' => 'Nouzha Alaoui',   'note' => 9],
            ['nom' => 'Sara Tari',       'note' => 7],
            ['nom' => 'Rachida Kziri',   'note' => 6],
        ];

        foreach ($eleves as $eleve) {
            Eleve::create($eleve);
        }
    }
}

<?php

namespace Database\Seeders;

use App\Models\Resto;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RestoSeeder extends Seeder
{

    public function run(): void
    {
        Resto::create([
            'name' => 'Hoki - Hoki Bento',
        ]);
        Resto::create([
            'name' => 'Nasi Bakar Mom Dira',
        ]);
        Resto::create([
            'name' => 'Kanting Elma',
        ]);
        Resto::create([
            'name' => 'Mie Yamin Bangka dan Bakso',
        ]);
    }
}

<?php

namespace Database\Seeders;

use App\Models\Item;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ItemSeeder extends Seeder
{
    public function run(): void
    {
        Item::create([
            'name' => 'Es Teh',
            'category' => 1,
            'price' => 3000,
            'description' => 'Teh premium buat anda nagih',
            'resto' => 1,
        ]);
        Item::create([
            'name' => 'Kopi Manis Legit',
            'category' => 1,
            'price' => 5000,
            'description' => 'Jagonya Kopi',
            'resto' => 2,
        ]);
        Item::create([
            'name' => 'Nasi Goreng Kencur',
            'category' => 2,
            'price' => 15000,
            'description' => 'Terbuat dari kencur asli',
            'resto' => 3,
        ]);
        Item::create([
            'name' => 'Ice Cream Original',
            'category' => 2,
            'price' => 7000,
            'description' => 'Manis Lho',
            'resto' => 4,
        ]);
    }
}

<?php

namespace Database\Seeders;

use App\Models\KategoriTipe;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;

class KategoriTipeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        KategoriTipe::truncate();
        $category = collect([
            'Rumah',
            'Villa',
            'Cafe',
            'Kantor',
            'Apartemen',
            'Restoran',
            'Ruang Serba Guna',
            'Lapangan Futsal',
        ]);

        $category->each(function($category){
            KategoriTipe::create([
                'title' => $category,
                'slug' => Str::slug($category),
            ]);
        });
    }
}

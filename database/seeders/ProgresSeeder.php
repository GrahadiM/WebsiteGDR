<?php

namespace Database\Seeders;

use App\Models\Progres;
use Illuminate\Database\Seeder;

class ProgresSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Progres::truncate();
        $progres = [
            [
                'title' => 'Lantai 1',
                'user_id' => 2,
                'pesanan_id' => 1,
                'image' => '1.jpg',
                'status' => 'active',
                'desc' => 'Progres hampir selesai',
            ],
            [
                'title' => 'Lantai 1',
                'user_id' => 2,
                'pesanan_id' => 2,
                'image' => '2.jpg',
                'status' => 'active',
                'desc' => 'Progres hampir selesai',
            ],
            [
                'title' => 'Lantai 1',
                'user_id' => 2,
                'pesanan_id' => 3,
                'image' => '3.jpg',
                'status' => 'active',
                'desc' => 'Progres hampir selesai',
            ],
            [
                'title' => 'Lantai 1',
                'user_id' => 2,
                'pesanan_id' => 4,
                'image' => '4.jpg',
                'status' => 'active',
                'desc' => 'Progres hampir selesai',
            ],
            [
                'title' => 'Lantai 1',
                'user_id' => 2,
                'pesanan_id' => 5,
                'image' => '5.jpg',
                'status' => 'active',
                'desc' => 'Progres hampir selesai',
            ],
            [
                'title' => 'Lantai 1',
                'user_id' => 2,
                'pesanan_id' => 6,
                'image' => '6.jpg',
                'status' => 'non-active',
                'desc' => 'Progres hampir selesai',
            ],
        ];
        
        foreach ($progres as $key => $value) {
            Progres::create($value);
        }
    }
}

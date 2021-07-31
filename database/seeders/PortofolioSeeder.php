<?php

namespace Database\Seeders;

use App\Models\Portofolio;
use Illuminate\Database\Seeder;

class PortofolioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Portofolio::truncate();
        $portofolio = [
            [
                'title' => 'Teras Rumah',
                'user_id' => 1,
                // 'tipe_id' => 3,
                'model_id' => 6,
                'job_id' => 1,
                'thumbnail' => '1.jpg',
                'building_area' => '150m2',
                'building_length' => '15m',
                'building_width' => '10m',
                'desc' => 'Buat desain yang Instagramable untuk tempat foto anak kekinian',
            ],
            [
                'title' => 'Teras Rumah',
                'user_id' => 1,
                // 'tipe_id' => 3,
                'model_id' => 6,
                'job_id' => 2,
                'thumbnail' => '2.jpg',
                'building_area' => '150m2',
                'building_length' => '15m',
                'building_width' => '10m',
                'desc' => 'Buat ruangan yang unik dengan gambar mural untuk tempat foto',
            ],
            [
                'title' => 'Rumah Dinas',
                'user_id' => 1,
                // 'tipe_id' => 1,
                'model_id' => 1,
                'job_id' => 1,
                'thumbnail' => '4.jpg',
                'building_area' => '150m2',
                'building_length' => '15m',
                'building_width' => '10m',
                'desc' => 'Rumah Dinas PNS',
            ],
            [
                'title' => 'Rumah Dinas',
                'user_id' => 1,
                // 'tipe_id' => 1,
                'model_id' => 1,
                'job_id' => 2,
                'thumbnail' => '5.jpg',
                'building_area' => '150m2',
                'building_length' => '15m',
                'building_width' => '10m',
                'desc' => 'Rumah Dinas PNS',
            ],
            [
                'title' => 'Rumah Modern Klasik',
                'user_id' => 1,
                // 'tipe_id' => 1,
                'model_id' => 1,
                'job_id' => 1,
                'thumbnail' => '4.jpg',
                'building_area' => '150m2',
                'building_length' => '15m',
                'building_width' => '10m',
                'desc' => 'Rumah Modern Klasik',
            ],
            [
                'title' => 'Rumah Modern Klasik',
                'user_id' => 1,
                // 'tipe_id' => 1,
                'model_id' => 1,
                'job_id' => 2,
                'thumbnail' => '5.jpg',
                'building_area' => '150m2',
                'building_length' => '15m',
                'building_width' => '10m',
                'desc' => 'Rumah Modern Klasik',
            ],
        ];
        
        foreach ($portofolio as $key => $value) {
            Portofolio::create($value);
        }
    }
}

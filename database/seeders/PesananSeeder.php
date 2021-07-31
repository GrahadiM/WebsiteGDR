<?php

namespace Database\Seeders;

use App\Models\Pesanan;
use Illuminate\Database\Seeder;

class PesananSeeder extends Seeder
{ 
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Pesanan::truncate();
        $pesanan = [
            [
                'user_id' => 3,
                // 'tipe_id' => 1,
                'model_id' => 1,
                'job_id' => 1,
                'building_area' => '3000m2',
                'building_length' => '100m2',
                'building_width' => '300m2',
                'package_type' => 'Paket Lengkap',
                'address' => 'Jl.Gading Raya 2, Kec.Pisangan Timur, Kel.Pulo Gadung, Jakarta Timur, DKI Jakarta',
            ],
            [
                'user_id' => 3,
                // 'tipe_id' => 1,
                'model_id' => 1,
                'job_id' => 2,
                'building_area' => '3000m2',
                'building_length' => '100m2',
                'building_width' => '300m2',
                'package_type' => 'Paket Pembangunan dari Awal',
                'address' => 'Jl.Gading Raya 2, Kec.Pisangan Timur, Kel.Pulo Gadung, Jakarta Timur, DKI Jakarta',
            ],
            [
                'user_id' => 3,
                // 'tipe_id' => 1,
                'model_id' => 2,
                'job_id' => 1,
                'building_area' => '3000m2',
                'building_length' => '100m2',
                'building_width' => '300m2',
                'package_type' => 'Paket Lengkap',
                'address' => 'Jl.Gading Raya 2, Kec.Pisangan Timur, Kel.Pulo Gadung, Jakarta Timur, DKI Jakarta',
            ],
            [
                'user_id' => 3,
                // 'tipe_id' => 1,
                'model_id' => 2,
                'job_id' => 2,
                'building_area' => '3000m2',
                'building_length' => '100m2',
                'building_width' => '300m2',
                'package_type' => 'Paket Pembangunan dari Awal',
                'address' => 'Jl.Gading Raya 2, Kec.Pisangan Timur, Kel.Pulo Gadung, Jakarta Timur, DKI Jakarta',
            ],
            [
                'user_id' => 3,
                // 'tipe_id' => 3,
                'model_id' => 6,
                'job_id' => 1,
                'building_area' => '3000m2',
                'building_length' => '100m2',
                'building_width' => '300m2',
                'package_type' => 'Paket Lengkap',
                'address' => 'Jl.Gading Raya 2, Kec.Pisangan Timur, Kel.Pulo Gadung, Jakarta Timur, DKI Jakarta',
            ],
            [
                'user_id' => 3,
                // 'tipe_id' => 3,
                'model_id' => 6,
                'job_id' => 2,
                'building_area' => '3000m2',
                'building_length' => '100m2',
                'building_width' => '300m2',
                'package_type' => 'Paket Pembangunan dari Awal',
                'address' => 'Jl.Gading Raya 2, Kec.Pisangan Timur, Kel.Pulo Gadung, Jakarta Timur, DKI Jakarta',
            ],
        ];
        
        foreach ($pesanan as $key => $value) {
            Pesanan::create($value);
        }
    }
}

<?php

namespace Database\Seeders;

use App\Models\Pembayaran;
use Illuminate\Database\Seeder;

class PembayaranSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Pembayaran::truncate();
        $pembayaran = [
            [
                'pesanan_id' => 1,
                'name' => 'Muhammad Dolar Permana',
                'phone' => '089518314169',
                'payment_amount' => '700.000',
                'image' => 'contoh_pembayaran.jpg',
                'status' => 'L',
                'created_at' => '2021-07-29 08:25:03',
            ],
        ];
        
        foreach ($pembayaran as $key => $value) {
            Pembayaran::create($value);
        }
    }
}

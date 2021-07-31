<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class SettingTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\Setting::create([
            'app_name'  => 'GDR Architect',
            'logo' => 'logo_default.png',
            'favicon'  => 'favicon.ico',
            'footer_right'  => 'Ver 1.0',
            'footer_left'  => 'Starter Web Laravel 8 & Admin LTE 3',
        ]);
    }
}

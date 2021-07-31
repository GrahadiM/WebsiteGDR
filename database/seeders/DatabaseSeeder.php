<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        $this->call(
            [
                SettingTableSeeder::class,
                RoleSeeder::class,
                StatusSeeder::class,
                UsersSeeder::class,
                KategoriTipeSeeder::class,
                KategoriModelSeeder::class,
                JobSeeder::class,
                PortofolioSeeder::class,
                PesananSeeder::class,
                ProgresSeeder::class,
                PembayaranSeeder::class,
            ]
        );
    }
}

<?php

namespace Database\Seeders;

use App\Models\KategoriModel;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;

class KategoriModelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        KategoriModel::truncate();
        $model = [
            // Tipe Rumah
            [
                'tipe_id' => 1,
                'title' => 'Minimalis',
                'slug' => 'minimalis',
            ],
            [
                'tipe_id' => 1,
                'title' => 'Klasik',
                'slug' => 'klasik',
            ],
            [
                'tipe_id' => 1,
                'title' => 'Skandinavia',
                'slug' => 'skandinavia',
            ],
            [
                'tipe_id' => 1,
                'title' => 'Industril',
                'slug' => 'industril',
            ],
            [
                'tipe_id' => 1,
                'title' => 'Tradisional',
                'slug' => 'tradisional',
            ],
            [
                'tipe_id' => 1,
                'title' => 'Modern',
                'slug' => 'modern',
            ],
            [
                'tipe_id' => 1,
                'title' => 'Asian',
                'slug' => 'asian',
            ],
            [
                'tipe_id' => 1,
                'title' => 'Kontemporer',
                'slug' => 'kontemporer',
            ],
            [
                'tipe_id' => 1,
                'title' => 'Tropical',
                'slug' => 'tropical',
            ],
            // Tipe Villa
            [
                'tipe_id' => 2,
                'title' => 'Minimalis',
                'slug' => 'minimalis',
            ],
            [
                'tipe_id' => 2,
                'title' => 'Klasik',
                'slug' => 'klasik',
            ],
            [
                'tipe_id' => 2,
                'title' => 'Skandinavia',
                'slug' => 'skandinavia',
            ],
            [
                'tipe_id' => 2,
                'title' => 'Industril',
                'slug' => 'industril',
            ],
            [
                'tipe_id' => 2,
                'title' => 'Tradisional',
                'slug' => 'tradisional',
            ],
            [
                'tipe_id' => 2,
                'title' => 'Modern',
                'slug' => 'modern',
            ],
            [
                'tipe_id' => 2,
                'title' => 'Asian',
                'slug' => 'asian',
            ],
            [
                'tipe_id' => 2,
                'title' => 'Kontemporer',
                'slug' => 'kontemporer',
            ],
            [
                'tipe_id' => 2,
                'title' => 'Tropical',
                'slug' => 'tropical',
            ],
            // Tipe Cafe
            [
                'tipe_id' => 3,
                'title' => 'Minimalis',
                'slug' => 'minimalis',
            ],
            [
                'tipe_id' => 3,
                'title' => 'Klasik',
                'slug' => 'klasik',
            ],
            [
                'tipe_id' => 3,
                'title' => 'Skandinavia',
                'slug' => 'skandinavia',
            ],
            [
                'tipe_id' => 3,
                'title' => 'Industril',
                'slug' => 'industril',
            ],
            [
                'tipe_id' => 3,
                'title' => 'Tradisional',
                'slug' => 'tradisional',
            ],
            [
                'tipe_id' => 3,
                'title' => 'Modern',
                'slug' => 'modern',
            ],
            [
                'tipe_id' => 3,
                'title' => 'Asian',
                'slug' => 'asian',
            ],
            [
                'tipe_id' => 3,
                'title' => 'Kontemporer',
                'slug' => 'kontemporer',
            ],
            [
                'tipe_id' => 3,
                'title' => 'Tropical',
                'slug' => 'tropical',
            ],
            // Tipe Kantor
            [
                'tipe_id' => 4,
                'title' => 'Minimalis',
                'slug' => 'minimalis',
            ],
            [
                'tipe_id' => 4,
                'title' => 'Klasik',
                'slug' => 'klasik',
            ],
            [
                'tipe_id' => 4,
                'title' => 'Skandinavia',
                'slug' => 'skandinavia',
            ],
            [
                'tipe_id' => 4,
                'title' => 'Industril',
                'slug' => 'industril',
            ],
            [
                'tipe_id' => 4,
                'title' => 'Tradisional',
                'slug' => 'tradisional',
            ],
            [
                'tipe_id' => 4,
                'title' => 'Modern',
                'slug' => 'modern',
            ],
            [
                'tipe_id' => 4,
                'title' => 'Asian',
                'slug' => 'asian',
            ],
            [
                'tipe_id' => 4,
                'title' => 'Kontemporer',
                'slug' => 'kontemporer',
            ],
            [
                'tipe_id' => 4,
                'title' => 'Tropical',
                'slug' => 'tropical',
            ],
            // Tipe Apartemen
            [
                'tipe_id' => 5,
                'title' => 'Minimalis',
                'slug' => 'minimalis',
            ],
            [
                'tipe_id' => 5,
                'title' => 'Klasik',
                'slug' => 'klasik',
            ],
            [
                'tipe_id' => 5,
                'title' => 'Skandinavia',
                'slug' => 'skandinavia',
            ],
            [
                'tipe_id' => 5,
                'title' => 'Industril',
                'slug' => 'industril',
            ],
            [
                'tipe_id' => 5,
                'title' => 'Tradisional',
                'slug' => 'tradisional',
            ],
            [
                'tipe_id' => 5,
                'title' => 'Modern',
                'slug' => 'modern',
            ],
            [
                'tipe_id' => 5,
                'title' => 'Asian',
                'slug' => 'asian',
            ],
            [
                'tipe_id' => 5,
                'title' => 'Kontemporer',
                'slug' => 'kontemporer',
            ],
            [
                'tipe_id' => 5,
                'title' => 'Tropical',
                'slug' => 'tropical',
            ],
            // Tipe Restoran
            [
                'tipe_id' => 6,
                'title' => 'Minimalis',
                'slug' => 'minimalis',
            ],
            [
                'tipe_id' => 6,
                'title' => 'Klasik',
                'slug' => 'klasik',
            ],
            [
                'tipe_id' => 6,
                'title' => 'Skandinavia',
                'slug' => 'skandinavia',
            ],
            [
                'tipe_id' => 6,
                'title' => 'Industril',
                'slug' => 'industril',
            ],
            [
                'tipe_id' => 6,
                'title' => 'Tradisional',
                'slug' => 'tradisional',
            ],
            [
                'tipe_id' => 6,
                'title' => 'Modern',
                'slug' => 'modern',
            ],
            [
                'tipe_id' => 6,
                'title' => 'Asian',
                'slug' => 'asian',
            ],
            [
                'tipe_id' => 6,
                'title' => 'Kontemporer',
                'slug' => 'kontemporer',
            ],
            [
                'tipe_id' => 6,
                'title' => 'Tropical',
                'slug' => 'tropical',
            ],
            // Tipe Ruang Serba Guna
            [
                'tipe_id' => 7,
                'title' => 'Minimalis',
                'slug' => 'minimalis',
            ],
            [
                'tipe_id' => 7,
                'title' => 'Klasik',
                'slug' => 'klasik',
            ],
            [
                'tipe_id' => 7,
                'title' => 'Skandinavia',
                'slug' => 'skandinavia',
            ],
            [
                'tipe_id' => 7,
                'title' => 'Industril',
                'slug' => 'industril',
            ],
            [
                'tipe_id' => 7,
                'title' => 'Tradisional',
                'slug' => 'tradisional',
            ],
            [
                'tipe_id' => 7,
                'title' => 'Modern',
                'slug' => 'modern',
            ],
            [
                'tipe_id' => 7,
                'title' => 'Asian',
                'slug' => 'asian',
            ],
            [
                'tipe_id' => 7,
                'title' => 'Kontemporer',
                'slug' => 'kontemporer',
            ],
            [
                'tipe_id' => 7,
                'title' => 'Tropical',
                'slug' => 'tropical',
            ],
            //Tipe Lapangan Futsal
            [
                'tipe_id' => 8,
                'title' => 'Klasik',
                'slug' => 'klasik',
            ],
            [
                'tipe_id' => 8,
                'title' => 'Tradisional',
                'slug' => 'tradisional',
            ],
            [
                'tipe_id' => 8,
                'title' => 'Modern',
                'slug' => 'modern',
            ],
        ];
        
        foreach ($model as $key => $value) {
            KategoriModel::create($value);
        }
    }
}

<?php

namespace Database\Seeders;

use App\Models\Job;
use Illuminate\Database\Seeder;

class JobSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Job::truncate();
        $job = [
            [
                'name' => 'Desain Bangunan',
            ],
            [
                'name' => 'Kontruksi Bangunan',
            ],
        ];
        
        foreach ($job as $key => $value) {
            Job::create($value);
        }
    }
}

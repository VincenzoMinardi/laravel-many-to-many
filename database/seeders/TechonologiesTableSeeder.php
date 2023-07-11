<?php

namespace Database\Seeders;

use App\Models\Technology;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TechnologiesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $technologies = [
            [
                'name'  => 'php',
            ],
            [
                'name'  => 'js',
            ],
            [
                'name'  => 'html',
            ],
            [
                'name'  => 'css',
            ],
            [
                'name'  => 'laravel',
            ],
            [
                'name'  => 'bootstrap',
            ],
            [
                'name'  => 'Vue.js',
            ],
        ];

        foreach ($technologies as $technology) {
            Technology::create($technology);
        }
    }
}

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
                'techonology'  => 'php',
            ],
            [
                'techonology'  => 'js',
            ],
            [
                'techonology'  => 'html',
            ],
            [
                'techonology'  => 'css',
            ],
            [
                'techonology'  => 'laravel',
            ],
            [
                'techonology'  => 'bootstrap',
            ],
            [
                'techonology'  => 'Vue.js',
            ],
        ];

        foreach ($technologies as $technology) {
            Technology::create($technology);
        }
    }
}

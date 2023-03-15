<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Technology;


class TechnologySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        
        $technologies = [
                ['label' => 'HTML', 'color' => '#E96228'],
                ['label' => 'CSS', 'color' => '#2862E8'],
                ['label' => 'JAVASCRIPT', 'color' => '#EFD81D'],
                ['label' => 'VUE', 'color' => '#33475B'],
                ['label' => 'BOOTSTRAP', 'color' => '#8210F5'],
                ['label' => 'SASS', 'color' => '#C76493'],
                ['label' => 'PHP', 'color' => '#7377AD'],
                ['label' => 'LARAVEL', 'color' => '#F72C1F'],
            ];

        foreach ($technologies as $tech) {
            $technology = new Technology();
            $technology->label = $tech['label'];
            $technology->color = $tech['color'];
            $technology->save();
        }
    }
}

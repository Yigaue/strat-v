<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RelativePermeabilitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $water_relative_permeabilty  = [0, 0.003, 0.008, 0.018, 0.035, 0.054, 0.08, 0.105, 0.14, 0.18];

        $oil_relative_permeability = [1, 0.68, 0.46, 0.32, 0.20, 0.124, 0.071, 0.038, 0.017, 0];

        $data = [];

        for ($i = 0; $i < count($oil_relative_permeability) &&
        count($water_relative_permeabilty); $i++) {
            $data[] = ['water' => $water_relative_permeabilty[$i],
            'oil' => $oil_relative_permeability[$i],
        'created_at' => now(), 'updated_at' => now()];
        }

        DB::table('relative_permeability')->insert($data);
    }
}

<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SaturationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $i = 0;
        $saturations = [];
        $initial_saturation = 0.2;

        while ($i < 10) {
            $initial_saturation = $initial_saturation + 0.05;
            $next_saturation = $initial_saturation;
            $next_saturation = round($next_saturation, 2);
            $saturations[] = $next_saturation;
            $i++;
        }

        $data = [];

        for ($i = 0; $i < count($saturations); $i++) {
            $insert = ['water' => $saturations[$i], 'created_at' => now(), 'updated_at' => now()];
            $data[] = $insert;
        }

        DB::table('saturation')->insert($data);
    }
}

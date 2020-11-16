<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PermeabilityRatio extends Controller
{
    /**
     * Calculation of permeabilty ratio using Dykstra parson method.
     *
     * @return array
     */
    public static function calculate()
    {
        $permeabilityArray = [9230, 5940, 3080, 2860, 2790, 2370, 1464,  594,  593,  526,  500, 366];

        /**
        * Each number in the array should take turns to divided it self and every other number in the array,
        * and a number can only divide itself or a number that has index greater than it.
        * E.g 9230 can divide itself and every other number. 3080 can not divide 5940, and 9230 but can divide
        * 2860, 2790, 2370, 1464,  594,  593,  526,  500, and 366.
        * Print result different set of arrays.
        */
        $data = [];

        for ($i = 0; $i < count($permeabilityArray); $i++ ) {
            $i_data = [];
            foreach ($permeabilityArray as $index => $permeability) {

                if ($i <= $index) {
                    $permeability_ratio =  $permeability / $permeabilityArray[$i];
                    array_push($i_data, $permeability_ratio);
                }
            }
            $data[] = $i_data;
        }

        return $data;
    }
}

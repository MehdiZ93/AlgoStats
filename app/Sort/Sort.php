<?php
/**
 * Created by PhpStorm.
 * User: Mehdi
 * Date: 11/01/2017
 * Time: 12:58
 */

namespace App\Sort;


class Sort
{
    public function Bubble($tab)
    {

    }

    public function Insertion($tab)
    {

    }

    public function Selection($tab)
    {
        $n = 0;
        $size = sizeof($tab);
        for ($i = 0; $i < $size; $i++) {
            $n++;
            for ($j = $i + 1; $j < $size; $j++) {
                if ($tab[$i] > $tab[$j]) {
                    $tmp = $tab[$i];
                    $tab[$i] = $tab[$j];
                    $tab[$j] = $tmp;
                }
            }
        }
        $array = array("tab" => $tab, 'cost' => $n);
        return $array;
    }
}
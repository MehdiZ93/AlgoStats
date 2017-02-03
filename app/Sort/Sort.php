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
        $size = count($tab);
        $n = 0;
        for($i = 0; $i < $size; $i++) {
            for($j = 0; $j < $size - $i - 1; $j++) {
                if($tab[$j + 1] < $tab[$j]) {
                    $temp = $tab[$j];
                    $tab[$j] = $tab[$j + 1];
                    $tab[$j + 1] = $temp;
                    $n++;
                }
            }
        }
        $array = array("tab" => $tab, "cost" => $n);
        return $array;
    }

    public function Insertion($tab)
    {
        $n = 0;
        for ($i = 0; $i < sizeof($tab); $i++){
            $j = $i;
            while ($i > 0 && $tab[$i] < $tab[$i - 1]){
                $n++;
                $tmp = $tab[$i];
                $tab[$i] = $tab[$i - 1];
                $tab[$i - 1] = $tmp;
                $i--;
            }
            $i = $j;
        }
        $array = array("tab" => $tab, 'cost' => $n);
        return $array;
    }

    public function Selection($tab)
    {
        $n = 0;
        $size = sizeof($tab);
        for ($i = 0; $i < $size; $i++) {
            for ($j = $i + 1; $j < $size; $j++) {
                if ($tab[$i] > $tab[$j]) {
                    $tmp = $tab[$i];
                    $tab[$i] = $tab[$j];
                    $tab[$j] = $tmp;
                    $n++;
                }
            }
        }
        $array = array("tab" => $tab, 'cost' => $n);
        return $array;
    }
}
<?php
/**
 * Created by PhpStorm.
 * User: Mehdi
 * Date: 11/01/2017
 * Time: 14:23
 */

namespace App;


class Tab
{
    private static function revTab($nb){
        $tab = range(1, $nb);
        $tab = array_reverse($tab);
        return $tab;
    }

    private static function random($nb){
       $tab = range(1, $nb);
        shuffle($tab);
        return $tab;
    }

    private static function fewUnique($nb){
        $tab = array();

       for ($i = 0; $i < $nb; $i++){
            $tab[$i] = rand(0, ($nb * 40 / 100));
        }
        return $tab;
    }

    private static function nearlySorted($nb){
        $tab = array();
        $j = 1;

        for ($i = 0; $i < $nb; $i++){
            $tab[$i] = $i;
            if ($j == 5){
                $j = rand(0, 4);
                while (($k = rand(0, 4)) == $j);
                $tmp = $tab[$i - $j];
                $tab[$i - $j] = $tab[$i - $k];
                $tab[$i - $k] = $tmp;
                $j = 1;
            }
            $j++;
        }
        return $tab;
    }

    public static function getTab($nb, $state = null){
        $tab = array();

        if ($state == null){
            $tab = range(1, $nb);
        }
        else{
            switch ($state){
                case "reverse":
                    $tab = self::revTab($nb);
                    break;
                case "random":
                    $tab = self::random($nb);
                    break;
                case "fewUnique":
                    $tab = self::fewUnique($nb);
                    break;
                case "nearlySorted":
                    $tab = self::nearlySorted($nb);
            }
        }
        return ($tab);
    }
}
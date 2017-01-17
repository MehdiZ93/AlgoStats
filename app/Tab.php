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
    public $tab;
    
    public function __construct()
    {
        $this->tab['sort'][0] = $this->getTab(10);
        $this->tab['sort'][1] = $this->getTab(100);
        $this->tab['sort'][2] = $this->getTab(1000);
        $this->tab['sort'][3] = $this->getTab(10000);
        $this->tab['rev'][0] = $this->getTab(10, 'reverse');
        $this->tab['rev'][1] = $this->getTab(100, 'reverse');
        $this->tab['rev'][2] = $this->getTab(1000, 'reverse');
        $this->tab['rev'][3] = $this->getTab(10000, 'reverse');
        $this->tab['nearly'][0] = $this->getTab(10, 'nearlySorted');
        $this->tab['nearly'][1] = $this->getTab(100,'nearlySorted');
        $this->tab['nearly'][2] = $this->getTab(1000, 'nearlySorted');
        $this->tab['nearly'][3] = $this->getTab(10000, 'nearlySorted');
        $this->tab['rand'][0] = $this->getTab(10, 'random');
        $this->tab['rand'][1] = $this->getTab(100,'random');
        $this->tab['rand'][2] = $this->getTab(1000, 'random');
        $this->tab['rand'][3] = $this->getTab(10000, 'random');
        $this->tab['unique'][0] = $this->getTab(10, 'fewUnique');
        $this->tab['unique'][1] = $this->getTab(100,'fewUnique');
        $this->tab['unique'][2] = $this->getTab(1000, 'fewUnique');
        $this->tab['unique'][3] = $this->getTab(10000, 'fewUnique');
    }

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
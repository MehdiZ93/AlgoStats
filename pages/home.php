<?php
use App\Sort\Sort;
use App\Tab;


$sort = new Sort();

var_dump($sort->Selection(Tab::getTab(10)));
Tab::getTab(10,'reverse');
Tab::getTab(10,'nearlySorted');
Tab::getTab(10,'random');
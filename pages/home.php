<?php
use App\Sort\Sort;
use App\Tab;


$sort = new Sort();

var_dump($sort->Selection(Tab::getTab(10)));
var_dump($sort->Selection(Tab::getTab(10,'reverse')));
var_dump($sort->Selection(Tab::getTab(10,'nearlySorted')));
var_dump($sort->Selection(Tab::getTab(10,'random')));

var_dump($sort->Bubble(Tab::getTab(10)));
var_dump($sort->Bubble(Tab::getTab(10,'reverse')));
var_dump($sort->Bubble(Tab::getTab(10,'nearlySorted')));
var_dump($sort->Bubble(Tab::getTab(10,'random')));
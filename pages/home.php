<?php
use App\Sort\Sort;
use App\Tab;

$sort = new Sort();
$tab = new Tab();
/*$cost['sort']['bubble'][0] = $sort->Bubble($tab->tab['sort'][0]);
$cost['sort']['bubble'][1] = $sort->Bubble($tab->tab['sort'][1]);
$cost['sort']['bubble'][2] = $sort->Bubble($tab->tab['sort'][2]);
$cost['sort']['bubble'][3] = $sort->Bubble($tab->tab['sort'][3]);
$cost['sort']['insertion'][0] = $sort->Insertion($tab->tab['sort'][0]);
$cost['sort']['insertion'][1] = $sort->Insertion($tab->tab['sort'][1]);
$cost['sort']['insertion'][2] = $sort->Insertion($tab->tab['sort'][2]);
$cost['sort']['insertion'][3] = $sort->Insertion($tab->tab['sort'][3]);
$cost['sort']['Selection'][0] = $sort->Selection($tab->tab['sort'][0]);
$cost['sort']['Selection'][1] = $sort->Selection($tab->tab['sort'][1]);
$cost['sort']['Selection'][2] = $sort->Selection($tab->tab['sort'][2]);
$cost['sort']['Selection'][3] = $sort->Selection($tab->tab['sort'][3]);
$cost['nearly']['bubble'][0] = $sort->Bubble($tab->tab['nearly'][0]);
$cost['nearly']['bubble'][1] = $sort->Bubble($tab->tab['nearly'][1]);
$cost['nearly']['bubble'][2] = $sort->Bubble($tab->tab['nearly'][2]);
$cost['nearly']['bubble'][3] = $sort->Bubble($tab->tab['nearly'][3]);
$cost['nearly']['insertion'][0] = $sort->Insertion($tab->tab['nearly'][0]);
$cost['nearly']['insertion'][1] = $sort->Insertion($tab->tab['nearly'][1]);
$cost['nearly']['insertion'][2] = $sort->Insertion($tab->tab['nearly'][2]);
$cost['nearly']['insertion'][3] = $sort->Insertion($tab->tab['nearly'][3]);
$cost['nearly']['Selection'][0] = $sort->Selection($tab->tab['nearly'][0]);
$cost['nearly']['Selection'][1] = $sort->Selection($tab->tab['nearly'][1]);
$cost['nearly']['Selection'][2] = $sort->Selection($tab->tab['nearly'][2]);
$cost['nearly']['Selection'][3] = $sort->Selection($tab->tab['nearly'][3]);
$cost['rand']['bubble'][0] = $sort->Bubble($tab->tab['rand'][0]);
$cost['rand']['bubble'][1] = $sort->Bubble($tab->tab['rand'][1]);
$cost['rand']['bubble'][2] = $sort->Bubble($tab->tab['rand'][2]);
$cost['rand']['bubble'][3] = $sort->Bubble($tab->tab['rand'][3]);
$cost['rand']['insertion'][0] = $sort->Insertion($tab->tab['rand'][0]);
$cost['rand']['insertion'][1] = $sort->Insertion($tab->tab['rand'][1]);
$cost['rand']['insertion'][2] = $sort->Insertion($tab->tab['rand'][2]);
$cost['rand']['insertion'][3] = $sort->Insertion($tab->tab['rand'][3]);
$cost['rand']['Selection'][0] = $sort->Selection($tab->tab['rand'][0]);
$cost['rand']['Selection'][1] = $sort->Selection($tab->tab['rand'][1]);
$cost['rand']['Selection'][2] = $sort->Selection($tab->tab['rand'][2]);
$cost['rand']['Selection'][3] = $sort->Selection($tab->tab['rand'][3]);
$cost['unique']['bubble'][0] = $sort->Bubble($tab->tab['unique'][0]);
$cost['unique']['bubble'][1] = $sort->Bubble($tab->tab['unique'][1]);
$cost['unique']['bubble'][2] = $sort->Bubble($tab->tab['unique'][2]);
$cost['unique']['bubble'][3] = $sort->Bubble($tab->tab['unique'][3]);
$cost['unique']['insertion'][0] = $sort->Insertion($tab->tab['unique'][0]);
$cost['unique']['insertion'][1] = $sort->Insertion($tab->tab['unique'][1]);
$cost['unique']['insertion'][2] = $sort->Insertion($tab->tab['unique'][2]);
$cost['unique']['insertion'][3] = $sort->Insertion($tab->tab['unique'][3]);
$cost['unique']['Selection'][0] = $sort->Selection($tab->tab['unique'][0]);
$cost['unique']['Selection'][1] = $sort->Selection($tab->tab['unique'][1]);
$cost['unique']['Selection'][2] = $sort->Selection($tab->tab['unique'][2]);
$cost['unique']['Selection'][3] = $sort->Selection($tab->tab['unique'][3]);
$cost['rev']['bubble'][0] = $sort->Bubble($tab->tab['rev'][0]);
$cost['rev']['bubble'][1] = $sort->Bubble($tab->tab['rev'][1]);
$cost['rev']['bubble'][2] = $sort->Bubble($tab->tab['rev'][2]);
$cost['rev']['bubble'][3] = $sort->Bubble($tab->tab['rev'][3]);
$cost['rev']['insertion'][0] = $sort->Insertion($tab->tab['rev'][0]);
$cost['rev']['insertion'][1] = $sort->Insertion($tab->tab['rev'][1]);
$cost['rev']['insertion'][2] = $sort->Insertion($tab->tab['rev'][2]);
$cost['rev']['insertion'][3] = $sort->Insertion($tab->tab['rev'][3]);
$cost['rev']['Selection'][0] = $sort->Selection($tab->tab['rev'][0]);
$cost['rev']['Selection'][1] = $sort->Selection($tab->tab['rev'][1]);
$cost['rev']['Selection'][2] = $sort->Selection($tab->tab['rev'][2]);
$cost['rev']['Selection'][3] = $sort->Selection($tab->tab['rev'][3]);*/
//var_dump($cost['rev']['Selection']);
?>
<div class="container">
    <div class="row">
        <div class="col-sm-4">
            <div class="form-group">
                <label for="sort" class="form-check-label">Types de tri :
                    <input type="checkbox" class="form-check-input" name="bubble" value="bubble"> Bulle
                    <input type="checkbox" class="form-check-input" name="insertion" value="insertion"> Insertion
                    <input type="checkbox" class="form-check-input" name="selection" value="selection"> Selection
                </label>
            </div>
            <div class="form-group">
                <input type="button" name="valid" value="Valider">
            </div>
        </div>
        <div class="col-sm-8">
            <canvas id="graph" width="200" height="200">

            </canvas>
        </div>
    </div>
</div>
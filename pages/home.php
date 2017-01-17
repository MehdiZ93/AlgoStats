<?php
use App\Sort\Sort;
use App\Tab;


$sort = new Sort();
$tab = new Tab();
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
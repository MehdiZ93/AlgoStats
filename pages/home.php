<?php
use App\Sort\Sort;
use App\Tab;


$sort = new Sort();
$tab = new Tab();
?>
<div class="container">
    <div class="row">
        <div class="col-sm-4">
            <form method="post" action="../public/index.php">
                <div class="form-group">
                    Type de tri :
                    <input type="checkbox" name="Bubble"> Bulle
                    <input type="checkbox" name="Insertion"> Insertion
                    <input type="checkbox" name="Selection"> Selection
                </div>
                <div class="form-group">
                    Nombre d'elements :
                    <input type="radio" name="nb" value="0" >10
                    <input type="radio" name="nb" value="1" >100
                    <input type="radio" name="nb" value="2" >1000
                    <input type="radio" name="nb" value="3" >10000
                </div>
                <div class="form-group">
                    Type de tableau :
                    <input type="radio" name="sort" value="sort"> Trié
                    <input type="radio" name="sort" value="rev"> Inversé
                    <input type="radio" name="sort" value="rand"> Aléatoire
                    <input type="radio" name="sort" value="unique"> Peu d'unique
                    <input type="radio" name="sort" value="nearly"> Presque trié
                </div>
                <div class="form-group">
                    <input type="submit">
                </div>
            </form>
        </div>
        <div class="col-sm-8">
            <?php
                if (isset($_POST['sort']) && isset($_POST['nb']))
                {
                    if (isset($_POST['Bubble'])) {
                        $array_name[] = "Bulle";
                        $array[] = $sort->Bubble($tab->tab[$_POST['sort']][$_POST['nb']])['cost'];
                    }
                    if (isset($_POST['Insertion'])) {
                        $array_name[] = "Insertion";
                        $array[] = $sort->Insertion($tab->tab[$_POST['sort']][$_POST['nb']])['cost'];
                    }
                    if (isset($_POST['Selection'])) {
                        $array_name[] = "Selection";
                        $array[] = $sort->Selection($tab->tab[$_POST['sort']][$_POST['nb']])['cost'];
                    }
                    if (isset($array))
                    {
                        echo "<table class='table-bordered'><tr>";
                        foreach ($array_name as $name)
                            echo "<td>".$name."</td>";
                        echo "</tr><tr>";
                        foreach ($array as $val)
                            echo "<td>".$val."</td>";
                        echo "</tr></form>";
                    }
                }
            ?>
        </div>
    </div>
</div>

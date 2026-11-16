<?php
function calculerPrixLocation(int $j, float $t): float
{
    $Total =$jours * $tarifjournalier;
    if($j>7){
        $total=$Total*0.85;
    }
    return $Total;
}
?>
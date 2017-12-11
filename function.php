<?php

function pl($tab)
{
    $n=count($tab);
    $pln = strlen($tab[0]);
    for ($i = 0 ; $i < $n ; $i++){
        if (strlen($tab[$i])>$pln){
            $pln=strlen($tab[$i]);
        }
    } 
    return $pln;
}
function moy($tab)
{
    $s=$tab[0];
    $p=count($tab);
    for ($i = 1 ; $i < $p ; $i++){
        $s=$s+$tab[$i];
    }
       $mo=$s/$p;
    return $mo;
}
$tab=array('nom'=>array("ahmadou","lindor","ndiaye"),'age'=>array(12,06,93));
echo moy($tab['age'])."<br>";
echo pl($tab['nom']);
               
?> 
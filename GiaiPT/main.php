<?php 
    require('./PTBac2.php');
    $ptbac1 = new PTBac1(1,2);
    echo "Phuong trinh bac 1: ". $ptbac1->solve() . "</br>";

    $ptbac2 = new PTBac2(2,-7,3);
    echo "Phuong trinh bac 2: ".  $ptbac2->solve();
?>
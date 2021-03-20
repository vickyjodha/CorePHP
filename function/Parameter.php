<?php
//  Pramete Same($a,$b)
//  Argument Same(3,4);
function Same($a,$b){//Paramete
   $sum = $a+$b;
    echo $sum;

}
// Same(3,4); // Argemnet 



// default 

function Mult($a,$b=5){ // default Value $b=5
    $multpue = $a*$b;
    echo $multpue;
}
Mult(6);
?>
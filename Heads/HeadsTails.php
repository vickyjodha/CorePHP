<?php
$heads=0;
$teils =0;

for($i=1;$i<=100;$i++){
    $ran = rand(1,2);
if($ran==1){
    $heads++;
    echo '<h1> You are Win '.$ran.'😁</h1>';
}else{
    $teils++;
    echo '<h1> You are loss '.$ran.'🙄</h1>';
}
}
echo '<h1>There Were '.$heads.' Heads and '.$teils.' Tails </h1>';
if($heads>$teils){
    echo '<h1> Heads You Win </h1>';
}elseif($heads<$teils){
    echo '<h1> Teils You Win </h1>';
}else{
    echo '<h1> Please Retrue </h1>';
}
?>
<?php


for($i=1;$i<=16;$i++){
    if(($i%3==0) && ($i%5==0)){
        echo "Fizz Buzz </br>";
    }elseif($i%3==0){
        echo "Fizz  </br>";
    }elseif($i%5==0){
        echo "Buzz </br>";
    }else{
        echo $i.'</br>';
    }
}

?>
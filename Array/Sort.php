<?php
$name  =array("Vikram Singh","Ajay Pal","Ajit singh","Amit");
// Sort for array 
// sort($name);

// reverse shorting 
rsort($name);

// array_reverse($name);
foreach($name as $nn){
    echo '<h1>'.$nn.'</h1>';
}
?>
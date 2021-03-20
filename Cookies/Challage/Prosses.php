<?php

$name= $_POST['name'];
$age=$_POST['age'];
$degree=$_POST['degree'];
setcookie('name',$name,time()+10);
setcookie('age',$age,time()+10);
setcookie('degree',$degree,time()+10);
header('location:Display.php');

?>
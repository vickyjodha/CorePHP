<?php
session_start();
if(isset($_SESSION['Username'])){
echo $_SESSION['Username'].'</br>';
echo $_SESSION['age'].'</br>';}
elseif(isset($_SESSION['age'])){
    echo "age not destroy session";
}
else{
    echo "no user name is set";
}
?>
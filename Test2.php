<?php

$b=100;
echo $_GET['subject'];

//La cantidad debe ser mayor a 100
if (($_GET['subject']) < $b) {
   echo "Amount has to be greather than 100€</br>";
}else {
   echo "Amount control correct, minimum amount reached</br>";
}



?>

<?php

echo $_GET['name'];

$str = $_GET['name'];
echo str_word_count($str);

if(empty($_GET['name'])){
  echo "Vacio</br>";
}elseif (str_word_count($str) == 2) {
  echo "Dos palabras</br>";
}else{
  echo "Mal</br>";
}

?>

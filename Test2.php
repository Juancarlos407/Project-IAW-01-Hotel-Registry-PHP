<?php

echo $_POST['name'];

$str = $_POST['name'];
echo str_word_count($str);

if(empty($_POST['name'])){
  echo "Vacio</br>";
}elseif (str_word_count($str) == 2) {
  echo "Dos palabras</br>";
}else{
  echo "Mal</br>";
}

?>

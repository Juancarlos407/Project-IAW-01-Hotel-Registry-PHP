<?php

    // definicion de variables
    $name=$_POST['name'];
    $surname=$_POST['surname'];
    $age=$_POST['age'];
    $email=$_POST['email'];
    $country=$_POST['country'];
    $gender=['gender'];
    // Pendienetes de trabajo
    $amount=['amount'];
    $checkin=['checkin'];
    $checkout=['checkout'];
    $room=['room'];

        if(empty($name)){
        	echo "Name is compulsory, please fill it correctly</br>";
        }else{
        	echo "Name control correct: $name </br>";
        }
        if(empty($surname)){
          echo "Surname is compulsory, please fill it correctly</br>";
        }else{
          echo "Surname control correct: $surname </br>";
        }
        if(empty($age)){
          echo "Age is compulsory, please fill it correctly</br>";
        }else{
          echo "Age control correct: $age </br>";
        }
        if(empty($email)){
          echo "Email is compulsory, please fill it correctly</br>";
        }else{
          echo "Email control correct: $email </br>";
        }
        if(empty($country)){
          echo "Country is compulsory, please fill it correctly</br>";
        }else{
          echo "Country control correct: $country </br>";
        }
        if (empty($_POST["gender"])) {
           echo "Gender is compulsory, please choose one</br>";
        }else {
           echo "Gender control correct, welcome to our hotel</br>";
        }


?>

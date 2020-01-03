<?php

    // definicion de variables
    $name=$_POST['name'];
    $surname=$_POST['surname'];
    $age=$_POST['age'];
    $email=$_POST['email'];
    $country=$_POST['country'];
    $gender=['gender'];
    $room=['room'];
    $b=100;

    // Pendienetes de trabajo
    $checkin=['checkin'];
    $checkout = isset($_POST['checkout']) ? $_POST['checkout'] : '';


        if(empty($name)){
        	echo "Name is compulsory, please fill it correctly</br>";
        }elseif (str_word_count($surname,0) == 2) {
          echo "dos palabras";
        }else{
        	echo "Name control correct: $name </br>";
        }

    // Pendienetes de trabajo
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
        if (empty($_POST["room"])) {
           echo "Room is compulsory, please choose one</br>";
        }else {
           echo "Room control correct, good choice</br>";
        }

        //Checking no funciona bien
        if (empty($_POST["checkin"])) {
           echo "checkin is compulsory, please choose one</br>";
        }else {
           echo "checkin control correct, good choice</br>";
        }

        if(empty($checkout)) {
          echo "checkout is compulsory, please choose one</br>";
        }elseif ($checkin > $checkout) {
          echo "Departure date must be greater than arrival date</br>";
        }else {
          echo "checkin control correct, good choice</br>";
        }

        //La cantidad debe ser mayor a 100
        if (($_POST['subject']) < $b) {
           echo "Amount has to be greather than 100€</br>";
        }else {
           echo "Amount control correct, minimum amount reached</br>";
        }



?>

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
    $str = $_POST['surname'];
    $subject = $_POST['subject'];
    $date=['date'];
    $dateout=['dateout'];
    $hoy=['hoy'];
    $today=date("Y/m/d");


        if(empty($name)){
        	echo "Name is compulsory, please fill it correctly</br>";
        }else{
        	echo "Name control correct: $name </br>";
        }
        // Deben introducirse dos nombres en el mismo campo
        if(empty($_POST['surname'])){
          echo "Surnames is compulsory, please fill it correctly</br></p>";
        }elseif (str_word_count($str) == 2) {
          echo "Surnames control correct: $surname </br></p>";
        }else{
          echo "Surnames needs two words, please fill it correctly</br></p>";
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
          echo "Country is compulsory, please fill it correctly</br></p>";
        }else{
          echo "Country control correct: $country </br></p>";
        }
        if (empty($_POST["gender"])) {
           echo "Gender is compulsory, please choose one</br>";
        }else {
           echo "Gender control correct, welcome to our hotel</br>";
        }
        if (empty($_POST["room"])) {
           echo "Room is compulsory, please choose one</br></p>";
        }else {
           echo "Room control correct, good choice</br></p>";
        }
        //La cantidad debe ser mayor a 100
        if (($_POST['subject']) < $b) {
           echo "Amount has to be greather than 100€</br></p>";
        }else {
           echo "Amount control correct, minimum amount reached</br>";
           echo "Deposit in € $subject</br>";
           echo "Deposit in £".(($_POST['subject'])*1.17);
           echo "</br></p>";
        }

        if (empty($_POST["date"])){echo "checkin is compulsory</br>";}
        elseif ( ($_POST["hoy"]) > ($_POST["date"]) ) {echo "Arrival should be after current date</br>";}
        else {echo "checkin control correct</br>";}
        echo "</p>";
        echo $_POST['date'];
        echo "</p>";

        if (empty($_POST["dateout"])){echo "checkout is compulsory</br>";}
        elseif ( ($_POST["date"]) > ($_POST["dateout"]) ) {echo "Departure should be after arrival date</br>";}
        else {echo "checkout control correct</br>";}
        echo "</p>";
        echo $_POST['dateout'];

?>

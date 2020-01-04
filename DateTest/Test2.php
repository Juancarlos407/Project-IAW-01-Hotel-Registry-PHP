<?php

$date=['date'];
$dateout=['dateout'];
$hoy=['hoy'];
$today=date("Y/m/d");
echo "</p>";
echo "Today is " . date("Y/m/d") . "<br>";
echo "</p>";

// falta comparar today con date
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

echo "</p>";
echo $_POST['n'];
echo "</p>";
echo $today;


?>

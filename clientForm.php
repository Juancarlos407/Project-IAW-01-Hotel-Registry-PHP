<html>

<head>
      <meta charset="UTF-8"> <!--definimos la codificación de la página-->
      <meta name="Description" content="Author: Juan Carlos Ureña Fandos, Category: Hotels"> <!--descripción de la página para el buscador-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Balearic Hotel Fandos Hotel</title>
</head>

<body>
			<h1>
			Balearic Hotel Fandos Hotel *****
			</h1>

			<h1>
			Register to become a client
			</h1>

		  <form action="formValidation.php" method="POST"> <!--Utilizamos POST para ocultar los datos en la URL-->

      <br>
			<label for="name">Name</label>
			<br>
			<input type="text" name="name">

			<br>
			<label for="surname">Surnames</label>
			<br>
			<input type="text" name="surname" id="surname">

			<br>
			<label for="age">Age</label>
			<br>
			<input type="number" name="age" id="age" min="1">

			<br>
			<label for="email">Email</label>
			<br>
			<input type="text" name="email">

			<br>
			<label for="country">Country</label>
			<br>
			<input type="text" name="country">

		  <br>
			<label for="amount">Amount</label>
			<br>
      <input type="number" name="subject" id="subject" min="1">
			<br>
			<p>

			<label for="checkin">Check in</label>
			<br>
			<input type="date" name="date" id="date">

			<br>

			<label for="checkout">Check out</label>
			<br>
			<input type="date" name="dateout" id="dateout">

			<br>
			<p>
			<label for="gender">Gender</label>
			<br>
      <input type = "radio" name = "gender" value = "female">Female
      <input type = "radio" name = "gender" value = "male">Male
			</select>

			<br>
			<label for="room">Room</label>
			<br>
			<select name="room" multiple>
			<option value="single">Single</option>
			<option value="double">Double</option>
			<option value="kingsize">King Size</option>
			<option value="triple">Triple</option>
			<option value="quadruple">Quadruple</option>
			</select>

			<br>
			<p>
			<label for="policy">*I accept the <a href="dataPolicy.php">data protection policy</a></label>
			<input type="checkbox" name="policy" required>
			<input type="submit" value="submit">

      <input type='hidden' name="hoy" id='hoy' value='<?php echo date('Y-m-d');?>'>

</form>
</body>
</html>

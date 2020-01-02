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

		        <form action="formValidation.php" method="POST">
			<br>
			<label for="name">Name&nbsp&nbsp</label>
			<br>
			<input type="text" name="name">

			<br>
			<label for="surname">Surname</label>
			<br>
			<input type="text" name="surname">

			<br>
			<label for="age">Age</label>
			<br>
			<input type"integer" name="age" min="1" max="99">

			<br>
			<label for="email">Email</label>
			<br>
			<input type="text" name="email">

			<br>
			<label for="country">Country</label>
			<br>
			<input type="text" name="country">

		        <br>
			<label for="deposit">Deposit</label>
			<br>
			<input type="number" id"€" name"deposit" min="10" max="1000">

			<br>
			<p>
			<label for="checkin">Check in</label>
			<br>
			<input type="date" id="chekin" name"chekin" value="2020-01-01"
			min="2020-01-01" max"2020-12-31" required>

			<br>
			<label for="checkout">Check out</label>
			<br>
			<input type="date" id="checkout" name"checkout" value="2020-01-02"
			min="2020-01-02" max"2020-12-31">

			<br>
			<p>
			<label for="gender">Gender</label>
			<br>
			<select name="gender" multiple>
			<option value="male">Male</option>
			<option value="female">Female</option>
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
			<label for="policy">*I accept the <a href="www.https://github.com/Juancarlos407/Projecte-IAW-01-Hotel-Registry-PHP">data protection policy</a></label>
			<input type="checkbox" name="policy" required>
			<input type="submit" value="submit">

</form>
</body>
</html>

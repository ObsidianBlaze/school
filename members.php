<?php include 'header.php'; ?>

<body>
	<div class="container">
		<div class="row">

			<!-- Changed the action of the form from login.php to insert.php -->
			<form action="insert.php" method="post">
				<label for="firstname">Firstname:</label>
				<input type="text" name="firstname"><br>
				<label for="lastname">Lastname:</label>
				<input type="text" name="lastname"><br>
				<label for="phone">Phone number:</label>
				<input type="text" name="phone"><br>
				<label for="email">E-mail:</label>
				<input type="text" name="email"><br>
				<label for="password">Password:</label>
				<input type="password" name="password"><br>
				<button type="submit">Submit</button>
			</form>

		</div>

	</div>
</body>

</html>

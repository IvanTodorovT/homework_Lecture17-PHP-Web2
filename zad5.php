<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>zad5</title>
<style type="text/css">
label {
	display: block;
}
</style>
</head>
<body>
	<form action="" method="get">
		<div>
			<label for="first-name">Enter your first name:</label> <input
				type="text" id="first-name" name="name">
		</div>

		<div>
			<label for="age">Enter your age:</label> <input type="text" id="age"
				name="age">
		</div>
		<div>
			<button type="submit">GET</button>
		</div>
	</form>

	<form action="" method="post">
		<div>
			<label for="username">Username:</label> <input type="text"
				name="username" id="username" />
		</div>
		<div>
			<label for="password">Password:</label> <input type="password"
				name="password" id="password" />
		</div>
		<button type="submit">POST</button>
		<br> <br>
	</form>

</body>
    
    <?php
				if (! empty ( $_POST )) {
					echo "POST REQUESTS  :", PHP_EOL;
					print_r ( $_POST );
					
					$name = strlen ( $_POST ['username'] );
					$pass = strlen ( $_POST ['password'] );
					
					if (is_numeric ( $_POST ['username'] )) {
						echo "Type of name-> Interger;  ";
					}
					if (! is_numeric ( $_POST ['username'] )) {
						echo "Type of name: String;  ";
					}
					
					if (is_numeric ( $_POST ['password'] )) {
						echo "Type of password: Interger;  ";
					}
					if (! is_numeric ( $_POST ['password'] )) {
						echo "Type of password: String;  ";
					}
					
					echo " Length of username: $name;";
					echo " Length of password: $pass;<br/>";
				}
				
				if (! empty ( $_GET )) {
					
					echo "GET REQUESTS  :", PHP_EOL;
					print_r ( $_GET );
					
					$name = strlen ( $_GET ['name'] );
					$age = strlen ( $_GET ['age'] );
					
					if (is_numeric ( $_GET ['name'] )) {
						echo "Type of name-> Interger;  ";
					}
					if (! is_numeric ( $_GET ['name'] )) {
						echo "Type of name: String;  ";
					}
					
					if (is_numeric ( $_GET ['age'] )) {
						echo "Type of password: Interger;  ";
					}
					if (! is_numeric ( $_GET ['age'] )) {
						echo "Type of password: String;  ";
					}
					
					echo " Length of name: $name;";
					echo " Length of age: $age;";
				}
				
				?>
</html>
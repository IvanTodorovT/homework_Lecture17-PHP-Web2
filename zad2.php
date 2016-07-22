<?php
session_start ();
$errors = [ ];
if (! empty ( $_POST )) {
	
	$name = isset ( $_POST ['name'] ) ? $_POST ['name'] : '';
	$firstPassword = isset ( $_POST ['firstPassword'] ) ? $_POST ['firstPassword'] : '';
	$secondPassword= isset ( $_POST ['secondPassword'] ) ? $_POST ['secondPassword'] : '';
	
	
	
	
	if (empty ( $firstPassword ) || empty ( $secondPassword ) || empty ($name)) {
		$errors [] = 'All fields are mandatory!';
		
		
	}
 if(is_numeric($name)) {
		$errors [] = 'Name must be a string!';
		$name = "Invalid username!";
	}
	
	else if(strlen($firstPassword) < 6 || strlen($firstPassword) > 12 ) {
		$errors [] = 'Password must be between 6 and 12 symbols!';
		
	}
	else if ($secondPassword != $firstPassword) {
		$errors [] = 'The passwords do not match!';
	}
	


	if (empty ( $errors )) {
		
		if ($secondPassword == $firstPassword) {
			$res =crypt($firstPassword,'baba');
		}
		;
		
	} else {
		$res = "Invalid!";
	}
}
?>
<!DOCTYPE html>
<html>
<head>
<title>zad2</title>
<style type="text/css">
label {
	display: block;
}
</style>
</head>
<body>
		<?php foreach ($errors as $error):?>
			<p style="color: red;"><?= $error?> </p>
		<?php endforeach;?>
		<form action="" method="post">
		
		<div>
			<label>Enter name:</label> <input name="name"
				value="<?= htmlentities(empty($data['name']) ? '' : $data['name']); ?>">
		</div>
		
		<div>
			<label>Enter password:</label>
			 <input type="password" name="firstPassword">
		</div>
		<div>
			<label>Repeat password:</label>
			 <input type="password" name="secondPassword">
		</div>
		<br>


	
		<div>
			<button type="submit">Go!</button>
		</div>



		<div>	
				<?php if (isset($res)):?>
			<h2><?= "Username: $name <br> Crypt password: $res"; ?></h2>
						<?php endif;?>	
				
			</div>

	</form>
</body>
</html>
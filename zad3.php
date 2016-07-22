<?php
session_start ();
$errors = [ ];
if (! empty ( $_POST )) {
	$value = isset ( $_POST ['value'] ) ? $_POST ['value'] : '';
	$operation = isset ( $_POST ['operation'] ) ? $_POST ['operation'] : '';
	$operation2 = isset ( $_POST ['operation2'] ) ? $_POST ['operation2'] : '';
	
	
	
	if (empty ( $value)) {
		$errors [] = 'Field is mandatory!';
	}
	
	if(!is_numeric ( $value )) {
		$errors [] = 'Value must be numeric!';
	}
	
	if( $value == '0' && $operation == 'Celsius' && $operation2 == 'Fahrenheit' ) {
		
		$res=32;
	}
	
	if( $value == '0' && $operation == "Fahrenheit"  && $operation2 == "Celsius" ) {
		$res=-17.77;
	}

	if ($operation == 'Celsius' && $operation2 == 'Celsius') {
		$res = $value;
	}
	
	if ($operation == 'Fahrenheit' && $operation == 'Fahrenheit') {
		$res = $value;
	}
	
	
	if (empty ( $errors )) {
		
		if ($operation == 'Celsius' && $operation2 == 'Fahrenheit') {
			$res = $value * (9/5) + 32;
		}
		;
		if ($operation == "Fahrenheit"  && $operation2 == "Celsius") {
			$res = (5/9) * ($value-32);
		}
		;
		
	}
}
?>
<!DOCTYPE html>
<html>
<head>
<title>zad3</title>
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
			<label>Enter value:</label>
			 <input name="value">
		</div>
		<br>


		<div>
		<label for="degree">Degrees in:</label>
			<select name="operation">

				<option>Celsius</option>
				<option>Fahrenheit</option>
				

			</select>

		</div><br>
		
			<div>
			<label for="degree">To:</label>
			<select name="operation2">

				<option>Celsius</option>
				<option>Fahrenheit</option>
				

			</select>

		</div>
		
		
		<br>

		<div>
			<button type="submit">Convert</button>
		</div>



	<div>		
				<?php if (isset($res)):?>
			<h2><?= "$res"; ?></h2>
						<?php endif;?>	
				
			</div>

	</form>
</body>
</html>
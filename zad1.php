<?php
session_start ();
$errors = [ ];

if (! empty ( $_POST )) {
	$firstNumber = isset ( $_POST ['firstNumber'] ) ? $_POST ['firstNumber'] : '';
	$secondNumber= isset ( $_POST ['secondNumber'] ) ? $_POST ['secondNumber'] : '';
	$operation = isset ( $_POST ['operation'] ) ? $_POST ['operation'] : '';
	
	
	if (empty ( $firstNumber ) || empty ( $secondNumber )) {
		$errors [] = 'All fields are mandatory!';
		
		
	}
	
	else if(! is_numeric ( $firstNumber )) {
		$errors [] = 'First number must be a number!';
	}
	else if (! is_numeric ( $secondNumber )) {
		$errors [] = 'Second number must be a number!';
	}
	


	if (empty ( $errors )) {
		
		if ($operation == "+") {
			$res = $firstNumber + $secondNumber;
		}
		;
		if ($operation == "-") {
			$res = $firstNumber - $secondNumber;
		}
		;
		if ($operation == "/") {
			$res = $firstNumber / $secondNumber;
		}
		;
		if ($operation == "*") {
			$res = $firstNumber * $secondNumber;
		}
		;
	} else {
		$res = "Invalid input!";
	}
}
?>
<!DOCTYPE html>
<html>
<head>
<title>zad1</title>
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
			<label>Enter first number:</label> <input name="firstNumber"
				value="<?php echo  htmlentities(isset($firstNumber) ? $firstNumber : "")?>"/>
		</div>
		<div>
			<label>Enter second number:</label> <input name="secondNumber"
				value="<?php echo  htmlentities(isset($secondNumber) ? $secondNumber : "")?>"/>
		</div>
		<br>


		<div>
			<select name="operation">

				<option id="addition">+</option>
				<option id="subtraction">-</option>
				<option id="multiplication">*</option>
				<option id="partition">/</option>

			</select>

		</div>
		<br>

		<div>
			<button type="submit">Calculate</button>
		</div>



		<div>	
				<?php if (isset($res)):?>
			<h2><?= "$res"; ?></h2>
						<?php endif;?>	
				
			</div>

	</form>
</body>
</html>
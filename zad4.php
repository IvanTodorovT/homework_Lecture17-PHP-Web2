<?php
$errors = [ ];
if (! empty ( $_POST )) {
	$number1 = $_POST ['number1'];
	$number2 = $_POST ['number2'];
	$number3 = $_POST ['number3'];
	$number4 = $_POST ['number4'];
	$number5 = $_POST ['number5'];
	$number6 = $_POST ['number6'];
	$number7 = $_POST ['number7'];
	$number8 = $_POST ['number8'];
	$number9 = $_POST ['number9'];
	$number10 = $_POST ['number10'];
	
	if (! is_numeric ( $number1 ) || ! is_numeric ( $number2 ) ||
		! is_numeric ( $number3 ) || ! is_numeric ( $number4 ) ||
		! is_numeric ( $number5 ) || ! is_numeric ( $number6 ) ||
		! is_numeric ( $number7 ) || ! is_numeric ( $number8 ) ||
		! is_numeric ( $number9 ) || ! is_numeric ( $number10 )) {
		$errors [] = 'All values must be numeric';
	}
	if (empty ( $number1 ) || empty ( $number2 ) ||
		empty ( $number3 ) || empty ( $number4 ) ||
		empty ( $number5 ) || empty ( $number6 ) ||
		empty ( $number7 ) || empty ( $number8 ) ||
		empty ( $number9 ) || empty ( $number10 )) {
		$errors [] = 'Fill all fields';
	}
	if (empty ( $errors )) {
		$array = [ 
				$number1,
				$number2,
				$number3,
				$number4,
				$number5,
				$number6,
				$number7,
				$number8,
				$number9,
				$number10 
		];
	}
	
	sort ( $array );
}
?>
<!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8">
<title>zad4</title>
</head>
<body>
<?php foreach ($errors as $error):?>
			<p style="color: red;"><?= $error?> </p>
		<?php endforeach;?>
		

<form action="" method="post">

		<label for="numbers">Enter numbers:</label><br> <br>
		<input type="text" name="number1" placeholder="1"><br /> <input
			type="text" name="number2" placeholder="2"><br /> <input type="text"
			name="number3" placeholder="3"><br /> <input type="text"
			name="number4" placeholder="4"><br /> <input type="text"
			name="number5" placeholder="5"><br /> <input type="text"
			name="number6" placeholder="6"><br /> <input type="text"
			name="number7" placeholder="7"><br /> <input type="text"
			name="number8" placeholder="8"><br /> <input type="text"
			name="number9" placeholder="9"><br /> <input type="text"
			name="number10" placeholder="10"><br /> <br>
		<input type="submit" name="submit" value="Sort"><br>
		<br><label for="sort">Sorted:</label>

<?php if(isset($array)):?>

<?php foreach ($array as $value):?>
			<p style="color: blue;"><?= $value?> </p>
		<?php endforeach;?>
		<?php endif;?>
		
	<?php echo "The min element is: $array[0] and the max element is:  $array[9]"; ?>
</form>
</body>
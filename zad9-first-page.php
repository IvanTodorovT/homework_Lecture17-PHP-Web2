<?php
session_start ();

/* get */

$firstValue = isset ( $_SESSION ['firstValue'] ) ? $_GET ['firstValue'] : '';
$secondValue = isset ( $_SESSION ['secondValue'] ) ? $_GET ['secondValue'] : '';
$thirdValue = isset ( $_SESSION ['thirdValue'] ) ? $_GET ['thirdValue'] : '';
$fourthValue = isset ( $_SESSION ['fourthValue'] ) ? $_GET ['fourthValue'] : '';
$fifthValue = isset ( $_SESSION ['fifthValue'] ) ? $_GET ['fifthValue'] : '';

$_SESSION ['firstParam'] = $firstValue;
$_SESSION ['secondParam'] = $secondValue;
$_SESSION ['thirdParam'] = $thirdValue;
$_SESSION ['fourthParam'] = $fourthValue;
$_SESSION ['fifthParam'] = $fifthValue;

/* post */

$firstValue2 = isset ( $_SESSION ['firstValue2'] ) ? $_POST ['firstValue2'] : '';
$secondValue2 = isset ( $_SESSION ['secondValue2'] ) ? $_POST ['secondValue2'] : '';
$thirdValue2 = isset ( $_SESSION ['thirdValue2'] ) ? $_POST ['thirdValue2'] : '';
$fourthValue2 = isset ( $_SESSION ['fourthValue2'] ) ? $_POST ['fourthValue2'] : '';
$fifthValue2 = isset ( $_SESSION ['fifthValue2'] ) ? $_POST ['fifthValue2'] : '';

$_SESSION ['firstParam2'] = $firstValue2;
$_SESSION ['secondParam2'] = $secondValue2;
$_SESSION ['thirdParam2'] = $thirdValue2;
$_SESSION ['fourthParam2'] = $fourthValue2;
$_SESSION ['fifthParam2'] = $fifthValue2;

$firstValue2 = $_POST ['firstParam2'];
$secondValue2 = $_POST ['secondParam2'];
$thirdValue2 = $_POST ['thirdParam2'];
$fourthValue2 = $_POST ['fourthParam2'];
$fifthValue2 = $_POST ['fifthParam2'];

echo "Your first parameter from second page is: " . $firstValue2 . ".";
echo "<br>";
echo "Your second parameter from second page  is: " . $secondValue2 . ".";
echo "<br>";
echo "Your third parameter from second page  is: " . $thirdValue2 . ".";
echo "<br>";
echo "Your fourth parameter from second page  is: " . $fourthValue2 . ".";
echo "<br>";
echo "Your fifth parameter from second page  is: " . $fifthValue2 . ".";

?>

<form method="get" action="zad9-second-page.php">
	<input type="text" name="firstParam" value=""
		placeholder="enter first parameter"> <input type="text"
		name="secondParam" value="" placeholder="enter second parameter"> <input
		type="text" name="thirdParam" value=""
		placeholder="enter third parameter"> <input type="text"
		name="fourthParam" value="" placeholder="enter fourth parameter"> <input
		type="text" name="fifthParam" value=""
		placeholder="enter fifth parameter">

	<button type="submit">Send</button>

</form>
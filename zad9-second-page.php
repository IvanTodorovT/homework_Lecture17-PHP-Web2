<?php
session_start ();

/* get */

$firstValue = $_GET ['firstParam'];
$secondValue = $_GET ['secondParam'];
$thirdValue = $_GET ['thirdParam'];
$fourthValue = $_GET ['fourthParam'];
$fifthValue = $_GET ['fifthParam'];

echo "Your first parameter from first page is: " . $firstValue . ".";
echo "<br>";
echo "Your second parameter from first page is: " . $secondValue . ".";
echo "<br>";
echo "Your third parameter from first page is: " . $thirdValue . ".";
echo "<br>";
echo "Your fourth parameter from first page is: " . $fourthValue . ".";
echo "<br>";
echo "Your fifth parameter from first page is: " . $fifthValue . ".";

/* end */

?>

<form method="post" action="zad9-first-page.php">
	<input type="text" name="firstParam2" value=""
		placeholder="enter first parameter"> <input type="text"
		name="secondParam2" value="" placeholder="enter second parameter"> <input
		type="text" name="thirdParam2" value=""
		placeholder="enter third parameter"> <input type="text"
		name="fourthParam2" value="" placeholder="enter fourth parameter"> <input
		type="text" name="fifthParam2" value=""
		placeholder="enter fifth parameter">

	<button type="submit">Send</button>

</form>
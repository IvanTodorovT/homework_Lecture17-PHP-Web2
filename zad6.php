<?php 
 
 $errors = [];
 if(!empty($_GET)) {
	$firstName = isset($_GET['first']) ? $_GET['first'] : "";
	$lastName = isset($_GET['last']) ? $_GET['last'] : "";
	$day=isset($_GET['day']) ? $_GET['day'] : '';
	$month=isset($_GET['month']) ? $_GET['month'] : '';
	$year=isset($_GET['year']) ? $_GET['year'] : '';
	
	
	
	if(empty($firstName) || empty($lastName)) {
		$errors[]= 'All fields are mandatory';
	};
	
 		if(is_numeric($firstName)){ 
 			$errors[] ="First name must be string";
			 };
 
 		if(is_numeric($lastName)){ 
 			$errors[] ="Last name must be string";
 			};
 			
 			
 			if($day == " "){
 				$errors[] ="Enter a day";
 			};
 			
 			if($month == " "){
 				$errors[] ="Enter a month";
 			};
 			
 			if($year == " "){
 				$errors[] ="Enter a year";
 			};
 			
 			
 			if(empty($errors)) {
 				header("Location: test.php");
 			}
 	
 }
?>
<!DOCTYPE html>
<html>
<head>
<title>zad6</title>
<style type="text/css">
label {
	display: block;
}
;
</style>
</head>
<body>
<?php foreach ($errors as $error):?>
			<p style="color: red;"><?= $error?> </p>
		<?php endforeach;?>

		
		<form action="" method="get">
		<div>
			<label for="">Name:</label>
			<input type="text" name = "first" value="<?php echo htmlentities(isset($firstName) ? $firstName : "") ?>" />
				
		</div>
		<div>
                <label for="last-name">Last Name:</label>
                <input type="text"  name="last" value="<?= htmlentities(isset($lastName) ? $lastName : "")?>" />
            </div>

		<div>

		<label for="birth">Choose your birth date:</label>
		
		
<!-- 			<select name="day" >

				<option></option>
				
				<option >1</option>
				<option>2</option>
				<option>3</option>
				<option>4</option>
				<option>5</option>
				<option>6</option>
				
			</select>

	<select name="month">

				<option></option>
				<option >January</option>
				<option>February</option>
				<option>March</option>
				<option >April</option>
				<option>May</option>
				<option>June</option>
				

			</select>

	<select name="year">

				<option></option>
				<option >1990</option>
				<option>1991</option>
				<option>1992</option>
				<option >1993</option>
				<option>1994</option>
				<option>1995</option>

			</select> -->

		<select name="day"> 
<option <?php if ($_GET['day'] == '') { ?>selected="true" <?php }; ?>value=" "></option>
   <option <?php if ($_GET['day'] == '1') { ?>selected="true" <?php }; ?>value="1">1</option>
   <option <?php if ($_GET['day'] == '2') { ?>selected="true" <?php }; ?>value="2">2</option>
   <option <?php if ($_GET['day'] == '3') { ?>selected="true" <?php }; ?>value="3">3</option>
   <option <?php if ($_GET['day'] == '4') { ?>selected="true" <?php }; ?>value="4">4</option>
   <option <?php if ($_GET['day'] == '5') { ?>selected="true" <?php }; ?>value="5">5</option>
   <option <?php if ($_GET['day'] == '6') { ?>selected="true" <?php }; ?>value="6">6</option>
</select>
		
		<select name="month">
<option <?php if ($_GET['month'] == '') { ?>selected="true" <?php }; ?>value=" "></option>
   <option <?php if ($_GET['month'] == 'January') { ?>selected="true" <?php }; ?>value="January">January</option>
   <option <?php if ($_GET['month'] == 'February') { ?>selected="true" <?php }; ?>value="February">February</option>
   <option <?php if ($_GET['month'] == 'March') { ?>selected="true" <?php }; ?>value="March">March</option>
   <option <?php if ($_GET['month'] == 'April') { ?>selected="true" <?php }; ?>value="April">April</option>
   <option <?php if ($_GET['month'] == 'May') { ?>selected="true" <?php }; ?>value="May">May</option>
   <option <?php if ($_GET['month'] == 'June') { ?>selected="true" <?php }; ?>value="June">June</option>
</select>
		
				<select name="year">
<option <?php if ($_GET['year'] == '') { ?>selected="true" <?php }; ?>value=" "></option>
   <option <?php if ($_GET['year'] == '1990') { ?>selected="true" <?php }; ?>value="1990">1990</option>
   <option <?php if ($_GET['year'] == '1991') { ?>selected="true" <?php }; ?>value="1991">1991</option>
   <option <?php if ($_GET['year'] == '1992') { ?>selected="true" <?php }; ?>value="1992">1992</option>
   <option <?php if ($_GET['year'] == '1993') { ?>selected="true" <?php }; ?>value="1993">1993</option>
   <option <?php if ($_GET['year'] == '1994') { ?>selected="true" <?php }; ?>value="1994">1994</option>
   <option <?php if ($_GET['year'] == '1995') { ?>selected="true" <?php }; ?>value="1995">1995</option>
</select>

		</div>
		<br>
		<div>
			<button type="submit">Submmit</button>
		</div>

	</form>	
</body>
</html>
<?php
 //kutsume välja funktsioonide faili
 require("functions.php");
 $firstName = "Tundmatu";
 $lastName = "Kodanik";
 $fullName = "";
 $birthMonth = date ("m");
 $monthNamesET = ["jaanuar", "veebruar", "märts", "aprill", "mai", "juuni", "juuli", "august", "september", "oktoober", "november", "detsember"];
 //kontrollime, kas kasutaja on midagi kirjutanud
 //var_dump($_POST);
if (isset($_POST["firstName"])){
	//$firstName = $_POST["firstName"];
	$firstName = test_input($_POST["firstName"]);
}
if (isset($_POST["firstName"])){
	$lastName = test_input($_POST["lastName"]);
}
 
 //harjutamiseks mõeldud funktsioon
 function fullname(){
	 $GLOBALS["fullName"] = $GLOBALS["firstName"] ." " .$GLOBALS["lastName"];
 }
 
 $fullName = "";
 fullname();
?> 

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>
    <?php
	echo $firstName;
	echo " ";
	echo $lastName;
	?>
  , õppetöö</title>
</head>
<body>
	<h1>
	<?php
	echo $firstName ." " .$lastName;
	?>, IF18</h1>
	<p>See leht on loodud <a href="http://www.tlu.ee" target="_blank">TLÜ</a> õppetöö raames, ei pruugi parim välja näha ning kindlasti ei sisalda tõsiseltvõetavat sisu!</p>

	<hr> 
	<form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
	<label>Eesnimi:</label>
	<input type="text" name="firstName">
	<label>Perekonnanimi:</label>
	<input type="text" name="lastName">
	<label>Sünnikuu:<label>
	<select name="birthMonth">
	<?php
	echo '<select name="birthMonth">' ."\n";
	for ($i = 1; $i < 13; $i ++){
		if ($i == $birthMonth)
			echo "selected";
		}
		echo "<"$monthNamesET[$i - 1] .</option> \n"
		
	echo "/select \n"
	
	?>
	</select>
	<label>Sünniaasta:</label>
	<input type="number" min="1914" max="2000" value="1999" name="birthYear">
	<br>
	<input type="submit" name="submitUserData" value="Saada andmed">
	</form>
	<hr>
	<?php 
	if (isset($_POST["firstName"])){
	echo "<p>" .$fullName .", olete elanud järgnevatel aastatel: </p> \n";
	echo "<ol> \n";
		for ($i = $_POST["birthYear"]; $i <= date("Y"); $i ++) {
		echo "<li>" .$i ."</li> \n";	
		}
	echo "</ol> \n";
}
	?>
 
 </body>
</html>
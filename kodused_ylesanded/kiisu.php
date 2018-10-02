<?php
 //kutsun välja funktsioonide faili
 require("../functions.php");
 $notice = null;
 if(isset($_POST["submitCatData"])){
	 if ($_POST["catdata"] != "Siia sisesta kassi andmed..." 
	 and !empty($_POST["catname"]) and !empty($_POST["catcolor"]) and !empty($_POST["cattaillenght"])){
		 $catdata = test_input ($_POST["catname"]) and ($_POST["catcolor"]) and ($_POST["cattaillenght"]);
		 $notice = addcat($catname, $catcolor, $cattaillength);
	 } else {	 
		 $notice = "Palun kirjuta kassi andmed!";
	 }
 }
 
?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Kassi andmete lisamine</title>
</head>
<body>
	<h1>Kassi andmete lisamine</h1>
	<p>See leht on loodud <a href="http://www.tlu.ee" target="_blank">TLÜ</a> õppetöö raames, ei pruugi parim välja näha ning kindlasti ei sisalda tõsiseltvõetavat sisu!</p>
	<hr> 
	<form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
	 <label>Sõnum (max 96märki):</label>
	 <textarea rows="4" cols="24" name="catdata">Siia sisesta kassi andmed ...</textarea>
	 <br>
	 <input type="submit" name="submitCatData" value="Salvesta kassi andmed">
	</form>
	<hr>
	<p><?php echo $notice; ?></p>
 </body>
</html>
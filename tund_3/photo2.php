<?php
$firstName = "Johanna Maarja";
$lastName = "Eller";
//loeme piltide kataloogi sisu
$photo = "../../pics/1";
//var_dump ($picFiles);
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

 <img src="../../pics/1" alt="pilt">
 
 </body>
</html>
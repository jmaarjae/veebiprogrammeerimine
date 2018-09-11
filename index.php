
<?php
//echo "See on minu esimene PHP!";
$firstName = "Johanna Maarja";
$lastName = "Eller";
$dateToday = date("d.m.Y");
$hourNow = date("G");
$partOfDay = "";
if ($hourNow < 8){
	$partOfDay = "Varane hommik";
}
if ($hourNow >= 8 and $hourNow < 16){
	$partOfDay = "Koolipäev";
}
if ($hourNow >= 16){
	$partOfDay = "Loodetavasti vaba aeg";
}
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
  <p style="color:blue">See leht on loodud <a href="http://www.tlu.ee" target="_blank">TLÜ</a> õppetöö raames, ei pruugi parim välja näha ning kindlasti ei sisalda tõsiseltvõetavat sisu!</p>
  <?php
  echo "<p>Tänane kuupäev on: " .$dateToday .".</p> \n";
  echo "<p> Lehe avamise hetkel oli kell " .date("H:i:s") .". Käes oli " .$partOfDay .".</p> \n";
  ?>
  <h2>Vittorio De Sica on öelnud:</h2>
  <p style="color:red">"Abielumehe ainus võimalus jätta endale viimane sõna on öelda naisele: "Sul on õigus.""</p>
  <!--<img src="http://greeny.cs.tlu.ee/~rinde/veebiprogrammeerimine2018s/tlu_terra_600x400_1.jpg" alt="TLÜ Terra õppehoone">-->
  <img src="http://greeny.cs.tlu.ee/~rinde/veebiprogrammeerimine2018s/tlu_terra_600x400_1.jpg" alt="TLÜ Terra õppehoone">
  
 
  <P>Mul on ka sõber, kes teeb oma <a href="../~davierl" target="_blank">veebi</a></p>
</body>
</html>
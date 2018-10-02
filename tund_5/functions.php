<?php

//laen andmebaasi info
require("../../../config.php");
$database = "if18_johanna_el_1";
//anonüümse sõnumi salvestamine
function saveamsg($msg){
	$notice = "";
	//serveri ühendus (server, kasutaja, parool, andmebaas)
	$mysqli = new mysqli($GLOBALS["serverHost"], $GLOBALS["serverUsername"], $GLOBALS["serverPassword"], $GLOBALS["database"]);
	//valmistan ette SQL käsu
	$stmt = $mysqli->prepare("INSERT INTO vpamsg (message) VALUES(?)");
	echo   $mysqli->error;
	//asendame SQL käsus küsimärgi päris infoga (andmetüüp, andmed ise)
	//s-string; i-integer; d-decimal (murdarv)
	$stmt->bind_param("s", $msg);
	if ($stmt->execute()){
		$notice = 'Sõnum: "' .$msg .'" on salvestatud.';
	} else {
		$notice = "Sõnumi salvestamisel tekkis tõrge: " .$stmt->error;
	}
	$stmt->close();
	$mysqli->close();
	return $notice;
 }


 function listallmessages(){
	$msgHTML = "";
	$mysqli = new mysqli($GLOBALS["serverHost"], $GLOBALS["serverUsername"], $GLOBALS["serverPassword"], $GLOBALS["database"]);
	$stmt = $mysqli->prepare("SELECT message FROM vpamsg");
	echo   $mysqli->error;
	$stmt->bind_result($msg);
	$stmt->execute();
	while($stmt->fetch()){
		$msgHTML .= "<p>" .$msg ."</p> \n";
	}
	$stmt->close();
	$mysqli->close();
	return $msgHTML;
 }
 
//tekstsisestuse kontroll
function test_input($data) {
		$data = trim($data);
		$data = stripslashes($data);
		$data = htmlspecialchars($data);
		return $data;
  }
  
  
  //kassi lisamine andmebaasi
  function addcat($catname, $catcolor, $cattaillength){
	  $notice = "";
	//serveri ühendus (server, kasutaja, parool, andmebaas)
	$mysqli = new mysqli($GLOBALS["serverHost"], $GLOBALS["serverUsername"], $GLOBALS["serverPassword"], $GLOBALS["database"]);
	//valmistan ette SQL käsu
	$stmt = $mysqli->prepare("INSERT INTO kiisu (nimi, v2rv, saba) VALUES(? ? ?)");
	echo   $mysqli->error;
	//asendan SQL käsus küsimärgi päris infoga (andmetüübid, andmed)
	$stmt->bind_param("ssi", $catname, $catcolor, $cattaillenght);
	if ($stmt->execute()){
		$notice = 'Kassi andmed: "' .$msg .'" on salvestatud.';
	} else {
		$notice = "Kassi andmete salvestamisel tekkis tõrge: " .$stmt->error;
	}
	$stmt->close();
	$mysqli->close();
	return $notice;
 }
 
 function listallcats(){
	$catdataHTML = "";
    $mysqli = new mysqli($GLOBALS["serverHost"],$GLOBALS["serverUsername"], $GLOBALS["serverPassword"], $GLOBALS["database"]);
    $stmt = $mysqli->prepare("SELECT nimi, v2rv, saba FROM kiisu");
	echo $mysqli->error;
	$stmt->bind_result($catname, $catcolor, $cattaillength);
	$stmt->execute();
	while($stmt->fetch()){
		$catdataHTML .= "<p>" .$catname .$catcolor .$cattaillength ."</p> \n";
	}
	$stmt->close();
	$mysqli->close();
	return $catdataHTML;
  }
  
 
?>

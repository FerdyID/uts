<?php
require_once 'function.php';

echo"<br> TUGAS UTS PHP <br>";
echo"<hr>";

$rumus = new rumus();
$pilih = "genap";

switch ($pilih){
	case "genap" :
		echo $rumus -> genap(1,10);
	break;
	case "ganjil" : 
		echo $rumus -> ganjil(1,10);
	break;
	case "pangkat" :
		echo $rumus -> pangkat(5,3);
	break;	
	default :
		echo "404 Not Found.";
}
echo"<hr>";
echo date("l, d F Y");
?>
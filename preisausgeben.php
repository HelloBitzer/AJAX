<?php

//GET - Parameter auslesen :drink
$wahl = $_GET['drink'] ;

//Antwort bilden
$erg = 'eine Tasse ';
if ($wahl == 1 )
{
	 $preis = 1.5;
	 echo $erg . 'Kaffee kostet ' . $preis;  
}
if ($wahl == 2 )
{
	 $preis = 0.5;
	 echo $erg . 'Tee kostet ' . $preis;  
}

if ($wahl == 3 )
{
	 $preis = 5.5;
	 echo $erg . 'Wasser kostet ' . $preis;  
}
?>
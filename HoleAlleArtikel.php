<?php 

//Connect mit Datenbank
//mysqli_   Interface


$con = mysqli_connect("","root","","f19DB");

if ( ! $con  )
{
	echo "Connect fehlgeschlagen " .  mysqli_connect_error() .  PHP_EOL;
	exit;          //Abbruch

}
//echo "Connect hat geklappt ! " ;
 

$cmd="select * from artikel;";  
 
//sql-Command  ausführen

 
$db_erg = mysqli_query($con,$cmd);     

 
 //Daten aufbereiten 
 /*Ergebnis bearbeiten */
 $daten = array();
 
 
while($satz = mysqli_fetch_assoc($db_erg))
{
	$daten[] =$satz;   //ganzen Datensatz übernehmen
	 	 
		  
}

echo  json_encode($daten);
  
 
 
 mysqli_close($con);
?>
 
 
 
 
 
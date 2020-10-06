<?php

  include("geoiploc.php"); // Este archivo contiene las ip de cada pais

  //Capturamos la IP 
  #$ip = $_SERVER["REMOTE_ADDR"];

function getCountryByIP($ip){
  
    return getCountryFromIP($ip, " NamE ");
}
//Ejemplo de IP
 
$ip = "18.188.40.9";
$pais = getCountryByIP($ip);
echo "El Pais Ingresado al sitio es: " . $pais;
?>
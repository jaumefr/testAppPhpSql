<?php

// Establim 4 variables que seran els valors de la conexió a la nostra base de dades.
$host = "hostDeLaBBDD";
$userdb = "usuariDeLaBBDD";
$passworddb = "passwordDeLaBBDD";
$databasename = "nomDeLaBBDD";

// Fem la conenexió a la nostra base de dades. Important l'ordre dels elements. 
// Li posem un nom de variable per poder cridar-la més endavant (con).

$con = mysqli_connect($host,$userdb,$passworddb,$databasename);

// Condicional perquè en mostri un missatge indicant si es conecta o no amb la nostra base de dades.
if (mysqli_connect_errno())
{
echo "Ho sento, no t'has conectat a la base de dades" . mysqli_connect_error();
}
else
{   
//echo "Felicitats, t'has conectat a la base de dades de Hostinger!";
}

?>

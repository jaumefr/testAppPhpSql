<?php

//INSERT

include "config.php";

$clau = $_GET['clau']; //per si ho volem comprovar directament passant una variable a la url
$dada = $_GET['dada']; //per si ho volem comprovar directament passant una variable a la url

$sql = "INSERT INTO App (Clau, Dada) VALUES ('$clau','$dada')";
if (mysqli_query($con, $sql)) {
    $resultat = "Visca! Nou registre creat correctament!";
} else {
    $resultat = "Error!: ". mysqli_error($conn);
}


//SHOW TOP 5

$sql = "SELECT * FROM App ORDER BY Clau DESC LIMIT 5";
$result = mysqli_query($con,$sql);
$retorna_csv = "";

while($row = mysqli_fetch_array($result))
{
   $retorna_csv = $retorna_csv.$row['Dada'].", ".$row['Clau'].$separador."\n";
}

print $retorna_csv;

// Tanquem connexió
 
mysqli_close($con);

?>
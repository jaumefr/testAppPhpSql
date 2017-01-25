<?php

include "config.php";

//$clau = trim($_POST['clau']);
//$dada = trim($_POST['dada']);
//echo $clau."   ".$dada;
$clau = $_GET['clau']; //per si ho volem comprovar directament passant una variable a la url
$dada = $_GET['dada']; //per si ho volem comprovar directament passant una variable a la url

$sql = "INSERT INTO App (Clau, Dada) VALUES ('$clau','$dada')";
if (mysqli_query($con, $sql)) {
    $resultat = "Visca! Nou registre creat correctament!";
} else {
    $resultat = "Error!: ". mysqli_error($conn);
}

// table name = App
// Dada varchar(255) null
// Clau varchar(16) not_null
// id int(11) not_null

?>

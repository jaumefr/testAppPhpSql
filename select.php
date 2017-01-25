<?php

include "config.php";

//$clau = trim($_POST['clau']);
//$dada = trim($_POST['dada']);
//echo "clau=".$clau."<br>";
$clau = $_GET['clau']; //per si ho volem comprovar directament passant una variable a la url

$sql = "SELECT * FROM App where Clau='$clau'";
$result = mysqli_query($con,$sql);

// Definim com volem que mostri el resultat. 

while($row = mysqli_fetch_array($result))
{
	$dada = $row['Dada'];
}

echo $dada;

// Tanquem connexió
 
mysqli_close($con);



// table name = App
// Dada varchar(255) null
// Clau varchar(16) not_null
// id int(11) not_null
?>

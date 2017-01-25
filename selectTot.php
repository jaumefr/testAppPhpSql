<?php

include "config.php";

//$clau = $_GET['clau']; 

$sql = "SELECT * FROM App ORDER BY Clau DESC LIMIT 5";
$result = mysqli_query($con,$sql);
$retorna_csv = "";

while($row = mysqli_fetch_array($result))
{
   $retorna_csv = $retorna_csv.$row['Dada'].", ".$row['Clau']."\n";
}

print $retorna_csv;

// Tanquem connexió
 
mysqli_close($con);

?>
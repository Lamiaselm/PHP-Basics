<?php
require "connexion.php";

$id_formation = $_POST['id_formation']; 
$nom_formation = $_POST['nom']; 
$volume_formation = $_POST['volume']; 
$tarif_formation = $_POST['tarif']; 
$taxe_formation = $_POST['taxe']; 
echo $id_formation;
$query6="UPDATE formation SET Nom_formation='$nom_formation',
                              volume='$volume_formation',
                              tarif='$tarif_formation',
                              taxe='$taxe_formation'
 WHERE Id_formation='$id_formation'";
$result6=mysqli_query($db,$query6);
if($result6)
{
 echo "modifier success";
}else echo "error";
header("Location:Admin.php");
mysqli_close($db);
?> 
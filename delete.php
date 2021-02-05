<?php
require "connexion.php";

$id_formation = $_GET['id_formation']; 
echo $id_formation;
$query6="DELETE FROM formation WHERE Id_formation='$id_formation'";
$result6=mysqli_query($db,$query6);
if($result6)
{
 echo "delete success";
}
header("Location:Admin.php");
mysqli_close($db);

?> 
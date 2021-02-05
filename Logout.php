<?php 
session_start();
if ($_SESSION["LoggedIn"]){
    header("Location:Admin.php");
}
session_destroy();
header("Location:Login.html");
?>
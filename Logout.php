<?php 
session_start();
unset($_SESSION["id"]);
unset($_SESSION["name_user"]);
header("Location :Login.html");
?>
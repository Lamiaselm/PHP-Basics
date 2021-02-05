<?php 
session_start();
if ($_SESSION["LoggedIn"]){
    header("Location:Admin.php");
}
else {
    $_SESSION["LoggedIn"]=FALSE;
    session_destroy();
    header("Location:Login-form.php");
}

?>
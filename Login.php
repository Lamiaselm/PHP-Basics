<?php 
session_start();
include "connexion.php";



    // username and password sent from form 
    $pwd=hash("md5",$_POST['pwd']);
    $email= $_POST['email'];
    echo $pwd;
    echo $email;
    
    $sql = "SELECT * FROM utilisateur WHERE name_user = '$email'";
    $result = mysqli_query($db,$sql);
    while ($row= $result->fetch_assoc()){
        print_r($row) ;
    }
    
    
      


?>

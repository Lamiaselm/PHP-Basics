<?php 
session_start();
include "connexion.php";



    // username and password sent from form 
    $pwd=hash("md5",$_POST['pwd']);
    $email= $_POST['email'];
    
    $sql = "SELECT id_user FROM utilisateur WHERE name_user = '$email' and hash_pwd = '$pwd'";
    $result = mysqli_query($db,$sql);
    $row= $result->fetch_assoc();
    $count = mysqli_num_rows($result);
    
    // If result matched $myusername and $mypassword, table row must be 1 row
      
    if($count == 1) {
       
       $_SESSION['email'] = $email;
       
       header("location: JS.html");
    }else {
        header("location: Login.html");
    }
    mysqli_close($db);
?>

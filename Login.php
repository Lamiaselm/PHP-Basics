<?php 
session_start();
include "connexion.php";

    $pwd=hash("md5",$_POST['pwd']);
    $email= $_POST['email'];
    $sql = "SELECT id_user FROM utilisateur WHERE name_user = '$email' and hash_pwd = '$pwd'";
    $result = mysqli_query($db,$sql);
    $row= $result->fetch_assoc();
    $count = mysqli_num_rows($result);
    if($count == 1) {
       
       $_SESSION['email'] = $email;
       header("location: JQuery.html");
       exit();

    }else {
        header("location: Login.html");
    }
    mysqli_close($db);
?>

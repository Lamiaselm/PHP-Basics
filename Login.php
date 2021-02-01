<?php 
include "connexion.php";
  if(!isset($_SESSION)) {
    session_start();
}


    $pwd=hash("md5",$_POST['pwd']);
    $email= $_POST['email'];
    $sql = "SELECT id_user FROM utilisateur WHERE name_user = '$email' and hash_pwd = '$pwd'";
    $result = mysqli_query($db,$sql);
    $row= $result->fetch_assoc();
    $count = mysqli_num_rows($result);
    if($count == 1) {
       $_SESSION['loggedin'] = TRUE;
       $_SESSION['id'] = $row['id'];
       header("location: JQuery.html");
       exit();

    }else {
        header("location: Login.html");
    }
    mysqli_close($db);
?>

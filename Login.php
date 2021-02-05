<?php 
require "connexion.php";

    session_start();

    $pwd=hash("md5",$_POST['pwd']);
    $email= $_POST['email'];
    $sql = "SELECT id_user FROM utilisateur WHERE name_user = '$email' and hash_pwd = '$pwd'";
    $result = mysqli_query($db,$sql);
    $row  = mysqli_fetch_assoc($result);
    $count = mysqli_num_rows($result);

    if($count==1) {
    $_SESSION["id"] = $row['id_user'];
    $_SESSION["name"] = $row['name_user'];
    $_SESSION["LoggedIn"] = TRUE;


    } else {
    $message = "Invalid Username or Password!";
    header("location: Login-form.php");
    }

    if(isset($_SESSION["id"])) {
        header("Location:Admin.php");
        }
    mysqli_close($db);

?>

<?php

session_start();
if (isset($_SESSION["LoggedIn"]))
{
    header("Location:Admin.php");
}
else {



?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/style-login.css">
    <title>Login</title>
</head>

<body>
<div class="container">
<h1>Login form</h1>
    <form action="Login.php" method="POST">
        <div class="form-item">
        <label>Email    </label>
        <input type="text" name="email" placeholder="Entrez votre email">
        </div>
        <div class="form-item">
        <label>Mot de passe     </label>
         <input type="password" name="pwd" placeholder="Entrez votre password">
         </div>
         <div class="form-item">
         <button>Login</button>
         </div>
    </form>
</div>

</body>
</html>
<?php } ?>
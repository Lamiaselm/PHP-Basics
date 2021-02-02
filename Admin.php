<?php 
require "connexion.php";
session_start();
if(!isset($_SESSION["id"])) {
   
    header("Location:Login.html");
    }
    else{

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/style.css">
    <script src="Js/jquery-1.8.2.min.js"></script>
    <title>JS</title>
 
</head>
<script>
$(document).ready(function(){
    $(".ajouter").click(function(){
        $("#hide-form").css("display","block");
    })
})
</script>
<body>
<h1 class="title1" > <i>Ecole de formation TDW</i> </h1>
<form action="Logout.php"><button id="logout">Log out</button></form> 

<?php 
if (isset($_POST['submit'])) {
    $nom= $_POST['nom'];
    $type=$_POST['type'];
    $volume=$_POST['volume'];
    $tarif=$_POST['ht'];
    $taxe=$_POST['taxe'];
  
    if($type==6) 
    {
        $query1="INSERT INTO type_formation (Nom_type_formation)VALUES ('$nom')";
        if ($result1=mysqli_query($db,$query1))
        {   
            $query2="SELECT id_type_formation FROM type_formation WHERE Nom_type_formation='$nom'";
            $result2=mysqli_query($db,$query2);
             while ($row = $result2->fetch_assoc()){
                $id_formation=$row['id_type_formation'];
               
                $query3="INSERT INTO formation (id_type_formation,Nom_formation,volume,tarif,taxe) VALUES ('$id_formation','$nom','$volume','$tarif','$taxe')";
                if ($result3=mysqli_query($db,$query3))
                {
                   
                }
             } 
        }

    }
    else
    
    {
        $query4="INSERT INTO formation (id_type_formation,Nom_formation,volume,tarif,taxe) VALUES ('$type','$nom','$volume','$tarif','$taxe')";
        if ($result4=mysqli_query($db,$query4))
        {
            echo "donee2";
        }
    }


}



?>
<h2 class="title1">Liste des formations </h2>
<table id='table'>
    <tbody>
        <tr  class='ligne1'>
            <td class='colonne1'>Formations</td>
            <td class='colonne1'>Volume Horraire(H)</td>
            <td class='colonne1'>Taxe(%)</td>
            <td class='colonne1'>Prix HT(DA)</td>
            <td class='colonne1'>Delete</td>
        </tr>
<?php 
  
  $query5="SELECT * FROM formation ORDER BY Nom_formation";
  $result5=mysqli_query($db,$query5);
  if($result5)
  { 
    while ( $row = $result5->fetch_assoc())
    {
        
    echo "
        <tr>
            <td  class='colonne1'>".$row['Nom_formation']."</td>
            <td  class='ligne1'>".$row['volume']."</td>
            <td  class='ligne1'>".$row['tarif']."</td>
            <td  class='ligne1'>".$row['taxe']."</td>
            <td  class='ligne1'><a href=\"delete.php?id_formation=".$row['Id_formation']."\">Delete</a></td>
        </tr>
    ";
    }
  }

?>

    </tbody>
</table>
<button  class="ajouter" >Ajouter</button>
<div style="display:none;" id="hide-form">
<form action="Admin.php" id="form" method="POST">
<label class="form-item">Entrez le nom de la formation
    <input  value="" name="nom" id="nom">
</label>
<label class="form-item">Entrez le Volume Horraire
    <input  value="" name="volume"id="volume">
</label>
<label class="form-item">Entrez le Taxe
    <input  value="" name="taxe" id="taxe">
</label>
<label class="form-item">Entrez le prix HT
    <input  value="" name="ht" id="ht">
</label>
<label class="form-item">Choisissez un type de formation : 
<select name="type" id="type">
<option value=""> ----- Choisir ----- </option>
  <option value="1">Bureatique</option>
  <option value="2">Infographie</option>
  <option value="3">Langues</option>
  <option value="4">Managment</option>
  <option value="5">Comptabilitét</option>
  <option value="6">Autre</option>
</select>
</label>
<label class="form-item">
    <input type="submit" id="button" name="submit"></input>
</label>

</form>
</div>

</body>
<script>
    $(document).ready(function(){
    $("#button").click(function(){
    let nom = $("#nom").val();
    let volume =$("#volume").val();
    let taxe =$("#taxe").val();
    let ht =$("#ht").val();
    let table = $("#table")[0];
    let nav =$("#nav")[0];
    $("#ul").append('<li><a>'+nom+'</a></li>');
    nav.append(ul);
    var ttc = TTC(ht);
    var row = "<tr><td class='colonne1'>" + nom + "</td><td>" + volume+ "</td><td>" +taxe+ "</td><td>" +ht+ "</td><td>" +ttc+ "</td><tr>";
     $("tbody").append(row);
    function TTC (ht){
      return ht*1.196;
    }

    })
    
    })

</script>
</html>
<?php } ?>
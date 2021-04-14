<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="dd.css">
    <title>Document</title>
</head>
<body>
<div class="dib">
<h1>Adresse client :</h1>
<form action="" method="POST">
<input type="text" name="Nom" placeholder="Entrez votre Nom"><br><br>
<input type="text" name="Prenom" placeholder="Entrez votre Prenom"><br><br>
<input type="text" name="Adresse" placeholder="Entrez votre Adresse"><br><br>
<input type="text" name="Ville" placeholder="Entrez votre Ville"><br><br>
<input type="text" name="CodePostal" placeholder="Entrez votre CodePostal"><br><br>
<input type="submit" name="btn"> 
</form>
    <?php
              if(isset($_POST["Nom"])&&isset($_POST["Prenom"])&&isset($_POST["Adresse"])&&isset($_POST["Ville"])&&isset($_POST["CodePostal"])){ 
                    $Nom = ($_POST["Nom"]);
                    $Prenom = ($_POST["Prenom"]);
                    $Adresse = ($_POST["Adresse"]);
                    $Ville = ($_POST["Ville"]);
                    $CodePostal = ($_POST["CodePostal"]);

                    if($Nom==null &&$Prenom==null &&$Adresse==null &&$Ville==null &&$CodePostal==null){
                        echo "<script>alert('Les champs sont vides, il faut les remplir')</script>";
                    }
              }
?>
    <table class="table table-dark mt-2">
 <tr>
                    <th> Nom</th>
                    <th> Prenom</th>
                    <th> Adresse </th>
                    <th> Ville</th>
                    <th> CodePostal</th>

    </tr> 
    <tr>
                    <td>
                    <?php
                    if(isset($_POST["btn"])){
                        echo $Nom;
                    }
                    ?>
                     </td>
                    <td> <?php
                    if(isset($_POST["btn"])){
                        echo $Prenom;
                    }
                    ?> </td>
                    <td>  <?php
                    if(isset($_POST["btn"])){
                        echo $Adresse;
                    }
                    ?></td>
                    <td> <?php
                    if(isset($_POST["btn"])){
                        echo $Ville;
                    }
                    ?> </td>
                    <td> <?php
                    if(isset($_POST["btn"])){
                        echo $CodePostal;
                    }
                    ?> </td>
    </tr>
    </table>
    </div>
</body>
</html>
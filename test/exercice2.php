<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
<input type="text" name="nom"  ><br>
<input type="text" name="prenom" ><br>
<input type="radio" name="sexe"  valuer='f'><br>
<input type="radio" name="sexe"  valuer='m'>
<input type="submit" name="sbm" >
</form>
</body>
<?php

if (isset($_POST["nom"]) && isset($_POST["prenom"]))
{
    $nomm = $_POST["nom"];
    $prenomm = $_POST["prenom"];
  echo "bonjour :".$nomm.$prenomm ;
}
?>
</html>
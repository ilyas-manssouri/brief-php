<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="zz.css">
    <title>Document</title>
</head>
<body>
<div class="dib">
<form action="" method="POST">
    <input type="text" name="nbr1" placeholder="Entrez le 1er nbr"> <br>
    <input type="text" name="nbr2" placeholder="Entrez le 2eme nbr"> <br>
    <input type="submit" value="Send" name="btn"> <br>
    </form>
</div>
    <?php
            if(isset($_POST["nbr1"]) && isset($_POST["nbr2"])){

              $nbr1 = $_POST["nbr1"];
              $nbr2 = $_POST["nbr2"];
              $resultat;
              for ($i=0; $i<=$nbr2; $i++ ){
                $resultat=$nbr1*$i;
                echo $nbr1.'*'.$i. '='.$resultat."<br>";
              }
            }
    ?>

</body>
</html>
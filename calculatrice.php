<?php
session_start();

if(!isset($_SESSION['login']))
{
  header('location: info.php');
  
}
else if ($_SESSION['login']=='user'){

?>
<!DOCTYPE>
<html>
    <head>
        <meta charset="utf-8">
        <title>ma calculatrice</title>
    </head>
    <body>
        <form method="post" action="#">
        <p>nombre 1<input type="number" name="nombre1"></p>
        <p>nombre 2<input type="number" name="nombre2"></p>
        <select name="choix" >
        <option value="">selectionnez une operation</option>
            <option value="+">+</option>
            <option value="-">-</option>
            <option value="*">*</option>
            <option value="/">/</option>
            <option value="%">%</option>
        

        </select>
        <input type="submit" name="calculer" value="calculer">
        <input type="reset" value="effacer"><br> 
        </form>
        <?php
       if (isset($_POST['calculer'])){
           extract($_POST);
           if ($choix=="+")
           
           {
               $resultat=$nombre1+$nombre2;
            echo "$nombre1 + $nombre2 = $resultat";
           }
          elseif ($choix=="-"){
            $resultat= $nombre1 - $nombre2;
            echo "$nombre1 - $nombre2 =  $resultat";
            }
            elseif ($choix=="*"){
                $resultat=$nombre1*$nombre2;
                echo " $nombre1 * $nombre2 = $resultat";
            }
            elseif ($choix=="/"){
                if($nombre2==0)
                {
                    echo "impossible";
                }
                else
                {
                    $resultat=$nombre1/$nombre2;
                    echo " $nombre1 / $nombre2 = $resultat";
                }
                }
            elseif
            ($choix=="%"){
                if($nombre2==0)
                {
                    echo "impossible";
                }
                else
                {
                    $resultat=$nombre1%$nombre2;
                    echo " $nombre1 % $nombre2 = $resultat";
                }
                }
            } 
        } 
        else echo"Impossible: Profil non concerné";  
    ?>
            </body>
</html>
        
<a href="deconnexion.php">Deconnexion</a>
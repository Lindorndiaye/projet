<?php
session_start();
if(!isset($_SESSION['login']))
{
  header('location: info.php');
  
}
else if ($_SESSION['login']=='admin'){

?>
        <form method="post" action="#">
            <input type="number" name="nbr">
            <input type="submit" name="valider" value="valider">
        </form>
  <?php  
extract($_POST);
if(isset($valider))
{
    if (empty($nbr)) 
    {
        echo"choisir un nombre"; 
    }
    elseif($nbr<0) 
    {
        echo "choisir les valeurs positives";
    }
    else 
    {
        echo "<table border=5 width=300 height=300>";
        $c=0;
        $b=$nbr-1;
        for($i=0;$i<$nbr;$i++)
        {
            echo "<tr>";
        
            for($j=0;$j<$nbr;$j++)
            {
               
                if($j==$c && $j==$b)
                {

                   echo "<td style='background-color:green;'></td>";
                } 
                 elseif($j==$b)
                    {
                        echo "<td style='background-color:red;'></td>";
                    }
                    elseif($j==$i)
                    {
                        
                        echo "<td style='background-color:yellow;'></td>";
                    }
                    else
                    {
                        echo "<td>";
                    }

                }
              $c++; $b--;
              echo "</tr>";

            }
            "</table>";
        }
        
      
    }
   

}
else echo"Impossible: Profil non concerné"; 
?>
  <a href="deconnexion.php">Deconnexion</a>
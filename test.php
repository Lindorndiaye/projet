<?php
session_start();
if(!isset($_SESSION['login']))
{
  header('location: info.php');
  
}
else if ($_SESSION['login']=='user'){

?>

<?php

$date = date(" d-m-Y");
$heure = date("H-i-s");
print("<h1>la date d'aujourd'hui est $date et il est $heure</h1>");
}
else echo"Impossible: Profil non concerné";  
?>

<a href="deconnexion.php">Deconnexion</a>
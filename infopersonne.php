<?php
extract($_POST);
echo "Vous etes $nom <br> et vous avez $age ans<br>";
if ($age<18)
echo "vous etes mineur";
if ($age>=18)
echo "vous etes majeur";
?>
<br>
<a href="info.html"><button>RETOUR</button></a>
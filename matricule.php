<?php
session_start();
if(!isset($_SESSION['login']))
{
  header('location: info.php');
  
}
else if ($_SESSION['login']=='admin'){

?>
<?php
$table= array("amadou"=>array(1441,"amadou",90,),"fakine"=>array(6555,"fakine",57,),"cheikh"=>array(8944,"cheikh",84,));
echo '<table border=1px>';
echo '<tr>';
echo '<th width=200> code </th>'; echo  '<th width=200> nom </th>'; echo '<th width=200> age </th> '; echo '<th width=200> editeur </th> </tr>';
foreach ($table as $trois) {
    foreach ($trois  as $value) {
      echo '<td>'.$value. '</td>';
    }?>
   <td> <a href="x.php">editer</a></td><?php 

    echo '</tr>';
    }
  }
  else echo"Impossible: Profil non concerné";
?>
  
  <a href="deconnexion.php">Deconnexion</a>
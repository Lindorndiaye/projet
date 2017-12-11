
<h1>ACCEUIL</h1>

<form method="POST" action="#">

    veuillez entrer votre login et mot de passe ci apres;</br>
      LOGIN:<input type="text" name="login"></br>
    MOT DE PASSE:<input type="password" name="password"></br>
    <button type="submit" name="valider" value="connexion">Connexion</button>

    
</form>
<?php
$login='admin';
$password='admin';
$login0='user';
$password0='user';
if (isset ($_POST['login']) && isset ($_POST['password'])){
    if ($_POST['login']==$login && $_POST['password']==$password){
        session_start();
        $_SESSION['login']=$_POST['login'];
        $_SESSION['password']=$_POST['password'];
        header('location: redirection.php');

    }
    if ($_POST['login']==$login0 && $_POST['password']==$password0){
        session_start();
        $_SESSION['login']=$_POST['login'];
        $_SESSION['password']=$_POST['password'];
        header('location: redirection0.php');
    }
    else {
        echo "donnees incorectes";
    }
} 

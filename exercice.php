<!DOCTYPE html>
<html lang="fr">
    <head>
        <title>formulaire</title>
        <meta charset="UTF-8">
         <link href="css/style.css" rel="stylesheet">
    </head>
    <body>
        <form action="exercice1.php" method="post">
        <p> NOM
        <input type="text" name="nom">
        </p>
        <p>sexe
        <input type="radio" name="sexe" value="Masculin">Masculin
        <input type="radio" name="sexe" value="Feminin">Feminin
        <p>
            sports 
            <input type="checkbox" name="Football">Football
            <input type="checkbox" name="Basketball">Basketball
            <input type="checkbox" name="Natation">Natation
        </p>
        
        <p>
            Commentaire
            <textarea name="commentaire"></textarea>
        </p>
        <p>
        <input type="submit" value="valider" name="valider">
        </p>
        </form>
           
    </body>
</html>
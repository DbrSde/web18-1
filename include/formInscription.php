<!--Lors du rechargement de la page, nom existe mais pas la première fois,
donc cette fcontion permet de gérer le cas de la première fois. -->
<?php
$nom = isset($nom) ? $nom : "";
$prenom = isset($prenom) ? $prenom : "";
$mail = isset($mail) ? $mail : "";
?>

<form method="post" action="index.php?page=inscription">
    <div>
        <label for="nom">Nom&nbsp;: </label>
        <input name="nom" type="text" value="<?=$nom?>"/>
    </div>
    <div>
        <label for="prenom">Prénom&nbsp;: </label>
        <input name="prenom" type="text" value="<?=$prenom?>" />
    </div>
    <div>
        <label for="email">e-mail&nbsp;: </label>
        <input name="email" type="mail" value="<?=$mail?>"/>
    </div>
    <div>
        <label for="mdp">Mot de passe&nbsp;: </label>
        <input name="mdp" type="password"/>
    </div>
    <div>
        <input type="reset" value="Effacer" />
        <input type="submit" value="Valider" />
    </div>
    <input type="hidden" name="validation" />
</form>
<!--Lors du rechargement de la page, nom existe mais pas la première fois,
donc cette fcontion permet de gérer le cas de la première fois. -->
<?php
$nom = isset($nom) ? $nom : "";
$prenom = isset($prenom) ? $prenom : "";
$mail = isset($mail) ? $mail : "";
?>

<form method="post" action="../index.php?page=inscription" style="width: 30%; margin: auto;">
    <div style="display: flex; justify-content: space-between;">
        <label style="color: green; font-weight: 700; text-transform: uppercase;" for="nom">Nom&nbsp;: </label>
        <input style="width: 70%;" name="nom" type="text" value="<?=$nom?>"/>
    </div>
    <div style="display: flex; justify-content: space-between;">
        <label style="color: green; font-weight: 700; text-transform: uppercase;"  for="prenom">Prénom&nbsp;: </label>
        <input style="width: 70%;" name="prenom" type="text" value="<?=$prenom?>" />
    </div>
    <div style="display: flex; justify-content: space-between;">
        <label style="color: green; font-weight: 700; text-transform: uppercase;"  for="email">e-mail&nbsp;: </label>
        <input style="width: 70%;" name="email" type="mail" value="<?=$mail?>"/>
    </div>
    <div style="display: flex; justify-content: space-between;">
        <label style="color: green; font-weight: 700; text-transform: uppercase;"  for="mdp">Mot de passe&nbsp;: </label>
        <input style="width: 70%;" name="mdp" type="password"/>
    </div>
    <div style="display: flex; justify-content: center;">
        <input style="margin: 2%; background-color: white; color: black; border: 1px solid #4CAF50; box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2), 0 6px 20px 0 rgba(0,0,0,0.19);" type="reset" value="Effacer" />
        <input style="margin: 2%; background-color: white; color: black; border: 1px solid #4CAF50; box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2), 0 6px 20px 0 rgba(0,0,0,0.19);" type="submit" value="Valider" />
    </div>
    <input type="hidden" name="validation" />
</form>
<?php
$nom = isset($nom) ? $nom : "";
$pwd = isset($pwd) ? $pwd : "";
?>
<form method="post" action="index.php?page=login">
    <div style="display: flex; justify-content: space-between;">
        <label style="color: green; font-weight: 700; text-transform: uppercase;" for="email">e-mail&nbsp;: </label>
        <input style="width: 70%;" name="email" type="mail" value="<?=$email?>"/>
    </div>
    <div style="display: flex; justify-content: space-between;">
        <label style="color: green; font-weight: 700; text-transform: uppercase;" for="mdp">Mot de passe&nbsp;: </label>
        <input  ="width: 70%;"name="mdp" type="password" />
    </div>
    <div style="display: flex; justify-content: center;">
        <input style="margin: 2%; background-color: white; color: black; border: 1px solid #4CAF50; box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2), 0 6px 20px 0 rgba(0,0,0,0.19);" type="reset" value="Effacer" />
        <input style="margin: 2%; background-color: white; color: black; border: 1px solid #4CAF50; box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2), 0 6px 20px 0 rgba(0,0,0,0.19);" type="submit" value="Valider" />
    </div>
    <input type="hidden" name="login" />
</form>
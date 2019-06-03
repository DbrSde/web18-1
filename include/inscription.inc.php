<?php

if (isset($_POST['validation'])) {
    $nom = isset($_POST['nom']) ? $_POST['nom'] : "";
    $prenom = isset($_POST['prenom']) ? $_POST['prenom'] : "";
    $mail = isset($_POST['mail']) ? $_POST['mail'] : "";
    $mdp = isset($_POST['mdp']) ? $_POST['mdp'] : "";

    $erreur = array();

    if ($nom == "") array_push($erreur,"Veuillez saisir votre nom");
    if ($prenom == "") array_push($erreur,"Veuillez saisir votre prenom");
    if ($mail == "") array_push($erreur,"Veuillez saisir un mail valide");
    if ($mdp == "") array_push($erreur,"Veuillez saisir un mot de passe");


    if (count($erreur) > 0) {
        $resultat = "<ul>";

        for ($i = 0; $i < count($erreur); $i++) {
            $resultat .= '<li>' . $erreur[$i] . '</li>';
        }

        $resultat .= '</ul>';
        echo $resultat;
        require_once 'formInscription.php';
    }



} else {
    require_once 'formInscription.php';
}

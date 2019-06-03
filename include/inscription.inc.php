<?php

//La fonction isset permet de vérifier sur quelque chose existe.
if (isset($_POST['validation'])) {
    //Récupération des éléments du formulaire
    $nom = isset($_POST['nom']) ? $_POST['nom'] : "";
    $prenom = isset($_POST['prenom']) ? $_POST['prenom'] : "";
    $mail = isset($_POST['mail']) ? $_POST['mail'] : "";
    $mdp = isset($_POST['mdp']) ? $_POST['mdp'] : "";

    $erreur = array();

    //Vérification des champs (remplis ou non)
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
    } else {
        $checkMail = "SELECT COUNT(*) FROM t_users WHERE USEMAIL='" . $mail . "'";
        die($checkMail);
    }



} else {
    require_once 'formInscription.php';
}
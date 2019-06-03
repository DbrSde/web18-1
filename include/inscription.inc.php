<?php

//La fonction isset permet de vérifier si quelque chose existe.
if (isset($_POST['validation'])) {
    // Récupération des éléments du formulaire
    $nom = isset($_POST['nom']) ? $_POST['nom'] : "";
    $prenom = isset($_POST['prenom']) ? $_POST['prenom'] : "";
    $email = isset($_POST['email']) ? $_POST['email'] : "";
    $mdp = isset($_POST['mdp']) ? $_POST['mdp'] : "";

// Initialisation d'un tableau vide
    $erreur = array();

    //Vérification des champs (remplis ou non)
    if ($nom == "") array_push($erreur, "Veuillez saisir un nom");
    if ($prenom == "") array_push($erreur, "Veuillez saisir un prénom");
    if ($email == "") array_push($erreur, "Veuillez saisir un mail");
    if ($mdp == "") array_push($erreur, "Veuillez saisir un mot de passe");


    if (count($erreur) > 0) {
        $msgErreur = "<ul>";
        for ($i = 0; $i < count($erreur); $i++) {
            $msgErreur .= "<li>" . $erreur[$i] . "</li>";
        }
        $msgErreur .= "</ul>";
        echo $msgErreur;
        require_once 'formInscription.php';
    } else {
        //préparation de la requête pour compter le nombre d'occurence
        $checkMail = "SELECT COUNT(*) FROM t_users WHERE  USEMAIL='" . $email . "'";
        $nombreOccurences = $pdo->query($checkMail)->fetchColumn();

        if ($nombreOccurences == 0) {
            $mdp = password_hash($mdp, PASSWORD_DEFAULT);
        } else {
            echo 'Tu es déjà inscrit';
        }
    }
} else {
    require_once 'formInscription.php';
}
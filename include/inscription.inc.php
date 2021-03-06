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

        if ($nombreOccurences == 0 ) {
            // Hashage du mot de passee avec la fonction password_hash
            $mdp = password_hash($mdp, PASSWORD_DEFAULT);
            // str_shuffle mélange les aractères d'une chaîne
            // date('YmdHis') renvoie 20190603170132
            // rand() génére un nombre aléatoire
            $maurice = str_shuffle(date('YmdHis') . $email . rand());
            // Utilisation de la fonction hash avec l'algorithme de hashage sah512 -> 128 caractères
            $token = hash('sha512', $maurice);
            $sql = "INSERT INTO t_users
                (USENOM, USEPRENOM, USEMAIL, USEPWD, USETOKEN, ID_ROLES)
                VALUES ('" .$nom . "', '" . $prenom ."', '" . $email . "', '" . $mdp ."', '" . $token . "',3)";
            $query = $pdo->prepare($sql);
            $query->execute();
            /* Envoi de mail
             *
             * Installer MailDev (NodeJS impératif)
             * npm install -g maildev@1.0.0-rc2
             * Modifier le port dans php.ini (smtp_port 25 à 1025)
             * Lancer maildev avec la commande : maildev
             * Dans un navigateur, http://127.0.0.1:1080
             *
             */
            $msg = "<h1>Inscription OK</h1>";
            $msg .= "<p>Vous valider votre inscription, veuillez <a href=\"http://localhost/web18-1/index.php?page=registrationValidation&amp;mail=$email&amp;token=$token\">ici</a>.</p>";            $sujet = "Validation de votre inscription";
            $headers = 'From: manu@elysee.fr' . "\r\n" .
                'Reply-To: brigitte@elysee.fr';
            if (mail($email, $sujet, $msg, $headers)) {
                echo "Inscription OK";
            }
            else {
                echo "L'inscription a échouée";
            }
        }
    }
} else {
    require_once 'formInscription.php';
}
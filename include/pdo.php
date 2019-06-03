<?php

//Regroupe des instructions à exécuter et définit une réponse si l'une de ces instructions provoque une exception.
// C'est différent d'un IF ELSE !
try {
    $pdo = new PDO('mysql:host=localhost;dbname=cartes',
        'root',
        '',
        array(
            //Méthode statique : Le fait de déclarer des propriétés ou des méthodes comme
            // statiques vous permet d'y accéder sans avoir besoin d'instancier la classe. On paramètre donc grace à ça.

            // Définition du jeu de caractères
            PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8',
            // Façon dont on récupère les jeux d'enregistrement (sous forme d'objet ici)
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ,
            // Niveau d'erreurs
            PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING
        ));
}
// Si l'instanciation de l'objet $pdo ne fonction pas, levée d'exception
catch (PDOException $e) {
    // Affichage du message d'erreur
    echo "Erreur de connexion : " . $e->getMessage();
}
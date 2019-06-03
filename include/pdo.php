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

            //Definit le jeu de caractères
            PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAME utf8',

            //La façon dont on récupère les informations (Ici objet)
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ,

            //Gérer les messages d'erreur/ Niveau d'erreur
            PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING,
        ));
}
//Si l'instanciation de l'objet $pdo ne fonctionne pas, levée d'exception
catch (PDOException $e) {
    echo "Erreur de connexion :" . $e->getMessage();

}
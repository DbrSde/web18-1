<?php
function getLang() {
    //Récupère l'encodage du pays dans lequel on se trouve, si on ne récupère rien, on consièdre qu'on est en FRANCE.
    $locale = locale_accept_from_http($_SERVER['HTTP_ACCEPT_LANGUAGE']);
    if ($locale =="")
        $locale = 'fr-FR';

    //Récupère les deux premiers caractères de la chaîne.
    $locale = substr($locale, 0, 2);

    //Renvoie la fonction.
    return $locale;
}
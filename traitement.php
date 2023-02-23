<?php
    //Déclaration du tableau avec les infos de l'utilisateur
    $user = array(
        "id"        => 2,
        "prenom"    => "Jean",
        "nom"       => "PeuPlu",
        "age"       => 40
    );

    //Affichage de l'age de la personne dans 50 ans
    $futur = $user["age"] + 50;
    echo "Bonjour ".$user["prenom"]." ".$user["nom"]." ! "."Dans 50 ans vous aurez : ".$futur;
?> 
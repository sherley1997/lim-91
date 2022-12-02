<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>FICHER PHP</h1>
    <?php
        echo "Cette fois mon php est <strong>interprété</strong>";
        $chaine = "c'est le cours de logique";
        /* 
        La fonction strlen renvoie la taille d'une chaine de caractères 
        */
        echo "La longueur de la chaîne de caractères est " . strlen($chaine);
        echo "<hr>";

        /**
            SI longueur(mdp) >= 10 ET longueur(mdp) <= 15 ALORS
                afficher "mot de passe valide";
            SINON
                afficher "mot de passe invalide";
            FINSI

            SI longueur(mdp) >= 10 ALORS
                SI longueur(mdp) <= 15 ALORS
                    afficher "mot de passe valide";
                SINON
                    afficher "le mot de passe est trop long";
                FINSI
            SINON
                afficher "le mot de passe est trop court";
            FINSI
         */
        $mdp = "azerazertyhsdfhfsthsdftu";
        // if( strlen($mdp) >= 10 && strlen($mdp) <= 15 ) {
        //     echo "le mot de passe est valide<br>";
        // } else {
        //     echo "le mot de passe est invalide<br>";
        // }
    if( strlen($mdp)>= 10 ) {
        if( strlen($mdp) <= 15) {
            if( strlen($mdp) == 12) {
                echo " le mot de passe fait 12 caractères";
            } else {
                echo "le mot de passe est valide";
            }
        } else{
            echo "<div class='rouge'>le mot de passe est trop long</div>";
        }
    } else {
        echo "le mot de passe est trop court";
    }
    ?>
    <p>Nouvelle ligne</p>
</body>
</html>
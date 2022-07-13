<?php 

if (isset($_POST['frmInscription'])) {
    $email = isset($_POST['email']) ? htmlentities(trim($_POST['email'])) : "";
    
    $erreurs = array();

    if (mb_strlen($email) === 0)
        array_push($erreurs, "Veuillez saisir une adresse mail");

    elseif (!(filter_var($email, FILTER_VALIDATE_EMAIL)))
        array_push($erreurs, "Veuillez saisir une adresse mail conforme");

    if (count($erreurs) > 0) {
        $messageErreurs = "<ul>";

        for ($i = 0 ; $i < count($erreurs) ; $i++) {
            $messageErreurs .= "<li>";
            $messageErreurs .= $erreurs[$i];
            $messageErreurs .= "</li>";
        }
    
        $messageErreurs .= "</ul>";
    
        echo $messageErreurs;

        require_once './includes/frmInscription.php';
    }

    else {
        // Vérification de l'inscription préalable ou non de l'utilisateur
        if (verifierUtilisateur($email)) {
            // La fonction verifierUtilisateur() renvoie vrai (il y a déjà une ligne avec cette adresse), pas de traitement
            echo "Vous êtes déjà inscrit";
        } else {
            // La fonction verifierUtilisateur() renvoie faux, donc on procède à l'inscription
            if (inscrireUtilisateur($nom, $prenom, $email, $mdp1))
                $message = "Utilisateur inscrit";
            else
                $message = "Erreur";

            echo $message;

            //echo "<script>window.location.replace('http://localhost:8080/DWWM-Vernon-2022-PHP-Alibobo/')</script>";
        }
    }
}

else {
    $nom = $prenom = $email = "";
    require_once 'frmInscription.php';
}


?>

<h1>Mot de passe oublié</h1>

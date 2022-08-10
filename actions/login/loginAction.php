<?php
require('actions/database.php');

if (isset($_POST['valider'])) {


    //On vérifie si le user a bien completé  tous les champs du formulaire
    if (!empty($_POST['pseudo'])  and !empty($_POST['password'])) {

        echo ('formulaire rempli');

        //On recupere les donnees de l'utilisateur 
        $user_pseudo = htmlspecialchars($_POST['pseudo']);
        $user_password = htmlentities($_POST['password']);

        //on verifie si le pseudo des correct
        $checkIfUserExist = $bdd->prepare('SELECT * FROM  utilisateurs WHERE pseudo=?');
        $checkIfUserExist->execute(array($user_pseudo));

        if ($checkIfUserExist->rowCount() > 0) {

            //on recupere les donnees de l'utilisateur
            $userInfos = $checkIfUserExist->fetch();
            var_dump($userInfos);

            //On verifie si le mdp est correct
            if ($user_password === $userInfos['mdp']) {
                echo ('password correct');

                //On authentifie l'utilisateur
                $_SESSION['auth'] = 'true';
                $_SESSION['pseudo'] = $userInfos['pseudo'];

                var_dump($_SESSION);


                //On redirige l'utilisateur vers la page d'accueil
                header('Location: listerdv.php');
            } else {
                $errorMsg = "Votre mot de passe est incorrect ...";
            }
        } else {
            $errorMsg = "Votre pseudo est incorrect";
        }
    } else {
        $errorMsg = "Veuillez Completer tous les champs ...";
    }
}

<?php
require('database.php');
if (isset($_POST['valider'])) {

    if (!empty($_POST['name']) and !empty($_POST['telephone']) and !empty($_POST['date'])) {

        $nom_visiteur = htmlspecialchars($_POST['name']);
        $tel_visiteur = htmlspecialchars($_POST['telephone']);
        $date_rdv = $_POST['date'];
        $date_jour_courant = date('d/m/Y');

        $enregistrerVisiteur = $bdd->prepare('INSERT INTO visiteur(nom_visiteur,tel_visiteur) VALUES(?,?)');
        $enregistrerVisiteur->execute(array($nom_visiteur, $tel_visiteur));
        echo ("enregistrement termine");

        //On recupere l'id du visiteur qu'on vient de creer
        $recupererIdVisiteur = $bdd->prepare('SELECT id_visiteur FROM visiteur WHERE nom_visiteur=? AND tel_visiteur=?');
        $recupererIdVisiteur->execute(array($nom_visiteur, $tel_visiteur));

        $id_visiteur = $recupererIdVisiteur->fetch();


        $enregistrerRdv = $bdd->prepare('INSERT INTO rendezvous(date,id_visiteur) VALUES(?,?)');
        $enregistrerRdv->execute(array($date_rdv, $id_visiteur["id_visiteur"]));
    } else {
        echo ('veuillez completer tous les champs');
    }
}

<?php
session_start();
require ('actions/database.php');


//Validation du formulaire
if(isset($_POST['validate'])){

    // Verifier si le user a complete tous les champs
    if(!empty($_POST['email']) AND !empty($_POST['password'])) {

        //les donnees de l'user
        $email_patient = htmlspecialchars ($_POST['email']);
        $password_patient = htmlspecialchars ($_POST['password']);
       
         //verifier si l'email  et le pseudo du patient existe
        $checkIfPatientExists = $bdd -> prepare ('SELECT * FROM patients WHERE  email= ?' );
        $checkIfPatientExists -> execute (array($email_patient));

        if ($checkIfPatientExists -> rowCount()> 0) {
             
            // recuperer les donnees de l'utilisateur
            $patientsInfo = $checkIfPatientExists -> fetch();

            //verifier si le mot de passe est correct
            if (password_verify($password_patient, $patientsInfo ['passname'] )) {

         //authentifier le patient sur le site et recuperere ses donnees dans des variables globales sessions
         $_SESSION ['auth'] = true;
         $_SESSION['id'] = $patientsInfo ['id'];
         $_SESSION['firstname'] = $patientsInfo ['first_name'];
         $_SESSION['lastname'] = $patientsInfo ['last_name'];
         $_SESSION['email'] = $patientsInfo ['email'];
         
         //rediriger le patient vers la page du formulaire de rendez vous
         header('Location: my-rdv.php');


            } else {
                $errorMsg = "Votre mot de passe est incorrect";
            }

        } else {
            $errorMsg = "Votre pseudo est incorrect";
        }
         


    } else {
        $errorMsg = "Veillez completer tous les champs...";
     }
}

<?php
require('actions/database.php');
//Validation du formulaire
if(isset($_POST['validate'])){

    // Verifier si le user a complete tous les champs
    if(!empty($_POST['firstname']) AND !empty($_POST['lastname']) AND !empty($_POST['email']) AND !empty($_POST['tel']) AND  !empty($_POST['password'])) {

        //les donnees de l'user
        $patient_firstname = htmlspecialchars ($_POST['firstname']);
        $patient_lastname = htmlspecialchars ($_POST['lastname']);
        $patient_email = htmlspecialchars ($_POST['email']);
        $patient_tel = htmlspecialchars ($_POST['tel']);
        $patient_password = password_hash ($_POST['password'], PASSWORD_DEFAULT);

          //verifier si l'utilisateur existe deja sur le site
        $checkIfUserAlreadyExists = $bdd -> prepare ('SELECT email FROM patients WHERE email = ?');
        $checkIfUserAlreadyExists -> execute (array ($patient_email));

        if ($checkIfUserAlreadyExists -> rowCount () == 0) {

            //inserer l'utilisateur dans la bdd
            $insertUserOnWebsite = $bdd -> prepare ('INSERT INTO patients (first_name, last_name, email, tel, passname) VALUES (?,?,?,?,?)');
           $insertUserOnWebsite -> execute (array ($patient_firstname, $patient_lastname, $patient_email, $patient_tel, $patient_password));

           //recuperer les informations de l'utilisateur
           $getInfosOfThisUserReq = $bdd -> prepare ('SELECT id, first_name, last_name, email  FROM patients WHERE first_name = ? AND last_name = ? And email = ?');
           $getInfosOfThisUserReq -> execute (array ($patient_firstname, $patient_lastname, $patient_email));
           
        
           $usersInfo = $getInfosOfThisUserReq -> fetch ();

           //authentifier l'utilisateur sur le site et recuperere ses donnees dans des variables globales sessions
           $_SESSION ['auth'] = true;
           $_SESSION['id'] = $usersInfo ['id'];
           $_SESSION['firstname'] = $usersInfo ['first_name'];
           $_SESSION['lastname'] = $usersInfo ['last_name'];
           $_SESSION['email'] = $usersInfo ['email'];
           
           //rediriger l'utilisateur vers la page d'accueil
           header('Location: signrdv.php');

        } else {
            $errorMsg = "L'utilisateur existe deja sur le site";
        }

    } else {
        $errorMsg = "Veillez completer tous les champs...";
     }
}
?>
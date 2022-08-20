<?php 
require_once('actions/database.php');
session_start();

if(isset($_POST['submit'])){
    if(isset($_POST['email'], $_POST['nom']) && !empty ($_POST['prenom']) && !empty ($_POST['telephone'])&& !empty ($_POST['password'])) {


        $email = htmlspecialchars($_POST['email'] );
        $nom = htmlspecialchars($_POST['nom']) ;
        $prenom = htmlspecialchars($_POST['prenom'] );
        $password = htmlspecialchars($_POST['password']) ;
        $telephone = htmlspecialchars($_POST['telephone']) ;
        
         $options = array ("cost" =>4);
          $hashpass = password_hash ($password, PASSWORD_BCRYPT, $options);


        
        var_dump($nom);
        

        if(filter_var($email, FILTER_VALIDATE_EMAIL)) {
            
             $sql= "select *from patients where email=:var" ;
             $statement = $bdd -> prepare ($sql) ;
             $params = ["var"=>$email] ;
             $statement -> execute ($params);
             
             if ($statement -> rowCount() == 0) {
                 $requete= "insert into patients (first_name,last_name,email,tel,password) values (?,?,?,?,?)";
                 $statement=$bdd -> prepare ($requete) ;
                 $statement -> execute (array($nom,$prenom,$email,$telephone,$hashpass));


                 //recuperer les informations de l'utilisateur
           $getInfosOfThisUserReq = $bdd -> prepare ('SELECT id, first_name, last_name, email  FROM patients WHERE first_name = ? AND last_name = ? And email = ?');
           $getInfosOfThisUserReq -> execute (array ($nom, $prenom, $email));
           
        
           $usersInfo = $getInfosOfThisUserReq -> fetch ();

           //authentifier l'utilisateur sur le site et recuperere ses donnees dans des variables globales sessions
           $_SESSION ['auth'] = true;
           $_SESSION['id'] = $usersInfo ['id'];
           $_SESSION['nom'] = $usersInfo ['first_name'];
           $_SESSION['prenom'] = $usersInfo ['last_name'];
           $_SESSION['email'] = $usersInfo ['email'];
           
               
                header('Location: prendrerdv.php');
             }  


        }

        
    }
    


}
?>
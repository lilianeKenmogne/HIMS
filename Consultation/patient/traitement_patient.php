<!DOCTYPE html>
<html>
    <head>
    <title> Inscription Patient </title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="">
</head>
<body>
    <?php
    $serveur='localhost';
    $dbname='consultationS';
    $user='root';
    $password='';
    
    try{

            $dbco= new PDO("mysql:host=$serveur; dbname=$dbname",$user,$password);


            $sql="INSERT INTO patient(nom_patient,prenom_patient,tel_,email_,mdp_patient)
            VALUES(?,?,?,?,?)";
            $statement=$dbco->prepare($sql);
            $statement->execute(array($_POST['lastname'],$_POST['firstname'],$_POST['mail'],
            $_POST['num'],$_POST['pass']));
            echo 'Vos informations ont bien ete prise en compte';
    }
    catch(PDOException $e){
        echo"Erreur : " . $e->getMessage();
    }

    ?>

       
     <?php 
    session_start();
    $collectid="SELECT max(id_patient) as n FROM patient";
    $recept=$dbco->prepare($collectid);
    $recept->execute();

   $result=$recept->fetch()['n'];
   $_SESSION['id_patient']=$result;
   var_dump($_SESSION['id_patient']);


   header('location:../rendez_vous/rendez_vous.php');
    ?>

    </body>
    </html>
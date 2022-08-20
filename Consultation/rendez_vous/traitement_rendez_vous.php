<?php
 include '../patient/head.php';
?>
<!DOCTYPE html>
<html>
    <head>
    <title> Choix du rdv </title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="">
</head>
<body>
    <?php
    $serveur='localhost';
    $dbname='consultations';
    $user='root';
    $password='';
    session_start();
    var_dump($_SESSION);
    try{

            $dbco= new PDO("mysql:host=$serveur; dbname=$dbname",$user,$password);

            //var_dump($_POST['date_rdv']);
            $sql="INSERT INTO rendez_vous(date_rdv,heure_rdv,id_patient)
            VALUES(?,?,?)";
            $statement=$dbco->prepare($sql);
            $statement->execute(array($_POST['date_rdv'],$_POST['heure_rdv'],$_SESSION['id_patient']));
            echo 'Vos informations ont bien ete prise en compte';
    }
    catch(PDOException $e){
        echo"Erreur : " . $e->getMessage();
    }
    header('location:../prise_de_rdv/rdv_patient.php');
    ?>


    </body>
    </html>
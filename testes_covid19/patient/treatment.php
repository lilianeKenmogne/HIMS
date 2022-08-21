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
    $dbname='testes_covid19';
    $user='root';
    $password='';
    
    try{

            $dbco= new PDO("mysql:host=$serveur; dbname=$dbname",$user,$password);


            $sql="INSERT INTO patient(nom_patient,prenom_patient,email,tel,mot_de_passe_patient)
            VALUES(?,?,?,?,?)";
            $statement=$dbco->prepare($sql);
            $statement->execute(array($_POST['nom_patient'],$_POST['prenom_patient'],$_POST['email'],
            $_POST['tel'],$_POST['mot_de_passe_patient']));
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
  // var_dump($_SESSION['id_patient']);


   header('location:../rendez_vous/rdv.php');
?>

    </body>
    </html>
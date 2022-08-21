<!DOCTYPE html>
<html>
<head>
	<title>Votre Rendez-vous pris</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>

<?php 
  session_start();
 /* $dsn='mysql:dbname=testes_covid19;host=localhost';
$user='root';
$password='';

try{
    $pdo=new PDO($dsn,$user,$password);

} catch (PDOException $e){
    echo $e->getMessage();
    die();
}



   
       // Connexion a la table patient
       $sql="SELECT id_patient, nom_patient, email, tel FROM patient"; 
       $result=$mysqlpatient->prepare($sql);
       $result->execute();
       $patient=$result->fetchAll();

       try{
        $pdo=new PDO($dsn,$user,$password);
        $result=$pdo->query($sql);
        if ($result=== false){
            die("Erreur");
        }
       } catch (PDOException $e){
        echo $e->getMessage();
        die();
    }
      
        // Connexion a la table rendez_vous
       $sql2="SELECT  date_rdv,  heure_rdv  FROM rendez_vous" ;
       $result2=$mysqlrendez_vous->prepare($sql2);
       $result2->execute();
       $rendez_vous=$result2->fetchAll();
     
       try{
        $pdo=new PDO($dsn,$user,$password);
        $result2=$pdo->query($sql2);
        if ($result2=== false){
            die("Erreur");
        }
       } catch (PDOException $e){
        echo $e->getMessage();
        die();
    }
//header('annulerInscription.php');  */


$host='localhost';
$serveur='testes_covid19';
$user='root';
$password='';

$dsn="mysql:host=$host; dbname=$serveur";
$sql="SELECT  id_patient, nom_patient, email, tel FROM patient";
//$sql=(array($_SESSION['id_patient']));

$sql2="SELECT  date_rdv,  heure_rdv  FROM rendez_vous";
//$sql2=(array($_SESSION['id_patient']));
try{
    $pdo=new PDO($dsn, $user, $password);
    $result=$pdo->query($sql);
   // var_dump($result->fetchAll());

    $result2=$pdo->query($sql2);
    //var_dump($result2->fetchAll());
    if($result ===false && $result2 ===false ){
        die("Erreur");
    }
}catch (PDOException $e){
    echo $e->getMessage();
}
   
/*
try {
   
    $bdd = new PDO('mysql:host=localhost;dbname=testes_covid19', 'root', '');
    
} catch (Exception $e) {

    die('une erreur a été trouvée: ' . $e->getMessage()); // die permet de faire
    // planter le code et affice un message a l'ecran
}
$checkIfRdvExist = $bdd -> prepare ('SELECT * FROM patient WHERE id_patient= ? ORDER BY jourrdv  DESC ');
$checkIfRdvExist -> execute (array($_SESSION));

$checkIfPatientExist = $bdd ->  prepare ('SELECT * FROM rendez_vous');
$checkIfPatientExist -> execute (array($_SESSION));     */   


?> 

<body>
    <style>
    table{
        margin:0 auto;
        font-size:large;
        border:2px solid black;
    }

    h2{
        text-align: cnter;
        color:#006600;
        font-size:xx-large;
        font-family:'Gill Sans', 'Gill Sans MT';
    }
    td{
        background-color:#E4F5D4 ;
        border: 2px solid black;
    }

    th,td{
        font-weight:bold;
        border: 2px solid black;
        padding:10px;
        text-align:center;
    }

    td{
        font-weight:lighter;
    }
    </style>

	
<section>

<div class="header">
	<h2  style=" text-align:center;">Inscription Patient</h2>
</div>

<table>
<tr>
    <th> IDENTIFIANT DU PATIENT: </th>
    <th> NOM: </th> 
    <th> E-MAIL: </th> 
    <th> NUMERO DE TELEPHONE: </th> 
    <th> DATE DU RENDEZ-VOUS: </th> 
    <th> HEURE DU RENDEZ-VOUS: </th> 
    
        
</tr> 
<?php
// Recuperation des elements dans les tables patients, et rendez_vous.
 
   //Code copier de Barbara qui as tjrs rater chez moi.
//while (($patientInfos = $checkIfPatientExist -> fetch()) AND ($RdvInfos = $checkIfRdvExist -> fetch()) ){


    while(($row = $result->fetch()) AND  ($rows = $result2->fetch()))
   //The good
   // while ($row = $result2->fetch(PDO::FETCH_ASSOC));
    {   
?>

    <tr> 
        <!-- Recherche de donnees dans chaque ligne de chaque colone -->
        <td>  <?php echo  ($row['id_patient']); ?> </td>
        <td>  <?php echo  ($row['nom_patient']); ?> </td>
        <td>  <?php echo  ($row['email']); ?> </td>
        <td>  <?php echo  ($row['tel']); ?> </td>
        <!-- Recherche de donnees dans chaque ligne de chaque colone -->
        <td>  <?php echo ($rows['date_rdv']); ?> </td>
        <td>  <?php echo ($rows['heure_rdv']); ?> </td> 
      
</tr>
<?php }    ?>
  
</tr>


</table>

</section>


</body>
</html>
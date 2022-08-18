<?php

require ('actions/database.php');


      //verifier si la question existe 
      $checkIfRdvExist = $bdd -> prepare ('SELECT * FROM rdv WHERE email_autheur= ? ORDER BY jourrdv  DESC ');
      $checkIfRdvExist -> execute (array($_SESSION['email']));

      $checkIfPatientExist = $bdd ->  prepare ('SELECT * FROM patients WHERE email= ?');
      $checkIfPatientExist -> execute (array($_SESSION['email']));

      

     
    


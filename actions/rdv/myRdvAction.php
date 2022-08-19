<?php
require ('actions/database.php');

$getAllMyRdvs = $bdd -> prepare ('SELECT id, jourrdv, Thoraire FROM rdv WHERE id_autheur= ? ORDER BY id DESC ');
$getAllMyRdvs -> execute (array($_SESSION['id']));
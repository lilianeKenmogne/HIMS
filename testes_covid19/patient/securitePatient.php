<?php
include('serveurRdv.php');
$options= array("cost"=>4);
$hashpass=password_hash("root",PASSWORD_BCRYPT,$options);

//echo $hashpass;

/*$hashpass=md5("root");  (Autre facon de crypter un mot de passe)
echo $hashpass;*/

?>

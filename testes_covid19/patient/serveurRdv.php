<?php 
$dsn='mysql:dbname=testes_covid19;host=localhost';
$user='root';
$password='';

try{
    $pdo=new PDO($dsn,$user,$password);

} catch (PDOException $e){
    echo $e->getMessage();
    die();
}

 ?>

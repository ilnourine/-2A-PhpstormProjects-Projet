<?php
/**
 * Created by PhpStorm.
 * User: ilnourine
 * Date: 15/11/17
 * Time: 16:11
 */

$dbs="mysql:host=hina;dbname=dbchrasclard2";
$user="chrasclard2";
$password="chrasclard2";

try {
    $db = new PDO($pds, $user, $password);
}
catch(PDOException $e ) {

    printf("Probleme initialisation PDO");
}

$query="INSERT INTO news values(:titre,:description,:lien,:guid,:datesortie,:categorie)";
$stmt=$db->prepare($query);
$titre= "TITRE";
$description = "DESCRIPTION";
$lien = "WWW.LIEN";
$guid = "GUID (ID)";

$datesortie = date('2017-11-14 17:40:12');

$categorie = "CATEGORIE";

$stmt->bindValue(':titre',$titre,PDO::PARAM_STR) ;
$stmt->bindValue(':description',$description,PDO::PARAM_STR) ;
$stmt->bindValue(':lien',$lien,PDO::PARAM_STR) ;
$stmt->bindValue(':guid',$guid,PDO::PARAM_STR) ;
$stmt->bindValue(':datesortie',$datesortie,PDO::PARAM_STR) ;
$stmt->bindValue(':categorie',$categorie,PDO::PARAM_STR) ;


$stmt->execute();




?>
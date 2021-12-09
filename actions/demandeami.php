<?php

if (isset($_GET['id']) && !empty($_GET['id']) && !empty($_SESSION['id'])){

 $idUser = $_SESSION['id'];//id Utilisateur 1, l'id de l'utilisateur connecté
 $idAmi = $_GET['id'];//id Utilisateur 2, l'id de l'utilisateur à qui on souhaite envoyer la demande
 echo $idUser . $idAmi;

$sql='insert into lien VALUES(NULL,?,?,"attente")';
$query = $pdo->prepare($sql);
$query->execute(array($idUser, $idAmi)); // si on met des ? on met les variables dans les () du execute
}
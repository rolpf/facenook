<?php
session_start();

 $idUser = $_SESSION('id');//id Utilisateur 1, l'id de l'utilisateur connecté
 $idAmi = $_GET('id');//id Utilisateur 2, l'id de l'utilisateur à qui on souhaite envoyer la demande

$sql="insert into lien VALUES(NULL,?,?,'attente')";
$query = $pdo->prepare($sql);
$query->execute();
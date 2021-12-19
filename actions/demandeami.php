<?php

if (isset($_GET['id']) && !empty($_GET['id']) && !empty($_SESSION['id'])){

 $idUser = $_SESSION['id'];//id Utilisateur 1, l'id de l'utilisateur connecté
 $idAmi = $_GET['id'];//id Utilisateur 2, l'id de l'utilisateur à qui on souhaite envoyer la demande
 echo $idUser . $idAmi;

 // verifier s'il n'y a pas déjà un lien
$sqlVerif = 'SELECT * FROM lien WHERE (idUtilisateur1=? AND idUtilisateur2=?) OR (idUtilisateur1=? AND idUtilisateur2=?)';
// Lien contient : id, idUtilisateur1, idUtilisateur2, etat
// Le premier paramètre est l'id de l'utilisateur A
// Le deuxième parametre est l'id de l'utilisateur B
// Le troisième paramètre est l'id de l'utilisateur B
// Le quatrième paramètre est l'id de l'utilisateur A
$queryVerif = $pdo->prepare($sqlVerif);
$queryVerif->execute(array($idUser, $idAmi, $idAmi, $idUser));
$linkVerif = $queryVerif->fetchAll(); // ne pas oublier de mettre dans un array php hihihi


if(empty($linkVerif)) {
    // ne doivent pas déjà être amis + ne doivent pas déjà être en attente
    $sql='insert into lien VALUES(NULL,?,?,"attente")';
    $query = $pdo->prepare($sql);
    $query->execute(array($idUser, $idAmi)); // si on met des ? on met les variables dans les () du execute
    echo "Demande d'ami envoyée !";
 } else { echo "Vous ne pouvez pas demander cet utilisateur en ami";}
}   
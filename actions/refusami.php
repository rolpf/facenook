<?php

include("config/bd.php");
include("config/actions.php");

if (isset($_GET['id']) && !empty($_GET['id']) && !empty($_SESSION['id'])){
$idAmi=htmlspecialchars($_GET['id']); // id de l'ami qu'on veut accepter
$idUser=htmlspecialchars($_SESSION['id']); // notre propre id

    $sql = "UPDATE lien SET etat = 'refus' WHERE (idUtilisateur1=? AND idUtilisateur2=?) OR (idUtilisateur1=? AND idUtilisateur2=?)";
    $query = $pdo->prepare($sql);
    $query->execute(array($idAmi, $idUser, $idUser, $idAmi)); // si on met des ? on met les variables dans les () du execute
    header("Location: index.php?action=page2");
}
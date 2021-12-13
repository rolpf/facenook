<?php


if (isset($_GET['id']) && !empty($_GET['id']) && !empty($_SESSION['id'])){

    $idUser = $_SESSION['id'];//id Utilisateur 1, l'id de l'utilisateur connecté
    $idAmi = $_GET['id'];


    $sql='SELECT * from lien WHERE (idUtilisateur1=? OR idUtilisateur2=?)';
    $query = $pdo->prepare($sql);
    $query->execute(array($idUser, $idUser));
    $demandeAmi->fetchAll();

}
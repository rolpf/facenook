<?php
// ne pas poster sur le mur de ses amis
if(isset($_POST['newPost']) && !empty($_POST['newPost'])) {
    $idUser=$_SESSION['id'];
    $message = addslashes(htmlspecialchars($_POST['newPost']));
    $sql = "INSERT INTO ecrit VALUES (NULL,'$message',NOW(),NULL,'$idUser','$idUser')";
    //$sql = "INSERT INTO ecrit VALUES (NULL,NULL,'$message',NOW(),NULL,'$monid','$idami')"; // s'il n'y a pas de photo
    $query = $pdo->prepare($sql);
    $query->execute();
    
    header('location: index.php?action=timeline');
    // header('Location: ./index.php?action=mur&id=' . $idami); pour poster sur le mur de son ami

}
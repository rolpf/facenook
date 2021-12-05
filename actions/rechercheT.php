<?php

// SQL requête
// SELECT * FROM user WHERE login LIKE '%?%' 

if (isset($_GET['recherche']) && !empty($_GET['recherche'])) {
    $recherche = htmlspecialchars(strtolower($_GET['recherche']));
    echo $recherche;
    //echo "<h2> Résultats de la recherche pour : $recherche</h2>";
    //$sqlConnect = "select * from user where login LIKE %$recherche%";
   $sql= "select * from user where login LIKE ?";
    $query = $pdo->prepare($sql);
    $query->execute(array($_GET['recherche']));
    $searchResult = $query->fetch();
 
    var_dump($searchResult);
}


header('location: index.php?action=recherche');

<?php
if (!empty($_POST['user']) && /*!empty($_POST['nom']) && !empty($_POST['prenom']) && */!empty($_POST['mdp']) && !empty($_POST['email'])){
  $regex = '/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/';
  //On vérifie si le format de l'adresse mail est correct
  if (preg_match($regex, $_POST['email'])){ //preg_match — Effectue une recherche de correspondance avec une expression rationnelle standard
    $user = htmlspecialchars($_POST['user']); // on récupère l'identifiant
    //$nom = htmlspecialchars($_POST['nom']); // on n'a pas mis de nom dans la base de données
    //$prenom = htmlspecialchars($_POST['prenom']); // on n'a pas mis de prénom dans la base de données
    $mdp = sha1($_POST['mdp']); // hachage du mot de passe pour plus de sécurité
    $email = htmlspecialchars($_POST['email']);
      try{
        $sql = "INSERT INTO user VALUES('$user',/*'$nom', '$prenom',*/PASSWORD('$mdp'),'$email',NULL,'default.jpg')";
        $query = $pdo->prepare($sql);
        $query->execute();


        $sql1 = "SELECT * FROM user WHERE email=?";

        // Etape 1  : preparation
        $query = $pdo->prepare($sql1);
        // Etape 2 : execution : 2 paramètres dans la requêtes !!
        $query->execute(array($email));
        // Etape 3 : ici le login est unique, donc on sait que l'on peut avoir zero ou une  seule ligne.
        // un seul fetch
        $line = $query->fetch();

        //session_start();
        //$_SESSION['id'] = $line['id'];
        //$_SESSION['email'] = $line['email'];
        //$_SESSION['user'] = $line['user'];
        //$_SESSION['nom'] = $line['nom'];
        //$_SESSION['prenom'] = $line['prenom'];
        //$_SESSION['avatar'] = "default.jpg";
        header('Location: index.php?action=profil');
      } catch (Exception $e) {
        $_SESSION['erreurinscription'] = 'Cette adresse mail est déjà utilisée !';
        header('Location: index.php?action=index');
        }
    }else{
    $_SESSION['erreurinscription'] = 'Le format de votre adresse e-mail est incorrect !';
    header('Location: index.php?action=index');
}
}
  ?>

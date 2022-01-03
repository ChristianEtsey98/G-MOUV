


<!doctype html>
<html lang="fr">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="Cache-control" content="private" />
  <title>G-mouv'</title>
  <meta name="description" content="Notre solution a pour but de garantir la fiabilité des pilotes, à travers divers tests psychotechniques.">
  <meta name="robots" content="index, follow" />
  <link rel="icon" type="image/png" href="img/G-mouv'.png">
  <link rel="stylesheet" href="css/navMananger.css">
  <link rel="stylesheet" href="css/index.css">
  <link rel="stylesheet" href="css/backtotop.css">
  <link rel="stylesheet" href="css/footer.css">
  <link href="https://fonts.googleapis.com/css?family=Oswald:200,300,400,500,600,700&display=swap" rel="stylesheet">
</head>
<body>

<nav>
  <div class="logoNav">
    <a href="index_Manager.html">
      <img src="img/G-mouv'.png"></img>
    </a>
  </div>
  <div class="contenuNav">
    <a href="users_Manager.php">Utilisateurs</a>
       <a id="boutonConnexion">
      rechercher<ion-icon name="arrow-dropdown"></ion-icon>
    </a>
    <a href="">Graphiques</a>
    <a href="">Statistiques</a>
  </div>

<!--créer son compte, connexion, accéder à son compte-->
  <div id="listeConnexion" class="cacherListeLangues">
    <div class="user">
      <a href="rechercher.php">
        Recherche simple
      </a>
    </div>
    <div class="user">
      <a href="">
        Recherche multicritère
      </a>
    </div>
  </div>
  


  <!-- Bouton version mobile -->
  <div class="contenuNavMobile">
    <button id="bouton">
      <ion-icon name="menu"></ion-icon>
    </button>
  </div>

  <!-- Menu version mobile -->
  <div id="menuDeroulant" class="cacherMenuDeroulant">
    <p>
      <a href="index.html">Accueil</a>
      <a href="connexion.html">Connexion</a>
      <a href="faq.html">FAQ</a>
      <a href="index.html#contact">Contact</a>
      <div id="listeLanguesMobile">
                  <a href="../en/index.html">
            <img class="flag" src="img/en.png">
          </a>
                  <a href="../es/index.html">
            <img class="flag" src="img/es.png">
          </a>
              </div>
    </p>
  </div>
</nav>

  <div id=texetnous>
   
  <div id="milieu">
    <h2>Recherche d'utilisateur </h2>
   <h5>Entrez le nom de l'utilisateur </h5>
   <form action="" method="POST">
    <div class="formulaire">
      <input type="text" name="nom">
    </div>
    <input class="envoyer" type="submit" value="Recherche">
     
   </form>
  </div>


<?php
    $db_server = 'localhost'; // Adresse du serveur MySQL
    $db_name = 'mydb';            // Nom de la base de données
    $db_user_login = 'root';  // Nom de l'utilisateur
    $db_user_pass = 'root';       // Mot de passe de l'utilisateur

    // Ouvre une connexion au serveur MySQL
    $conn = mysqli_connect($db_server,$db_user_login, $db_user_pass, $db_name);

     // Récupère la recherche
     $recherche = isset($_POST['nom']) ? $_POST['nom'] : '';

     // la requete mysql
     $q = $conn->query(
     "SELECT * FROM utilisateur
      WHERE nom LIKE '%$recherche%' or prenom LIKE '%$recherche%'
      LIMIT 10");

     // affichage du résultat
     echo '<br />Résultat de la recherche: <br />';
     while( $r = mysqli_fetch_array($q)){
     echo $r['nom'].' '.$r['prenom'].' - '.$r['adresse'].' '.$r['code_postal'].' '.$r['ville'].' - '.$r['n°telephone'].' - '.$r['mail'].'<br />'
;
     }
      
?>



  <footer id="footer">
  <div id="contenuFooter">
    <div class="social">
      <a href="https://www.facebook.com/InfiniteMeasuresFr" target = "_blank"><ion-icon name="logo-facebook"></ion-icon></a>
      <a href="https://www.instagram.com/infinite_measures/" target = "_blank"><ion-icon name="logo-instagram"></ion-icon></a>
      <a href="https://mailto.infinitemeasuresfr@gmail.com" target = "_blank"><ion-icon name="mail"></ion-icon></a>
    </div>
    <div class="txtFooter">
      <p>
        Infinite Measures <br>
        <a href="cgu.html">CGU</a> -
        <a href="mentions.html">Mentions légales</a>
      </p>
    </div>
  </div>
</footer>

  <!--<script src="js/script.js"></script>-->
  <script src="https://unpkg.com/ionicons@4.5.10-0/dist/ionicons.js"></script>
  <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
  <script src="js/index.js"></script>
  <script src="js/base.js"></script>
</body>
</html>
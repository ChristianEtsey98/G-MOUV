
<?php

$objetpdo=new PDO(
        'mysql:host=localhost;dbname=g_mouv',
        'root',
        '' );

$pdoStat=$objetpdo->prepare('SELECT * FROM user ORDER BY Nom ASC');

$executeIsOk= $pdoStat->execute();

$utilisateurs=$pdoStat->fetchAll();


?>

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
  <link rel="stylesheet" href="css/index2.css">
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

  <div id="haut">
    <div class=videNav></div>
    <div class="imgtop">
      <div class="imgTexte">
        <h1>G-mouv'</h1>
        <h4>Back Office/Backend</h4>
        <div class="boutonBas">
          <a href="#milieuImg">
            <ion-icon name="arrow-dropdown-circle"></ion-icon>
          </a>
        </div>
      </div>
    </div>
  </div>



  <div id="milieuImg">
    <img class="imgSlideLeft" src="img/Logo GREENSEP.png">
    <div class="texteDroite">
      <h2>Liste de nos utilisateurs</h2>
    </div>
  </div>

<table style="background-color: #303030; color : white; padding-right: 50px; padding-left: 150px">

  <tr>
    <td style="background-color: black">
      <b>Nom Prénom</b>
      <br>
    </td>
    <td style="background-color: black">
      <b>Adresse</b>
      <br>
    </td>
    <td style="background-color: black">
      <b>Numéro de téléphone</b>
      <br>
    </td>
    <td style="background-color: black">
      <b>Adresse mail</b>
      <br>
    </td>
  </tr>

  <?php foreach ($utilisateurs as $utilisateur):?>
  
  <tr>
    <td>
      <?=$utilisateur['Nom']?> <?=$utilisateur['Prenom']?>
      <br>
    </td>
    <td>
      <?=$utilisateur['adresse']?> <?=$utilisateur['code_postal']?> <?=$utilisateur['ville']?>
      <br>
    </td>
    <td>
      <?=$utilisateur['num_tel']?>
      <br>
    </td>
    <td>
      <?=$utilisateur['mail']?>
      <br>
    </td>
  </tr>
  <?php endforeach;?>
</table>




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

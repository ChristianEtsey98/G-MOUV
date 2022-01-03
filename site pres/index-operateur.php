<!doctype html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>utilisateur</title>
    <link rel="icon" type="image/png" href="img/G-mouv'.png">
    <meta name="description" content="Notre solution a pour but de garantir la fiabilité des pilotes, à travers divers tests psychotechniques.">
    <meta name="robots" content="index, follow" />
    <link rel="stylesheet" href="css/nav.css">
    <link rel="stylesheet" href="css/faq.css">
    <link rel="stylesheet" href="css/footer.css">
    <link href="https://fonts.googleapis.com/css?family=Oswald:200,300,400,500,600,700&display=swap" rel="stylesheet">
</head>

<body>

   <!--Barre de navigation-->
    <nav>
        <!--Logo à gauche-->
        <div class="logo_nav">
            <a href="index.html">
                <img src="img/G-mouv'.png"></img>
            </a>
        </div>

        <!--Menu-->
        <div class="contenu_nav">
            <a href="index.html">Accueil</a>
            <a href="trajet.html">Itinéraire</a>
            <a href="quizz.html">Quiz</a>

            <a id="bouton_à_propos">
      À propos
      <ion-icon name="arrow-dropdown"></ion-icon>
    </a>

            <a id="bouton_utilisateur">
                <img class="flag1" src="img/personne.png">
                <ion-icon name="arrow-dropdown"></ion-icon>
            </a>

            <a id="bouton_langues">
                <img class="flag" src="img/fr.png">
                <ion-icon name="arrow-dropdown"></ion-icon>
            </a>
        </div>

        <!--Sélection des langues-->
        <div id="liste_langues" class="cacher_liste_langues">
            <div class="langue">
                <a href="../en/index.html">
                    <img class="flag" src="img/en.png">
                </a>
            </div>
            <div class="langue">
                <a href="../es/index.html">
                    <img class="flag" src="img/es.png">
                </a>
            </div>
        </div>

        <!--Sélection utilisateur : créer son compte, connexion, accéder à son compte-->
        <div id="liste_connexion" class="cacher_liste_langues">
            <div class="user">
                <a href="connexion.php">
        Connexion
      </a>
            </div>
            <div class="user">
                <a href="crée.php">
        Inscription
      </a>
            </div>
        </div>

        <!--Sélection à propos-->
        <div id="liste_à_propos" class="cacher_liste_langues">
            <div class="à_propos">
                <a href="à propos.html">
        Entreprise
      </a>
            </div>
            <div class="à_propos">
                <a href="à propos.html#bas"> 
        Contact
      </a>
            </div>
            <div class="à_propos">
                <a href="faq.html"> 
        FàQ
      </a>
            </div>
        </div>


        <!-- Bouton version mobile -->
        <div class="contenu_nav_mobile">
            <button id="bouton">
      <ion-icon name="menu"></ion-icon>
    </button>
        </div>

        <!-- Menu version mobile -->
        <div id="menu_deroulant" class="cacher_menu_deroulant">
            <p>
                <a href="index.html">Accueil</a>
                <a href="trajet.html">Itinéraire</a>
                <a href="quizz.html">Quiz</a>
                <a href="à propos.html">À propos</a>
                <a href="connexion.php">Connexion</a>
                <a href="crée.html">Inscription</a>
                <a href="faq.html">FàQ</a>
                <a href="à propos.html#contact">Contact</a>

                <div id="liste_langues_mobile">
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

    <div id="milieu">
        <div id="vide">
            <p> </p>
        </div>
        <div id="titre">
            <br><strong>utilisateur</strong>
       
    </footer>

    <script src="js/scriptfaq.js"></script>
    <script src="https://unpkg.com/ionicons@4.5.10-0/dist/ionicons.js"></script>
    <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
    <script src="js/base.js"></script>
</body>

</html>
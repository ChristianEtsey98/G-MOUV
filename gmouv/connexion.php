<!doctype html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="Cache-control" content="private" />
    <meta name="description" content="Notre solution a pour but de garantir la fiabilité des pilotes, à travers divers tests psychotechniques.">
    <meta name="robots" content="index, follow" />
    <title>Connexion</title>
    <link rel="icon" type="image/png" href="img/G-mouv'.png">
    <link rel="stylesheet" href="css/nav.css">
    <link rel="stylesheet" href="css/connexion.css">
    <link rel="stylesheet" href="css/footer.css">
    <link href="https://fonts.googleapis.com/css?family=Oswald:200,300,400,500,600,700&display=swap" rel="stylesheet">
</head>

<body>

    <nav>
        <div class="logoNav">
            <a href="file:///C:/Users/erwan/OneDrive/Bureau/app/site%20g-mouv%202eme/connexion.html">
                <img src="img/G-mouv'.png"></img>
            </a>
        </div>
        <div class="contenuNav">
            <a href="index.html">Accueil</a>
            <a href="connexion.html">Connexion</a>
            <a href="trajet.html">Itinéraire</a>
            <a href="quizz.html">Quiz</a>
            <a href="à propros.html">À propros</a>
            <a href="faq.html">FAQ</a>
            <a href="index.html#contact">Contact</a>
            <a id="boutonLangues">
                <img class="flag" src="img/fr.png">
                <ion-icon name="arrow-dropdown"></ion-icon>
            </a>
        </div>
        <div id="listeLangues" class="cacherListeLangues">
            <div class="langue">
                <a href="../en/connexion.html">
                    <img class="flag" src="img/en.png">
                </a>
            </div>
            <div class="langue">
                <a href="../es/connexion.html">
                    <img class="flag" src="img/es.png">
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
                        <img class="flag" src="../img/en.png">
                    </a>
                    <a href="../es/index.html">
                        <img class="flag" src="../img/es.png">
                    </a>
                </div>
            </p>
        </div>
    </nav>
    <div class="videNav"></div>

    <div id="milieu">
        <div class="txtMilieu">
            <h1>Bienvenue</h1>
            <ion-icon name="contact"></ion-icon>
        </div>
        <div class="message">
        </div>
        <form name="connexion" method="post" action="dologin.php">
            <div class="formulaire">
                <ion-icon name="person"></ion-icon>
                <input type="text" name="login" placeholder="Identifiant"><br>
            </div>
            <div class="formulaire">
                <ion-icon name="lock"></ion-icon>
                <input type="password" name="pwd" placeholder="Mot de passe"><br>
            </div>
            <div>
                <input type="submit" name="send" value="Connexion">
                <?php if (isset($_GET['erreur'])) 
                    $err = $_GET['erreur'];
                    if ($err == 1 || $err == 2)
                    {
                        echo "Utilisateur ou mot de passe incorrect";
                    }  
        
                ?>
            </div>
        </form>
        <br>
        <a href="crée.html">Vous n'avez pas de compte ?</a>
    </div>

    <footer id="footer">
        <div id="contenuFooter">
            <div class="social">
                <a href="https://www.facebook.com/InfiniteMeasuresFr" target="_blank">
                    <ion-icon name="logo-facebook"></ion-icon>
                </a>
                <a href="https://www.instagram.com/infinite_measures/" target="_blank">
                    <ion-icon name="logo-instagram"></ion-icon>
                </a>
                <a href="https://mailto.infinitemeasuresfr@gmail.com" target="_blank">
                    <ion-icon name="mail"></ion-icon>
                </a>
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

    <script src="js/script.js"></script>
    <script src="https://unpkg.com/ionicons@4.5.10-0/dist/ionicons.js"></script>
    <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
    <script src="js/base.js"></script>
</body>

</html>
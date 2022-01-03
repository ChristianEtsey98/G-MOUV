
<?php
 if($_POST["nom"]!="" && $_POST["nom"]!="" && $_POST["prenom"]!="" && $_POST["adresse"]!="" && $_POST["tel"]!="" && $_POST["cp"]!="" && $_POST["ville"]!="" && $_POST["mail"]!="" && $_POST["mdp"]!="" && $_POST["mdp1"]!="") {

    try{
      $pdo=new PDO(
        'mysql:host=localhost;dbname=g_mouv',
        'root',
        ''
      );
      $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

     
              //enregistrement dans BDD
              
        $insertion = "INSERT INTO user(Nom,Prenom,adresse,code_postal,ville,num_tel,mail,mdp,mdp1) VALUES('".$_POST["nom"]."', '".$_POST["prenom"]."', '".$_POST["adresse"]."','". $_POST["cp"]."', '".$_POST["ville"]."','". $_POST["tel"]."','".$_POST["mail"]."', '".$_POST["mdp"]."', '".$_POST["mdp1"]."');";
        $execute=$pdo->prepare($insertion);
        $execute->execute();
        header('Location:connexion.html');

        exit();
      }   catch(PDOException $e) {
    echo 'Connection failed: '.$e->getMessage();
  } 
  }


  $pdo->query("SET NAMES UTF8"); //Solution encodage

?> 
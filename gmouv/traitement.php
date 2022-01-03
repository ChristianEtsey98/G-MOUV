
<?php
$tipe = 'utilisateur';
$active = 1;

 if($_POST["nom"]!="" && $_POST["nom"]!="" && $_POST["prenom"]!="" && $_POST["adresse"]!="" && $_POST["tel"]!="" && $_POST["cp"]!="" && $_POST["ville"]!="" && $_POST["mail"]!="" && $_POST["mdp"]!="" && $_POST["mdp1"]!="") {

    try{
      $pdo=new PDO(
        'mysql:host=localhost;dbname=mydb',
        'root',
        'root'
      );
      $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

     
              //enregistrement dans BDD
              
        $insertion = "INSERT INTO utilisateur(mail,Nom,Prenom,adresse,n°telephone,tipe , active,code_postal,ville,mdp) VALUES('" . $_POST["mail"] . "','".$_POST["nom"]."', '".$_POST["prenom"]."', '".$_POST["adresse"]."','". $_POST["tel"]."','$tipe', $active,'". $_POST["cp"]."', '".$_POST["ville"]."', '".$_POST["mdp"]."');";
        $execute=$pdo->prepare($insertion);
        $execute->execute();
        header('Location:connexion.php');

        exit();
      }   catch(PDOException $e) {
    echo 'Connection failed: '.$e->getMessage();
  } 
  }


  $pdo->query("SET NAMES UTF8"); //Solution encodage

?> 
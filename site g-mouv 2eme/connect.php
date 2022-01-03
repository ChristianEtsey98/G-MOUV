  <?php 
  try{
    $pdo=new PDO(
      'mysql:host=localhost;dbname=g_mouv',
      'root',
      ''
    );
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "connexion réussie";
  }
  catch(PDOException $e) {
    echo 'Connection failed: '.$e->getMessage();
  }

  $pdo->query("SET NAMES UTF8"); //Solution encodage
  ?>
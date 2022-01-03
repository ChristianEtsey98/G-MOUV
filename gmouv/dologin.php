<?php
//Activer le gestionnaire de session.
session_start();
	//Formulaire soumis
    if(!empty($_POST['login'])){
	
		//Obtenir la saisie de l'internaute
		$login = $_POST['login'];
		$pwd = $_POST['pwd'];
		
		//Le code SQL
		$query = "SELECT * FROM utilisateur WHERE mail='$login' AND mdp='$pwd';";
		
		//Lien de connexion (API MySQLi)
		$db = mysqli_connect('localhost','root','root','mydb') or die("Connexion impossible " . mysqli_error());
		
		//Execution et obtention d'un curseur
		$curseur = mysqli_query($db, $query) or die("exec impossible " . mysqli_error());
		
		//Test du nombre de lignes obtenu
		if(mysqli_num_rows($curseur) == 1){
			//Authentification OK, obtenir les infos
			$data = mysqli_fetch_object($curseur);
			
			//Compte actif ou pas?
			if($data->active == 1){
				//Variables de session
				$_SESSION['mail'] = $login;
				$_SESSION['nom'] = $data->nom;
				$_SESSION['prenom'] = $data->prenom;
				$_SESSION['active'] = $data->active;
				$_SESSION['tipe'] = $data->type;
				
				//Test des droits
				switch($data->tipe){
					case 'admin': header("location:" . "index-admin.php");
					exit;
					break;
					
					case 'utilisateur': header("location:" . "index-operateur.php");
					exit;
					break;
					
				}
			}
			else{
				//Le compte est inactif
				$msg = "Login ou mot de passe incorrect";
				
				//Redirection
				header("location:" . "connexion.php?msg=$msg");
				exit;
			}
		}
		else{
			//Aucun utilisateur
			$msg = "Login ou mot de passe incorrect";
			
			//Redirection
			header("location:" . "connexion.php?msg=$msg");
			exit;
		}
	}
?>

<?php
    //Tester une variable de session
    if(!isset($_SESSION['auth'])){
        //Message d'erreur
        $msg = "Login ou mot de passe incorrect.";
        
        //Redirection
        header("location:" . "../login.php?msg=$msg");
        exit;
    }
	
	//On peut aussi tester si le compte est actif
	if($_SESSION['active'] != 1){
        //Message d'erreur
        $msg = "contactez l'administrateur.";
        
        //Redirection
        header("location:" . "../connexion.php?msg=$msg");
        exit;
    }
?>
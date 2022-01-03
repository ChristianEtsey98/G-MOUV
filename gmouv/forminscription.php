<?php
$db = mysqli_connect('localhost','root','rot','registration') or die("Connexion impossible " . mysqli_error());
	 
if(isset($_POST['forminscription'])) {
	$mail = htmlspecialchars($_POST['mail']);
    $login = htmlspecialchars($_POST['login']);
    $nom = htmlspecialchars($_POST['nom']);
    $prenom = htmlspecialchars($_POST['prenom']);
	$mdp = sha1($_POST['mdp']);
	$mdp2 = sha1($_POST['mdp2']);
    $role = 'OPERATEUR'
    $active = '1'
	if(!empty($_POST['mail']) AND !empty($_POST['mdp']) AND !empty($_POST['mdp2'])) {
	    if(filter_var($mail, FILTER_VALIDATE_EMAIL)) {
	    $reqmail = $bdd->prepare("SELECT * FROM users WHERE mail = ?");
	    $reqmail->execute(array($mail));
	    $mailexist = $reqmail->rowCount();
	    if($mailexist == 0) {
	        $insertmbr = $bdd->prepare("INSERT INTO users( login, pwd, nom, prenom, role, active, mail) VALUES( ?, ?)");
	        $insertmbr->execute(array($login, $mdp, $nom, $prenom, $role, $active, $mail));
	        $erreur = "Votre compte a bien été créé !";
	        }
	        } else {
	        $erreur = "Adresse mail déjà utilisée !";
	    }
	    } else {
	    $erreur = "Votre adresse mail n'est pas valide !";
    } else {
	$erreur = "Tous les champs doivent être complétés !";
}
}
?>

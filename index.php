<?php
//vérifie si le GET page existe 
if(isset($_GET['page'])){
 	$test='view/'.$_GET["page"].".php";
 	//vérifie si le document existe et enregistre une variable title pour modifier le titre de la page appelé
 	if(file_exists($test)){
 		$page="view/".$_GET['page'];
 		$title=$_GET['page'];
 	}
 	//si le fichier n'existe pas on rappelle l’accueil 
 	else{
 		$page="view/accueil";
 		$title="accueil";
 	}
 }
//on fait pareil pour le contrôleur 
 elseif(isset($_GET['controlleur'])){
 	$page="controlleur/".$_GET["controlleur"];
 	$title=$_GET['controlleur'];
 }
 else{
 	$page="view/accueil";
 	$title="accueil";
 }
 //on appel dans l'ordre le header le menu la page et le footer
include_once("view/header.php");
include_once("view/menu.php");
include_once($page.'.php');
include_once("view/footer.php");
?>
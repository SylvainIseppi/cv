<?php
//vérification des champs a faire pour la sécurité
//modifier le smtp  dans le php ini
//creation du header pour éviter de recevoir le mail dans les spam
	//object du mail remmpli par l'utilisateur
	$object=$_POST['object'];
	//contenu du message rentré par l'utilisateur
	$contenu=$_POST['contenumail'];
  	$headers[] = 'MIME-Version: 1.0';
  	//adresse du mail définit sur le serveur
	$headers[] = 'From: test <site-cv@gmail.com>';
	//définit l'adresse a qui répondre suite a la réception du mail
	$headers[] = 'Reply-To: '.$_POST['email'];
	$headers[] = 'Return-Path: '.$_POST['email'];
	//définit la priorité du mail
	$headers[] = 'X-Priority: 1';
	//code faisant partie du header trouvé
	$headers[] = 'X-Mailer: PHP/'.phpversion();
	$headers[] = 'Content-Type: text/html; charset=UTF-8';
	$headers[] = 'Content-Transfer-Encoding: 8bit';
	//mail('sylvain.iseppi@gmail.com','test envoie mail',' je devais tester l\'envoie du mail par la fonction mail',$headers);
	//si le mail est bien envoyé on retourne vers la page de confirmation
	if(mail('sylvain.iseppi@gmail.com', $object, $contenu."\n", implode("\n", $headers)."\r\n\n")){
		header('Location: confirmmail.monsite');
	}

?>
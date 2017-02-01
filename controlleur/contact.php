<?php
//modifier le smtp  dans le php ini
	$object=$_POST['object'];
	$contenu=$_POST['contenumail'];

  	$headers[] = 'MIME-Version: 1.0';
	$headers[] = 'From: test <site-cv@gmail.com>';
	$headers[] = 'Reply-To: '.$_POST['email'];
	$headers[] = 'Return-Path: '.$_POST['email'];
	$headers[] = 'X-Priority: 1';
	$headers[] = 'X-Mailer: PHP/'.phpversion();
	$headers[] = 'Content-Type: text/html; charset=UTF-8';
	$headers[] = 'Content-Transfer-Encoding: 8bit';
	//mail('sylvain.iseppi@gmail.com','test envoie mail',' je devais tester l\'envoie du mail par la fonction mail',$headers);
	if(mail('sylvain.iseppi@gmail.com', $object, $contenu."\n", implode("\n", $headers)."\r\n\n")){
		echo "ok";
	}

?>
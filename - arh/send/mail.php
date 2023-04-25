<?php include "../inc/core.php";

	if(isset($_GET['orderSend'])) {
		$tel  	= strip_tags($_POST['tel']);
		$nm  	= strip_tags($_POST['nm']);

	    // telegram
		$arr = array(
			'Сайт атауы:'	=> $site['name'],
			'Аты-жөні: '	=> $nm,
			'Телефон: ' 	=> $tel
		);

		foreach($arr as $key => $value) {
			$txt .= "<b>".$key."</b> ".$value."%0A";
		};

		$token = "1082028620:AAGRXcmhEtOlK3Z29Fa7Vq6JfIK1Uwdw-P4";
		$chat_id = "-1001214037538";
		$sendToTelegram = fopen("https://api.telegram.org/bot{$token}/sendMessage?chat_id={$chat_id}&parse_mode=html&text={$txt}","r");

		if ($sendToTelegram) {
	    	echo "success";
		} else {
	    	echo "error";
		}

		exit();
	}
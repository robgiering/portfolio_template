<?php

session_start();

require_once 'libs/phpmailer/PHPMailerAutoload.php';

$errors = [];

if(isset($_POST['name'], $_POST['email'], $_POST['message'])) {
	$fields = [
		'name' => $_POST['name'],
		'email' => $_POST['email'],
		'message' => $_POST['message']
	];

	foreach($fields as $field => $data) {
		if(empty($data)) {
			$errors[] = 'The ' . $field . ' field is required.';
		}
	}
	if(empty($errors)) {
		$m = new PHPMailer;

		$m->isSMTP();
		$m->SMTPAuth = true;
		$m->Host = 'a2plcpnl0144.prod.iad2.secureserver.net';
		$m->Username = 'YOURCONTACTEMAIL';
		$m->Password = 'YOURGOOGLEPW';
		$m->SMTPSecure = 'ssl';
		$m->Port = 465;

		$m->isHTML();

		$m->Subject = 'PORTFOLIO Contact Form  - From: ' . $fields['name'];
		$m->Body = 'From: ' . $fields['name'] . ' (' . $fields['email'] . ')<p>' . $fields['message'] . '</p>';
		
		$m->FromName = $fields['name'];

		$m->AddAddress('EMAILADDRESS', 'NAME');

		if($m->send()) {
			header('Location: thanks.php');
			die();
		} else {
			$errors[] = 'Sorry, could not send email. Try again later.';
		}

	}
} else {
	$errors[] = 'There has been an error.';
}
$_SESSION['errors'] = $errors;
$_SESSION['fields'] = $fields;

header('Location: contactme.php');

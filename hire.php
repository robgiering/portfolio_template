<?php

session_start();

require_once 'libs/phpmailer/PHPMailerAutoload.php';

$errors = [];

if(isset($_POST['name'], $_POST['email'], $_POST['websitetitle'], $_POST['estimatedpages'], $_POST['websitedescription'], $_POST['extradetails'])) {
	$fields = [
		'name' => $_POST['name'],
		'email' => $_POST['email'],
		'websitetitle' => $_POST['websitetitle'],
		'estimatedpages' => $_POST ['estimatedpages'],
		'websitedescription' => $_POST ['websitedescription'],
		'extradetails' => $_POST['extradetails']
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
		$m->Username = 'contact@robgiering.com';
		$m->Password = '198338rjg';
		$m->SMTPSecure = 'ssl';
		$m->Port = 465;

		$m->isHTML();

		$m->Subject = 'robgiering.com Hire Form  - From: ' . $fields['name'];
		$m->Body = 'From: ' . $fields['name'] . ' (' . $fields['email'] . ')<p>Website Title:' . $fields['websitetitle'] . '</p>' . '<p>Website Description:' . $fields['websitedescription'] . '</p>' . '<p>Estimated Pages:' . $fields['estimatedpages'] . '</p>' . '<p>Extra Details:' . $fields['extradetails'] . '</p>';
		
		$m->FromName = $fields['name'];

		$m->AddAddress('robgieringdesign@gmail.com', 'Rob Giering');

		if($m->send()) {
			header('Location: hirethanks.php');
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

header('Location: hireme.php');
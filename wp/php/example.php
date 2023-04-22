<?php
	include_once('helpers/validate-number.php');

	$email_to = "uniweb.smm@gmail.com, 1603344vl@gmail.com, conceptmed21@gmail.com, zdrav.souz@gmail.com";
    
	$phone = trim($_POST['advice-phone']);
	$email = trim($_POST['advice-email']);
	$from = trim($_POST['advice-from']);

	$dt = date('Y-m-d H:i:s');
	
    $errors = [];

    if($phone == '') {
		$errors['advice-phone'] = 'Укажите свой телефон!';
	} elseif(!validate_phone_number($phone)) {
		$errors['advice-phone'] = 'Введите корректный номер!';
	}

	if($email == '') {
		$errors['advice-email'] = 'Укажите свой E-mail!';
	}elseif(!filter_var($email, FILTER_VALIDATE_EMAIL)){
		$errors['advice-email'] = 'Введите корректный E-mail!';
	}

    $response = ['res' => empty($errors), 'errors' => $errors];
    
	if(empty($errors)){
		$headers = 'From: imede.ru <postmaster@ime2322406.nichost.ru>' . "\r\n" .
    	'Reply-To: postmaster@ime2322406.nichost.ru' . "\r\n" . 
    	'X-Mailer: PHP/' . phpversion();

		$subject  = 'Запись на консультацию';
		$letter   = "$from: \n Телефон: $phone \n Почта: $email \n";

		$sendmail = mail($email_to, $subject, $letter, $headers);
	}
    
    echo json_encode($response);
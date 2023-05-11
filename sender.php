<?php
    $name = $_POST['name'];
    $surname = $_POST['surname'];
	$phone = $_POST['phone'];
    $email = $_POST['email'];

	$to = "tarassraihel@gmail.com"; 
	$date = date ("d.m.Y"); 
	$time = date ("h:i");
	$from = $email;
	$subject = "Заявка з сайту";

	
	$msg="
    Ім'я: $name /n
    Телефон: $phone /n
    Пошта: $email /n";
	mail($to, $subject, $msg, "From: $from ");

?>

<p>Форму надіслано, очікуйте відповіді.</p>

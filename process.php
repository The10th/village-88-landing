<?php
	// var_dump($_POST);
	$to = 'kpatel@codingdojo.com';
	$subject = 'v88studio-submission';
	$message = "\r\n";
	foreach($_POST as $key => $val) {
		$message .= $key. " is ".$val."\r\n";
	}
	// echo $message;
	mail($to, $subject, $message);
	header('Location: success.php');
?>
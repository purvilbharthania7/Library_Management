<?php
$to = "divyangk6@gmail.com";
$subject = "My subject";
$txt = "Hello world!";
//$headers = "From: divyangc2@gmail.com" . "\r\n" .
//"CC: savaliyakuldip8899@gmail.com";

if(mail($to,$subject,$txt,'From: divyangc2@gmail'))
{
	echo "dsdone";
}else
{
	echo "not done";
}
?>
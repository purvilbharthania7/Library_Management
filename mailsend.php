<html>
<head></head>
<body>
<?php function htmlcontent()
{?>
	<br><h2>REQUEST QRCODE</h2><img src="./qrcode/generate.php?text=HEllo">
<?php
}
?>
<?php
session_start();
if(isset($_SESSION['uname']))
{
$eid=$_SESSION['uname'];
$dbhandler = new PDO('mysql:host=127.0.0.1;dbname=library','root','');
$dbhandler->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
$query5=$dbhandler->query("SELECT * FROM registerdata WHERE uname ='$eid'");
$r5=$query5->fetch();
$headers  = 'MIME-Version: 1.0' . "\r\n".
	'Content-type: text/html; charset=iso-8859-1' . "\r\n".
	'X-Mailer: PHP/'.phpversion();

	$rid=$_SESSION['requestid'];
	$email_message = '<html><body><br><h2>REQUEST QRCODE</h2><h2>'.$rid.'<img src="C:/xampp/htdocs/Library_management/images/bb.jpg"/>';
	$email_message .= '</body></html>';
	$email_to=$r5['emailid'];
	$email_subject = "WE will Contact you soon";
	$result=mail($email_to,$email_subject,$email_message,$headers);
	header("Location:home.php?m10=Your Request Submitted");	
}	

?>
</body>
</html>
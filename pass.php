<?php
session_start();
try{
	$u = $_GET['u'];
	$eid = $_GET['emailid'];
	echo $u;
	if(isset($_GET['u']) && isset($_GET['emailid']))
	{
		echo $u;
		$count=0;
		$dbhandler = new PDO('mysql:host=127.0.0.1;dbname=library','root','');
		$dbhandler->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
		
		$query=$dbhandler->query("SELECT * FROM registerdata WHERE uname='$u'");
		$count = $query->rowcount();
		echo $count;
		$r=$query->fetch();
		if($count != 0)
		{
			echo $uname;
			$query1 = $dbhandler->query("SELECT pass FROM registerdata WHERE uname='$u'");
			$r1=$query1->fetch();
			$headers  = 'MIME-Version: 1.0' . "\r\n".
			'Content-type: text/html; charset=iso-8859-1' . "\r\n".
			'X-Mailer: PHP/'.phpversion();

			$rid=$_SESSION['requestid'];
			$email_message = '<html><body><br><h2>New Password is</h2><h2>'.$r1['pass'].'<img src="C:/xampp/htdocs/Library_management/images/bb.jpg"/>';
			$email_message .= '</body></html>';
			
			$email_to=$r['emailid'];
			$email_subject = "Password Renewal";
			$result=mail($email_to,$email_subject,$email_message,$headers);
			header('Location:login.php');
		}else{
			header('Location:forgotpaa.php?msg1=Invalid Details');
		}
	}else
	{
		header('Location:forgotpaa.php?msg=Please Fill The DATA');
	}
}	
catch(PDOException $e){
	echo $e->getMessage();
	die();
}
?>	
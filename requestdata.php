<?php
try{
	$dbhandler = new PDO('mysql:host=127.0.0.1;dbname=library','root','');
	echo "Connection is established...<br/>";
	$dbhandler->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
	$sql="create table requestdata ( 
		uname VARCHAR(30) NOT NULL,
        bookid INT(10) NOT NULL,
		requestid VARCHAR(30) NOT NULL,
		rdate DATE NOT NULL,
		rldate DATE NOT NULL,
		idate DATE NOT NULL,
		ridate DATE NOT NULL,
		redate DATE NOT NULL,
        posted datetime	
		)";
	$query=$dbhandler->query($sql);
	echo "Table is created successfully";
		
		
}
catch(PDOException $e){
	echo $e->getMessage();
	die();
}

?>
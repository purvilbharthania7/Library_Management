<?php
try{
	$dbhandler = new PDO('mysql:host=127.0.0.1;dbname=parking','root','');
	echo "Connection is established...<br/>";
	$dbhandler->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
	$sql="create table parking ( 
        slotnumber INT(30) NOT NULL PRIMARY KEY,
		floarnumber INT(100),
		block VARCHAR(10),
		longl VARCHAR(30),
		latl VARCHAR(30),
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
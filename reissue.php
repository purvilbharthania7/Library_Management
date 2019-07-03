<?php
try{
		if(isset($_GET['reqestid']))
		{
			$dbhandler = new PDO('mysql:host=127.0.0.1;dbname=library','root','');
			$dbhandler->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
			$rid=$_GET['reqestid'];
			$query=$dbhandler->query("SELECT * FROM requestdata WHERE requestid='$rid'");
			$r=$query->fetch();
			$idate = $r['idate'];
			$returndate = $r['redate'];
			$reissuedate = date("Y-m-d");
			if(strtotime($reissuedate) < strtotime($returndate))
			{
				$sql="UPDATE requestdata SET ridate='$reissuedate' WHERE requestid='$rid'";
				$query2=$dbhandler->query($sql);
				$returndate = date('Y-m-d',strtotime($reissuedate.'+ 30 days'));
				$sql1="UPDATE requestdata SET redate='$returndate' WHERE requestid='$rid'";
				$query3=$dbhandler->query($sql1);
				header("Location:librarian.php?m4=Re-issue complete");
			}else{
				$reissuedate = date("Y-m-d");
				$return=strtotime($returndate);
				$diff = strtotime($reissuedate) - $return;
				$diffday = round($diff / (60*60*24));
				$query=$dbhandler->query("SELECT * FROM requestdata WHERE requestid='$rid'");
				$r=$query->fetch();
				$R=$r['bookid'];
				$query=$dbhandler->query("SELECT * FROM itemdata WHERE bookid='$R'");
				$r=$query->fetch();
				$R1= $r['qauntity']+1;
				$query=$dbhandler->query("UPDATE itemdata SET qauntity='$R1' WHERE bookid='$R'");
				$r=$query->fetch();
				$sql2="DELETE FROM requestdata WHERE requestid='$rid'";
				$query3=$dbhandler->query($sql2);
				$rs=10;
				$RSdiff=$diffday*$rs;
				header("Location:librarian.php?m3=play rupee:($RSdiff Rs)");
			}
		}else{
			header("Location:librarian.php?m5=please enter requestid");
		}
	
}
catch(PDOException $e){
	die("ERROR: Could not able to execute".$e->getMessage());
}
unset($dbhandler);
?>
<?php
try{
	if(isset($_GET['Issue']))
	{
		$rid=$_GET['reqestid'];
		if(isset($_GET['reqestid']))
		{	
			$dbhandler = new PDO('mysql:host=127.0.0.1;dbname=library','root','');
			$dbhandler->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
			$query=$dbhandler->query("SELECT * FROM requestdata WHERE requestid='$rid'");
			$count = $query->rowcount();
			$r=$query->fetch();
			if($count!=0)
			{
				$requestdate=$r['rldate'];
				$idate = date("Y-m-d");
				if(strtotime($idate) <= strtotime($requestdate))
				{
					$rdate = date('Y-m-d',strtotime($idate.'+ 30 days'));
					$sql="UPDATE requestdata SET idate='$idate' WHERE requestid='$rid'";
					$query2=$dbhandler->query($sql);
					$sql1="UPDATE requestdata SET redate='$rdate' WHERE requestid='$rid'";
					$query3=$dbhandler->query($sql1);
					header("Location:librarian.php?m4=issue complete");
					echo "done";
				}
				else{
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
					header("Location:librarian.php?m1=issue date finish");
				}
			}else{
				header("Location:librarian.php?m10=invalid id");
			}
		}else{
			header("Location:librarian.php?m2=please enter requestid");
		}	
	}elseif(isset($_GET['Re-Issue']))
	{
		$rid=$_GET['reqestid'];
		if(isset($_GET['reqestid']))
		{
			$dbhandler = new PDO('mysql:host=127.0.0.1;dbname=library','root','');
			$dbhandler->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
			$query=$dbhandler->query("SELECT * FROM requestdata WHERE requestid='$rid'");
			$count = $query->rowcount();
			$r=$query->fetch();
			if($count!=0)
			{
				$idate = $r['idate'];
				$returndate = $r['redate'];
				$reissuedate = date("Y-m-d");
				if(strtotime($reissuedate) <= strtotime($returndate))
				{
					$sql="UPDATE requestdata SET ridate='$reissuedate' WHERE requestid='$rid'";
					$query2=$dbhandler->query($sql);
					$returndate = date('Y-m-d',strtotime($reissuedate.'+ 30 days'));
					$sql1="UPDATE requestdata SET redate='$returndate' WHERE requestid='$rid'";
					$query3=$dbhandler->query($sql1);
					header("Location:librarian.php?m6=Re-issue Complate");
				}else{
					$reissuedate = date("Y-m-d");
					$return=strtotime($returndate);
					$diff = strtotime($reissuedate) - $return;
					$diffday = round($diff / (60*60*24));
					$rid=$_GET['reqestid'];
					$query=$dbhandler->query("SELECT * FROM requestdata WHERE requestid='$rid'");
					$r=$query->fetch();
					$R=$r['bookid'];
					$query=$dbhandler->query("SELECT * FROM itemdata WHERE bookid='$R'");
					$r=$query->fetch();
					$R1= $r['qauntity']+1;
					$query=$dbhandler->query("UPDATE itemdata SET qauntity='$R1' WHERE bookid='$R'");
					$sql="DELETE FROM requestdata WHERE requestid='$rid'";
					$query3=$dbhandler->query($sql);
					$rs=10;
					$RSdiff=$diffday*$rs;
					header("Location:librarian.php?m3=play rupee:($RSdiff Rs)");
				}
			}else{
				header("Location:librarian.php?m11=invalid id");
			}	
		}else{
			header("Location:librarian.php?m5=please enter requestid");
		}
	}elseif(isset($_GET['Submit']))
	{
		$rid=$_GET['reqestid'];
		if(isset($_GET['reqestid']))
		{
			$dbhandler = new PDO('mysql:host=127.0.0.1;dbname=library','root','');
			$dbhandler->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
			$query=$dbhandler->query("SELECT * FROM requestdata WHERE requestid='$rid'");
			$count = $query->rowcount();
			$r=$query->fetch();
			if($count!=0)
			{
				$idate = $r['idate'];
				$returndate = $r['redate'];
				$reissuedate = $r['ridate'];
				$submit = date("Y-m-d");
				if(strtotime($returndate) <= strtotime($submit))
				{
					$rid=$_GET['reqestid'];
					$reissuedate = date("Y-m-d");
					$return=strtotime($returndate);
					$diff = strtotime($submit) - $return;
					$diffday = round($diff / (60*60*24));
					$query=$dbhandler->query("SELECT * FROM requestdata WHERE requestid='$rid'");
					$r=$query->fetch();
					$R=$r['bookid'];
					$query=$dbhandler->query("SELECT * FROM itemdata WHERE bookid='$R'");
					$r=$query->fetch();
					$R1= $r['qauntity']+1;
					$query=$dbhandler->query("UPDATE itemdata SET qauntity='$R1' WHERE bookid='$R'");
		
					$sql="DELETE FROM requestdata WHERE requestid='$rid'";
					$query3=$dbhandler->query($sql);
					$rs=10;
					$RSdiff=$diffday*$rs;
					header("Location:librarian.php?m3=play rupee:($RSdiff Rs)");
				}
				else
				{
					$query=$dbhandler->query("SELECT * FROM requestdata WHERE requestid='$rid'");
					$r=$query->fetch();
					$R=$r['bookid'];
					$query=$dbhandler->query("SELECT * FROM itemdata WHERE bookid='$R'");
					$r=$query->fetch();
					$R1= $r['qauntity']+1;
					$query=$dbhandler->query("UPDATE itemdata SET qauntity='$R1' WHERE bookid='$R'");
				
					$sql="DELETE FROM requestdata WHERE requestid='$rid'";
					$query3=$dbhandler->query($sql);
					header("Location:librarian.php?m6=Successfully Submit");
				}
			}else{
				header("Location:librarian.php?m12=invalid id");
			}
		}else{
			header("Location:librarian.php?m13=please enter requestid");
		}
	}else{
		header("Location:librarian.php");
	}
}
catch(PDOException $e){
	die("ERROR: Could not able to execute $sql.".$e->getMessage());
}
unset($dbhandler);
?>
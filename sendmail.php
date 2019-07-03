<?php 
session_start();
$uname=$_SESSION['uname'];
	if(isset($_SESSION['uname']))
	{
		$count=0;
		$dbhandler = new PDO('mysql:host=127.0.0.1;dbname=library','root','');
		$dbhandler->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
		
		$query5=$dbhandler->query("SELECT * FROM requestdata");
		while($r5=$query5->fetch())
		{
			if($r5['uname']==$uname)
			{
				$count=$count+1;
				$_SESSION["count"]=$count;
			}
		}
		$query=$dbhandler->query('SELECT * FROM itemdata');
		while($r=$query->fetch())
		{
			$id=$r['bookid'];
			
			if($count<3)
			{
				if(isset($_GET[$id]))
				{
					$query1=$dbhandler->query("SELECT * FROM itemdata WHERE bookid ='$id'");
					$r1=$query1->fetch();
					if($r1['qauntity']!=0)
					{
						
						$qun=$r1['qauntity']-1;
						$sql="UPDATE itemdata SET qauntity='$qun' WHERE bookid ='$id'";
						$query2=$dbhandler->query($sql);
				
						$rid=uniqid();
						$uname=$_SESSION['uname'];
						$today=date("Y-m-d");
						$rdate = date('Y-m-d',strtotime($today.'+ 07 days'));
					
						
						$sql1="insert into requestdata (uname,bookid,requestid,rdate,rldate) values ('$uname','$id','$rid','$today','$rdate')";
						$query3=$dbhandler->query($sql1);
					
						$_SESSION["requestid"]=$rid;
						header("Location:mailsend.php");
					}
					else
					{
						header("Location:home.php?m12=Out of the Stock");
					}
				}	
				
			}else{
				header("Location:home.php?m11=Sorry you have reached your limit");
			}
		}
		
	}	
	else
	{
		header("Location:login.php");
	}
			/*else
			{
				header("Location:categories.php");
			}
		}
	}else
	{
		header("Location:login.php");
	}*/
?>
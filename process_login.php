<?php session_start();

require('includes/config.php');

	if(!empty($_POST))
	{
		$msg="";

		if(empty($_POST['usernm']))
		{
			$msg[]="no such user";
		}

		if(empty($_POST['pwd']))
		{
			$msg[]="password incorrect.";
		}


		if(!empty($msg))
		{
			echo '<b>error:-</b><br>';

			foreach($msg as $k)
			{
				echo '<li>'.$k;
			}
		}
		else
		{
			$unm=$_POST['usernm'];

			$q="select * from user where u_unm='$unm'";

			$res=mysqli_query($conn,$q) or die("wrong query");

			$row=mysqli_fetch_assoc($res);

			if(!empty($row))
			{
				if($_POST['pwd']==$row['u_pwd'])
				{
					$_SESSION=array();
					$_SESSION['unm']=$row['u_unm'];
					$_SESSION['uid']=$row['u_pwd'];
					$_SESSION['status']=true;

					if($_SESSION['unm']!="admin")
					{
						header("location:index.php");
					}
					else
					{
						header("location:admin/index.php");
					}
				}

				else
				{
					echo 'incorrect password....';
				}
			}
			else
			{
				echo 'invalid user';
			}
		}

	}
	else
	{
		header("location:index.php");
	}

?>

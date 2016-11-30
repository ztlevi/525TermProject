<?php session_start();

require('includes/config.php');

	if(!empty($_post))
	{
		$msg="";

		if(empty($_post['usernm']))
		{
			$msg[]="no such user";
		}

		if(empty($_post['pwd']))
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
			$unm=$_post['usernm'];

			$q="select * from user where u_unm='$unm'";

			$res=mysqli_query($conn,$q) or die("wrong query");

			$row=mysqli_fetch_assoc($res);

			if(!empty($row))
			{
				if($_post['pwd']==$row['u_pwd'])
				{
					$_session=array();
					$_session['unm']=$row['u_unm'];
					$_session['uid']=$row['u_pwd'];
					$_session['status']=true;

					if($_session['unm']!="admin")
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

<?php
include ("conn.php");
if(isset($_POST['submit']))
{
	$name=$_POST["log_acc"];
	$passowrd=$_POST["log_pw"];
	if ($name && $passowrd)
	{
		$sql = "SELECT * FROM test WHERE account='$name' and password='$passowrd'";
		$res = mysql_query($sql);
		$rows=mysql_num_rows($res);

		if($rows)
		{
			header("location:homepage.php");
			//exit;
		}
 		else
 		{
			echo "<script language=\"javascript\">alert('Please check your account and password!');history.go(-1)</script>";
		}
		mysqli_free_result($res);
		mysqli_close($mysqli);
	}

}
?>

<SCRIPT language=javascript>
function checknull()
{
	if (index.log_acc.value=="")
	{
		alert("Please input your account!");
		index.log_acc.focus();
		return false;
	}
	if (index.log_pw.value=="")
{
		alert("Please input your password!");
		index.log_pw.focus();
		return false;
	}

}
</SCRIPT>
<html>

<center>
<form action = "index.php" method = "post" name="index" onsubmit="return checknull();">
Input User Name:<input type="text" name="log_acc" size="28"/> <br>
Input Password:   <input type="password" name="log_pw" size="30" /> <br>
<input type="submit" name="submit" value="Login" /><br>
</from>
</center>
</html>
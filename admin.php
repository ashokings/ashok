<?php 
if (strftime("%H")>=3&&strftime("%H")<11)
{
echo "<center>";
echo '<table width=1350 border=0 bgcolor="yellow">';
echo '<td align="center"><a href="admin.php" target="main"><b>sign-up</b></a></td><td align="center"><a href="login1.php" target="main"><b>    log-in    </b></a></td><td align="center"><a href="myvote.php" target="main"><b>My Vote</b></a></td><td align="center"><a href="ad.php" target="main"><b>Admin</b></a></td><td align="center"><a href="profile.php" target="main"><b>Main</b></a></td>';
echo "</table>";
echo"</center>"; 
}else
{
	echo "<center>";
echo '<table width=1350 border=0 bgcolor="yellow">';
echo '<td align="center"><a href="admin.php" target="main"><b>Admin</b></a></td><td align="center"><a href="results.php" target="main"><b>Results</b></a></td>';
echo "</table>";
echo"</center>";
}
?>
<br>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="Style.css">
	<script type="text/javascript">
		function validate()
		{
			var rollnum=document.getElementById("roll").value;
			var reg=/^1[5-8][gG]21[aA]0[1-5][0-9a-zA-Z][0-9]$/;
			//alert(reg.test(rollnum));
			/*if(reg.test(rollnum))
				return true;
			else
			{
				alert("enter the co");
				return false;

			}*/
			if(reg.test(rollnum))
			{
				return true;
				
			}
			else
			{
				document.getElementById("lbl").style.visibility="visible";
				
				document.getElementById("lbl").style.color="red";
				return false;
			}
		}
	</script> 
</head>
<body bgcolor="gray">
	<center id="main-wrapper">
	<form name="form1" method="post" action="aut.php" onsubmit="return validate()">
		<b style='color:blue;font-size:25pt;'>student registration form</b><center><br><br>
		<table align="center">
			<tr>
				<td>
					Student Name:      
				</td>
				<td>
					<input type="text" name="sname" value="" required>
				</td>
			</tr>
			<tr>
				<td>Roll Number:<br></td>
				<td><input type="text" name="rollno" value="" id="roll" required>
				<label id="lbl" style="visibility: hidden;">INVALID ROLL NUMBER</label></td>
			</tr>
			<tr>
				<td>Password:</td>
				<td><input type="Password" name="pwd" value="" required></td>
			</tr>
			<tr>
				<td>Email:</td>
				<td><input type="email" name="email" value="" required></td>
			</tr>
			<tr>
				<td><input type="submit" name="submit" value="submit"></td>
				<td><input type="reset" name="cancel" value="cancel"></td>
			</tr>
		

		</table></center>
	</form>
	</center>
</body>
</html>
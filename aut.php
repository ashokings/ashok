<?php
if (strftime("%H")>3&&strftime("%H")<11)
{
echo "<center>";
echo '<table width=1350 border=0 bgcolor="yellow">';
echo '<td align="center"><a href="admin.php" target="main"><b>sign-up</b></a></td><td align="center"><a href="login1.php" target="main"><b>    log-in    </b></a></td><td align="center"><a href="myvote.php" target="main"><b>My Vote</b></a></td><td align="center"><a href="ad.php" target="main"><b>Admin</b></a></td>';
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
$conn=mysqli_connect("localhost","root","","student");
	$name=$_POST['sname'];
	$rollno=strtoupper($_POST['rollno']);
	$pwd=$_POST['pwd'];
	$email=$_POST['email'];

$incert=mysqli_query($conn,"insert into vote values('$name','$rollno','$pwd','$email','')");
if($incert)
{
echo "<center><b><p style='color:green;font-size:20;'><br> <br> <br> your successfully registered .........!</p></b></center>";
}
else
echo "<center><b><p style='color:red;font-size:20;'><br> <br> <br> your already registered ..............!</p></b></center>";
?>
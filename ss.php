<?php 
$conn=mysqli_connect("localhost","root","","student");
session_start();

$a=$_SESSION['rollno'];
$vote=mysqli_query($conn,"select cnd from vote where rollno='$a'");
$vote1=mysqli_fetch_assoc($vote);

	$vote2=$_POST['vote'];
echo "<center>";
echo '<table width=1350 border=0 bgcolor="yellow">';
echo '<td align="center"><a href="profile.php" target="main"><b>Main</b></a></td>';
echo "</table>";
echo"</center>"; 

if($vote1['cnd']=='')
{
	mysqli_query($conn,"update vote set cnd='$vote2' where rollno='$a'");
	echo "<center><b style='color:green;font-size:25;'>you have voted succesfully\n</b></center>";
	//echo "<marquee style='color:red;font-size:100px'>Thanks for Voting</marquee>";
}
else
{
	echo "<center><b style='color:red;font-size:25;'> your already voted........!</b></center>";
}
echo '<center><form name="form1" action="logout.php">';
echo '<input type="submit" value="logout"></form></center>';
?>


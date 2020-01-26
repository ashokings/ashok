<?php
if (strftime("%H")>=3&&strftime("%H")<11)
{
	echo "<marquee style='color:green;font-size:33px'><b>Voting is going on..........! going on..........! going on..........! going on..........!</b></marquee>";
}
else
{
	echo "<marquee style='color:red;font-size:33px'><b>Results out ..........! Results out ..........! Results out ..........! Results out ..........!</b></marquee>";
}
?>
<?php

$mysql=mysql_connect('localhost','root','sql') or die(mysql_error($mysql));
mysql_select_db("CrashReport");
echo" <table border='1' width='100%'>
<tr>
<th>DATE_TIME</th>
<th>IMEINO</th>
<th>SIGNAL_STRENGTH</th>
<th>AREA</th>
<th>OPERATOR</th>
<th>PHONE_MODEL</th>
<th>OS_VERSION</th>
<th>MANUFACTURER</th>
<th>BOARD</th>
<th>DISPLAY</th>
<th>BATTERY_TEMPERATURE</th>
<th>BATTERY_HEALTH</th>
<th>LOCATION</th>
</tr>";

$result2=mysql_query("SELECT * FROM details ",$mysql) or die("error");

while ($row=mysql_fetch_array($result2))
{
	echo "<tr align='center'>";
	echo "<td>".$row['Time']."</td>";
	echo "<td>".$row['IMEINO']."</td><td>".$row['Signal_strength']."</td><td>".$row['Area']."</td>";
	echo "<td>" . $row['Network_operator'] . "</td><td>" . $row['Phone_Model'] . "</td><td>" . $row['Phone_Os_Version'] . "</td><td> ".$row['MANUFACTURER']."</td><td>".$row['Board']."</td><td>".$row['Display']."</td><td>".$row['Battery_Temperature']."</td><td>".$row['Battery_Health']."</td><td>".$row['Location']."</td>" ;
	echo "</tr>" ;	
}
echo "</table>"
					
?>

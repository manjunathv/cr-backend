<?php
$host="localhost"; // Host name
$username="root"; // Mysql username
$password="sql"; // Mysql password
$db_name="CrashReport"; // Database name
$tbl_name="details"; // Table name

// Connect to server and select databse.
$link = mysql_connect("$host", "$username", "$password")or die("cannot connect");
mysql_select_db("$db_name")or die("cannot select DB");

$data=$_POST['data'];
echo "data from server is::" ;

$dataarr = (explode(",",$data));

$x= $dataarr;
$query = "INSERT INTO details (Time,IMEINO,Signal_strength,Area,Network_operator,Phone_Model,Phone_Os_Version,MANUFACTURER,Board,Display,Battery_Temperature,Battery_Health,Location) VALUES ('$x[0]','$x[1]','$x[2]','$x[3]',
'$x[4]','$x[5]','$x[6]','$x[7]','$x[8]','$x[9]','$x[10]','$x[11]','$x[12]')";


$ret_value=mysql_query($query);

foreach ($x as $value)
{
       echo $value . " | ";
}

if($ret_value)
{
       echo "Data inserted  Successfully";
}
else{
       echo "error in query running..   ";
       echo mysql_error($link);
}

?>        




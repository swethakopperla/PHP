<html>
<body>
<h1>
data base connection</h1>
<?php
$hostname="server.itblabs.com";
$username="root";
$password="Root@1234";
$dbname="swetha";
$usertable="empdtls";
$yourfield="id"
$conn = mysql_connect($hostname, $username, $password);
mysql_select_db($dbname, $connection);

# Check If Record Exists

$query = "SELECT * FROM $usertable";

$result = mysql_query($query);
if($results)
{
while($row=mysql_fetch_array($result))
{
$name=$row["$yourfield"];
echo "Name: ".$name." ";
}
}
mysql_close($conn);
?>
</body>
</html>


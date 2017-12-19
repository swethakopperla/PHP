<html>
<body>
<?oho
$hostname="localhost";
$username="root";
$password="Root@1234";
$dbname="swetha";
$usertable="empdtls";
$yourfield = "id";
$connection = mysql_connect($hostname, $username, $password);
mysql_select_db($dbname, $connection);

# Check If Record Exists

$query = "SELECT * FROM $usertable";

$result = mysql_query($query);

if($result)
{
while($row = mysql_fetch_array($result))
{
$name = $row["$yourfield"];
echo "Name: ".$name."<br> ";
}
}
?>
</body>
</html>

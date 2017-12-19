<html>
<body>
<?php
$host="localhost";
$user="root";
$pass="Root@1234";
$dbname="swetha";
$conn=mysqli_connect($host,$user,$pass,$dbname);
if(!$conn)
die("could not connect:".mysqli_connect_error());
else
echo "connected sucessfully<br>";
?>
</body>
</html>


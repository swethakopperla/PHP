<html>
<body>
<h1>
database connection
</h1>
<?php
$con =new mysqli("localhost","root","Root@1234");
if ($con->connect_error)
{
die('Could not connect: ' . $con->connect_error);
}echo "connected successfully";
?>
</body>
</html>


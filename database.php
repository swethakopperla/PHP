<html>
<body>
<h1>
database connection
</h1>
<?php
$con =new mysqli("localhost","wordpressuser","password");
if ($con->connect_error)
{
die('Could not connect: ' . $con->connect_error);
}echo "word press user connected successfully";
$sql = "use wordpress;";
if ($conn->query($sql) === TRUE) {
    echo "Database connected successfully";
} else {
    echo "Error creating database: " . $conn->error;
}
?>
</body>
</html>


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
$sql = "CREATE DATABASE DBSWE;";
if ($conn->query($sql) === TRUE) {
    echo "Database created successfully";
} else {
    echo "Error creating database: " . $conn->error;
}
?>
</body>
</html>


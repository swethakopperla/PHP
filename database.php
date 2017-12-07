<html>
<body>
<h1>
database connection
</h1>
<?php
$con = mysql_connect("localhost","root","Root@1234");
if (!$con)
{
die('Could not connect: ' . mysql_error());
}
  if (mysql_query("CREATE DATABASE database1",$con))
{
echo "Database created";
  }
  else
  {
    echo "Error creating database: " . mysql_error();
  }
// some code
mysql_close($con);
?>
</body>
</html>


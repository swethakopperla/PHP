<html>
<body>
<?php  
$host = 'localhost';  
$user = 'root';  
$pass = 'Root@1234';  
$dbname = 'swetha';  
$conn = mysqli_connect($host, $user, $pass,$dbname);  
if(!$conn){  
  die('Could not connect: '.mysqli_connect_error());  
}  
echo 'Connected successfully<br/>';  
  
$sql = 'SELECT * FROM empdtls';  
$retval=mysqli_query($conn, $sql);  
  
if(mysqli_num_rows($retval) > 0){  
 while($row = mysqli_fetch_assoc($retval)){  
    echo "EMP ID :{$row['empid']}  <br> ".  
         "EMP NAME : {$row['empname']} <br> ".  
         "EMP ROLE : {$row['emprole']} <br> ".
	"EMP SALARY : {$row['empsal']} <br> ".   
         "--------------------------------<br>";  
 } //end of while  
}else{  
echo "0 results";  
}  
mysqli_close($conn);  
?>  
</body>
</html>

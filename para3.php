<html>
<body>
<?php  
//add() function with two parameter  
function fullname($x,$y)    
{  
$fullname=$x." ".$y;  
echo "FULLNAME = $fullname <br><br>";  
}  

//call function, get  two argument through input box and click on add or sub button  
if(isset($_POST['fullname']))  
{  
//call add() function  
fullname($_POST['firstname'],$_POST['secondname']);  
}  
?>  
<form method="post">  
Enter first number: <input type="text" name="firstname"/><br><br>  
Enter second number: <input type="text" name="secondname"/><br><br>  
<input type="submit" name="fullname" value="FULLNAME"/>  
 
</form>
</body>
</html>
 

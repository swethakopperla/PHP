<html>
<body>
<form method="post">
Enter name:<input type="text" name="name"></br>
Enter email:<input type="text" name="email"></br>
<input type="submit" name="add">
<?php
 function name($name,$email)
{
  echo "name is : $name<br>";
  echo "email is : $email<br>";

}
if(isset($-POST['add'])
{
  
  name($_POST['name'],$_POST['email']);
}
?>
</body>
</html>


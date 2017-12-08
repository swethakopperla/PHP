<html>
<body>
<h1>
php functions</h1>
  <?php
  function hello(){
    echo "hello world";
  }
  hello();
  echo "<br>";
  function firstName($name)
  {
    echo "myname is:".$name."<br>";
    echo "$name refer<br>";
  }
  firstName("swetha");
  echo "<br>";
  firstName("uma");
  echo "<br>"."<br>";
  function fullName($fname,$lname)
  {
    echo "my first name is $fname <br>";
    echo "my last name is $lname <br>";
  }
  fullName("swetha","reddy");
  fullName("sai","uma");
  fullName("hari","charana");
  
  ?>
  </body>
</html>


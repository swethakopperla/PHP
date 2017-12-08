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
    echo "my first name is $fname and last name is $lname<br>";
      }
  fullName("swetha","reddy");
  fullName("sai","uma");
  fullName("hari","charana");
  echo "<h4>functions defaults values</h4><br>";
  function inter($x=10)
  {
    echo "value is $x<br>";
  }
  inter();
  inter(45);
  inter(5);
  
  ?>
  </body>
</html>


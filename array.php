<html>
<body>
<h1>
php arrays
</h1>
  <?php
$cars = array("Volvo", "BMW", "Toyota"); 
echo "I like " . $cars[0] . ", " . $cars[1] . " and " . $cars[2] . ".";
  echo "<br><br>";
  $season[0]="SUMMER";
  $season[1]="SPRIGS";
  $season[2]="WINTER";
  echo "seasons are : $season[0],$season[1],$season[2]";
  echo "<br>";
  $salary=array("Sonoo"=>"350000","John"=>"450000","Kartik"=>"200000");    
echo "Sonoo salary: ".$salary["Sonoo"]."<br/>";  
echo "John salary: ".$salary["John"]."<br/>";  
echo "Kartik salary: ".$salary["Kartik"]."<br/>";
  foreach($salary as $s)
  {
    echo "salary is :$s";
  }
?>
</body>
</html>

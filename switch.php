<html>
<body>

<?php
$favcolor = "blue";
switch ($favcolor) {
    case "red":
        echo "Your favorite color is red!";
        break;
    case "blue":
        echo "Your favorite color is blue!";
        break;
    case "green":
        echo "Your favorite color is green!";
        break;
    default:
        echo "Your favorite color is neither red, blue, nor green!";
}
    echo "<br>";
    $no = array(1,5,6,3,12,3); 

foreach ($no as $value) {
    echo "$value <br>";
}    echo "<br>";
    for($x=0;$x<=10;$x++)
    {
        echo "the number is :";
        echo $x;
            echo "</br>";
    } 
    echo "</br>";
    $x = 1; 

while($x <= 5) {
    echo "The number is: $x <br>";
    $x++;
}
    $name="John";
    $lastName="Travolta";
    echo $name." ".$lastName;
    echo "</br>"
  ?>
 
</body>
</html>

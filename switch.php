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
    echo "</br>";
    $x = 1; 

while($x <= 5) {
    echo "The number is: $x <br>";
    $x++;
}
?>
 
</body>
</html>

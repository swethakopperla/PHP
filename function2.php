<html>
<body>

<?php
function sum($x, $y) {
    $z = $x + $y;
    return $z;
}

echo "5 + 10 = " . sum(5,10) . "<br>";
echo "7 + 13 = " . sum(7,13) . "<br>";
echo "2 + 4 = " . sum(2,4);
    echo "<br>";
    function con($fname,$lname)
    {
        echo $fname." ".$lname;
       
    }
    con("swetha","reddy");
    echo "<br><br>";
    function wtf($blahblah = true) {
    $var1 = "ONe";
    $var2 = "tWo";

    if($blahblah === true) {
      return $var2;
    }
    return $var1;
}
?>
</body>
</html>

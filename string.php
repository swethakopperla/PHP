<html>
<body>
<h1>
string concepts
</h1>
<?php
$txt="hello world good moring";
  echo $txt;
   echo "<br>";
echo strlen($txt);
  echo "<br>";
echo str_word_count($txt);
  echo "<br>";
  echo strrev($txt);
   echo "<br>";
  echo strpos("Hello world!", "world");
  echo "<br>";
  echo strpos($txt, "world");
   echo "<br>";
  echo str_replace("world", "Dolly",$txt);
?>
</body>
</html>

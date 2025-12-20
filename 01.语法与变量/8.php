<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>php</title>
</head>
<body>
<?php
function test() {
   static $x=0;
   echo $x;
   $x++;
}

test(); #0
echo "<br>";
test(); #1
echo "<br>";
test(); #2
echo "<br>";
test(); #3
echo "<br>";
test(); #4
?>  
</body>
</html>
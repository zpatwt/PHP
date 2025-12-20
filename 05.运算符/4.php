<?php
$x=100; 
$y="100";
 
var_dump($x == $y);   //1
echo "1<br>";
var_dump($x === $y);   //2
echo "2<br>";
var_dump($x != $y);   //3
echo "3<br>";
var_dump($x !== $y);   //4
echo "4<br>";
 
$a=50;
$b=90;
 
var_dump($a > $b);   //5
echo "5<br>";
var_dump($a < $b);   //6
echo "6";
?>
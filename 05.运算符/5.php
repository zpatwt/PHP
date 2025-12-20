<?php
$x = array("a" => "boy", "b" => "girl"); 
$y = array("c" => "sechub", "d" => "study"); 
$z = $x + $y; // $x 和 $y 数组合并
var_dump($z);   //1
echo "<br>";
var_dump($x == $y);  //2
echo "<br>";
//全等比较
var_dump($x === $y);  //3
echo "<br>";
var_dump($x != $y);  //4
echo "<br>";
//不等比较 != <> 完全相同
var_dump($x <> $y);  //5
echo "<br>";
var_dump($x !== $y);  //6
?>
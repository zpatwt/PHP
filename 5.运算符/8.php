<?php
// 优先级： &&  >  =  >  and
// 优先级： ||  >  =  >  or
 
$a = 3;
$b = false;
$c = $a or $b;
var_dump($c);          // 这里的 $c 为 int 值3，而不是 boolean 值 true
$d = $a || $b;
//先判断$a || $b 非0值判断为true true ｜｜ false => true , $d = true
echo "<br>";
var_dump($d);          //这里的 $d 就是 boolean 值 true 
?>
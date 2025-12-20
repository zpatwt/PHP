<?php
$num=51;
switch ($num)
{
case $num>=90 && $num<=100:
            echo "你的成绩等级为A";
            break;
case $num>=80 && $num<90:
            echo "你的成绩等级为B";
            break;
case $num>=60 && $num<80:
            echo "你的成绩等级为C";
            break;
case $num>=0 && $num<60:
            echo "你的成绩等级为D";
            break;
default:
            echo "你输入的成绩有误，请重新输入.";
            break;
}
?>
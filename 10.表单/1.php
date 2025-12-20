<?php
if($q) {
        if($q =='nan') {
                echo 'nan老师精通python语言。';
        } else if($q =='Bob') {
                echo 'Bob老师精通Go语言。';
        } else if($q =='Tony') {
                echo 'Tony老师全能大师';
        }
} 
?>
<form action="" method="get"> 
    <select name="q">
    <option value="">选择老师:</option>
    <option value="nan">nan</option>
    <option value="Bob">Bob</option>
    <option value="Tony">Tony</option>
    </select>
    <input type="submit" value="提交">
    </form>
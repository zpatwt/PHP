<?php
// 1. 先判断 URL 里有没有 'q' 这个参数，防止报错
if (isset($_GET['q'])) {
    
    // 2. 从 $_GET 数组中取出 'q' 的值
    $q = $_GET['q']; 

    if ($q == 'nan') {
        echo 'you are a boy  !';
    } else if ($q == 'nv') {
        echo 'you are a girl  !';
    } else {
        echo "请进行选择！！";
    }
}
?>
<form action="" method="get"> 
    <input type="radio" name="q" value="nan" />男
    <input type="radio" name="q" value="nv" />女
    <input type="submit" value="提交">
</form>
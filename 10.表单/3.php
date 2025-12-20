<?php
$q = isset($_POST['q'])? $_POST['q'] : '';
if(is_array($q)) {
    $sites = array(
            'nan' => 'nan老师精通python语言。',
            'bob' => 'Bob老师精通Go语言。',
            'tony' => 'Tony老师全能大师',
    );
    //遍历数组
    foreach($q as $val) {
        
        echo $sites[$val] . "<br>";
    }
      
} else {
?><form action="" method="post"> 
    <input type="checkbox" name="q[]" value="nan"> nan<br> 
    <input type="checkbox" name="q[]" value="bob"> Bob<br> 
    <input type="checkbox" name="q[]" value="tony"> Tony<br>
    <input type="submit" value="提交">
</form>
<?php
}
?>
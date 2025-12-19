<?php

// Kickstart the framework
$f3=require('lib/base.php');

$f3->set('DEBUG',1);
if ((float)PCRE_VERSION<8.0)
    trigger_error('PCRE version is out of date');

highlight_file(__FILE__);
$a=$_GET['a'];
unset($f3->$a);

$f3->run();
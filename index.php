<?php
spl_autoload_register(function($class){
    $filePath = 'lib'.DIRECTORY_SEPARATOR.$class.".php";
    if(file_exists($filePath)){
	require_once $filePath;
    }
});
function caller(testable $obj){
     $obj->test_();
}

//$obj = new test();
//caller($obj);
$obj = new Second();
caller($obj);


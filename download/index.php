<?php
$target or $target	=$_GET['t'];
$cache_path=dirname(dirname(__FILE__)).'/cache/';

if($target){
	if($target=='zip'){
		$url='https://github.com/phpMyDomo/phpMyDomo/zipball/master';
		$file =$cache_path.'downloads.txt';
	}
	elseif($target=='gz'){
		$url="https://github.com/phpMyDomo/phpMyDomo/tarball/master";
		$file =$cache_path.'downloads.txt';
	}
	elseif($target=='github'){
		$url="https://github.com/phpMyDomo/phpMyDomo";
		$file =$cache_path.'github.txt';
	}
}

if(!$url){
	echo "Error!";
	exit;	
}
$count=file_get_contents($file);
file_put_contents($file, intval($count) +1);
header("location: $url");
?>
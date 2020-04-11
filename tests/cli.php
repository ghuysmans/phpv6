<?php
require_once('cases.php');
require_once('loader.php');

function fail() {
	global $failed;
	$failed = true;
	$bt = debug_backtrace(1);
	echo $bt[0]['file'] . ':' . $bt[0]['line'] . "\n";
}


$failed = false;
run();
if ($failed)
	exit(1);

<?php
require_once('tests/cases.php');
require_once('loader.php');

function fail() {
	die('fail');
}


header('Content-Type: text/plain');
echo "$impl\n";
for ($i=0; $i<200; $i++) {
	$start = microtime(true);
	for ($j=0; $j<100000; $j++)
		run();
	$dt = microtime(true) - $start;
	echo $dt . "\n";
}

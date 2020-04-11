<?php
define('ALLOWED', array('arr', 'mock', 'rep_n', 'rep_ot', 'rep_otm'));
if (isset($argv) && isset($argv[1]))
	$impl = $argv[1];
else if (isset($_GET) && isset($_GET['i']))
	$impl = $_GET['i'];
if (isset($impl) && in_array($impl, ALLOWED))
	require_once("impl/$impl.php");
else {
	echo 'pick i from {' . implode(', ', ALLOWED) . "}\n";
	exit(1);
}

<?php
require_once('impl/rep_n.php');

$p = strlen(inet_pton($_SERVER['SERVER_ADDR'])) == 16 ? 64 : 24;
//both values work for localhost addresses, too!

echo "Hi {$_SERVER['REMOTE_ADDR']}, you're from ";
if (have_same_subnet($_SERVER['REMOTE_ADDR'], $_SERVER['SERVER_ADDR'], $p))
	echo 'LAN.';
else
	echo 'WAN.';
